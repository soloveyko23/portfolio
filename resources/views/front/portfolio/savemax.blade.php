@extends('layouts.portfolio-item')

@section('seo')
    <link rel="canonical" href="{{ Request::url() }}">
    <title>{{ trans('portfolio/savemax.seo_title') }}</title>
    <meta name="description" content="{{ trans('portfolio/savemax.seo_descr') }}">
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/redesign.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/portfolio/savemax.css') }}">
@endsection

@section('content')
    <main class='savemax'>
        <section class="header">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 center">
                        <h1 class="main_page_title">{{ trans('portfolio/savemax.header_title') }}</h1>
                        <h2>{!! trans('portfolio/savemax.header_subtitle') !!}</h2>
                        <a class="btn read-more" tabindex="-1" href="http:/savemax.com.ua" rel="nofollow"
                            target="blank">Перейти на сайт</a>
                    </div>
                </div>
            </div>
            </div>
        </section>

        <section class="about">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h3 class="linesLeft">{{ trans('portfolio/savemax.about') }}</h3>
                        <p>{{ trans('portfolio/savemax.about_text') }}</p>
                    </div>
                    <div class="col-xs-12">
                        <h3>{{ trans('portfolio/savemax.tools') }}</h3>
                        <ul>
                            <li>Concept design</li>
                            <li>Web UI/UX Design</li>
                            <li>Web Development</li>
                            <li>WordPress</li>
                        </ul>
                    </div>
                    <div class="pt-20 col-xs-12 col-lg-8 col-lg-offset-2 center">
                        <h3 class="whiteText">{{ trans('portfolio/savemax.design') }}</h3>
                        <p class="whiteText center">{{ trans('portfolio/savemax.design_text') }}</p>
                    </div>
                    <div class="col-xs-12 center artwork">
                        <div data-wow-duration="1s" class="col-xs-6 wow bounceInLeft">
                            <img src="/img/portfolio/savemax/left-artwork.png" alt="">
                        </div>
                        <div data-wow-duration="1s" class="col-xs-6 wow bounceInRight">
                            <img src="/img/portfolio/savemax/right-artwork.png" alt="">
                        </div>
                        <div data-wow-duration="1s" class="col-xs-12 top-artwork wow bounceInUp">
                            <img src="/img/portfolio/savemax/top-artwork.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="developer">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h3 class="linesRight">{{ trans('portfolio/savemax.development') }}</h3>
                        <p>{!! trans('portfolio/savemax.development') !!}</p>
                    </div>
                    <div class="col-xs-12 center">
                        <img src="/img/portfolio/savemax/logoWP-JS.png" alt="">
                    </div>
                </div>
            </div>
        </section>

        <section class="icons">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h3 class="linesLeft">{{ trans('portfolio/savemax.icons') }}</h3>
                        <p>{{ trans('portfolio/savemax.icon_text') }}
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="tablet center">
            <div class="row">
                <div class="col-xs-12">
                    <div data-wow-duration="1s" class="col-xs-12 col-md-6 wow bounceInLeft">
                        <img src="/img/portfolio/savemax/tablet.png" alt="">
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <ul>
                            <li data-wow-duration="1s" class="col-xs-12 col-md-6 wow bounceInRight">
                                {{ trans('portfolio/savemax.multilang') }}
                                <p> {{ trans('portfolio/savemax.multilang_text') }}</p>
                            </li>
                            <li data-wow-delay="0.2s" data-wow-duration="1s" class="col-xs-12 col-md-6 wow bounceInRight">
                                {{ trans('portfolio/savemax.dynamic') }}
                                <p>{{ trans('portfolio/savemax.dynamioc_text') }}</p>
                            </li>
                            <li data-wow-delay="0.4s" data-wow-duration="1s" class="col-xs-12 col-md-6 wow bounceInRight">
                                {{ trans('portfolio/savemax.interactivity') }}
                                <p> {{ trans('portfolio/savemax.interactivity_text') }}</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="adaptive">
            <div class="row">
                <div class="col-xs-7 leftBlock">
                    <h3 class="linesLeft">{{ trans('portfolio/savemax.adaptability') }}</h3>
                    <p>{{ trans('portfolio/savemax.adaptability_text') }}</p>
                </div>
                <div class="col-xs-5 rightBlock"></div>
                <div data-wow-delay="1s" data-wow-duration="1s" class="wow tada">
                    <img src="/img/portfolio/savemax/phone.png" alt="">
                </div>
            </div>
        </section>

        <section class="specials">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 center">
                        <h3>{{ trans('portfolio/savemax.guideline') }}</h3>
                    </div>
                    <div class="col-xs-12 blocks">
                        <div class="col-xs-12 col-md-4 block1">
                            <p>a_AvanteTitler Bold</p>
                            <p>АБВГДЕЁЖЗИЙКЛМНО</p>
                            <p>абвгдеёжзийклмно</p>
                            <p>0123456789</p>
                        </div>
                        <div class="col-xs-12 col-md-4 block2">
                            <p>Clear Sans Bold</p>
                            <p>АБВГДЕЁЖЗИЙКЛМНО</p>
                            <p>абвгдеёжзийклмно</p>
                            <p>0123456789</p>
                        </div>
                        <div class="col-xs-12 col-md-4 block3">
                            <p>Clear Sans Regular</p>
                            <p>АБВГДЕЁЖЗИЙКЛМНО</p>
                            <p>абвгдеёжзийклмно</p>
                            <p>0123456789</p>
                        </div>
                    </div>
                    <div class="col-xs-12 circles center">
                        <div data-wow-delay="0.5s" data-wow-duration="1s" class="circle1 wow bounceInLeft">
                            <p>{{ trans('portfolio/savemax.color1') }} #000000</p>
                        </div>
                        <div data-wow-duration="1s" class="circle2 wow bounceInLeft">
                            <p>{{ trans('portfolio/savemax.color2') }} #cb0000</p>
                        </div>
                        <div data-wow-duration="1s" class="circle3 wow bounceInRight">
                            <p>{{ trans('portfolio/savemax.color3') }} #febb00</p>
                        </div>
                        <div data-wow-delay="0.5s" data-wow-duration="1s" class="circle4 wow bounceInRight">
                            <p>{{ trans('portfolio/savemax.color4') }} #ffffff</p>
                        </div>
                    </div>
                    <div class="col-xs-12 center">
                        <div data-wow-duration="1s" class="col-xs-12 wow fadeInUp">
                            <a class="btn read-more" tabindex="-1" href="http:/savemax.com.ua" rel="nofollow"
                                target="blank">{{ trans('portfolio/savemax.footer') }}</a>
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
