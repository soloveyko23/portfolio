@extends('layouts.portfolio-item')

@section('seo')
    <link rel="canonical" href="{{ Request::url() }}">
    <title>{{ trans('portfolio/posudgrad.seo_title') }}</title>
    <meta name="description" content="{{ trans('portfolio/posudgrad.seo_descr') }}">
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/redesign.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/portfolio/posudgrad.css') }}">
@endsection

@section('content')
    <main class='posud-grad'>
        <header class="header">
            <div class="header__container">
                <div class="header__inner">
                    <div class="header__description">
                        <div data-wow-duration="1s" class="header__logo wow fadeInDown">
                            <img class="logo-img" src="/img/portfolio/posud-grad/logo.png" alt="логотип.png">
                        </div>
                        <h1 data-wow-delay="0.5s" data-wow-duration="1s" class="header__txt wow fadeInUp">
                            {{ trans('portfolio/posudgrad.header_title') }}
                        </h1>
                        <div data-wow-delay="0.5s" data-wow-duration="1s" class="header__icons wow fadeInDown">
                            <div class="header__img-area">
                                <img class="header__icon-img" src="/img/portfolio/posud-grad/icons/laptop.png"
                                    alt="png">
                            </div>
                            <div class="header__img-area">
                                <img class="header__icon-img" src="/img/portfolio/posud-grad/icons/phone.png"
                                    alt="png">
                            </div>
                            <div class="header__img-area">
                                <img class="header__icon-img" src="/img/portfolio/posud-grad/icons/tablet.png"
                                    alt="png">
                            </div>
                        </div>
                        <a data-wow-duration="2s" class="header__button wow fadeInUp" href="http://www.posudograd.com.ua/"
                            rel="nofollow">
                            {{ trans('portfolio/posudgrad.header_button') }}
                        </a>
                    </div>
                </div>
            </div>
            <div data-wow-duration="2s" class="header__phone-laptop wow fadeInRight">
                <img class="header__img-phone" src="/img/portfolio/posud-grad/mobile-home.png" alt="png">
                <img class="header__img-laptop" src="/img/portfolio/posud-grad/laptop.png" alt="png">
            </div>
        </header>
        <section class="home">
            <div class="container relative">
                <span class="title-rotate">Main page</span>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="main-title">
                            <div data-wow-duration="1s" class="main-title__h2 wow fadeIn">
                                <h2 class="fsz-68"> {{ trans('portfolio/posudgrad.main_page') }}</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="col-sm-9 col-sm-offset-3 col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 col-lg-10 col-lg-offset-2">
                    <div data-wow-delay="0.4s" data-wow-duration="1s" class="home__image wow fadeIn">
                        <img src="/img/portfolio/posud-grad/home-image.jpg" alt="">
                    </div>
                </div>
            </div>

            <div class="home__color">
                <div class="container">
                    <div class="main-title main-title__color-solution">
                        <div data-wow-duration="1s" class="wow fadeIn text-center">
                            <h2 class="fsz-68 color-solution">{{ trans('portfolio/posudgrad.colors') }}</h2>
                        </div>

                        <div class="row justify-content-around spheres">
                            <div class="col-md-4 col-lg-2 col-lg-offset-2 sphere">
                                <div data-wow-delay="0.2s" data-wow-duration="1s" class="home__color-inner wow bounceIn">
                                    <span class="home__color-inner-bg blue"></span>
                                    <span class="home__color-inner-hex">#5fa2eb</span>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-2 col-lg-offset-2 sphere">
                                <div data-wow-delay="0.4s" data-wow-duration="1s" class="home__color-inner wow bounceIn">
                                    <span class="home__color-inner-bg green"></span>
                                    <span class="home__color-inner-hex">#b4ba4e / #92a800</span>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-2 col-lg-offset-2 sphere">
                                <div data-wow-delay="0.6s" data-wow-duration="1s" class="home__color-inner wow bounceIn">
                                    <span class="home__color-inner-bg brown"></span>
                                    <span class="home__color-inner-hex">#cd4800</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <section class="font">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-5 col-lg-offset-1">
                        <div class="color-solution-block main-title">
                            <div data-wow-duration="1s" class="wow fadeIn">
                                <h2 class="main-title__h2">
                                    {{ trans('portfolio/posudgrad.font') }}
                                </h2>
                            </div>
                        </div>
                        <div data-wow-duration="1s" class="wow fadeIn">
                            <span class="font__name">Gotham Pro</span>
                        </div>
                        <div data-wow-delay="0.2s" data-wow-duration="1s" class="wow fadeIn">
                            <p class="font__text bold">а
                                б в г д е ё ж з и й к
                                л м н о
                                п р с т у ф х ц ч ш щ
                                ъ ы ь э ю я</p>
                        </div>
                        <div data-wow-delay="0.4s" data-wow-duration="1s" class="wow fadeIn">
                            <p class="font__text regular">а
                                б в г д е ё ж з и й к
                                л м н о
                                п р с т у ф х ц ч ш щ
                                ъ ы ь э ю я</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div data-wow-delay="0.4s" data-wow-duration="1s" class="wow fadeIn">
                            <img src="/img/portfolio/posud-grad/font-image.png" alt="" class="font__bg">
                        </div>
                    </div>
                    <span class="title-rotate">Cataloge page</span>
                    <div class="col-md-12 col-lg-11">
                        <div data-wow-delay="0.2s" data-wow-duration="1s" class="font__catalog__bg wow fadeIn">
                            <img src="/img/portfolio/posud-grad/font-bg.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-sm-5 col-md-4 col-lg-4">
                        <div class="font__adaptive">
                            <div data-wow-duration="1s" class="wow fadeIn">
                                <span class="font__adaptive-title">{{ trans('portfolio/posudgrad.adaptive') }}</span>
                            </div>
                            <div data-wow-delay="0.2s" data-wow-duration="1s" class="wow fadeIn">
                                <p class="font__adaptive-sub">
                                    {{ trans('portfolio/posudgrad.adaptive_text') }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-7 col-md-7 col-lg-7">
                        <div data-wow-delay="0.3s" data-wow-duration="1s" class="font__adaptive__image wow fadeIn">
                            <img src="/img/portfolio/posud-grad/adaptive-img.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="product">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-lg-offset-2">
                        <div data-wow-duration="1s" class="product__image wow fadeIn">
                            <span class="title-rotate">Cataloge page</span>
                            <img src="/img/portfolio/posud-grad/product-img.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="all-page">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="main-title">
                            <div data-wow-duration="1s" class="wow fadeIn">
                                <h2 class="main-title__h2">
                                    {{ trans('portfolio/posudgrad.other_page') }}</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-5">
                        <div data-wow-delay="0.7s" data-wow-duration="1s" class="all-page__image wow fadeIn">
                            <img src="/img/portfolio/posud-grad/all-page-left.jpg" alt=""
                                class="all-page__w100 ">
                        </div>
                        <div data-wow-delay="0.9s" data-wow-duration="1s" class="all-page__image wow fadeIn">
                            <img src="/img/portfolio/posud-grad/all-page-left-midle.jpg" alt=""
                                class="all-page__w100 ">
                        </div>
                        <div data-wow-delay="0.9s" data-wow-duration="1s" class="all-page__image wow fadeIn">
                            <img src="/img/portfolio/posud-grad/all-page-left-bt.jpg" alt=""
                                class="all-page__w100">
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-1 relative">
                        <div name="wow fadeIn" data-wow-duration="1s">
                            <img src="/img/portfolio/posud-grad/all-page-midle.png" alt=""
                                class="all-page__middle">
                        </div>
                        <div name="fadeIn" data-wow-delay="0.2s" data-wow-duration="1s">
                            <img src="/img/portfolio/posud-grad/all-page-midle-m2.png" alt=""
                                class="all-page__middle">
                        </div>
                        <div data-wow-delay="0.4s" data-wow-duration="1s" class="wow fadeIn">
                            <img src="/img/portfolio/posud-grad/all-page-midle-m3.png" alt=""
                                class="all-page__middle">
                        </div>
                        <div data-wow-delay="0.6s" data-wow-duration="1s" class="wow fadeIn">
                            <img src="/img/portfolio/posud-grad/all-page-midle-bt.png" alt=""
                                class="all-page__middle">
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6">
                        <div data-wow-delay="0.6s" data-wow-duration="1s" class="all-page__image wow fadeIn">
                            <img src="/img/portfolio/posud-grad/all-page-right.jpg" alt=""
                                class="all-page__w100">
                        </div>
                        <div data-wow-delay="0.8s" data-wow-duration="1s" class="all-page__image wow fadeIn">
                            <img src="/img/portfolio/posud-grad/all-page-right-midle.jpg" alt=""
                                class="all-page__w100">
                        </div>
                        <div data-wow-delay="1s" data-wow-duration="1s" class="all-page__image wow fadeIn">
                            <img src="/img/portfolio/posud-grad/all-page-right-midle-2.jpg" alt=""
                                class="all-page__w100">
                        </div>
                        <div data-wow-delay="0.8s" data-wow-duration="1s" class="all-page__image wow fadeIn">
                            <img src="/img/portfolio/posud-grad/all-page-right-bt.jpg" alt=""
                                class="all-page__w100">
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-12">
                        <div class="all-page__thanks">
                            <div data-wow-duration="1s" class="wow fadeIn">
                                <span>{{ trans('portfolio/posudgrad.footer1') }}</span>
                            </div>
                            <div data-wow-delay="0.2s" data-wow-duration="1s" class="wow fadeIn">
                                <p>
                                    {{ trans('portfolio/posudgrad.footer2') }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="btn-prew-site">
                            <a rel="nofollow" href="http://www.posudograd.com.ua"
                                class="prewSite">{{ trans('portfolio/posudgrad.footer3') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@section('bottom-scripts')
    <script src="{{ asset('js/libs.js') }}"></script>
@endsection
