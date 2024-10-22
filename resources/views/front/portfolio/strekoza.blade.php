@extends('layouts.portfolio-item')

@section('seo')
    <link rel="canonical" href="{{ Request::url() }}">
    <title>{{ trans('portfolio/strekoza.seo_title') }}</title>
    <meta name="description" content="{{ trans('portfolio/strekoza.seo_descr') }}">
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/redesign.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/portfolio/strekoza.css') }}">
@endsection

@section('content')
    <main class="strecoza">
        <header class="header">
            <div class="header__container">
                <div class="header__inner">
                    <div class="header__description">
                        <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow fadeInDown header__logo">
                            <img src="/img/portfolio/strekoza/logo.png" alt="логотип.png">
                        </div>
                        <div data-wow-delay="0.5s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow fadeInUp header__txt" el="h1">
                            {{ trans('portfolio/strekoza.header_title') }}
                        </div>
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
                            class="wow fadeInUp header__button" href="http://strecoza.ua/" rel="nofollow">
                            {{ trans('portfolio/strekoza.header_button') }}
                        </a>
                    </div>
                </div>
            </div>
            <div data-wow-delay="0s" data-wow-duration="2s" data-wow-iteration="1" data-wow-offset="0"
                class="wow fadeInRight header__phone-laptop">
                <img class="header__img-phone" src="/img/portfolio/strekoza/mobile-home.png" alt="png">
                <img class="header__img-laptop" src="/img/portfolio/strekoza/laptop.png" alt="png">
            </div>
        </header>
        <div class="strecoza_conception">
            <div class="row">
                <div class="container">
                    <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                        class="wow fadeIn col-xs-12 col-md-12 col-lg-12">
                        <p class="center text name border">{{ trans('portfolio/strekoza.conception_title') }}</p>
                        <p class="center sub text">{{ trans('portfolio/strekoza.conception_text1') }}</p>
                    </div>
                    <div data-wow-delay="0.2s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                        class="wow slideInUp col-xs-12 col-md-12 col-lg-4">
                        <div class="for_icon">
                            <img class="icon middle-pic" src="/img/portfolio/strekoza/puls.png" alt="icon">
                            <p class="text sub center">{{ trans('portfolio/strekoza.conception_text2') }}</p>
                        </div>
                    </div>
                    <div data-wow-delay="0.2s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                        class="wow zoomIn col-xs-12 col-md-12 col-lg-4">
                        <div class="for_icon">
                            <img class="icon middle-pic" src="/img/portfolio/strekoza/star.png" alt="icon">
                            <p class="text sub center">{{ trans('portfolio/strekoza.conception_text3') }}</p>
                        </div>
                    </div>
                    <div data-wow-delay="0.2s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                        class="wow slideInDown col-xs-12 col-md-12 col-lg-4">
                        <div class="for_icon">
                            <img class="icon middle-pic" src="/img/portfolio/strekoza/timer.png" alt="icon">
                            <p class="text sub center">{{ trans('portfolio/strekoza.conception_text4') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row strecoza_laravel">
            <div class="container">
                <div class="col-xs-12 col-md-12 col-lg-12">
                    <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                        class="wow fadeIn about_laravel">
                        <p class="center text name border">{{ trans('portfolio/strekoza.development') }}</p>
                        <p class="center text sub">{{ trans('portfolio/strekoza.development_text') }}</p>
                    </div>
                </div>
                <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                    class="wow slideInUp col-xs-12 col-md-12 col-lg-12">
                    <div>
                        <img class="middle-pic responsive-img" src="/img/portfolio/strekoza/mockup_2.png" alt="mockup_2">
                    </div>
                </div>
            </div>
        </div>
        <div class="adminpanel">
            <div class="row">
                <div class="container">
                    <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                        class="wow fadeIn col-xs-12 col-md-12 col-lg-12">
                        <p class="center text name border">{{ trans('portfolio/strekoza.admin_panel') }}</p>
                        <p class="center text sub">{{ trans('portfolio/strekoza.panel_text') }}</p>
                    </div>
                </div>
            </div>
            <div class="strecoza_adminpanel">
                <div data-wow-delay="0.2s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                    class="wow bounceInDown">
                    <img class="admin board middle-pic responsive-img" src="/img/portfolio/strekoza/adminka_3.png"
                        alt="adminpanel">
                    <img class="slideLeftRetourn admin side middle-pic responsive-img"
                        src="/img/portfolio/strekoza/adminka_2.png" alt="adminpanel">
                    <img class="slideLeftRetourn admin panel middle-pic responsive-img"
                        src="/img/portfolio/strekoza/adminka_1.png" alt="adminpanel">
                </div>
            </div>
        </div>
        <div class="design_var">
            <div class="row">
                <div class="container">
                    <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                        class="wow fadeIn col-xs-12 col-md-12 col-lg-12">
                        <p class="center text name border">{{ trans('portfolio/strekoza.options') }}</p>
                        <p class="center text sub">{{ trans('portfolio/strekoza.options_text') }}</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-md-6 col-lg-6">
                    <p class="center text sub">{{ trans('portfolio/strekoza.option') }} №1</p>
                    <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                        class="wow slideInLeft">
                        <img class="responsive-img page" src="/img/portfolio/strekoza/strekoza_green.png" alt="var_2">
                    </div>
                </div>
                <div class="col-xs-12 col-md-6 col-lg-6">
                    <p class="center text sub">{{ trans('portfolio/strekoza.option') }} №2</p>
                    <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                        class="wow slideInRight">
                        <img class="animated responsive-img page" src="/img/portfolio/strekoza/Strekoza_v2-1.png"
                            alt="var_2">
                    </div>
                </div>
            </div>
        </div>
        <div class="strecoza_icons">
            <div class="row">
                <div class="container">
                    <div class="col s12 m12 l12">
                        <p class="text name center white_text border">{{ trans('portfolio/strekoza.icons') }}</p>
                        <p class="text sub center white_text">{{ trans('portfolio/strekoza.icons_text') }}
                        </p>
                    </div>
                    <div class="col-xs-6 col-md-4 col-lg-2">
                        <div class="for_icon_2 white_border">
                            <img class="icon_2 middle-pic" src="/img/portfolio/strekoza/icon_1.png" alt="icon">
                            <p class="center"></p>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4 col-lg-2">
                        <div class="for_icon_2 white_border">
                            <img class="icon_2 middle-pic" src="/img/portfolio/strekoza/icon_2.png" alt="icon">
                            <p class="center"></p>
                        </div>
                    </div>
                    <div class="ccol-xs-6 col-md-4 col-lg-2">
                        <div class="for_icon_2 white_border">
                            <img class="icon_2 middle-pic" src="/img/portfolio/strekoza/icon_3.png" alt="icon">
                            <p class="center"></p>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4 col-lg-2">
                        <div class="for_icon_2 white_border">
                            <img class="icon_2 middle-pic" src="/img/portfolio/strekoza/icon_4.png" alt="icon">
                            <p class="center"></p>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4 col-lg-2">
                        <div class="for_icon_2 white_border">
                            <img class="icon_2 middle-pic" src="/img/portfolio/strekoza/icon_5.png" alt="icon">
                            <p class="center"></p>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4 col-lg-2">
                        <div class="for_icon_2 white_border">
                            <img class="icon_2 middle-pic" src="/img/portfolio/strekoza/icon_7.png" alt="icon">
                            <p class="center"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="strecoza_final">
            <div class="row">
                <div class="col-xs-12 col-md-12 col-lg-12">
                    <p class="center text name border">{{ trans('portfolio/strekoza.final') }}</p>
                    <p class="center text sub">{{ trans('portfolio/strekoza.final_text') }}</p>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-md-12 col-lg-12">
                        <p class="center text sub">{{ trans('portfolio/strekoza.main_page') }}</p>
                        <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow fadeIn">
                            <img id="main-page" class=" middle-pic responsive-img"
                                src="/img/portfolio/strekoza/page1.png" alt="page">
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-12 col-lg-12">
                        <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow slideInLeft col-xs-12 col-md-6 col-lg-6">
                            <p class="left text sub">{{ trans('portfolio/strekoza.page') }} №1</p>
                            <img class="page responsive-img" src="/img/portfolio/strekoza/page2.png" alt="page">
                        </div>
                        <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow slideInRight col-xs-12 col-md-6 col-lg-6">
                            <p class="right text sub">{{ trans('portfolio/strekoza.page') }} №2</p>
                            <img class="page responsive-img" src="/img/portfolio/strekoza/page3.png" alt="page">
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-12 col-lg-12">
                        <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow slideInLeft col-xs-12 col-md-6 col-lg-6">
                            <p class="left text sub">{{ trans('portfolio/strekoza.page') }} №3</p>
                            <img class="page responsive-img" src="/img/portfolio/strekoza/page4.png" alt="page">
                        </div>
                        <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow slideInRight col-xs-12 col-md-6 col-lg-6">
                            <p class="right text sub">{{ trans('portfolio/strekoza.page') }} №4</p>
                            <img class="page responsive-img" src="/img/portfolio/strekoza/page5.png" alt="page">
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-12 col-lg-12">
                        <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow slideInLeft col-xs-12 col-md-6 col-lg-6">
                            <p class="left text sub">{{ trans('portfolio/strekoza.page') }} №5</p>
                            <img class="page responsive-img" src="/img/portfolio/strekoza/page6.png" alt="page">
                        </div>
                        <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow slideInRight col-xs-12 col-md-6 col-lg-6">
                            <p class="right text sub">{{ trans('portfolio/strekoza.page') }} №6</p>
                            <img class="page responsive-img" src="/img/portfolio/strekoza/page7.png" alt="page">
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-12 col-lg-12">
                        <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow slideInLeft col-xs-12 col-md-6 col-lg-6">
                            <p class="left text sub">{{ trans('portfolio/strekoza.page') }} №7</p>
                            <img class="page responsive-img" src="/img/portfolio/strekoza/page8.png" alt="page">
                        </div>
                        <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow slideInRight col-xs-12 col-md-6 col-lg-6">
                            <p class="right text sub">{{ trans('portfolio/strekoza.page') }} №8</p>
                            <img class="page responsive-img" src="/img/portfolio/strekoza/page9.png" alt="page">
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-12 col-lg-12">
                        <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow slideInLeft col-xs-12 col-md-6 col-lg-6">
                            <p class="left text sub">{{ trans('portfolio/strekoza.page') }} №9</p>
                            <img class="page responsive-img" src="/img/portfolio/strekoza/page10.png" alt="page">
                        </div>
                        <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow slideInRight col-xs-12 col-md-6 col-lg-6">
                            <p class="right text sub">{{ trans('portfolio/strekoza.page') }} №10</p>
                            <img class="page responsive-img" src="/img/portfolio/strekoza/page11.png" alt="page">
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-12 col-lg-12">
                        <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow slideInLeft col-xs-12 col-md-6 col-lg-6">
                            <p class="left text sub">{{ trans('portfolio/strekoza.page') }} №11</p>
                            <img class="page responsive-img" src="/img/portfolio/strekoza/page12.png" alt="page">
                        </div>
                        <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow slideInRight col-xs-12 col-md-6 col-lg-6">
                            <p class="right text sub">{{ trans('portfolio/strekoza.page') }} №12</p>
                            <img class="page responsive-img" src="/img/portfolio/strekoza/page13.png" alt="page">
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-12 col-lg-12">
                        <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow slideInLeft col-xs-12 col-md-6 col-lg-6">
                            <p class="left text sub">{{ trans('portfolio/strekoza.page') }} №13</p>
                            <img class="page responsive-img" src="/img/portfolio/strekoza/page14.png" alt="page">
                        </div>
                        <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow slideInRight col-xs-12 col-md-6 col-lg-6">
                            <p class="right text sub">{{ trans('portfolio/strekoza.page') }} №14</p>
                            <img class="page responsive-img" src="/img/portfolio/strekoza/page15.png" alt="page">
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-12 col-lg-12">
                        <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow slideInLeft col-xs-12 col-md-6 col-lg-6">
                            <p class="left text sub">{{ trans('portfolio/strekoza.page') }} №15</p>
                            <img class="page responsive-img" src="/img/portfolio/strekoza/page16.png" alt="page">
                        </div>
                        <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow slideInRight col-xs-12 col-md-6 col-lg-6">
                            <p class="right text sub">{{ trans('portfolio/strekoza.page') }} №16</p>
                            <img class="page responsive-img" src="/img/portfolio/strekoza/page17.png" alt="page">
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-12 col-lg-12">
                        <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow slideInLeft col-xs-12 col-md-6 col-lg-6">
                            <p class="left text sub">{{ trans('portfolio/strekoza.page') }} №17</p>
                            <img class="page responsive-img" src="/img/portfolio/strekoza/page18.png" alt="page">
                        </div>
                        <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow slideInRight col-xs-12 col-md-6 col-lg-6">
                            <p class="right text sub">{{ trans('portfolio/strekoza.page') }} №18</p>
                            <img class="page responsive-img" src="/img/portfolio/strekoza/page19.png" alt="page">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="container wrap">
                <div class="col-xs-12 col-md-5 col-lg-3 parent">
                    <div class="photo">
                        <img class="responsive-img" src="/img/portfolio/strekoza/ico2.png">
                    </div>
                </div>
                <div class="col-xs-12 col-md-7 col-lg-9">
                    <blockquote>
                        <q>{{ trans('portfolio/strekoza.quote') }}
                        </q><br><br>
                        <cite></cite>
                    </blockquote>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="container slide_8 centered">
                <div class="aligncenter col-100 case-1 load center">
                    <img class="responsive-img" src="/img/portfolio/strekoza/ico1.png" width="55" height=""
                        alt="разработка интернет-магазина"><br />
                    <a href="http://strecoza.ua/" rel="nofollow" target="blank"
                        class="btn size1 color1 aligncenter">{{ trans('portfolio/strekoza.footer_button') }}</a>
                </div>
                <div class="col-xs-12 col-md-12 col-lg-12 center">
                    <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                        class="wow bounceInLeft">
                        <h2>{{ trans('portfolio/strekoza.footer1') }}</h2>
                    </div>
                    <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                        class="wow bounceInRight">
                        <p class="centered subheader">{{ trans('portfolio/strekoza.footer2') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@section('bottom-scripts')
    <script src="{{ asset('js/libs.js') }}"></script>
@endsection
