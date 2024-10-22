@extends('layouts.portfolio-item')

@section('seo')
    <link rel="canonical" href="{{ Request::url() }}">
    <title>{{ trans('portfolio/bleach-bar.seo_title') }}</title>
    <meta name="description" content="{{ trans('portfolio/bleach-bar.seo_descr') }}">
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/redesign.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/portfolio/bleach-bar.css') }}">
@endsection

@section('content')
    <main class="bleach-bar">
        <header class="header">
            <div class="header__container">
                <div class="header__inner">
                    <div class="header__description">
                        <div data-wow-duration="1s" class="header__logo wow fadeInDown">
                            <img src="/img/portfolio/bleach-bar/logo.png" alt="логотип.png">
                        </div>
                        <h1 data-wow-delay="0.5s" data-wow-duration="1s" class="header__txt wow fadeInUp">
                            {{ trans('portfolio/bleach-bar.header_titile') }}
                        </h1>
                        <div data-wow-delay="0.5s" data-wow-duration="1s" class="header__icons wow fadeInDown">
                            <div class="header__img-area">
                                <img class="header__icon-img" src="/img/portfolio/bleach-bar/icons/laptop.png"
                                    alt="png">
                            </div>
                            <div class="header__img-area">
                                <img class="header__icon-img" src="/img/portfolio/bleach-bar/icons/phone.png"
                                    alt="png">
                            </div>
                            <div class="header__img-area">
                                <img class="header__icon-img" src="/img/portfolio/bleach-bar/icons/tablet.png"
                                    alt="png">
                            </div>
                        </div>
                        <a data-wow-duration="2s" class="header__button wow fadeInUp" href="https://bleachbar.com.ua/"
                            rel="nofollow">
                            {{ trans('portfolio/bleach-bar.header_button') }}
                        </a>
                    </div>
                </div>
            </div>
            <div data-wow-duration="2s" class="header__phone-laptop wow fadeInRight">
                <img class="header__img-phone" src="/img/portfolio/bleach-bar/mobile-home.png" alt="png">
                <img class="header__img-laptop" src="/img/portfolio/bleach-bar/laptop.png" alt="png">
            </div>
        </header>
        <section class="main-page">
            <div class="custom_container">
                <h2 name="fadeInDownBig" data-wow-duration="1s">
                    {!! trans('portfolio/bleach-bar.main_page') !!}
                </h2>
                <div class="line"></div>
            </div>
            <div data-wow-duration="1s" class="img-block wow zoomInLeft">
                <img src="/img/portfolio/bleach-bar/main-page-bg.png" alt="">
            </div>
            <div class="custom_container color-font-block">
                <h2 data-wow-duration="1s" class="wow fadeInDownBig">
                    {!! trans('portfolio/bleach-bar.colors') !!}
                </h2>
                <div class="line"></div>
                <div class="main-info-wrap">
                    <div class="main-color-wrap">
                        <div>
                            <img src="/img/portfolio/bleach-bar/green-circle.png" alt="">
                            <p>#9fc13c</p>
                        </div>
                        <div>
                            <img src="/img/portfolio/bleach-bar/light-green-circle.png" alt="">
                            <p>#f1f7e3</p>
                        </div>
                    </div>
                    <div class="main-font-wrap">
                        <div>
                            <p class="main-font-title">FuturaFuturis</p>
                            <div class="alphabet alphabet-bold">
                                <p>Bold</p>
                                <div class="line"></div>
                                <p>a б в г д е ё ж з и й к л м н о
                                    <br>
                                    п р с т у ф х ц ч ш щ ъ ы ь э ю я
                                </p>
                            </div>
                            <div class="alphabet alphabet-regular">
                                <p>Regular</p>
                                <div class="line"></div>
                                <p>a б в г д е ё ж з и й к л м н о
                                    <br>
                                    п р с т у ф х ц ч ш щ ъ ы ь э ю я
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="result">
            <div data-wow-delay="1.5s" data-wow-duration="1s" class="tooth-block wow rubberBand">
                <img src="/img/portfolio/bleach-bar/tooth2.png" alt="">
            </div>
            <div class="custom_container">
                <h2 data-wow-delay="1.5s" data-wow-duration="1s" class="wow fadeInDownBig">
                    {!! trans('portfolio/bleach-bar.example') !!}
                </h2>
                <div class="line"></div>
                <div class="gif-block">
                    <img src="/img/portfolio/bleach-bar/animation.gif" alt="">
                </div>
            </div>
        </section>
        <section class="functional">
            <div class="custom_container">
                <h2 data-wow-duration="1s" class="wow fadeInDownBig">
                    {!! trans('portfolio/bleach-bar.functional') !!}
                </h2>
                <div class="line"></div>
                <div class="functional-info-block">
                    <div class="item">
                        <div class="img-block">
                            <img src="/img/portfolio/bleach-bar/wordpress-logo.png" alt="">
                        </div>
                        <p>CMS<br><span>WordPress</span></p>
                    </div>
                    <div class="item">
                        <div class="img-block">
                            <img src="/img/portfolio/bleach-bar/bootstrap-logo.png" alt="">
                        </div>
                        <p>CSS framework<br><span>Bootstrap 4</span></p>
                    </div>
                </div>
            </div>
        </section>
        <section class="other-pages">
            <h2 data-wow-duration="1s" class="wow fadeInDownBig">
                {!! trans('portfolio/bleach-bar.other_page') !!}
                <div class="line"></div>
            </h2>

            <div class="custom_container">
                <div class="other-pages-wrap">
                    <div data-wow-delay="0.3s" data-wow-duration="1s" class="other other1 wow zoomInLeft">
                        <img src="/img/portfolio/bleach-bar/other1.png" alt="">
                    </div>
                    <div data-wow-delay="0.5s" data-wow-duration="1s" class="other other2 wow zoomInRight">
                        <img src="/img/portfolio/bleach-bar/other2.png" alt="">
                    </div>
                    <div data-wow-delay="0.7s" data-wow-duration="1s" class="other other3 wow zoomInLeft">
                        <img src="/img/portfolio/bleach-bar/other3.png" alt="">
                    </div>
                    <div data-wow-delay="0.9s" data-wow-duration="1s" class="other other4 wow zoomInRight">
                        <img src="/img/portfolio/bleach-bar/other4.png" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section class="thanks">
            <div class="custom_container">
                <h2 name="swing" data-wow-duration="1s">
                    {{ trans('portfolio/bleach-bar.footer1') }}
                </h2>
                <p>{{ trans('portfolio/bleach-bar.footer2') }}</p>
            </div>
        </section>
    </main>
@endsection

@section('bottom-scripts')
    <script src="{{ asset('js/libs.js') }}"></script>
@endsection
