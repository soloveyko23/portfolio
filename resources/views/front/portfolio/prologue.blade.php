@extends('layouts.portfolio-item')

@section('seo')
    <link rel="canonical" href="{{ Request::url() }}">
    <title>{{ trans('portfolio/prologue.seo_title') }}</title>
    <meta name="description" content="{{ trans('portfolio/prologue.seo_descr') }}">
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/redesign.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/portfolio/prologue.css') }}">
@endsection

@section('content')
    <main class="prologue">
        <header class="header">
            <div class="container">
                <div class="header__inner">
                    <div class="header__description">
                        <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow fadeInDown header__logo">
                            <img src="/img/portfolio/prologue/logo.png" alt="логотип.png">
                        </div>
                        <h1 data-wow-delay="0.5s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow fadeInUp header__txt">
                            {{ trans('portfolio/prologue.header_title') }}
                        </h1>
                        <div data-wow-delay="0.5s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow fadeInDown header__icons">
                            <div class="header__img-area">
                                <img class="header__icon-img" src="/img/portfolio/prologue/icons/laptop.png" alt="png">
                            </div>
                            <div class="header__img-area">
                                <img class="header__icon-img" src="/img/portfolio/prologue/icons/phone.png" alt="png">
                            </div>
                            <div class="header__img-area">
                                <img class="header__icon-img" src="/img/portfolio/prologue/icons/tablet.png" alt="png">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div data-wow-delay="0s" data-wow-duration="2s" data-wow-iteration="1" data-wow-offset="0"
                class="wow fadeInRight header__phone-laptop">
                <img class="header__img-phone" src="/img/portfolio/prologue/mobile-home.png" alt="png">
                <img class="header__img-laptop" src="/img/portfolio/prologue/laptop-home.png" alt="png">
            </div>
        </header>
        <div class="main">
            <section class="home-page">
                <div class="main__container">
                    <div class="title__flex">
                        <h2 data-wow-delay="0s" data-wow-duration="2s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow fadeInRight title title__primary">
                            <span class="title title__name-top">
                                01.
                            </span>
                            {{ trans('portfolio/prologue.main_page') }}
                        </h2>
                        <div data-wow-delay="0s" data-wow-duration="2s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow fadeInUp title title__secondary">
                            01.
                        </div>
                    </div>
                    <div data-wow-delay="0s" data-wow-duration="2s" data-wow-iteration="1" data-wow-offset="0"
                        class="wow fadeInUp home-page__img-area">
                        <img class="home-page__img" src="/img/portfolio/prologue/home-page.png" alt="image">
                        <img class="home-page__img-square home-page__img-square_1"
                            src="/img/portfolio/prologue/bg-square.jpg" alt="image">
                        <img class="home-page__img-square home-page__img-square_2"
                            src="/img/portfolio/prologue/bg-square.jpg" alt="image">
                        <img class="home-page__img-square home-page__img-square_3"
                            src="/img/portfolio/prologue/bg-square.jpg" alt="image">
                    </div>
                </div>
                <img class="home-page__img-bg-right" src="/img/portfolio/prologue/home-page-bg-right.png" alt="image">
                <img class="home-page__img-bg-left" src="/img/portfolio/prologue/home-page-bg-left.png" alt="image">
            </section>
            <section class="colors">
                <div class="main__container">
                    <div class="title__flex">
                        <div data-wow-delay="0s" data-wow-duration="2s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow fadeInUp title title__secondary">
                            02.
                        </div>
                        <h2 data-wow-delay="0s" data-wow-duration="2s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow fadeInRight title title__primary colors__title">
                            <span class="title title__name-top">
                                02.
                            </span>
                            {{ trans('portfolio/prologue.colors') }}
                        </h2>
                    </div>
                    <div data-wow-delay="0s" data-wow-duration="2s" data-wow-iteration="1" data-wow-offset="0"
                        class="wow fadeInUp colors__ellipse-flex">
                        <div class="colors__ellipse colors__ellipse_purple">
                            <span class="colors__ellipse-txt colors__ellipse-txt_right">
                                #8b52d1
                            </span>
                        </div>
                        <div class="colors__ellipse colors__ellipse_pink">
                            <span class="colors__ellipse-txt colors__ellipse-txt_left">
                                #f20057
                            </span>
                        </div>
                    </div>
                </div>
            </section>
            <section class="font-solution">
                <div class="main__container">
                    <div class="title__flex">
                        <h2 data-wow-delay="0s" data-wow-duration="2s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow fadeInLeft title title__primary">
                            <span class="title title__name-top">
                                03.
                            </span>
                            {{ trans('portfolio/prologue.font') }}
                        </h2>
                        <div data-wow-delay="0s" data-wow-duration="2s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow fadeInUp title title__secondary">
                            03.
                        </div>
                    </div>
                    <h2 class="title font-solution__txt font-solution__txt_pt-80">
                        <span class="font-solution__line font-solution__line_1">
                            а б в г д е ё ж з и й к л м н о
                        </span>
                        <span class="font-solution__line font-solution__line_2">
                            п р с т у ф х ц ч ш щ ъ ы ь э ю я
                        </span>
                    </h2>
                    <div class="title__flex title__flex_991-d-block">
                        <div class="font-solution__title font-solution__title_regular">
                            Regular
                        </div>
                        <div class="font-solution__title font-solution__title_medium">
                            Medium
                        </div>
                        <div class="title font-solution__title font-solution__title_big">
                            Geometria
                        </div>
                        <div class="font-solution__title font-solution__title_bold">
                            Bold
                        </div>
                        <div class="font-solution__title font-solution__title_heavy">
                            Heavy
                        </div>
                    </div>
                    <h2 class="title font-solution__txt_ttr-none font-solution__txt">
                        <span class="font-solution__line font-solution__line_1">
                            а б в г д е ё ж з и й к л м н о
                        </span>
                        <span class="font-solution__line font-solution__line_2">
                            п р с т у ф х ц ч ш щ ъ ы ь э ю я
                        </span>
                    </h2>
                </div>
            </section>
            <section class="adaptive-design">
                <div class="main__container">
                    <h2 data-wow-delay="0s" data-wow-duration="2s" data-wow-iteration="1" data-wow-offset="0"
                        class="wow fadeInRight title title__secondary">
                        04.
                    </h2>
                    <div class="title__flex">
                        <div data-wow-delay="0s" data-wow-duration="2s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow fadeInLeft adaptive-design__img-area">
                            <img src="/img/portfolio/prologue/adaptive-design_mobile.png" alt="image"
                                class="adaptive-design__phone">
                        </div>
                        <h2 data-wow-delay="0s" data-wow-duration="2s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow fadeInRight title title__primary adaptive-design__title">
                            <span class="title title__name-top">
                                04.
                            </span>
                            {{ trans('portfolio/prologue.adaptive') }}
                            <span class="title title__name-top adaptive-design__txt">
                                {{ trans('portfolio/prologue.adaptive_text') }}
                            </span>
                        </h2>
                    </div>
                </div>
                <img src="/img/portfolio/prologue/adaptive-design-bg.png" alt="image" class="adaptive-design__bg">
            </section>
            <section class="other-page">
                <div class="main__container">
                    <h2 data-wow-delay="0s" data-wow-duration="2s" data-wow-iteration="1" data-wow-offset="0"
                        class="wow fadeInLeft title title__primary">
                        <span class="title title__name-top">
                            05.
                        </span>
                        {{ trans('portfolio/prologue.other_page') }}
                    </h2>
                    <img src="/img/portfolio/prologue/other-page-1.png" class="other-page__page other-page__page_1"
                        alt="image">
                    <div data-wow-delay="0s" data-wow-duration="2s" data-wow-iteration="1" data-wow-offset="0"
                        class="wow fadeInUp other-page__img-pages">
                        <h2 class="title title__secondary other-page__title-05">
                            05.
                        </h2>
                        <img src="/img/portfolio/prologue/other-page-2.png" class="other-page__img" alt="image">
                        <img src="/img/portfolio/prologue/other-page-3.png" class="other-page__img" alt="image">
                        <img src="/img/portfolio/prologue/other-page-4.png" class="other-page__img" alt="image">
                    </div>
                </div>
            </section>
            <section class="ty">
                <div class="main__container">
                    <h2 data-wow-delay="0s" data-wow-duration="2s" data-wow-iteration="1" data-wow-offset="0"
                        class="wow fadeInLeft title title__primary ty__title">
                        {{ trans('portfolio/prologue.footer1') }}
                        <span class="ty__subtitle">
                            {{ trans('portfolio/prologue.footer2') }}
                        </span>
                    </h2>
                </div>
                <img src="/img/portfolio/prologue/other-page-bg.png" class="ty__bg" alt="img">
            </section>
        </div>
    </main>
@endsection

@section('bottom-scripts')
    <script src="{{ asset('js/libs.js') }}"></script>
@endsection
