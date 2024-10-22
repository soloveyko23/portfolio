@extends('layouts.default')

@section('seo')
  <title>{{ trans('brief-seo.brief_title') }}</title>
  <meta name="description" content="{{ trans('brief-seo.brief_seo_description') }}">
  <link href="{{getLocaleUrl('brief-seo')}}" rel="canonical">

  <meta property="og:type" content="website">
  <meta property="og:title" content="{{ trans('brief-seo.brief_title') }}">
  <meta property="og:url" content="/brief-seo">
  <meta property="og:site_name" content="{{ trans('index.site_name') }}">
  <meta property="og:description" content="{{ trans('brief-seo.brief_seo_description') }}">
@endsection

{{-- @section('bodyClass')blackHeader @endsection --}}

@section('css')
  <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
  <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
  <link rel="stylesheet" href="{{ asset('css/mobapps.css') }}">
  <link rel="stylesheet" href="{{ asset('css/redesign.css') }}">
@endsection

@section('content')
  <main id="brief-seo">

    <div class="brief-seo brif GeometryBold">
      <!---->
      <section class="ads rel">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 center">
              <h1>{{ trans('brief-seo.brief_title') }}</h1>
              <p>
                {{ trans('brief-seo.brief_subtitle') }}
              </p>
              <span>{{ trans('brief-seo.brief_description') }}</span>
            </div>
          </div>
        </div>
      </section>
      <section class="brif-web">
        <div class="container">
          <div class="info-wrap">
            <div class="info-block">
              <p class="info-title">{{ trans('brief-seo.application') }}</p>
              <p class="info-text">{{ trans('brief-seo.brief_instructions') }}</p>
            </div>
            <div class="info-block">
              <p class="info-title">{{ trans('brief-seo.document_status') }}</p>
              <p class="info-text">{{ trans('brief-seo.brief_info_status') }}</p>
            </div>
            <div class="info-block">
              <p class="info-title">{{ trans('brief-seo.review_deadlines') }}</p>
              <p class="info-text">{{ trans('brief-seo.review_deadlines2') }}</p>
            </div>
            <div class="info-block">
              <p class="info-title">{{ trans('brief-seo.obligations') }}</p>
              <p class="info-text">{{ trans('brief-seo.obligations2') }}</p>
            </div>
            <div class="info-block">
              <p class="info-title">{{ trans('brief-seo.filling_difficulties') }}</p>
              <p class="info-text">{{ trans('brief-seo.filling_difficulties2') }}</p>
            </div>
          </div>
          <hr>
          <form id="brief" enctype="multipart/form-data" class="callback">
            <input type="hidden" name="brief_title" value="Заявка (Бриф СЕО)">
            <input type="hidden" name="admin_email" value="pm.mobios@gmail.com">
            <input type="hidden" name="form_subject" value="Новая заявка с mobios.ua (Бриф СЕО)">
            <input type="hidden" name="brief_type" value="brief-seo">
            <ol>
              <div class="name center">{{ trans('brief-seo.general_info') }}</div>
              <li>
                <p>{{ trans('brief-seo.site_domain') }}</p>
                <label class="w100">{{ trans('brief-seo.full_short_name') }}
                  <textarea name="f1" required="required" class="materialize-textarea"></textarea>
                </label>
              </li>
              <li>
                <p>{{ trans('brief-seo.company_name') }}</p>
                <textarea name="f2" required="required" class="materialize-textarea"></textarea>
              </li>
              <li>
                <p>{{ trans('brief-seo.market_experience') }}</p>
                <label class="w100">
                  <textarea name="f3" required="required" class="materialize-textarea"></textarea>
                </label>
              </li>
              <li>
                <p>{{ trans('brief-seo.physical_address') }}</p>
                <label class="w100">
                  <textarea name="f4" required="required" class="materialize-textarea"></textarea>
                </label>
              </li>
              <li>
                <p>{{ trans('brief-seo.prior_promotion_experience') }}</p>
                <label class="w100">
                  <textarea name="f5" required="required" class="materialize-textarea"></textarea>
                </label>
              </li>
              <li>
                <p>{{ trans('brief-seo.target_regions') }}</p>
                <label class="w100">
                  <textarea name="f6" required="required" class="materialize-textarea"></textarea>
                </label>
              </li>
              <li>
                <p>{{ trans('brief-seo.main_keywords') }}</p>
                <label class="w100">
                  <textarea name="f7" required="required" class="materialize-textarea"></textarea>
                </label>
              </li>
              <li>
                <p>{{ trans('brief-seo.priority_pages') }}</p>
                <label class="w100">
                  <textarea name="f8" required="required" class="materialize-textarea"></textarea>
                </label>
              </li>
              <li>
                <p>{{ trans('brief-seo.promotion_goals1') }}</p>
                <span
                  style="display: inline-block; font-size: 13px; width: 50%;">{{ trans('brief-seo.promotion_goals2') }}</span>
                <label class="w100">
                  <textarea name="f9" required="required" class="materialize-textarea"></textarea>
                </label>
              </li>
              <li>
                <p>{{ trans('brief-seo.penalties') }}</p>
                <label class="w100">
                  <textarea name="f10" required="required" class="materialize-textarea"></textarea>
                </label>
              </li>
              <li>
                <p>{{ trans('brief-seo.competitive_advantages') }}:</p>
                <label class="w100">
                  <textarea name="f11" required="required" class="materialize-textarea"></textarea>
                </label>
              </li>
              <li style="padding-bottom: 10px; border-bottom: 1px solid rgb(221, 221, 220);">
                <p>{{ trans('brief-seo.client_discovery_methods') }}</p>
                <input id="seo1" type="checkbox" name="f12[]" value="От других клиентов">
                <label for="seo1"> {{ trans('brief-seo.from_other_clients') }}</label>
                <br>
                <input id="seo2" type="checkbox" name="f12[]" value="Наружная реклама">
                <label for="seo2"> {{ trans('brief-seo.outdoor_advertising') }}</label>
                <br>
                <input id="seo3" type="checkbox" name="f12[]" value="Медиа-реклама">
                <label for="seo3"> {{ trans('brief-seo.media_advertising') }}</label>
                <br>
                <input id="seo4" type="checkbox" name="f12[]" value="Интернет-реклама">
                <label for="seo4"> {{ trans('brief-seo.internet_advertising') }}</label>
                <br>
                <input id="seo5" type="checkbox" name="f12[]" value="Другое">
                <label for="seo5"> {{ trans('brief-seo.other') }}</label>
                <br>
              </li>
              <li>
                <p>{{ trans('brief-seo.counters_added') }}:</p>
                <p>Yandex, Google Analytics, Google Tag Manager</p>
                <p>{{ trans('brief-seo.counters_access') }}</p>
                <textarea name="f13" class="materialize-textarea"></textarea>
              </li>
            </ol>
            <hr>
            <div class="garant">
              <div class="name center">{{ trans('brief-seo.contact_info') }}</div>
              <p>{{ trans('brief-seo.full_name') }}</p>
              <label class="w100">
                <textarea name="user_fio" required="required" class="materialize-textarea"></textarea>
              </label>
              <p>{{ trans('brief-seo.contact_phone') }}</p>
              <label class="w100">
                <textarea name="user_p" required="required" class="materialize-textarea"></textarea>
              </label>
              <p>{{ trans('brief-seo.email') }}</p>
              <label class="w100">
                <textarea name="user_email" required="required" class="materialize-textarea"></textarea>
              </label>
              <div class="check-garant">
                <input id="test1" type="checkbox" name="private"
                       value="Гарантирую правильность сведений, указанных в данном брифе."
                       required="required">
                <label for="test1">{{ trans('brief-seo.guarantee') }}</label>
              </div>
            </div>

            <div class="btnSubmit">
              <button id="feedbackSubmit" type="submit" value="{{ trans('brief-seo.send') }}" name="action"
                      class="btnOpenModalBrif">
                {{ trans('index.send_button') }}
              </button>
            </div>

          </form>
        </div>

      </section>
    </div>
  </main>

  <style>
    ol {
      list-style: auto !important;
      padding-left: 40px;
    }

    @media screen and (max-width: 480px) {
      ol {
        padding-left: 20px;
      }
    }

    .thxForm .closeFormPopup {
      width: 15px;
      height: 20px;
      position: absolute;
      right: 5px;
      top: 5px;
      cursor: pointer;
      display: block
    }

    .thxForm .closeFormPopup:before {
      content: "X";
      font-size: 16px;
      font-weight: 700;
      color: #000
    }

    .thxForm-wrap {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      justify-content: center;
      text-align: center;
      height: 100%;
      padding: 15px
    }

    .thxForm p {
      font-size: 16px
    }

    @keyframes blink-animation {
      to {
        visibility: hidden
      }

    }

    @-webkit-keyframes blink-animation {
      to {
        visibility: hidden
      }

    }

    .animated_blink {
      animation: blink-animation 1s steps(2, start) infinite;
      -webkit-animation: blink-animation 1s steps(2, start) infinite
    }

    .brif .ads {
      background-color: #222831;
      margin-top: 84px;
    }

    @media screen and (max-width: 1200px) {
      .brif .ads {
        margin-top: 111px;
      }
    }

    @media screen and (max-width: 992px) {
      .brif .ads {
        margin-top: 80px !important;
      }
    }

    .brif .adsLeft {
      padding-bottom: 43px
    }

    .brif .ads h1 {
      font-size: 46px;
      color: #fff;
      text-transform: uppercase;
      letter-spacing: 3px;
      line-height: 114%;
      padding: 32px 0 20px 0;
      margin: 0
    }

    .brif .ads p {
      color: #fff;
      font-size: 16px;
      line-height: 17px
    }

    .brif .ads span {
      color: #fff;
      font-size: 14px;
      line-height: 17px;
      display: block;
      margin: 17px 0 40px
    }

    .brif-web .info-wrap .info-title {
      font-size: 20px;
      color: #222;
      text-transform: uppercase
    }

    .brif-web .info-wrap .info-text {
      font-size: 14px;
      color: #222
    }

    .brif .brif-web {
      margin-bottom: 50px
    }

    .brif .brif-web .name {
      color: #000;
      font-size: 30px;
      font-weight: 400;
      line-height: 24px;
      text-transform: uppercase;
      margin: 35px 0
    }

    .brif .brif-web li,
    .brif .brif-web p {
      color: #000;
      font-size: 17px;
      margin-top: 15px
    }

    .brif .brif-web li {
      font-weight: 700
    }

    .brif .brif-web p.alert {
      color: #000;
      font-size: 17px;
      text-align: center
    }

    .brif .brif-web #feedbackSubmit {
      color: #00b2d8;
      font-size: 18px;
      background-position-x: 80%;
      border: 2px solid #00b2d8;
      padding: 10px 50px;
      text-transform: lowercase;
      letter-spacing: 1px;
      margin: 18px 0;
      background: transparent;
      -webkit-transition: all .3s;
      transition: all .3s
    }

    .brif .brif-web #feedbackSubmit:hover {
      color: #fff;
      background-color: #00b2d8
    }

    .brif .brif-web label {
      color: #3b3b3b;
      font-size: 14px
    }

    .brif .brif-web label.w100 {
      color: #3b3b3b;
      font-size: 14px;
      width: 100%;
      display: inline-block
    }

    .brif .brif-web input {
      border: none;
      background: #fff
    }

    .brif .brif-web input.file-path {
      width: 100%
    }

    .brif .brif-web input[type=file] {
      width: 100%;
      height: 100%;
      opacity: 0;
      display: inline-block;
      position: absolute;
      top: 0;
      left: 0;
      cursor: pointer
    }

    .brif .brif-web input[type=file]:hover {
      cursor: pointer
    }

    .brif .brif-web .file-path-wrapper {
      display: inline-block;
      margin-top: 25px;
      width: 65%
    }

    .brif .brif-web textarea {
      background-color: transparent;
      border: none;
      border-bottom: 1px solid #dddddc;
      border-radius: 0;
      outline: none;
      height: 3rem;
      min-height: 3rem;
      width: 100%;
      font-size: 16px;
      -webkit-box-shadow: none;
      box-shadow: none;
      -webkit-box-sizing: content-box;
      box-sizing: content-box;
      -webkit-transition: all .3s;
      transition: all .3s;
      color: #000;
      overflow-y: hidden;
      padding: 1.6rem 0;
      resize: none
    }

    .brif .brif-web .mod {
      position: fixed;
      display: none;
      top: 30%;
      z-index: 1000;
      width: 500px;
      text-align: center;
      margin: 0 auto;
      left: 0;
      right: 0;
      background: #7cb8c9;
      padding: 50px 0;
      color: #fff;
      -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, .18), 0 4px 15px 0 rgba(0, 0, 0, .15);
      box-shadow: 0 5px 11px 0 rgba(0, 0, 0, .18), 0 4px 15px 0 rgba(0, 0, 0, .15);
      letter-spacing: .5px;
      text-transform: uppercase;
      border-radius: 2px
    }

    .brif .brif-web .mod a {
      background-color: #fff;
      padding: 9px 45px;
      color: red;
      -webkit-box-shadow: 2px 2px 3px rgba(0, 0, 0, .25);
      box-shadow: 2px 2px 3px rgba(0, 0, 0, .25)
    }

    .brif .brif-web input:not([type]):focus:not([readonly]),
    .brif .brif-web input[type=date]:focus:not([readonly]),
    .brif .brif-web input[type=datetime-local]:focus:not([readonly]),
    .brif .brif-web input[type=email]:focus:not([readonly]),
    .brif .brif-web input[type=number]:focus:not([readonly]),
    .brif .brif-web input[type=password]:focus:not([readonly]),
    .brif .brif-web input[type=search]:focus:not([readonly]),
    .brif .brif-web input[type=tel]:focus:not([readonly]),
    .brif .brif-web input[type=text]:focus:not([readonly]),
    .brif .brif-web input[type=time]:focus:not([readonly]),
    .brif .brif-web input[type=url]:focus:not([readonly]),
    .brif .brif-web textarea.materialize-textarea:focus:not([readonly]) {
      border-bottom: 1px solid #00b2d8;
      -webkit-box-shadow: 0 1px 0 0 #00b2d8;
      box-shadow: 0 1px 0 0 #00b2d8
    }

    .brif .brif-web ::-webkit-input-placeholder {
      color: #666;
      font-family: MyriadProIt_7, sans-serif;
      padding-left: 10px
    }

    .brif .brif-web ::-moz-placeholder {
      color: #666;
      font-family: MyriadProIt_7, sans-serif;
      padding-left: 10px
    }

    .brif .brif-web ::-ms-input-placeholder {
      color: #666;
      font-family: MyriadProIt_7, sans-serif;
      padding-left: 10px
    }

    .brif .brif-web :-moz-placeholder {
      color: #666;
      font-family: MyriadProIt_7;
      padding-left: 10px
    }

    .brif .brif-web .btn {
      color: #000;
      font-size: 18px;
      border: 2px solid #00b2d8;
      padding: 5px 50px;
      text-transform: uppercase;
      margin: 18px 0;
      display: inline-block;
      position: relative;
      cursor: pointer;
      float: left
    }

    .brif .brif-web .btn:hover {
      color: #fff;
      background: #00b2d8
    }

    .brif .brif-web table {
      width: 100%;
      display: table
    }

    .brif .brif-web td {
      height: 60px
    }

    .brif .brif-web td,
    th {
      padding: 15px 5px;
      display: table-cell;
      vertical-align: middle;
      text-align: center;
      position: relative
    }

    .brif .brif-web td label {
      width: 100%;
      height: 100%;
      display: block;
      position: absolute;
      top: 0;
      left: 0
    }

    .garant {
      margin-top: 80px
    }

    .garant p {
      font-size: 14px !important;
      font-weight: 700
    }

    .check-garant {
      margin: 20px 0;
      text-align: center
    }

    .check-garant label {
      color: #0aa4dd !important
    }

    @media (max-width: 767px) {
      .brif .ads h1 {
        font-size: 22px
      }

      .brif .ads p {
        font-size: 15px
      }

      .brif .ads {
        padding-top: 60px
      }

    }
  </style>
@endsection

@section('bottom-scripts')
  <script src="{{ asset('js/libs.js') }}"></script>
  <script>
      $('#brief').on('submit', () => {
          brifSend()
      });

      function brifSend() {
          var form = $("#brief").serialize();
          $.ajax({
              type: "POST",
              url: "/brief/send",
              data: form
          }).done(function (e) {

              $('#popupmessage').addClass('active thanks success')
          });
      }
  </script>
@endsection
