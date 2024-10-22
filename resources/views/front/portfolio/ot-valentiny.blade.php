@extends('layouts.portfolio-item')

@section('seo')
    <link rel="canonical" href="{{ Request::url() }}">
    <title>{{ trans('portfolio/ot-valentiny.seo_title') }}</title>
    <meta name="description" content="{{ trans('portfolio/ot-valentiny.seo_descr') }}">
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/redesign.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/portfolio/ot-valentiny.css') }}">
@endsection

@section('content')
    <main class="ot-valentiny">
        <section class="banner">
            <div class="banner__inner-wrapper">
                <div class="banner__inner">
                    <div class="banner__left">
                        <div class="banner__left-content">
                            <div class="banner__site-logo wow fadeInDown" data-wow-delay="0s" duration="1s"></div>
                            <div class="banner__label wow fadeInUp" data-wow-delay="0.5s" duration="1s">
                                {{ trans('portfolio/ot-valentiny.header_title') }}
                            </div>
                            <div class="banner__icons wow fadeInDown" data-wow-delay="0.5s" duration="1s">
                                <div class="banner__icon banner__icon_laptop">
                                    <img src="/img/portfolio/ot-valentiny/icons/laptop.png" alt="laptop">
                                </div>
                                <div class="banner__icon banner__icon_smartphone">
                                    <img src="/img/portfolio/ot-valentiny/icons/phone.png" alt="smartphone">
                                </div>
                                <div class="banner__icon banner__icon_tablet">
                                    <img src="/img/portfolio/ot-valentiny/icons/tablet.png" alt="tablet">
                                </div>
                            </div>
                            <a href="https://otvalentiny.od.ua/" class="banner__visit-site wow fadeInUp" data-wow-delay="0s"
                                duration="2s" rel="nofollow">
                                {{ trans('portfolio/ot-valentiny.header_button') }}
                            </a>
                        </div>
                    </div>
                    <div class="banner__right wow fadeInRight" data-wow-delay="0s" duration="2s">
                        <img src="/img/portfolio/ot-valentiny/banner-foreground.png" alt="Laptop & smartphone"
                            class="banner__image">
                    </div>
                </div>
            </div>
        </section>

        <section class="main-page">
            <div class="container">
                <div class="section-heading">
                    <span class="section-heading__title wow slideInLeft" data-wow-delay="0s" duration="1s">
                        {{ trans('portfolio/ot-valentiny.main_page') }}
                    </span>
                    <div class="section-heading__sub-title-wrapper wow bounceInUp" data-wow-delay="0s" duration="1s">
                        <div class="dot-wrapper">
                            <div class="dot"></div>
                            <div class="line">
                                <div></div>
                            </div>
                        </div>
                        <span class="section-heading__sub-title">{{ trans('portfolio/ot-valentiny.subtitle') }}</span>
                    </div>
                </div>
                <div class="main-page__inner wow bounceInUp" data-wow-delay="0s" duration="1s">
                    <div class="main-page__left">
                        <span class="main-page__side-label side-label">Main page</span>
                    </div>
                    <div class="main-page__right">
                        <img src="/img/portfolio/ot-valentiny/main-page-preview.png" alt="main-page-preview"
                            class="main-page__preview">
                    </div>
                </div>
            </div>
        </section>
        <section class="search wow bounceInUp" data-wow-delay="0s" duration="1s">
            <div class="container">
                <div class="search__tomatoes"><img src="/img/portfolio/ot-valentiny/tomatoes.png" alt="tomatoes"></div>
                <div class="search__heading-wrapper">
                    <div class="section-heading">
                        <span class="section-heading__title">{{ trans('portfolio/ot-valentiny.search') }}</span>
                        <div class="section-heading__sub-title-wrapper">
                            <div class="dot-wrapper">
                                <div class="dot"></div>
                                <div class="line">
                                    <div></div>
                                </div>
                            </div>
                            <span class="section-heading__sub-title">{{ trans('portfolio/ot-valentiny.cart') }}</span>
                        </div>
                    </div>
                </div>
                <div class="search__inner">
                    <div class="search__left">
                        <span class="search__side-label side-label">Search</span>
                    </div>
                    <div class="search__right">
                        <img src="/img/portfolio/ot-valentiny/search-preview.png" alt="search-preview"
                            class="search__preview">
                    </div>
                </div>
            </div>
        </section>
        <section class="category-menu wow bounceInUp" data-wow-delay="0s" duration="1s">
            <div class="container">
                <div class="category-menu__kiwi wow slideInRight"><img src="/img/portfolio/ot-valentiny/kiwi.png"
                        alt="kiwi"></div>
                <div class="section-heading wow slideInLeft">
                    <span class="section-heading__title">{{ trans('portfolio/ot-valentiny.catogories') }}</span>
                    <div class="section-heading__sub-title-wrapper">
                        <div class="dot-wrapper">
                            <div class="dot"></div>
                            <div class="line">
                                <div></div>
                                <div></div>
                            </div>
                        </div>
                        <span
                            class="section-heading__sub-title">{{ trans('portfolio/ot-valentiny.categories_text') }}</span>
                    </div>
                </div>
            </div>
            <div class="category-menu__preview-wrapper wow bounceInUp">
                <img src="/img/portfolio/ot-valentiny/category-menu-preview.png" alt="category-menu-preview"
                    class="category-menu__preview">
            </div>
            <div class="category-menu__img-wrapper wow bounceInUp">
                <img src="/img/portfolio/ot-valentiny/tractor.svg" alt="category-menu-preview"
                    class="category-menu__img">
            </div>
        </section>
        <section class="category-page">
            <div class="container">
                <div class="section-heading wow slideInLeft" data-wow-delay="0s" duration="1s">
                    <span class="section-heading__title">{{ trans('portfolio/ot-valentiny.categories_page') }}</span>
                </div>
                <div class="category-page__inner wow slideInRight" data-wow-delay="0s" duration="1s">
                    <div class="category-page__left">
                        <span class="category-page__side-label side-label">Category</span>
                    </div>
                    <div class="category-page__right">
                        <div class="category-page__preview-mobile-wrapper">
                            <img src="/img/portfolio/ot-valentiny/category-page-preview-mobile.png"
                                alt="category-page-preview-mobile" class="category-page__preview-mobile">
                        </div>
                        <img src="/img/portfolio/ot-valentiny/category-page-preview.png" alt="category-page-preview"
                            class="category-page__preview">
                    </div>
                </div>
            </div>
        </section>

        <section class="color-solution">
            <div class="container">
                <div class="color-solution__strawberry wow slideInLeft" data-wow-delay="0s" duration="1s">
                    <img src="/img/portfolio/ot-valentiny/strawberry.png" alt="strawberry">
                </div>
                <div class="section-heading wow fadeInRight" data-wow-delay="0s" duration="1s">
                    <span class="section-heading__title">{{ trans('portfolio/ot-valentiny.colors') }}</span>
                </div>
                <div class="color-solution__inner">
                    <div class="color-solution__colors">
                        <div class="color-solution__color color-solution__color_color-1 wow fadeInRight"
                            data-wow-delay="0.1s" duration="1s"></div>
                        <div class="color-solution__color color-solution__color_color-2 wow fadeInRight"
                            data-wow-delay="0.2s" duration="1s"></div>
                        <div class="color-solution__color color-solution__color_color-3 wow fadeInRight"
                            data-wow-delay="0.3s" duration="1s"></div>
                    </div>
                </div>
            </div>
        </section>

        <section class="product-page">
            <div class="container">
                <div class="section-heading wow slideInLeft" data-wow-delay="0s" duration="1s">
                    <span class="section-heading__title">{{ trans('portfolio/ot-valentiny.product_page') }}</span>
                </div>
                <div class="product-page__inner wow slideInRight" data-wow-delay="0s" duration="1s">
                    <div class="product-page__left">
                        <img src="/img/portfolio/ot-valentiny/product-page-preview.png" alt="product-page-preview"
                            class="product-page__preview">
                        <div class="product-page__preview-mobile-wrapper">
                            <img src="/img/portfolio/ot-valentiny/product-page-preview-mobile.png"
                                alt="product-page-preview-mobile" class="product-page__preview-mobile">
                        </div>
                        <div class="product-page__right">
                            <span class="product-page__side-label side-label">Product page</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="font-solution">
            <div class="container">
                <div class="section-heading wow slideInLeft" data-wow-delay="0s" duration="1s">
                    <span class="section-heading__title">{{ trans('portfolio/ot-valentiny.fonts') }}</span>
                </div>
                <div class="font-solution__vegetables wow slideInRight" data-wow-delay="0s" duration="1s">
                    <img src="/img/portfolio/ot-valentiny/vegetables.png" alt="vegetables">
                </div>
                <div class="font-solution__inner wow slideInLeft">
                    <div class="dot-wrapper">
                        <div class="dot"></div>
                        <div class="line">
                            <div></div>
                        </div>
                        <div class="dot dot_end"></div>
                    </div>
                    <div class="font-solution__content" data-wow-delay="0s" data-wow-delay="0s">
                        <span class="font-solution__font-title">IBM Plex Sans</span>
                        <span class="font-solution__font-example font-solution__font-example_caps">а б в г д е ё ж з и й к
                            л м н о п р с т у ф х ц ч ш щ ъ ы ь э ю я</span>
                        <span class="font-solution__font-example">а б в г д е ё ж з и й к л м н о п р с т у ф х ц ч ш щ ъ ы
                            ь э ю я</span>
                    </div>
                </div>
            </div>
        </section>

        <section class="checkout">
            <div class="container">
                <div class="section-heading wow slideInLeft" data-wow-delay="0s" duration="1s">
                    <span class="section-heading__title">{!! trans('portfolio/ot-valentiny.orders') !!}</span>
                </div>
                <div class="checkout__inner wow slideInLeft" data-wow-delay="0s" duration="1s">
                    <div class="checkout__left">
                        <span class="checkout__side-label side-label">Checkout</span>
                    </div>
                    <div class="checkout__right">
                        <img src="/img/portfolio/ot-valentiny/checkout-preview.png" alt="checkout-preview"
                            class="checkout__preview">
                        <div class="checkout__preview-mobile-wrapper">
                            <img src="/img/portfolio/ot-valentiny/checkout-preview-mobile.png"
                                alt="checkout-preview-mobile" class="checkout__preview-mobile">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="account">
            <div class="container">
                <div class="section-heading wow slideInRight" data-wow-delay="0s" duration="1s">
                    <span class="section-heading__title">{{ trans('portfolio/ot-valentiny.account') }}</span>
                </div>
                <div class="account__inner wow slideInLeft" data-wow-delay="0s" duration="1s">
                    <div class="account__left">
                        <img src="/img/portfolio/ot-valentiny/account-preview.png" alt="account-preview"
                            class="account__preview">
                    </div>
                    <div class="account__right">
                        <span class="account__side-label side-label">Account</span>
                    </div>
                </div>
            </div>
        </section>
        <section class="thanks wow flipInY" data-wow-delay="0s" duration="1s">
            <div class="container">
                <div class="thanks__inner">
                    <span class="thanks__label">Thanks for <span class="thanks__label_big">watching</span></span>
                </div>
            </div>
        </section>
    </main>
@endsection

@section('bottom-scripts')
    <script src="{{ asset('js/libs.js') }}"></script>
@endsection
