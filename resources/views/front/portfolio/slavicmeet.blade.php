@extends('layouts.portfolio-item')

@section('seo')
    <link rel="canonical" href="{{ Request::url() }}">
    <title> {{ trans('portfolio/slavicmeet.seo_title') }}</title>
    <meta name="description" content="{{ trans('portfolio/slavicmeet.seo_descr') }}">
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/redesign.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/portfolio/slavicmeet.css') }}">
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
                            <img src="/img/portfolio/slavicmeet/logo.png" alt="логотип.png">
                        </div>
                        <div data-wow-delay="0.5s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow fadeInUp header__txt" el="h1">
                            {{ trans('portfolio/slavicmeet.header_title') }}
                        </div>
                        <div data-wow-delay="0.5s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow fadeInDown header__icons">
                            <div class="header__img-area">
                                <img class="header__icon-img" src="/img/portfolio/our-projects/icons/laptop.png"
                                    alt="png">
                            </div>
                            <div class="header__img-area">
                                <img class="header__icon-img" src="/img/portfolio/our-projects/icons/phone.png"
                                    alt="png">
                            </div>
                            <!-- <div class="header__img-area">
                                <img class="header__icon-img" src="/img/portfolio/our-projects/icons/tablet.png"
                                    alt="png">
                            </div> -->
                        </div>
                       <div class="header__button-wrap">
                       <a target="_blank" href="http://slavicmeetspa.com.ua/" rel="nofollow" data-wow-delay="0s"
                            data-wow-duration="2s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow fadeInUp header__button">
                            <span>{{ trans('portfolio/slavicmeet.header_button') }}</span>
                        </a>
                       </div>
                    </div>
                    <div data-wow-delay="0s" data-wow-duration="2s" data-wow-iteration="1" data-wow-offset="0"
                class="wow fadeInRight header__image">
                    <img class="header__img-laptop" src="/img/portfolio/slavicmeet/header-image.png" alt="png">
                    </div>
                </div>
            </div>
            <!-- <div data-wow-delay="0s" data-wow-duration="2s" data-wow-iteration="1" data-wow-offset="0"
                class="wow fadeInRight header__phone-laptop">
                <img class="header__img-phone" src="/img/portfolio/slavicmeet/mobile-home.png" alt="png">
                <img class="header__img-laptop" src="/img/portfolio/slavicmeet/laptop.png" alt="png">
            </div> -->
        </header>
        <section class="home">
            <div class="container-lg">
                <div class="row">
                    <div class="col-lg-12 title mb-100">
                        <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow fadeInLeft title-left">
                            <span class="title__top">
                                <p class="color-title">01</p>
                                <span class="color">{{ trans('portfolio/slavicmeet.main_page1') }}</span>
                            </span>
                        </div>
                        <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow fadeInRight title-right">
                            <span class="title__bottom color-gradient color-shadow"> {{ trans('portfolio/slavicmeet.main_page2') }}</span>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div data-wow-delay="0.2s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow fadeIn home__image">
                            <img class="home__img" src="/img/portfolio/slavicmeet/home-image.png" alt="png">
                            <!-- <div class="page-title-bg page-title-bg-top">Main page</div>
                            <img src="/img/portfolio/slavicmeet/home-image.png" alt="" />
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
        <section class="mob-versions">
          <div class="mob-versions-bg-top">
          <img  src="/img/portfolio/slavicmeet/bg-mob-versions-section-top.png" alt="BG top">
          </div>
          <div class="mob-versions__body">
            <div class="container">
              <div class="mob-versions__content">
                <div data-wow-delay="0s" data-wow-duration="2s" data-wow-iteration="1" data-wow-offset="0"
                class="wow fadeInUp mob-versions__list">
                  <div class="mob-versions__image">
                    <img  src="/img/portfolio/slavicmeet/mob-version/01.png" alt="png">
                  </div>
                  <div class="mob-versions__image">
                    <img  src="/img/portfolio/slavicmeet/mob-version/02.png" alt="png">
                  </div>
                  <div class="mob-versions__image">
                    <img  src="/img/portfolio/slavicmeet/mob-version/03.png" alt="png">
                  </div>
                  <div class="mob-versions__image">
                    <img  src="/img/portfolio/slavicmeet/mob-version/04.png" alt="png">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="mob-versions__mockup" >
            <img  src="/img/portfolio/slavicmeet/web-mockup.png" alt="BG mockup">
          </div>
         
        </section>
        <!-- /.mob-versions -->
        <section class="landing-page">
          <div class="container-lg">
            <div class="landing-page__content">
              <div class="landing-page__title">
                <div class="row">
                  <div class="col-lg-12 title mb-100">
                          <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                              class="wow fadeInLeft title-left" style="flex: 0 1 40%">
                              <span class="title__top">
                                  <p class="color-title color-dark">02</p>
                                  <span class="color color-dark">{{ trans('portfolio/slavicmeet.landingPage1') }}</span>
                              </span>
                          </div>
                          <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                              class="wow fadeInRight title-right">
                              <span class="title__bottom color-white"> {{ trans('portfolio/slavicmeet.landingPage2') }}</span>
                          </div>
                      </div>
                  </div>
                </div>
              </div>
              <div class="landing-page__image">
                <img src="/img/portfolio/slavicmeet/landing-mob-mockup.png" alt="Image">
              </div>
            </div>
          </div>
        </section>
        <!-- /.landing-page -->
        <section class="landing-page-mockup">
          <div class="container-lg">
            <div class="landing-page-mockup__content">
            
              <div data-wow-delay="0s" data-wow-duration="2s" data-wow-iteration="1" data-wow-offset="0"
                class="wow fadeInUp landing-page-mockup__image">
                class="wow fadeInUp landing-page-mockup__image">
                <img src="/img/portfolio/slavicmeet/web-mockup-landing.png" alt="Image">
              </div>
            </div>
          </div>
        </section>
        <!-- /.branding-page -->
        <section class="branding-page">
          <div class="container-lg">
           <div class="branding-page__content">
            <div class="branding-page__title">
              <div class="row">
                <div class="col-lg-12 title mb-100">
                        <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow fadeInLeft title-left">
                            <span class="title__top">
                                <p class="color-title color-gradient">03</p>
                                <span class="color color-white">{{ trans('portfolio/slavicmeet.brand1') }}</span>
                            </span>
                        </div>
                        <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow fadeInRight title-right">
                            <span class="title__bottom color-gradient"> {{ trans('portfolio/slavicmeet.brand2') }}</span>
                        </div>
                    </div>
                </div>
              </div>
            </div>
            <div class="branding-page__body">
              <div class="branding-page__logos">
                <div class="branding-page__logo branding-page__logo--big">
                  <img src="/img/portfolio/slavicmeet/logos/logo-big.svg" alt="Image logo big">
                </div>
                <div class="branding-page__logo branding-page__logo--small">
                  <img src="/img/portfolio/slavicmeet/logos/logos-small.png" alt="Image logo smalls">
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
                          class="wow fadeInLeft title-left">
                          <span class="title__top">
                              <p class="color-title color-title">04</p>
                              <span class="color color-dark">{{ trans('portfolio/slavicmeet.typography1') }}</span>
                          </span>
                      </div>
                      <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                          class="wow fadeInRight title-right">
                          <span class="title__bottom color-gradient"> {{ trans('portfolio/slavicmeet.typography2') }}</span>
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
                            <p class="h2">Playfair Display</p>
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
                            <p class="h3 open-sans">Open Sans</p>
                          </div>
                          <div class="column-body align-item-center justify-content-center">
                            <p class="h3 open-sans">Aa</p>
                          </div>
                        </div>
                        <div class="column-content-line">
                          <div class="column-body">
                            <p class="h3 open-sans">Headline 3</p>
                          </div>
                          <div class="column-body align-item-center justify-content-center">
                            <p class="h3 open-sans">SemiBold, 22/30</p>
                          </div>
                        </div>
                        <div class="column-content-line">
                          <div class="column-body">
                            <p class="h4 open-sans">Headline 4</p>
                          </div>
                          <div class="column-body align-item-center justify-content-center">
                            <p class="h4 open-sans">SemiBold, 18</p>
                          </div>
                        </div>
                        <div class="column-content-line">
                          <div class="column-body">
                            <p class="body1 open-sans">Body 1</p>
                          </div>
                          <div class="column-body align-item-center justify-content-center">
                            <p class="body1 open-sans">Regular, 18/30</p>
                          </div>
                        </div>
                        <div class="column-content-line">
                          <div class="column-body">
                            <p class="body2 open-sans">Body 2</p>
                          </div>
                          <div class="column-body align-item-center justify-content-center">
                            <p class="body2 open-sans">Medium, 16/30</p>
                          </div>
                        </div>
                        <div class="column-content-line">
                          <div class="column-body">
                            <p class="body3 open-sans">Body 3</p>
                          </div>
                          <div class="column-body align-item-center justify-content-center">
                            <p class="body3 open-sans">Regular, 14/30</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                  </div>
                  <div class="row">
                    <div class="line">
                      <div class="column-title">
                        <p class="color-gradient h2">
                        Typography mobile
                        </p>
                      </div>
                      <div class="column-content">
                        <div class="column-content-line">
                          <div class="column-body">
                            <p class="headline1">Headline 1</p>
                          </div>
                          <div class="column-body align-item-center justify-content-center">
                            <p class="headline1">ExtraBold, 25</p>
                          </div>
                        </div>
                        <div class="column-content-line">
                          <div class="column-body">
                            <p class="headline2">Headline 2</p>
                          </div>
                          <div class="column-body align-item-center justify-content-center">
                            <p class="headline2">ExtraBold, 20</p>
                          </div>
                        </div>
                        <div class="column-content-line">
                          <div class="column-body">
                            <p class="headline3">Headline 3</p>
                          </div>
                          <div class="column-body align-item-center justify-content-center">
                            <p class="headline3">ExtraBold, 16/30</p>
                          </div>
                        </div>
                        <div class="column-content-line">
                          <div class="column-body">
                            <p class="headline4 open-sans color-brown">Headline 4</p>
                          </div>
                          <div class="column-body align-item-center justify-content-center">
                            <p class="headline4 open-sans color-brown">ExtraBold, 16/30</p>
                          </div>
                        </div>
                        <div class="column-content-line">
                          <div class="column-body">
                            <p class="body1 color-brown open-sans">Body1</p>
                          </div>
                          <div class="column-body align-item-center justify-content-center">
                            <p class="body1 color-brown open-sans">Regular, 18/30</p>
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
                          class="wow fadeInLeft title-left">
                          <span class="title__top">
                              <p class="color-title color-title">05</p>
                              <span class="color color-dark">{{ trans('portfolio/slavicmeet.palette1') }}</span>
                          </span>
                      </div>
                      <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                          class="wow fadeInRight title-right">
                          <span class="title__bottom color-gradient"> {{ trans('portfolio/slavicmeet.palette2') }}</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="palette__body">
                <div class="palette__row">
                  <div class="color-title">
                  Primary colors
                  </div>
                  <div class="palette__row-body">
                    <div class="palette-color color-1">
                      <p>#FFFFFF</p>
                    </div>
                    <div class="palette-color color-2">
                      <p>#FDFCFC</p>
                    </div>
                    <div class="palette-color color-3">
                      <p>#F5F5F5</p>
                    </div>
                    <div class="palette-color color-4">
                      <p>#776767</p>
                    </div>
                    <div class="palette-color color-5">
                      <p>#201D1D</p>
                    </div>
                  </div>
                </div>
                <div class="palette__row">
                  <div class="color-title">
                  Secondary colors
                  </div>
                  <div class="palette__row-body">
                    <div class="palette-color color-6">
                      <p>#FDFCFC</p>
                      <span>25%</span>
                    </div>
                    <div class="palette-color color-7">
                      <p>#7FED6E</p>
                    </div>
                    <div class="palette-color color-8">
                      <p>#EF5D6C</p>
                    </div>
                  </div>
                </div>
                <div class="palette__row">
                  <div class="color-title">
                  Gradient
                  </div>
                  <div class="palette__row-body">
                    <div class="palette-color color-9">
            
                    </div>
                    <div class="palette-color color-10">
                     
                    </div>
                    <div class="palette-color color-11">
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- /.palette -->

        <section class="error-page">
          <div class="error-page__container container-lg">
            <div class="error-page__content">
              <div class="error-page__header">
                <div class="error-page__title">
                <div class="row">
                    <div class="col-lg-12 title mb-100">
                      <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                          class="wow fadeInLeft title-left">
                          <span class="title__top">
                              <p class="color-title color-title">06</p>
                              <span class="color color-dark">{{ trans('portfolio/slavicmeet.error1') }}</span>
                          </span>
                      </div>
                      <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                          class="wow fadeInRight title-right">
                          <span class="title__bottom color-gradient"> {{ trans('portfolio/slavicmeet.error2') }}</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="error-page__body">
                <div class="error-page__image">
                  <img src="/img/portfolio/slavicmeet/404.png" alt="404 Image">
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- /.error-page -->

        <section class="thanks">
          <div class="thanks__container container">
            <div class="thanks__content">
              <div class="thanks__left">
                <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                    class="wow fadeIn">
                    <span class="thanks__title __title color-gradient">{{ trans('portfolio/slavicmeet.footer1') }}</span>
                </div>
                <div data-wow-delay="0.4s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                    class="wow fadeIn">
                    <span class="thanks__title __sub">{{ trans('portfolio/slavicmeet.footer2') }}</span>
                </div>
                <div data-wow-delay="0.4s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                    class="wow fadeIn">
                    <span class="thanks__title __sub">{{ trans('portfolio/slavicmeet.footer3') }}</span>
                </div>
              </div>
              <div class="thanks__right">
                <img src="/img/portfolio/slavicmeet/thanks.png" alt="Image">
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
