@extends('layouts.portfolio-item')

@section('seo')
    <link rel="canonical" href="{{ Request::url() }}">
    <title>{{ trans('portfolio/jeans.seo_title') }}</title>
    <meta name="description" content="{{ trans('portfolio/jeans.seo_descr') }}">
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/redesign.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/portfolio/jeans.css') }}">
@endsection

@section('content')
    <main>
        <section class="banner">
            <div class="banner__inner-wrapper">
                <div class="banner__inner">
                    <div class="banner__left">
                        <div class="banner__left-content">
                            <a href="https://jeans-market.com.ua/" class="banner__site-logo wow fadeInDown"
                                data-wow-delay="0s" duration="1s"></a>
                            <div class="banner__label wow fadeInUp" data-wow-delay="0.5s" duration="1s">
                                {!! trans('portfolio/jeans.header_title') !!}
                            </div>
                            <div class="banner__icons wow fadeInDown" data-wow-delay="0.5s" duration="1s">
                                <div class="banner__icon banner__icon_laptop">
                                    <img src="/img/portfolio/jeans/laptop.svg" alt="laptop">
                                </div>
                                <div class="banner__icon banner__icon_smartphone">
                                    <img src="/img/portfolio/jeans/smartphone.svg" alt="smartphone">
                                </div>
                                <div class="banner__icon banner__icon_tablet">
                                    <img src="/img/portfolio/jeans/tablet.svg" alt="tablet">
                                </div>
                            </div>
                            <a href="https://jeans-market.com.ua/" class="banner__visit-site wow fadeInUp"
                                data-wow-delay="0s" duration="2s" rel="nofollow">
                                {{ trans('portfolio/jeans.header_button') }}
                            </a>
                        </div>
                    </div>
                    <div class="banner__right wow fadeInRight" data-wow-delay="0s" duration="2s">
                        <img src="/img/portfolio/jeans/banner-foreground.png" alt="Laptop & smartphone"
                            class="banner__image">
                    </div>
                </div>
            </div>
        </section>

        <section class="main-page">
            <div class="cross cross-1">
                <div></div>
                <div></div>
            </div>
            <div class="cross cross-2">
                <div></div>
                <div></div>
            </div>
            <div class="background-texture"></div>

            <div class="main-page__woman wow slideInRight" data-wow-delay="0s" duration="1s">
                <img src="/img/portfolio/jeans/main-page-woman.png" alt="main-page__woman">
            </div>
            <div class="container wow slideInRight" data-wow-delay="0s" duration="1s">
                <span class="section-heading"> {!! trans('portfolio/jeans.main_page') !!}</span>
                <div class="main-page__inner">
                    <div class="main-page__preview">
                        <img src="/img/portfolio/jeans/main-page-preview.png" alt="main-page__preview">
                        <span class="side-label">Main page</span>
                    </div>
                </div>
            </div>
        </section>

        <section class="color-solution">
            <div class="container">
                <div class="color-solution__inner">
                    <div class="section-heading-wrapper wow slideInLeft" data-wow-delay="0s" duration="1s">
                        <span class="section-heading">{!! trans('portfolio/jeans.colors') !!}</span>
                    </div>
                    <div class="color-solution__colors wow slideInRight" data-wow-delay="0s" duration="1s">
                        <div class="color-solution__color color-solution__color-1"></div>
                        <div class="color-solution__color color-solution__color-2"></div>
                        <div class="color-solution__color color-solution__color-3"></div>
                    </div>
                </div>
            </div>
        </section>

        <section class="font-solution wow fadeIn" data-wow-delay="0s" duration="1s">
            <div class="background-texture"></div>
            <div class="container">
                <div class="font-solution__inner">
                    <div class="section-heading-wrapper"><span class="section-heading">{!! trans('portfolio/jeans.fonts') !!}</span>
                    </div>
                    <div class="font-solution__content-wrapper">
                        <div class="font-solution__content">
                            <span class="font-solution__title">Proxima Nova</span>
                            <span class="font-solution__example font-solution__example_caps">а б в г д е ё ж з и й к л м н о
                                п р с т у ф х ц ч ш щ ъ ы ь э ю я</span>
                            <span class="font-solution__example">а б в г д е ё ж з и й к л м н о п р с т у ф х ц ч ш щ ъ ы ь
                                э ю я</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="category-page">
            <div class="cross cross-3">
                <div></div>
                <div></div>
            </div>
            <div class="cross cross-4">
                <div></div>
                <div></div>
            </div>
            <div class="background-texture"></div>

            <div class="wow slideInLeft" data-wow-delay="0s" duration="1s">
                <span class="section-heading"> {{ trans('portfolio/jeans.categories') }}</span>
                <div class="container category-page__inner">
                    <div class="category-page__preview">
                        <img class='category-page__preview-img' src="/img/portfolio/jeans/category-page-preview.png"
                            alt="category-page__preview">
                        <span class="side-label">category page</span>
                    </div>
                </div>
            </div>
        </section>

        <section class="product-page">
            <div class="cross cross-5">
                <div></div>
                <div></div>
            </div>
            <div class="container wow slideInLeft" data-wow-delay="0s" duration="1s">
                <span class="section-heading">{!! trans('portfolio/jeans.product_page') !!}</span>
                <div class="product-page__inner">
                    <div class="product-page__preview">
                        <img src="/img/portfolio/jeans/product-page-preview.png" alt="product-page__preview">
                        <span class="side-label">product page</span>
                    </div>
                </div>
            </div>
        </section>

        <section class="other-pages">
            <div class="background-texture"></div>
            <div class="container wow slideInRight" data-wow-delay="0s" duration="1s">
                <span class="section-heading">{!! trans('portfolio/jeans.other_pages') !!}</span>
                <div class="other-pages__inner">
                    <div class="other-pages__column">
                        <img class="other-pages__page" src="/img/portfolio/jeans/other-pages/other-pages-page-1.png"
                            alt="other-page">
                        <span class="other-pages__thanks"><span
                                class="other-pages__thanks_big">{{ trans('portfolio/jeans.footer1') }}
                            </span>{{ trans('portfolio/jeans.footer2') }}</span>
                    </div>
                    <div class="other-pages__column">
                        <img class="other-pages__page" src="/img/portfolio/jeans/other-pages/other-pages-page-2.png"
                            alt="other-page">
                        <img class="other-pages__page" src="/img/portfolio/jeans/other-pages/other-pages-page-3.png"
                            alt="other-page">
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@section('bottom-scripts')
    <script src="{{ asset('js/libs.js') }}"></script>
@endsection
