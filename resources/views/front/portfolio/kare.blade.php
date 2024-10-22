@extends('layouts.portfolio-item')

@section('seo')
    <link rel="canonical" href="{{ Request::url() }}">
    <title>{{ trans('portfolio/kare.seo_title') }}</title>
    <meta name="description" content="{{ trans('portfolio/kare.seo_descr') }}">
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/redesign.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/portfolio/kare.css') }}">
@endsection

@section('content')
    <main class="kare">
        <header class="header">
            <div class="header__container">
                <div class="header__inner">
                    <div class="header__description">
                        <div class="header__logo header__logo wow fadeInDown" data-wow-delay="0s" duration="1s">
                            <img src="/img/portfolio/kare/logo.png" alt="logo.png">
                        </div>
                        <h1 class="header__txt wow fadeInUp" data-wow-delay="0.5s" duration="1s">
                            {{ trans('portfolio/kare.header_title') }}
                        </h1>
                        <div class="header__icons wow fadeInDown" data-wow-delay="0.5s" duration="1s">
                            <div class="header__img-area">
                                <img class="header__icon-img" src="/img/portfolio/kare/icons/laptop.png" alt="png">
                            </div>
                            <div class="header__img-area">
                                <img class="header__icon-img" src="/img/portfolio/kare/icons/phone.png" alt="png">
                            </div>
                            <div class="header__img-area">
                                <img class="header__icon-img" src="/img/portfolio/kare/icons/tablet.png" alt="png">
                            </div>
                        </div>
                        <a href="https://kare.com.ua/" class="header__button wow fadeInUp" data-wow-delay="0s"
                            duration="2s" rel="nofollow">
                            {{ trans('portfolio/kare.header_button') }}
                        </a>
                    </div>
                </div>
            </div>
            <div class="header__phone-laptop wow fadeInRight" data-wow-delay="0s" duration="2s">
                <img class="header__img-phone" src="/img/portfolio/kare/mobile-home.png" alt="png">
                <img class="header__img-laptop" src="/img/portfolio/kare/laptop.png" alt="png">
            </div>
        </header>

        <section class="kare__home">
            <div class="container">
                <div class="flex-col-6 kare__styles-font margin_mb-40 wow zoomInLeft" data-wow-delay="0s" duration="1s">
                    <p class="section-title section-title-black">{!! trans('portfolio/kare.main_page') !!}</p>
                </div>
                <div class="flex-col-11 flex-offset-1">
                    <div class="wow slideInRight" data-wow-delay="0s" duration="1s">
                        <figure class="kare__home-wrap">
                            <img class="screen" src="/img/portfolio/kare/home-page.png" alt="home page">
                        </figure>
                    </div>
                </div>
            </div>
        </section>

        <section class="kare__styles">
            <div class="container">
                <div class="flex-wrap">
                    <div class="flex-col-6 kare__styles-font wow flipInY" data-wow-delay="0s" duration="1s">
                        <p class="section-title section-title-white">{!! trans('portfolio/kare.fonts_page') !!}</p>
                        <div class="rotate-blk">
                            <p>Montserrat</p>
                            <span>а б в г д е ё ж з и й к л м н о</span>
                            <span>п р с т у ф х ц ч ш щ ъ ы ь э ю я</span>
                        </div>
                    </div>
                    <div class="flex-col-6 kare__styles-color wow flipInY" data-wow-delay="0s" duration="1s">
                        <p class="section-title section-title-black">{!! trans('portfolio/kare.colors') !!}</p>
                        <div class="colorsBlk">
                            <div class="colorsBlk__item">
                                <span class="color color-red"></span>
                                <p>#e31e24</p>
                            </div>

                            <div class="colorsBlk__item">
                                <span class="color color-grey"></span>
                                <p>#888888</p>
                            </div>

                            <div class="colorsBlk__item">
                                <span class="color color-green"></span>
                                <p>#009628</p>
                            </div>

                            <div class="colorsBlk__item">
                                <span class="color color-black"></span>
                                <p>#000000</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="kare__category">
            <div class="container">
                <div class="flex-col-6 kare__styles-font wow zoomInLeft" data-wow-delay="0s" duration="1s">
                    <p class="section-title section-title-black">{!! trans('portfolio/kare.categoies') !!}</p>
                </div>
                <div class="flex-wrap">
                    <div class="kare__category-img-field wow slideInLeft" data-wow-delay="0s" duration="1s">
                        <figure class="kare__category-wrap flex-col-11">
                            <img class="screen" src="/img/portfolio/kare/category-page.png" alt="home page">
                        </figure>
                    </div>
                </div>
            </div>
        </section>

        <section class="kare__product">
            <div class="container">
                <div class="wow zoomInLeft" data-wow-delay="0s" duration="1s">
                    <p class="section-title section-title-black"_p>{!! trans('portfolio/kare.productage') !!}</p>
                </div>
                <div class="flex-col-11 flex-offset-1 wow slideInLeft" data-wow-delay="0s" duration="1s">
                    <figure class="kare__product-wrap">
                        <img class="screen" src="/img/portfolio/kare/product-page.png" alt="home page">
                    </figure>
                </div>
            </div>
        </section>

        <section class="kare__adaptive">
            <div class="container">
                <div class="flex-wrap">
                    <div class="flex-col-6 kare__adaptive-info">
                        <div class="wow zoomInLeft" data-wow-delay="0s" duration="1s">
                            <p class="section-title section-title-black">{!! trans('portfolio/kare.adaptive') !!}</p>
                        </div>
                        <div class="wow fadeInDown" data-wow-delay="0s" duration="1s">
                            <p class="text">{{ trans('portfolio/kare.adaptive_text') }}</p>
                        </div>
                    </div>
                    <div class="wow zoomInUp" data-wow-delay="0s" duration="1s">
                        <figure class="flex-col-6 kare__adaptive-img">
                            <img src="/img/portfolio/kare/phone-img.png" alt="adaptive">
                        </figure>
                    </div>
                </div>
            </div>
        </section>

        <section class="kare__cart">
            <div class="container">
                <div class="kare__cart-field wow zoomInLeft" data-wow-delay="0s" duration="1s">
                    <p class="section-title section-title-black">{!! trans('portfolio/kare.shopping_cart') !!}</p>
                </div>
                <div class="flex-wrap">
                    <div class="wow slideInRight" data-wow-delay="0s" duration="1s">
                        <figure class="flex-col-11 kare__cart-wrap">
                            <img src="/img/portfolio/kare/cart-page.png" alt="cart page" class="screen">
                        </figure>
                    </div>
                </div>
            </div>
        </section>

        <section class="kare__other">
            <div class="container">
                <div class="flex-wrap">
                    <div class="flex-col-6">
                        <div class="wow zoomInLeft" data-wow-delay="0s" duration="1s">
                            <p class="section-title section-title-white">
                                <span>{{ trans('portfolio/kare.other_pages1') }}</span>
                                {!! trans('portfolio/kare.other_pages2') !!}
                            </p>
                        </div>
                        <div class="wow bounceInLeft" data-wow-delay="0s" duration="1s">
                            <figure class="img-wrap blog">
                                <img src='/img/portfolio/kare/blog-page.png' class="screen" alt="blog page">
                            </figure>
                        </div>
                        <div class="wow bounceInDown" data-wow-delay="0s" duration="1s">
                            <figure class="img-wrap colection">
                                <img src="/img/portfolio/kare/colection-page.png" class="screen" alt="blog page">
                            </figure>
                        </div>
                        <div class="wow bounceInRight" data-wow-delay="0s" duration="1s">
                            <figure class="img-wrap contacts">
                                <img src="/img/portfolio/kare/contacts-page.png" class="screen" alt="blog page">
                            </figure>
                        </div>
                        <div class="wow bounceInUp" data-wow-delay="0s" duration="1s">
                            <figure class="img-wrap error">
                                <img src="/img/portfolio/kare/404-page.png" class="screen" alt="blog page">
                            </figure>
                        </div>
                    </div>

                    <div class="flex-col-6 p-t60">
                        <div class="wow bounceInUp" data-wow-delay="0s" duration="1s">
                            <figure class="img-wrap article">
                                <img src="/img/portfolio/kare/article-page.png" class="screen" alt="blog page">
                            </figure>
                        </div>
                        <div class="wow bounceInRight" data-wow-delay="0s" duration="1s">
                            <figure class="img-wrap portfolio">
                                <img src="/img/portfolio/kare/portfolio-page.png" class="screen" alt="blog page">
                            </figure>
                        </div>
                        <div class="wow bounceInLeft" data-wow-delay="0s" duration="1s">
                            <figure class="img-wrap work">
                                <img src="/img/portfolio/kare/work-page.png" class="screen" alt="blog page">
                            </figure>
                        </div>
                        <div class="wow bounceInDown" data-wow-delay="0s" duration="1s">
                            <figure class="img-wrap single">
                                <img src="/img/portfolio/kare/single-page.png" class="screen" alt="blog page">
                            </figure>
                        </div>
                        <div class="thx-blk wow fadeIn" data-wow-delay="0.3s" duration="1s">
                            <p>{{ trans('portfolio/kare.footer1') }}
                                {!! trans('portfolio/kare.footer2') !!}
                            </p>
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
