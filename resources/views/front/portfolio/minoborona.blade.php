@extends('layouts.portfolio-item')

@section('seo')
    <link rel="canonical" href="{{ Request::url() }}">
    <title>{{ trans('portfolio/minoborona.seo_title') }}</title>
    <meta name="description" content="{{ trans('portfolio/minoborona.seo_descr') }}">
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/redesign.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/portfolio/minoborona.css') }}">
@endsection

@section('content')
    <main>
        <header class="header">
            <div class="header__container">
                <div class="header__inner">
                    <div class="header__description">
                        <div data-wow-duration="1s" class="header__logo wow fadeInDown">
                            <img src="/img/portfolio/minoborona/logo.png" alt="логотип.png">
                        </div>
                        <h1 data-wow-delay="0.5s" data-wow-duration="1s" class="header__txt wow fadeInUp">
                            {{ trans('portfolio/minoborona.header_title') }}
                        </h1>
                        <div name="fadeInDown" data-wow-delay="0.5s" data-wow-duration="1s" class="header__icons">
                            <div class="header__img-area">
                                <img class="header__icon-img" src="/img/portfolio/minoborona/icons/laptop.png"
                                    alt="png">
                            </div>
                            <div class="header__img-area">
                                <img class="header__icon-img" src="/img/portfolio/minoborona/icons/phone.png"
                                    alt="png">
                            </div>
                            <div class="header__img-area">
                                <img class="header__icon-img" src="/img/portfolio/minoborona/icons/tablet.png"
                                    alt="png">
                            </div>
                        </div>
                        <a data-wow-duration="2s" class="header__button wow fadeInUp" href="https://vts.org.ua/"
                            rel="nofollow">
                            {{ trans('portfolio/minoborona.header_button') }}
                        </a>
                    </div>
                </div>
            </div>
            <div data-wow-duration="2s" class="header__phone-laptop wow fadeInRight">
                <img class="header__img-phone" src="/img/portfolio/minoborona/mobile-home.png" alt="png">
                <img class="header__img-laptop" src="/img/portfolio/minoborona/laptop.png" alt="png">
            </div>
        </header>
        <section class="main-page">
            <div class="container">
                <div data-wow-duration="1s" class="main-page__title wow slideInRight">
                    {!! trans('portfolio/minoborona.main_page') !!}
                </div>
                <div data-wow-duration="1s" class="main-page-content wow zoomInRight">
                </div>
            </div>
        </section>
        <section class="color">
            <div class="container">
                <div class="top">
                    <div data-wow-duration="1s" class="slideInLeft">
                        <img class="color-title" src="/img/portfolio/minoborona/color-title.png" alt="">
                    </div>
                    <div data-wow-duration="1s" class="wow slideInRight">
                        <img class="color1" src="/img/portfolio/minoborona/color1.png" alt="">
                    </div>
                </div>
                <div class="flexbox">
                    <div class="center clearfix">
                        <div data-wow-delay="0.5s" data-wow-duration="1s" class="wow zoomIn">
                            <img src="/img/portfolio/minoborona/fontcolor.png" alt="" class="colors clearfix">
                        </div>
                    </div>
                    <div class="font">
                        <div data-wow-delay="0.6s" data-wow-duration="1s" class="wow slideInRight">
                            <img src="/img/portfolio/minoborona/font-title.png" alt="" class="font-title">
                        </div>
                        <p class="font-name">Geometria</p>
                        <div class="img-block clearfix">
                            <div data-wow-delay="0.7s" data-wow-duration="1s" class="wow pulse">
                                <img class="alphabet-img-uppercase" src="/img/portfolio/minoborona/alphabet-uppercase.png"
                                    alt="">
                            </div>
                            <div data-wow-delay="0.8s" data-wow-duration="1s" class="wow pulse">
                                <img class="alphabet-img" src="/img/portfolio/minoborona/alphabet-low.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bottom">
                    <img class="typography" src="/img/portfolio/minoborona/typography.png" alt="">
                </div>
            </div>
        </section>
        <section class="other-pages">
            <div class="container">
                <div class="other-pages-title">
                    <img src="/img/portfolio/minoborona/other-pages-title.png" alt=""
                        class="other-pages-title-img">
                </div>
                <div class="other-pages-content mobile_none">
                    <div data-wow-duration="1s" class="wow zoomInRight">
                        <img src="/img/portfolio/minoborona/otherpage.png" alt="">
                    </div>
                </div>
                <div class="other-pages-content mobile_block">
                    <div data-wow-duration="1s" class="wow zoomInRight">
                        <img src="/img/portfolio/minoborona/other1.png" alt="">
                    </div>
                    <div data-wow-duration="1s" class="wow zoomInRight">
                        <img src="/img/portfolio/minoborona/other2.png" alt="">
                    </div>
                    <div data-wow-duration="1s" class="wow zoomInRight">
                        <img src="/img/portfolio/minoborona/other3.png" alt="">
                    </div>
                    <div data-wow-duration="1s" class="wow zoomInRight">
                        <img src="/img/portfolio/minoborona/other4.png" alt="">
                    </div>
                    <div data-wow-duration="1s" class="wow zoomInRight">
                        <img src="/img/portfolio/minoborona/other5.png">
                    </div>
                    <div data-wow-duration="1s" class="wow zoomInRight">
                        <img src="/img/portfolio/minoborona/other6.png" alt="">
                    </div>
                    <div data-wow-duration="1s" class="wow zoomInRight">
                        <img src="/img/portfolio/minoborona/other7.png" alt="">
                    </div>
                    <div data-wow-duration="1s" class="wow zoomInRight">
                        <img src="/img/portfolio/minoborona/other8.png" alt="">
                    </div>
                    <div data-wow-duration="1s" class="wow zoomInRight">
                        <img src="/img/portfolio/minoborona/other9.png" alt="">
                    </div>
                    <div data-wow-duration="1s" class="wow zoomInRight">
                        <img src="/img/portfolio/minoborona/other10.png" alt="">
                    </div>
                    <div data-wow-duration="1s" class="wow zoomInRight">
                        <img src="/img/portfolio/minoborona/other11.png" alt="">
                    </div>
                    <div data-wow-duration="1s" class="wow zoomInRight">
                        <img src="/img/portfolio/minoborona/other12.png" alt="">
                    </div>
                </div>
                <div class="thanks">
                    <img src="/img/portfolio/minoborona/thanks.png" alt="">
                </div>
            </div>
        </section>
    </main>
@endsection

@section('bottom-scripts')
    <script src="{{ asset('js/libs.js') }}"></script>
@endsection
