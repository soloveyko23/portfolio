@extends('layouts.portfolio-item')

@section('seo')
    <link rel="canonical" href="{{ Request::url() }}">
    <title>{{ trans('portfolio/ytstar.seo_title') }}</title>
    <meta name="description" content="{{ trans('portfolio/ytstar.seo_descr') }}">
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/redesign.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/portfolio/ytstar.css') }}">
@endsection

@section('content')
    <main class='ytstar'>
        <header class="header">
            <div class="header__container">
                <div class="header__inner">
                    <div class="header__description">
                        <div data-wow-duration="1s" class="header__logo wow fadeInDown">
                            <img src="/img/portfolio/ytstar/logo.png" alt="логотип.png">
                        </div>
                        <h1 data-wow-delay="0.5s" data-wow-duration="1s" class="header__txt wow fadeInUp">
                            {{ trans('portfolio/ytstar.header_title') }}
                        </h1>
                        <div data-wow-delay="0.5s" data-wow-duration="1s" class="header__icons wow fadeInDown">
                            <div class="header__img-area">
                                <img class="header__icon-img" src="/img/portfolio/ytstar/icons/laptop.png" alt="png">
                            </div>
                            <div class="header__img-area">
                                <img class="header__icon-img" src="/img/portfolio/ytstar/icons/phone.png" alt="png">
                            </div>
                            <div class="header__img-area">
                                <img class="header__icon-img" src="/img/portfolio/ytstar/icons/tablet.png" alt="png">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div data-wow-duration="2s" class="header__phone-laptop wow fadeInRight">
                <img class="header__img-phone" src="/img/portfolio/ytstar/mobile-home.png" alt="png">
                <img class="header__img-laptop" src="/img/portfolio/ytstar/laptop.png" alt="png">
            </div>
        </header>
        <section class="panel margin_mt-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="title">
                            <div data-wow-delay="0.3s" data-wow-duration="1s" class="wow fadeIn">
                                <img src="/img/portfolio/ytstar/dashboard-black.svg" alt="icon" class="title__icon">
                            </div>

                            <div data-wow-duration="1s" class="wow slideInRight">
                                <p class="title__main">
                                    {{ trans('portfolio/ytstar.page') }}
                                <div data-wow-delay="0.3s" data-wow-duration="1s" class="wow slideInRight">
                                    <span class="title__main-sub">{{ trans('portfolio/ytstar.control_panel') }}</span>
                                </div>
                                </p>
                            </div>

                            <p class="title__bg">
                                Control
                                Panel</span>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div data-wow-delay="0.1s" data-wow-duration="1s" class="panel__image wow fadeIn">
                            <img src="/img/portfolio/ytstar/panel-image.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="task">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="title">
                            <div data-wow-delay="0.3s" data-wow-duration="1s" class = "wow fadeIn">
                                <img src="/img/portfolio/ytstar//accomplish-task-black.svg" alt=""
                                    class="title__icon">
                            </div>

                            <div data-wow-duration="1s" class = "wow slideInRight">
                                <p class="title__main">
                                    {{ trans('portfolio/ytstar.page') }}
                                <div data-wow-delay="0.3s" data-wow-duration="1s" class="wow slideInRight">
                                    <span class="title__main-sub">{{ trans('portfolio/ytstar.task') }}</span>
                                </div>
                                </p>
                            </div>
                            <p class="title__bg">
                                Perform
                                <span class="title__bg-sub">a task</span>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-10">

                        <div name="" data-wow-delay="0.1s" data-wow-duration="1s" class="task__image wow fadeIn">
                            <img src="/img/portfolio/ytstar/task-image.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <div data-wow-delay="0.1s" data-wow-duration="1s" class="wow bounceIn">
                <img src="/img/portfolio/ytstar/star-r.png" alt="img" class="star-r">
            </div>
        </section>
        <section class="store">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="title">
                            <div data-wow-delay="0.3s" data-wow-duration="1s wow fadeIn">
                                <img src="/img/portfolio/ytstar/paper-bag.svg" alt="img"
                                    class="title__icon presentation__colorbox-wrap_yellow">
                            </div>
                            <div data-wow-duration="1s" class="wow slideInRight">
                                <p class="title__main">
                                    {{ trans('portfolio/ytstar.page') }}
                                <div data-wow-delay="0.3s" data-wow-duration="1s" class="wow slideInRight">
                                    <span class="title__main-sub">{{ trans('portfolio/ytstar.shop') }}</span>
                                </div>
                                </p>
                            </div>
                            <p class="title__bg">
                                SHOP page</p>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="store__image">

                            <div data-wow-delay="0.1s" data-wow-duration="1s" class="wow fadeIn">
                                <img src="/img/portfolio/ytstar/store-image-left.png" alt="img"
                                    class="store__image-left">
                            </div>

                            <div data-wow-delay="0.2s" data-wow-duration="1s" class="wow fadeIn">
                                <img src="/img/portfolio/ytstar/store-image-right.png" alt="img"
                                    class="store__image-right">
                            </div>

                            <div data-wow-delay="0.3s" data-wow-duration="1s" class="wow fadeIn">
                                <img src="/img/portfolio/ytstar/store-image-right-b.png" alt="img"
                                    class="store__image-right-bottom">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div data-wow-duration="1s" class="wow bounceIn">
                <img src="/img/portfolio/ytstar/star-l.png" alt="img" class="star-l">
            </div>
        </section>
        <section class="sale">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="title">
                            <div data-wow-delay="0.3s" data-wow-duration="1s" class="wow fadeIn">
                                <img src="/img/portfolio/ytstar/sales-black.svg" alt="img" class="title__icon">
                            </div>

                            <div data-wow-duration="1s" class="wow slideInRight">
                                <p class="title__main">
                                    {{ trans('portfolio/ytstar.page') }}

                                <div data-wow-delay="0.3s" data-wow-duration="1s" class="wow slideInRight">
                                    <span class="title__main-sub">{{ trans('portfolio/ytstar.promotions') }}</span>
                                </div>
                                </p>
                            </div>
                            <p class="title__bg">
                                Promotions</span>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div data-wow-delay="0.1s" data-wow-duration="1s" class="sale__image wow fadeIn">
                            <img src="/img/portfolio/ytstar/panel-image.png" alt="img">
                        </div>
                    </div>
                </div>
            </div>

            <div data-wow-duration="1s" class="bounceIn">
                <img src="/img/portfolio/ytstar/star-r.png" alt="img" class="star-r">
            </div>
        </section>
        <section class="lavel">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 clearfix">
                        <div class="title">
                            <div data-wow-delay="0.3s" data-wow-duration="1s" class="wow fadeIn">
                                <img src="/img/portfolio/ytstar/level-black.svg" alt="img" class="title__icon">
                            </div>
                            <div data-wow-delay="0.3s" data-wow-duration="1s" class="wow slideInLeft">
                                <p class="title__main">
                                    {{ trans('portfolio/ytstar.page') }}
                                <div data-wow-delay="0.3s" data-wow-duration="1s" class="wow slideInLeft">
                                    <span class="title__main-sub">{{ trans('portfolio/ytstar.level') }}</span>
                                </div>
                                </p>
                            </div>

                            <p class="title__bg">
                                Level</span>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-10 col-lg-offset-2">
                        <div class="lavel__image">
                            <img src="/img/portfolio/ytstar/lavel-image.png" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="setting">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="title">
                            <div data-wow-delay="0.3s" data-wow-duration="1s" class="wow fadeIn">
                                <img src="/img/portfolio/ytstar/settings-black.svg" alt="img" class="title__icon">
                            </div>
                            <div data-wow-duration="1s" class="wow slideInRight">
                                <p class="title__main">
                                    {{ trans('portfolio/ytstar.page') }}
                                <div data-wow-delay="0.3s" data-wow-duration="1s" class="wow slideInRight">
                                    <span class="title__main-sub">{{ trans('portfolio/ytstar.settings') }}</span>
                                </div>
                                </p>
                            </div>
                            <p class="title__bg">
                                <span>Setting</span>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="setting__image">
                            <img src="/img/portfolio/ytstar/setting-image.png" alt="img">
                        </div>
                    </div>
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="setting__landing">
                            <div data-wow-duration="1s" class="wow fadeIn">
                                <span class="setting__landing-title">Landing page</span>
                            </div>
                            <span class="setting__landing-sub">Landing page</span>
                        </div>

                        <div data-wow-delay="1s" data-wow-duration="1s" class="setting__image wow fadeIn">
                            <img src="/img/portfolio/ytstar/landingpage-image.png" alt="img">
                            <div data-wow-delay="0.3s" data-wow-duration="1s" class="wow bounceIn">
                                <img src="/img/portfolio/ytstar/star-l.png" alt="img" class="star-l">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="thankyou">
            <div class="container">
                <div class="row">
                    <div data-wow-duration="1s" class="wow fadeIn">
                        <span class="thankyou__title">{{ trans('portfolio/ytstar.footer1') }}</span>
                    </div>
                    <div data-wow-duration="1s" class="wow fadeIn">
                        <span class="thankyou__sub">{{ trans('portfolio/ytstar.footer2') }}</span>
                    </div>
                    <span class="thankyou__bg">THK</span>
                </div>
            </div>
            <div data-wow-duration="1s" class="wow bounceIn">
                <img src="/img/portfolio/ytstar/star-r.png" alt="img" class="star-r">
            </div>
        </section>
    </main>
@endsection

@section('bottom-scripts')
    <script src="{{ asset('js/libs.js') }}"></script>
@endsection
