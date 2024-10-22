@extends('layouts.portfolio-item')

@section('seo')
    <link rel="canonical" href="{{ Request::url() }}">
    <title>{{ trans('portfolio/planetakolgot.seo_title') }}</title>
    <meta name="description" content="{{ trans('portfolio/planetakolgot.seo_descr') }}">
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/redesign.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/portfolio/planetakolgot.css') }}">
@endsection

@section('content')
    <main class="PlanetaKolgot">
        <header class="header">
            <div class="container">
                <div class="header__inner">
                    <div class="header__description">
                        <div data-wow-duration="1s" class="header__logo wow fadeInDown">
                            <img src="/img/portfolio/planeta-kolgot/logo.png" alt="логотип.png">
                        </div>
                        <h1 data-wow-delay="0.5s" data-wow-duration="1s" class="header__txt wow fadeInUp">
                            {{ trans('portfolio/planetakolgot.header_title') }}
                        </h1>
                        <div data-wow-delay="0.5s" data-wow-duration="1s" class="header__icons wow fadeInDown">
                            <div class="header__img-area">
                                <img class="header__icon-img" src="/img/portfolio/planeta-kolgot/icons/laptop.png"
                                    alt="png">
                            </div>
                            <div class="header__img-area">
                                <img class="header__icon-img" src="/img/portfolio/planeta-kolgot/icons/phone.png"
                                    alt="png">
                            </div>
                            <div class="header__img-area">
                                <img class="header__icon-img" src="/img/portfolio/planeta-kolgot/icons/tablet.png"
                                    alt="png">
                            </div>
                        </div>
                        <a data-wow-duration="2s" class="header__button wow fadeInUp" href="https://planetakolgot.com.ua/"
                            rel="nofollow">
                            {{ trans('portfolio/planetakolgot.header_button') }}
                        </a>
                    </div>
                </div>
            </div>
            <div data-wow-duration="2s" class="header__phone-laptop wow fadeInRight">
                <img class="header__img-phone" src="/img/portfolio/planeta-kolgot/mobile-home.png" alt="png">
                <img class="header__img-laptop" src="/img/portfolio/planeta-kolgot/laptop.png" alt="png">
            </div>
        </header>
        <div class="main">
            <section class="home-page">
                <div class="main__container">
                    <h2 data-wow-duration="2s" class="title title__primary wow fadeInRight">
                        {{ trans('portfolio/planetakolgot.main_page') }}
                    </h2>
                    <div data-wow-duration="2s" class="home-page__img-area wow fadeInUp">
                        <img class="home-page__img_header" src="/img/portfolio/planeta-kolgot/home-page-header.png"
                            alt="png">
                        <img class="home-page__img" src="/img/portfolio/planeta-kolgot/home-page.png" alt="png">
                        <img class="home-page__img_phone" src="/img/portfolio/planeta-kolgot/home-page-phone.png"
                            alt="png">
                        <img class="home-page__img-arrow" src="/img/portfolio/planeta-kolgot/arrow.png" alt="png">
                    </div>
                </div>
                <div class="spheres-area spheres-area_home-page-1">
                    <div class="sphere sphere__sphere-outer">
                        <div class="sphere sphere__sphere-inner-1">
                            <div class="sphere sphere__sphere-inner-2"></div>
                        </div>
                    </div>
                </div>
                <div class="spheres-area spheres-area_home-page-2">
                    <div class="sphere sphere__sphere-outer">
                        <div class="sphere sphere__sphere-inner-1">
                            <div class="sphere sphere__sphere-inner-2"></div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="colors">
                <div class="main__container">
                    <div class="colors__inner">
                        <div class="colors__solution">
                            <h2 data-wow-duration="2s" class="title title__primary colors__title">
                                {{ trans('portfolio/planetakolgot.colors') }}
                            </h2>
                        </div>
                        <div class="colors__spheres-txt">
                            <div class="colors__flex">
                                <div class="colors__sphere-area">
                                    <div class="colors__sphere-outer">
                                        <div class="colors__sphere-inner colors__sphere-inner_green"></div>
                                    </div>
                                </div>
                                <div class="colors__line"></div>
                                <span class="colors__txt">
                                    #9FCFCC
                                </span>
                            </div>
                            <div class="colors__flex">
                                <div class="colors__sphere-area">
                                    <div class="colors__sphere-outer">
                                        <div class="colors__sphere-inner colors__sphere-inner_red"></div>
                                    </div>
                                </div>
                                <div class="colors__line"></div>
                                <span class="colors__txt">
                                    #F3B1A2
                                </span>
                            </div>
                            <div class="colors__flex">
                                <div class="colors__sphere-area">
                                    <div class="colors__sphere-outer">
                                        <div class="colors__sphere-inner colors__sphere-inner_gray"></div>
                                    </div>
                                </div>
                                <div class="colors__line"></div>
                                <span class="colors__txt">
                                    #6C6C6C
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <img class="colors__img-girl" src="/img/portfolio/planeta-kolgot/colors-girl-img.png" alt="png">
            </section>
            <section class="font-solution">
                <div class="font-solution__img-area">
                    <img src="/img/portfolio/planeta-kolgot/font-solution-img.png" class="font-solution__img"
                        alt="png">
                    <span class="font-solution__animation">
                        animation
                    </span>
                    <div class="spheres-area spheres-area_font-solution">
                        <div class="sphere sphere__sphere-outer">
                            <div class="sphere sphere__sphere-inner-1">
                                <div class="sphere sphere__sphere-inner-2"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main__container">
                    <div class="font-solution__inner">
                        <h2 data-wow-duration="2s" class="title title__primary font-solution__title wow fadeInRight">
                            {{ trans('portfolio/planetakolgot.font') }}
                        </h2>
                    </div>
                </div>
                <div data-wow-duration="2s" class="font-solution__txt wow fadeInRight">
                    <h2 data-wow-duration="2s" class="title font-solution__noto-n wow fadeInLeft">
                        <img class="font-solution__N" src="/img/portfolio/planeta-kolgot/N.png" alt="png">
                        <span class="font-solution__noto-sans">
                            noto sans
                        </span>
                    </h2>
                    <span class="title font-solution__bold">
                        Bold
                    </span>
                    <span class="title font-solution__txt-big">
                        а б в г д е ё ж з и й к л м н о п р с т у ф х ц ч ш щ ъ ы ь э ю я
                    </span>
                    <span class="font-solution__txt-small">
                        а б в г д е ё ж з и й к л м н о п р с т у ф х ц ч ш щ ъ ы ь э ю я
                    </span>
                </div>
                <img class="font-solution__img-2" src="/img/portfolio/planeta-kolgot/font-solution.png" alt="png">
            </section>
            <section class="cataloge">
                <div class="main__container">
                    <div class="cataloge__inner">
                        <h2 data-wow-duration="2s" class="title title__primary wow fadeInLeft">
                            {{ trans('portfolio/planetakolgot.catalog') }}
                        </h2>
                        <div class="cataloge__img-area">
                            <span class="cataloge__txt">
                                cataloge
                            </span>
                            <img class="cataloge__img" src="/img/portfolio/planeta-kolgot/cataloge.png" alt="png">
                        </div>
                        <div class="spheres-area spheres-area_cataloge">
                            <div class="sphere sphere__sphere-outer">
                                <div class="sphere sphere__sphere-inner-1">
                                    <div class="sphere sphere__sphere-inner-2"></div>
                                </div>
                            </div>
                        </div>
                        <img class="cataloge__img-phone" src="/img/portfolio/planeta-kolgot/home-page-phone.png"
                            alt="png">
                    </div>
                </div>
            </section>
            <section class="product-page">
                <div class="main__container">
                    <h2 data-wow-duration="2s" class="title title__primary product-page__title wow fadeInRight">
                        {{ trans('portfolio/planetakolgot.product_page') }}
                    </h2>
                    <img class="product-page__girl" src="/img/portfolio/planeta-kolgot/product-page-girl.png"
                        alt="png">
                </div>
            </section>
            <section class="img-section">
                <div class="main__container">
                    <img class="img-section__page-image" src="/img/portfolio/planeta-kolgot/product-page.png"
                        alt="png">
                </div>
            </section>
            <section class="ty">
                <div class="main__container">
                    <img class="ty__girl" src="/img/portfolio/planeta-kolgot/ty-img.png" alt="png">
                    <img class="ty__sphere" src="/img/portfolio/planeta-kolgot/ty-circle.png" alt="png">
                    <h2 data-wow-duration="2s" class="ty__title wow fadeInLeft">
                        {{ trans('portfolio/planetakolgot.footer') }}
                    </h2>
                </div>
            </section>
        </div>
    </main>
@endsection

@section('bottom-scripts')
    <script src="{{ asset('js/libs.js') }}"></script>
@endsection
