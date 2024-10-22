@extends('layouts.portfolio-item')

@section('seo')
    <link rel="canonical" href="{{ Request::url() }}">
    <title>{{ trans('portfolio/yugozapad.seo_title') }}</title>
    <meta name="description" content="{{ trans('portfolio/yugozapad.seo_descr') }}">
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/redesign.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/portfolio/yugozapad.css') }}">
@endsection

@section('content')
    <main class="yugo-zapad">
        <header class="header">
            <div class="header__container">
                <div class="header__inner">
                    <div class="header__description">
                        <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="fadeInDown header__logo">
                            <img src="/img/portfolio/yugozapad/logo.jpg" alt="логотип.png">
                        </div>
                        <h1 data-wow-delay="0.5s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="fadeInUp header__txt">
                            {{ trans('portfolio/yugozapad.header_title') }}
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
                            class="fadeInUp header__button" href="https://ugo-zapad.ua/" rel="nofollow">
                            {{ trans('portfolio/yugozapad.header_button') }}
                        </a>
                    </div>
                </div>
            </div>
            <div data-wow-delay="0s" data-wow-duration="2s" data-wow-iteration="1" data-wow-offset="0"
                class="fadeInRight header__phone-laptop">
                <img class="header__img-phone" src="/img/portfolio/yugozapad/mobile-home.png" alt="png">
                <img class="header__img-laptop" src="/img/portfolio/yugozapad/laptop.png" alt="png">
            </div>
        </header>
        <section class="about">
            <div class="container">
                <div class="row">
                    <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                        class="fadeInLeft col-xs-12 col-md-6 ">
                        <h3>{{ trans('portfolio/yugozapad.tools') }}</h3>
                        <div class="divider"></div>
                        <p>Concept design; Web UI/UX; Design Web Development; Front-End:
                            {{ trans('portfolio/yugozapad.framework') }} Materialize; Back-End:
                            {{ trans('portfolio/yugozapad.framework') }} Laravel 5;</p>
                    </div>
                    <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                        class="fadeInRight col-xs-12 col-md-6 ">
                        <h3> {{ trans('portfolio/yugozapad.design') }}</h3>
                        <div class="divider"></div>
                        <p>{{ trans('portfolio/yugozapad.concept') }}</p>
                    </div>
                    <div data-wow-delay="0.5s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                        class="fadeIn col-xs-12">
                        <img src="/img/portfolio/yugozapad/aboutImg.png" alt="aboutImg">
                    </div>
                </div>
            </div>
        </section>
        <section class="features">
            <div class="container">
                <div class="row">
                    <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                        class="fadeInUpBig col-xs-12 col-md-4 padding_p-tb-25 center">
                        <img src="/img/portfolio/yugozapad/iconTools.png" alt="iconTools">
                        <p>{!! trans('portfolio/yugozapad.feature1') !!}</p>
                    </div>
                    <div data-wow-delay="0.5s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                        class="fadeInUpBig col-xs-12 col-md-4 padding_p-tb-25 center">
                        <img src="/img/portfolio/yugozapad/iconSearch.png" alt="iconSearch">
                        <p>{!! trans('portfolio/yugozapad.feature2') !!}</p>
                    </div>
                    <div data-wow-delay="1s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                        class="fadeInUpBig col-xs-12 col-md-4 padding_p-tb-25 center">
                        <img src="/img/portfolio/yugozapad/iconTarget.png" alt="iconTarget" />
                        <p>{!! trans('portfolio/yugozapad.feature3') !!}</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="adaptive">
            <div class="container">
                <div class="row">
                    <div data-wow-delay="1s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                        class="rotateInDownLeft col-xs-12 col-md-6">
                        <h3>{{ trans('portfolio/yugozapad.menu') }}</h3>
                        <div class="divider"></div>
                        <p>{{ trans('portfolio/yugozapad.adaptive') }}</p>
                    </div>
                    <div data-wow-delay="1s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                        class="rotateInDownRight col-xs-12 col-md-6">
                        <img src="/img/portfolio/yugozapad/adaptiveImg.png" alt="adaptiveImg">
                    </div>
                </div>
            </div>
        </section>
        <section class="search">
            <div class="container">
                <div class="row">
                    <div class="col-xs-6 align-right">
                        <div class="textOnCloud">
                            <h3>{{ trans('portfolio/yugozapad.search') }}</h3>
                            <div class="divider"></div>
                            <p>{{ trans('portfolio/yugozapad.navigation') }}</p>
                        </div>
                        <img class="cloud" src="/img/portfolio/yugozapad/cloud.png" alt="cloud">
                    </div>
                    <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                        class="bounceInRight col-xs-6">
                        <img class="iphone" src="/img/portfolio/yugozapad/iphone.png" alt="iphone">
                        <img class="screenMenu hide-on-small-only" data-wow-delay="0.2s"
                            src="/img/portfolio/yugozapad/screenMenu.png" alt="screenMenu">
                    </div>
                </div>
            </div>
        </section>
        <section class="crm">
            <div class="container">
                <div class="row">
                    <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                        class="tada col-xs-12 col-md-6">
                        <img src="/img/portfolio/yugozapad/ipad.png" alt="ipad">
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <h3>{{ trans('portfolio/yugozapad.admin_panel') }}</h3>
                        <div class="divider"></div>
                        <p>{{ trans('portfolio/yugozapad.panel_text') }}</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="pages">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 center">
                        {!! trans('portfolio/yugozapad.panel_text') !!}
                        <div class="divider"></div>
                        <p class="center">{!! trans('portfolio/yugozapad.final_text') !!}</p>
                    </div>
                    <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                        class="zoomInRight col-xs-12 col-md-6">
                        <p>{!! trans('portfolio/yugozapad.main_page') !!}</p>
                        <img src="/img/portfolio/yugozapad/yugo-zapad-main.jpg" alt="yugo-zapad-main">
                    </div>
                    <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                        class="zoomInLeft col-xs-12 col-md-6">
                        <p>{!! trans('portfolio/yugozapad.catalog') !!}</p>
                        <img src="/img/portfolio/yugozapad/yugo-zapad-catalog.jpg" alt="yugo-zapad-catalog">
                    </div>
                </div>
                <div class="row">
                    <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                        class="zoomInRight col-xs-12 col-md-6">
                        <p>{!! trans('portfolio/yugozapad.product_page') !!}</p>
                        <img src="/img/portfolio/yugozapad/yugo-zapad-product.jpg" alt="yugo-zapad-product">
                    </div>
                    <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                        class="zoomInLeft col-xs-12 col-md-6">
                        <p>{!! trans('portfolio/yugozapad.design_ver2') !!}</p>
                        <img src="/img/portfolio/yugozapad/yugo-zapad-2.jpg" alt="yugo-zapad-2">
                    </div>
                </div>
            </div>
        </section>
        <section class="specials">
            <div class="container">
                <div class="row center">
                    <div class="col-xs-12">
                        <h3>{!! trans('portfolio/yugozapad.features') !!}</h3>
                        <div class="divider"></div>
                    </div>
                    <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                        class="pulse col-xs-12 blocks">
                        <div class="col-xs-12 col-md-4 block1">
                            <p>Russo One Regular</p>
                            <p>АБВГДЕЁЖЗИЙКЛМНО</p>
                            <p>абвгдеёжзийклмно</p>
                            <p>0123456789</p>
                        </div>
                        <div class="col-xs-12 col-md-4 block2" data-wow-delay="1s">
                            <p>Days Regular</p>
                            <p>АБВГДЕЁЖЗИЙКЛМНО</p>
                            <p>абвгдеёжзийклмно</p>
                            <p>0123456789</p>
                        </div>
                        <div class="col-xs-12 col-md-4 block3" data-wow-delay="0.5s">
                            <p>Myriad Pro Regular</p>
                            <p>АБВГДЕЁЖЗИЙКЛМНО</p>
                            <p>абвгдеёжзийклмно</p>
                            <p>0123456789</p>
                        </div>
                    </div>
                    <div class="col-xs-12 circles center">
                        <div class="circle1">
                            <p>{!! trans('portfolio/yugozapad.color1') !!} #212121</p>
                        </div>
                        <div class="circle2">
                            <p>{!! trans('portfolio/yugozapad.color2') !!} #e0e0e0</p>
                        </div>
                        <div class="circle3">
                            <p>{!! trans('portfolio/yugozapad.color3') !!} #bf360c</p>
                        </div>
                        <div class="circle4">
                            <p>{!! trans('portfolio/yugozapad.color4') !!} #df4c2e</p>
                        </div>
                    </div>
                    <div class="col-xs-12 button center">
                        <a href="https://realty-odessa.ua/" rel="nofollow" target="blank" class="btn read-more"
                            tabindex="0">{!! trans('portfolio/yugozapad.details') !!}</a>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
@section('bottom-scripts')
    <script src="{{ asset('js/libs.js') }}"></script>
@endsection
