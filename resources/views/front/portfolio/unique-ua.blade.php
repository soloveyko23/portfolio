@extends('layouts.portfolio-item')

@section('seo')
    <link rel="canonical" href="{{ Request::url() }}">
    <title>{{ trans('portfolio/unique-ua.seo_title') }}</title>
    <meta name="description" content="{{ trans('portfolio/unique-ua.sep_descr') }}">
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/redesign.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/portfolio/unique-ua.css') }}">
@endsection
@section('content')
    <main class="unique-ua">
        <section class="banner">
            <div class="banner__inner-wrapper">
                <div class="banner__inner">
                    <div class="banner__left">
                        <div class="banner__left-content">
                            <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                                class="wow fadeInDown banner__site-logo">
                            </div>
                            <div data-wow-delay="0.5s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                                class="wow fadeInUp banner__label">
                                {{ trans('portfolio/unique-ua.header_title') }}
                            </div>
                            <div data-wow-delay="0.5s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                                class="wow fadeInDown banner__icons">
                                <div class="banner__icon banner__icon_laptop">
                                    <img src="/img/portfolio/unique-ua/laptop.svg" alt="laptop">
                                </div>
                                <div class="banner__icon banner__icon_smartphone">
                                    <img src="/img/portfolio/unique-ua/smartphone.svg" alt="smartphone">
                                </div>
                                <div class="banner__icon banner__icon_tablet">
                                    <img src="/img/portfolio/unique-ua/tablet.svg" alt="tablet">
                                </div>
                            </div>
                            <a data-wow-delay="0s" data-wow-duration="2s" data-wow-iteration="1" data-wow-offset="0"
                                class="wow fadeInUp banner__visit-site" href="#" rel="nofollow">
                                {{ trans('portfolio/unique-ua.header_button') }}
                            </a>
                        </div>
                    </div>
                    <div data-wow-delay="0s" data-wow-duration="2s" data-wow-iteration="1" data-wow-offset="0"
                        class="wow fadeInRight banner__right">
                        <img src="/img/portfolio/unique-ua/banner-foreground.png" alt="Laptop & smartphone"
                            class="banner__image">
                    </div>
                </div>
            </div>
        </section>
        <section class="main-page">
            <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                class="wow slideInRight main-page__background-image-wrapper">
                <img src="/img/portfolio/unique-ua/main-page-background.png" alt="Photo"
                    class="main-page__background-image">
            </div>
            <div class="container">
                <span data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                    class="wow slideInLeft main-page__heading">
                    {!! trans('portfolio/unique-ua.main_page') !!}
                </span>
                <span data-wow-delay="0.5s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                    class="wow slideInRight main-page__inner">
                    <div class="main-page__background-image-wrapper main-page__background-image-wrapper_beyond-layout">
                        <img src="/img/portfolio/unique-ua/main-page-background.png" alt="Photo"
                            class="main-page__background-image">
                    </div>
                    <div class="main-page__left">
                        <span class="main-page__side-label">ICONS</span>
                        <div class="main-page__icons">
                            <div class="main-page__icon main-page__icon_smile"></div>
                            <div class="main-page__icon main-page__icon_factory"></div>
                            <div class="main-page__icon main-page__icon_building"></div>
                            <div class="main-page__icon main-page__icon_trees"></div>
                            <div class="main-page__icon main-page__icon_clock"></div>
                        </div>
                    </div>
                    <div class="main-page__right">
                        <img src="/img/portfolio/unique-ua/main-page-preview.png" alt="main-page-preview"
                            class="main-page__image">
                    </div>
                </span>
            </div>
        </section>
        <section class="color-solution">
            <div class="container">
                <div class="color-solution__inner">
                    <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                        class="wow slideInLeft color-solution__heading-wrapper">
                        <span class="color-solution__heading">{!! trans('portfolio/unique-ua.colors') !!}</span>
                    </div>
                    <div class="color-solution__colors">
                        <div data-wow-delay="0.2s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow fadeInRight color-solution__color color-solution__color_color-1">
                            <div class="color-solution__color-square"></div>
                        </div>
                        <div data-wow-delay="0.4s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow fadeInRight color-solution__color color-solution__color_color-2">
                            <div class="color-solution__color-square"></div>
                        </div>
                        <div data-wow-delay="0.6s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow fadeInRight color-solution__color color-solution__color_color-3">
                            <div class="color-solution__color-square"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="logo-dev">
            <div class="container">
                <div class="logo-dev__inner">
                    <span data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                        class="wow slideInRight logo-dev__heading">
                        {!! trans('portfolio/unique-ua.logo') !!}
                    </span>
                    <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                        class="wow slideInLeft logo-dev__image-wrapper">
                        <img class="logo-dev__image" src="/img/portfolio/unique-ua/logo-dev-preview.png"
                            alt="logo-dev-preview">
                    </div>
                </div>
            </div>
        </section>
        <section class="font-solution">
            <div class="container">
                <div class="font-solution__inner">
                    <span data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                        class="wow slideInLeft font-solution__heading">
                        {!! trans('portfolio/unique-ua.fonts') !!}
                    </span>
                    <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                        class="wow bounceInUp font-solution__content">
                        <div class="font-solution__font font-solution__font_oswald">
                            <div class="chain">
                                <div class="chain__left-circle"></div>
                                <div class="chain__right-circle"></div>
                            </div>
                            <span class="font-solution__font-title">OSWALD</span>
                            <span class="font-solution__font-example font-solution__font-example_caps"> а б в г д е ё ж з и
                                й к л м н о п р с т у ф х ц ч ш щ ъ ы ь э ю я</span>
                            <span class="font-solution__font-example"> а б в г д е ё ж з и й к л м н о п р с т у ф х ц ч ш
                                щ ъ ы ь э ю я</span>
                        </div>
                        <div class="font-solution__font font-solution__font_montserrat">
                            <div class="chain">
                                <div class="chain__left-circle"></div>
                                <div class="chain__right-circle"></div>
                            </div>
                            <span class="font-solution__font-title">Montserrat</span>
                            <span class="font-solution__font-example font-solution__font-example_caps"> а б в г д е ё ж з и
                                й к л м н о п р с т у ф х ц ч ш щ ъ ы ь э ю я</span>
                            <span class="font-solution__font-example"> а б в г д е ё ж з и й к л м н о п р с т у ф х ц ч ш
                                щ ъ ы ь э ю я</span>
                        </div>
                        <div class="font-solution__image-wrapper">
                            <img src="/img/portfolio/unique-ua/letter.png" alt="Letter" class="font-solution__image">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
            class="wow bounceInUp tour-page">
            <div class="tour-page__image-wrapper">
                <img src="/img/portfolio/unique-ua/tour-page-background.png" alt="Photo" class="tour-page__image">
            </div>
            <div class="container">
                {!! trans('portfolio/unique-ua.tour') !!}
                <div class="tour-page__inner">
                    <div class="tour-page__image-wrapper tour-page__image-wrapper_beyond-layout">
                        <img src="/img/portfolio/unique-ua/tour-page-background.png" alt="Photo"
                            class="tour-page__background-image">
                    </div>
                    <div class="tour-page__left">
                        <img src="/img/portfolio/unique-ua/tour-page-preview.png" alt="tour-page-preview"
                            class="tour-page__preview">
                        <div class="tour-page__preview-mobile-wrapper">
                            <img src="/img/portfolio/unique-ua/tour-page-preview-mobile.png"
                                alt="tour-page-preview-mobile" class="tour-page__preview-mobile">
                        </div>
                    </div>
                    <div class="tour-page__right">
                        <span class="tour-page__side-label">Mobile</span>
                    </div>
                </div>
            </div>
        </section>
        <section class="calendar">
            <div class="container">
                <span data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                    class="wow slideInLeft calendar__heading">
                    {!! trans('portfolio/unique-ua.calendar') !!}
                </span>
                <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                    class="wow flipInX calendar__inner">
                    <img src="/img/portfolio/unique-ua/calendar-preview.png" alt="calendar-preview"
                        class="calendar__preview">
                    <span class="calendar__side-label">CALENDAR</span>
                </div>
            </div>
        </section>
        <section class="other-pages">
            <div class="container">
                <span data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                    class="wow slideInRight other-pages__heading">
                    {!! trans('portfolio/unique-ua.other_pages') !!}
                </span>
                <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                    class="wow bounceInUp other-pages__inner">
                    <div class="other-pages__left col-sm-6">
                        <div class="other-pages__page-wrapper">
                            <img src="/img/portfolio/unique-ua/other-pages/other-page-1.png" alt="Page"
                                class="other-pages__page">
                        </div>
                        <div class="other-pages__page-wrapper">
                            <img src="/img/portfolio/unique-ua/other-pages/other-page-2.png" alt="Page"
                                class="other-pages__page">
                        </div>
                    </div>
                    <div class="other-pages__right col-sm-6">
                        <div class="other-pages__page-wrapper">
                            <img src="/img/portfolio/unique-ua/other-pages/other-page-3.png" alt="Page"
                                class="other-pages__page">
                        </div>
                        <div class="other-pages__page-wrapper">
                            <img src="/img/portfolio/unique-ua/other-pages/other-page-4.png" alt="Page"
                                class="other-pages__page">
                        </div>
                    </div>
                </div>
                <span class="other-pages__thanks">Thanks for <span
                        class="other-pages__thanks_big-label">watching</span></span>
            </div>
        </section>
    </main>
@endsection

@section('bottom-scripts')
    <script src="{{ asset('js/libs.js') }}"></script>
@endsection
