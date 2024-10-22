@extends('layouts.portfolio-item')

@section('seo')
    <link rel="canonical" href="{{ Request::url() }}">
    <title>{{ trans('portfolio/lighttek.seo_title') }}</title>
    <meta name="description" content="{{ trans('portfolio/lighttek.seo_descr') }}">
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/redesign.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/portfolio/lighttek.css') }}">
@endsection


@section('content')
    <main class="lightek">
        <header class="header">
            <div class="header__container">
                <div class="header__inner">
                    <div class="header__description">
                        <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="fadeInDown header__logo">
                            <img src="/img/portfolio/lighttek/logo.jpg" alt="логотип.png">
                        </div>
                        <h1 data-wow-delay="0.5s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="fadeInUp header__txt">
                            {{ trans('portfolio/lighttek.header_title') }}
                        </h1>
                        <div data-wow-delay="0.5s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="fadeInDown header__icons">
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
                            class="fadeInUp header__button" href="https://lightek.net.ua/" rel="nofollow">
                            {{ trans('portfolio/lighttek.header_button') }}
                        </a>
                    </div>
                </div>
            </div>
            <div data-wow-delay="0s" data-wow-duration="2s" data-wow-iteration="1" data-wow-offset="0"
                class="fadeInRight header__phone-laptop">
                <img class="header__img-phone" src="/img/portfolio/lighttek/mobile-home.png" alt="png">
                <img class="header__img-laptop" src="/img/portfolio/lighttek/laptop.png" alt="png">
            </div>
        </header>
        <section class="guidelines">
            <div class="container">
                <div class="row">
                    <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                        class="bounceInLeft col-xs-12 col-sm-6 fontsBlock">
                        <p>Myriad pro</p>
                        <p>АБВГДЕЁЖЗИЙКЛМНО<br>абвгдеёжзийклмно<br>0123456789
                        </p>
                        <p>Bold</p>
                        <p>Regular</p>
                    </div>
                    <div class="col-xs-12 col-sm-6 colorsBlock">
                        <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="slideInUp col-xs-12 col-sm-2 col-sm-offset-1">
                            <div class="colorWrap">
                                <div class="color1"></div>
                                <div class="colorMini1"></div>
                            </div>
                            <p>#000000</p>
                        </div>
                        <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="slideInDown col-xs-12 col-sm-2 bottom">
                            <div class="colorWrap">
                                <div class="color2"></div>
                                <div class="colorMini2"></div>
                            </div>
                            <p>#efefef</p>
                        </div>
                        <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="slideInUp col-xs-12 col-sm-2">
                            <div class="colorWrap">
                                <div class="color3"></div>
                                <div class="colorMini3"></div>
                            </div>
                            <p>#ffeb01</p>
                        </div>
                        <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="slideInDown col-xs-12 col-sm-2 bottom">
                            <div class="colorWrap">
                                <div class="color4"></div>
                                <div class="colorMini4"></div>
                            </div>
                            <p>#ffffff</p>
                        </div>
                        <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="slideInUp col-xs-12 col-sm-2">
                            <div class="colorWrap">
                                <div class="color5"></div>
                                <div class="colorMini5"></div>
                            </div>
                            <p>#e4e4e4</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="about center">
            <div class="container">
                <div class="row">
                    <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                        class="fadeInUp col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                        <p class="title">{{ trans('portfolio/lighttek.about') }}</p>
                        {!! trans('portfolio/lighttek.about_text') !!}
                    </div>
                </div>
            </div>
        </section>
        <section class="prototype center">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <p data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="slideInLeft title">
                            {!! trans('portfolio/lighttek.prototype') !!}
                        </p>
                        <p data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="slideInRight">
                            {!! trans('portfolio/lighttek.prototype_text') !!}
                        </p>
                        <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="jello">
                            <img class="img-responsive" src="/img/portfolio/lighttek/imgPrototype.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="design center">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <p data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="bounceInRight title">
                            {!! trans('portfolio/lighttek.design') !!}
                        </p>
                        <p data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="bounceInLeft">
                            {!! trans('portfolio/lighttek.design_text') !!}
                        </p>
                        <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="zoomIn">
                            <img class="img-responsive" src="/img/portfolio/lighttek/imgDesign.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="finals center">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <p data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="bounceInLeft title">
                            {!! trans('portfolio/lighttek.final_vers') !!}
                        </p>
                        <p data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="bounceInRight">
                            {!! trans('portfolio/lighttek.final_text') !!}
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                    class="bounceInUp">
                    <img class="img-responsive" src="/img/portfolio/lighttek/imgFinals.png" alt="">
                </div>
            </div>
        </section>
        <section class="adaptive">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 leftBlock">
                        <p data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="bounceInDown title">
                            {!! trans('portfolio/lighttek.development') !!}
                        </p>
                        <p data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="bounceInRight">
                            {!! trans('portfolio/lighttek.development_text') !!}
                        </p>
                    </div>
                    <div class="col-xs-12 col-sm-6 rightBlock">
                        <p data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="bounceInUp title">
                            {!! trans('portfolio/lighttek.responsive') !!}
                        </p>
                        <p data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="bounceInLeft">
                            {!! trans('portfolio/lighttek.responsive_text') !!}
                        </p>
                    </div>
                    <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                        class="tada col-xs-12">
                        <img class="img-responsive" src="/img/portfolio/lighttek/imgAdaptive.png" alt="">
                    </div>
                    <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                        class="slideInUp col-xs-12 center">
                        <a href="https://lightek.net.ua" rel="nofollow" target="blank" class="btn read-more"
                            tabindex="-1"> {!! trans('portfolio/lighttek.footer') !!}</a>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@section('bottom-scripts')
    <script src="{{ asset('js/libs.js') }}"></script>
@endsection
