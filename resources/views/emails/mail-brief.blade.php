@php 
  $count = 0;
  $fields = [
    $project_name  ?? '',
    $admin_email  ?? '',
    $form_subject  ?? '',
    $companyName  ?? '',
    $company_buisness  ?? '',
    $web_company_competitors  ?? '',
    $company_Geography  ?? '',
    $termins  ?? '', 
    // $file1  ?? '',
    $refinement  ?? '', //10
    $responsible_person  ?? '',
    $site_prupose  ?? '',
    $user_needs  ?? '',
    $custom_audience  ?? '',
    $content_management_system  ?? '',
    $content_management_system_custom  ?? '',
  
    $site_languages  ?? '',
    $basic_requirements  ?? '',//20
    $sections_of_the_site  ?? '',
    $site_menu  ?? '',
    $site_information_block  ?? '',
    $site_like  ?? '',
    $site_dislike  ?? '',
    $general_site_composition  ?? '',
    $general_site_composition_custom  ?? '',
    $site_associations  ?? '',
    $site_associations_custom  ?? '',
    $site_gamma  ?? '',
    $site_gamma_custom  ?? '',
    $site_primary_requirements  ?? '',
    $colors_no_use  ?? '',
    $colors_uose  ?? '',
    $site_source_bg  ?? '',
    $costom_color  ?? '',
    $type_header_illustration  ?? '',
    $link_sites_like  ?? '',
    $site_fonts  ?? '',
    $site_fonts_custom  ?? '',
    $site_resolution  ?? '',
    $site_resolution_custom  ?? '',
    $user_fio  ?? '',
    $user_p  ?? '',
    $user_mail  ?? '',
    $private ?? ''
  ];
  $title = [
    'project_name',
    'admin_email',
    'form_subject',
    'Название компании',
    'Область деятельности, направление бизнеса вашей компании',
    'Адреса сайтов ваших основных конкурентов',
    'География работы компании',
    'Сроки и Бюджет',
    // 'Вышлите фирменный стиль компании и логотип',
    'Вышлите фирменный стиль компании и логотип', //10
    'Ответственное лицо',
    'Цели сайта',
    'Потребности пользователей',
    'Пользовательская аудитория', 
    'Система управления контентом',
    'Система управления контентом(другое)',
 
    'Какие языковые версии планируются на сайте? Чем они будут отличаться между собой',
    'Основные требования и пожелания по функционалу сайта',//20
    'Разделы сайта',
    'Навигация по сайту',
    'Информационные блоки',
    'Приведите примеры сайтов, которые вам нравятся',
    'Приведите примеры сайтов, которые вам не нравятся',
    'Общая композиция сайта (выделите подходящий вариант)',
    'Общая композиция сайта(другое)',
    'Настроение и ассоциации, которые должен вызывать дизайн',
    'Настроение и ассоциации, которые должен вызывать дизайн(другое)',
    'Цветовая гамма и насыщенность',
    'Цветовая гамма и насыщенность(другое)',
    'Основные требования и пожелания по концепции дизайна сайта',
    'Цвета, которые нельзя использовать',
    'Цвета, которые можно использовать',
    'Основной фон сайта',
    'Основной фон сайта свой',
    'Какая сложная графика нужна на сайте',
    'Укажите ссылки на наши работы, дизайн или структура которых вам нравится',
    'Предпочтения относительно шрифтов ',
    'Предпочтения относительно шрифтов(другое)',
    'На какое разрешение экранов разрабатывать дизайн',
    'На какое разрешение экранов разрабатывать дизайн(другое)',
    'Ваше ФИО',
    'Ваш Контактный телефон',
    'Ваш email',
    'Гарантия правильности сведений',
  ]
@endphp

