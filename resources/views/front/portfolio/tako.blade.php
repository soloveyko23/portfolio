@extends('layouts.portfolio-item')

@section('seo')
    <link rel="canonical" href="{{ Request::url() }}">
    <title>{{ trans('portfolio/tako.seo_title') }}</title>
    <meta name="description" content="{{ trans('portfolio/tako.seo_descr') }}">
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/redesign.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/portfolio/tako.css') }}">
@endsection

@section('content')
    <main class="tako">
        <!--set meta data-->

        <!--end set meta data-->
        <section class="banner">
            <div class="container">
                <div class="banner__inner">
                    <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                        class="banner__logo wow fadeInUp">
                        <img src="/img/portfolio/tako/logo.png" alt="">
                    </div>
                    <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                        class="banner__mock wow fadeInUp">
                        <img class="img-responsive" src="/img/portfolio/tako/banner-mock.png" alt="">
                    </div>
                    <h1 class="main_page_title">{{ trans('portfolio/tako.header_title') }}</h1>
                    <div>
                        <h3 data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="banner__delivery wow bounceInLeft">
                            {{ trans('portfolio/tako.header_subtitle') }}
                        </h3>
                        <h3 class="banner__od wow bounceInRight"> {{ trans('portfolio/tako.city') }}</h3>
                    </div>
                    <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                        class="section__number-wrap banner__section__number-wrap wow bounceInRight">
                        <span class="section__number">01</span>
                    </div>
                </div>
            </div>
        </section>
        <section class="functional">
            <div class="container">
                <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                    class="section__name-wrap section__name-wrap_right wow bounceInRight">
                    <h3 class="section__name-txt"> {{ trans('portfolio/tako.functional') }}</h3>
                </div>
                <div class="functional__inner">
                    <div class="functional__list">
                        <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="section__number-wrap wow bounceInLeft">
                            <span class="section__number section__number_black">02</span>
                        </div>
                        <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="functional__list-item wow fadeInUp">
                            <p class="functional__list-txt">cms <span class="functional__list-txt_bold">OPENCART</span></p>
                        </div>
                        <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class=" wow fadeInUp">
                            <p class="functional__list-txt">Framework <span class="functional__list-txt_bold">Bootstrap
                                    3</span></p>
                        </div>
                    </div>
                    <div class="functional__descr">
                        <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class=" wow bounceInLeft">
                            <img class="img-responsive" src="/img/portfolio/tako/sushka.png" alt="">
                        </div>
                        <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="functional__descr-txt-wrap wow bounceInRight">
                            <p class="functional__descr-txt"> {{ trans('portfolio/tako.functional_item1') }}</p>
                            <p class="functional__descr-txt">{{ trans('portfolio/tako.functional_item2') }}</p>
                            <p class="functional__descr-txt">{{ trans('portfolio/tako.functional_item3') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="color">
            <div class="container">
                <div class="color__inner">
                    <div class="color__head">
                        <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="section__name-wrap section__name-wrap_2words wow bounceInLeft">
                            {!! trans('portfolio/tako.functional_item3') !!}
                        </div>
                        <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="section__number-wrap color__section__number-wrap wow bounceInRight">
                            <span class="section__number section__number_horizontal section__number_black">03</span>
                        </div>
                    </div>
                    <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                        class="color__ex-wrap wow fadeInUp">
                        <div>
                            <img class="img-responsive" src="/img/portfolio/tako/colors-ex-1.png" alt="">
                        </div>
                        <div>
                            <img class="img-responsive" src="/img/portfolio/tako/colors-ex-2.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="fonts">
            <div class="container">
                <div class="fonts__inner">
                    <div class="color__head">
                        <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="section__number-wrap color__section__number-wrap wow bounceInLeft">
                            <span
                                class="section__number section__number_horizontal section__number_horizontal_right section__number_black">04</span>
                        </div>
                        <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="section__name-wrap section__name-wrap_2words fonts__section__name-wrap wow bounceInRight">
                            {!! trans('portfolio/tako.fonts') !!}
                        </div>
                    </div>
                    <div class="fonts__ex-wrap">
                        <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="fonts__ex wow bounceInLeft">
                            <div>
                                <p class="fonts__geo-big">Geometria</p>
                            </div>
                            <ul class="fonts__geo-wrap">
                                <li class="fonts__geo fonts__geo_heavy">Heavy</li>
                                <li class="fonts__geo fonts__geo_bold">Bold</li>
                                <li class="fonts__geo fonts__geo_med">Medium</li>
                                <li class="fonts__geo fonts__geo_reg">Regular</li>
                            </ul>
                        </div>
                        <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="fonts__ex wow bounceInRight">
                            <div>
                                <p class="fonts__troika-big">Troika</p>
                            </div>
                            <ul class="fonts__geo-wrap fonts__troika-wrap">
                                <li class="fonts__troika">Regular</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="main">
            <div class="main__frag main__frag-1">
                <img src="/img/portfolio/tako/main-top-shad.png" alt="">
            </div>
            <div class="main__frag main__frag-2">
                <img src="/img/portfolio/tako/main-top-pizza.png" alt="">
            </div>
            <div class="container">
                <div class="main__inner">
                    <div class="color__head main__head">
                        <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="section__name-wrap section__name-wrap_2words wow bounceInLeft">
                            <h3 class="section__name-txt section__name-txt_red"> {!! trans('portfolio/tako.main_page') !!}</h3>
                        </div>
                        <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="section__number-wrap color__section__number-wrap wow bounceInRight">
                            <span class="section__number section__number_horizontal">05</span>
                        </div>
                    </div>
                    <div class="row main__content">
                        <div class="col-md-4">
                            <p data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                                class="main__txt wow bounceInLeft">
                                {!! trans('portfolio/tako.task') !!}
                            </p>
                        </div>
                        <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="main__phone wow bounceInLeft">
                            <img src="/img/portfolio/tako/main-phone.png" alt="" class="img-responsive">
                        </div>
                        <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="col-md-8 main__full-wrap wow fadeInUp">
                            <img src="/img/portfolio/tako/main-full.jpg" alt="" class="img-responsive">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="icons">
            <div class="container">
                <h3 data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                    class="icons__head wow fadeInUp">
                    {!! trans('portfolio/tako.icons') !!}
                </h3>
                <div class="icons__inner">
                    <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                        class="icons__item wow flipInY">
                        <div class="icons__pic-wrap">
                            <img class="icons__pic" src="/img/portfolio/tako/icon-1.png" alt="">
                        </div>
                        <p class="icons__txt">{!! trans('portfolio/tako.icons_item1') !!}</p>
                    </div>
                    <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                        class="icons__item wow flipInY">
                        <div class="icons__pic-wrap">
                            <img class="icons__pic" src="/img/portfolio/tako/icon-2.png" alt="">
                        </div>
                        <p class="icons__txt">{!! trans('portfolio/tako.icons_item2') !!}</p>
                    </div>
                    <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                        class="icons__item wow flipInY">
                        <div class="icons__pic-wrap">
                            <img class="icons__pic" src="/img/portfolio/tako/icon-3.png" alt="">
                        </div>
                        <p class="icons__txt">{!! trans('portfolio/tako.icons_item3') !!}</p>
                    </div>
                    <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                        class="icons__item wow flipInY">
                        <div class="icons__pic-wrap">
                            <img class="icons__pic" src="/img/portfolio/tako/icon-4.png" alt="">
                        </div>
                        <p class="icons__txt">Wok</p>
                    </div>
                    <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                        class="icons__item wow flipInY">
                        <div class="icons__pic-wrap">
                            <img class="icons__pic" src="/img/portfolio/tako/icon-5.png" alt="">
                        </div>
                        <p class="icons__txt">{!! trans('portfolio/tako.icons_item4') !!}</p>
                    </div>
                    <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                        class="icons__item wow flipInY">
                        <div class="icons__pic-wrap">
                            <img class="icons__pic" src="/img/portfolio/tako/icon-6.png" alt="">
                        </div>
                        <p class="icons__txt">{!! trans('portfolio/tako.icons_item5') !!}</p>
                    </div>
                    <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                        class="icons__item wow flipInY">
                        <div class="icons__pic-wrap">
                            <img class="icons__pic" src="/img/portfolio/tako/icon-7.png" alt="">
                        </div>
                        <p class="icons__txt">{!! trans('portfolio/tako.icons_item6') !!}</p>
                    </div>
                </div>
                <h3 data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                    class="icons__head icons__cats-txt wow fadeInUp">
                    {!! trans('portfolio/tako.benefits_icon') !!}
                </h3>
                <div class="icons__inner icons__cats">
                    <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                        class="icons__cats-item wow flipInY">
                        <img class="icons__pic" src="/img/portfolio/tako/advant-1.png" alt="">
                    </div>
                    <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                        class="icons__cats-item wow flipInY">
                        <img class="icons__pic" src="/img/portfolio/tako/advant-2.png" alt="">
                    </div>
                    <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                        class="icons__cats-item wow flipInY">
                        <img class="icons__pic" src="/img/portfolio/tako/advant-3.png" alt="">
                    </div>
                    <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                        class="icons__cats-item wow flipInY">
                        <img class="icons__pic" src="/img/portfolio/tako/advant-4.png" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section class="catalog">
            <div class="container">
                <div class="catalog__inner">
                    <div class="color__head catalog__head">
                        <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="section__number-wrap color__section__number-wrap wow bounceInLeft">
                            <span
                                class="section__number section__number_horizontal section__number_horizontal_right section__number_black">06</span>
                        </div>
                        <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="section__name-wrap section__name-wrap_2words catalog__section__name-wrap wow bounceInRight">
                            <h3 class="section__name-txt">{!! trans('portfolio/tako.catalog') !!}</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="col-md-6 wow fadeInUp">
                            <img src="/img/portfolio/tako/catalog-full.jpg" alt="" class="img-responsive">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="product">
            <div class="container">
                <div class="product__inner">
                    <div class="product__head">
                        <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="section__number-wrap product__section__number-wrap wow bounceInRight">
                            <span class="section__number section__number_black">07</span>
                        </div>
                        <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="section__name-wrap section__name-wrap_2words product__section__name-wrap wow bounceInRight">
                            <h3 class="section__name-txt">{!! trans('portfolio/tako.product') !!}</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="col-md-10 col-md-offset-2 wow fadeInUp">
                            <img src="/img/portfolio/tako/product-full.png" alt="" class="img-responsive">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5 col-md-offset-1">
                            <p data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                                class="text-right product__txt wow bounceInLeft">
                                {!! trans('portfolio/tako.product_ingridients') !!}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="adaptive">
            <div class="container">
                <div class="adaptive__inner">
                    <div class="product__head adaptive__head">
                        <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="section__number-wrap product__section__number-wrap wow bounceInRight">
                            <span class="section__number">07</span>
                        </div>
                        <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="section__name-wrap wow bounceInRight">
                            <h3 class="section__name-txt section__name-txt_red text-right"> {!! trans('portfolio/tako.adaptive') !!}</h3>
                        </div>
                    </div>
                    <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                        class="adaptive__mock wow fadeInUp">
                        <img src="/img/portfolio/tako/bottom-mock.png" alt="">
                        <p class="text-right product__txt adaptive__txt">
                            {!! trans('portfolio/tako.adaptive_text') !!}
                        </p>
                    </div>
                </div>
            </div>
            <div class="adaptive__bottom">
                <img src="/img/portfolio/tako/bottom-bg.png" alt="" class="img-responsive">
            </div>
        </section>
    </main>
@endsection

@section('bottom-scripts')
    <script src="{{ asset('js/libs.js') }}"></script>
@endsection
