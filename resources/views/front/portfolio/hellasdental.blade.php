@extends('layouts.portfolio-item')

@section('seo')
    <link rel="canonical" href="{{ Request::url() }}">
    <title>{{ trans('portfolio/hellasdental.seo_title') }}</title>
    <meta name="description" content="{{ trans('portfolio/hellasdental.seo_descr') }}">
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/redesign.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/portfolio/hellasdental.css') }}">
@endsection

@section('content')
    <main class="prostoPereezd">
        <main>
            <section class="banner">
                <div class="banner__inner-wrapper">
                    <div class="banner__inner">
                        <div class="banner__left">
                            <div class="banner__left-content">
                                <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                                    class="wow name banner__site-logo">
                                </div>
                                <div data-wow-delay="0.5s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                                    class="wow name banner__label">
                                    {{ trans('portfolio/hellasdental.header_title') }}
                                </div>
                                <div data-wow-delay="0.5s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                                    class="wow name banner__icons">
                                    <div class="banner__icon banner__icon_laptop">
                                        <img src="/img/portfolio/hellasdental/laptop.svg" alt="laptop">
                                    </div>
                                    <div class="banner__icon banner__icon_smartphone">
                                        <img src="/img/portfolio/hellasdental/smartphone.svg" alt="smartphone">
                                    </div>
                                    <div class="banner__icon banner__icon_tablet">
                                        <img src="/img/portfolio/hellasdental/tablet.svg" alt="tablet">
                                    </div>
                                </div>
                                <a data-wow-delay="0s" data-wow-duration="2s" data-wow-iteration="1" data-wow-offset="0"
                                    class="wow name banner__visit-site" href="#" rel="nofollow">
                                    {{ trans('portfolio/hellasdental.header_button') }}
                                </a>
                            </div>
                        </div>
                        <div data-wow-delay="0s" data-wow-duration="2s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow name banner__right">
                            <img src="/img/portfolio/hellasdental/banner-foreground.png" alt="Laptop & smartphone"
                                class="banner__image">
                        </div>
                    </div>
                </div>
            </section>
            <section class="main-page">
                <div class="background-circle background-circle_1"></div>
                <div class="background-circle background-circle_2"></div>
                <div class="background-circle background-circle_3"></div>
                <div class="background-circle background-circle_4"></div>
                <div class="background-circle background-circle_5"></div>
                <div class="background-circle background-circle_6"></div>
                <div class="background-circle background-circle_7"></div>
                <div class="container">
                    <div class="main-page__heading">
                        <div class="main-page__section-heading-wrapper wow slideInLeft">
                            <span class="section-heading">Main</span>
                            <span class="section-heading section-heading_bottom">Page</span>
                        </div>
                        <div class="main-page__site-info-wrapper wow slideInRight">
                            <span class="main-page__site-info main-page__site-info_top">Hellas Dental</span>
                            <span
                                class="main-page__site-info main-page__site-info_bottom">{{ trans('portfolio/hellasdental.main_page') }}</span>
                        </div>
                    </div>
                    <div class="main-page__inner wow fadeInUp">
                        <div class="main-page__big-vert-label-wrapper">
                            <span class="big-vert-label">HELLAS DENATAL</span>
                        </div>
                        <div class="img-wrapper"><img src="/img/portfolio/hellasdental/home-page.png" alt=""></div>
                    </div>
                </div>
                <div class="curve curve_down-to-up main-page__curve-down-to-up"></div>
                <div class="curve curve_up-to-down main-page__curve-up-to-down"></div>
                <div class="tracery tracery_top main-page__tracery-top"></div>
            </section>
            <section class="colors">
                <div class="container">
                    <div class="colors__section-heading-wrapper">
                        <span class="section-heading">Colors</span>
                    </div>
                    <div class="colors__inner row">
                        <div class="colors__decor-dot-wrapper col-xs-2 col-md-3">
                            <div class="colors__decor-dot"></div>
                        </div>
                        <div class="colors__items row col-xs-8 col-md-6">
                            <div class="colors__item">
                                <div class="colors__img-wrapper img-wrapper"><img
                                        src="/img/portfolio/hellasdental/colors/color-1.png" alt=""></div>
                            </div>
                            <div class="colors__item">
                                <div class="colors__img-wrapper img-wrapper"><img
                                        src="/img/portfolio/hellasdental/colors/color-2.png" alt=""></div>
                            </div>
                            <div class="colors__item">
                                <div class="colors__img-wrapper img-wrapper"><img
                                        src="/img/portfolio/hellasdental/colors/color-3.png" alt=""></div>
                            </div>
                        </div>
                        <div class="colors__decor-dot-wrapper col-xs-2 col-md-3">
                            <div class="colors__decor-dot"></div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="service-page">
                <div class="background-circle background-circle_8"></div>
                <div class="background-circle background-circle_9"></div>
                <div class="background-circle background-circle_10"></div>
                <div class="container">
                    <div class="service-page__inner">
                        <div class="service-page__left">
                            <div class="service-page__section-heading-wrapper wow slideInLeft">
                                <span class="section-heading">Service</span>
                                <span class="section-heading section-heading_bottom">Page</span>
                            </div>
                            <div class="service-page__big-vert-label-wrapper wow fadeInUp"><span
                                    class="big-vert-label">SERVICE</span></div>
                        </div>
                        <div class="service-page__right wow slideInRight">
                            <div class="img-wrapper"><img src="/img/portfolio/hellasdental/service-page.png"
                                    alt=""></div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="typography">
                <div class="container">
                    <span class="typography__section-heading wow fadeInLeft">Typography</span>
                    <div class="typography__inner">
                        <span class="typography__letter wow bounceInLeft">М</span>
                        <div class="typography__text wow bounceInRight">
                            <span class="typography__text-heading">MONTSERRAT</span>
                            <span class="typography__text-content typography__text-content_top">а б в г д е ё ж з и й к л м
                                н о п р с т у ф х ц ч ш щ ъ ы ь э ю я</span>
                            <span class="typography__text-content typography__text-content_bottom">а б в г д е ё ж з и й к
                                л м н о п р с т у ф х ц ч ш щ ъ ы ь э ю я</span>
                        </div>
                    </div>
                </div>
                <div class="tracery tracery_bottom typography__tracery-bottom"></div>
            </section>
            <section class="animation-icon">
                <div class="container">
                    <div class="animation-icon__inner">
                        <div class="animation-icon__section-heading-wrapper wow fadeIn">
                            <span class="section-heading">Animation</span>
                            <span class="section-heading section-heading_bottom">icon</span>
                        </div>
                        <div class="animation-icon__items row">
                            <div class="animation-icon__item animation-icon__item_1 col-xs-3">
                                <div class="animation-icon__item-icon"></div>
                            </div>
                            <div class="animation-icon__item animation-icon__item_2 col-xs-3">
                                <div class="animation-icon__item-icon"></div>
                            </div>
                            <div class="animation-icon__item animation-icon__item_3 col-xs-3">
                                <div class="animation-icon__item-icon"></div>
                            </div>
                            <div class="animation-icon__item animation-icon__item_4 col-xs-3">
                                <div class="animation-icon__item-icon"></div>
                            </div>
                            <div class="animation-icon__item animation-icon__item_5 col-xs-3">
                                <div class="animation-icon__item-icon"></div>
                            </div>
                            <div class="animation-icon__item animation-icon__item_6 col-xs-3">
                                <div class="animation-icon__item-icon"></div>
                            </div>
                            <div class="animation-icon__item animation-icon__item_7 col-xs-3">
                                <div class="animation-icon__item-icon"></div>
                            </div>
                            <div class="animation-icon__item animation-icon__item_8 col-xs-3">
                                <div class="animation-icon__item-icon"></div>
                            </div>
                            <div class="animation-icon__item animation-icon__item_9 col-xs-3">
                                <div class="animation-icon__item-icon"></div>
                            </div>
                            <div class="animation-icon__item animation-icon__item_10 col-xs-3">
                                <div class="animation-icon__item-icon"></div>
                            </div>
                            <div class="animation-icon__item animation-icon__item_11 col-xs-3">
                                <div class="animation-icon__item-icon"></div>
                            </div>
                            <div class="animation-icon__item animation-icon__item_12 col-xs-3">
                                <div class="animation-icon__item-icon"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="other-pages">
                <div class="background-circle background-circle_11"></div>
                <div class="background-circle background-circle_12"></div>
                <div class="background-circle background-circle_13"></div>
                <div class="background-circle background-circle_14"></div>
                <div class="container">
                    <div class="other-pages__inner row">
                        <div class="other-pages__left col-xs-6">
                            <div class="other-pages__section-heading-wrapper wow slideInLeft">
                                <span class="section-heading">Other</span>
                                <span class="section-heading section-heading_bottom">Pages</span>
                            </div>
                            <div class="img-wrapper other-pages__img-wrapper wow fadeInUp"><img
                                    src="/img/portfolio/hellasdental/other-pages/page-1.png" alt=""></div>
                            <div class="img-wrapper other-pages__img-wrapper wow fadeInUp"><img
                                    src="/img/portfolio/hellasdental/other-pages/page-3.png" alt=""></div>
                            <div class="img-wrapper other-pages__img-wrapper wow fadeInUp"><img
                                    src="/img/portfolio/hellasdental/other-pages/page-5.png" alt=""></div>
                            <div class="other-pages__thanks-wrapper ">
                                <span class="other-pages__thanks">Thanks for</span>
                                <span class="other-pages__thanks other-pages__thanks_bottom">WATCHING</span>
                            </div>
                        </div>
                        <div class="other-pages__right col-xs-6">
                            <div class="img-wrapper other-pages__img-wrapper wow fadeInUp"><img
                                    src="/img/portfolio/hellasdental/other-pages/page-2.png" alt=""></div>
                            <div class="img-wrapper other-pages__img-wrapper wow fadeInUp"><img
                                    src="/img/portfolio/hellasdental/other-pages/page-4.png" alt=""></div>
                            <div class="img-wrapper other-pages__img-wrapper wow fadeInUp"><img
                                    src="/img/portfolio/hellasdental/other-pages/page-6.png" alt=""></div>
                            <div class="other-pages__thanks-wrapper">
                                <span class="other-pages__thanks">Thanks for</span>
                                <span class="other-pages__thanks other-pages__thanks_bottom">WATCHING</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="curve curve_down-to-up other-pages__curve-down-to-up"></div>
                <div class="curve curve_up-to-down other-pages__curve-up-to-down"></div>
            </section>
        </main>
    @endsection

    @section('bottom-scripts')
        <script src="{{ asset('js/libs.js') }}"></script>
    @endsection
