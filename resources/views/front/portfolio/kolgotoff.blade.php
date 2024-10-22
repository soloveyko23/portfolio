@extends('layouts.portfolio-item')

@section('seo')
    <link rel="canonical" href="{{ Request::url() }}">
    <title>{{ trans('portfolio/kolgotoff.seo_title') }}</title>
    <meta name="description" content="{{ trans('portfolio/kolgotoff.seo_descr') }}">
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/redesign.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/portfolio/kolgotoff.css') }}">
@endsection

@section('content')
    <main class="kolgotoff-new">
        <header class="header">
            <div class="header__container">
                <div class="header__inner">
                    <div class="header__description">
                        <div class="header__logo wow fadeInDown" data-wow-delay="0s" duration="1s">
                            <img src="/img/portfolio/kolgotoff/logo.png" alt="логотип.png">
                        </div>
                        <h1 class="header__txt wow fadeInUp" data-wow-delay="0.5s" duration="1s">
                            {{ trans('portfolio/kolgotoff.header_title') }}
                        </h1>
                        <div class="header__icons fadeInDown" data-wow-delay="0.5s" duration="1s">
                            <div class="header__img-area">
                                <img class="header__icon-img" src="/img/portfolio/kolgotoff/icons/laptop.png"
                                    alt="png">
                            </div>
                            <div class="header__img-area">
                                <img class="header__icon-img" src="/img/portfolio/kolgotoff/icons/phone.png" alt="png">
                            </div>
                            <div class="header__img-area">
                                <img class="header__icon-img" src="/img/portfolio/kolgotoff/icons/tablet.png"
                                    alt="png">
                            </div>
                        </div>
                        <a href="https://kolgotoff.com.ua/" class="header__button wow fadeInUp" data-wow-delay="0s"
                            duration="2s" rel="nofollow">
                            {{ trans('portfolio/kolgotoff.header_button') }}
                        </a>
                    </div>
                </div>
                <div class="header__phone-laptop wow fadeInRight" data-wow-delay="0s" duration="2s">
                    <img class="header__img-phone" src="/img/portfolio/kolgotoff/mobile-home.png" alt="png">
                    <img class="header__img-laptop" src="/img/portfolio/kolgotoff/laptop.png" alt="png">
                </div>
            </div>
        </header>
        <section class="home">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3 col-md-3 col-lg-3">
                        <div class="page-title">
                            <div class="wow slideInLeft" data-wow-delay="0s" duration="1s">
                                <span class="page-title__num">01</span>
                            </div>
                            <div class="wow slideInLeft" data-wow-delay="0.3s" duration="1s">
                                <span class="page-title__title"> {{ trans('portfolio/kolgotoff.main_page') }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="home__images wow fadeIn" data-wow-delay="0s" duration="1s">
                        <span class="bg-text">home page</span>
                        <img src="/img/portfolio/kolgotoff/home-images-bg.png" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section class="color">
            <span class="bg-text">Design</span>
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="page-title">
                            <div class="wow slideInLeft" data-wow-delay="0s" duration="1s">
                                <span class="page-title__num">02</span>
                            </div>
                            <div class="wow slideInLeft" data-wow-delay="0s" duration="1s">
                                <span class="page-title__title"
                                    data-wow-data-wow-delay=".3s">{{ trans('portfolio/kolgotoff.colors') }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="color__picker color__picker-rouse wow bounceIn" data-wow-delay="0s" duration="1s">
                            <span>
                                #fa0067
                            </span>
                        </div>
                        <div class="color__picker color__picker-green wow bounceIn" data-wow-delay="0.2s" duration="1s">
                            <span>
                                #fa0067
                            </span>
                        </div>
                        <div class="color__picker color__picker-orange wow bounceIn" data-wow-delay="0.4s" duration="1s">
                            <span>
                                #fa0067
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="fonts">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-4">
                        <div class="page-title">
                            <div class="wow slideInRight" data-wow-delay="0s" duration="1s">
                                <span class="page-title__num">03</span>
                            </div>
                            <div class="wow slideInRight" data-wow-delay="0.3s" duration="1s">
                                <span class="page-title__title">{{ trans('portfolio/kolgotoff.fonts') }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-md-offset-2 col-lg-4 col-lg-offset-2">
                        <div class="fonts__wight">
                            <div class="fonts__wight-letter wow fadeIn" data-wow-delay="0s" duration="1s">
                                <img src="/img/portfolio/kolgotoff/fonts-letter.png" alt="onts-letter.png">
                            </div>
                            <div class="fonts__wight-list">
                                <div class="fonts__wight-list-black wow fadeIn" data-wow-delay="0s" duration="1s">
                                    <span>Black</span>
                                </div>
                                <div class="fonts__wight-list-bold wow fadeIn" data-wow-delay="0.2s" duration="1s">
                                    <span>Bold</span>
                                </div>
                                <div class="fonts__wight-list-regular wow fadeIn" data-wow-delay="0.4s" duration="1s">
                                    <span>Regular</span>
                                </div>
                                <div class="fonts__wight-list-light wow fadeIn" data-wow-delay="0.6s" duration="1s">
                                    <span>light</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="fonts__text">
                            <div class="fonts__text-title wow fadeIn" data-wow-delay="0.4s" duration="1s">
                                <span>Montserrat</span>
                            </div>
                            <div class="fonts__text-paragraph wow fadeIn" data-wow-delay="0.6s" duration="1s">
                                <span>а б в г д е ё ж з и й к л м н о
                                    п р с т у ф х ц ч ш щ ъ ы ь э ю я</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="catalog">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="page-title">
                            <div class="page-title__num wow slideInLeft" data-wow-delay="0s" duration="1s">
                                <span>04</span>
                            </div>
                            <div class="page-title__title wow slideInLeft" data-wow-delay="0.3s" duration="1s">
                                <span>{{ trans('portfolio/kolgotoff.categories') }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 col-lg-8">
                        <div class="catalog__image catalog__image-mar-left wow slideInUp" data-wow-delay="0.3s"
                            duration="1s">
                            <img src="/img/portfolio/kolgotoff/catalog-left.png" alt=""
                                class="catalog__image-left">
                        </div>
                    </div>
                    <div class="col-md-5 col-lg-4">
                        <div class="catalog__tovar wow bounceIn" data-wow-delay="0.5s" duration="1s">
                            <div class="page-title">
                                <span class="page-title__num">05</span>
                                <span class="page-title__title">{{ trans('portfolio/kolgotoff.categories') }}</span>
                            </div>
                            <span
                                class="catalog__tovar-paragraph">{{ trans('portfolio/kolgotoff.categories_text') }}</span>
                        </div>
                        <div class="catalog__image catalog__image-noshadow wow slideInUp" data-wow-delay="0.2s"
                            duration="1s">
                            <img src="/img/portfolio/kolgotoff/catalog-right.png" alt=""
                                class="catalog__image-right">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="account">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="page-title">
                            <div class="page-title__num wow slideInRight" data-wow-delay="0s" duration="1s">
                                <span>06</span>
                            </div>
                            <div class="page-title__title wow slideInLeft" data-wow-delay="0s" duration="1s">
                                <span>{{ trans('portfolio/kolgotoff.account') }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4">
                        <div class="account__inner wow slideInUp" data-wow-delay="0s" duration="1s">
                            <img src="/img/portfolio/kolgotoff/account-left.png" alt=""
                                class="account__inner-image account__inner-image-left">
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4">
                        <div class="account__inner wow slideInUp" data-wow-delay="0.2s" duration="1s">
                            <img src="/img/portfolio/kolgotoff/account-middle.png" alt="account-middle.png"
                                class="account__inner-image account__inner-image-middle">
                        </div>
                        <div class="account__inner wow slideInUp" data-wow-delay="0.4s" duration="1s">
                            <img src="/img/portfolio/kolgotoff/account-middle-bottom.png" alt="account-middle-bottom.png"
                                class="account__inner-image account__inner-image-middle-bottom">
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4">
                        <div class="account__inner wow slideInUp" data-wow-delay="0.2s" duration="1s">
                            <img src="/img/portfolio/kolgotoff/account-right.png" alt=""
                                class="account__inner-image account__inner-image-right">
                        </div>
                        <span class="bg-text">Account</span>
                        <div class="account__section">
                            <span class="account__section-bg-title">Page</span>
                            <div class="account__section-paragraph wow fadeIn" data-wow-delay="0.2s" duration="1s">
                                <span>{{ trans('portfolio/kolgotoff.account_text') }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="other">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-4">
                        <div class="page-title">
                            <div class="page-title__num wow slideInRight" data-wow-delay="0s" duration="1s">
                                <span>07</span>
                            </div>
                            <div class="page-title__title wow slideInRight" data-wow-delay="0.3s" duration="1s">
                                <span>{{ trans('portfolio/kolgotoff.other_pages') }}</span>
                            </div>
                            <span class="bg-text">Other</span>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4">
                        <div class="other__inner wow fadeIn">
                            <img src="/img/portfolio/kolgotoff/other-left.png" alt="other-left.png"
                                class="other__inner-image other__inner-image-left" data-wow-delay="0s" duration="1s">
                        </div>
                        <div class="other__inner wow fadeIn" data-wow-delay="0.6s" duration="1s">
                            <img src="/img/portfolio/kolgotoff/other-left-bottm.png" alt=""
                                class="other__inner-image other__inner-image-left-bottom">
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4">
                        <div class="other__inner wow fadeIn" data-wow-delay="0.2s" duration="1s">
                            <img src="/img/portfolio/kolgotoff/other-middle.png" alt="other-middle.png"
                                class="other__inner-image other__inner-image-middle">
                        </div>
                        <div class="other__inner wow fadeIn" data-wow-delay="0.8s" duration="1s">
                            <img src="/img/portfolio/kolgotoff/other-middle-bottom.png" alt="other-middle-bottom.png"
                                class="account__inner-image other__inner-image-middle-bottom">
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4">
                        <div class="other__inner wow fadeIn" data-wow-delay="0.4s" duration="1s">
                            <img src="/img/portfolio/kolgotoff/other-right.png" alt=""
                                class="other__inner-image other__inner-image-right">
                        </div>
                        <div class="other__inner wow fadeIn" data-wow-delay="1s" duration="1s">
                            <img src="/img/portfolio/kolgotoff/other-right-bottom.png" alt=""
                                class="other__inner-image other__inner-image-right-bottom">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="thenkyou">
            <div class="container">
                <div class="row">
                    <div class="thenkyou-title wow fadeIn" data-wow-delay="0s" duration="1s">
                        <span>{{ trans('portfolio/kolgotoff.footer1') }}</span>
                    </div>
                    <div class="thenkyou-subtitle wow fadeIn" data-wow-delay="0.3s" duration="1s">
                        <span>{{ trans('portfolio/kolgotoff.footer2') }}</span>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@section('bottom-scripts')
    <script src="{{ asset('js/libs.js') }}"></script>
@endsection
