@extends('layouts.portfolio-item')

@section('seo')
    <link rel="canonical" href="{{ Request::url() }}">
    <title>{{ trans('portfolio/cappi.seo_title') }}</title>
    <meta name="description" content="{{ trans('portfolio/cappi.seo_descr') }}">
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/redesign.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/portfolio/cappi.css') }}">
@endsection

@section('content')
    <main class="cappi">
        <header class="header">
            <div data-wow-duration="1.6s" class="header__container wow fadeIn">
                <div class="header__inner">
                    <div class="header__description">
                        <a href="https://cappi.od.ua/" data-wow-duration="1s" class='header__logo wow bounceInLeft'
                            rel="nofollow">
                            <img src="/img/portfolio/cappi/header-logo.png" alt="logo">
                        </a>
                        <h1 data-wow-duration="1.2s" class="header__title wow bounceInLeft">
                            {{ trans('portfolio/cappi.header_title') }}
                        </h1>
                        <div data-wow-duration="1.4s" class="header__icons wow bounceInLeft">
                            <img class="header__icon header__icon-laptop" src="/img/portfolio/cappi/laptop.png"
                                alt="icon">
                            <img class="header__icon header__icon-smartphone" src="/img/portfolio/cappi/smartphone.png"
                                alt="icon">
                            <img class="header__icon header__icon-tablet" src="/img/portfolio/cappi/tablet.png"
                                alt="icon">
                        </div>
                        <div data-wow-duration="1.6s" class="header__button-container wow bounceInLeft">
                            <a class="header__button" href="https://cappi.od.ua/" rel="nofollow">Перейти на cайт</a>
                        </div>
                    </div>
                </div>
                <div data-wow-duration="1.6s" class="header__img wow bounceInDown">
                    <img src="/img/portfolio/cappi/header-img.png" alt="background">
                </div>
            </div>
        </header>

        <div>
            <section class="home-page">
                <div class="container">
                    <p data-wow-duration="1.6s" class="title home-page__title wow bounceInRight">
                        {{ trans('portfolio/cappi.main_page') }}
                    </p>
                    <div data-wow-duration="1.6s" class="wow fadeInUp">
                        <img class="img-shadow img-fluid" src="/img/portfolio/cappi/home-page(img).jpg" alt="">
                    </div>
                </div>
            </section>

            <section class="typography">
                <div class="container">
                    <div class="typography__colors">
                        <div class="typography__inner">
                            <div class="typography__title-inner">
                                <p data-wow-duration="1.6s" class="title typography__colors-title wow bounceInRight">
                                    {{ trans('portfolio/cappi.colors') }}
                                </p>
                            </div>
                        </div>
                        <div class="typography__colors-inner">
                            <p data-wow-duration="0.5s" class="typography__color-name typography__color-name1 wow zoomIn">
                                #2fa37a
                            </p>
                            <p data-wow-duration="1s" class="typography__color-name typography__color-name2 wow zoomIn">
                                #f4b143
                            </p>
                            <p data-wow-duration="1.5s" class="typography__color-name typography__color-name3 wow zoomIn">
                                #dc4343
                            </p>
                        </div>
                    </div>

                    <div class="typography__fonts">
                        <p data-wow-duration="1.6s" class="title typography__fonts-title wow bounceInLeft">
                            {{ trans('portfolio/cappi.fonts') }}
                        </p>
                        <div class="typography__fonts-inner">
                            <div data-wow-duration="1.8s"
                                class="typography__fonts-name-inner typography__fonts-name-inner_1 wow bounceInUp">
                                <p class="typography__fonts-name typography__fonts-name1">Rotonda C</p>
                                <div>
                                    <span class="typography__fonts-letters typography__fonts-letters1">
                                        а б в г д е ё ж з и й к л м н о п р с т у ф х ц ч ш щ ъ ы ь э ю я
                                    </span>
                                </div>
                            </div>
                            <div data-wow-duration="2s"
                                class="typography__fonts-name-inner typography__fonts-name-inner_2 wow bounceInUp">
                                <p class="typography__fonts-name typography__fonts-name2">Geometria</p>
                                <div>
                                    <span class="typography__fonts-letters typography__fonts-letters2">
                                        а б в г д е ё ж з и й к л м н о п р с т у ф х ц ч ш щ ъ ы ь э ю я
                                    </span>
                                </div>
                            </div>
                            <div data-wow-duration="2s" class="typography__fonts-image wow zoomIn">
                                <img class="img-fluid" src="/img/portfolio/cappi/typography-fonts(img).png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="categories">
                <img class="categories-bg" src="/img/portfolio/cappi/categories-bg.png" alt="">
                <div class="container">
                    <div class="categories__title-inner">
                        <p data-wow-duration="1.6s"class="title categories__title wow bounceInRight">
                            {{ trans('portfolio/cappi.category') }}
                        </p>
                    </div>
                    <div data-wow-duration="1.6s" class="wow fadeInUp">
                        <img class="categories__main-img img-shadow img-fluid" src="/img/portfolio/cappi/categories-img.jpg"
                            alt="">
                    </div>
                </div>
            </section>

            <section class="product-page">
                <img class="product-page__bg-img" src="/img/portfolio/cappi/product-left-img.png" alt="">
                <div class="container">
                    <div class="product-page__inner">
                        <div class="product-page__title-inner">
                            <p data-wow-duration="1.6s" class="title product-page__title wow bounceInLeft">
                                {{ trans('portfolio/cappi.product') }}
                            </p>
                            <div data-wow-duration="1.6s" class="wow fadeInUp">
                                <img class="product-page__card img-fluid img-shadow"
                                    src="/img/portfolio/cappi/product-card.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <img class="product-page__bg-2" src="/img/portfolio/cappi/product-page-bg-2.png" alt="">
            </section>

            <section class="other-pages">
                <div class="container">
                    <div class="other-pages__inner">
                        <p data-wow-duration="1.6s" class="title other-pages__title wow bounceInRight">
                            {{ trans('portfolio/cappi.other_pages') }}
                        </p>
                        <div class="other-pages__img-inner">
                            <div data-wow-duration="1.6s" class="other-pages__card1 wow bounceInUp">
                                <img class="img-shadow img-fluid" src="/img/portfolio/cappi/other-pages-img1.jpg"
                                    alt="">
                            </div>
                            <div data-wow-duration="1.6s" class="other-pages__card2 bounceInLeft">
                                <img class="img-shadow img-fluid" src="/img/portfolio/cappi/other-pages-img2.jpg"
                                    alt="">
                            </div>
                            <div data-wow-duration="1.6s" class="other-pages__card3 wow bounceInRight">
                                <img class="img-shadow img-fluid" src="/img/portfolio/cappi/other-pages-img3.jpg"
                                    alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <footer class="footer">
            <div class="footer__inner">
                <div class="container">
                    <div data-wow-delay="1s" data-wow-duration="1s" class="footer__description wow jackInTheBox">
                        <p class="footer__title">{{ trans('portfolio/cappi.footer1') }}</p>
                        <span class="footer__subtitle">{{ trans('portfolio/cappi.footer2') }}</span>
                    </div>
                </div>
                <img class="footer__footer-img" src="/img/portfolio/cappi/footer-img.png" alt="">
            </div>
        </footer>
    </main>
@endsection

@section('bottom-scripts')
    <script src="{{ asset('js/libs.js') }}"></script>
@endsection
