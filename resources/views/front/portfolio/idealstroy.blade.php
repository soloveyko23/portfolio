@extends('layouts.portfolio-item')

@section('seo')
    <link rel="canonical" href="{{ Request::url() }}">
    <title>{{ trans('portfolio/idealstroy.seo_title') }}</title>
    <meta name="description" content="{{ trans('portfolio/idealstroy.seo_descr') }}">
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/redesign.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/portfolio/idealstroy.css') }}">
@endsection

@section('content')
    <main class="ideal">

        <header class="header">
            <div class="header__container">
                <div class="header__inner">
                    <div class="header__description">
                        <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow fadeInDown header__logo">
                            <img src="/img/portfolio/idealstroy/logo.png" alt="логотип.png">
                        </div>
                        <h1 data-wow-delay="0.5s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow fadeInUp header__txt">
                            {{ trans('portfolio/idealstroy.header_title') }}
                        </h1>
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
                            <div class="header__img-area">
                                <img class="header__icon-img" src="/img/portfolio/our-projects/icons/tablet.png"
                                    alt="png">
                            </div>
                        </div>
                        <a data-wow-delay="0s" data-wow-duration="2s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow fadeInUp header__button" href="https://idealstroy.od.ua/" rel="nofollow">
                            {{ trans('portfolio/idealstroy.header_button') }}
                        </a>
                    </div>
                </div>
            </div>
            <div data-wow-delay="0s" data-wow-duration="2s" data-wow-iteration="1" data-wow-offset="0"
                class="wow fadeInRight header__phone-laptop">
                <img class="header__img-phone" src="/img/portfolio/idealstroy/mobile-home.png" alt="png">
                <img class="header__img-laptop" src="/img/portfolio/idealstroy/laptop.png" alt="png">
            </div>
        </header>
        <section class="main-page">
            <div class="custom_container">
                <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                    class="wow slideInDown">
                    <h2>
                        {!! trans('portfolio/idealstroy.main_page') !!}
                    </h2>
                </div>
                <div class="h2-line"></div>
                <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                    class="wow rotateIn fs-square">
                    <img src="/img/portfolio/idealstroy/fs-square.png" alt="">
                </div>
            </div>
            <div class="content">
                <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                    class="wow zoomInRight img-block">
                    <img src="/img/portfolio/idealstroy/mainpage1.png" alt="">
                </div>
            </div>
        </section>
        <section class="color-section">
            <div class="custom_container">
                <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                    class="wow slideInDown">
                    <h2>
                        {!! trans('portfolio/idealstroy.color') !!}
                    </h2>
                </div>
                <div class="h2-line"></div>
                <div class="color-wrap">
                    <div class="color-block">
                        <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow zoomIn color-item">
                            <img src="/img/portfolio/idealstroy/color-sec-yellow.png" alt="">
                        </div>
                        <p>#f1c734</p>
                    </div>
                    <div class="color-block">
                        <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow zoomIn color-item">
                            <img src="/img/portfolio/idealstroy/color-sec-red.png" alt="">
                        </div>
                        <p>#e4613e</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="font-section">
            <div class="custom_container">
                <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                    class="wow slideInDown">
                    <h2>
                        {!! trans('portfolio/idealstroy.font') !!}
                    </h2>
                </div>
                <div class="h2-line"></div>
                <div class="font-wrap">
                    <div class="alphabet-section">
                        <p class="alphabet-title">
                            Open Sans</p>
                        <div class="divider"></div>
                        <div class="alphabet-block">
                            <p class="alphabet-text uppercase">
                                a б в г д е ё ж з
                                и й к л м н о
                                <br>
                                п р с т у ф х ц ч
                                ш щ ъ ы ь э ю я
                            </p>
                            <p class="alphabet-text">
                                a б в г д е ё ж з
                                и й к л м н о
                                <br>
                                п р с т у ф х ц ч
                                ш щ ъ ы ь э ю я
                            </p>
                        </div>
                    </div>
                    <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                        class="wow rotateIn fs-square">
                        <img src="/img/portfolio/idealstroy/fs-square.png" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section class="other-pages">
            <div class="custom_container">
                <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                    class="wow slideInDown">
                    <h2>
                        {!! trans('portfolio/idealstroy.other_pages') !!}
                        <div class="h2-line"></div>
                    </h2>
                </div>
                <div class="content">
                    <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                        class="wow zoomInLeft first-block">
                        <img src="/img/portfolio/idealstroy/otherpages1.png" alt="">
                    </div>
                    <div data-wow-delay="0.5s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                        class="wow zoomInRight second-block">
                        <div class="second-page">
                            <img src="/img/portfolio/idealstroy/otherpages2.png" alt="">
                        </div>
                    </div>
                    <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                        class="wow slideInDown">
                        <h2 class="thanks">
                            {!! trans('portfolio/idealstroy.footer') !!}
                        </h2>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@section('bottom-scripts')
    <script src="{{ asset('js/libs.js') }}"></script>
@endsection
