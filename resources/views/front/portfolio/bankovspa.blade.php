@extends('layouts.portfolio-item')

@section('seo')
    <link rel="canonical" href="{{ Request::url() }}">
    <title>{{ trans('portfolio/bankovspa.seo_title') }}</title>
    <meta name="description" content="{{ trans('portfolio/bankovspa.seo_descr') }}">
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/redesign.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/portfolio/bankovspa.css') }}">
@endsection


@section('content')
    <main class="bankov-spa" id="bankov-spa">
        <header class="header">
            <div class="header__container">
                <div class="header__inner">
                    <div class="header__description">
                        <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow fadeInDown header__logo">
                            <img src="/img/portfolio/bankovspa/logo.jpg" alt="логотип.png">
                        </div>
                        <h1 data-wow-delay="0.5s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow fadeInUp header__txt">
                            {{ trans('portfolio/bankovspa.header_title') }}
                        </h1>
                        <div data-wow-delay="0.5s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow fadeInDown header__icons">
                            <div class="header__img-area">
                                <img class="header__icon-img" src="/img/portfolio/our-projects/icons/laptop.png"
                                    alt="png">
                            </div>
                            <div class="header__img-area">
                                <img class="header__icon-img" src="/img/portfolio/our-projects/icons/phone.png"
                                    alt="png">
                            </div>
                            <div class="header__img-area">
                                <img class="header__icon-img" src="/img/portfolio/our-projects/icons/tablet.png"
                                    alt="png">
                            </div>
                        </div>
                        <a data-wow-delay="0s" data-wow-duration="2s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow fadeInUp header__button" href="https://bankow.ru/" rel="nofollow">
                            {{ trans('portfolio/bankovspa.header_button') }}
                        </a>
                    </div>
                </div>
            </div>
            <div data-wow-delay="0s" data-wow-duration="2s" data-wow-iteration="1" data-wow-offset="0"
                class="wow fadeInRight header__phone-laptop">
                <img class="header__img-phone" src="/img/portfolio/bankovspa/mobile-home.png" alt="png">
                <img class="header__img-laptop" src="/img/portfolio/bankovspa/laptop.png" alt="png">
            </div>
        </header>
        <div class="bankov_spa_develop">
            <div class="row no-margin">
                <div class="container">
                    <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                        class="wow slideInLeft col-xs-12 col-md-6">
                        <p class="text sub main-sub white-text">{{ trans('portfolio/bankovspa.about') }}</p>
                        <p class="border_white"></p>
                        <p class="text sub white-text about">{{ trans('portfolio/bankovspa.about_text') }}</p>
                    </div>
                    <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                        class="wow slideInRight col-xs-12 col-md-6">
                        <p class="text sub main-sub white-text">{{ trans('portfolio/bankovspa.tools') }}</p>
                        <p class="border_white"></p>
                        <div class="tools">
                            <ul class="text sub white-text">
                                <li>Concept design</li>
                                <li>Web UI/UX Design</li>
                                <li>Web Development</li>
                                <li>Front-End: фреймворк Materialize</li>
                                <li>Back-End: фреймворк Laravel 5</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bankov_spa_uikit">
            <div class="row no-margin">
                <div class="container">
                    <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                        class="wow zoomInLeft col-xs-12 col-md-6 top">
                        <p class="text name">UI KIT</p>
                        <p class="text sub">{{ trans('portfolio/bankovspa.ui_text') }}</p>
                    </div>
                    <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                        class="wow zoomInRight col-xs-12 col-md-6 top">
                        <img class="responsive-img middle-pic mockup_uikit" src="/img/portfolio/bankovspa/uikit.png">
                    </div>
                </div>
            </div>
        </div>
        <div class="bankov_spa_individual">
            <div class="row no-margin">
                <div class="container">
                    <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                        class="wow fadeIn col-xs-12">
                        <p class="text name white-text">{{ trans('portfolio/bankovspa.pages') }}</p>
                        <p class="text sub white-text aligncenter">{{ trans('portfolio/bankovspa.pages_text') }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="bankov_spa_adminka">
            <div class="col-xs-12 for_admin">
                <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                    class="wow slideInUp about_admin">
                    <p class="text name">{{ trans('portfolio/bankovspa.adminpanel') }}</p>
                    <p class="text sub">{{ trans('portfolio/bankovspa.admin_text') }}</p>
                </div>
            </div>
        </div>
        <div class="icons_bankov_spa">
            <div class="row no-margin">
                <div class="container">
                    <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                        class="wow slideInUp col-xs-12">
                        <p class="text name">{{ trans('portfolio/bankovspa.icons') }}</p>
                        <p class="text sub">{{ trans('portfolio/bankovspa.icons_text') }}</p>
                    </div>
                    <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                        class="wow zoomInUp col-xs-12">
                        <div class="parrent_icon col-xs-6 col-md-3 col-lg-1">
                            <div class="for_bankov_icon">
                                <img class="bankov-icon middle-pic responsive-img"
                                    src="/img/portfolio/bankovspa/icon1.png">
                            </div>
                        </div>
                        <div class="parrent_icon col-xs-6 col-md-3 col-lg-1">
                            <div class="for_bankov_icon">
                                <img class="bankov-icon middle-pic responsive-img"
                                    src="/img/portfolio/bankovspa/icon2.png">
                            </div>
                        </div>
                        <div class="parrent_icon col-xs-6 col-md-3 col-lg-1">
                            <div class="for_bankov_icon">
                                <img class="bankov-icon middle-pic responsive-img"
                                    src="/img/portfolio/bankovspa/icon3.png">
                            </div>
                        </div>
                        <div class="parrent_icon col-xs-6 col-md-3 col-lg-1">
                            <div class="for_bankov_icon">
                                <img class="bankov-icon middle-pic responsive-img"
                                    src="/img/portfolio/bankovspa/icon4.png">
                            </div>
                        </div>
                        <div class="parrent_icon col-xs-6 col-md-3 col-lg-1">
                            <div class="for_bankov_icon">
                                <img class="bankov-icon middle-pic responsive-img"
                                    src="/img/portfolio/bankovspa/icon5.png">
                            </div>
                        </div>
                        <div class="parrent_icon col-xs-6 col-md-3 col-lg-1">
                            <div class="for_bankov_icon">
                                <img class="bankov-icon middle-pic responsive-img"
                                    src="/img/portfolio/bankovspa/icon6.png">
                            </div>
                        </div>
                        <div class="parrent_icon col-xs-6 col-md-3 col-lg-1">
                            <div class="for_bankov_icon">
                                <img class="bankov-icon middle-pic responsive-img"
                                    src="/img/portfolio/bankovspa/icon7.png">
                            </div>
                        </div>
                        <div class="parrent_icon col-xs-6 col-md-3 col-lg-1">
                            <div class="for_bankov_icon">
                                <img class="bankov-icon middle-pic responsive-img"
                                    src="/img/portfolio/bankovspa/icon8.png">
                            </div>
                        </div>
                        <div class="parrent_icon col-xs-6 col-md-3 col-lg-1">
                            <div class="for_bankov_icon">
                                <img class="bankov-icon middle-pic responsive-img"
                                    src="/img/portfolio/bankovspa/icon9.png">
                            </div>
                        </div>
                        <div class="parrent_icon col-xs-6 col-md-3 col-lg-1">
                            <div class="for_bankov_icon">
                                <img class="bankov-icon middle-pic responsive-img"
                                    src="/img/portfolio/bankovspa/icon10.png">
                            </div>
                        </div>
                        <div class="parrent_icon col-xs-6 col-md-3 col-lg-1">
                            <div class="for_bankov_icon">
                                <img class="bankov-icon middle-pic responsive-img"
                                    src="/img/portfolio/bankovspa/icon11.png">
                            </div>
                        </div>
                        <div class="parrent_icon col-xs-6 col-md-3 col-lg-1">
                            <div class="for_bankov_icon">
                                <img class="bankov-icon middle-pic responsive-img"
                                    src="/img/portfolio/bankovspa/icon12.png">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bankov_spa_variants">
            <div class="row no-margin">
                <div class="container">
                    <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                        class="wow fadeIn">
                        <p class="text name white-text">{{ trans('portfolio/bankovspa.variants') }}</p>
                        <p class="text sub white-text">{{ trans('portfolio/bankovspa.variants_text') }}</p>
                    </div>
                    <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                        class="wow slideInRight col-xs-12 col-md-6">
                        <img class="responsive-img middle-pic page_bankov-spa"
                            src="/img/portfolio/bankovspa/Bankov2-1400_v2.png">
                    </div>
                    <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                        class="wow slideInLeft col-xs-12 col-md-6">
                        <img class="responsive-img middle-pic page_bankov-spa"
                            src="/img/portfolio/bankovspa/Bankov_v2.png">
                    </div>
                    <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                        class="wow slideInUp col-xs-12">
                        <img class="responsive-img middle-pic page_bankov-spa big-page"
                            src="/img/portfolio/bankovspa/Bankov.png">
                    </div>
                </div>
            </div>
        </div>
        <div class="bankov_spa_all_pages">
            <div class="row no-margin">
                <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                    class="wow fadeIn container">
                    <p class="text name">{{ trans('portfolio/bankovspa.design') }}</p>
                    <p class="text sub">{{ trans('portfolio/bankovspa.desing_text') }}</p>
                </div>
            </div>
            <div class="row no-margin">
                <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                    class="wow slideInLeft col-xs-12">
                    <img class="responsive-img middle-pic page_bankov-spa"
                        src="/img/portfolio/bankovspa/Bankov2-1400_v2.png">
                </div>
                <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                    class="wow slideInRight col-xs-12">
                    <img class="responsive-img middle-pic page_bankov-spa"
                        src="/img/portfolio/bankovspa/1-BankovSPA-gal.png">
                </div>
                <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                    class="wow slideInUp col-xs-12 col-md-6">
                    <img class="responsive-img middle-pic page_bankov-spa"
                        src="/img/portfolio/bankovspa/2-BankovSPA-gal_kat.png">
                </div>
                <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                    class="wow slideInDown col-xs-12 col-md-6">
                    <img class="responsive-img middle-pic page_bankov-spa"
                        src="/img/portfolio/bankovspa/3-BankovSPA-gal_foto.png">
                </div>
            </div>
            <div class="row no-margin">
                <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                    class="wow slideInDown col-xs-12 col-md-6">
                    <img class="responsive-img middle-pic page_bankov-spa"
                        src="/img/portfolio/bankovspa/BankovSPA-new.png">
                </div>
                <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                    class="wow slideInUp col-xs-12 col-md-6">
                    <img class="responsive-img middle-pic page_bankov-spa"
                        src="/img/portfolio/bankovspa/BankovSPA-new_read.png">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="container">
                <div class="col-xs-12 col-md-5 col-lg-3 parent">
                    <div class="photo">
                        <img class="responsive-img" src="/img/portfolio/bankovspa/ico2.png">
                    </div>
                </div>
                <div class="col-xs-12 col-md-7 col-lg-9">
                    <blockquote>
                        <q>{{ trans('portfolio/bankovspa.footer') }}
                        </q><br><br>
                        <cite></cite>
                    </blockquote>
                </div>
            </div>
        </div>
        <div class="row bottom">
            <div class="container slide_8 centered">
                <div class="aligncenter col-100 case-1 load center">
                    <img class="responsive-img" src="/img/portfolio/bankovspa/ico1.png" width="55" height=""
                        alt="разработка интернет-магазина"><br />
                    <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                        class="wow fadeInUp col-xs-12 center">
                        <a class="btn-1 read-more" tabindex="-1" href="http://bankow-spa.ru/" rel="nofollow"
                            target="blank">{{ trans('portfolio/bankovspa.header_button') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@section('bottom-scripts')
    <script src="{{ asset('js/libs.js') }}"></script>
@endsection
