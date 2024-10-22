@extends('layouts.portfolio-item')

@section('seo')
    <link rel="canonical" href="{{ Request::url() }}">
    <title>{{ trans('portfolio/brain-up.seo_title') }}</title>
    <meta name="description" content="{{ trans('portfolio/brain-up.seo_descr') }}">
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/redesign.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/portfolio/brain-up.css') }}">
@endsection

@section('content')
    <main class="brain-up">
        <section class="banner">
            <div class="banner__inner-wrapper">
                <div class="banner__inner">
                    <div class="banner__left">
                        <div class="banner__left-content">
                            <div data-wow-duration="1s" class="banner__site-logo wow fadeInDown">
                            </div>
                            <div data-wow-delay="0.5s" data-wow-duration="1s" class="banner__label wow fadeInUp">
                                {{ trans('portfolio/brain-up.header') }}
                            </div>
                            <div data-wow-delay="0.5s" data-wow-duration="1s" class="banner__icons wow fadeInDown">
                                <div class="banner__icon banner__icon_laptop">
                                    <img src="/img/portfolio/brain-up/laptop.svg" alt="laptop">
                                </div>
                                <div class="banner__icon banner__icon_smartphone">
                                    <img src="/img/portfolio/brain-up/smartphone.svg" alt="smartphone">
                                </div>
                                <div class="banner__icon banner__icon_tablet">
                                    <img src="/img/portfolio/brain-up/tablet.svg" alt="tablet">
                                </div>
                            </div>
                            <a data-wow-duration="2s" class="banner__visit-site fadeInUp" href="https://brain-up.com.ua/"
                                rel="nofollow">
                                {{ trans('portfolio/brain-up.header_button') }}
                            </a>
                        </div>
                    </div>
                    <div data-wow-delay="0s" data-wow-duration="2s" class="banner__right wow fadeInRight">
                        <img src="/img/portfolio/brain-up/banner-foreground.png" alt="Laptop & smartphone"
                            class="banner__image">
                    </div>
                </div>
            </div>
        </section>

        <section class="main-page">
            <div class="figure figure-1"><img src="/img/portfolio/brain-up/figures/dots-1.png" alt="figure"></div>
            <div class="figure figure-2"><img src="/img/portfolio/brain-up/figures/dots-&-arrow.png" alt="figure"></div>
            <div data-wow-duration="1s" class="container wow bounceInUp">
                <span class="section-heading">{{ trans('portfolio/brain-up.main_page') }}</span>
                <div class="main-page__inner">
                    <div class="main-page__preview">
                        <img src="/img/portfolio/brain-up/main-page-preview.png" alt="main-page__preview">
                    </div>
                    <div class="main-page__mobile-preview">
                        <img src="/img/portfolio/brain-up/main-page-mobile-preview.png" alt="main-page__mobile-preview">
                    </div>
                </div>
            </div>
        </section>

        <section class="color-solution">
            <div data-wow-duration="1s" class="container wow slideInLeft">
                <span class="section-heading">{{ trans('portfolio/brain-up.colors') }}</span>
                <div class="color-solution__inner">
                    <div class="color-solution__color-wrapper">
                        <div class="color-solution__color color-solution__color-1">
                            <div class="color-solution__big-circle"></div>
                            <div class="color-solution__small-circle color-solution__small-circle_t"></div>
                            <div class="color-solution__small-circle color-solution__small-circle_r"></div>
                            <div class="color-solution__small-circle color-solution__small-circle_b"></div>
                            <div class="color-solution__small-circle color-solution__small-circle_l"></div>
                        </div>
                    </div>
                    <div class="color-solution__color-wrapper">
                        <div class="color-solution__color color-solution__color-2">
                            <div class="color-solution__big-circle"></div>
                            <div class="color-solution__small-circle color-solution__small-circle_t"></div>
                            <div class="color-solution__small-circle color-solution__small-circle_r"></div>
                            <div class="color-solution__small-circle color-solution__small-circle_b"></div>
                            <div class="color-solution__small-circle color-solution__small-circle_l"></div>
                        </div>
                    </div>
                    <div class="color-solution__color-wrapper">
                        <div class="color-solution__color color-solution__color-3">
                            <div class="color-solution__big-circle"></div>
                            <div class="color-solution__small-circle color-solution__small-circle_t"></div>
                            <div class="color-solution__small-circle color-solution__small-circle_r"></div>
                            <div class="color-solution__small-circle color-solution__small-circle_b"></div>
                            <div class="color-solution__small-circle color-solution__small-circle_l"></div>
                        </div>
                    </div>
                    <div class="color-solution__color-wrapper">
                        <div class="color-solution__color color-solution__color-4">
                            <div class="color-solution__big-circle"></div>
                            <div class="color-solution__small-circle color-solution__small-circle_t"></div>
                            <div class="color-solution__small-circle color-solution__small-circle_r"></div>
                            <div class="color-solution__small-circle color-solution__small-circle_b"></div>
                            <div class="color-solution__small-circle color-solution__small-circle_l"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section data-wow-duration="1s" class="font-solution wow slideInRight">
            <div class="figure figure-3"><img src="/img/portfolio/brain-up/figures/dots-2.png" alt="figure"></div>
            <div class="figure figure-4"></div>
            <div class="figure figure-5"></div>
            <div class="figure figure-6"></div>
            <div class="container">
                <span
                    class="section-heading section-heading__font-solution">{{ trans('portfolio/brain-up.fonts') }}</span>
                <div class="font-solution__inner-wrapper">
                    <div class="font-solution__inner">
                        <div class="font-solution__font-wrapper">
                            <div class="font-solution__font">
                                <span class="font-solution__title">Montserrat</span>
                                <div class="font-solution__content">
                                    <div class="font-solution__weights">
                                        <span class="font-solution__weight font-solution__weight_Black">Black</span>
                                        <span class="font-solution__weight font-solution__weight_Bold">Bold</span>
                                        <span class="font-solution__weight font-solution__weight_Regular">Regular</span>
                                    </div>
                                    <span class="font-solution__example"><span>а б в г д е ё ж з и й к л м н о </span>п р с
                                        т у ф х ц ч ш щ ъ ы ь э ю я</span>
                                </div>
                            </div>
                        </div>
                        <div class="font-solution__font-wrapper font-solution__font-wrapper_MA">
                            <div class="font-solution__font">
                                <span class="font-solution__title">Montserrat Alternates</span>
                                <div class="font-solution__content">
                                    <div class="font-solution__weights">
                                        <span class="font-solution__weight font-solution__weight_Bold">Bold</span>
                                        <span class="font-solution__weight font-solution__weight_Regular">Regular</span>
                                    </div>
                                    <span class="font-solution__example"><span>а б в г д е ё ж з и й к л м н о </span>п р с
                                        т у ф х ц ч ш щ ъ ы ь э ю я</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>

            <section class="about-company">
                <div class="figure figure-7"><img src="/img/portfolio/brain-up/figures/dots-3.png" alt="figure"></div>
                <div class="figure figure-8"><img src="/img/portfolio/brain-up/figures/dots-4.png" alt="figure"></div>
                <div class="figure figure-9"><img src="/img/portfolio/brain-up/figures/arrow-1.png" alt="figure"></div>
                <div data-wow-duration="1s" class="about-company_mt container wow bounceInUp">
                    <span class="section-heading">{{ trans('portfolio/brain-up.about') }}</span>
                    <div class="about-company__inner">
                        <div class="about-company__preview">
                            <img src="/img/portfolio/brain-up/about-company-preview.png" alt="about-company__preview">
                        </div>
                    </div>
                </div>
            </section>

            <section class="other-pages">
                <div class="figure figure-10"><img src="/img/portfolio/brain-up/figures/dots-5.png" alt="figure"></div>
                <div class="figure figure-11"><img src="/img/portfolio/brain-up/figures/arrow-2.png" alt="figure">
                </div>
                <div class="figure figure-12"><img src="/img/portfolio/brain-up/figures/dots-6.png" alt="figure"></div>
                <div class="figure figure-13"></div>
                <div data-wow-duration="1s" class="container wow bounceInUp">
                    <span class="section-heading">{{ trans('portfolio/brain-up.other_pages') }}</span>
                    <div class="other-pages__inner">
                        <div class="other-pages__column">
                            <img src="/img/portfolio/brain-up/other-pages/other-pages-page-1.png" alt="other-pages__page"
                                class="other-pages__page">
                            <img src="/img/portfolio/brain-up/other-pages/other-pages-page-2.png" alt="other-pages__page"
                                class="other-pages__page">
                            <img src="/img/portfolio/brain-up/other-pages/other-pages-page-3.png" alt="other-pages__page"
                                class="other-pages__page">
                        </div>
                        <div class="other-pages__column">
                            <img src="/img/portfolio/brain-up/other-pages/other-pages-page-4.png" alt="other-pages__page"
                                class="other-pages__page">
                            <img src="/img/portfolio/brain-up/other-pages/other-pages-page-5.png" alt="other-pages__page"
                                class="other-pages__page">
                            <div class="other-pages__thanks-wrapper">
                                <span class="other-pages__thanks"><span
                                        class="other-pages__thanks_big">{{ trans('portfolio/brain-up.footer1') }}
                                    </span>З{{ trans('portfolio/brain-up.footer2') }}</span>
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
