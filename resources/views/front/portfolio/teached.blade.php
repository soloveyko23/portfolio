@extends('layouts.portfolio-item')

@section('seo')
    <link rel="canonical" href="{{ Request::url() }}">
    <title> {{ trans('portfolio/teached.seo_title') }}</title>
    <meta name="description" content="{{ trans('portfolio/teached.seo_descr') }}">
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/redesign.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/portfolio/teached.css') }}">
@endsection
@section('content')
    <main class="home-wood">
        <!--set meta data-->

        <!--end set meta data-->
        <header class="header">
            <div class="header__container container">
                <div class="header__inner">
                    <div class="header__description">
                        <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow fadeInDown header__logo">
                            <img src="/img/portfolio/teached/logo.png" alt="логотип.png">
                        </div>
                        <div data-wow-delay="0.5s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow fadeInUp header__txt" el="h1">
                            {{ trans('portfolio/teached.header_title') }}
                        </div>
                        <div data-wow-delay="0.5s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow fadeInDown header__icons">
                            <div class="header__img-area">
                                <img class="header__icon-img" src="/img/portfolio/teached/tablet.png"
                                    alt="png">
                            </div>
                            <div class="header__img-area">
                                <img class="header__icon-img" src="/img/portfolio/teached/phone.png"
                                    alt="png">
                            </div>
                            <!-- <div class="header__img-area">
                                <img class="header__icon-img" src="/img/portfolio/our-projects/icons/tablet.png"
                                    alt="png">
                            </div> -->
                        </div>
                       <div class="header__button-wrap">
                       <a target="_blank" href="http://teachedspa.com.ua/" rel="nofollow" data-wow-delay="0s"
                            data-wow-duration="2s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow fadeInUp header__button">
                            <span>{{ trans('portfolio/teached.header_button') }}</span>
                        </a>
                       </div>
                    </div>
                    <div data-wow-delay="0s" data-wow-duration="2s" data-wow-iteration="1" data-wow-offset="0"
                class="wow fadeInRight header__image">
                    <img class="header__img-laptop" src="/img/portfolio/teached/header-image.png" alt="png">
                    </div>
                </div>
            </div>
            <!-- <div data-wow-delay="0s" data-wow-duration="2s" data-wow-iteration="1" data-wow-offset="0"
                class="wow fadeInRight header__phone-laptop">
                <img class="header__img-phone" src="/img/portfolio/teached/mobile-home.png" alt="png">
                <img class="header__img-laptop" src="/img/portfolio/teached/laptop.png" alt="png">
            </div> -->
        </header>
        <section class="home">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 title mb-100">
                        <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow fadeInLeft title-left">
                            <span class="title__top">
                                <p class="color-title">01</p>
                                <div class="title__top-wrapper">
                                  <span class="title__bottom color-gradient color-shadow"> {{ trans('portfolio/teached.main_page2') }}</span>
                                  <span class="color">{{ trans('portfolio/teached.main_page1') }}</span>
                                </div>
                            </span>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div data-wow-delay="0.2s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow fadeIn home__image">
                            <img class="home__img" src="/img/portfolio/teached/home-image.png" alt="png">
                            <!-- <div class="page-title-bg page-title-bg-top">Main page</div>
                            <img src="/img/portfolio/teached/home-image.png" alt="" />
                            <div class="home__image-rowbg-bottom"></div>
                            <div class="page-title-bg page-title-bg-bottom">Design</div>
                            <div class="page-title-bg page-title-bg-bottom-right">
                                Ux/Ui
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="mockups">
          <div class="container">
            <div class="mockups__list">
              <div class="mockups__list-image"><img src="/img/portfolio/teached/list/01.png" alt="Image Mockup 01"></div>
              <div class="mockups__list-image"><img src="/img/portfolio/teached/list/02.png" alt="Image Mockup 02"></div>
              <div class="mockups__list-image"><img src="/img/portfolio/teached/list/03.png" alt="Image Mockup 03"></div>
              <div class="mockups__list-image"><img src="/img/portfolio/teached/list/04.png" alt="Image Mockup 04"></div>
            </div>

          </div>
        </section>
        <!-- /.mockups -->
      

        <section class="mockups-mobile">
          <div class="container">
            <div class="mockups-mobile__content">
              <div class="mockups-mobile__hero">
                <img  src="/img/portfolio/teached/mobile-mockup-hero.png" alt="BG top">
              </div>
              <div class="mockups-mobile__images">
                <img  src="/img/portfolio/teached/mobile-mockup.png" alt="BG top">
              </div>
            </div>

          </div>
        </section>
        <section class="dashboard">
          <div class="container">
            <div class="row">
              <div class="col-lg-12 title mb-100">
                  <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                      class="wow fadeInLeft title-left">
                      <span class="title__top">
                          <p class="color-title">02</p>
                          <div class="title__top-wrapper">
                            <span class="title__bottom color-gradient color-shadow"> {{ trans('portfolio/teached.main_page2') }}</span>
                            <span class="color">{{ trans('portfolio/teached.main_page1') }}</span>
                          </div>
                      </span>
                  </div>
              </div>
            </div>
          
          </div>
          <div class="dashboard__content">
              <div class="dashboard__image">
              <img src="/img/portfolio/teached/dashboard.png" alt="Image">
              </div>
            </div>
        </section>
        <section class="features">
          <div class="container">
            <div class="row">
              <div class="col-lg-12 title mb-100">
                  <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                      class="wow fadeInLeft title-left" style="flex: 0 1 33%;">
                      <span class="title__top">
                          <p class="color-title">03</p>
                          <div class="title__top-wrapper">
                            <span class="title__bottom color-gradient color-shadow"> {{ trans('portfolio/teached.features2') }}</span>
                            <span class="color">{{ trans('portfolio/teached.features1') }}</span>
                          </div>
                      </span>
                  </div>
              </div>
            </div>
          
          </div>
          <div class="features__content">
            <div class="features__title">
            Create your unique lessons
            </div>
              <div class="features__image">
           
              <picture>
                <source srcset="/img/portfolio/teached/features.png" media="(min-width: 600px)" />
                <img src="/img/portfolio/teached/features-mob.png" alt="Image">
              </picture>
              </div>
            </div>
        </section>
        <!-- /.landing-page -->
        <!-- /.branding-page -->
        <section class="branding-page">
          <div class="container-lg">
           <div class="branding-page__content">
            <div class="branding-page__title">
              <div class="row">
              <div class="col-lg-12 title mb-100">
                  <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                      class="wow fadeInLeft title-left" style="flex: 0 1 33%;">
                      <span class="title__top">
                          <p class="color-title">04</p>
                          <div class="title__top-wrapper">
                            <span class="title__bottom color-gradient color-shadow"> {{ trans('portfolio/teached.features2') }}</span>
                            <span class="color">{{ trans('portfolio/teached.features1') }}</span>
                          </div>
                      </span>
                  </div>
              </div>
              </div>
            </div>
            <div class="branding-page__body">
              <div class="branding-page__logos">
              <div class="branding-page__logo branding-page__logo--small">
                  <img src="/img/portfolio/teached/logos/logos-small.png" alt="Image logo smalls">
                  <span>Icon logo</span>
                </div>
                <div class="branding-page__logo branding-page__logo--big">
                  <img src="/img/portfolio/teached/logos/logo-big.svg" alt="Image logo big">
                  <span>Text logo</span>
                </div>
                
              </div>
            </div>
           </div>
          </div>
        </section>
        <!-- /.branding-page -->
        <section class="typography">
          <div class="typography__container container-lg">
            <div class="typography__content">
              <div class="typography__header">
                <div class="typography__title">
                  <div class="row">
                    <div class="col-lg-12 title mb-100">
                        <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow fadeInLeft title-left" style="flex: 0 1 33%;">
                            <span class="title__top">
                                <p class="color-title">05</p>
                                <div class="title__top-wrapper">
                                  <span class="title__bottom color-gradient color-shadow"> {{ trans('portfolio/teached.typography2') }}</span>
                                  <span class="color">{{ trans('portfolio/teached.typography1') }}</span>
                                </div>
                            </span>
                        </div>
                    </div>
                  </div>
                </div>
              </div>


              <div class="typography__body">
                <div class="typography__font">
                  <div class="row">
                    <div class="line">
                      <div class="column-title">
                        <p class="color-gradient h2">
                          Font 1
                        </p>
                      </div>
                      <div class="column-content">
                        <div class="column-content-line mb-50">
                          <div class="column-body">
                            <p class="h2">Geometria</p>
                          </div>
                          <div class="column-body">
                            <p class="h2">Aa</p>
                          </div>
                        </div>
                        <div class="column-content-line">
                            <div class="column-body">
                              <p class="h1">Headline 1</p>
                            </div>
                            <div class="column-body align-item-center justify-content-center">
                              <p class="h1">ExtraBold, 60</p>
                            </div>
                          </div>
                          <div class="column-content-line">
                            <div class="column-body">
                              <p class="h2">Headline 2</p>
                            </div>
                            <div class="column-body align-item-center justify-content-center">
                              <p class="h2">ExtraBold, 35</p>
                            </div>
                          </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="line">
                      <div class="column-title">
                        <p class="color-gradient h2">
                          Font 2
                        </p>
                      </div>
                      <div class="column-content">
                     
                        <div class="column-content-line mb-50">
                          <div class="column-body">
                            <p class="h3 mulish">Mulish</p>
                          </div>
                          <div class="column-body align-item-center justify-content-center">
                            <p class="h3 mulish">Aa</p>
                          </div>
                        </div>
                        <div class="column-content-line">
                          <div class="column-body">
                            <p class="h3 mulish">Headline 3</p>
                          </div>
                          <div class="column-body align-item-center justify-content-center">
                            <p class="h3 mulish">SemiBold, 22/30</p>
                          </div>
                        </div>
                        <div class="column-content-line">
                          <div class="column-body">
                            <p class="h4 mulish">Headline 4</p>
                          </div>
                          <div class="column-body align-item-center justify-content-center">
                            <p class="h4 mulish">SemiBold, 18</p>
                          </div>
                        </div>
                        <div class="column-content-line">
                          <div class="column-body">
                            <p class="body1 mulish">Body 1</p>
                          </div>
                          <div class="column-body align-item-center justify-content-center">
                            <p class="body1 mulish">Regular, 18/30</p>
                          </div>
                        </div>
                        <div class="column-content-line">
                          <div class="column-body">
                            <p class="body2 mulish">Body 2</p>
                          </div>
                          <div class="column-body align-item-center justify-content-center">
                            <p class="body2 mulish">Medium, 16/30</p>
                          </div>
                        </div>
                        <div class="column-content-line">
                          <div class="column-body">
                            <p class="body3 mulish">Body 3</p>
                          </div>
                          <div class="column-body align-item-center justify-content-center">
                            <p class="body3 mulish">Regular, 14/30</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- /.typography -->
        <section class="palette">
          <div class="palette__container container-lg">
            <div class="palette__content">
              <div class="palette__header">
                <div class="palette__title">
                  <div class="row">
                  <div class="col-lg-12 title mb-100">
                        <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow fadeInLeft title-left" style="flex: 0 1 33%;">
                            <span class="title__top">
                                <p class="color-title">06</p>
                                <div class="title__top-wrapper">
                                  <span class="title__bottom color-gradient color-shadow"> {{ trans('portfolio/teached.palette2') }}</span>
                                  <span class="color">{{ trans('portfolio/teached.palette1') }}</span>
                                </div>
                            </span>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="palette__body">
                <div class="palette__row">
                
                  <div class="palette__row-body">
                    <div class="palette-color color-1">
                      <p>#FFFFFF</p>
                    </div>
                    <div class="palette-color color-2">
                      <p>#FF4785</p>
                    </div>
                    <div class="palette-color color-3">
                      <p>#707EFF</p>
                    </div>
                    <div class="palette-color color-4">
                      <p>#007AFF</p>
                    </div>
                    <div class="palette-color color-5">
                      <p>Gradient</p>
                    </div>
                    <div class="palette-color color-6">
                      <p>#111111</p>
                    </div>
                    <div class="palette-color color-7">
                      <p>Gradient</p>
                    </div>
                  </div>
                </div>
                
              </div>
            </div>
          </div>
        </section>
        <!-- /.palette -->


        <section class="thanks">
          <div class="thanks__container container">
            <div class="thanks__content">
             
              <div class="thanks__image">
                <img src="/img/portfolio/teached/thanks.png" alt="Image">
              </div>
            </div>
          </div>
        </section>
        <!-- /.thanks -->
    </main>
@endsection

@section('bottom-scripts')
    <script src="{{ asset('js/libs.js') }}"></script>
@endsection
