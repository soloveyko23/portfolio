@extends('layouts.portfolio-item')

@section('seo')
    <link rel="canonical" href="{{ Request::url() }}">
    <title>{{ trans('portfolio/housemix.seo_title') }}</title>
    <meta name="description" content="{{ trans('portfolio/housemix.seo_descr') }}">
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/redesign.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/portfolio/housemix.css') }}">
@endsection

@section('content')
    <main class='housemix'>
        <section class="header">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 center">
                        <h1 data-wow-delay="0.8s" data-wow-duration="1s" class="center wow bounceInDown">
                            {{ trans('portfolio/housemix.header_title') }}
                        </h1>
                        <div data-wow-delay="0s" data-wow-duration="1s" class="col-xs-12 wow fadeInUp">
                            <a class="btn read-more" tabindex="-1" rel="nofollow" href="https://house-mix.com.ua"
                                target="blank">{{ trans('portfolio/housemix.header_button') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="housemixSeparator">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 center">
                        <h2>{!! trans('portfolio/housemix.header_subtitle') !!}</h2>
                        <h3>{{ trans('portfolio/housemix.header_descr') }}</h3>
                    </div>
                </div>
            </div>
        </section>

        <section class="about">
            <div class="container">
                <div class="row">
                    <div data-wow-delay="0.5s" data-wow-duration="1s"
                        class="col-xs-12 col-lg-8 col-lg-offset-1 block1 wow bounceInLeft">
                        <h3>{{ trans('portfolio/housemix.about') }}</h3>
                        <p>{{ trans('portfolio/housemix.about_text') }}</p>
                    </div>
                    <div data-wow-delay="0.5s" data-wow-duration="1s"
                        class="col-xs-12 col-lg-8 col-lg-offset-3 align-right block2 wow bounceInRight">
                        <h3>{{ trans('portfolio/housemix.tools') }}</h3>
                        <p class="align-right">Concept design, Web UI/UX Design, Web Development, Joomla</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="concept">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-12 col-lg-6 col-lg-offset-3 center">
                        <h3>{{ trans('portfolio/housemix.design') }}</h3>
                        <p>{{ trans('portfolio/housemix.design_text') }}</p>
                    </div>
                    <div class="col-xs-12 center artwork">
                        <div data-wow-delay="0s" data-wow-duration="1s" class="col-xs-6 wow bounceInLeft">
                            <img src="/img/portfolio/housemix/left-artwork.png" alt="left-artwork">
                        </div>
                        <div data-wow-delay="0s" data-wow-duration="1s" class="col-xs-6 wow bounceInRight">
                            <img src="/img/portfolio/housemix/right-artwork.png" alt="right-artwork">
                        </div>
                        <div data-wow-delay="0s" data-wow-duration="1s" class="col-xs-12 top-artwork wow bounceInUp">
                            <img src="/img/portfolio/housemix/top-artwork.png" alt="top-artwork">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="design hide-on-small-only">
            <div class="row">
                <div class="col-xs-12">
                    <img class="leftImg" src="/img/portfolio/housemix/leftImg.png" alt="leftImg">
                    <img class="rightImg" src="/img/portfolio/housemix/rightImg.png" alt="rightImg">
                </div>
                <div class="col-xs-12">
                    <p class="first align-right">{{ trans('portfolio/housemix.catalog') }}</p>
                    <p class="second">{{ trans('portfolio/housemix.product_card') }}</p>
                </div>
            </div>
        </section>

        <section class="development">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 center">
                        <h3>{{ trans('portfolio/housemix.development') }}</h3>
                        <p>{!! trans('portfolio/housemix.development_text') !!}</p>
                    </div>
                    <div data-wow-delay="0s" data-wow-duration="1s" class="col-xs-12 wow fadeInUp">
                        <img src="/img/portfolio/housemix/macbook.png" alt="macbook">
                    </div>
                </div>
            </div>
        </section>

        <section class="features">
            <div class="container">
                <div class="row">
                    <div data-wow-delay="1s" data-wow-duration="1s" class="col-xs-12 col-md-4 wow fadeInUpBigcenter">
                        <img src="/img/portfolio/housemix/iconFeatures1.png" alt="iconFeatures1">
                        <p> {{ trans('portfolio/housemix.features1') }}</p>
                    </div>
                    <div data-wow-delay="0.5s" data-wow-duration="1s" class="col-xs-12 col-md-4 center wow fadeInUpBig">
                        <img src="/img/portfolio/housemix/iconFeatures2.png" alt="iconFeatures2">
                        <p> {{ trans('portfolio/housemix.features2') }}</p>
                    </div>
                    <div data-wow-delay="0s" data-wow-duration="1s" class="col-xs-12 col-md-4 center wow fadeInUpBig">
                        <img src="/img/portfolio/housemix/iconFeatures3.png" alt="iconFeatures3">
                        <p> {{ trans('portfolio/housemix.features3') }}</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="adaptive">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 center">
                        <h3>{{ trans('portfolio/housemix.adaptive') }}</h3>
                        <p>{{ trans('portfolio/housemix.adaptive_text') }}</p>
                    </div>
                    <div class="col-xs-12 iphones center">
                        <img class="iphoneLeft col-xs-4" src="/img/portfolio/housemix/iphoneLeft.png" alt="iphoneLeft">
                        <img class="iphoneCenter col-xs-4" src="/img/portfolio/housemix/iphoneCenter.png"
                            alt="iphoneCenter">
                        <img class="iphoneRight col-xs-4" src="/img/portfolio/housemix/iphoneRight.png"
                            alt="iphoneRight">
                    </div>
                </div>
            </div>
        </section>

        <section class="specials">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 center">
                        <h3>{{ trans('portfolio/housemix.guideline') }}</h3>
                    </div>
                    <div class="col-xs-12 blocks">
                        <div data-wow-delay="0s" data-wow-duration="1s" class="col-xs-12 col-md-4 block1 wow flipInX">
                            <p>Blogger Sans Medium</p>
                            <p>АБВГДЕЁЖЗИЙКЛМНО</p>
                            <p>абвгдеёжзийклмно</p>
                            <p>0123456789</p>
                        </div>
                        <div data-wow-delay="0.5s" data-wow-duration="1s" class="col-xs-12 col-md-4 block2 wow flipInX">
                            <p>Corbel Regular</p>
                            <p>АБВГДЕЁЖЗИЙКЛМНО</p>
                            <p>абвгдеёжзийклмно</p>
                            <p>0123456789</p>
                        </div>
                        <div data-wow-delay="1s" data-wow-duration="1s" class="col-xs-12 col-md-4 block3 wow flipInX">
                            <p>Proxima Nova Regular</p>
                            <p>АБВГДЕЁЖЗИЙКЛМНО</p>
                            <p>абвгдеёжзийклмно</p>
                            <p>0123456789</p>
                        </div>
                    </div>
                    <div class="col-xs-12 circles center">
                        <div class="circle1">
                            <p>{{ trans('portfolio/housemix.color1') }} #bfad9f</p>
                        </div>
                        <div class="circle2">
                            <p>{{ trans('portfolio/housemix.color2') }} #dcdad9</p>
                        </div>
                        <div class="circle3">
                            <p>{{ trans('portfolio/housemix.color3') }} #ffffff</p>
                        </div>
                    </div>
                    <div class="col-xs-12 center bottom">
                        <div data-wow-delay="0s" data-wow-duration="1s" class="col-xs-12 wow fadeInUp">
                            <a class="btn read-more" tabindex="-1" href="https://house-mix.com.ua" rel="nofollow"
                                target="blank">{{ trans('portfolio/housemix.footer') }}</a>
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
