@extends('layouts.default')

@section('seo')
  <title>{{ trans('brief-style.brief_logo_title') }}</title>
  <meta name=description content="{{ trans('brief-style.brief_seo_description') }}">
  <link href="{{ getLocaleUrl('brief-style') }}" rel="canonical">

  <meta property="og:type" content="website">
  <meta property="og:title" content="{{ trans('brief-style.brief_logo_title') }}">
  <meta property="og:url" content="{{ getLocaleUrl('brief-style') }}">
  <meta property="og:site_name" content="{{ trans('index.site_name') }}">
  <meta property="og:description" content="{{ trans('brief-style.brief_seo_description') }}">
@endsection

{{-- @section('bodyClass')blackHeader @endsection --}}

@section('css')
  <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
  <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
  <link rel="stylesheet" href="{{ asset('css/mobapps.css') }}">
  <link rel="stylesheet" href="{{ asset('css/redesign.css') }}">
@endsection

@section('content')

  <main id="brief-style">
    <div class="brief-seo brif GeometryBold">
      <section class="ads rel">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 center">
              <h1>{{ trans('brief-style.brief_logo_title') }}</h1>
              <p>{{ trans('brief-style.brief_logo_description') }}</p>
              <p>{{ trans('brief-style.brief_logo_instructions') }}</p>
              <span>{{ trans('brief-style.brief_logo_subtitle') }}</span>
            </div>
          </div>
        </div>
      </section>

      <section class="brif-web">
        <div class="container">
          <hr>
          <form id="brief" enctype="multipart/form-data" class="callback">
            <input type="hidden" name="brief_title" value="Заявка (Бриф на разработку логотипа и фирменного стиля)">
            <input type="hidden" name="admin_email" value="pm.mobios@gmail.com">
            <input type="hidden" name="form_subject"
                   value="Новая заявка с mobios.ua (Бриф на разработку логотипа и фирменного стиля)">
            <input type="hidden" name="brief_type" value="brief-style">
            <ol>
              <div class="name center">{{ trans('brief-style.marketing_block') }}</div>
              <li>
                <p>{{ trans('brief-style.product_description') }}</p>
                <label class="w100">
                  <textarea name="f1" required="required" class="materialize-textarea"></textarea>
                </label>
              </li>
              <li>
                <p>{{ trans('brief-style.brand_essence') }}</p>
                <textarea name="f2" required="required" class="materialize-textarea"></textarea>
              </li>
              <li>
                <p>{{ trans('brief-style.unique_selling_proposition') }}</p>
                <label class="w100">
                  <textarea name="f3" required="required" class="materialize-textarea"></textarea>
                </label>
              </li>
              <li>
                <p>{{ trans('brief-style.product_values') }}</p>
                <label class="w100">
                  <textarea name="f4" required="required" class="materialize-textarea"></textarea>
                </label>
              </li>
              <li>
                <p>{{ trans('brief-style.benefits_to_consumer') }}</p>
                <label class="w100">
                  <textarea name="f5" required="required" class="materialize-textarea"></textarea>
                </label>
              </li>
              <div class="name center">{{ trans('brief-style.for_who') }}</div>
              <li>
                <p>
                  {{ trans('brief-style.target_consumer_groups') }}
                  <br>
                  {{ trans('brief-style.description_of_consumer_groups') }}
                  <br>
                  <span class="blue-text">{{ trans('brief-style.avoid_template_descriptions') }}</span>
                </p>
                <ul>
                  <li class="li_subtext">
                    <span>{{ trans('brief-style.demographics') }}: </span>{{ trans('brief-style.consumer_details_heading') }}
                  </li>
                  <li class="li_subtext">
                    <span>{{ trans('brief-style.sociographics') }}: </span>{{ trans('brief-style.consumer_social_details_heading') }}
                  </li>
                  <li class="li_subtext">
                    <span>{{ trans('brief-style.behavior') }}: </span> {{ trans('brief-style.consumer_authority_interest_heading') }}
                  </li>
                  <li class="li_subtext">
                    <span>{{ trans('brief-style.lifestyle_and_psychological_profile') }}.</span>
                  </li>
                  <li class="li_subtext">
                    <span>{{ trans('brief-style.motivation_ratio') }}: </span>{{ trans('brief-style.rational_emotional_heading') }}
                  </li>
                </ul>
                <p>{{ trans('brief-style.group_1') }}:</p>
                <label class="w100">
                  <textarea name="f6_1" class="materialize-textarea"></textarea>
                </label>
                <p>{{ trans('brief-style.consumption_percentage') }}</p>
                <label class="w100">
                  <textarea name="f6_2" required="required" class="materialize-textarea"></textarea>
                </label>
                <p>{{ trans('brief-style.group_2') }}:</p>
                <label class="w100">
                  <textarea name="f6_3" class="materialize-textarea"></textarea>
                </label>
                <p>{{ trans('brief-style.consumption_percentage') }}</p>
                <label class="w100">
                  <textarea name="f6_4" required="required" class="materialize-textarea"></textarea>
                </label>
                <p>{{ trans('brief-style.group_3') }}:</p>
                <label class="w100">
                  <textarea name="f6_5" class="materialize-textarea"></textarea>
                </label>
                <p>{{ trans('brief-style.consumption_percentage') }}</p>
                <label class="w100">
                  <textarea name="f6_6" required="required" class="materialize-textarea"></textarea>
                </label>
              </li>
              <div class="name center">{{ trans('brief-style.purpose_heading') }}</div>
              <li>
                <p>{{ trans('brief-style.purpose_of_product') }}</p>
                <label class="w100">
                  <textarea name="f7" required="required" class="materialize-textarea"></textarea>
                </label>
              </li>
              <li>
                <p>{{ trans('brief-style.usage_pattern_of_product') }}</p>
                <label class="w100">
                  <textarea name="f8" required="required" class="materialize-textarea"></textarea>
                </label>
              </li>
              <li>
                <p>{{ trans('brief-style.product_familiarity') }}</p>
                <input id="access1" type="radio" name="f9"
                       value="Продукт инновационный и потребителя необходимо приучить к его потреблению.">
                <label for="access1"> {{ trans('brief-style.innovative_product') }}</label>
                <br>
                <input id="access2" type="radio" name="f9"
                       value="Продукт привычен, но обладает улучшениями относительно конкурирующих.">
                <label for="access2"> {{ trans('brief-style.improved_product') }}</label>
                <br>
                <label class="w100">{{ trans('brief-style.list_improvements') }}
                  <textarea name="f9_1" class="materialize-textarea"></textarea>
                </label>
                <input id="access3" type="radio" name="f9" value="Продукт не отличается от конкурентов, он такой же.">
                <label for="access3"> {{ trans('brief-style.similar_to_competitors') }}</label>
                <br>
                <p class="flexClass">
                  <input id="access4" type="radio" name="f9" value="Другое:">
                  <label for="access4" class="w100">{{ trans('brief-style.other') }}:
                    <textarea name="f9_2" class="materialize-textarea"></textarea>
                  </label>
                </p>
              </li>
              <div class="name center">{{ trans('brief-style.how_heading') }}</div>
              <li>
                <p>
                  {{ trans('brief-style.purchase_type') }}<br>
                  {{ trans('brief-style.consumer_purchase_process') }}
                </p>
                <label class="w100">
                  <textarea name="f10" class="materialize-textarea"></textarea>
                </label>
              </li>
              <li>
                <p>{{ trans('brief-style.consumer_behavior') }}<br>
                  {{ trans('brief-style.group_1_consumers') }}
                </p>
                <label class="w100">
                  <textarea name="f11_1" class="materialize-textarea"></textarea>
                </label>
                <p> {{ trans('brief-style.group_2_consumers') }}</p>
                <label class="w100">
                  <textarea name="f11_2" class="materialize-textarea"></textarea>
                </label>
                <p> {{ trans('brief-style.group_3_consumers') }}</p>
                <label class="w100">
                  <textarea name="f11_3" class="materialize-textarea"></textarea>
                </label>
              </li>
              <li>
                <p>{{ trans('brief-style.product_pricing_and_status') }}</p>
                <label class="w100">
                  <textarea name="f12" required="required" class="materialize-textarea"></textarea>
                </label>
              </li>
              <li>
                <p>{{ trans('brief-style.consumer_acceptance_of_price') }}</p>
                <label class="w100">
                  <textarea name="f13" required="required" class="materialize-textarea"></textarea>
                </label>
              </li>
              <div class="name center">{{ trans('brief-style.with_whom') }}</div>
              <li>
                <p>{{ trans('brief-style.main_competitors_description') }}</p>
                <ul>
                  <li class="li_subtext">{{ trans('brief-style.name') }}:</li>
                  <li class="li_subtext">{{ trans('brief-style.website') }}:</li>
                  <li class="li_subtext">{{ trans('brief-style.competitor_strengths_heading') }}:</li>
                  <li class="li_subtext">{{ trans('brief-style.competitor_weaknesses_heading') }}:</li>
                  <li class="li_subtext">{{ trans('brief-style.competitor_positioning_heading') }}:</li>
                  <li class="li_subtext">{{ trans('brief-style.competitor_values_heading') }}:</li>
                  <li class="li_subtext">{{ trans('brief-style.competitor_market_presence_heading') }}:</li>
                  <li class="li_subtext">{{ trans('brief-style.competitor_market_share_heading') }}:</li>
                </ul>
                <p>{{ trans('brief-style.competitor_1') }}</p>
                <label class="w100">
                  <textarea name="f14_1" class="materialize-textarea"></textarea>
                </label>
                <p>{{ trans('brief-style.competitor_2') }}</p>
                <label class="w100">
                  <textarea name="f14_2" class="materialize-textarea"></textarea>
                </label>
                <p>{{ trans('brief-style.competitor_3') }}</p>
                <label class="w100">
                  <textarea name="f14_3" class="materialize-textarea"></textarea>
                </label>
              </li>
              <div class="name center">Где?</div>
              <li>
                <p>{{ trans('brief-style.scale_of_interests') }}</p>
                <input id="seo1" type="radio" name="f14" value="Международный">
                <label for="seo1"> {{ trans('brief-style.international') }}</label>
                <br>
                <input id="seo2" type="radio" name="f14" value="Федеральный">
                <label for="seo2"> {{ trans('brief-style.federal') }}</label>
                <br>
                <input id="seo3" type="radio" name="f14" value="Региональный">
                <label for="seo3"> {{ trans('brief-style.regional') }}</label>
                <br>
                <input id="seo4" type="radio" name="f14" value="Местный">
                <label for="seo4">  {{ trans('brief-style.local') }}</label>
                <br>
              </li>
              <li>
                <p>{{ trans('brief-style.distribution_plan') }}</p>
                <label class="w100">
                  <textarea name="f15" required="required" class="materialize-textarea"></textarea>
                </label>
              </li>
              <div class="name center">Что еще?</div>
              <li>
                <p>{{ trans('brief-style.other_information') }}</p>
                <label class="w100">
                  <textarea name="f16" required="required" class="materialize-textarea"></textarea>
                </label>
              </li>
              <div class="name center">Дизайн блок</div>
              <li>
                <p>{{ trans('brief-style.need_for_logo_branding') }}</p>
                <label class="w100">
                  <textarea name="f17" required="required" class="materialize-textarea"></textarea>
                </label>
              </li>
              <li>
                <p>{{ trans('brief-style.points_of_contact') }} </p>
                <label class="w100">
                  <textarea name="f18" required="required" class="materialize-textarea"></textarea>
                </label>
              </li>
              <li>
                <p>{{ trans('brief-style.desired_feelings') }} </p>
                <label class="w100">
                  <textarea name="f19" required="required" class="materialize-textarea"></textarea>
                </label>
              </li>
              <li>
                <p>{{ trans('brief-style.evaluation_criteria') }}</p>
                <label class="w100">
                  <textarea name="f20" required="required" class="materialize-textarea"></textarea>
                </label>
              </li>
              <div class="name center">{{ trans('brief-style.form_and_content_heading') }}</div>
              <li>
                <p>{{ trans('brief-style.language_versions') }}</p>
                <label class="w100">
                  <textarea name="f21" required="required" class="materialize-textarea"></textarea>
                </label>
              </li>
              <li>
                <p>{{ trans('brief-style.name_for_each_language_version') }}</p>
                <label class="w100">
                  <textarea name="f22" required="required" class="materialize-textarea"></textarea>
                </label>
              </li>
              <li>
                <p>{{ trans('brief-style.visual_images') }}</p>
                <label class="w100">
                  <textarea name="f23" required="required" class="materialize-textarea"></textarea>
                </label>
              </li>
              <li>
                <p>{{ trans('brief-style.unacceptable_images') }}</p>
                <label class="w100">
                  <textarea name="f24" required="required" class="materialize-textarea"></textarea>
                </label>
              </li>
              <li>
                <p>{{ trans('brief-style.preferred_character') }}</p>
                <label class="w100">
                  <textarea name="f25" required="required" class="materialize-textarea"></textarea>
                </label>
              </li>
              <li>
                <p>{{ trans('brief-style.preferred_logo_type') }}</p>
                <input type="hidden" name="f26" id="f26" value>
                <div class="logo-wrap">
                  <div data-id="1" class="logo-item div-check-1">
                    <label for="logo1" class="logo-label">
                      <span>{{ trans('brief-style.combined_logo') }}</span>
                      <img src="/img/brif/logo1.png" alt>
                    </label>
                    <img src="/img/brif/checked.svg" id="checked1-1" class="checked1" style="display: none;">
                  </div>
                  <div data-id="2" class="logo-item div-check-1">
                    <label for="logo2" class="logo-label">
                      <span>{{ trans('brief-style.integrated_logo') }}</span>
                      <img src="/img/brif/logo2.png" alt>
                    </label>
                    <img src="/img/brif/checked.svg" id="checked1-2" class="checked1" style="display: none;">
                  </div>
                  <div data-id="3" class="logo-item div-check-1">
                    <label for="logo3" class="logo-label">
                      <span>{{ trans('brief-style.font_logo') }}</span>
                      <img src="/img/brif/logo3.png" alt>
                    </label>
                    <img src="/img/brif/checked.svg" id="checked1-3" class="checked1" style="display: none;">
                  </div>
                  <div data-id="4" class="logo-item div-check-1">
                    <label for="logo4" class="logo-label">
                      <span>{{ trans('brief-style.composite_font_logo') }}</span>
                      <img src="/img/brif/logo4.png" alt>
                    </label>
                    <img src="/img/brif/checked.svg" id="checked1-4" class="checked1" style="display: none;">
                  </div>
                  <div data-id="5" class="logo-item div-check-1">
                    <label for="logo5" class="logo-label">
                      <span>{{ trans('brief-style.character_logo') }}</span>
                      <img src="/img/brif/logo5.png" alt>
                    </label>
                    <img src="/img/brif/checked.svg" id="checked1-5" class="checked1" style="display: none;">
                  </div>
                  <div data-id="6" class="logo-item div-check-1">
                    <label for="logo6" class="logo-label">
                      <span>{{ trans('brief-style.symbol_only_logo') }}</span>
                      <img src="/img/brif/logo6.png" alt>
                    </label>
                    <img src="/img/brif/checked.svg" id="checked1-6" class="checked1" style="display: none;">
                  </div>
                  <div data-id="7" class="logo-item div-check-1">
                    <label for="logo7" class="logo-label">
                      <span>{{ trans('brief-style.coat_of_arms_logo') }}</span>
                      <img src="/img/brif/logo7.png" alt>
                    </label>
                    <img src="/img/brif/checked.svg" id="checked1-7" class="checked1" style="display: none;">
                  </div>
                  <div data-id="8" class="logo-item div-check-1">
                    <label for="logo8" class="logo-label">
                      <span>{{ trans('brief-style.emblem_logo') }}</span>
                      <img src="/img/brif/logo8.png" alt>
                    </label>
                    <img src="/img/brif/checked.svg" id="checked1-8" class="checked1" style="display: none;">
                  </div>
                  <div data-id="9" class="logo-item div-check-1">
                    <label for="logo9" class="logo-label">
                      <span>{{ trans('brief-style.badge_logo') }}</span>
                      <img src="/img/brif/logo9.png" alt>
                    </label>
                    <img src="/img/brif/checked.svg" id="checked1-9" class="checked1" style="display: none;">
                  </div>
                  <div data-id="10" class="logo-item div-check-1">
                    <label for="logo10" class="logo-label">
                      <span>{{ trans('brief-style.ligature_logo') }}</span>
                      <img src="/img/brif/logo10.png" alt>
                    </label>
                    <img src="/img/brif/checked.svg" id="checked1-10" class="checked1" style="display: none;">
                  </div>
                  <div data-id="11" class="logo-item div-check-1">
                    <label for="logo11" class="logo-label">
                      <span>{{ trans('brief-style.ornament_logo') }}</span>
                      <img src="/img/brif/logo11.png" alt>
                    </label>
                    <img src="/img/brif/checked.svg" id="checked1-11" class="checked1" style="display: none;">
                  </div>
                  <div data-id="12" class="logo-item div-check-1">
                    <label for="logo12" class="logo-label">
                      <span>{{ trans('brief-style.dynamic_logo') }}</span>
                      <img src="/img/brif/logo12.png" alt>
                    </label>
                    <img src="/img/brif/checked.svg" id="checked1-12" class="checked1" style="display: none;">
                  </div>
                </div>
              </li>
              <li>
                <p>{!!  trans('brief-style.logo_style_method_question')  !!}</p>
                <input type="hidden" name="f28_1" id="f28-1" value="0">
                <input type="hidden" name="f28_2" id="f28-2" value="0">
                <input type="hidden" name="f28_3" id="f28-3" value="0">
                <input type="hidden" name="f28_4" id="f28-4" value="0">
                <input type="hidden" name="f28_5" id="f28-5" value="0">
                <input type="hidden" name="f28_6" id="f28-6" value="0">
                <input type="hidden" name="f28_7" id="f28-7" value="0">
                <input type="hidden" name="f28_8" id="f28-8" value="0">
                <input type="hidden" name="f28_9" id="f28-9" value="0">
                <input type="hidden" name="f28_10" id="f28-10" value="0">
                <input type="hidden" name="f28_11" id="f28-11" value="0">
                <input type="hidden" name="f28_12" id="f28-12" value="0">
                <input type="hidden" name="f28_13" id="f28-13" value="0">
                <input type="hidden" name="f28_14" id="f28-14" value="0">
                <input type="hidden" name="f28_15" id="f28-15" value="0">
                <input type="hidden" name="f28_16" id="f28-16" value="0">
                <input type="hidden" name="f28_17" id="f28-17" value="0">
                <input type="hidden" name="f28_18" id="f28-18" value="0">
                <input type="hidden" name="f28_19" id="f28-19" value="0">
                <input type="hidden" name="f28_20" id="f28-20" value="0">
                <input type="hidden" name="f28_21" id="f28-21" value="0">
                <input type="hidden" name="f28_22" id="f28-22" value="0">
                <div data-id="1" class="style-wrap div-checked2">
                  <label for="style1" class="style-label">
                    <p class="style-wrap-title">{{ trans('brief-style.logo_style_1') }}</p>
                    <div class="style-imgs">
                      <img src="/img/brif/style1.png" alt>
                      <img src="/img/brif/style2.png" alt>
                      <img src="/img/brif/style3.png" alt>
                      <img src="/img/brif/style4.png" alt>
                    </div>
                  </label>
                  <img src="/img/brif/checked.svg" id="checked2-1" class="checked2" style="display: none;">
                </div>
                <div data-id="2" class="style-wrap div-checked2">
                  <label for="style2" class="style-label">
                    <p class="style-wrap-title">{{ trans('brief-style.logo_style_2') }}</p>
                    <div class="style-imgs">
                      <img src="/img/brif/style5.png" alt>
                      <img src="/img/brif/style6.png" alt>
                      <img src="/img/brif/style7.png" alt>
                      <img src="/img/brif/style8.png" alt>
                    </div>
                  </label>
                  <img src="/img/brif/checked.svg" id="checked2-2" class="checked2" style="display: none;">
                </div>
                <div data-id="3" class="style-wrap div-checked2">
                  <label for="style3" class="style-label">
                    <p class="style-wrap-title">{{ trans('brief-style.logo_style_3') }}</p>
                    <div class="style-imgs">
                      <img src="/img/brif/style9.png" alt>
                      <img src="/img/brif/style10.png" alt>
                      <img src="/img/brif/style11.png" alt>
                      <img src="/img/brif/style12.png" alt>
                    </div>
                  </label>
                  <img src="/img/brif/checked.svg" id="checked2-3" class="checked2" style="display: none;">
                </div>
                <div data-id="4" class="style-wrap div-checked2">
                  <label for="style4" class="style-label">
                    <p class="style-wrap-title">{{ trans('brief-style.logo_style_4') }}</p>
                    <div class="style-imgs">
                      <img src="/img/brif/style13.png" alt>
                      <img src="/img/brif/style14.png" alt>
                      <img src="/img/brif/style15.png" alt>
                      <img src="/img/brif/style16.png" alt>
                    </div>
                  </label>
                  <img src="/img/brif/checked.svg" id="checked2-4" class="checked2" style="display: none;">
                </div>
                <div data-id="5" class="style-wrap div-checked2">
                  <label for="style5" class="style-label">
                    <p class="style-wrap-title">{{ trans('brief-style.logo_style_5') }}</p>
                    <div class="style-imgs">
                      <img src="/img/brif/style17.png" alt>
                      <img src="/img/brif/style18.png" alt>
                      <img src="/img/brif/style19.png" alt>
                      <img src="/img/brif/style20.png" alt>
                    </div>
                  </label>
                  <img src="/img/brif/checked.svg" id="checked2-5" class="checked2" style="display: none;">
                </div>
                <div data-id="6" class="style-wrap div-checked2">
                  <label for="style5" class="style-label">
                    <p class="style-wrap-title">{{ trans('brief-style.logo_style_6') }}</p>
                    <div class="style-imgs">
                      <img src="/img/brif/style21.png" alt>
                      <img src="/img/brif/style22.png" alt>
                      <img src="/img/brif/style23.png" alt>
                      <img src="/img/brif/style24.png" alt>
                    </div>
                  </label>
                  <img src="/img/brif/checked.svg" id="checked2-6" class="checked2" style="display: none;">
                </div>
                <div data-id="7" class="style-wrap div-checked2">
                  <label for="style6" class="style-label">
                    <p class="style-wrap-title">{{ trans('brief-style.logo_style_7') }}</p>
                    <div class="style-imgs">
                      <img src="/img/brif/style25.png" alt>
                      <img src="/img/brif/style26.png" alt>
                      <img src="/img/brif/style27.png" alt>
                      <img src="/img/brif/style28.png" alt>
                    </div>
                  </label>
                  <img src="/img/brif/checked.svg" id="checked2-7" class="checked2" style="display: none;">
                </div>
                <div data-id="8" class="style-wrap div-checked2">
                  <label for="style7" class="style-label">
                    <p class="style-wrap-title">{{ trans('brief-style.logo_style_8') }}</p>
                    <div class="style-imgs">
                      <img src="/img/brif/style29.png" alt>
                      <img src="/img/brif/style30.png" alt>
                      <img src="/img/brif/style31.png" alt>
                      <img src="/img/brif/style32.png" alt>
                    </div>
                  </label>
                  <img src="/img/brif/checked.svg" id="checked2-8" class="checked2" style="display: none;">
                </div>
                <div data-id="9" class="style-wrap div-checked2">
                  <label for="style8" class="style-label">
                    <p class="style-wrap-title">{{ trans('brief-style.logo_style_9') }}</p>
                    <div class="style-imgs">
                      <img src="/img/brif/style33.png" alt>
                      <img src="/img/brif/style34.png" alt>
                      <img src="/img/brif/style35.png" alt>
                      <img src="/img/brif/style36.png" alt>
                    </div>
                  </label>
                  <img src="/img/brif/checked.svg" id="checked2-9" class="checked2" style="display: none;">
                </div>
                <div data-id="10" class="style-wrap div-checked2">
                  <label for="style9" class="style-label">
                    <p class="style-wrap-title">{{ trans('brief-style.logo_style_10') }}</p>
                    <div class="style-imgs">
                      <img src="/img/brif/style37.png" alt>
                      <img src="/img/brif/style38.png" alt>
                      <img src="/img/brif/style39.png" alt>
                      <img src="/img/brif/style40.png" alt>
                    </div>
                  </label>
                  <img src="/img/brif/checked.svg" id="checked2-10" class="checked2" style="display: none;">
                </div>
                <div data-id="11" class="style-wrap div-checked2">
                  <label for="style10" class="style-label">
                    <p class="style-wrap-title">{{ trans('brief-style.logo_style_11') }}</p>
                    <div class="style-imgs">
                      <img src="/img/brif/style41.png" alt>
                      <img src="/img/brif/style42.png" alt>
                      <img src="/img/brif/style43.png" alt>
                      <img src="/img/brif/style44.png" alt>
                    </div>
                  </label>
                  <img src="/img/brif/checked.svg" id="checked2-11" class="checked2" style="display: none;">
                </div>
                <div data-id="12" class="style-wrap div-checked2">
                  <label for="style11" class="style-label">
                    <p class="style-wrap-title">{{ trans('brief-style.logo_style_12') }}</p>
                    <div class="style-imgs">
                      <img src="/img/brif/style45.png" alt>
                      <img src="/img/brif/style46.png" alt>
                      <img src="/img/brif/style47.png" alt>
                      <img src="/img/brif/style48.png" alt>
                    </div>
                  </label>
                  <img src="/img/brif/checked.svg" id="checked2-12" class="checked2" style="display: none;">
                </div>
                <div data-id="13" class="style-wrap div-checked2">
                  <label for="style12" class="style-label">
                    <p class="style-wrap-title">{{ trans('brief-style.logo_style_13') }}</p>
                    <div class="style-imgs">
                      <img src="/img/brif/style49.png" alt>
                      <img src="/img/brif/style50.png" alt>
                      <img src="/img/brif/style51.png" alt>
                      <img src="/img/brif/style52.png" alt>
                    </div>
                  </label>
                  <img src="/img/brif/checked.svg" id="checked2-13" class="checked2" style="display: none;">
                </div>
                <div data-id="14" class="style-wrap div-checked2">
                  <label for="style13" class="style-label">
                    <p class="style-wrap-title">{{ trans('brief-style.logo_style_14') }}</p>
                    <div class="style-imgs">
                      <img src="/img/brif/style53.png" alt>
                      <img src="/img/brif/style54.png" alt>
                      <img src="/img/brif/style55.png" alt>
                      <img src="/img/brif/style56.png" alt>
                    </div>
                  </label>
                  <img src="/img/brif/checked.svg" id="checked2-14" class="checked2" style="display: none;">
                </div>
                <div data-id="15" class="style-wrap div-checked2">
                  <label for="style14" class="style-label">
                    <p class="style-wrap-title">{{ trans('brief-style.logo_style_15') }}</p>
                    <div class="style-imgs">
                      <img src="/img/brif/style57.png" alt>
                      <img src="/img/brif/style58.png" alt>
                      <img src="/img/brif/style59.png" alt>
                      <img src="/img/brif/style60.png" alt>
                    </div>
                  </label>
                  <img src="/img/brif/checked.svg" id="checked2-15" class="checked2" style="display: none;">
                </div>
                <div data-id="16" class="style-wrap div-checked2">
                  <label for="style15" class="style-label">
                    <p class="style-wrap-title">{{ trans('brief-style.logo_style_16') }}</p>
                    <div class="style-imgs">
                      <img src="/img/brif/style61.png" alt>
                      <img src="/img/brif/style62.png" alt>
                      <img src="/img/brif/style63.png" alt>
                      <img src="/img/brif/style64.png" alt>
                    </div>
                  </label>
                  <img src="/img/brif/checked.svg" id="checked2-16" class="checked2" style="display: none;">
                </div>
                <div data-id="17" class="style-wrap div-checked2">
                  <label for="style16" class="style-label">
                    <p class="style-wrap-title">{{ trans('brief-style.logo_style_17') }}</p>
                    <div class="style-imgs">
                      <img src="/img/brif/style65.png" alt>
                      <img src="/img/brif/style66.png" alt>
                      <img src="/img/brif/style67.png" alt>
                      <img src="/img/brif/style68.png" alt>
                    </div>
                  </label>
                  <img src="/img/brif/checked.svg" id="checked2-17" class="checked2" style="display: none;">
                </div>
                <div data-id="18" class="style-wrap div-checked2">
                  <label for="style17" class="style-label">
                    <p class="style-wrap-title">{{ trans('brief-style.logo_style_18') }}</p>
                    <div class="style-imgs">
                      <img src="/img/brif/style69.png" alt>
                      <img src="/img/brif/style70.png" alt>
                      <img src="/img/brif/style71.png" alt>
                      <img src="/img/brif/style72.png" alt>
                    </div>
                  </label>
                  <img src="/img/brif/checked.svg" id="checked2-18" class="checked2" style="display: none;">
                </div>
                <div data-id="19" class="style-wrap div-checked2">
                  <label for="style18" class="style-label">
                    <p class="style-wrap-title">{{ trans('brief-style.logo_style_19') }}</p>
                    <div class="style-imgs">
                      <img src="/img/brif/style73.png" alt>
                      <img src="/img/brif/style74.png" alt>
                      <img src="/img/brif/style75.png" alt>
                      <img src="/img/brif/style76.png" alt>
                    </div>
                  </label>
                  <img src="/img/brif/checked.svg" id="checked2-19" class="checked2" style="display: none;">
                </div>
                <div data-id="20" class="style-wrap div-checked2">
                  <label for="style19" class="style-label">
                    <p class="style-wrap-title">{{ trans('brief-style.logo_style_20') }}</p>
                    <div class="style-imgs">
                      <img src="/img/brif/style77.png" alt>
                      <img src="/img/brif/style78.png" alt>
                      <img src="/img/brif/style79.png" alt>
                      <img src="/img/brif/style80.png" alt>
                    </div>
                  </label>
                  <img src="/img/brif/checked.svg" id="checked2-20" class="checked2" style="display: none;">
                </div>
                <div data-id="21" class="style-wrap div-checked2">
                  <label for="style20" class="style-label">
                    <p class="style-wrap-title">{{ trans('brief-style.logo_style_21') }}</p>
                    <div class="style-imgs">
                      <img src="/img/brif/style81.png" alt>
                      <img src="/img/brif/style82.png" alt>
                      <img src="/img/brif/style83.png" alt>
                      <img src="/img/brif/style84.png" alt>
                    </div>
                  </label>
                  <img src="/img/brif/checked.svg" id="checked2-21" class="checked2" style="display: none;">
                </div>
                <div data-id="22" class="style-wrap div-checked2">
                  <label for="style21" class="style-label">
                    <p class="style-wrap-title">{{ trans('brief-style.logo_style_22') }}</p>
                    <div class="style-imgs">
                      <img src="/img/brif/style85.png" alt>
                      <img src="/img/brif/style86.png" alt>
                      <img src="/img/brif/style87.png" alt>
                      <img src="/img/brif/style88.png" alt>
                    </div>
                  </label>
                  <img src="/img/brif/checked.svg" id="checked2-22" class="checked2" style="display: none;">
                </div>
              </li>
              <li>
                <p>{{ trans('brief-style.colors_preference_question') }}</p>
                <label class="w100">
                  <textarea name="f29" required="required" class="materialize-textarea"></textarea>
                </label>
              </li>
              <li>
                <p>{{ trans('brief-style.successful_logos_examples_question') }}:</p>
                <label class="w100">
                  <textarea name="f30" required="required" class="materialize-textarea"></textarea>
                </label>
              </li>
              <li>
                <p>{!! trans('brief-style.unsuccessful_logos_examples_question') !!}</p>
                <label class="w100">
                  <textarea name="f31" required="required" class="materialize-textarea"></textarea>
                </label>
              </li>
              <li>
                <p>{{ trans('brief-style.economical_style_preference_question') }}</p>
                <label class="w100">
                  <textarea name="f32" required="required" class="materialize-textarea"></textarea>
                </label>
              </li>
              <li>
                <p>{{ trans('brief-style.branding_elements_development_question') }}</p>
                <div class="report-item">
                  <input id="report1" type="checkbox" name="f33[]" value="Корпоративная визитка">
                  <label for="report1">
                    {{ trans('brief-style.branding_elements_development_options.corporate_business_card') }}
                  </label>
                </div>
                <div class="report-item">
                  <input id="report2" type="checkbox" name="f33[]" value="Персональная визитка">
                  <label
                    for="report2">{{ trans('brief-style.branding_elements_development_options.personal_business_card') }}</label>
                </div>
                <div class="report-item">
                  <input id="report3" type="checkbox" name="f33[]" value="Бланк">
                  <label
                    for="report3"> {{ trans('brief-style.branding_elements_development_options.letterhead') }}</label>
                </div>
                <div class="report-item">
                  <input id="report4" type="checkbox" name="f33[]" value="Конверт">
                  <label
                    for="report4"> {{ trans('brief-style.branding_elements_development_options.envelope') }}</label>
                </div>
                <div class="report-item">
                  <input id="report5" type="checkbox" name="f33[]" value="Папка">
                  <label for="report5"> {{ trans('brief-style.branding_elements_development_options.folder') }}</label>
                </div>
                <div class="report-item">
                  <input id="report6" type="checkbox" name="f33[]" value="Шаблоны презентации PowerPoint">
                  <label
                    for="report6">{{ trans('brief-style.branding_elements_development_options.powerpoint_presentation_templates') }}</label>
                </div>
                <div class="report-item">
                  <input id="report7" type="checkbox" name="f33[]"
                         value="Шаблоны для технической, проектной и пр. документации">
                  <label
                    for="report7"> {{ trans('brief-style.branding_elements_development_options.templates_for_technical_and_project_documentation') }}</label>
                </div>
                <div class="report-item">
                  <input id="report8" type="checkbox" name="f33[]" value="Обложка CD/DVD">
                  <label
                    for="report8"> {{ trans('brief-style.branding_elements_development_options.cd_dvd_cover') }}</label>
                </div>
                <div class="report-item">
                  <input id="report9" type="checkbox" name="f33[]" value="Шаблон поздравительный открытки">
                  <label
                    for="report9"> {{ trans('brief-style.branding_elements_development_options.greeting_card_template') }}</label>
                </div>
                <div class="report-item">
                  <input id="report10" type="checkbox" name="f33[]" value="Шаблон приглашения">
                  <label
                    for="report10"> {{ trans('brief-style.branding_elements_development_options.invitation_template') }}</label>
                </div>
                <div class="report-item">
                  <input id="report11" type="checkbox" name="f33[]" value="Типовая листовка/флаер">
                  <label
                    for="report11"> {{ trans('brief-style.branding_elements_development_options.leaflet_flyer') }}</label>
                </div>
                <div class="report-item">
                  <input id="report12" type="checkbox" name="f33[]" value="Типовой буклет">
                  <label
                    for="report12">{{ trans('brief-style.branding_elements_development_options.brochure_template') }}</label>
                </div>
                <div class="report-item">
                  <input id="report13" type="checkbox" name="f33[]"
                         value="Модульная сетка для печатной и наружной рекламы">
                  <label
                    for="report13"> {{ trans('brief-style.branding_elements_development_options.modular_grid_for_print_and_outdoor_advertising') }} </label>
                </div>
                <div class="report-item">
                  <input id="report14" type="checkbox" name="f33[]" value="Бейдж">
                  <label for="report14"> {{ trans('brief-style.branding_elements_development_options.badge') }}</label>
                </div>
                <div class="report-item">
                  <input id="report15" type="checkbox" name="f33[]" value="Пропуск">
                  <label for="report15"> {{ trans('brief-style.branding_elements_development_options.pass') }}</label>
                </div>
                <div class="report-item">
                  <input id="report16" type="checkbox" name="f33[]" value="Блокнот">
                  <label
                    for="report16"> {{ trans('brief-style.branding_elements_development_options.notepad') }}</label>
                </div>
                <div class="report-item">
                  <input id="report17" type="checkbox" name="f33[]" value="Блок-куб">
                  <label
                    for="report17"> {{ trans('brief-style.branding_elements_development_options.cube_block') }}</label>
                </div>
                <div class="report-item">
                  <input id="report18" type="checkbox" name="f33[]" value="Ручка/карандаш">
                  <label
                    for="report18"> {{ trans('brief-style.branding_elements_development_options.pen_pencil') }}</label>
                </div>
                <div class="report-item">
                  <input id="report19" type="checkbox" name="f33[]" value="Настольный флаг">
                  <label
                    for="report19"> {{ trans('brief-style.branding_elements_development_options.desk_flag') }}</label>
                </div>
                <div class="report-item">
                  <input id="report20" type="checkbox" name="f33[]" value="Пепельница">
                  <label
                    for="report20">  {{ trans('brief-style.branding_elements_development_options.ashtray') }}</label>
                </div>
                <div class="report-item">
                  <input id="report21" type="checkbox" name="f33[]" value="Зажигалка">
                  <label
                    for="report21"> {{ trans('brief-style.branding_elements_development_options.lighter') }}</label>
                </div>
                <div class="report-item">
                  <input id="report22" type="checkbox" name="f33[]" value="Кружка/стакан">
                  <label
                    for="report22">  {{ trans('brief-style.branding_elements_development_options.mug_glass') }}</label>
                </div>
                <div class="report-item">
                  <input id="report23" type="checkbox" name="f33[]" value="Спецодежда (укажите – какая)">
                  <label
                    for="report23">  {{ trans('brief-style.branding_elements_development_options.workwear_specify') }}</label>
                  <textarea name="f33_1" class="materialize-textarea"></textarea>
                </div>
                <div class="report-item">
                  <input id="report24" type="checkbox" name="f33[]"
                         value="Автотранспорт (укажите марки автомобилей и спецтехники)">
                  <label
                    for="report24"> {{ trans('brief-style.branding_elements_development_options.transport_specify') }}</label>
                  <textarea name="f33_2" class="materialize-textarea"></textarea>
                </div>
                <div class="report-item">
                  <input id="report25" type="checkbox" name="f33[]" value="Стенд">
                  <label for="report25"> {{ trans('brief-style.branding_elements_development_options.stand') }}</label>
                </div>
                <div class="report-item">
                  <input id="report26" type="checkbox" name="f33[]" value="Экстерьерное оформление">
                  <label
                    for="report26"> {{ trans('brief-style.branding_elements_development_options.exterior_design') }}</label>
                </div>
                <div class="report-item">
                  <input id="report27" type="checkbox" name="f33[]" value="Интерьерное оформление">
                  <label
                    for="report27">{{ trans('brief-style.branding_elements_development_options.interior_design') }}</label>
                </div>
                <div class="report-item">
                  <input id="report28" type="checkbox" name="f33[]" value="Настольный флаг">
                  <label for="report28"> {{ trans('brief-style.branding_elements_development_options.other_specify') }}
                    :</label>
                  <textarea name="f33_3" class="materialize-textarea"></textarea>
                </div>
              </li>
              <li>
                <p>{{ trans('brief-style.branding_guidelines_type_question') }}</p>
                <div class="type-item">
                  <input id="type1" type="checkbox" name="f34[]" value="Брендбук">
                  <label for="type1">{{ trans('brief-style.branding_guidelines_type_options.brand_book') }}</label>
                </div>
                <div class="type-item">
                  <input id="type2" type="checkbox" name="f34[]" value="Guideline">
                  <label for="type2"> {{ trans('brief-style.branding_guidelines_type_options.guideline') }}</label>
                </div>
                <div class="type-item">
                  <input id="type3" type="checkbox" name="f34[]" value="Не нужно">
                  <label for="type3"> {{ trans('brief-style.branding_guidelines_type_options.guideline') }}</label>
                </div>
              </li>
              <li>
                <p>{{ trans('brief-style.additional_information_question') }}</p>
                <label class="w100">
                  <textarea name="f35" class="materialize-textarea"></textarea>
                </label>
              </li>
            </ol>
            <hr>


            <div class="garant">
              <div class="name center">{{ trans('brief-style.contact_info_title') }}</div>
              <p>{{ trans('brief-style.company_name_and_address') }}</p>
              <label class="w100">
                <textarea name="company" required="required" class="materialize-textarea"></textarea>
              </label>
              <p>{{ trans('brief-style.full_name') }}</p>
              <label class="w100">
                <textarea name="fio" required="required" class="materialize-textarea"></textarea>
              </label>
              <p>{{ trans('brief-style.contact_phone') }}</p>
              <label class="w100">
                <textarea name="phone" required="required" class="materialize-textarea"></textarea>
              </label>
              <p>{{ trans('brief-style.email_address') }}</p>
              <label class="w100">
                <textarea name="email" required="required" class="materialize-textarea"></textarea>
              </label>
              <div class="check-garant">
                <input id="test1" type="checkbox" name="confirm"
                       value="Гарантирую правильность сведений, указанных в данном брифе." required="required">
                <label for="test1"> {{ trans('brief-style.confirmation_checkbox_label') }}</label>
              </div>
            </div>

            <div class="btnSubmit">
              <button id="feedbackSubmit" type="submit" value="Отправить" name="action" class="btnOpenModalBrif">
                {{ trans('index.send_button') }}
              </button>
            </div>

          </form>
        </div>

      </section>
    </div>
  </main>

