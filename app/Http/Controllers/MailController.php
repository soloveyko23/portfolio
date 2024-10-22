<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Validator;
use stdClass;

class MailController extends Controller
{



  public function sendMail(Request $request)
  {

    $validator = Validator::make($request->all(), ['g-recaptcha-response' => 'required']);
    if ($validator->fails()) {
      return response()->json($validator->errors(), 422);
    }

    if (!$this->captchaVerify($request->get('g-recaptcha-response'))) {
      return response()->json(['error' => 'Captcha verification failed'], 422);
    }

    $this->sendTelegram();

    $data = $request->all();
    $data['subject'] = 'Оставлена заявка (mobios.ua)';
    $data['_view'] = 'emails.site_request';
    $recipients = config('mail.admin_recipients');
    try {
      Mail::send(Arr::get($data, '_view', 'not.found.view'), $data, function ($message) use ($data, $recipients) {
        $message->from(config('mail.from.address'), config('mail.from.name'));
        $message->to($recipients)->subject(Arr::get($data, 'subject', ''));
      });
    } catch (\Exception $e) {
      return response()->json(['error' => $e->getMessage()]);
    }
    return response()->json('Mail sent');
  }



  public function sendBrief(Request $request)
  {
    $data = $request->all();
    $data['subject'] = $request->brief_title . '(mobios.ua)';
    $data['_view'] = 'emails.brief';
    $recipients = config('mail.admin_recipients');
    try {
      Mail::send(Arr::get($data, '_view', 'not.found.view'), $data, function ($message) use ($data, $recipients) {
        $message->from(config('mail.from.address'), config('mail.from.name'));
        $message->to($recipients)->subject(Arr::get($data, 'subject', ''));
      });
    } catch (\Exception $e) {
      return response()->json(['error' => $e->getMessage()], 422);
    }
    return response()->json('Mail sent');
  }





  public function captchaVerify($recaptcha_response)
  {
    $data = array(
      'secret' =>  config('services.captcha.secret'),
      'response' => $recaptcha_response
    );
    $verify = curl_init();
    curl_setopt($verify, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
    curl_setopt($verify, CURLOPT_POST, true);
    curl_setopt($verify, CURLOPT_POSTFIELDS, http_build_query($data));
    curl_setopt($verify, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($verify, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($verify);
    if ($response == true) {
      return true;
    }
    return false;
  }



  public function sendTelegram()
  {
    $url = config('services.telegram.api_check_url');
    $data = new stdClass;

    $data->secret = config('services.telegram.secret_key');


    if (isset($_REQUEST['user_email'])) {
      $data->user_email = $_REQUEST['user_email'];
    }
    if (isset($_REQUEST['url'])) {
      $data->url = $_REQUEST['url'];
    }
    if (isset($_REQUEST['user_name'])) {
      $data->user_name = $_REQUEST['user_name'];
    }
    if (isset($_REQUEST['user_phone'])) {
      $data->user_phone = $_REQUEST['user_phone'];
    }
    if (isset($_REQUEST['user_message'])) {
      $data->user_message = $_REQUEST['user_message'];
    }

    $bot_api_key = config('services.telegram.bot_api_key');
    $api_url = config('services.telegram.api_url');

    $options = array(
      'http' => array(
        'header'  => "Content-type: application/json\r\n",
        'method'  => 'POST',
        'content' => json_encode($data),
      )
    );

    $context  = stream_context_create($options);
    $result = file_get_contents($url, false, $context);
    if ($result === FALSE) {
      echo $result;
    }

    $text = 'Оставлена заявка (mobios.ua)';
    if (isset($_REQUEST['user_email'])) {
      $text .= 'E-mail: ' . $_REQUEST['user_email'] . '';
    }
    $text .= 'Имя: ' . $_REQUEST['user_name'] . '';
    $text .= 'Телефон: ' . $_REQUEST['user_phone'] . '';
    $text .= 'Сообщение: ' . $_REQUEST['user_message'] . '';

    $website = $api_url . $bot_api_key;

    $chat_ids = config('services.telegram.chat_ids');
    foreach ($chat_ids as $chat_id) {
      $params = [
        'chat_id' => $chat_id,
        'text' => $text,
      ];
      $ch = curl_init($website . '/sendMessage');
      curl_setopt($ch, CURLOPT_HEADER, false);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_POST, 1);
      curl_setopt($ch, CURLOPT_POSTFIELDS, ($params));
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
      $result = curl_exec($ch);
      curl_close($ch);
    }
  }
}
