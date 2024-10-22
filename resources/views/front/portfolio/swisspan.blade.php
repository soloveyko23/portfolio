@extends('layouts.portfolio-item')

@section('seo')
    <link rel="canonical" href="{{ Request::url() }}">
    <title>{{ trans('portfolio/swisspan.seo_title') }}</title>
    <meta name="description" content="{{ trans('portfolio/swisspan.seo_descr') }}">
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/redesign.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/portfolio/swisspan.css') }}">
@endsection

@section('content')
    <main class="swisspan">
        <header class="header">
            <div class="header__container">
                <div class="header__inner">
                    <div class="header__description">
                        <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow fadeInDown header__logo">
                            <img src="/img/portfolio/swisspan/logo.jpg" alt="логотип.png">
                        </div>
                        <h1 data-wow-delay="0.5s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow fadeInUp header__txt">
                            {{ trans('portfolio/swisspan.header_title') }}
                        </h1>
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
                            class="wow fadeInUp header__button" href="http://www.swisspan.ua/" rel="nofollow">
                            {{ trans('portfolio/swisspan.header_button') }}
                        </a>
                    </div>
                </div>
            </div>
            <div data-wow-delay="0s" data-wow-duration="2s" data-wow-iteration="1" data-wow-offset="0"
                class="wow fadeInRight header__phone-laptop">
                <img class="header__img-phone" src="/img/portfolio/swisspan/mobile-home.png" alt="png">
                <img class="header__img-laptop" src="/img/portfolio/swisspan/laptop.png" alt="png">
            </div>
        </header>
        <section class="container swisspan__aim">
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3">
                    <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                        class="wow bounceInLeft">
                        <h5 class="swisspan__head text-center swisspan__aim-head">
                            {{ trans('portfolio/swisspan.task') }}</h5>
                    </div>
                    <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                        class="wow bounceInRight">
                        <p class="swisspan__txt text-center">
                            {{ trans('portfolio/swisspan.task_text') }}</p>
                    </div>
                </div>
            </div>
            <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0" class="wow bounceIn">
                <img class="swisspan__aim-triag" src="/img/portfolio/swisspan/triag.png" alt="">
            </div>
        </section>
        <section class="swisspan__color">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-3 col-sm-3">
                        <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow bounceInLeft swisspan__section-head-wrap swisspan__section-head-wrap_1">
                            {!! trans('portfolio/swisspan.color') !!}
                        </div>
                        <div data-wow-delay="0.3s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow bounceInLeft swisspan__color-ex swisspan__color-ex_orange">
                            <p class="swisspan__color-ex-txt swisspan__color-ex-txt_orange">
                                #e4892e</p>
                            <div class="swisspan__color-ex-border swisspan__color-ex-border_orange">
                                <div class="swisspan__color-ex-color swisspan__color-ex-color_orange"></div>
                            </div>
                        </div>
                        <div data-wow-delay="0.5s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow bounceInLeft swisspan__color-ex swisspan__color-ex_green">
                            <p class="swisspan__color-ex-txt swisspan__color-ex-txt_green">
                                #e4892e</p>
                            <div class="swisspan__color-ex-border swisspan__color-ex-border_green">
                                <div class="swisspan__color-ex-color swisspan__color-ex-color_green"></div>
                            </div>
                        </div>
                        <div data-wow-delay="0.7s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow bounceInLeft swisspan__color-ex swisspan__color-ex_black">
                            <p class="swisspan__color-ex-txt swisspan__color-ex-txt_black">
                                #e4892e</p>
                            <div class="swisspan__color-ex-border swisspan__color-ex-border_black">
                                <div class="swisspan__color-ex-color swisspan__color-ex-color_black"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-9 col-sm-8 relative">
                        <div data-wow-delay="0.7s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow fadeInUp">
                            <img class="img-responsive swisspan__color-home shadow "
                                src="/img/portfolio/swisspan//full-home.jpg" alt="">
                        </div>
                        <h3 class="swisspan__bold swisspan__bold_home">
                            {!! trans('portfolio/swisspan.home_page') !!}</h3>
                    </div>
                </div>
            </div>
        </section>
        <section class="swisspan__typo-cont">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-lg-offset-4">
                        <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow bounceInLeft swisspan__section-head-wrap swisspan__section-head-wrap_2">
                            {!! trans('portfolio/swisspan.fonts') !!}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-10 col-lg-offset-1">
                        <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow fadeInUp">
                            <p class="swisspan__typo-head text-center">
                                Gotham Pro</p>
                        </div>
                        <div class="swisspan__typo-example-wrap">
                            <div data-wow-delay="0.3s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                                class="wow fadeInUp">
                                <p class="swisspan__typo-example swisspan__typo-example_black">
                                    Black</p>
                            </div>
                            <div data-wow-delay="0.5s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                                class="wow fadeInUp">
                                <p class="swisspan__typo-example swisspan__typo-example_bold">
                                    Bold</p>
                            </div>
                            <div data-wow-delay="0.7s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                                class="wow fadeInUp">
                                <p class="swisspan__typo-example swisspan__typo-example_medium">
                                    Medium</p>
                            </div>
                            <div data-wow-delay="0.9s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                                class="wow fadeInUp">
                                <p class="swisspan__typo-example swisspan__typo-example_regular">
                                    Regular</p>
                            </div>
                        </div>
                        <div class="swisspan__typo-letters-wrap">
                            <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                                class="wow bounceInLeft">
                                <p class="swisspan__typo-letters-txt swisspan__typo-letters-txt_upp">
                                    а б в г д е ё ж з
                                    и й к л м н о п р
                                    с т у ф х ц ч ш щ
                                    ъ ы ь э ю я</p>
                            </div>
                            <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                                class="wow bounceInRight">
                                <p class="swisspan__typo-letters-txt">
                                    а б в г д е ё ж з
                                    и й к л м н о п р
                                    с т у ф х ц ч ш щ
                                    ъ ы ь э ю я</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container relative">
                <div class="swisspan__responsive">
                    <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                        class="wow bounceInLeft">
                        <img src="/img/portfolio/swisspan//mock-mac.png" class="img-responsive" alt="">
                    </div>
                    <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                        class="wow bounceInRight">
                        <img class="swisspan__responsive-phone img-responsive" src="/img/portfolio/swisspan//iph-mock.png"
                            alt="">
                    </div>
                </div>
                <h3 class="swisspan__bold swisspan__responsive-bold">
                    {!! trans('portfolio/swisspan.responsive') !!}</h3>
            </div>
        </section>
        <section class="swisspan__responsive-txt">
            <div class="container">
                <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                    class="wow fadeInUp">
                    <p class="swisspan__txt text-center">
                        {!! trans('portfolio/swisspan.responsive_text') !!}</p>
                </div>
            </div>
        </section>
        <section class="swisspan__func">
            <div class="container">
                <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                    class="wow bounceIn row">
                    <div class="col-lg-4 col-lg-offset-4">
                        <div class="swisspan__section-head-wrap swisspan__section-head-wrap_3">
                            <h4 class="swisspan__section-head-orange text-center">
                                {!! trans('portfolio/swisspan.functional') !!}</h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                        class="wow bounceInLeft col-lg-5 col-md-5 col-lg-offset-1 swisspan__func-wrap">
                        <div class="swisspan__func-inner">
                            <div class="swisspan__func-img">
                                <img src="/img/portfolio/swisspan//wp-logo.png" alt="">
                            </div>
                            <div>
                                <p class="swisspan__txt">
                                    CMS <br>
                                    <b>WordPress</b>
                                </p>
                            </div>
                        </div>
                        <div class="swisspan__func-inner">
                            <div class="swisspan__func-img">
                                <img src="/img/portfolio/swisspan//bootsrt-logo.png" alt="">
                            </div>
                            <div>
                                <p class="swisspan__txt">
                                    Framework <br>
                                    <b>Bootstrap
                                        4</b>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                        class="wow bounceInRight col-lg-5 col-md-5">
                        <ul class="swisspan__func-list">
                            <li class="swisspan__txt swisspan__func-list-item">
                                {!! trans('portfolio/swisspan.development') !!}
                            </li>
                            <li class="swisspan__txt swisspan__func-list-item">
                                {!! trans('portfolio/swisspan.catalog') !!}
                            </li>
                            <li class="swisspan__txt swisspan__func-list-item">
                                {!! trans('portfolio/swisspan.site_map') !!}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="swisspan__other">
            <div>
                <div class="container">
                    <div class="row swisspan__other-wrap">
                        <div class="col-lg-6 swisspan__other-left">
                            <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                                class="wow fadeInUp">
                                <img class="img-responsive shadow" src="/img/portfolio/swisspan//1-1.jpg" alt="">
                            </div>
                            <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                                class="wow fadeInUp">
                                <img class="img-responsive shadow" src="/img/portfolio/swisspan//1-2.png" alt="">
                            </div>
                            <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                                class="wow fadeIn">
                                <img class="img-responsive shadow" src="/img/portfolio/swisspan//1-3.png" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 swisspan__other-right">
                            <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                                class="wow bounceInRight swisspan__section-head-wrap swisspan__section-head-wrap_4">
                                {!! trans('portfolio/swisspan.other_pages1') !!}
                            </div>
                            <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                                class="wow fadeInUp">
                                <img class="img-responsive shadow" src="/img/portfolio/swisspan//2-1.png" alt="">
                            </div>
                            <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                                class="wow fadeInUp">
                                <img class="img-responsive shadow" src="/img/portfolio/swisspan//2-2.png" alt="">
                            </div>
                            <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                                class="wow fadeIn">
                                <img class="img-responsive shadow" src="/img/portfolio/swisspan//2-3.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                    class="wow bounceIn relative swisspan__other-bottom ">
                    {!! trans('portfolio/swisspan.other_pages2') !!}
                </div>
            </div>
        </section>
    </main>
@endsection
@section('bottom-scripts')
    <script src="{{ asset('js/libs.js') }}"></script>
@endsection
