@extends('layouts.portfolio-item')

@section('seo')
    <link rel="canonical" href="{{ Request::url() }}">
    <title>{{ trans('portfolio/housefit.seo_title') }} </title>
    <meta name="description" content="{{ trans('portfolio/housefit.seo_descr') }}">
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/redesign.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/portfolio/housefit.css') }}">
@endsection
@section('content')
    <main class="housefit">
        <header class="header">
            <div class="header__container">
                <div class="header__inner">
                    <div class="header__description">
                        <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="header__logo wow fadeInDown">
                            <img src="/img/portfolio/housefit/logo.png" alt="логотип.png">
                        </div>
                        <h1 data-wow-delay="0.5s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="header__txt wow fadeInUp">
                            {{ trans('portfolio/housefit.header_title') }}
                        </h1>
                        <div data-wow-delay="0.5s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="header__icons wow fadeInDown">
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
                            class="wow fadeInUp header__button" href="https://housefit.ua/" rel="nofollow">
                            {{ trans('portfolio/housefit.header_button') }}
                        </a>
                    </div>
                </div>
            </div>
            <div data-wow-delay="0s" data-wow-duration="2s" data-wow-iteration="1" data-wow-offset="0"
                class="header__phone-laptop wow fadeInRight">
                <img class="header__img-phone" src="/img/portfolio/housefit/mobile-home.png" alt="png">
                <img class="header__img-laptop" src="/img/portfolio/housefit/laptop.png" alt="png">
            </div>
        </header>
        <section class="housefit-about">
            <div class="container ">
                <div class="row">
                    <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                        class="col-xs-12 col-md-6 col-lg-5 col-lg-offset-1 wow bounceInLeft">
                        <h3>{{ trans('portfolio/housefit.about') }}</h3>
                        <div class="divider"></div>
                        <p>{{ trans('portfolio/housefit.about_text') }}</p>
                    </div>
                    <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                        class="col-xs-12 col-md-6 col-lg-5 wow bounceInRight">
                        <h3>{{ trans('portfolio/housefit.about_tools') }}</h3>
                        <div class="divider"></div>
                        <ul>
                            <li>Concept design</li>
                            <li>Web UI/UX Design</li>
                            <li>Web Development</li>
                            <li>Front-End: {{ trans('portfolio/housefit.framework') }} Materialize</li>
                            <li>Back-End: {{ trans('portfolio/housefit.framework') }} Laravel 5</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="housefit-design">
            <div class="row">
                <div class="col-xs-12"></div>
            </div>
        </section>
        <section class="housefit-developer">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 center">
                        <h3>{{ trans('portfolio/housefit.steps_title') }}<< /h3>
                                <div class="divider"></div>
                    </div>
                    <div class="col-xs-12 col-md-6 col-lg-5 col-lg-offset-1 left">
                        <ul>
                            <li data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                                class="wow bounceInLeft">
                                {{ trans('portfolio/housefit.step1') }}
                            </li>
                            <li data-wow-delay="0.2s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                                class="wow bounceInLeft">
                                {{ trans('portfolio/housefit.step2') }}
                            </li>
                            <li data-wow-delay="0.4s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                                class="wow bounceInLeft">
                                {{ trans('portfolio/housefit.step3') }}
                            </li>
                            <li data-wow-delay="0.6s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                                class="wow bounceInLeft">
                                {{ trans('portfolio/housefit.step4') }}
                            </li>
                        </ul>
                    </div>
                    <div class="col-xs-12 col-md-6 col-lg-6 right">
                        <ul>
                            <li data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                                class="wow bounceInRight">
                                {{ trans('portfolio/housefit.step5') }}
                            </li>
                            <li data-wow-delay="0.2s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                                class="wow bounceInRight">
                                {{ trans('portfolio/housefit.step6') }}
                            </li>
                            <li data-wow-delay="0.4s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                                class="wow bounceInRight">
                                {{ trans('portfolio/housefit.step7') }}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="housefit-pages">
            <div class="container">
                <div class="row">
                    <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                        class="col-xs-12 col-md-6 wow bounceInLeft">
                        <p>{{ trans('portfolio/housefit.main_page') }}</p>
                        <img src="/img/portfolio/housefit/mainPage.jpg" alt="">
                    </div>
                    <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                        class="col-xs-12 col-md-6 wow bounceInRight">
                        <p>{{ trans('portfolio/housefit.categories') }}</p>
                        <img src="/img/portfolio/housefit/categoryPage.jpg" alt="">
                    </div>
                    <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                        class="col-xs-12 col-md-6 wow bounceInUp">
                        <p>{{ trans('portfolio/housefit.product_page') }}<< /p>
                                <img src="/img/portfolio/housefit/productPage.jpg" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section class="housefit-adaptive">
            <div class="container">
                <div class="row">
                    <div data-wow-delay="0.5s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                        class="col-xs-12 wow bounceInDown">
                        <h3>{{ trans('portfolio/housefit.adaptive_title') }}</h3>
                        <div class="divider"></div>
                        <p>{{ trans('portfolio/housefit.adaptive_text') }}</p>
                    </div>
                    <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                        class="col-xs-12 wow bounceInDown">
                        <h3>{{ trans('portfolio/housefit.promotion_title') }}</h3>
                        <div class="divider"></div>
                        <p>{{ trans('portfolio/housefit.promotion_text') }}</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="housefit-specials">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 center">
                        <h3>{{ trans('portfolio/housefit.features') }}</h3>
                        <div class="divider"></div>
                    </div>
                    <div class="col-xs-12 blocks">
                        <div class="col-xs-12 col-md-4 block1">
                            <p>Muli</p>
                            <p>ABCDEFGHIJKLMNOP</p>
                            <p>abcdefghijklmnop</p>
                            <p>0123456789</p>
                        </div>
                        <div class="col-xs-12 col-md-4 block2">
                            <p>Avante Bs Regular</p>
                            <p>АБВГДЕЁЖЗИЙКЛМНО</p>
                            <p>абвгдеёжзийклмно</p>
                            <p>0123456789</p>
                        </div>
                        <div class="col-xs-12 col-md-4 block3">
                            <p>Avante BsNr Bold</p>
                            <p>АБВГДЕЁЖЗИЙКЛМНО</p>
                            <p>абвгдеёжзийклмно</p>
                            <p>0123456789</p>
                        </div>
                    </div>
                    <div class="col-xs-12 center">
                        <img src="/img/portfolio/housefit/iconSport.png" alt="">
                    </div>
                    <div class="col-xs-12 circles center">
                        <div class="circle1">
                            <p>{{ trans('portfolio/housefit.color1') }} #9f3b9d</p>
                        </div>
                        <div class="circle2">
                            <p>{{ trans('portfolio/housefit.color2') }} #7cb342</p>
                        </div>
                        <div class="circle3">
                            <p>{{ trans('portfolio/housefit.color3') }} #ff9800</p>
                        </div>
                    </div>
                    <div class="col-xs-12 center">
                        <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="col-xs-12 wow fadeInUp">
                            <a class="btn-1 read-more" tabindex="-1" href="http://housefit.ua/" rel="nofollow"
                                target="blank">{{ trans('portfolio/housefit.footer') }}</a>
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
