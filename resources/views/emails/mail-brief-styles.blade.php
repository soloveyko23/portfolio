@php
  $count = 0;
  $f27 = '';
@endphp
@if ($brief_type == 'brief-style')
  @php
    $arrTitles['1'] = 'Что представляет собой продукт?';
    $arrTitles['2'] = 'Суть бренда (основная идея (миссия) продукта)?';
    $arrTitles['3'] = 'УТП продукта';
    $arrTitles['4'] = '3 основные ценности продукта (рациональные и/или эмоциональные)?';
    $arrTitles['5'] = 'Какую выгоду потребителю дает каждая из вышеприведенных ценностей?';
    $arrTitles['6-1'] = '(1 группа) Какую выгоду потребителю дает каждая из вышеприведенных ценностей?';
    $arrTitles['6-2'] = '(1 группа) В каком процентном соотношении от общего потребления продукта его потребляет данная группа?';
    $arrTitles['6-3'] = '(2 группа) Какую выгоду потребителю дает каждая из вышеприведенных ценностей?';
    $arrTitles['6-4'] = '(2 группа) В каком процентном соотношении от общего потребления продукта его потребляет данная группа?';
    $arrTitles['6-5'] = '(3 группа) Какую выгоду потребителю дает каждая из вышеприведенных ценностей?';
    $arrTitles['6-6'] = '(3 группа) В каком процентном соотношении от общего потребления продукта его потребляет данная группа?';

    $arrTitles['7'] = 'Для чего ваш продукт нужен потребителю?';
    $arrTitles['8'] = 'Когда и как потребитель будет пользоваться вашим продуктом чаще всего?';
    $arrTitles['9'] = 'Является ли ваш продукт привычным для потребителя?';
    $arrTitles['9-1'] = 'Укажите эти улучшения';
    $arrTitles['9-2'] = 'Другое';

    $arrTitles['10'] = 'Какой покупкой является ваш продукт для потребителя: простой или сложной? Цепочка:';
    $arrTitles['11-1'] = 'В какой ситуации, при каких условиях чаще всего потребитель будет покупать ваш продукт?(Потребители 1 группы)';
    $arrTitles['11-2'] = 'В какой ситуации, при каких условиях чаще всего потребитель будет покупать ваш продукт?(Потребители 2 группы)';
    $arrTitles['11-3'] = 'В какой ситуации, при каких условиях чаще всего потребитель будет покупать ваш продукт?(Потребители 3 группы)';

    $arrTitles['12'] = 'Ценовая и статусная характеристики вашего продукта';
    $arrTitles['13'] = 'Почему потребитель захочет платить такую цену за продукт и какие атрибуты продукта убедят его в данном статусе вашего продукта?';

    $arrTitles['14-1'] = 'Конкурент 1';
    $arrTitles['14-2'] = 'Конкурент 2';
    $arrTitles['14-3'] = 'Конкурент 3';

    $arrTitles['14'] = 'Масштаб интересов:';
    $arrTitles['15'] = 'План дистрибуции вашего товара с указанием географических, временных и количественных показателей';
    $arrTitles['16'] = 'Что еще на ваш взгляд нам важно знать о продукте/бренде, чтобы наша работа была эффективнее?';
    $arrTitles['17'] = 'Для чего вам нужен логотип и/или фирменный стиль? Какие задачи должна решить разработка?';
    $arrTitles['18'] = 'Точки контакта и носители. Где ваш логотип/фирменный стиль будет чаще всего видеть потребитель?';
    $arrTitles['19'] = 'Какие ощущения у потребителя должно вызвать визуальное оформление?Какой образ и характер бренда должен быть сформирован?';
    $arrTitles['20'] = 'По каким критериям будет оцениваться эффективность разработки?';
    $arrTitles['21'] = 'Языковые версии (кириллица, латиница и т.д.)';
    $arrTitles['22'] = 'Название (для каждой языковой версии)';
    $arrTitles['23'] = 'Какие визуальные образы отражают суть вашего бренда?';
    $arrTitles['24'] = 'Какие образы и решения, на ваш взгляд, недопустимы для использования и почему?';
    $arrTitles['25'] = 'Какой ХАРАКТЕР логотипа и стиля, на ваш взгляд, предпочтителен для создания желаемого образа бренда (сдержанный, экспрессивный, романтичный, мужской, волевой и т.д.)?';
    $arrTitles['26'] = 'Какой ТИП логотипа, на ваш взгляд, предпочтителен для создания желаемого образа бренда?';
    $arrTitles['28'] = 'Какой СТИЛЬ/МЕТОД ГРАФИЧЕСКОГО РЕШЕНИЯ логотипа, на ваш взгляд, предпочтителен для создания желаемого образа бренда?';
    $arrTitles['29'] = 'Какие цвета (и их количество), на ваш взгляд, предпочтительны для создания желаемого образа бренда?';
    $arrTitles['30'] = 'Приведите примеры логотипы и стили других брендов, которые вы считаете удачными с точки зрения создания желаемого образа бренда и объясните почему?';
    $arrTitles['31'] = 'Приведите примеры логотипы и стили других брендов, которые вы считаете неудачными с точки зрения создания желаемого образа бренда и объясните почему?';
    $arrTitles['32'] = 'В производстве ваш фирменный стиль должен быть экономичным или допустимо использование нестандартных дизайнерских решений: необычная бумага, тиснение, вырубка, конгрев и прочее?';
    $arrTitles['33'] = 'Какие носители фирменного стиля необходимо разработать?';
    $arrTitles['34'] = 'Какого типа руководство по фирменному стилю вам нужно?';
    $arrTitles['35'] = 'Что ещё, что уточнит задачу по разработке фирменного стиля, нам необходимо знать?';
    $fields = [
      $brief_type ?? '',
      $f1 ?? '',
      $f2 ?? '',
      $f3 ?? '',
      $f4 ?? '',
      $f5 ?? '', 
      [$f6_1 ?? '',$f6_2 ?? '',$f6_3 ?? '',$f6_4 ?? '',$f6_5 ?? '',$f6_6  ?? ''], 
      $f7 ?? '',
      $f8 ?? '', 
      [$f9 ?? '',$f9_1 ?? '',$f9_2  ?? ''], 
      $f10 ?? '', 
      [$f11_1 ?? '',$f11_2 ?? '',$f11_3  ?? ''], 
      $f12 ?? '',
      $f13 ?? '', 
      [$f14  ?? '',  $f14_1 ?? '',$f14_2 ?? '',$f14_3 ?? ''], 
      $f15 ?? '',
      $f16 ?? '',
      $f17 ?? '',
      $f18 ?? '',
      $f19 ?? '',
      $f20 ?? '',
      $f21 ?? '',
      $f22 ?? '',
      $f23 ?? '',
      $f24 ?? '',
      $f25 ?? '',
      $f26 ?? '',
      $f27 ?? '',
      [$f28_1 ?? '',$f28_2 ?? '',$f28_3 ?? '',$f28_4 ?? '',$f28_5 ?? '',$f28_6 ?? '',$f28_7 ?? '',$f28_8 ?? '',$f28_9 ?? '',$f28_10 ?? '',$f28_11 ?? '',$f28_12 ?? '',$f28_13 ?? '',$f28_14 ?? '',$f28_15 ?? '',$f28_16 ?? '',$f28_17 ?? '',$f28_18 ?? '',$f28_19 ?? '',$f28_20 ?? '',$f28_21 ?? '',$f28_22  ?? ''],
      $f29 ?? '',
      $f30 ?? '',$f31 ?? '',$f32 ?? '',
      [$f33 ?? [],$f33_1 ?? '',$f33_2 ?? '',$f33_3  ?? ''],
      $f34 ?? '',
      $f35 ?? ''
    ];
    $arrPics[26] = ['1' => 'http://studio.mobios.work/img/brif/logo1.png',
      '2' => 'http://studio.mobios.work/img/brif/logo2.png',
      '3' => 'http://studio.mobios.work/img/brif/logo3.png',
      '4' => 'http://studio.mobios.work/img/brif/logo4.png',
      '5' => 'http://studio.mobios.work/img/brif/logo5.png',
      '6' => 'http://studio.mobios.work/img/brif/logo6.png',
      '7' => 'http://studio.mobios.work/img/brif/logo7.png',
      '8' => 'http://studio.mobios.work/img/brif/logo8.png',
      '9' => 'http://studio.mobios.work/img/brif/logo9.png',
      '10' => 'http://studio.mobios.work/img/brif/logo10.png',
      '11' => 'http://studio.mobios.work/img/brif/logo11.png',
      '12' => 'http://studio.mobios.work/img/brif/logo12.png'];

      $arrPics[28] = ['1' => '<img src="http://studio.mobios.work/img/brif/style1.png" alt="">
                                      <img src="http://studio.mobios.work/img/brif/style2.png" alt="">
                                      <img src="http://studio.mobios.work/img/brif/style3.png" alt="">
                                      <img src="http://studio.mobios.work/img/brif/style4.png" alt="">',
      '2' => ' <img src="http://studio.mobios.work/img/brif/style5.png" alt="">
                                      <img src="http://studio.mobios.work/img/brif/style6.png" alt="">
                                      <img src="http://studio.mobios.work/img/brif/style7.png" alt="">
                                      <img src="http://studio.mobios.work/img/brif/style8.png" alt="">',
      '3' => ' <img src="http://studio.mobios.work/img/brif/style9.png" alt="">
                                      <img src="http://studio.mobios.work/img/brif/style10.png" alt="">
                                      <img src="http://studio.mobios.work/img/brif/style11.png" alt="">
                                      <img src="http://studio.mobios.work/img/brif/style12.png" alt="">',
      '4' => ' <img src="http://studio.mobios.work/img/brif/style13.png" alt="">
                                      <img src="http://studio.mobios.work/img/brif/style14.png" alt="">
                                      <img src="http://studio.mobios.work/img/brif/style15.png" alt="">
                                      <img src="http://studio.mobios.work/img/brif/style16.png" alt="">',
      '5' => ' <img src="http://studio.mobios.work/img/brif/style17.png" alt="">
                                      <img src="http://studio.mobios.work/img/brif/style18.png" alt="">
                                      <img src="http://studio.mobios.work/img/brif/style19.png" alt="">
                                      <img src="http://studio.mobios.work/img/brif/style20.png" alt="">',
      '6' => ' <img src="http://studio.mobios.work/img/brif/style21.png" alt="">
                                      <img src="http://studio.mobios.work/img/brif/style22.png" alt="">
                                      <img src="http://studio.mobios.work/img/brif/style23.png" alt="">
                                      <img src="http://studio.mobios.work/img/brif/style24.png" alt="">',
      '7' => ' <img src="http://studio.mobios.work/img/brif/style25.png" alt="">
                                      <img src="http://studio.mobios.work/img/brif/style26.png" alt="">
                                      <img src="http://studio.mobios.work/img/brif/style27.png" alt="">
                                      <img src="http://studio.mobios.work/img/brif/style28.png" alt="">',
      '8' => ' <img src="http://studio.mobios.work/img/brif/style29.png" alt="">
                                      <img src="http://studio.mobios.work/img/brif/style30.png" alt="">
                                      <img src="http://studio.mobios.work/img/brif/style31.png" alt="">
                                      <img src="http://studio.mobios.work/img/brif/style32.png" alt="">',
      '9' => ' <img src="http://studio.mobios.work/img/brif/style33.png" alt="">
                                      <img src="http://studio.mobios.work/img/brif/style34.png" alt="">
                                      <img src="http://studio.mobios.work/img/brif/style35.png" alt="">
                                      <img src="http://studio.mobios.work/img/brif/style36.png" alt="">',
      '10' => ' <img src="http://studio.mobios.work/img/brif/style37.png" alt="">
                                      <img src="http://studio.mobios.work/img/brif/style38.png" alt="">
                                      <img src="http://studio.mobios.work/img/brif/style39.png" alt="">
                                      <img src="http://studio.mobios.work/img/brif/style40.png" alt="">',
      '11' => ' <img src="http://studio.mobios.work/img/brif/style41.png" alt="">
                                      <img src="http://studio.mobios.work/img/brif/style42.png" alt="">
                                      <img src="http://studio.mobios.work/img/brif/style43.png" alt="">
                                      <img src="http://studio.mobios.work/img/brif/style44.png" alt="">',
      '12' => ' <img src="http://studio.mobios.work/img/brif/style45.png" alt="">
                                      <img src="http://studio.mobios.work/img/brif/style46.png" alt="">
                                      <img src="http://studio.mobios.work/img/brif/style47.png" alt="">
                                      <img src="http://studio.mobios.work/img/brif/style48.png" alt="">',
      '13' => ' <img src="http://studio.mobios.work/img/brif/style49.png" alt="">
                                      <img src="http://studio.mobios.work/img/brif/style50.png" alt="">
                                      <img src="http://studio.mobios.work/img/brif/style51.png" alt="">
                                      <img src="http://studio.mobios.work/img/brif/style52.png" alt="">',
      '14' => ' <img src="http://studio.mobios.work/img/brif/style53.png" alt="">
                                      <img src="http://studio.mobios.work/img/brif/style54.png" alt="">
                                      <img src="http://studio.mobios.work/img/brif/style55.png" alt="">
                                      <img src="http://studio.mobios.work/img/brif/style56.png" alt="">',
      '15' => ' <img src="http://studio.mobios.work/img/brif/style57.png" alt="">
                                      <img src="http://studio.mobios.work/img/brif/style58.png" alt="">
                                      <img src="http://studio.mobios.work/img/brif/style59.png" alt="">
                                      <img src="http://studio.mobios.work/img/brif/style60.png" alt="">',
      '16' => ' <img src="http://studio.mobios.work/img/brif/style61.png" alt="">
                                      <img src="http://studio.mobios.work/img/brif/style62.png" alt="">
                                      <img src="http://studio.mobios.work/img/brif/style63.png" alt="">
                                      <img src="http://studio.mobios.work/img/brif/style64.png" alt="">',
      '17' => ' <img src="http://studio.mobios.work/img/brif/style65.png" alt="">
                                      <img src="http://studio.mobios.work/img/brif/style66.png" alt="">
                                      <img src="http://studio.mobios.work/img/brif/style67.png" alt="">
                                      <img src="http://studio.mobios.work/img/brif/style68.png" alt="">',
      '18' => ' <img src="http://studio.mobios.work/img/brif/style69.png" alt="">
                                      <img src="http://studio.mobios.work/img/brif/style70.png" alt="">
                                      <img src="http://studio.mobios.work/img/brif/style71.png" alt="">
                                      <img src="http://studio.mobios.work/img/brif/style72.png" alt="">',
      '19' => ' <img src="http://studio.mobios.work/img/brif/style73.png" alt="">
                                      <img src="http://studio.mobios.work/img/brif/style74.png" alt="">
                                      <img src="http://studio.mobios.work/img/brif/style75.png" alt="">
                                      <img src="http://studio.mobios.work/img/brif/style76.png" alt="">',
      '20' => ' <img src="http://studio.mobios.work/img/brif/style77.png" alt="">
                                      <img src="http://studio.mobios.work/img/brif/style78.png" alt="">
                                      <img src="http://studio.mobios.work/img/brif/style79.png" alt="">
                                      <img src="http://studio.mobios.work/img/brif/style80.png" alt="">',
      '21' => ' <img src="http://studio.mobios.work/img/brif/style81.png" alt="">
                                      <img src="http://studio.mobios.work/img/brif/style82.png" alt="">
                                      <img src="http://studio.mobios.work/img/brif/style83.png" alt="">
                                      <img src="http://studio.mobios.work/img/brif/style84.png" alt="">',
      '22' => ' <img src="http://studio.mobios.work/img/brif/style85.png" alt="">
                                      <img src="http://studio.mobios.work/img/brif/style86.png" alt="">
                                      <img src="http://studio.mobios.work/img/brif/style87.png" alt="">
                                      <img src="http://studio.mobios.work/img/brif/style88.png" alt="">'];
  @endphp
    <table style="width: 100%;">
      @php
        $count++
      @endphp
      @if($count%2) <tr> @else <tr style="background-color: #f8f8f8;"> @endif
        <td style='padding: 10px; border: #e9e9e9 1px solid;'><b>Название и адрес компании:</b></td>
        <td style='padding: 10px; border: #e9e9e9 1px solid;'>{{$company}}</td>
      </tr>
      @php
        $count++
      @endphp
      @if($count%2) <tr> @else <tr style="background-color: #f8f8f8;"> @endif
        <td style='padding: 10px; border: #e9e9e9 1px solid;'><b>ФИО:</b></td>
        <td style='padding: 10px; border: #e9e9e9 1px solid;'>{{$fio}}</td>
      </tr>
      @php
        $count++
      @endphp
      @if($count%2) <tr> @else <tr style="background-color: #f8f8f8;"> @endif
        <td style='padding: 10px; border: #e9e9e9 1px solid;'><b>Контактный телефон:</b></td>
        <td style='padding: 10px; border: #e9e9e9 1px solid;'>{{$phone}}</td>
      </tr>
      @php
        $count++
      @endphp
      @if($count%2) <tr> @else <tr style="background-color: #f8f8f8;"> @endif
      <td style='padding: 10px; border: #e9e9e9 1px solid;'><b>email:</b></td>
      <td style='padding: 10px; border: #e9e9e9 1px solid;'>{{$email}}</td>
      </tr>
    @for($i = 1; $i < 36; $i++)
      @if (!in_array($i,[6,9,11,14,26,27,28,33,34]))
        @php
            $count++
        @endphp
        @if($count%2) <tr> @else <tr style="background-color: #f8f8f8;"> @endif
          <td style='padding: 10px; border: #e9e9e9 1px solid;'><b>{{$arrTitles[$i]}}</b></td>
          <td style='padding: 10px; border: #e9e9e9 1px solid;'>
            {{$fields[$i]}}
          </td>
        </tr>
      @elseif($i == 6)
        @for($j = 0; $j < 6; $j++)
          @php
              $k = $i.'-'.($j+1);
          @endphp
            @php
              $count++
            @endphp
            @if($count%2) <tr> @else <tr style="background-color: #f8f8f8;"> @endif
              <td style='padding: 10px; border: #e9e9e9 1px solid;'><b>{{$arrTitles[$k]}}</b></td>
              <td style='padding: 10px; border: #e9e9e9 1px solid;'>{{$fields[$i][$j]}}</td>
            </tr>
        @endfor
      @elseif($i == 9)
        @php
            $count++
        @endphp
        @if($count%2) <tr> @else <tr style="background-color: #f8f8f8;"> @endif
          <td style='padding: 10px; border: #e9e9e9 1px solid;'><b>{{$arrTitles['9']}}</b></td>
          <td style='padding: 10px; border: #e9e9e9 1px solid;'> {{$fields[$i][0]}}</td>
        </tr>
        @php
            $count++
        @endphp
        @if($count%2) <tr> @else <tr style="background-color: #f8f8f8;"> @endif
          <td style='padding: 10px; border: #e9e9e9 1px solid;'><b>{{$arrTitles['9-1']}}</b></td>
          <td style='padding: 10px; border: #e9e9e9 1px solid;'> {{$fields[$i][1]}}</td>
        </tr>
        @php
            $count++
        @endphp
        @if($count%2) <tr> @else <tr style="background-color: #f8f8f8;"> @endif
          <td style='padding: 10px; border: #e9e9e9 1px solid;'><b>{{$arrTitles['9-2']}}</b></td>
          <td style='padding: 10px; border: #e9e9e9 1px solid;'> {{$fields[$i][2]}}</td>
        </tr>
      @elseif($i == 11)
        @php
            $count++
        @endphp
        @if($count%2) <tr> @else <tr style="background-color: #f8f8f8;"> @endif
          <td style='padding: 10px; border: #e9e9e9 1px solid;'><b>{{$arrTitles['11-1']}}</b></td>
          <td style='padding: 10px; border: #e9e9e9 1px solid;'> {{$fields[$i][0]}}</td>
        </tr>
        @php
            $count++
        @endphp
        @if($count%2) <tr> @else <tr style="background-color: #f8f8f8;"> @endif
          <td style='padding: 10px; border: #e9e9e9 1px solid;'><b>{{$arrTitles['11-2']}}</b></td>
          <td style='padding: 10px; border: #e9e9e9 1px solid;'> {{$fields[$i][1]}}</td>
        </tr>
        @php
          $count++
        @endphp
        @if($count%2) <tr> @else <tr style="background-color: #f8f8f8;"> @endif
          <td style='padding: 10px; border: #e9e9e9 1px solid;'><b>{{$arrTitles['11-3']}}</b></td>
          <td style='padding: 10px; border: #e9e9e9 1px solid;'> {{$fields[$i][2]}}</td>
        </tr>
      @elseif($i == 14)
        @php
          $count++
        @endphp
        @if($count%2) <tr> @else <tr style="background-color: #f8f8f8;"> @endif
          <td style='padding: 10px; border: #e9e9e9 1px solid;'><b>{{$arrTitles['14']}}</b></td>
          <td style='padding: 10px; border: #e9e9e9 1px solid;'> {{$fields[$i][0]}}</td>
        </tr>
        @php
        $count++
        @endphp
        @if($count%2) <tr> @else <tr style="background-color: #f8f8f8;"> @endif
          <td style='padding: 10px; border: #e9e9e9 1px solid;'><b>{{$arrTitles['14-1']}}</b></td>
          <td style='padding: 10px; border: #e9e9e9 1px solid;'> {{$fields[$i][1]}}</td>
        </tr>
        @php
          $count++
        @endphp
        @if($count%2) <tr> @else <tr style="background-color: #f8f8f8;"> @endif
          <td style='padding: 10px; border: #e9e9e9 1px solid;'><b>{{$arrTitles['14-2']}}</b></td>
          <td style='padding: 10px; border: #e9e9e9 1px solid;'> {{$fields[$i][2]}}</td>
        </tr>
        @php
          $count++
        @endphp
        @if($count%2) <tr> @else <tr style="background-color: #f8f8f8;"> @endif
          <td style='padding: 10px; border: #e9e9e9 1px solid;'><b>{{$arrTitles['14-3']}}</b></td>
          <td style='padding: 10px; border: #e9e9e9 1px solid;'> {{$fields[$i][3]}}</td>
        </tr>
      @elseif($i == 26 && $fields[26] )
        @php
          $count++
        @endphp
        @if($count%2  ) <tr> @else <tr style="background-color: #f8f8f8;"> @endif
          <td style='padding: 10px; border: #e9e9e9 1px solid;'><b>{{$arrTitles['26']}}</b></td>
          <td style='padding: 10px; border: #e9e9e9 1px solid;'> <img src="{{ $arrPics[26][$fields[26]] }}"></td>
        </tr>
      @elseif($i == 28){
        @php
          $count++
        @endphp
        @if($count%2) <tr> @else <tr style="background-color: #f8f8f8;"> @endif
          <td style='padding: 10px; border: #e9e9e9 1px solid;'><b>{{$arrTitles[$i]}}</b></td>
          <td style='padding: 10px; border: #e9e9e9 1px solid;'>
            @for($j = 0; $j < 22; $j++)
              @if( isset($fields[$i][$j]) && $fields[$i][$j] == 1 )
                {!!$arrPics[$i][$j+1]!!} <br />
              @endif
            @endfor
          </td>
        </tr>
      @elseif($i == 33)
        @php
          $count++
        @endphp
        @if($count%2) <tr> @else <tr style="background-color: #f8f8f8;"> @endif
          <td style='padding: 10px; border: #e9e9e9 1px solid;'><b>{{$arrTitles[$i]}}</b></td>
          <td style='padding: 10px; border: #e9e9e9 1px solid;'>
            @for($j = 0; $j <= 4; $j++) 
              @if ($j == 0 && isset($fields[$i][0]) )
                @php
                    echo implode('; ',$fields[$i][0]);
                @endphp
              @elseif( isset($fields[$i][$j]) )
                {{$fields[$i][$j]}} <br />
              @endif
            @endfor
          </td>
        </tr>
      @elseif($i == 34)
        @if (!empty($fields[$i]))
        @if($count%2  ) <tr> @else <tr style="background-color: #f8f8f8;"> @endif
          <td style='padding: 10px; border: #e9e9e9 1px solid;'><b>{{$arrTitles['34']}}</b></td>
          <td style='padding: 10px; border: #e9e9e9 1px solid;'>
            @php
              echo implode('; ',$fields[$i]);
            @endphp
          </td>
        </tr>
        @endif
      @endif
    @endfor
  </table>
@endif 