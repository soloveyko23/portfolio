@extends('layouts.portfolio-item')

@section('seo')
    <link rel="canonical" href="{{ Request::url() }}">
    <title>{{ trans('portfolio/bereket.seo_title') }}</title>
    <meta name="description" content="{{ trans('portfolio/bereket.seo_descr') }}">
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/redesign.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/portfolio/bereket.css') }}">
@endsection

@section('content')
    <main class="bereket">
        <section class="banner">
            <div class="container">
                <div class="banner__inner">
                    <div name="bounceInLeft" data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1"
                        data-wow-offset="0" class="banner__logo col-md-5 col-md-offset-1 bounceInLeft">
                        <div href="//bereket.od.ua/" target="_blank" rel="nofollow">
                            <img class="img-responsive" src="/img/portfolio/bereket/logo.png" alt="">
                        </div>
                        <h1 class="banner__name">{{ trans('portfolio/bereket.header_title') }}</h1>
                    </div>
                    <div name="bounceInRight" data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1"
                        data-wow-offset="0" class="banner__img bounceInRight">
                        <img class="img-responsive" src="/img/portfolio/bereket/banner.png" alt="">
                    </div>
                    <div class="banner__aim col-md-offset-1">
                        <p name="bounceInUp" data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1"
                            data-wow-offset="0" class="banner__aim-txt bounceInUp">
                            {!! trans('portfolio/bereket.task_title') !!}
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="colors">
            <div class="container">
                <div name="bounceInLeft" data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1"
                    data-wow-offset="0" class="section-name colors__section-name col-md-offset-1 bounceInLeft">
                    <h3 class="section-name-big">{!! trans('portfolio/bereket.colors') !!}</h3>
                </div>
                <div class="row">
                    <div class="colors__inner col-md-8 col-md-offset-2">
                        <div name="fadeInUp" data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1"
                            data-wow-offset="0" class="colors__item colors__item_blue fadeInUp">
                            <p class="colors__name">#024e76</p>
                        </div>
                        <div name="fadeInUp" data-wow-delay="0.2s" data-wow-duration="1s" data-wow-iteration="1"
                            data-wow-offset="0" class="colors__item colors__item_red fadeInUp">
                            <p class="colors__name">#de656d</p>
                        </div>
                        <div name="fadeInUp" data-wow-delay="0.4s" data-wow-duration="1s" data-wow-iteration="1"
                            data-wow-offset="0" class="colors__item colors__item_green fadeInUp">
                            <p class="colors__name">#6db152</p>
                        </div>
                        <div name="fadeInUp" data-wow-delay="0.6s" data-wow-duration="1s" data-wow-iteration="1"
                            data-wow-offset="0" class="colors__item colors__item_gray fadeInUp">
                            <p class="colors__name">#e5edf1</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="fonts">
            <div class="container">
                <div class="row">
                    <div name="bounceInLeft" data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1"
                        data-wow-offset="0" class="col-md-4 fonts__chair bounceInLeft">
                        <img src="/img/portfolio/bereket/chair.png" alt="">
                    </div>
                    <div class="col-md-7">
                        <div name="bounceInRight" data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1"
                            data-wow-offset="0" class="section-name fonts__section-name bounceInRight">
                            <h3 class="section-name-big">{!! trans('portfolio/bereket.fonts') !!}</h3>
                        </div>
                        <div class="fonts__example-wrap">
                            <div class="fonts__wrap-m">
                                <h5 name="fadeInUp" data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1"
                                    data-wow-offset="0" class="fonts__name fonts__name_montserrat fadeInUp">
                                    Montserrat
                                </h5>
                                <div class="fonts__wrap">
                                    <div name="fadeInUp" data-wow-delay="0s" data-wow-duration="1s"
                                        data-wow-iteration="1" data-wow-offset="0" class="fadeInUp">
                                        <ul class="fonts__list fonts__list_border">
                                            <li class="fonts__example fonts__example_m-bl">BLACK</li>
                                            <li class="fonts__example fonts__example_m-eb">Extrabold</li>
                                            <li class="fonts__example fonts__example_m fonts__example_m-b">Bold</li>
                                            <li class="fonts__example fonts__example_m fonts__example_m-m">Medium</li>
                                        </ul>
                                    </div>
                                    <div name="fadeInUp" data-wow-delay="0s" data-wow-duration="1s"
                                        data-wow-iteration="1" data-wow-offset="0" class="fadeInUp">
                                        <ul class="fonts__list">
                                            <li class="fonts__example fonts__example_m fonts__example_m-r">Regular</li>
                                            <li class="fonts__example fonts__example_m fonts__example_m-l">Light</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div name="fadeInUp" data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1"
                                data-wow-offset="0" class="fadeInUp">
                                <h5 class="fonts__name fonts__name_oswald">Oswald</h5>
                                <ul class="fonts__list fonts__list_border">
                                    <li class="fonts__example fonts__example_o-b">BLACK</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="main">
            <div class="container">
                <div name="bounceInRight" data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1"
                    data-wow-offset="0" class="section-name main__section-name bounceInRight">
                    <h3 class="section-name-big">{!! trans('portfolio/bereket.main_page') !!}</h3>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div name="bounceInLeft" data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1"
                            data-wow-offset="0" class="main__card-wrap bounceInLeft">
                            <p class="main__card-txt">{{ trans('portfolio/bereket.card') }}</p>
                            <img class="img-responsive" src="/img/portfolio/bereket/item-card.jpg" alt="">
                        </div>
                        <h3 name="bounceInLeft" data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1"
                            data-wow-offset="0" class="main__func bounceInLeft">
                            {{ trans('portfolio/bereket.functional') }}
                        </h3>
                        <div class="main__func-wrap">
                            <h3 name="fadeInUp" data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1"
                                data-wow-offset="0" class="main__func-item fadeInUp">
                                <img src="/img/portfolio/bereket/func-1.png" alt="">
                                <p class="main__func-txt main__func-txt_left">CMS Opencart PRO</p>
                            </h3>
                            <h3 name="fadeInUp" data-wow-delay="0.2s" data-wow-duration="1s" data-wow-iteration="1"
                                data-wow-offset="0" class="main__func-item fadeInUp">
                                <p class="main__func-txt main__func-txt_right">Framework Bootstrap 3</p>
                                <img src="/img/portfolio/bereket/func-2.png" alt="">
                            </h3>
                            <h3 name="fadeInUp" data-wow-delay="0.4s" data-wow-duration="1s" data-wow-iteration="1"
                                data-wow-offset="0" class="main__func-item fadeInUp">
                                <img src="/img/portfolio/bereket/func-3.png" alt="">
                                <p class="main__func-txt main__func-txt_left">{{ trans('portfolio/bereket.converter') }}
                                </p>
                            </h3>
                            <h3 name="fadeInUp" data-wow-delay="0.6s" data-wow-duration="1s" data-wow-iteration="1"
                                data-wow-offset="0" class="main__func-item fadeInUp">
                                <p class="main__func-txt main__func-txt_right">Полностью адаптивен</p>
                                <img src="/img/portfolio/bereket/func-4.png" alt="">
                            </h3>
                        </div>
                    </div>
                    <div name="bounceInRight" data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1"
                        data-wow-offset="0" class="col-md-7 main__full bounceInRight">
                        <img class="img-responsive" src="/img/portfolio/bereket/home-page.jpg" alt="">
                        <div class="main__full-sofa">
                            <img src="/img/portfolio/bereket/sofa.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="catalog minus-mar">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div name="bounceInLeft" data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1"
                            data-wow-offset="0" class="section-name catalog__section-name bounceInLeft">
                            <h3 class="section-name-big">{!! trans('portfolio/bereket.catalog') !!}</h3>
                        </div>
                    </div>
                </div>
                <div name="bounceInLeft" data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1"
                    data-wow-offset="0" class="row bounceInLeft">
                    <div class="col-md-6">
                        <img class="img-responsive cat-img" src="/img/portfolio/bereket/catalog.jpg" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section class="card minus-mar">
            <div class="container">
                <div class="row">
                    <div name="bounceInRight" data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1"
                        data-wow-offset="0" class="col-md-4 col-md-offset-6 bounceInRight">
                        <div class="section-name card__section-name">
                            <h3 class="section-name-big">{!! trans('portfolio/bereket.product') !!}</h3>
                        </div>
                    </div>
                </div>
                <div name="bounceInRight" data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1"
                    data-wow-offset="0" class="row bounceInRight">
                    <div class="col-md-9 col-md-offset-3 ">
                        <img class="img-responsive" src="/img/portfolio/bereket/product.jpg" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section class="bottom">
            <div class="container">
                <div name="bounceInLeft" data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1"
                    data-wow-offset="0" class="bottom__bed bounceInLeft">
                    <img src="/img/portfolio/bereket/bed.png" alt="">
                </div>
                <div class="bottom__lamp">
                    <h3 name="fadeInUp" data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1"
                        data-wow-offset="0" class="bottom__lamp-anime fadeInUp">
                        {{ trans('portfolio/bereket.animations') }}
                    </h3>
                    <p name="bounceInRight" data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1"
                        data-wow-offset="0" class="bottom__lamp-txt bounceInRight">
                        {{ trans('portfolio/bereket.animations_text') }}
                    </p>
                </div>
                <div class="bottom__mock">
                    <div name="bounceInRight" data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1"
                        data-wow-offset="0" class="bounceInRight">
                        <img class="img-responsive" src="/img/portfolio/bereket/bottom-mock.png" alt="">
                    </div>
                    <div name="bounceIn" data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1"
                        data-wow-offset="0" class="section-name bottom__section-name col-md-offset-1 bounceIn">
                        <!--    <h3 class="section-name-big">Спасибо<span class="section-name-small">за просмотр</span></h3>-->
                        <div class="port-link-wrap">
                            <a class="port-link port-link_black" href="//bereket.od.ua/" rel="nofollow"
                                target="_blank">{{ trans('portfolio/bereket.footer_button') }}</a>
                        </div>
                    </div>
                </div>
                <div class="bottom__chair wow fadeInRight">
                    <img src="/img/portfolio/bereket/bottom-chair.png" alt="">
                </div>
            </div>
        </section>
    </main>
@endsection

@section('bottom-scripts')
    <script src="{{ asset('js/libs.js') }}"></script>
@endsection
