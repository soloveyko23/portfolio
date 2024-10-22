@extends('layouts.portfolio-item')

@section('seo')
    <link rel="canonical" href="{{ Request::url() }}">
    <title>{{ trans('portfolio/tekstilno.seo_title') }}</title>
    <meta name="description" content="{{ trans('portfolio/tekstilno.seo_descr') }}">
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/redesign.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/portfolio/tekstilno.css') }}">
@endsection

@section('content')
    <main class='tekstilno'>
        <header class="header">
            <div class="header__container">
                <div class="header__inner">
                    <div class="header__description">
                        <div data-wow-duration="1s" class="header__logo wow fadeInDown">
                            <img src="/img/portfolio/tekstilno/logo.png" alt="логотип.png">
                        </div>
                        <h1 data-wow-delay="0.5s" data-wow-duration="1s" class="header__txt wow fadeInUp">
                            {{ trans('portfolio/tekstilno.header_title') }}
                        </h1>
                        <div data-wow-delay="0.5s" data-wow-duration="1s" class="header__icons wow fadeInDown">
                            <div class="header__img-area">
                                <img class="header__icon-img" src="/img/portfolio/tekstilno/icons/laptop.png"
                                    alt="png">
                            </div>
                            <div class="header__img-area">
                                <img class="header__icon-img" src="/img/portfolio/tekstilno/icons/phone.png" alt="png">
                            </div>
                            <div class="header__img-area">
                                <img class="header__icon-img" src="/img/portfolio/tekstilno/icons/tablet.png"
                                    alt="png">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div data-wow-duration="2s" class="header__phone-laptop wow fadeInRight">
                <img class="header__img-phone" src="/img/portfolio/tekstilno/mobile-home.png" alt="png">
                <img class="header__img-laptop" src="/img/portfolio/tekstilno/laptop.png" alt="png">
            </div>
        </header>
        <section class="functional">
            <div class="container">
                <div class="functional__inner">
                    <div data-wow-duration="1s" class="section__title wow fadeInUp">
                        {{ trans('portfolio/tekstilno.functional') }}
                        <span class="section__title-small">Functional</span>
                    </div>
                    <div class="functional__description">
                        <div data-wow-duration="1s" class="wow fadeInLeft">
                            <p class="functional__description-txt">
                                <span>cms</span>
                                OPENCART
                            </p>
                            <ul class="functional__description-list">
                                <li>{{ trans('portfolio/tekstilno.func_item1') }}</li>
                                <li>{{ trans('portfolio/tekstilno.func_item2') }}</li>
                            </ul>
                        </div>

                        <div data-wow-duration="1s" class="wow fadeInRight">
                            <p class="functional__description-txt">
                                <span>Framework</span>
                                Bootstrap 3
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="colors">
            <div class="container">
                <div class="colors__inner">
                    <div data-wow-duration="1s" class="section__title wow fadeInUp">
                        {!! trans('portfolio/tekstilno.color') !!}
                        <span class="section__title-small">color</span>
                    </div>

                    <div class="colors__examples">
                        <div class="colors__examples-big">
                            <div data-wow-duration="1s" class="colors__examples-big-item wow fadeInLeft">
                                <div class="colors__examples-color colors__examples-color_pink"></div>
                                <span class="colors__examples-name">#cd076e</span>
                            </div>

                            <div data-wow-delay="0.2s" data-wow-duration="1s"
                                class="colors__examples-big-item wow fadeInLeft">
                                <div class="colors__examples-color colors__examples-color_blue"></div>
                                <span class="colors__examples-name">#195df4</span>
                            </div>

                            <div data-wow-delay="0.4s" data-wow-duration="1s"
                                class="colors__examples-big-item wow fadeInLeft">
                                <div class="colors__examples-color colors__examples-color_gray"></div>
                                <span class="colors__examples-name">#e7e7e7</span>
                            </div>

                            <div data-wow-duration="1s" class="wow fadeInRight">
                                <p class="colors__examples-small colors__examples-small_green">#73be52</p>
                                <p class="colors__examples-small colors__examples-small_red">#f34141</p>
                                <p class="colors__examples-small colors__examples-small_black">#565656</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="fonts">
            <div class="container">
                <div class="fonts__inner">
                    <div data-wow-duration="1s" class="section__title wow fadeInLeft">
                        {!! trans('portfolio/tekstilno.fonts') !!}
                        <span class="section__title-small">typography</span>
                    </div>

                    <div data-wow-duration="1s" class="fonts__example wow fadeInRight">
                        <div class="fonts__example-inner fonts__example-inner_montserrat">
                            <p>Montserrat</p>
                            <ul class="fonts__example-inner_montserrat-list">
                                <li>Bold</li>
                                <li>Medium</li>
                                <li>Regular</li>
                                <li>Light italic</li>
                            </ul>
                        </div>
                        <div class="fonts__example-inner fonts__example-inner_pengvin">
                            <p>Pengvin</p>
                            <ul class="fonts__example-inner_pengvin-list">
                                <li>Bold</li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="index">
            <div class="container">
                <div class="index__inner">
                    <div data-wow-duration="1s" class="section__title wow fadeInUp">
                        {!! trans('portfolio/tekstilno.main_page') !!}
                        <span class="section__title-small">Home page</span>
                    </div>
                    <div class="row">
                        <div data-wow-duration="1s" class="col-md-9 col-md-offset-3 wow fadeInRight">
                            <img class="img-responsive img-shadow" src="/img/portfolio/tekstilno/index.jpg"
                                alt="">
                        </div>
                        <div data-wow-duration="1s" class="index__extra-item index__extra-item_aim wo fadeInLeft">
                            <h3 class="index__extra-title">{!! trans('portfolio/tekstilno.target') !!}</h3>
                            <p class="index__extra-txt">{!! trans('portfolio/tekstilno.target_text') !!}</p>
                        </div>

                        <div data-wow-duration="1s"
                            class="index__extra-item index__extra-item_interaction wow fadeInLeft">
                            <h3 class="index__extra-title">{!! trans('portfolio/tekstilno.product') !!}</h3>
                            <div class="index__extra-gif">
                                <img class="img-responsive img-shadow" src="/img/portfolio/tekstilno/card-hover.gif"
                                    alt="">
                            </div>
                            <p class="index__extra-txt">{!! trans('portfolio/tekstilno.animation') !!}</p>
                        </div>

                        <div data-wow-duration="1s" class="index__extra-phone wos fadeInLeft">
                            <img class="img-responsive" src="/img/portfolio/tekstilno/phone-mock.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="icons">
            <div class="container">
                <div class="icons__inner">
                    <div data-wow-duration="1s" class="section__title wow fadeInRight">
                        {!! trans('portfolio/tekstilno.icons') !!}
                        <span class="section__title-small">Icons</span>
                    </div>
                    <div data-wow-duration="1s" class="icons__img-wrap wow fadeInUp">
                        <img class="img-responsive" src="/img/portfolio/tekstilno/icons-top.png" alt="">
                        <img class="img-responsive" src="/img/portfolio/tekstilno/icons-bottom.png" alt="">
                    </div>
                </div>
            </div>
        </section>

        <section class="slider">
            <div class="container">
                <div class="slider__inner">
                    <div class="slider__title-wrap">
                        <div data-wow-duration="1s" class="section__title wow fadeInLeft">
                            {!! trans('portfolio/tekstilno.slider') !!}
                            <span class="section__title-small">Slider</span>
                        </div>
                        <div data-wow-duration="1s" class="fadeInRight">
                            <p class="slider__title-txt"> {!! trans('portfolio/tekstilno.slider_text') !!}</p>
                        </div>
                    </div>
                    <div class="slider__img-wrap">
                        <img class="img-responsive" src="/img/portfolio/tekstilno/slider.gif" alt="">
                    </div>
                </div>
            </div>
        </section>

        <section class="catalog">
            <div class="container">
                <div class="catalog__inner">
                    <div data-wow-duration="1s" class="section__title wow fadeInLeft">
                        {!! trans('portfolio/tekstilno.catalog') !!}
                        <span class="section__title-small">Other pages</span>
                    </div>
                    <div class="row">
                        <div data-wow-duration="1s" class="col-md-8 wow fadeIn">
                            <img class="img-responsive img-shadow" src="/img/portfolio/tekstilno/catalog-full.jpg"
                                alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="product">
            <div class="container">
                <div class="product__inner">
                    <div data-wow-duration="1s" class="section__title wow fadeInRight">
                        {!! trans('portfolio/tekstilno.product_page') !!}
                    </div>
                    <div class="row">
                        <div data-wow-duration="1s" class="col-md-8 col-md-offset-4 wow fadeIn">
                            <img class="img-responsive img-shadow" src="/img/portfolio/tekstilno/product-full.jpg"
                                alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="adaptive">
            <div class="container">
                <div class="adaptive__inner">
                    <div data-wow-duration="1s" class="section__title wow fadeInRight">
                        {!! trans('portfolio/tekstilno.adaptive') !!}
                        <span class="section__title-small">Responsive</span>
                    </div>
                    <div data-wow-duration="1s" class="adaptive__txt wow fadeInUp">
                        <p class="slider__title-txt">Сайт был полностью адаптирован под все устройства и отлично работает
                            во всех браузерах</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="thx">
            <div class="container">
                <div class="thx__inner">
                    <div data-wow-duration="1s" class="section__title wow zoomIn">
                        {!! trans('portfolio/tekstilno.footer') !!}
                        <span class="section__title-small">Thanks for watching</span>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@section('bottom-scripts')
    <script src="{{ asset('js/libs.js') }}"></script>
@endsection
