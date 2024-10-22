@extends('layouts.portfolio-item')

@section('seo')
    <link rel="canonical" href="{{ Request::url() }}">
    <title>{{ trans('portfolio/belity.seo_title') }}</title>
    <meta name="description" content="{{ trans('portfolio/belity.seo_descr') }}">
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/redesign.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/portfolio/belity.css') }}">
@endsection
@section('content')
    <main class="belity">
        <section class="top">
            <div class="container">
                <div class="row">
                    <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                        class="col-xs-12 col-sm-6 macbook wow slideInRight">
                        <img src="/img/portfolio/belity/macbook.png" alt="">
                    </div>
                    <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                        class="col-xs-12 col-sm-6 wow slideInLeft">
                        <h1 class="main_page_title">{{ trans('portfolio/belity.header_title') }}</h1>
                        <p class="name">
                            Belity
                            <span>{{ trans('portfolio/belity.header_subtitle') }}</span>
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="guidelines">
            <div class="container">
                <div class="row">
                    <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                        class="col-xs-12 wow slideInUp">
                        <p class="title">{!! trans('portfolio/belity.guidelines_title') !!}</p>
                    </div>
                    <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                        class="col-xs-12 col-sm-4 center wow slideInLeft">
                        <div class="block1">
                            <p>Fira Sans SemiBold</p>
                            <p>АБВГДЕЁЖЗИЙКЛМНО<br> абвгдеёжзийклмно<br> 0123456789</p>
                        </div>
                    </div>
                    <div data-wow-delay="0.3s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                        class="col-xs-12 col-sm-4 center wow slideInLeft">
                        <div class="block2">
                            <p>Fira Sans Regular</p>
                            <p>АБВГДЕЁЖЗИЙКЛМНО<br> абвгдеёжзийклмно<br> 0123456789</p>
                        </div>
                    </div>
                    <div data-wow-delay="0.6s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                        class="col-xs-12 col-sm-4 center wow slideInLeft">
                        <div class="block3">
                            <p>Fira Sans Light</p>
                            <p>АБВГДЕЁЖЗИЙКЛМНО<br> абвгдеёжзийклмно<br> 0123456789</p>
                        </div>
                    </div>
                </div>
                <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                    class="row colors wow zoomIn">
                    <div class="col-xs-12 col-sm-3 col-lg-1 col-lg-offset-4">
                        <div class="color1 center-block">
                            <span>#000000</span>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-3 col-lg-1">
                        <div class="color2 center-block">
                            <span>#ffa800</span>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-3 col-lg-1">
                        <div class="color3 center-block">
                            <span>#f5f5f5</span>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-3 col-lg-1">
                        <div class="color4 center-block">
                            <span>#ffffff</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="design">
            <div class="container">
                <div class="row">
                    <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                        class="col-xs-12 wow zoomInUp">
                        <p class="title">{!! trans('portfolio/belity.design_title') !!}</p>
                        <img class="img-responsive" src="/img/portfolio/belity/imgDevelopers.png" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section class="pages">
            <div class="container">
                <div class="row">
                    <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                        class="col-xs-12 wow zoomInRight">
                        <p class="title">{!! trans('portfolio/belity.design_text') !!}</p>
                    </div>
                </div>
            </div>
            <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                class="row wow zoomInLeft">
                <img class="img-responsive" src="/img/portfolio/belity/imgPages.png" alt="">
            </div>
        </section>
        <section class="developers">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <p class="title">{!! trans('portfolio/belity.developers_title') !!}</p>
                    </div>
                    <div class="col-xs-12 col-sm-5">
                        <ul>
                            <li>Concept design</li>
                            <li>Web UI/UX Design</li>
                            <li>Web Development</li>
                            <li>CMS Opencart</li>
                        </ul>
                    </div>
                    <div class="col-xs-12 col-sm-7">
                        <img class="img-responsive" src="/img/portfolio/belity/logoOpencart.png" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section class="adaptive">
            <div class="container">
                <div class="row">
                    <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                        class="col-xs-12 wow zoomIn">
                        <p class="title">{!! trans('portfolio/belity.adaptive') !!}</p>
                        <img class="img-responsive" src="/img/portfolio/belity/imgAdaptive.png" alt="">
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@section('bottom-scripts')
    <script src="{{ asset('js/libs.js') }}"></script>
@endsection
