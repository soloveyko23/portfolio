@extends('layouts.portfolio-item')

@section('seo')
    <link rel="canonical" href="{{ Request::url() }}">
    <title>{{ trans('portfolio/ukrticket.seo_title') }}</title>
    <meta name="description" content="{{ trans('portfolio/ukrticket.seo_descr') }}">
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/redesign.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/portfolio/ukrticket.css') }}">
@endsection

@section('content')
    <main class="ukrticket">
        <header class="header">
            <div class="header__container">
                <div class="header__inner">
                    <div class="header__description">
                        <div class="header__logo wow fadeInDown" data-wow-delay="0s" duration="1s">
                            <img class="header__logo-img" src="/img/portfolio/ukrticket/logo.png" alt="логотип.png">
                        </div>
                        <h1 class='header__txt wow fadeInUp' data-wow-delay="0.5s" duration="1s">
                            {{ trans('portfolio/ukrticket.header_title') }}
                        </h1>
                        <div class="header__icons wow fadeInDown" data-wow-delay="0.5s" duration="1s">
                            <div class="header__img-area">
                                <img class="header__icon-img" src="/img/portfolio/ukrticket/icons/laptop.png"
                                    alt="png">
                            </div>
                            <div class="header__img-area">
                                <img class="header__icon-img" src="/img/portfolio/ukrticket/icons/phone.png" alt="png">
                            </div>
                            <div class="header__img-area">
                                <img class="header__icon-img" src="/img/portfolio/ukrticket/icons/tablet.png"
                                    alt="png">
                            </div>
                        </div>
                        <a href="https://ukrticket.com.ua/ru/odesa" class="header__button wow fadeInUp" data-wow-delay="0s"
                            duration="2s" rel="nofollow">
                            {{ trans('portfolio/ukrticket.header_button') }}
                        </a>
                    </div>
                </div>
            </div>
            <div class="header__phone-laptop wow fadeInRight" data-wow-delay="0s" duration="2s">
                <img class="header__img-phone" src="/img/portfolio/ukrticket/mobile-home.png" alt="png">
                <img class="header__img-laptop" src="/img/portfolio/ukrticket/laptop.png" alt="png">
            </div>
        </header>
        <div class="ukrticket__second">
            <div class="ukrticket__aim">
                <div class="container">
                    <div class="row ukrticket__aim_marg">
                        <div class="col-md-5 ukrticket__aim_wrap wow fadeInLeft" data-wow-delay="0s" duration="1s">
                            <div>
                                <h5 class="ukrticket__aim_name">{{ trans('portfolio/ukrticket.task') }}</h5>
                            </div>
                            <div>
                                <span class="ukrticket__aim_number">01</span>
                                <p class="ukrticket__aim_descr">
                                    {{ trans('portfolio/ukrticket.task_text') }}
                                </p>
                            </div>
                        </div>
                        <div class="col-md-offset-2 col-md-5 ukrticket__aim_wrap wow fadeInRight" data-wow-delay="0s"
                            duration="1s">
                            <div>
                                <h5 class="ukrticket__aim_name ukrticket__aim_name-instr">
                                    {{ trans('portfolio/ukrticket.tools') }}
                                </h5>
                            </div>
                            <div class="ukrticket__aim_descr_wrap ukrticket__aim_descr_wrap-left">
                                <span class="ukrticket__aim_number ukrticket__aim_number-right">02</span>
                                <p class="ukrticket__aim_descr ukrticket__aim_descr-right">
                                    Concept design - Web UI/UX Design</p>
                                <p class="ukrticket__aim_descr ukrticket__aim_descr-right">
                                    Front-End: {{ trans('portfolio/ukrticket.framework') }} - Founation
                                    6</p>
                                <p class="ukrticket__aim_descr ukrticket__aim_descr-right">
                                    Back-End: {{ trans('portfolio/ukrticket.framework') }} - Laravel 5
                                </p>
                                <div class="ukrticket__aim_descr_laravel">
                                    <img src="/img/portfolio/ukrticket/ukr-lara.png"alt="ukr-lara.png">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ukrticket__main">
                <div class="container">
                    <div class="row wow fadeInUp" data-wow-delay="0s" duration="1s">
                        <div class="col-md-offset-4 col-md-4 ukrticket__main_circle">
                            <span class="ukrticket__aim_number">03</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 wow fadeInLeft" data-wow-delay="0s" duration="1s">
                            <h5 class="ukrticket__aim_name ukrticket__aim_name-dev">
                                {{ trans('portfolio/ukrticket.development') }}</h5>
                        </div>
                    </div>
                    <div class="ukrticket__main_full_wrap">
                        <div class="row">
                            <div class="col-md-offset-1 col-md-11 ukrticket__main_full wow fadeInUp">
                                <img class="img-responsive ukrticket__main_img" src="/img/portfolio/ukrticket/ukr-full.png"
                                    alt="ukr-full.png">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-sm-6 ukrticket__main_descriptions wow fadeInLeft">
                                <div>
                                    <p class="ukrticket__main_txt">
                                        {{ trans('portfolio/ukrticket.dev_text1') }}
                                    </p>
                                </div>
                                <div class="ukrticket__main_numwrap">
                                    <div class="ukrticket__main_numinner">
                                        <span class="ukrticket__main_num">01</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 ukrticket__main_descriptions ukrticket__main_descriptions-sec wow fadeInLeft"
                                data-wow-delay="0s" duration="1s">
                                <div>
                                    <p class="ukrticket__main_txt">
                                        {{ trans('portfolio/ukrticket.dev_text2') }}
                                    </p>
                                </div>
                                <div class="ukrticket__main_numwrap">
                                    <div class="ukrticket__main_numinner">
                                        <span class="ukrticket__main_num">02</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ukrticket__double-circle ukrticket__double-circle_main"></div>
            </div>
        </div>
        <div class="ukrticket__another">
            <div class="ukrticket__another_color container">
                <div class="ukrticket__aim_name_before  wow fadeInLeft" data-wow-delay="0s" duration="1s">
                    <h5 class="ukrticket__aim_name ukrticket__aim_name-white">
                        {{ trans('portfolio/ukrticket.color') }}
                    </h5>
                </div>
                <div class="ukrticket__another_color_inner wow fadeInUp" data-wow-delay="0s" duration="1s">
                    <div class="ukrticket__another_color_example">
                        <div class="ukrticket__another_color_example_inner">
                            <span class="ukrticket__another_color_example_txt">#9e171a</span>
                        </div>
                    </div>
                    <div class="ukrticket__another_color_example ukrticket__another_color_example-gray">
                        <div class="ukrticket__another_color_example_inner ukrticket__another_color_example_inner-gray">
                            <span
                                class="ukrticket__another_color_example_txt ukrticket__another_color_example_txt-black">#e8e8e8</span>
                        </div>
                    </div>
                    <div class="ukrticket__another_color_example ukrticket__another_color_example-black">
                        <div class="ukrticket__another_color_example_inner ukrticket__another_color_example_inner-black">
                            <span class="ukrticket__another_color_example_txt">#2e2e2e</span>
                        </div>
                    </div>
                    <div class="ukrticket__another_color_example ukrticket__another_color_example-white">
                        <div class="ukrticket__another_color_example_inner ukrticket__another_color_example_inner-white">
                            <span
                                class="ukrticket__another_color_example_txt ukrticket__another_color_example_txt-black">#ffffff</span>
                        </div>
                    </div>
                </div>
                <span class="ukrticket__another_boldtxt">COLOR</span>
            </div>

            <div class="ukrticket__another_color container">
                <div class="ukrticket__aim_name_before ukrticket__aim_name_before-right col-md-offset-7 col-md-5 wow fadeInRight"
                    data-wow-delay="0s" duration="1s">
                    <h5 class="ukrticket__aim_name ukrticket__aim_name-white ukrticket__aim_name-white-left">
                        {{ trans('portfolio/ukrticket.fonts') }}
                    </h5>
                </div>
                <div class="ukrticket__another_typowrap wow fadeInUp" data-wow-delay="0s" duration="1s">
                    <div class="ukrticket__another_typoinner">
                        <span class="ukrticket__another_typotxt ukrticket__another_typotxt-HKG">HK Grotesk</span>
                        <div class="ukrticket__another_typoinner-example">
                            <span class="ukrticket__another_typoinner-example-HKG">АБВГДЕЁЖЗИЙКЛМНО</span>
                            <span class="ukrticket__another_typoinner-example-HKG">абвгдеёжзийклмно</span>
                            <span class="ukrticket__another_typoinner-example-HKG">0123456789</span>
                        </div>
                    </div>
                    <div class="ukrticket__another_typoinner">
                        <span class="ukrticket__another_typotxt ukrticket__another_typotxt-SUI">Segoe UI</span>
                        <div class="ukrticket__another_typoinner-example">
                            <span class="ukrticket__another_typoinner-example-SUI">АБВГДЕЁЖЗИЙКЛМНО</span>
                            <span class="ukrticket__another_typoinner-example-SUI">абвгдеёжзийклмно</span>
                            <span class="ukrticket__another_typoinner-example-SUI">0123456789</span>
                        </div>
                    </div>
                    <div class="ukrticket__another_typoinner">
                        <span class="ukrticket__another_typotxt ukrticket__another_typotxt-MP">Myriad Pro</span>
                        <div class="ukrticket__another_typoinner-example">
                            <span class="ukrticket__another_typoinner-example-MP">АБВГДЕЁЖЗИЙКЛМНО</span>
                            <span class="ukrticket__another_typoinner-example-MP">абвгдеёжзийклмно</span>
                            <span class="ukrticket__another_typoinner-example-MP">0123456789</span>
                        </div>
                    </div>
                </div>
                <span class="ukrticket__another_boldtxt ukrticket__another_boldtxt-typography">typography</span>
            </div>

            <div class="ukrticket__another_pages container ukrticket__main_full_wrap ukrticket__main_full_wrap-another">
                <div class="ukrticket__another_pages_head wow fadeInLeft" data-wow-delay="0s" duration="1s">
                    <h5 class="ukrticket__aim_name ukrticket__aim_name-white">
                        {{ trans('portfolio/ukrticket.other_pages') }}
                    </h5>
                </div>
                <div class="row wow fadeInLeft" data-wow-delay="0s" duration="1s">
                    <div class="col-md-offset-1 col-md-7">
                        <div>
                            <img class="img-responsive ukrticket__another_pages_poster"
                                src="/img/portfolio/ukrticket/ukr-another-1.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-offset-4 col-md-7 ukrticket__another_pages_imginner">
                        <div class="ukrticket__another_pages_imgwrap wow fadeInLeft" data-wow-delay="0s" duration="1s">
                            <img class="img-responsive ukrticket__another_pages_poster"
                                src="/img/portfolio/ukrticket/ukr-another-2.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-offset-7 col-md-4 col-sm-6 ukrticket__main_descriptions ukrticket__main_descriptions-another wow fadeInLeft"
                        data-wow-delay="0s" duration="1s">
                        <div>
                            <p class="ukrticket__main_txt ukrticket__main_txt-another">
                                {{ trans('portfolio/ukrticket.search') }}
                            </p>
                        </div>
                        <div class="ukrticket__main_numwrap">
                            <div class="ukrticket__main_numinner">
                                <span class="ukrticket__main_num">03</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ukrticket__last">
            <div class="wow fadeInUp" data-wow-delay="0s" duration="1s">
                <img class="img-responsive" src="/img/portfolio/ukrticket/ukr-last-bg.png" alt="">
            </div>
        </div>
    </main>
@endsection

@section('bottom-scripts')
    <script src="{{ asset('js/libs.js') }}"></script>
@endsection
