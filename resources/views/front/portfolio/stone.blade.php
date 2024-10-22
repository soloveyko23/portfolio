@extends('layouts.portfolio-item')

@section('seo')
    <link rel="canonical" href="{{ Request::url() }}">
    <title>{{ trans('portfolio/stone.seo_title') }}</title>
    <meta name="description" content="{{ trans('portfolio/stone.seo_descr') }}">
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/redesign.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/portfolio/stone.css') }}">
@endsection
@section('content')
    <main class="stone-bridge">
        <div class="container-white">
            <div class="overflow-hidden">
                <header class="header">
                    <div class="header__container">
                        <div class="header__inner">
                            <div class="header__description">
                                <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                                    class="wow fadeInDown header__logo">
                                    <img src="/img/portfolio/stone/logo.png" alt="логотип.png">
                                </div>
                                <div data-wow-delay="0.5s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                                    class="wow fadeInUp header__txt" el="h1">
                                    {{ trans('portfolio/stone.header_title') }}
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
                                    class="wow fadeInUp header__button" href="https://www.stonebridgeestate.ru/"
                                    rel="nofollow">
                                    {{ trans('portfolio/stone.header_button') }}
                                </a>
                            </div>
                        </div>
                    </div>
                    <div data-wow-delay="0s" data-wow-duration="2s" data-wow-iteration="1" data-wow-offset="0"
                        class="wow fadeInRight header__phone-laptop">
                        <img class="header__img-phone" src="/img/portfolio/stone/mobile-home.png" alt="png">
                        <img class="header__img-laptop" src="/img/portfolio/stone/laptop.png" alt="png">
                    </div>
                </header>
                <div class="row">
                    <div class="container center margin_mt-50">
                        <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow fadeInLeft col-xs-12 col-md-6">
                            <h2>{{ trans('portfolio/stone.title') }}</h2>
                            <h3>LARAVEL и Material Design.</h3>
                        </div>
                        <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow fadeInRight col-xs-12 col-md-6">
                            <p> {{ trans('portfolio/stone.text') }}<br></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="container center">
                            <div class="row">
                                <div data-wow-delay="0.2s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                                    class="wow flipInX col-xs-12 col-md-4 gutter">
                                    <img class="responsive-img" src="/img/portfolio/stone/slide9-1.png"
                                        alt="разработка сайта wellness-zone">
                                    <p>{!! trans('portfolio/stone.benefits1') !!}</p>
                                </div>
                                <div data-wow-delay="0.6s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                                    class="wow flipInX col-xs-12 col-md-4 gutter">
                                    <img class="responsive-img" src="/img/portfolio/stone/slide9-2.png"
                                        alt="разработка сайта wellness-zone">
                                    <p>{!! trans('portfolio/stone.benefits2') !!}</p>
                                </div>
                                <div data-wow-delay="1s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                                    class="wow flipInX col-xs-12 col-md-4 gutter">
                                    <img class="responsive-img" src="/img/portfolio/stone/slide9-3.png"
                                        alt="разработка сайта wellness-zone">
                                    <p>{!! trans('portfolio/stone.benefits3') !!}</p>
                                </div>
                                <div class="col-xs-12">
                                    <h2 class="center">{!! trans('portfolio/stone.result') !!}</h2>
                                    <h3>{!! trans('portfolio/stone.result_title') !!}</h3>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                                class="wow fadeInUp container slide_4">
                                <div class="case-2 col-100 gutter">
                                    {!! trans('portfolio/stone.result_text') !!}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="container slide_8">
                                <div class="case-2 col-100">
                                    <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1"
                                        data-wow-offset="0"
                                        class="wow bounceInRight item03 case-1 col-85 aligncenter text-align-center">
                                        <div class="item-title">{{ trans('portfolio/stone.result_website') }}</div>
                                        <p><img class="responsive-img" src="/img/portfolio/stone/stone-1.jpg"
                                                alt="разработка сайта wellness-zone"><br></p>
                                        <p>{{ trans('portfolio/stone.page1') }}</p>
                                        <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1"
                                            data-wow-offset="0" class="wow bounceInLeft">
                                            <img class="responsive-img" src="/img/portfolio/stone/stone-2.jpg"
                                                alt="разработка сайта wellness-zone">
                                        </div>
                                        <p>{{ trans('portfolio/stone.page2') }}</p>
                                        <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1"
                                            data-wow-offset="0" class="wow bounceInLeft">
                                            <img class="responsive-img" src="/img/portfolio/stone/stone-4.jpg"
                                                alt="разработка сайта wellness-zone">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="container slide_8 center bottom">
                                <div class="aligncenter col-100 case-1 load">
                                    <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1"
                                        data-wow-offset="0" class="wow fadeInUp col-xs-12">
                                        <a class="btn read-more" tabindex="-1" href="http://stonebridgeestate.ru/"
                                            rel="nofollow" target="blank">{{ trans('portfolio/stone.footer') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
@section('bottom-scripts')
    <script src="{{ asset('js/libs.js') }}"></script>
@endsection
