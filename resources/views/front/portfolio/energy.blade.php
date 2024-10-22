@extends('layouts.portfolio-item')

@section('seo')
    <link rel="canonical" href="{{ Request::url() }}">
    <title>{{ trans('portfolio/energy.seo_title') }}</title>
    <meta name="description" content="{{ trans('portfolio/energy.seo_descr') }}">
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/redesign.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/portfolio/energy.css') }}">
@endsection
@section('content')
    <main>
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
                                <span>{!! trans('portfolio/energy.banner_title') !!}
                            </div>
                            <div data-wow-delay="0.5s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                                class="wow fadeInDown banner__icons">
                                <div class="banner__icon banner__icon_laptop">
                                    <img src="/img/portfolio/energy/laptop.svg" alt="laptop">
                                </div>
                                <div class="banner__icon banner__icon_smartphone">
                                    <img src="/img/portfolio/energy/smartphone.svg" alt="smartphone">
                                </div>
                                <div class="banner__icon banner__icon_tablet">
                                    <img src="/img/portfolio/energy/tablet.svg" alt="tablet">
                                </div>
                            </div>
                            <a data-wow-delay="0s" data-wow-duration="2s" data-wow-iteration="1" data-wow-offset="0"
                                class="wow fadeInUp banner__visit-site" href="#" rel="nofollow">
                                {{ trans('portfolio/energy.banner_button') }}
                            </a>
                        </div>
                    </div>
                    <div data-wow-delay="0s" data-wow-duration="2s" data-wow-iteration="1" data-wow-offset="0"
                        class="wow fadeInRight banner__right">
                        <img src="/img/portfolio/energy/banner-foreground.png" alt="Laptop & smartphone"
                            class="banner__image">
                    </div>
                </div>
            </div>
        </section>
        <section class="main-page">
            <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                class="wow slideInLeft container">
                <div class="main-page__inner inner">
                    <span class="section-heading">{{ trans('portfolio/energy.main_page') }}</span>
                    <div class="main-page__preview">
                        <img src="/img/portfolio/energy/main-page-preview.png" alt="main-page__preview">
                    </div>
                    <div class="side-label">
                        <div class="prefix">
                            <div class="prefix__dot"></div>
                            <div class="prefix__line"></div>
                        </div>
                        <div class="side-label__line"></div>
                        <span class="side-label__text"><span>MAIN </span>PAGE</span>
                    </div>
                </div>
            </div>
        </section>
        <section class="color-solution">
            <div class="container">
                <span data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                    class="wow slideInRight section-heading">
                    {!! trans('portfolio/energy.colors') !!}
                </span>
                <div class="color-solution__inner inner">
                    <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                        class="wow slideInLeft color-solution__image">
                        <img src="/img/portfolio/energy/color-solution-image.png" alt="color-solution__image">
                    </div>
                    <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                        class="wow slideInRight color-solution__colors">
                        <div class="color-solution__color color-solution__color-1"></div>
                        <div class="color-solution__color color-solution__color-2"></div>
                        <div class="color-solution__color color-solution__color-3"></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="product-page">
            <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                class="wow slideInRight container">
                <div class="product-page__inner inner">
                    <span class="section-heading">{{ trans('portfolio/energy.product') }}</span>
                    <div class="product-page__preview">
                        <img src="/img/portfolio/energy/product-page-preview.png" alt="product-page__preview">
                    </div>
                    <div class="side-label">
                        <div class="prefix">
                            <div class="prefix__line"></div>
                            <div class="prefix__dot"></div>
                        </div>
                        <div class="side-label__line"></div>
                        <span class="side-label__text"><span>PRODUCT </span>PAGE</span>
                    </div>
                </div>
            </div>
        </section>
        <section class="font-solution">
            <div class="container">
                <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                    class="wow slideInLeft font-solution__inner">
                    <span class="section-heading">{!! trans('portfolio/energy.fonts') !!}</span>
                    <div class="font-solution__font font-solution__font_gilroy">
                        <span class="font-solution__title">Gilroy</span>
                        <span class="font-solution__example font-solution__example_caps">а б в г д е ё ж з и й к л м н о п
                            р с т у ф х ц ч ш щ ъ ы ь э ю я</span>
                        <span class="font-solution__example">а б в г д е ё ж з и й к л м н о п р с т у ф х ц ч ш щ ъ ы ь э
                            ю я</span>
                    </div>
                    <div class="font-solution__font font-solution__font_goethe">
                        <span class="font-solution__title">Goethe Titel CY</span>
                        <span class="font-solution__example font-solution__example_caps">а б в г д е ё ж з и й к л м н о п
                            р с т у ф х ц ч ш щ ъ ы ь э ю я</span>
                        <span class="font-solution__example">а б в г д е ё ж з и й к л м н о п р с т у ф х ц ч ш щ ъ ы ь э
                            ю я</span>
                    </div>
                </div>
                <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                    class="wow slideInRight font-solution__image">
                    <img src="/img/portfolio/energy/font-solution-image.png" alt="font-solution__image">
                </div>
            </div>
        </section>
        <section data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
            class="wow fadeIn logo-dev">
            <div class="container">
                <div class="section-heading-wrapper">
                    <div class="prefix">
                        <div class="prefix__dot"></div>
                        <div class="prefix__line"></div>
                    </div>
                    <span class="section-heading">{!! trans('portfolio/energy.logo') !!}</span>
                </div>
            </div>
            <div class="logo-dev__inner inner">
                <div class="logo-dev__logo"><img src="/img/portfolio/energy/logo-dev-logo.png" alt="logo-dev__logo">
                </div>
                <div class="logo-dev__image"><img src="/img/portfolio/energy/logo-dev-image.png" alt="logo-dev__image">
                </div>
            </div>
        </section>
        <section class="other-pages">
            <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                class="wow bounceInUp container">
                <div class="other-pages__inner inner">
                    <div class="other-pages__column">
                        <div class="other-pages__page"><img src="/img/portfolio/energy/other-pages/other-pages-page-1.png"
                                alt="other-pages__page"></div>
                        <div class="other-pages__page"><img src="/img/portfolio/energy/other-pages/other-pages-page-2.png"
                                alt="other-pages__page"></div>
                        <div class="other-pages__page"><img src="/img/portfolio/energy/other-pages/other-pages-page-3.png"
                                alt="other-pages__page"></div>
                    </div>
                    <div class="other-pages__column">
                        <div class="section-heading-wrapper">
                            <span class="section-heading">{!! trans('portfolio/energy.other_pages') !!}</span>
                            <div class="prefix">
                                <div class="prefix__line"></div>
                                <div class="prefix__dot"></div>
                            </div>
                        </div>
                        <div class="other-pages__page"><img src="/img/portfolio/energy/other-pages/other-pages-page-4.png"
                                alt="other-pages__page"></div>
                        <div class="other-pages__page"><img src="/img/portfolio/energy/other-pages/other-pages-page-5.png"
                                alt="other-pages__page"></div>
                    </div>
                </div>
                <span class="other-pages__thanks"><span class="other-pages__thanks_big">{!! trans('portfolio/energy.footer1') !!}
                    </span>{!! trans('portfolio/energy.footer2') !!}</span>
            </div>
        </section>
    </main>
@endsection

@section('bottom-scripts')
    <script src="{{ asset('js/libs.js') }}"></script>
@endsection
