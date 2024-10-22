@extends('layouts.portfolio-item')

@section('seo')
    <link rel="canonical" href="{{ Request::url() }}">
    <title>alden</title>
    <meta name="description" content="{{ trans('portfolio/alden.seo_descr') }}">
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/redesign.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/portfolio/alden.css') }}">
@endsection

@section('content')
    <div class="overflow">
        <section class="header">
            <div class="header__container">
                <div class="header__inner">
                    <div class="header__description">
                        <div class="header__logo wow bounceInDown" data-wow-delay="0s" duration="1s">
                            <p class="logo">
                                ALDEN
                            </p>
                        </div>
                        <h1 class="header__txt wow fadeInUp" data-wow-delay="0.5s" duration="1s">
                            {!! trans('portfolio/alden.header_title') !!}
                        </h1>
                        <div class="header__icons wow fadeInDown" data-wow-delay="0.5s" duration="1s">
                            <div class="header__img-area">
                                <img class="header__icon-img" src="/img/portfolio/amore/icons/laptop.png" alt="png">
                            </div>
                            <div class="header__img-area">
                                <img class="header__icon-img" src="/img/portfolio/amore/icons/phone.png" alt="png">
                            </div>
                            <div class="header__img-area">
                                <img class="header__icon-img" src="/img/portfolio/amore/icons/tablet.png" alt="png">
                            </div>
                        </div>
                        <a href="portfolio/alden" class="header__button wow bounceInUp" rel="nofollow">
                            {{ trans('portfolio/alden.header_button') }}
                        </a>
                    </div>
                </div>
            </div>
            <div class="header__phone-laptop wow bounceInRight" data-wow-delay="0s" duration="2s">
                <img class="header__img-phone" src="/img/portfolio/alden/mobile-home.png" alt="png">
                <img class="header__img-laptop" src="/img/portfolio/alden/laptop.png" alt="png">
            </div>
        </section>
        <section class="main">
            <div class="main-decor  main_top_left_decor">
                <img src="/img/portfolio/alden/main_top_left_decor.svg" alt="main_top_left_decor">
            </div>
            <div class="main-decor decor-2">
                <img src="/img/portfolio/alden/decor-2.svg" alt="decor-2">

            </div>
            <div class="container">
                <div class="text-right">
                    <h1 class="section-title after berfore main-title wow bounceInRight">
                        {{ trans('portfolio/alden.section_title') }}</h1>
                </div>

                <div class="main-mainpage_holder wow bounceInUp">
                    <img src="/img/portfolio/alden/mainPage.jpg" alt="mainpage" class="mainPage">
                    <p class="main-mainpage_holder-text">
                        {{ trans('portfolio/alden.section_title') }}
                    </p>
                </div>
            </div>
        </section>
        <section class="colorize">
            <div class="container">
                <div class="line-decor">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <p class="section-title before wow bounceInLeft">
                    {!! trans('portfolio/alden.section_title') !!}
                </p>
                <ul class="colorize-color_list">
                    <li>
                        <div class="colorize-color_list-item wow bounceInLeft">
                            <div class="colorize-color_list-cercle"></div>
                            <p class="colorize-color_list-text"> #00594D </p>
                        </div>
                    </li>
                    <li>
                        <div class="colorize-color_list-item">
                            <div class="colorize-color_list-cercle color_22"></div>
                            <p class="colorize-color_list-text"> #222222 </p>
                        </div>
                    </li>
                    <li>
                        <div class="colorize-color_list-item wow bounceInDown">
                            <div class="colorize-color_list-cercle color_ff"></div>
                            <p class="colorize-color_list-text"> #ffffff </p>
                        </div>
                    </li>
                    <li>
                        <div class="colorize-color_list-item wow bounceInUp">
                            <div class="colorize-color_list-cercle color_ea"></div>
                            <p class="colorize-color_list-text"> #eaeaea </p>
                        </div>
                    </li>
                    <li>
                        <div class="colorize-color_list-item wow bounceInRight">
                            <div class="colorize-color_list-cercle color_e6"></div>
                            <p class="colorize-color_list-text"> #E6A320 </p>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <section class="fonts">
            <div class="container">
                <div class="line-decor">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div class="text-right">
                    <p class="section-title after wow bounceInRight">
                        {!! trans('portfolio/alden.fonts') !!}
                    </p>
                </div>
            </div>
            <div class="container fonts-container">
                <div class="fonts-col">
                    <div class="fonts-win wow bounceInLeft">
                        <div class="fonts-win-top">
                            <p class="fonts-name">
                                RALEWAY
                            </p>
                            <p class="fonts-aa">Aa</p>
                        </div>
                        <ul class="fonts-weight_list">
                            <li class="Regular">Regular</li>
                            <li class="Medium">Medium</li>
                            <li class="Medium_Italic">Medium Italic</li>
                            <li class="Bold">Bold</li>
                        </ul>
                    </div>
                </div>
                <div class="fonts-col">
                    <div class="fonts-win Montserrat wow bounceInRight">
                        <div class="fonts-win-top">
                            <p class="fonts-name">
                                Montserrat
                            </p>
                            <p class="fonts-aa">Aa</p>
                        </div>
                        <ul class="fonts-weight_list">
                            <li class="Regular">Regular</li>
                            <li class="Italic">Italic</li>
                            <li class="Medium">Medium</li>
                            <li class="Bold">Bold</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="pages">
            <img class="pages-decor" src="/img/portfolio/alden/decor-2.svg" alt="decor-2">
            <div class="container">
                <div class="line-decor">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <p class="section-title before wow bounceInLeft">
                    {!! trans('portfolio/alden.others') !!}
                </p>

                <div class="pages-img_prom wow bounceInUp">
                    <img src="/img/portfolio/alden/prom.jpg" alt="prom">
                </div>
            </div>
        </section>
        <section class="pages_bottom">
            <div class="container">
                <div class="pages_bottom-img_about wow bounceInLeft">
                    <p class="pages_bottom-img_about-text">{{ trans('portfolio/alden.others') }}</p>
                    <img src="/img/portfolio/alden/about.jpg" alt="about">
                </div>
                <div class="pages_bottom-img_contact wow bounceInRight">
                    <img src="/img/portfolio/alden/contacts.jpg" alt="contacts">
                </div>
            </div>
            <div class="grey">
                <div class="container">
                    <div class="pages_bottom-img_decloration wow bounceInLeft">
                        <img src="/img/portfolio/alden/declorations.jpg" alt="declorations">
                    </div>
                </div>
            </div>
        </section>
        <section class="s_footer">
            <p class="wow bounceInUp">{!! trans('portfolio/alden.footer_txt') !!}</p>
        </section>
    </div>
@endsection

@section('bottom-scripts')
    <script src="{{ asset('js/libs.js') }}"></script>
@endsection