@endsection

@section('bottom-scripts')
  <script src="{{ asset('js/libs.js') }}"></script>
  <script>

      function brifSend() {
          console.log('send')
          var form = $("#brief").serialize();
          $.ajax({
              type: "POST",
              url: "/brief/send",
              data: form
          }).done(function () {
              //location.href = '/thnx';
              $('#popupmessage').addClass('active thanks success')
          });
      }

      function divCheckFirst(number) {
          console.log({number});
          $('#f26').val(number);
          $('.checked1').hide();
          $('#checked1-' + number).show();
      }

      function divCheckSecond(number) {
          var val = $('#f28-' + number).val();
          $('#checked2-' + number).hide();
          if (val == 0) {
              $('#f28-' + number).val(1);
              $('#checked2-' + number).show();
          } else {
              $('#f28-' + number).val(0);
              $('#checked2-' + number).hide();
          }
      }

      $('.div-check-1').on('click', (item) => {
          let currentTarget = item.currentTarget;
          divCheckFirst(currentTarget.dataset.id)
      })

      $('.div-checked2').on('click', (item) => {
          let currentTarget = item.currentTarget;
          divCheckSecond(currentTarget.dataset.id)
      })
      $('#brief').on('submit', () => {
          brifSend()
      });
  </script>
  <style>

    .brif-web ol, .brif-web ul {
      list-style: auto !important;
      padding: unset !important;
      padding-left: 40px !important
    }

    .brif-web ol ul {
      list-style-type: circle !important;
      margin-block-start: 0px;
      margin-block-end: 0px;
    }

    p {
      margin-bottom: 17px;
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

    .div-checked2 .checked2 {
      width: 24px
    }

    .underline {
      text-decoration: underline
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

    .blue-text {
      color: #0aa4dd
    }

    .brif .brif-web .li_subtext {
      font-size: 13px;
      font-weight: 400;
      margin-top: 0
    }

    .brif .brif-web .li_subtext span {
      font-weight: 700
    }

    .flexClass {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-align: baseline;
      -ms-flex-align: baseline;
      align-items: baseline
    }

    .flexClass input {
      margin-right: 5px
    }

    .logo-wrap {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -ms-flex-wrap: wrap;
      flex-wrap: wrap
    }

    .logo-item {
      width: 25%;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -ms-flex-direction: column;
      flex-direction: column;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      margin: 20px 0;
      padding: 10px 0;
      border: 1px solid #222
    }

    @media screen and (max-width: 700px) {
      .logo-item {
        width: 100%
      }

    }

    .logo-item .checked1 {
      width: 24px
    }

    .logo-item:not(:nth-child(4n)) {
      border-right: 0
    }

    @media screen and (max-width: 700px) {
      .logo-item:not(:nth-child(4n)) {
        border-right: 1px solid #222
      }

    }

    .logo-label {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-orient: vertical;
      -webkit-box-direction: reverse;
      -ms-flex-direction: column-reverse;
      flex-direction: column-reverse;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      justify-content: center
    }

    .logo-label span {
      text-align: center
    }

    .logo-wrap input {
      margin-bottom: 5px
    }

    .logo-label img {
      max-width: 200px
    }

    .style-imgs {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      justify-content: center;
      border: 1px solid #222
    }

    @media screen and (max-width: 767px) {
      .style-imgs img {
        width: 25%
      }

    }

    .style-imgs img:not(:last-child) {
      border-right: 1px solid #222
    }

    .style-wrap {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -ms-flex-direction: column;
      flex-direction: column;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      margin-bottom: 25px
    }

    .style-wrap-title {
      font-weight: 700;
      text-align: center;
      background: #c4c4c4
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

    @media screen and (max-width: 767px) {
      .brif .brif-web .name {
        font-size: 20px
      }

    }

    .brif .brif-web li, .brif .brif-web p {
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
      background: transparent
    }

    .brif .brif-web #feedbackSubmit:hover {
      color: #fff;
      background: #00b2d8
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

    .brif .brif-web input:not([type]):focus:not([readonly]), .brif .brif-web input[type=date]:focus:not([readonly]), .brif .brif-web input[type=datetime-local]:focus:not([readonly]), .brif .brif-web input[type=email]:focus:not([readonly]), .brif .brif-web input[type=number]:focus:not([readonly]), .brif .brif-web input[type=password]:focus:not([readonly]), .brif .brif-web input[type=search]:focus:not([readonly]), .brif .brif-web input[type=tel]:focus:not([readonly]), .brif .brif-web input[type=text]:focus:not([readonly]), .brif .brif-web input[type=time]:focus:not([readonly]), .brif .brif-web input[type=url]:focus:not([readonly]), .brif .brif-web textarea.materialize-textarea:focus:not([readonly]) {
      border-bottom: 1px solid #00b2d8;
      -webkit-box-shadow: 0 1px 0 0 #00b2d8;
      box-shadow: 0 1px 0 0 #00b2d8
    }

    .brif .brif-web ::-webkit-input-placeholder {
      color: #666;
      padding-left: 10px
    }

    .brif .brif-web ::-moz-placeholder {
      color: #666;
      padding-left: 10px
    }

    .brif .brif-web ::-ms-input-placeholder {
      color: #666;
      padding-left: 10px
    }

    .brif .brif-web :-moz-placeholder {
      color: #666;
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

    .brif .brif-web td, th {
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
        margin-top: 60px
      }

    }

  </style>
@endsection
