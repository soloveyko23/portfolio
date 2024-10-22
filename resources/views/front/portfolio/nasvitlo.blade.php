@extends('layouts.portfolio-item')

@section('seo')
    <link rel="canonical" href="{{ Request::url() }}">
    <title> {{ trans('portfolio/nasvitlo.seo_title') }}</title>
    <meta name="description" content="{{ trans('portfolio/nasvitlo.seo_descr') }}">
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/redesign.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/portfolio/nasvitlo.css') }}">
@endsection

@section('content')
    <main class="nasvitlo">
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="header__container ">

                        <div class="header__inner">

                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 col-lg-offset-1">
                                <div class="header__descr posr">

                                    <img data-wow-delay="0.5s" data-wow-duration="1s"
                                        src="/img/portfolio/nasvitlo/header_lamp.png" class="wow fadeInDown header__lamp"
                                        alt="lamp" class="header__lamp">
                                    <div data-wow-duration="1s" class="header__logo wow fadeInDown">
                                        <img src="/img/portfolio/nasvitlo/logo.png" alt="логотип.png">
                                    </div>
                                    <h1 class="h1" data-wow-delay="0.5s" data-wow-duration="1s"
                                        class="header__txt wow fadeInUp">
                                        {{ trans('portfolio/nasvitlo.header_title') }}
                                    </h1>
                                    <div data-wow-delay="0.5s" data-wow-duration="1s" class="header__icons wow fadeInDown">
                                        <div class="header__icons-icon">
                                            <img class="header__icon-img" src="/img/portfolio/nasvitlo/icons/laptop.png"
                                                alt="png">
                                        </div>
                                        <div class="header__icons-icon">
                                            <img class="header__icon-img" src="/img/portfolio/nasvitlo/icons/phone.png"
                                                alt="png">
                                        </div>
                                        <div class="header__icons-icon">
                                            <img class="header__icon-img" src="/img/portfolio/nasvitlo/icons/tablet.png"
                                                alt="png">
                                        </div>
                                    </div>
                                    <a data-wow-duration="2s" class="header__button button wow fadeInUp"
                                        href="https://nasvitlo.com/" rel="nofollow">
                                        {{ trans('portfolio/nasvitlo.header_button') }}
                                    </a>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-8">
                                <div data-wow-duration="2s" class="header__img wow fadeInRight">
                                    {{-- <img class="header__img-phone" src="/img/portfolio/nasvitlo/mobile-home.png" alt="png"> --}}
                                    <img class="header__img-laptop" src="/img/portfolio/nasvitlo/laptop.png" alt="png">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <section class="section_main ">
            <div class="posr main">
                <div class="main_decor">
                    <img data-wow-delay="0.5s" data-wow-duration="1s" class="wow fadeInRight"
                        src="/img/portfolio/nasvitlo/main_decor.png" alt="main_decor">
                    <img data-wow-delay="0.5s" data-wow-duration="1s" class="wow fadeInLeft"
                        src="/img/portfolio/nasvitlo/main_decor2.png" alt="main_decor2">
                </div>
                <div class="container">
                    <div class="col-xs-12 col-lg-10 col-lg-offset-1">
                        <div class="row">
                            <p class="h1_decor">
                                MAIN PAGE
                            </p>

                            <img data-wow-delay="0.5s" data-wow-duration="1s" class="wow fadeInUp main_img"
                                src="/img/portfolio/nasvitlo/main.jpg" alt="main">
                        </div>
                    </div>
                </div>
            </div>
            <div class="main_footer">

                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-10 col-sm-offset-2">
                            <img src="/img/portfolio/nasvitlo/main_footer.png" alt="main_footer">
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <section class="section2">
            <div class="container">
                <div class="row d-flex flex-nowrap">
                    <div class="col-xs-12 col-md-11 col-md-offset-1">
                        <p data-wow-delay="0s" data-wow-duration="1s" class="wow fadeInLeft h1_decor">COLORS AND TYPOGRAPHY
                        </p>
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-5 col-md-offset-1">
                        <img src="/img/portfolio/nasvitlo/colors.png" alt="color">
                    </div>
                    <div class="col-xs-12 col-sm-6 d-flex posr">
                        <div class="typography">

                            <div data-wow-delay="0.5s" data-wow-duration="1s" class="wow fadeInRight typography__decor  ">
                            </div>
                            <div class="typography__cell">
                                <p data-wow-delay="1s" data-wow-duration="1s" class="wow fadeIn typography__large">
                                    Aa
                                </p>

                            </div>
                            <div class="typography__cell">
                                <p class="typography__name">
                                    montserrat
                                </p>
                                <ul class="typography__list">
                                    <li>
                                        <p data-wow-delay="1s" data-wow-duration="1s" class="wow fadeInUp Regular">
                                            Regular</p>
                                    </li>
                                    <li>
                                        <p data-wow-delay="2s" data-wow-duration="1s" class="wow fadeInUp Medium">Medium
                                        </p>
                                    </li>
                                    <li>
                                        <p data-wow-delay="3s" data-wow-duration="1s" class="wow fadeInUp Bold">Bold</p>
                                    </li>
                                    <li>
                                        <p data-wow-delay="4s" data-wow-duration="1s" class="wow fadeInUp Black">Black
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row d-flex mt-220">
                    <div class="col-sm-2 d-flex">
                        <img src="/img/portfolio/nasvitlo/lamp.png" class="lamp" alt="lamp">
                    </div>
                    <div class="col-xs-12 col-sm-10 d-flex">
                        <img src="/img/portfolio/nasvitlo/colorspage.jpg" class="colorspage shadow" alt="colorspage">
                    </div>
                </div>
            </div>
        </section>

        <section class="catalog">
            <div class="catalog__decor">
                <img src="/img/portfolio/nasvitlo/main_decor.png" alt="main_decor">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-lg-10 col-lg-offset-1">
                        <p class="h1_decor">
                            CATALOG
                        </p>
                    </div>
                    <div class="col-xs-12 col-sm-10 col-sm-offset-2 d-flex">
                        <div class="posr ml-auto">
                            <img src="/img/portfolio/nasvitlo/catalog.jpg" class="catalog__img main_img"
                                alt="catalog__img">
                            <img src="/img/portfolio/nasvitlo/catalog_mobile.png" class="catalog__mobile"
                                alt="catalog__mobile">
                        </div>
                    </div>
                </div>
            </div>
            <div class="catalog__footer">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-5 posr">
                            <div class="catalog__footer__decor">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="product">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-lg-10 col-lg-offset-1 text-right">
                        <p class="h1_decor h1_decor-right">PRODUCT PAGE</p>

                        <img src="/img/portfolio/nasvitlo/productPage.jpg" class="main_img" alt="PRODUCT PAGE">
                    </div>
                </div>
            </div>
        </section>
        <section class="adaptive">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-lg-10 col-lg-offset-1">
                        <p class="h1_decor">ADAPTIVE VERSION</p>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="adaptive__item">
                            <img src="/img/portfolio/nasvitlo/phone1.png" alt="phone1">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="adaptive__item">
                            <img src="/img/portfolio/nasvitlo/phone2.png" alt="phone2">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="adaptive__item">
                            <img src="/img/portfolio/nasvitlo/phone3.png" alt="phone3">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="adaptive__item">
                            <img src="/img/portfolio/nasvitlo/phone4.png" alt="phone4">
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <section class="thanks">
            <div class="container">
                <div class="row d-flex">
                    <div class="col-xs-12 col-sm-6 d-flex">
                        <p class="thanks__p">
                            <b>THANKS</b> <br>
                            FOR WATCHING!
                        </p>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <img class="thanks_img" src="/img/portfolio/nasvitlo/tlamp.png" alt="">
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@section('bottom-scripts')
    <script src="{{ asset('js/libs.js') }}"></script>
@endsection