<table style="width: 100%;">
  @for($i = 0; $i < 48; $i++)
  @if (!empty($fields[$i]))
    @php
        $count++
    @endphp
    @if($count%2) <tr> @else <tr style="background-color: #f8f8f8;"> @endif
    <td style='padding: 10px; border: #e9e9e9 1px solid;'><b>{{$title[$i]}}</b></td>
    <td style='padding: 10px; border: #e9e9e9 1px solid;'> {{$fields[$i]}}</td>
  </tr> 
  @endif
  @endfor
  @if (!empty($color_gamma_cold))
    @php
      $count++
    @endphp
    @if($count%2) <tr> @else <tr style="background-color: #f8f8f8;"> @endif
      <td style='padding: 10px; border: #e9e9e9 1px solid;'><b>'Цветовая гамма(холодные тона)'</b></td>
      <td style='padding: 10px; border: #e9e9e9 1px solid;'>
        @for($i=0; $i< count($color_gamma_cold); $i++ )
          {{$color_gamma_cold[$i]}}
        @endfor
      </td>
    </tr>
  @endif
  @if (!empty($color_gamma_warm))
    @php
      $count++
    @endphp
    @if($count%2) <tr> @else <tr style="background-color: #f8f8f8;"> @endif
      <td style='padding: 10px; border: #e9e9e9 1px solid;'><b>Цветовая гамма(теплые тона)</b></td>
      <td style='padding: 10px; border: #e9e9e9 1px solid;'>
        @for($i=0; $i< count($color_gamma_warm); $i++ )
        {{$color_gamma_warm[$i]}}  <br>
        @endfor
      </td>
    </tr>
  @endif
  @if (!empty($fuctional_type))
    @php
      $count++
    @endphp
    @if($count%2) <tr> @else <tr style="background-color: #f8f8f8;"> @endif
      <td style='padding: 10px; border: #e9e9e9 1px solid;'><b>Предполагаемый тип сайта</b></td>
      <td style='padding: 10px; border: #e9e9e9 1px solid;'>
        @php
          echo implode('; ',$fuctional_type);
        @endphp
      </td>
    </tr>
  @endif
  @if (!empty($fuctional_type_custom))
    @php
      $count++
    @endphp
    @if($count%2) <tr> @else <tr style="background-color: #f8f8f8;"> @endif
      <td style='padding: 10px; border: #e9e9e9 1px solid;'><b>Предполагаемый тип сайта другие:</b></td>
      <td style='padding: 10px; border: #e9e9e9 1px solid;'>
          {{$fuctional_type_custom}}
      </td>
    </tr>
  @endif

   @if (!empty($Site_functionality))
    @php
      $count++
    @endphp
    @if($count%2) <tr> @else <tr style="background-color: #f8f8f8;"> @endif
      <td style='padding: 10px; border: #e9e9e9 1px solid;'><b>Функциональные возможности сайта</b></td>
      <td style='padding: 10px; border: #e9e9e9 1px solid;'>
        @php
          echo implode('; ',$Site_functionality);
        @endphp
      </td>
    </tr>
  @endif
  @if (!empty($Site_functionality_custom))
    @php
      $count++
    @endphp
  @if($count%2) <tr> @else <tr style="background-color: #f8f8f8;"> @endif
    <td style='padding: 10px; border: #e9e9e9 1px solid;'><b>Функциональные возможности сайта другие:</b></td>
    <td style='padding: 10px; border: #e9e9e9 1px solid;'>
        {{$Site_functionality_custom}}
    </td>
  </tr>
  @endif
  @if (!empty($isSite_photo_source))
    @php
      $count++
    @endphp
    @if($count%2) <tr> @else <tr style="background-color: #f8f8f8;"> @endif
      <td style='padding: 10px; border: #e9e9e9 1px solid;'><b>Наличие фотоматериалов для разработки визуальной концепции (есть, нету):</b></td>
      <td style='padding: 10px; border: #e9e9e9 1px solid;'>
          {{$isSite_photo_source}}
      </td>
    </tr>
  @endif
  @if (!empty($site_photo_source))
    @php
      $count++
    @endphp
    @if($count%2) <tr> @else <tr style="background-color: #f8f8f8;"> @endif
      <td style='padding: 10px; border: #e9e9e9 1px solid;'><b>Наличие фотоматериалов для разработки визуальной концепции</b></td>
      <td style='padding: 10px; border: #e9e9e9 1px solid;'>
        @php
          echo implode('; ',$site_photo_source);
        @endphp
      </td>
    </tr>
  @endif  
  @if (!empty($isSite_photo_source))
    @php
      $count++
    @endphp
    @if($count%2) <tr> @else <tr style="background-color: #f8f8f8;"> @endif
      <td style='padding: 10px; border: #e9e9e9 1px solid;'><b>Наличие контентной информации для наполнения сайта(есть, нету):</b></td>
      <td style='padding: 10px; border: #e9e9e9 1px solid;'>
          {{$isSite_photo_source}}
      </td>
    </tr>
  @endif
  @if (!empty($site_content_info))
    @php
      $count++
    @endphp
    @if($count%2) <tr> @else <tr style="background-color: #f8f8f8;"> @endif
      <td style='padding: 10px; border: #e9e9e9 1px solid;'><b>Наличие контентной информации для наполнения сайта:</b></td>
      <td style='padding: 10px; border: #e9e9e9 1px solid;'>
        @php
          echo implode('; ',$site_content_info);
        @endphp
      </td>
    </tr>
  @endif
  @if (!empty($interaction_with_third_party_programs_custom))
    @php
      $count++
    @endphp
    @if($count%2) <tr> @else <tr style="background-color: #f8f8f8;"> @endif
      <td style='padding: 10px; border: #e9e9e9 1px solid;'><b>Взаимодействие со сторонними программами(другое):</b></td>
      <td style='padding: 10px; border: #e9e9e9 1px solid;'>
          {{$interaction_with_third_party_programs_custom}}
      </td>
    </tr>
  @endif
  @if (!empty($interaction_with_third_party_programs))
    @php
      $count++
    @endphp
    @if($count%2) <tr> @else <tr style="background-color: #f8f8f8;"> @endif
      <td style='padding: 10px; border: #e9e9e9 1px solid;'><b>Взаимодействие со сторонними программами:</b></td>
      <td style='padding: 10px; border: #e9e9e9 1px solid;'>
        @php
          echo implode('; ',$interaction_with_third_party_programs);
        @endphp
      </td>
    </tr>
  @endif
 

{{--   
  $fuctional_type  ?? '',
  $fuctional_type_custom  ?? '',
  $Site_functionality  ?? '',
  $Site_functionality_custom  ?? '', --}}

</table>