@extends('layouts.portfolio-item')

@section('seo')
    <link rel="canonical" href="{{ Request::url() }}">
    <title>{{ trans('portfolio/topkolgot.seo_title') }}</title>
    <meta name="description" content="{{ trans('portfolio/topkolgot.seo_descr') }}">
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/redesign.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/portfolio/topkolgot.css') }}">
@endsection
@section('content')
    <main class="top-kolgot">
        <section class="header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="header__logo">
                            <img src="/img/portfolio/topkolgot/logo.png" alt="" class="header__logo-image">
                        </div>
                        <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow fadeIn header__inner">
                            <div class="header__inner-num">
                                <span class="header__inner-num-border">1</span>
                            </div>
                            <div class="header__inner-content">
                                <h1 class="header__inner-content-title">{{ trans('portfolio/topkolgot.header_title') }}</h1>
                                <div class="header__inner-content-sub">
                                    <img src="/img/portfolio/topkolgot/laptop.svg" alt=""
                                        class="header__inner-content-sub-icon">
                                    <img src="/img/portfolio/topkolgot/smartphone.svg" alt=""
                                        class="header__inner-content-sub-icon">
                                    <img src="/img/portfolio/topkolgot/tablet.svg" alt=""
                                        class="header__inner-content-sub-icon">
                                </div>
                            </div>
                        </div>
                        <div data-wow-delay="0.2s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow fadeIn header__inner">
                            <div class="header__inner-num">
                                <span class="header__inner-num-border">2</span>
                            </div>
                            <div class="header__inner-content">
                                <span class="header__inner-content-title">{{ trans('portfolio/topkolgot.colors') }}</span>
                                <div class="header__inner-content-sub">
                                    <span
                                        class="header__inner-content-sub-color header__inner-content-sub-color-lightrouse">#ffa6b7</span>
                                    <span
                                        class="header__inner-content-sub-color header__inner-content-sub-color-rouse">#fb587e</span>
                                </div>
                            </div>
                        </div>
                        <div data-wow-delay="0.4s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow fadeIn header__inner">
                            <div class="header__inner-num">
                                <span class="header__inner-num-border">3</span>
                            </div>
                            <div class="header__inner-content">
                                <span class="header__inner-content-title">{{ trans('portfolio/topkolgot.fonts') }}</span>
                                <div class="header__inner-content-sub">
                                    <span class="header__inner-content-sub-title">Fira Sans</span>
                                    <span class="header__inner-content-sub-fonts">а б в г д е ё ж з и й к л м н о
                                        п р с т у ф х ц ч ш щ ъ ы ь э ю я</span>
                                </div>
                            </div>
                        </div>
                        <div data-wow-delay="0.6s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow fadeIn header__inner">
                            <div class="header__inner-num">
                                <span class="header__inner-num-border">4</span>
                            </div>
                            <div class="header__inner-content">
                                <span class="header__inner-content-title">{{ trans('portfolio/topkolgot.fonts') }}</span>
                                <div class="header__inner-content-sub">
                                    <ul class="header__inner-content-list">
                                        <li>
                                            <p>{{ trans('portfolio/topkolgot.category') }}</p>
                                        </li>
                                        <li>
                                            <p>{{ trans('portfolio/topkolgot.product_page') }} </p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-wow-delay="0.4s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                    class="wow fadeIn ">
                    <img src="/img/portfolio/topkolgot/header-image-absl.png" alt="" class="header__image_absolute">
                </div>
            </div>
        </section>
        <section class="home">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="title-page">
                            <span class="title-page__bg">Main page</span>
                            <span data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                                class="wow zoomIn title-page__main">
                                {{ trans('portfolio/topkolgot.main_page') }}
                            </span>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow zoomIn home__inner">
                            <img src="/img/portfolio/topkolgot/home-bg.jpg" alt="" class="home__inner-image">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="color">
            <div class="container">
                <div class="row">
                    <div class="title-page">
                        <span data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow zoomIn title-page__main">
                            {{ trans('portfolio/topkolgot.colors2') }}
                        </span>
                        <span class="title-page__bg">Color</span>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4">
                        <div class="color__block">
                            <div class="color__block-layer color__block-layer-lightrouse color-anim">
                                <span class="color__block-layer-hex">#ffa6b7</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4">
                        <div class="color__block">
                            <div class="color__block-layer color__block-layer-rouse color-anim">
                                <span class="color__block-layer-hex">#fb587e</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4">
                        <div class="color__block">
                            <div class="color__block-layer color__block-layer-black color-anim">
                                <span class="color__block-layer-hex">#283036</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="typography">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="title-page">
                            <span class="title-page__bg">Typography</span>
                            <span data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                                class="wow zoomIn title-page__main">
                                {{ trans('portfolio/topkolgot.fonts2') }}
                            </span>
                        </div>
                    </div>
                    <div class="col-lg-6 col-lg-offset-3">
                        <div class="typography__fonts">
                            <span data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                                class="wow fadeIn typography__fonts-family">
                                Bicubik
                            </span>
                            <span data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                                class="wow fadeIn typography__fonts-text">а б в г д е ё ж з и й к л м н о
                                п р с т у ф х ц ч ш щ ъ ы ь э ю я
                            </span>
                        </div>
                        <div class="typography__inscription">
                            <span data-wow-delay="0.3s" data-wow-duration="1s" data-wow-iteration="1"
                                data-wow-offset="0" class="wow fadeIn typography__inscription-family">
                                Fira sans
                            </span>
                            <div class="typography__inscription-list">
                                <span data-wow-delay="0.5s" data-wow-duration="1s" data-wow-iteration="1"
                                    data-wow-offset="0" class="wow fadeIn typography__inscription-family">
                                    Bold
                                </span>
                                <p data-wow-delay="0.6s" data-wow-duration="1s" data-wow-iteration="1"
                                    data-wow-offset="0" class="wow fadeIn typography__inscription-list-paragraph bold">
                                    а б в г д е ё ж з и й к л м н о п р с т у ф х ц ч ш щ ъ ы ь э ю я
                                </p>
                                <span data-wow-delay="0.7s" data-wow-duration="1s" data-wow-iteration="1"
                                    data-wow-offset="0" class="wow fadeIn typography__inscription-list-name">
                                    Semibold
                                </span>
                                <p data-wow-delay="0.8s" data-wow-duration="1s" data-wow-iteration="1"
                                    data-wow-offset="0" class="wow fadeIn typography__inscription-list-paragraph semibol">
                                    а б в г д е ё ж з и й к л м н о п р с т у ф х ц ч ш щ ъ ы ь э ю я
                                </p>
                                <span data-wow-delay="0.9s" data-wow-duration="1s" data-wow-iteration="1"
                                    data-wow-offset="0" class="wow fadeIn typography__inscription-list-name">
                                    Regular
                                </span>
                                <p data-wow-delay="1s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                                    class="wow fadeIn typography__inscription-list-paragraph regular">
                                    а б в г д е ё ж з и й к л м н о п р с т у ф х ц ч ш щ ъ ы ь э ю я
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="category">
            <div class="container">
                <div class="row">
                    <div class="title-page">
                        <span data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow zoomIn title-page__main">
                            {{ trans('portfolio/topkolgot.catogery2') }}
                        </span>
                        <span class="title-page__bg">Category</span>
                    </div>
                    <div class="col-lg-12">
                        <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow zoomIn product__inner">
                            <img src="/img/portfolio/topkolgot/category-inner-img.jpg" alt=""
                                class="category__inner-image">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="product">
            <div class="container">
                <div class="row">
                    <div class="title-page">
                        <span data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow zoomIn title-page__main">
                            {{ trans('portfolio/topkolgot.product_page2') }}
                        </span>
                        <span class="title-page__bg">Product page</span>
                    </div>
                    <div class="col-lg-12">
                        <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow zoomIn product__inner">
                            <img src="/img/portfolio/topkolgot/product-page.jpg" alt=""
                                class="category__inner-image">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="thankyou">
            <div class="container">
                <div class="row">
                    <span data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                        class="wow fadeIn thankyou__title">
                        {{ trans('portfolio/topkolgot.footer1') }}
                    </span>
                    <span data-wow-delay="0.2s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                        class="wow fadeIn thankyou__sub">
                        {{ trans('portfolio/topkolgot.footer2') }}
                    </span>
                    <div class="col-lg-12">
                        <div class="btn-prew-site">
                            <a rel="nofollow" href="https://top-kolgot.com.ua/" class="prewSite">
                                {{ trans('portfolio/topkolgot.footer_button') }}</a>
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
