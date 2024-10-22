@extends('layouts.portfolio-item')

@section('seo')
    <link rel="canonical" href="{{ Request::url() }}">
    <title>{{ trans('portfolio/english-school-advanced.seo_title') }}</title>
    <meta name="description" content="{{ trans('portfolio/english-school-advanced.seo_descr') }}">
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/redesign.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/portfolio/english-school-advanced.css') }}">
@endsection

@section('content')
    <main class='engl-courses'>
        <section class="home">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-5 col-lg-5">
                        <div class="home__logo">
                            <img src="/img/portfolio/english-school-advanced/logo.png" alt=""
                                class="home__logo-image wow fadeIn">
                            <span class="home__title wow fadeIn"
                                data-wow-delay=".2s">{{ trans('portfolio/english-school-advanced.header_title') }} </span>
                            <h1 class="main_page_title">{{ trans('portfolio/english-school-advanced.header_subtitle') }}
                            </h1>
                            <p class="home__description wow fadeIn" data-wow-delay=".4s">
                                {{ trans('portfolio/english-school-advanced.header_text') }}</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-7 col-lg-7">
                        <div class="home__images wow fadeInRight" data-wow-delay=".6s">
                            <img src="/img/portfolio/english-school-advanced/home-mac.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="functional">
            <div class="container">
                <div class="row">
                    <div class="title">
                        <span class="title__bg wow flipInX">Functional</span>
                        <p class="title__sub wow fadeIn" data-wow-delay=".3s">
                            {{ trans('portfolio/english-school-advanced.functional') }}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-7 col-sm-offset-5 col-md-6 col-md-offset-6 col-lg-6 col-lg-offset-6">
                        <div class="functional__cms wow bounceIn" data-wow-delay=".2s">
                            <div class="functional__cms-icon">
                                <img src="/img/portfolio/english-school-advanced/wordpress-logo.png" alt="">
                            </div>
                            <div class="functional__cms-name">
                                <span>CMS</span>
                                <p>Wordpress</p>
                            </div>
                        </div>
                        <div class="functional__cms wow bounceIn" data-wow-delay=".2s">
                            <div class="functional__cms-icon">
                                <img src="/img/portfolio/english-school-advanced/bootstrap-logo.png" alt="">
                            </div>
                            <div class="functional__cms-name">
                                <span>Framework</span>
                                <p>Bootstrap 4</p>
                            </div>
                        </div>
                        <div class="functional__sub">
                            <ul class="functional__sub-ul">
                                <li class="functional__sub-ul-li wow fadeIn" data-wow-delay=".2s">
                                    {{ trans('portfolio/english-school-advanced.timer') }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="typography">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-6">
                        <div class="typography__color">
                            <div class="typography-title-fonts">Color</div>
                            <span
                                class="typography__color-title wow fadeIn">{{ trans('portfolio/english-school-advanced.colors') }}</span>
                            <div class="typography__color-list colo-list-top wow bounceIn">
                                <p class="typography__color-list-hex">#515d85</p>
                                <span class="typography__color-list-cube">
                                </span>
                            </div>
                            <div class="typography__color-list colo-list-midle wow bounceIn" data-wow-delay=".2s">
                                <p class="typography__color-list-hex">#515d85</p>
                                <span class="typography__color-list-cube">
                                </span>
                            </div>
                            <div class="typography__color-list colo-list-bottom wow bounceIn" data-wow-delay=".4s">
                                <p class="typography__color-list-hex">#515d85</p>
                                <span class="typography__color-list-cube">
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="typography__fonts">
                            <span class="typography__fonts-title wow fadeIn">{!! trans('portfolio/english-school-advanced.fonts') !!}</span>
                            <div class="typography__fonts-block">
                                <div class="typography__fonts-inner wow flipInX">
                                    <span class="typography__fonts-inner-name">Open Sans</span>
                                    <p class="typography__fonts-inner-text">а б в г д е ё ж з и й к л м н о
                                        п р с т у ф х ц ч ш щ ъ ы ь э ю я
                                    </p>
                                </div>
                                <div class="typography__fonts-inner wow flipInX">
                                    <span class="typography__fonts-inner-name">Comfortaa</span>
                                    <p class="typography__fonts-inner-text">а б в г д е ё ж з и й к л м н о
                                        п р с т у ф х ц ч ш щ ъ ы ь э ю я
                                    </p>
                                </div>
                            </div>
                            <div class="text-bg">
                                <span class="text-bg-main">Typography</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="home-page">
            <div class="container">
                <div class="row">
                    <div class="home-page__title">
                        <h3 class="home-page__title-main wow fadeIn" data-wow-delay=".2s">
                            {{ trans('portfolio/english-school-advanced.main_page') }}</h3>
                        <p class="home-page__title-sub wow fadeIn" data-wow-delay=".3s">
                            <span>{{ trans('portfolio/english-school-advanced.task') }}</span>
                            {{ trans('portfolio/english-school-advanced.task_text') }}
                        </p>
                    </div>
                </div>
                <div class="home__image wow slideInUp">
                    <div class="text-bg text-bg-left">
                        <span class="text-bg-main">Home page</span>
                    </div>
                    <img src="/img/portfolio/english-school-advanced/home-page.png" alt=""
                        class="home__image-layer">
                    <div class="text-bg text-bg-right">
                        <span class="text-bg-main">design</span>
                    </div>
                </div>
            </div>
        </section>
        <section class="adaptive clearfix">
            <div class="container">
                <div class="row">
                    <div
                        class="col-sm-7 col-sm-offset-5 col-md-6 col-md-offset-6 col-lg-6 col-lg-offset-6 adaptive__title">
                        <h3 class="adaptive__title-main wow fadeIn">
                            {{ trans('portfolio/english-school-advanced.adaptive') }}</h3>
                        <p class="adaptive__title-sub wow fadeIn" data-wow-delay=".2s">
                            {{ trans('portfolio/english-school-advanced.adaptive_text') }}</p>
                    </div>
                    <div class="col-lg-12">
                        <div class="text-bg">
                            <span class="text-bg-main">Responsive</span>
                        </div>
                        <div class="adaptive__phone">
                            <img class="adaptive__phone-image wow bounceIn" data-wow-delay=".2s"
                                src="/img/portfolio/english-school-advanced/adaptive-image.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="lastpage">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 lastpage__title">
                        <span
                            class="lastpage__title-main wow fadeIn">{{ trans('portfolio/english-school-advanced.other_pages1') }}</span>
                        <span class="lastpage__title-sub wow fadeIn"
                            data-wow-delay=".2s">{{ trans('portfolio/english-school-advanced.other_pages2') }}</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-md-6 col-lg-6">
                        <div class="lastpage__image-inner wow bounceIn" data-wow-delay=".5s">
                            <img src="/img/portfolio/english-school-advanced/lastpage-main.png" alt=""
                                class="lastpage__image-main">
                        </div>
                        <div class="lastpage__image-inner wow bounceIn" data-wow-delay=".5s">
                            <img src="/img/portfolio/english-school-advanced/lastpage-main-bottom.png" alt=""
                                class="lastpage__image-main">
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6">
                        <div class="text-bg">
                            <span class="text-bg-main">Other</span>
                            <span class="text-bg-sub">pages</span>
                        </div>
                        <img src="/img/portfolio/english-school-advanced/lastpage-mack.png" alt=""
                            class="lastpage__image-right wow fadeIn">
                        <img src="/img/portfolio/english-school-advanced/lastpage-small.png" alt=""
                            class="lastpage__image-right-bottom wow fadeIn">
                    </div>
                </div>
                <div class="row">
                    <div class="lastpage__footer">
                        <span class="lastpage__footer-bg">Thanks</span>
                        <span class="lastpage__footer-main wow slideInLeft"
                            data-wow-delay=".2s">{{ trans('portfolio/english-school-advanced.footer1') }}</span>
                        <span class="lastpage__footer-sub wow slideInRight"
                            data-wow-delay=".4s">{{ trans('portfolio/english-school-advanced.footer2') }}</span>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@section('bottom-scripts')
    <script src="{{ asset('js/libs.js') }}"></script>
@endsection
