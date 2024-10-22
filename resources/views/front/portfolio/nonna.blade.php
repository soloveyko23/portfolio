@extends('layouts.portfolio-item')

@section('seo')
    <link rel="canonical" href="{{ Request::url() }}">
    <title>{{ trans('portfolio/nonna.seo_title') }}</title>
    <meta name="description" content="{{ trans('portfolio/nonna.seo_descr') }}">
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/redesign.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/portfolio/nonna.css') }}">
@endsection

@section('content')
    <main class="nonna">
        <header class="header">
            <div class="header__container">
                <div class="header__inner">
                    <div class="header__description">
                        <div duration="1s" class="header__logo wow fadeInDown">
                            <img src="/img/portfolio/nonna/logo.png" alt="логотип.png">
                        </div>
                        <h1 delay="0.5s" duration="1s" class="header__txt wow fadeInUp">
                            {{ trans('portfolio/nonna.header_title') }}
                        </h1>
                        <div delay="0.5s" duration="1s" class="header__icons wow fadeInDown">
                            <div class="header__img-area">
                                <img class="header__icon-img" src="/img/portfolio/nonna/icons/laptop.png" alt="png">
                            </div>
                            <div class="header__img-area">
                                <img class="header__icon-img" src="/img/portfolio/nonna/icons/phone.png" alt="png">
                            </div>
                            <div class="header__img-area">
                                <img class="header__icon-img" src="/img/portfolio/nonna/icons/tablet.png" alt="png">
                            </div>
                        </div>
                        <a duration="2s" class="header__button wow fadeInUp" href="https://nonna.com.ua/" rel="nofollow">
                            {{ trans('portfolio/nonna.header_button') }}
                        </a>
                    </div>
                </div>
            </div>
            <div duration="2s" class="header__phone-laptop wow fadeInRight">
                <img class="header__img-phone" src="/img/portfolio/nonna/mobile-home.png" alt="png">
                <img class="header__img-laptop" src="/img/portfolio/nonna/laptop.png" alt="png">
            </div>
        </header>
        <section class="develop rel">
            <div class="container">
                <div class="row">
                    <div duration="1s" class="col-xs-12 col-md-6 rel opencart wow fadeInUp">
                        <p class="rel title-develop"> {{ trans('portfolio/nonna.development') }}</p>
                        <ul>
                            <li>Concept design</li>
                            <li>Web UI/UX Design</li>
                            <li>Web Development</li>
                            <li>Framework: Bootstrap</li>
                            <li>CMS Opencart</li>
                        </ul>
                    </div>
                    <div duration="1s" class="col-xs-12 col-md-6 wow fadeInUp">
                        <div class="white-block">
                            <p class="text-block">{!! trans('portfolio/nonna.opencart') !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="design rel">
            <div class="container">
                <div class="row">
                    <div duration="1s" class="col-xs-12 col-md-3 col-lg-2 wow fadeInUp">
                        <p class="title-design rel"> {{ trans('portfolio/nonna.design') }}</p>
                        <p class="text-design"> {{ trans('portfolio/nonna.design_text') }}</p>
                    </div>
                    <div duration="1s" class="col-xs-12 col-md-9 col-lg-10 wow fadeInUp">
                        <img src="/img/portfolio/nonna/page-1.png" alt="screen">
                    </div>
                </div>
            </div>
        </section>
        <section class="final rel">
            <div class="container">
                <div class="row">
                    <p class="title-final rel">{{ trans('portfolio/nonna.design') }}</p>
                    <div class="col-xs-12 col-md-6">
                        <div duration="1s" class="col-xs-12 no-pad wow fadeInLeft">
                            <p class="name-page">{{ trans('portfolio/nonna.main_page') }}</p>
                            <img src="/img/portfolio/nonna/page_1.png" alt="page">
                        </div>
                        <div duration="1s" class="col-xs-12 no-pad rel tomatos wow fadeInLeft">
                            <p class="name-page">{{ trans('portfolio/nonna.news') }}</p>
                            <img src="/img/portfolio/nonna/page_4.png" alt="page">
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <div duration="1s" class="col-xs-12 no-pad rel olive wow fadeInRight">
                            <p class="name-page">{{ trans('portfolio/nonna.categories') }}</p>
                            <img src="/img/portfolio/nonna/page_2.png" alt="page">
                        </div>
                        <div duration="1s" class="col-xs-12 no-pad wow fadeInRight">
                            <p class="name-page">{{ trans('portfolio/nonna.product_page') }}</p>
                            <img src="/img/portfolio/nonna/page_3.png" alt="page">
                        </div>
                        <div duration="1s" class="col-xs-12 no-pad wow fadeInRight">
                            <p class="name-page">{{ trans('portfolio/nonna.contacts') }}</p>
                            <img src="/img/portfolio/nonna/page_5.png" alt="page">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="guideline">
            <div class="container">
                <div class="row">
                    <p class="title-guide rel">{{ trans('portfolio/nonna.guidline') }}</p>
                    <div duration="1s" class="col-xs-12 col-md-6 wow fadeInUp">
                        <div class="box">
                            <p class="title-font">Magnolia Script</p>
                            <p class="MS">{{ trans('portfolio/nonna.font') }}</p>
                        </div>
                    </div>
                    <div duration="1s" class="col-xs-12 col-md-6 wow fadeInUp">
                        <div class="box">
                            <p class="title-font">Lato</p>
                            <p class="lato">{{ trans('portfolio/nonna.font_text') }}</p>
                        </div>
                    </div>
                    <div duration="1s" class="col-xs-12 wow fadeInUp">
                        <div class="box center">
                            <p class="title-icons center">{{ trans('portfolio/nonna.icons') }}</p>
                            <div class="icons-nonna">
                                <img src="/img/portfolio/nonna/icons-1.png" alt="icons">
                            </div>
                            <div class="icons-nonna">
                                <img src="/img/portfolio/nonna/icons-2.png" alt="icons">
                            </div>
                            <div class="icons-nonna">
                                <img src="/img/portfolio/nonna/icons-3.png" alt="icons">
                            </div>
                            <div class="icons-nonna">
                                <img src="/img/portfolio/nonna/icons-4.png" alt="icons">
                            </div>
                            <div class="icons-nonna">
                                <img src="/img/portfolio/nonna/icons-5.png" alt="icons">
                            </div>
                        </div>
                    </div>
                    <div duration="1s" class="col-xs-12 wow fadeInUp">
                        <div class="colors">
                            <p>#EBD460</p>
                            <p>#d3a976</p>
                            <p>#f4b350</p>
                            <p>#f6f5f1</p>
                            <p>#95c11f</p>
                            <p>#f04502</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="adaptive">
            <div class="container">
                <div class="row">
                    <div duration="1s" class="col-xs-12 col-md-4 col-lg-3 adaptive-block wow fadeInLeft">
                        <p class="title-adaptive rel">{{ trans('portfolio/nonna.adaptive') }}</p>
                        <p class="text-adaptive">{{ trans('portfolio/nonna.adaptive_text') }}</p>
                        <a rel="nofollow" href="http://nonna.msstudio.com.ua/" target="blank"
                            class="btn-nonna">{{ trans('portfolio/nonna.footer') }}</a>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@section('bottom-scripts')
    <script src="{{ asset('js/libs.js') }}"></script>
@endsection
