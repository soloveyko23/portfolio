@extends('layouts.portfolio-item')

@section('seo')
    <link rel="canonical" href="{{ Request::url() }}">
    <title>{{ trans('portfolio/yofi-tofi.seo_title') }}</title>
    <meta name="description" content="{{ trans('portfolio/yofi-tofi.seo_descr') }}">
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/redesign.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/portfolio/yofi-tofi.css') }}">
@endsection

@section('content')
    <main class="yofi">
        <header class="header">
            <div class="container">
                <div class="header__inner">
                    <div class="header__description">
                        <a data-wow-delay="0.2s" data-wow-duration="1s" class="header__logo bounceInLeft" rel="nofollow">
                            <img src="/img/portfolio/yofi-tofi/logo.png" alt="логотип.png">
                        </a>
                        <h1 data-wow-delay="0.5s" data-wow-duration="1s" class="header__txt bounceInLeft">
                            {{ trans('portfolio/yofi-tofi.header_title') }}
                        </h1>
                        <div data-wow-delay="0.8s" data-wow-duration="1s" class="header__icons wow bounceInLeft">
                            <div class="header__img-area">
                                <img class="header__icon-img" src="/img/portfolio/yofi-tofi/icons/laptop.png"
                                    alt="png">
                            </div>
                            <div class="header__img-area">
                                <img class="header__icon-img" src="/img/portfolio/yofi-tofi/icons/smartphone.png"
                                    alt="png">
                            </div>
                            <div class="header__img-area">
                                <img class="header__icon-img" src="/img/portfolio/yofi-tofi/icons/tablet.png"
                                    alt="png">
                            </div>
                        </div>
                        <a href="https://kolgotoff.com.ua/" class="header__button wow fadeInUp" data-wow-delay="0s"
                            duration="2s" rel="nofollow">
                            {{ trans('portfolio/yofi-tofi.header_button') }}
                        </a>
                    </div>
                </div>
            </div>
            <div data-wow-delay="0.5s" data-wow-duration="1s" class="header__img wow zoomIn">
                <img src="/img/portfolio/yofi-tofi/phone-tablet.png" alt="png">
            </div>
        </header>
        <div class="main">
            <section class="main-page">
                <div class="main__container">
                    <span class="main-page__txt">
                        home page
                    </span>
                    <h2 data-wow-duration="1s" class="title title__primary wow zoomInUp">
                        {{ trans('portfolio/yofi-tofi.main_page') }}
                    </h2>
                    <div data-wow-delay="0.6s" data-wow-duration="1s" class="main-page__img-area wow bounceInRight">
                        <img class="main-page__img" src="/img/portfolio/yofi-tofi/home.jpg" alt="img.png">
                    </div>
                </div>
            </section>
            <section class="color-font">
                <img src="/img/portfolio/yofi-tofi/typography-img.png" class="color-font__img" alt="img">
                <div class="main__container">
                    <div class="color-decision">
                        <h2 data-wow-duration="1s" class="title title__primary title__primary_reverse wow zoomInUp">
                            {{ trans('portfolio/yofi-tofi.color') }}
                        </h2>
                        <div class="color-decision__inner">
                            <div name="zoomIn" data-wow-duration="1s" class="color-decision__inner-item">
                                <span class="color-decision__txt">
                                    #ff9c00
                                </span>
                                <div class="sphere-outer">
                                    <div class="sphere-inner"></div>
                                </div>
                            </div>
                            <div data-wow-delay="0.4s" data-wow-duration="1s"
                                class="color-decision__inner-item wow  zoomIn">
                                <div class="sphere-outer sphere-outer_bd-color-success">
                                    <div class="sphere-inner sphere-inner_bg-color-success"></div>
                                </div>
                                <span class="color-decision__txt">
                                    #aded00
                                </span>
                            </div>
                            <div data-wow-delay="0.8s" data-wow-duration="1s" class="color-decision__inner-item wow zoomIn">
                                <span class="color-decision__txt">
                                    #232323
                                </span>
                                <div class="sphere-outer sphere-outer_bd-color-secondary">
                                    <div class="sphere-inner sphere-inner_bg-color-secondary"></div>
                                </div>
                            </div>
                        </div>
                        <h2 data-wow-duration="1s" class="title title__primary wow zoomInUp">
                            {{ trans('portfolio/yofi-tofi.fonts') }}
                        </h2>
                        <div class="font-decision">
                            <div data-wow-delay="0.3s" data-wow-duration="1s" class="font-decision__item wow bounceInRight">
                                <span class="font-decision__title">
                                    geometria
                                </span>
                                <div class="font-decision__item-inner">
                                    <span class="font-decision__crumbs">
                                        Regular
                                    </span>
                                    <span class="font-decision__crumbs">
                                        Medium
                                    </span>
                                    <span class="font-decision__crumbs">
                                        Bold
                                    </span>
                                    <span class="font-decision__crumbs">
                                        Heavy
                                    </span>
                                </div>
                            </div>
                            <div data-wow-duration="0.3s" class="font-decision__item wow bounceInLeft">
                                <span class="font-decision__txt">
                                    а б в г д е ё ж з и й к л м н о п р с т у ф х ц ч ш щ ъ ы ь э ю
                                </span>
                                <span class="font-decision__txt">
                                    <br> а б в г д е ё ж з и й к л м н о п р с т у ф х ц ч ш щ ъ ы ь э ю
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="adaptive">
                <div class="main__container">
                    <div data-wow-duration="1s" class="adaptive__bgc wow fadeIn">
                        <div class="adaptive__inner">
                            <div data-wow-duration="1s" class="title title__primary title__primary_reverse wow zoomInUp">
                                {{ trans('portfolio/yofi-tofi.adaptive') }}
                            </div>
                            <span data-wow-duration="1s" class="adaptive__inner-txt wow fadeInUp">
                                {{ trans('portfolio/yofi-tofi.adaptive_text') }}
                            </span>
                            <div data-wow-duration="1s" class="wow zoomIn">
                                <img src="/img/portfolio/yofi-tofi/adaptive-decor.png" class="adaptive__inner-img"
                                    alt="img">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="other-pages">
                <div class="main__container">
                    <h2 data-wow-duration="1s" class="title title__primary wow zoomInUp">
                        {{ trans('portfolio/yofi-tofi.other_pages') }}
                    </h2>
                    <div class="other-pages__inner">
                        <div class="other-pages__images">
                            <div data-wow-duration="1s" class="other-pages__img other-pages__img_1 wow bounceInLeft">
                                <img src="/img/portfolio/yofi-tofi/other-pages-small-menu.jpg" alt="jpg">
                            </div>
                            <div data-wow-duration="1s" class="other-pages__img other-pages__img_2 wow bounceInLeft">
                                <img src="/img/portfolio/yofi-tofi/other-pages-blog.jpg" alt="jpg">
                            </div>
                            <div data-wow-duration="1s" class="other-pages__img other-pages__img_3 wow bounceInLeft">
                                <img src="/img/portfolio/yofi-tofi/other-pages-article.jpg" alt="jpg">
                            </div>
                            <div data-wow-duration="1s" class="other-pages__img other-pages__img_4 wow bounceInLeft">
                                <img src="/img/portfolio/yofi-tofi/other-pages-comments.jpg" alt="jpg">
                            </div>
                            <div data-wow-duration="1s" class="other-pages__img other-pages__img_5 wow bounceInLeft">
                                <img src="/img/portfolio/yofi-tofi/other-pages-404.jpg" alt="jpg">
                            </div>
                        </div>
                        <span class="other-pages__txt">
                            other pages
                        </span>
                    </div>
                </div>
            </section>
            <section class="ty">
                <div class="main__container">
                    <img src="/img/portfolio/yofi-tofi/ty-img.png" class="ty__img" alt="img">
                    <h2 data-wow-duration="1s" class="ty__title wow flipInX">
                        {!! trans('portfolio/yofi-tofi.footer') !!}
                    </h2>
                </div>
            </section>
        </div>
    </main>
@endsection

@section('bottom-scripts')
    <script src="{{ asset('js/libs.js') }}"></script>
@endsection
