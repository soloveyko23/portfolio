@extends('layouts.portfolio-item')

@section('seo')
    <link rel="canonical" href="{{ Request::url() }}">
    <title>MOBILUS</title>
    <meta name="description" content="{{ trans('portfolio/mobilus.seo_title') }}">
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/redesign.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/portfolio/mobilus.css') }}">
@endsection

@section('content')
    <div class="overflow">
        <section class="header">
            <div class="header__container">
                <div class="header__inner">
                    <div class="header__description">
                        <div class="header__logo wow bounceInDown" data-wow-delay="0s" duration="1s">
                            <p class="logo">
                                MOBILUS
                            </p>
                        </div>
                        <h1 class="header__txt wow fadeInUp" data-wow-delay="0.5s" duration="1s">
                            {!! trans('portfolio/mobilus.header_title') !!}
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
                        <a href="https://mobilus.mobios.ua/" class="header__button wow bounceInUp" rel="nofollow">
                            {{ trans('portfolio/mobilus.header_button') }}
                        </a>
                    </div>
                </div>
            </div>
            <div class="header__phone-laptop">
                <img class="header__img-phone wow bounceInRight" data-wow-delay="0s" duration="2s"
                    src="/img/portfolio/mobilus/mobile-home.png" alt="png">
                <img class="header__img-laptop wow bounceInLeft" data-wow-delay=".3s" duration="2s"
                    src="/img/portfolio/mobilus/laptop.png" alt="png">
            </div>
        </section>

        <section class="section main">
            <div class="container">
                <div class="section-title wow bounceInLeft">
                    {{ trans('portfolio/mobilus.main_page') }}
                </div>

                <div class="image_holder main-poster wow bounceInRight">
                    <p class="main-poster-text">
                        {{ trans('portfolio/mobilus.main_page') }}
                    </p>
                    <img src="/img/portfolio/mobilus/main.png" alt="main">
                </div>
            </div>
            <div class="main-footer">
                <svg class="main-footer-svg" viewBox="0 0 1920 263" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 0H1920V263L0 0Z" fill="white" />
                </svg>

                <img src="/img/portfolio/mobilus/main-footer.jpg" alt="main-footer">
            </div>
        </section>

        <section class="section">
            <div class="container">
                <div class="section-title wow bounceInLeft">
                    {{ trans('portfolio/mobilus.colors') }}
                </div>
                <ul class="color-list">
                    <li class="color-item_1D wow fadeInLeft" data-wow-delay="0.3s"> <span>1D1D1D</span> </li>
                    <li class="color-item_F7 wow fadeInLeft" data-wow-delay="0.4s"> <span>F7941D</span> </li>
                    <li class="color-item_F8 wow fadeInLeft" data-wow-delay="0.5s"> <span>F8F8F8</span> </li>
                    <li class="color-item_9F wow fadeInLeft" data-wow-delay="0.6s"> <span>9FCFCC</span> </li>
                    <li class="color-item_00 wow fadeInLeft" data-wow-delay="0.7s"> <span>00A99D</span> </li>
                </ul>
            </div>
        </section>
        <section class="section">
            <div class="container">
                <div class="section-title wow bounceInLeft">
                    {{ trans('portfolio/mobilus.fonts') }}
                </div>
                <div class="fonts-win">
                    <div class="fonts-win-row">
                        <p class="fonts-name">
                            OSWALD
                        </p>
                        <ul class="fonts-chars">
                            <li class="wow fadeInLeft" data-wow-delay="0.1s"> Aa </li>
                            <li class="wow fadeInLeft" data-wow-delay="0.2s"> Bb </li>
                            <li class="wow fadeInLeft" data-wow-delay="0.3s"> Cc </li>
                            <li class="wow fadeInLeft" data-wow-delay="0.4s"> Dd </li>
                            <li class="wow fadeInLeft" data-wow-delay="0.5s"> Ee </li>
                            <li class="wow fadeInLeft" data-wow-delay="0.6s"> Ff </li>
                            <li class="wow fadeInLeft" data-wow-delay="0.7s"> Gg </li>
                            <li class="wow fadeInLeft" data-wow-delay="0.8s"> Hh </li>
                            <li class="wow fadeInLeft" data-wow-delay="0.9s"> Ii </li>
                            <li class="wow fadeInLeft" data-wow-delay="1s"> Jj </li>
                            <li class="wow fadeInLeft" data-wow-delay="1.1s"> Kk </li>
                            <li class="wow fadeInLeft" data-wow-delay="1.2s"> Ll </li>
                            <li class="wow fadeInLeft" data-wow-delay="1.3s"> Mm </li>
                            <li class="wow fadeInLeft" data-wow-delay="1.4s"> Nn </li>
                            <li class="wow fadeInLeft" data-wow-delay="1.5s"> Oo </li>
                            <li class="wow fadeInLeft" data-wow-delay="1.6s"> Pp </li>
                            <li class="wow fadeInLeft" data-wow-delay="1.7s"> Qq </li>
                            <li class="wow fadeInLeft" data-wow-delay="1.8s"> Rr </li>
                            <li class="wow fadeInLeft" data-wow-delay="1.9s"> Ss </li>
                            <li class="wow fadeInLeft" data-wow-delay="2s"> Tt </li>
                            <li class="wow fadeInLeft" data-wow-delay="2.1s"> Uu </li>
                            <li class="wow fadeInLeft" data-wow-delay="2.2s"> Vv </li>
                            <li class="wow fadeInLeft" data-wow-delay="2.3s"> Ww </li>
                            <li class="wow fadeInLeft" data-wow-delay="2.4s"> Xx </li>
                            <li class="wow fadeInLeft" data-wow-delay="2.5s"> Yy </li>
                            <li class="wow fadeInLeft" data-wow-delay="2.6s"> ZZ </li>
                        </ul>
                    </div>
                    <div class="fonts-win-row Montserrat">
                        <div class="fonts-name">
                            MONTSERRAT
                        </div>
                        <ul class="fonts-chars">
                            <li class="wow fadeInLeft" data-wow-delay="0.1s"> Aa </li>
                            <li class="wow fadeInLeft" data-wow-delay="0.2s"> Bb </li>
                            <li class="wow fadeInLeft" data-wow-delay="0.3s"> Cc </li>
                            <li class="wow fadeInLeft" data-wow-delay="0.4s"> Dd </li>
                            <li class="wow fadeInLeft" data-wow-delay="0.5s"> Ee </li>
                            <li class="wow fadeInLeft" data-wow-delay="0.6s"> Ff </li>
                            <li class="wow fadeInLeft" data-wow-delay="0.7s"> Gg </li>
                            <li class="wow fadeInLeft" data-wow-delay="0.8s"> Hh </li>
                            <li class="wow fadeInLeft" data-wow-delay="0.9s"> Ii </li>
                            <li class="wow fadeInLeft" data-wow-delay="1s"> Jj </li>
                            <li class="wow fadeInLeft" data-wow-delay="1.1s"> Kk </li>
                            <li class="wow fadeInLeft" data-wow-delay="1.2s"> Ll </li>
                            <li class="wow fadeInLeft" data-wow-delay="1.3s"> Mm </li>
                            <li class="wow fadeInLeft" data-wow-delay="1.4s"> Nn </li>
                            <li class="wow fadeInLeft" data-wow-delay="1.5s"> Oo </li>
                            <li class="wow fadeInLeft" data-wow-delay="1.6s"> Pp </li>
                            <li class="wow fadeInLeft" data-wow-delay="1.7s"> Qq </li>
                            <li class="wow fadeInLeft" data-wow-delay="1.8s"> Rr </li>
                            <li class="wow fadeInLeft" data-wow-delay="1.9s"> Ss </li>
                            <li class="wow fadeInLeft" data-wow-delay="2s"> Tt </li>
                            <li class="wow fadeInLeft" data-wow-delay="2.1s"> Uu </li>
                            <li class="wow fadeInLeft" data-wow-delay="2.2s"> Vv </li>
                            <li class="wow fadeInLeft" data-wow-delay="2.3s"> Ww </li>
                            <li class="wow fadeInLeft" data-wow-delay="2.4s"> Xx </li>
                            <li class="wow fadeInLeft" data-wow-delay="2.5s"> Yy </li>
                            <li class="wow fadeInLeft" data-wow-delay="2.6s"> ZZ </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="site_menu">
            <div class="container">
                <div class="site_menu-row">
                    <div class="site_menu-col-4">
                        <p class="site_menu-title wow fadeInLeft">
                            <span class="wow fadeInRight" data-wow-delay=".6s">
                                burger
                            </span>
                            {{ trans('portfolio/mobilus.menu') }}
                        </p>
                    </div>
                    <div class="site_menu-col-6">
                        <img class="site_menu-img" src="/img/portfolio/mobilus/menu.png" alt="menu">
                    </div>
                </div>
            </div>
            <div class="container">
                <p class="site_menu-p"> {{ trans('portfolio/mobilus.other') }} </p>
                <ul class="site_menu-ellements">
                    <li class="wow fadeInLeft" data-wow-delay="0.3s"> <img src="/img/portfolio/mobilus/menu-list.png"
                            alt="menu-list"> </li>
                    <li class="wow fadeInLeft" data-wow-delay="0.6s"> <img
                            src="/img/portfolio/mobilus/menu-list-invert.png" alt="menu-list-invert"> </li>
                    <li class="wow fadeInLeft" data-wow-delay="0.9s"> <img src="/img/portfolio/mobilus/icons.png"
                            alt="icons"> </li>
                    <li class="wow fadeInLeft" data-wow-delay="1.2s"> <img src="/img/portfolio/mobilus/hover-menu.png"
                            alt="hover-menu"> </li>
                    <li class="wow fadeInLeft" data-wow-delay="1.5s"> <img src="/img/portfolio/mobilus/language.png"
                            alt="language"> </li>
                </ul>
            </div>
        </section>

        <section class="section elsePage">
            <div class="elsePage-cercle">
                <svg width="648" height="739" viewBox="0 0 648 739" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <circle cx="278.5" cy="369.5" r="309.5" stroke="#F8F8F8" stroke-width="120" />
                </svg>
            </div>
            <div class="elsePage-cercle_2">
                <svg width="1063" height="1007" viewBox="0 0 1063 1007" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <circle cx="820.5" cy="820.5" r="715.5" stroke="#F8F8F8" stroke-width="210" />
                </svg>
            </div>

            <div class="container elsePage-container">
                <p class="section-title">{{ trans('portfolio/mobilus.other_page') }}</p>
                <div class="elsePage-poster elsePage-poster--top wow fadeInUp">
                    <img src="/img/portfolio/mobilus/else1.jpg" alt="else">
                    <p class="elsePage-poster_text">
                        {{ trans('portfolio/mobilus.other_page') }}
                    </p>
                </div>
                <div class="elsePage-poster elsePage-poster--poster2 wow fadeInUp">
                    <img src="/img/portfolio/mobilus/contact.png" alt="contact">
                </div>
                <div class="elsePage-poster elsePage-poster--poster3 wow fadeInUp">
                    <img src="/img/portfolio/mobilus/blog.png" alt="blog">
                </div>
                <div class="elsePage-poster elsePage-poster--poster4 wow fadeInUp">
                    <img src="/img/portfolio/mobilus/about.png" alt="about">
                </div>
            </div>
        </section>
        <section class="thanks">
            <div class="container thanks-container">
                <img src="/img/portfolio/mobilus/car.png" class="wow fadeInRight" alt="car">
                <p class="thanks-p wow fadeInLeft" data-wow-delay="0.3s">{!! trans('portfolio/mobilus.footer') !!}</p>
            </div>
        </section>
    </div>
@endsection

@section('bottom-scripts')
    <script src="{{ asset('js/libs.js') }}"></script>
@endsection
