@extends('layouts.default')

@section('seo')
  <meta name=viewport content="width=device-width,user-scalable=no,initial-scale=1,maximum-scale=1,minimum-scale=1">
  <link rel=icon href=/favicon.ico>
  <title>{{ trans('brief.title') }}</title>
  <meta name=description content="{{ trans('brief.seo.description') }}">
  <link href=/brief rel=canonical>

  <meta property=og:type content=website>
  <meta property=og:title content="{{ trans('brief.title') }}">
  <meta property=og:url content=/brief>
  <meta property=og:site_name content="{{ trans('seo.seo_name') }}">
  <meta property=og:description content="{{ trans('brief.seo.description') }}">
@endsection

{{-- @section('bodyClass')blackHeader @endsection --}}

@section('css')
  <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
  <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
  <link rel="stylesheet" href="{{ asset('css/mobapps.css') }}">
  <link rel="stylesheet" href="{{ asset('css/redesign.css') }}">
@endsection

@section('content')
  <main id="main-brief">
    <div class="brief brif GeometryBold">
      <!---->
      <section class="ads rel">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 center">
              <h1>{{ trans('brief.title') }}</h1>
              <p>{{ trans('brief.subtitle') }}</p>
              <span>{{ trans('brief.description') }}</span>
            </div>
          </div>
        </div>
      </section>
      <section class="brif-web">
        <div class="container">
          <div class="col-sm-12">
            <div class="row">
              <form id="brief" enctype="multipart/form-data" class="callback">
                <input type="hidden" name="brief_title" value="Заявка (Бриф на создание сайта)">
                <input type="hidden" name="admin_email" value="pm.mobios@gmail.com">
                <input type="hidden" name="form_subject"
                       value="Новая заявка с mobios.ua (Бриф на создание сайта)">
                <input type="hidden" name="brief_type" value="brief">
                <ol>
                  <div class="name center">{{ trans('brief.general_info') }}</div>
                  <li>{{ trans('brief.title_company_name') }}:</li>
                  <label class="w100">
                    {{ trans('brief.subtitle_company_name') }}
                    <textarea name="companyName" required="required" class="materialize-textarea"></textarea>
                  </label>
                  <li>{{ trans('brief.title_domain') }}:</li>
                  <label class="w100">
                    {{trans('brief.subtitle_domain')}}
                    <textarea name="company_buisness" required="required" class="materialize-textarea"></textarea>
                  </label>
                  <li>{{ trans('brief.title_competitors') }}:</li>
                  <label class="w100">
                    {{trans('brief.subtitle_competitors')}}
                    <textarea name="web_company_competitors" required="required"
                              class="materialize-textarea"></textarea>
                  </label>
                  <li>{{ trans('brief.title_geography') }}:</li>
                  <label class="w100">
                    {{ trans('brief.subtitle_geography') }}
                    <textarea name="company_Geography" required="required" class="materialize-textarea"></textarea>
                  </label>
                  <li>{{ trans('brief.title_budget') }}:</li>
                  <label class="w100">
                    {{ trans('brief.subtitle_budget') }}
                    <textarea name="termins" required="required" class="materialize-textarea"></textarea>
                  </label>
                  <li>{{ trans('brief.title_style') }}:</li>
                  {{-- <div  class="file-field input-field">
<div  class="btn">
<span >Загрузить<span  class="animated_blink">_</span>
</span>
<input  type="file" name="file[]">
</div> --}}
                  {{-- <div  class="file-path-wrapper">
<input  placeholder="Прикрепите архив сюда" name="file1" type="text" disabled="disabled" class="file-path validate">
</div>
</div> --}}
                  <label class="w100">
                    {{ trans('brief.subtitle_style') }}
                    <textarea name="refinement" class="materialize-textarea"></textarea>
                  </label>
                  <p>
                  </p>
                  <p>
                  </p>
                  <li>{{ trans('brief.title_contact') }}:</li>
                  <label class="w100">
                    {{ trans('brief.subtitle_contact') }}
                    <textarea name="responsible_person" class="materialize-textarea"></textarea>
                  </label>
                  <p>
                  </p>
                  <div class="name center">{{ trans('brief.strategy') }}</div>
                  <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6">
                      <li>{{ trans('brief.title_target') }}:</li>
                      <label for="goal" class="w100">{{ trans('brief.subtitle_target') }}</label>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                      <textarea id="goal" name="site_prupose" class="materialize-textarea"></textarea>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6">
                      <li>{{ trans('brief.title_users_need') }}:</li>
                      <label for="needs" class="w100">{{ trans('brief.subtitle_users_need') }}</label>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                      <textarea id="needs" name="user_needs" class="materialize-textarea"></textarea>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6">
                      <li>{{ trans('brief.title_audience') }}:</li>
                      <label for="people" class="w100">{{ trans('brief.subtitle_audience') }}</label>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                      <textarea id="people" name="custom_audience" class="materialize-textarea"></textarea>
                    </div>
                  </div>
                  <div class="name center">{{ trans('brief.functionality') }}</div>
                  <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                      <li>{{ trans('brief.title_site_type') }}:</li>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                      <input id="test1" type="radio" name="fuctional_type[]"
                             value="Сайт-визитка">
                      <label for="test1">{{ trans('brief.site_type.visit_card') }}</label>
                      <br>
                      <input id="test2" type="radio" name="fuctional_type[]"
                             value="Сайт-портфолио">
                      <label for="test2">{{ trans('brief.site_type.portfolio') }}</label>
                      <br>
                      <input id="test3" type="radio" name="fuctional_type[]" value="Блог">
                      <label for="test3">{{ trans('brief.site_type.blog') }}</label>
                      <br>
                      <input id="test4" type="radio" name="fuctional_type[]"
                             value="Социальная сеть">
                      <label for="test4">{{ trans('brief.site_type.social_network') }}</label>
                      <br>
                      <input id="test5" type="radio" name="fuctional_type[]"
                             value="Корпоративный сайт с каталогом">
                      <label for="test5">{{ trans('brief.site_type.corporate_with_catalog') }}</label>
                      <br>
                      <input id="test6" type="radio" name="fuctional_type[]"
                             value="Корпоративный сайт без каталога">
                      <label for="test6">{{ trans('brief.site_type.corporate_without_catalog') }}</label>
                      <br>
                      <input id="test7" type="radio" name="fuctional_type[]"
                             value="Интернет-магазин">
                      <label for="test7">{{ trans('brief.site_type.shop') }}</label>
                      <br>
                      <input id="test8" type="radio" name="fuctional_type[]"
                             value="Информационный портал">
                      <label for="test8">{{ trans('brief.site_type.portal') }}</label>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                      <textarea placeholder="{{ trans('brief.other') }}" name="fuctional_type_custom"
                                class="materialize-textarea"></textarea>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                      <li>{{ trans('brief.title_functions') }}:</li>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                      <input id="test9" type="checkbox" name="Site_functionality[]"
                             value="Публикация новостей">
                      <label for="test9"> {{ trans('brief.functions.news') }}</label>
                      <br>
                      <input id="test10" type="checkbox" name="Site_functionality[]"
                             value="Публикация статей">
                      <label for="test10">{{ trans('brief.functions.articles') }}</label>
                      <br>
                      <input id="test11" type="checkbox" name="Site_functionality[]"
                             value="Публикация акций">
                      <label for="test11">{{ trans('brief.functions.offers') }}</label>
                      <br>
                      <input id="test12" type="checkbox" name="Site_functionality[]"
                             value="Подписка на рассылку новостей">
                      <label for="test12">{{ trans('brief.functions.news_subscriptions') }}</label>
                      <br>
                      <input id="test13" type="checkbox" name="Site_functionality[]"
                             value="Форма обратной связи">
                      <label for="test13">{{ trans('brief.functions.contact_form') }}</label>
                      <br>
                      <input id="test14" type="checkbox" name="Site_functionality[]"
                             value="Размещение файлов для скачивая">
                      <label for="test14">{{ trans('brief.functions.file_download') }}</label>
                      <br>
                      <input id="test15" type="checkbox" name="Site_functionality[]"
                             value="Фотоальбом">
                      <label for="test15">{{ trans('brief.functions.photo_gallery') }}</label>
                      <br>
                      <input id="test16" type="checkbox" name="Site_functionality[]"
                             value="Быстрый поиск по сайту">
                      <label for="test16">{{ trans('brief.functions.quick_search') }}</label>
                      <br>
                      <input id="test17" type="checkbox" name="Site_functionality[]"
                             value="Каталог товаров без корзины">
                      <label for="test17">{{ trans('brief.functions.catalog_no_cart') }}</label>
                      <br>
                      <input id="test18" type="checkbox" name="Site_functionality[]"
                             value="Интернет-магазин с корзиной">
                      <label for="test18">{{ trans('brief.functions.shop_with_cart') }}</label>
                      <br>
                      <input id="test19" type="checkbox" name="Site_functionality[]"
                             value="Книга отзывов">
                      <label for="test19">{{ trans('brief.functions.reviews') }}</label>
                      <br>
                      <input id="test20" type="checkbox" name="Site_functionality[]"
                             value="Онлайн консультации">
                      <label for="test20">{{ trans('brief.functions.online_chat') }}</label>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                      <textarea placeholder="{{ trans('brief.other') }}" name="Site_functionality_custom"
                                class="materialize-textarea"></textarea>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                      <li>{{ trans('brief.title_cms') }}:
                      </li>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                      <input id="test21" type="radio" name="content_management_system"
                             value="Wordpress или Opencart">
                      <label for="test21">{{ trans('brief.wp_oc') }}</label>
                      <br>
                      <input id="test22" type="radio" name="content_management_system"
                             value="Фреймворк Laravel">
                      <label for="test22">{{ trans('brief.laravel') }}</label>
                      <br>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                      <textarea placeholder="{{ trans('brief.other') }}:" name="content_management_system_custom"
                                class="materialize-textarea"></textarea>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                      <li>{{ trans('brief.title_integrations') }}:
                      </li>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                      <input id="test23" type="checkbox"
                             name="interaction_with_third_party_programs[]" value="Интеграция с 1С">
                      <label for="test23">{{ trans('brief.integration_1c') }}</label>
                      <br>
                      <input id="test24" type="checkbox"
                             name="interaction_with_third_party_programs[]" value="Платежные системы">
                      <label for="test24">{{ trans('brief.integration_pay') }}</label>
                      <br>
                      <input id="test25" type="checkbox"
                             name="interaction_with_third_party_programs[]" value="Социальные сети">
                      <label for="test25">{{ trans('brief.integration_socials') }}</label>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                      <textarea placeholder="{{ trans('brief.other') }}" name="interaction_with_third_party_programs_custom"
                                class="materialize-textarea"></textarea>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                      <p>
                      </p>
                      <li>{{ trans('brief.title_locales') }}:</li>
                      <label class="w100">{{ trans('brief.subtitle_locales') }}
                        <textarea name="site_languages" class="materialize-textarea"></textarea>
                      </label>
                      <p>
                      </p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                      <p>
                      </p>
                      <li>{{ trans('brief.title_general') }}:</li>
                      <label class="w100">{{ trans('brief.subtitle_general') }}
                        <textarea name="basic_requirements" class="materialize-textarea"></textarea>
                      </label>
                      <p>
                      </p>
                    </div>
                  </div>
                  <div class="name center">{{ trans('brief.structure') }}</div>
                  <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                      <p>
                      </p>
                      <li>{{ trans('brief.title_parts') }}:</li>
                      <label class="w100">{{ trans('brief.subtitle_parts') }}
                        <textarea name="sections_of_the_site" class="materialize-textarea"></textarea>
                      </label>
                      <p>
                      </p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                      <p>
                      </p>
                      <li>{{ trans('brief.title_nav') }}:</li>
                      <label class="w100">{{ trans('brief.subtitle_nav') }}
                        <textarea name="site_menu" class="materialize-textarea"></textarea>
                      </label>
                      <p>
                      </p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                      <p>
                      </p>
                      <li>{{ trans('brief.title_info_blocks') }}:</li>
                      <label class="w100">{{ trans('brief.subtitle_info_blocks') }}
                        <textarea name="site_information_block" class="materialize-textarea"></textarea>
                      </label>
                    </div>
                  </div>
                  <div class="name center">{{ trans('brief.design') }}</div>
                  <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                      <li>{{ trans('brief.title_examples') }}:</li>
                      <label class="w100">{{ trans('brief.subtitle_examples') }}
                        <textarea name="site_like" class="materialize-textarea"></textarea>
                      </label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                      <li>{{ trans('brief.title_anti_examples') }}:</li>
                      <label class="w100">{{ trans('brief.subtitle_anti_examples') }}
                        <textarea name="site_dislike" class="materialize-textarea"></textarea>
                      </label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                      <li>{{ trans('brief.title_general_composition') }}:</li>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                      <input id="test26" type="radio" name="general_site_composition"
                             value="Жесткая левосторонняя">
                      <label for="test26">{{ trans('brief.composition.left') }}</label>
                      <br>
                      <input id="test27" type="radio" name="general_site_composition"
                             value="Правосторонняя">
                      <label for="test27">{{ trans('brief.composition.right') }}</label>
                      <br>
                      <input id="test28" type="radio" name="general_site_composition"
                             value="По центру">
                      <label for="test28">{{ trans('brief.composition.centered') }}</label>
                      <br>
                      <input id="test29" type="radio" name="general_site_composition"
                             value="«Резиновая» (во всю ширину экрана)">
                      <label for="test29">{{ trans('brief.composition.flex') }}</label>
                      <br>
                      <input id="test30" type="radio" name="general_site_composition"
                             value="На усмотрение дизайнера">
                      <label for="test30">{{ trans('brief.composition.nothing') }}</label>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                      <textarea placeholder="{{ trans('brief.other') }}" name="general_site_composition_custom"
                                class="materialize-textarea"></textarea>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                      <li>{{ trans('brief.title_mood') }}</li>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                      <input id="test31" type="radio" name="site_associations"
                             value="Строгий корпоративный дизайн">
                      <label for="test31">{{ trans('brief.mood.corporate') }}</label>
                      <br>
                      <input id="test32" type="radio" name="site_associations"
                             value="Яркий, броский дизайн">
                      <label for="test32">{{ trans('brief.mood.bright') }}</label>
                      <br>
                      <input id="test33" type="radio" name="site_associations"
                             value="Позитивный и веселый">
                      <label for="test33">{{ trans('brief.mood.fun') }}</label>
                      <br>
                      <input id="test34" type="radio" name="site_associations"
                             value="Дизайн насыщенный иллюстрациями/фотографиями">
                      <label for="test34">{{ trans('brief.mood.photo') }}</label>
                      <br>
                      <input id="test35" type="radio" name="site_associations"
                             value="Минималистичный дизайн">
                      <label for="test35">{{ trans('brief.mood.minimal') }}</label>
                      <br>
                      <input id="test36" type="radio" name="site_associations"
                             value="Упор на функциональность">
                      <label for="test36">{{ trans('brief.mood.functional') }}</label>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                      <textarea placeholder="{{ trans('brief.other') }}" name="site_associations_custom"
                                class="materialize-textarea"></textarea>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                      <li>{{ trans('brief.title_colors') }}:
                      </li>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-6">
                      <input id="test37" type="radio" name="site_gamma"
                             value="Только цвета фирменного стиля и оттенки (если есть)">
                      <label for="test37">{{ trans('brief.colors.only_corporate') }}</label>
                      <br>
                      <input id="test38" type="radio" name="site_gamma"
                             value="Только мягкие пастельные цвета">
                      <label for="test38"> {{ trans('brief.colors.only_soft') }}</label>
                      <br>
                      <input id="test39" type="radio" name="site_gamma"
                             value=">Использовать темные цвета">
                      <label for="test39">{{ trans('brief.colors.dark') }}</label>
                      <br>
                      <input id="test40" type="radio" name="site_gamma"
                             value="Использовать светлые цвета">
                      <label for="test40">{{ trans('brief.colors.light') }}</label>
                      <br>
                      <input id="test41" type="radio" name="site_gamma"
                             value="Использовать насыщенные оттенки">
                      <label for="test41"> {{ trans('brief.colors.saturated') }}</label>
                      <br>
                      <input id="test42" type="radio" name="site_gamma"
                             value="Цвета фирменного стиля и любые сочетаемые с ними">
                      <label for="test42"> {{ trans('brief.colors.corporate_plus') }}</label>
                      <br>
                      <input id="test43" type="radio" name="site_gamma"
                             value="Использовать монохромные темы">
                      <label for="test43"> {{ trans('brief.colors.monochrome') }}</label>
                      <br>
                      <input id="test44" type="radio" name="site_gamma"
                             value="Использовать фоновые изображения/видео">
                      <label for="test44"> {{ trans('brief.colors.pictures') }}</label>
                      <br>
                      <input id="test45" type="radio" name="site_gamma"
                             value="Использовать иконографику / типографику">
                      <label for="test45"> {{ trans('brief.colors.icons') }}</label>
                      <br>
                      <input id="test46" type="radio" name="site_gamma"
                             value="На усмотрение дизайнера">
                      <label for="test46"> {{ trans('brief.colors.nothing') }}</label>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-6">
                      <textarea placeholder="{{ trans('brief.other') }}" name="site_gamma_custom" class="materialize-textarea"></textarea>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                      <li>{{ trans('brief.title_concept') }}:</li>
                      <label class="w100">{{ trans('brief.subtitle_concept') }}
                        <textarea name="site_primary_requirements" class="materialize-textarea"></textarea>
                      </label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                      <p class="alert">
                        {!! trans('brief.one_of') !!}
                      </p>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-6">
                      <p>{{ trans('brief.forbidden_colors') }}:</p>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-6">
                      <p>
                        <textarea name="colors_no_use" class="materialize-textarea"></textarea>
                      </p>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-6">
                      <p>{{ trans('brief.allowed_colors') }}:</p>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-6">
                      <p>
                        <textarea name="colors_uose" class="materialize-textarea"></textarea>
                      </p>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-12">
                      <p>{{ trans('brief.title_color_scheme') }}:
                        <label for="test47">{{ trans('brief.subtitle_color_scheme') }}</label>
                      </p>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-12">
                      <p>{{ trans('brief.cold_colors') }}</p>
                      <table class="cold centered">
                        <tr>
                          <td bgcolor="#91cff5">
                            <input id="test47" type="checkbox" name="color_gamma_cold[]"
                                   value="#91cff5">
                            <label for="test47">
                            </label>
                          </td>
                          <td bgcolor="#90ffff">
                            <input id="test48" type="checkbox" name="color_gamma_cold[]"
                                   value="#90ffff">
                            <label for="test48">
                            </label>
                          </td>
                          <td bgcolor="#4071b8">
                            <input id="test49" type="checkbox" name="color_gamma_cold[]"
                                   value="#4071b8">
                            <label for="test49">
                            </label>
                          </td>
                          <td bgcolor="#2b4b7d">
                            <input id="test50" type="checkbox" name="color_gamma_cold[]"
                                   value="#2b4b7d">
                            <label for="test50">
                            </label>
                          </td>
                          <td bgcolor="#1f1b62">
                            <input id="test51" type="checkbox" name="color_gamma_cold[]"
                                   value="#1f1b62">
                            <label for="test51">
                            </label>
                          </td>
                          <td bgcolor="#12004c">
                            <input id="test52" type="checkbox" name="color_gamma_cold[]"
                                   value="#12004c">
                            <label for="test52">
                            </label>
                          </td>
                        </tr>
                        <tr>
                          <td bgcolor="#cbde9d">
                            <input id="test53" type="checkbox" name="color_gamma_cold[]"
                                   value="#cbde9d">
                            <label for="test53">
                            </label>
                          </td>
                          <td bgcolor="#b1d39d">
                            <input id="test54" type="checkbox" name="color_gamma_cold[]"
                                   value="#b1d39d">
                            <label for="test54">
                            </label>
                          </td>
                          <td bgcolor="#6fb353">
                            <input id="test55" type="checkbox" name="color_gamma_cold[]"
                                   value="#6fb353">
                            <label for="test55">
                            </label>
                          </td>
                          <td bgcolor="#5da457">
                            <input id="test56" type="checkbox" name="color_gamma_cold[]"
                                   value="#5da457">
                            <label for="test56">
                            </label>
                          </td>
                          <td bgcolor="#243f23">
                            <input id="test57" type="checkbox" name="color_gamma_cold[]"
                                   value="#243f23">
                            <label for="test57">
                            </label>
                          </td>
                          <td bgcolor="#283729">
                            <input id="test58" type="checkbox" name="color_gamma_cold[]"
                                   value="#283729">
                            <label for="test58">
                            </label>
                          </td>
                        </tr>
                      </table>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-12">
                      <p>{{ trans('brief.warm_colors') }}</p>
                      <table class="hot centered">
                        <tr>
                          <td bgcolor="#fdf89d">
                            <input id="test59" type="checkbox" name="color_gamma_warm[]"
                                   value="#fdf89d">
                            <label for="test59">
                            </label>
                          </td>
                          <td bgcolor="#fbf239">
                            <input id="test60" type="checkbox" name="color_gamma_warm[]"
                                   value="#fbf239">
                            <label for="test60">
                            </label>
                          </td>
                          <td bgcolor="#e6b35a">
                            <input id="test61" type="checkbox" name="color_gamma_warm[]"
                                   value="#e6b35a">
                            <label for="test61">
                            </label>
                          </td>
                          <td bgcolor="#cd6e24">
                            <input id="test62" type="checkbox" name="color_gamma_warm[]"
                                   value="#cd6e24">
                            <label for="test62">
                            </label>
                          </td>
                          <td bgcolor="#df6e1d">
                            <input id="test63" type="checkbox" name="color_gamma_warm[]"
                                   value="#df6e1d">
                            <label for="test63">
                            </label>
                          </td>
                          <td bgcolor="#d5652c">
                            <input id="test64" type="checkbox" name="color_gamma_warm[]"
                                   value="#d5652c">
                            <label for="test64">
                            </label>
                          </td>
                        </tr>
                        <tr>
                          <td bgcolor="#e2b2ad">
                            <input id="test65" type="checkbox" name="color_gamma_warm[]"
                                   value="#e2b2ad">
                            <label for="test65">
                            </label>
                          </td>
                          <td bgcolor="#b1635c">
                            <input id="test66" type="checkbox" name="color_gamma_warm[]"
                                   value="#b1635c">
                            <label for="test66">
                            </label>
                          </td>
                          <td bgcolor="#b94036">
                            <input id="test67" type="checkbox" name="color_gamma_warm[]"
                                   value="#b94036">
                            <label for="test67">
                            </label>
                          </td>
                          <td bgcolor="#cc2228">
                            <input id="test68" type="checkbox" name="color_gamma_warm[]"
                                   value="#cc2228">
                            <label for="test68">
                            </label>
                          </td>
                          <td bgcolor="#904347">
                            <input id="test69" type="checkbox" name="color_gamma_warm[]"
                                   value="#904347">
                            <label for="test69">
                            </label>
                          </td>
                          <td bgcolor="#70211f">
                            <input id="test70" type="checkbox" name="color_gamma_warm[]"
                                   value="#70211f">
                            <label for="test70">
                            </label>
                          </td>
                        </tr>
                      </table>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                      <p>{{ trans('brief.title_background') }}:
                        <label for="site_color">{{ trans('brief.subtitle_background') }}</label>
                      </p>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                      <input id="test71" type="radio" name="site_source_bg" value="Белый">
                      <label for="test71"> {{ trans('brief.white') }}</label>
                      <br>
                      <input id="test72" type="radio" name="site_source_bg"
                             value="На усмотрение дизайнера">
                      <label for="test72">{{ trans('brief.designer') }}</label>
                      <br>
                      <input id="test73" type="radio" name="site_source_bg" value="Цветной">
                      <label for="test73"> {{ trans('brief.colorful') }}</label>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                      <textarea id="site_color" placeholder="{{ trans('brief.color_here') }}" name="costom_color"
                                class="materialize-textarea"></textarea>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6">
                      <p>{{ trans('brief.title_complex_graphics') }}
                        <label for="graphic">{{ trans('brief.subtitle_complex_graphics') }}</label>
                      </p>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                      <textarea id="graphic" name="type_header_illustration" class="materialize-textarea"></textarea>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6">
                      <p>{{ trans('brief.title_liked') }}:
                        <label for="works">{{ trans('brief.subtitle_liked') }}</label>
                      </p>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                      <textarea id="works" name="link_sites_like" class="materialize-textarea"></textarea>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                      <li>{{ trans('brief.title_fonts') }}:</li>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                      <input id="test74" type="radio" name="site_fonts"
                             value="Шрифты с засечками (Например: Times, Bodoni)">
                      <label for="test74"> {{ trans('brief.fonts.serif') }}</label>
                      <br>
                      <input id="test75" type="radio" name="site_fonts"
                             value="Шрифты без засечек Helvetica, Futura">
                      <label for="test75">{{ trans('brief.fonts.sans_serif') }}</label>
                      <br>
                      <input id="test76" type="radio" name="site_fonts" value="Рукописные">
                      <label for="test76"> {{ trans('brief.fonts.fantasy') }}</label>
                      <br>
                      <input id="test77" type="radio" name="site_fonts" value="Декоративные">
                      <label for="test77"> {{ trans('brief.fonts.decor') }}</label>
                      <br>
                      <input id="test78" type="radio" name="site_fonts"
                             value="На усмотрение дизайнера">
                      <label for="test78"> {{ trans('brief.designer') }}</label>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                      <textarea placeholder="{{ trans('brief.other') }}" name="site_fonts_custom" class="materialize-textarea"></textarea>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                      <li>{{ trans('brief.title_resolution') }}:
                      </li>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                      <input id="test79" type="radio" name="site_resolution"
                             value="1280х960">
                      <label for="test79"> 1280х960</label>
                      <br>
                      <input id="test80" type="radio" name="site_resolution"
                             value="1024х768">
                      <label for="test80"> 1024х768</label>
                      <br>
                      <input id="test81" type="radio" name="site_resolution"
                             value="1200 х длина контента">
                      <label for="test81"> 1200 х {{ trans('brief.content_length') }}</label>
                      <br>
                      <input id="test82" type="radio" name="site_resolution"
                             value="960 х длина контента">
                      <label for="test82"> 960 х {{ trans('brief.content_length') }}</label>
                      <br>
                      <input id="test83" type="radio" name="site_resolution"
                             value="1900 х длина контента">
                      <label for="test83"> 1900 х {{ trans('brief.content_length') }}</label>
                      <br>
                      <input id="test84" type="radio" name="site_resolution"
                             value="640 х длина контента">
                      <label for="test84"> 640 х {{ trans('brief.content_length') }}</label>
                      <br>
                      <input id="test85" type="radio" name="site_resolution"
                             value="На усмотрение дизайнера">
                      <label for="test85"> {{ trans('brief.designer') }}</label>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                      <textarea placeholder="{{ trans('brief.other') }}" name="site_resolution_custom"
                                class="materialize-textarea"></textarea>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                      <li>{{ trans('brief.title_materials') }}:
                      </li>
                      <input id="test86" type="checkbox" name="isSite_photo_source"
                             value="1">
                      <label for="test86">{{ trans('brief.have_materials') }}</label>
                      <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-6">
                          <textarea placeholder="{{ trans('brief.link') }}" name="site_photo_source[]"
                                    class="materialize-textarea"></textarea>
                        </div>
                        {{-- <div  class="col-sm-12 col-md-6 col-lg-6 file-field input-field center">
<div  class="btn file-1">
<span >Загрузить<span  class="animated_blink">_</span>
</span>
<input  type="file" name="file[]">
</div>
<div  class="file-path-wrapper">
<input  placeholder="Прикрепите архив сюда" name="file2" type="text" disabled="disabled" class="file-path validate">
</div> --}}
                      </div>
                    </div>
                    <input id="test87" type="checkbox" name="site_photo_source[]"
                           value="Необходимо купить с фотостоков или подобрать (примеры предоставить)">
                    <label for="test87"> {{ trans('brief.need_to_buy') }}</label>
                    <br>
                    <input id="test88" type="checkbox" name="site_photo_source[]"
                           value="Необходимо заказать фотосессию">
                    <label for="test88"> {{ trans('brief.need_to_make') }}</label>
                  </div>
            </div>
            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-12">
                <li>{{ trans('brief.title_content') }}:</li>
                <input id="test89" type="checkbox" name="isSite_content_info"
                       value="Есть (приложить файл или скинуть ссылки на их скачивание)">
                <label for="test89"> {{ trans('brief.have_content') }}</label>
                <div class="row">
                  <div class="col-sm-12 col-md-6 col-lg-6">
                    <textarea placeholder="{{ trans('brief.link') }}" name="site_content_info[] " class="materialize-textarea"></textarea>
                  </div>
                  {{-- <div  class="col-sm-12 col-md-6 col-lg-6 file-field input-field center">
<div  class="btn file-2">
  <span >Загрузить<span  class="animated_blink">_</span>
</span>
<input  type="file" name="file[]">
</div> --}}
                  <div class="file-path-wrapper">
                    <input placeholder="{{ trans('brief.attach') }}" name="file3" type="text"
                           disabled="disabled" class="file-path validate">
                  </div>
                </div>
              </div>
              <input id="test90" type="checkbox" name="site_content_info[]"
                     value="Необходим рерайт текстов">
              <label for="test90">{{ trans('brief.rewrite') }}</label>
              <br>
              <input id="test91" type="checkbox" name="site_content_info[]"
                     value="Необходимо копирайт текстов">
              <label for="test91">{{ trans('brief.copywriter') }}</label>
            </div>
          </div>
          </ol>
          <div class="container">
            <hr>
            <div class="garant">
              <div class="name center">{{ trans('brief.contact_info') }}</div>
              <p>{{ trans('brief.your_name') }}:</p>
              <label class="w100">
                <textarea name="user_fio" required="required" class="materialize-textarea"></textarea>
              </label>
              <p>{{ trans('brief.your_phone') }}:</p>
              <label class="w100">
                <textarea name="user_p" required="required" class="materialize-textarea"></textarea>
              </label>
              <p>{{ trans('brief.your_email') }}:</p>
              <label class="w100">
                <textarea name="user_mail" required="required" class="materialize-textarea"></textarea>
              </label>
              <div class="check-garant">
                <input id="agreeInput" type="checkbox" name="private"
                       value="Гарантирую правильность сведений, указанных в данном брифе."
                       required="required">
                <label for="agreeInput">{{ trans('brief.guarantee') }}</label>
              </div>
            </div>
            <div class="row">
              <div class="btnSubmit">
                <button id="feedbackSubmit" type="submit" value="{{ trans('brief.send') }}" name="action"
                        class="btnOpenModalBrif">
                  {{ trans('index.send_button') }}
                </button>
              </div>
            </div>
          </div>
          </form>
        </div>
    </div>
    </div>
    </section>
    </div>
    <!---->
    <!---->
    <!---->
    </div>
  </main>
  <style>
    * {
      float: none !important;
    }

    ol {
      list-style: auto !important;
      padding-left: 20px;
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

    @keyframes blink-animation- {
      to {
        visibility: hidden
      }

    }

    @-webkit-keyframes blink-animation- {
      to {
        visibility: hidden
      }

    }

    .animated_blink {
      animation: blink-animation- 1s steps(2, start) infinite;
      -webkit-animation: blink-animation- 1s steps(2, start) infinite
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
      line-height: 1;
      padding: 32px 0 20px 0;
      margin: 0
    }

    .brif .ads:before {
      content: "";
      top: 83px;
      right: 0;
      width: 100%;
      height: 1px;
      background-color: #222831;
      position: absolute;
      display: none;
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
      font-weight: 700;
      margin-bottom: 10px;
    }

    .brif .brif-web p.alert {
      color: #000;
      font-size: 17px;
      text-align: center
    }

    .brif .brif-web #feedbackSubmit {
      color: #00b2d8;
      font-size: 18px;
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
      font-size: 14px;
      display: inline;
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
      font-family: Gotham Pro;
      padding-left: 10px
    }

    .brif .brif-web ::-moz-placeholder {
      color: #666;
      font-family: Gotham Pro;
      padding-left: 10px
    }

    .brif .brif-web ::-ms-input-placeholder {
      color: #666;
      font-family: Gotham Pro;
      padding-left: 10px
    }

    .brif .brif-web :-moz-placeholder {
      color: #666;
      font-family: Gotham Pro;
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
      /* float:left */
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

    @media (max-width: 767px) {
      .brif .ads {
        padding-top: 60px
      }

      .brif .ads h1 {
        font-size: 22px
      }

      .brif .ads p {
        font-size: 15px
      }
    }

    @media (max-width: 767px) {
      .brif .container {
        padding-left: 30px;
        padding-right: 30px;
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
