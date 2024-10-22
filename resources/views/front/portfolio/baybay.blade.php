@extends('layouts.portfolio-item')

@section('seo')
    <link rel="canonical" href="{{ Request::url() }}">
    <title>{{ trans('portfolio/baybay.seo_title') }}</title>
    <meta name="description" content="{{ trans('portfolio/baybay.seo_descr') }}">
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/redesign.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/portfolio/baybay.css') }}">
@endsection

@section('content')
    <main class='baybay'>
        <header class="header">
            <div class="header__container">
                <div class="header__inner">
                    <div class="header__description">
                        <div data-wow-duration="1s" class="header__logo wow fadeInDown">
                            <img src="/img/portfolio/baybay/logo.png" alt="логотип.png">
                        </div>
                        <h1 data-wow-delay="0.5s" data-wow-duration="1s" class="header__txt wow fadeInUp">
                            {{ trans('portfolio/baybay.header_title') }}
                        </h1>
                        <div data-wow-delay="0.5s" data-wow-duration="1s" class="header__icons wow fadeInDown">
                            <div class="header__img-area">
                                <img class="header__icon-img" src="/img/portfolio/baybay/icons/laptop.png" alt="png">
                            </div>
                            <div class="header__img-area">
                                <img class="header__icon-img" src="/img/portfolio/baybay/icons/phone.png" alt="png">
                            </div>
                            <div class="header__img-area">
                                <img class="header__icon-img" src="/img/portfolio/baybay/icons/tablet.png" alt="png">
                            </div>
                        </div>
                        <a data-wow-duration="2s" class="header__button wow fadeInUp" href="http://baybay.com.ua"
                            rel="nofollow">
                            {{ trans('portfolio/baybay.header_button') }}
                        </a>
                    </div>
                </div>
            </div>
            <div data-wow-duration="2s" class="header__phone-laptop wow fadeInRight">
                <img class="header__img-phone" src="/img/portfolio/baybay/mobile-home.png" alt="png">
                <img class="header__img-laptop" src="/img/portfolio/baybay/laptop.png" alt="png">
            </div>
        </header>

        <div data-wow-duration="1s" class="baybay__fragment-to-bottom baybay__fragment-to-bottom_1 wow bounceIn">
            <img src="/img/portfolio/baybay/fragment-tobottom.png" alt="">
        </div>

        <section class="container baybay__aim">
            <div class="row">
                <div class="col-md-7 col-md-offset-3">
                    <div data-wow-duration="1s" class="wow fadeInRight">
                        <h5 class="baybay__head "> {{ trans('portfolio/baybay.task') }}</h5>
                    </div>
                    <div data-wow-duration="1s" class="wow fadeInUp">
                        <p class="baybay__norm-txt">
                            {{ trans('portfolio/baybay.task_text') }}
                        </p>
                    </div>
                </div>
                <div data-wow-duration="1s" class="baybay__aim-img wow fadeInLeft">
                    <img src="/img/portfolio/baybay/aim-fragment.png" alt="">
                </div>
            </div>
        </section>

        <section class="container baybay__color">
            <div data-wow-duration="1s" class="wow bounceInRight">
                <h5 class="baybay__head baybay__head_right baybay__color_name baybay__border_bottom">COLOR</h5>
            </div>
            <div class="baybay__color-cont">
                <div data-wow-delay="0.3s" data-wow-duration="1s" class="baybay__color-wrap wow fadeInUp">
                    <div>
                        <img src="/img/portfolio/baybay/color1.png" alt="">
                    </div>
                    <div>
                        <p class="baybay__color-name">#EA5798</p>
                    </div>
                </div>
                <div data-wow-delay="0.5s" data-wow-duration="1s" class="baybay__color-wrap wow fadeInUp">
                    <div>
                        <img src="/img/portfolio/baybay/color2.png" alt="">
                    </div>
                    <div>
                        <p class="baybay__color-name">#32a3b7</p>
                    </div>
                </div>

                <div data-wow-delay="0.7s" data-wow-duration="1s" class="baybay__color-wrap wow fadeInUp">
                    <div>
                        <img src="/img/portfolio/baybay/color3.png" alt="">
                    </div>
                    <div>
                        <p class="baybay__color-name">#f66449</p>
                    </div>
                </div>

                <div data-wow-delay="0.9s" data-wow-duration="1s" class="baybay__color-wrap wow fadeInUp">
                    <div>
                        <img src="/img/portfolio/baybay/color4.png" alt="">
                    </div>
                    <div>
                        <p class="baybay__color-name">#ffca00</p>
                    </div>
                </div>

                <div data-wow-delay="1.1s" data-wow-duration="1s" class="baybay__color-wrap wow fadeInUp">
                    <div>
                        <img src="/img/portfolio/baybay/color5.png" alt="">
                    </div>
                    <div>
                        <p class="baybay__color-name">#222222</p>
                    </div>
                </div>
            </div>
        </section>

        <div class="baybay__fragment-to-bottom baybay__fragment-to-bottom_2 baybay__fragment-to-bottom_right">
            <div data-wow-duration="1s" class="wow fadeInLeft">
                <img src="/img/portfolio/baybay/fragment-tobottom.png" alt="">
            </div>
        </div>

        <section class="container baybay__typo">
            <div>
                <div data-wow-duration="1s" class="wow bounceInLeft">
                    <p class="baybay__border_bottom baybay__border_bottom_left baybay__head">TYPOGRAPHY</p>
                </div>
                <div class="baybay__typo-wrap">
                    <div class="baybay__typo-inner">
                        <div data-wow-duration="1s" class="wow bounceInLeft">
                            <p class="baybay__typo-head">GEOMETRIA</p>
                        </div>
                        <div data-wow-duration="1s" class="wow fadeInUp">
                            <p class="baybay__typo-example">а б в г д е ё ж з и й к л м н о п р с т у ф х ц ч ш щ ъ ы ь э ю
                                я</p>
                        </div>
                    </div>
                    <div class="baybay__typo-inner-exa">
                        <div data-wow-delay="0.3s" data-wow-duration="1s" class="wow fadeInUp">
                            <p class="baybay__typo-fonts baybay__typo-heavy">Heavy</p>
                        </div>
                        <div data-wow-delay="0.5s" data-wow-duration="1s" class="wow fadeInUp">
                            <p class="baybay__typo-fonts baybay__typo-bold">Bold</p>
                        </div>
                        <div data-wow-delay="0.7s" data-wow-duration="1s" class="wow fadeInUp">
                            <p class="baybay__typo-fonts baybay__typo-reg">Regular</p>
                        </div>
                        <div data-wow-delay="0.9s" data-wow-duration="1s" class="wow fadeInUp">
                            <p class="baybay__typo-fonts baybay__typo-light">Light</p>
                        </div>
                    </div>
                </div>
            </div>
            <div data-wow-duration="1s" class="baybay__typo-img wow bounceInRight">
                <img src="/img/portfolio/baybay/typo-fragment.png" alt="">
            </div>
        </section>

        <section class="relative baybay__home-cont">
            <div data-wow-duration="1s"
                class="baybay__fragment-to-top baybay__fragment-to-top_left baybay__home-line wow bounceInLeft">
                <img src="/img/portfolio/baybay/fragment-totop.png" alt="">
            </div>
            <div class="container baybay__home">
                <div class="row">
                    <div data-wow-duration="1s" class="wow bounceInLeft">
                        <img class="baybay__home-frag" src="/img/portfolio/baybay/home-frag.png" alt="">
                    </div>
                    <p class="baybay__home-txt">Home page baybay</p>
                    <div class="row">
                        <div data-wow-duration="1s" class="col-lg-7 col-lg-offset-1 wow fadeInUp">
                            <img class="baybay__shad img-responsive" src="/img/portfolio/baybay/home.jpg" alt="">
                        </div>
                        <div class="col-lg-4">
                            <div data-wow-duration="1s" class="baybay__home-head-wrap wow bounceInRight">
                                <h5 class="baybay__home-head">Home</h5>
                                <p class="baybay__home-head text-right">Page</p>
                            </div>
                            <div data-wow-duration="1s" class="baybay__home-descr baybay__home-descr_first wow bounceIn">
                                <p class="baybay__norm-txt text-right">
                                    {{ trans('portfolio/baybay.frameworks1') }} <br>
                                    <b>Founation 6</b>
                                </p>
                                <span class="baybay__home-descr-num baybay__home-descr-num_right">1</span>
                            </div>

                            <div data-wow-duration="1s" class="baybay__home-descr wow bounceIn">
                                <span class="baybay__home-descr-num baybay__home-descr-num_left">2</span>
                                <p class="baybay__norm-txt">
                                    {{ trans('portfolio/baybay.frameworks2') }} <b>Vue.js</b>
                                </p>
                            </div>

                            <div data-wow-duration="1s" class="baybay__home-descr wow bounceIn">
                                <p class="baybay__norm-txt text-right">
                                    {{ trans('portfolio/baybay.frameworks3') }} <b>Laravel 5</b>
                                </p>
                                <span class="baybay__home-descr-num baybay__home-descr-num_right">3</span>
                            </div>

                            <div data-wow-duration="1s" class="wow bounceInRight">
                                <img class="baybay__home-frag-2" src="/img/portfolio/baybay/home-frag-2.png"
                                    alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="container baybay__mobile-cont">
            <div class="baybay__mobile">
                <div class="baybay__mobile-pic">
                    <div data-wow-duration="1s" class="wow bounceInLeft">
                        <img src="/img/portfolio/baybay/mobile-frag.png" alt="">
                    </div>
                    <div data-wow-duration="1s" class="baybay__home-descr baybay__mobile-descr wow bounceIn">
                        <span class="baybay__home-descr-num baybay__home-descr-num_left">4</span>
                        <p class="baybay__norm-txt">
                            {!! trans('portfolio/baybay.adaptive') !!}
                        </p>
                    </div>
                </div>
                <div class="baybay__mobile-phone">
                    <div class="baybay__home-head-wrap baybay__mobile-name">
                        <div data-wow-duration="1s" class="wow bounceIn">
                            <h5 class="baybay__home-head baybay__mobile-phone-head">MOBILE</h5>
                        </div>
                        <p class="baybay__home-head text-right wow bounceIn">Version</p>
                    </div>
                    <div data-wow-duration="1s" class="mobile-version__img-field wow bounceInRight">
                        <img src="/img/portfolio/baybay/iphone.png" alt="">
                    </div>
                </div>
            </div>
        </section>

        <section class="relative baybay__catalog-cont">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div data-wow-duration="1s"
                            class="baybay__home-head-wrap baybay__catalog-name-wrap wow bounceInLeft">
                            <h5 class="baybay__home-head">Cataloge page</h5>
                        </div>
                        <div data-wow-duration="1s" class="wow fadeInUp">
                            <img class="baybay__shad img-responsive" src="/img/portfolio/baybay/catalog.jpg"
                                alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 baybay__catalog-product relative">
                        <div data-wow-duration="1s"
                            class="baybay__home-head-wrap baybay__catalog-name-wrap baybay__catalog-name-wrap-product wow bounceInRight">
                            <h5 class="baybay__home-head">Product card <br> page</h5>
                        </div>
                        <div name="fwow adeInUp" data-wow-duration="1s">
                            <img class="baybay__shad img-responsive" src="/img/portfolio/baybay/product.jpg"
                                alt="">
                        </div>
                        <div data-wow-duration="1s" class="wow fadeInUp">
                            <img class="baybay__catalog-frag" src="/img/portfolio/baybay/catalog-frag.png"
                                alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="baybay__fragment-to-top baybay__fragment-to-top_right baybay__catalog-line">
                <img src="/img/portfolio/baybay/fragment-totop.png" alt="">
            </div>
        </section>

        <section class="baybay__func">
            <div class="container">
                <div data-wow-duration="1s"
                    class="baybay__home-head-wrap baybay__catalog-name-wrap baybay__catalog-name-wrap-product baybay__func-bef wow bounceInLeft">
                    <h5 class="baybay__home-head">Functional</h5>
                </div>
                <div class="row baybay__func-advant">
                    <div data-wow-delay="0.3s" data-wow-duration="1s" class="col-lg-3 wow fadeInUp">
                        <img class="baybay__func-cat-img" src="/img/portfolio/baybay/import.png" alt="">
                        <p class="baybay__norm-txt text-center">{!! trans('portfolio/baybay.functions1') !!}</p>
                    </div>

                    <div data-wow-delay="0.5s" data-wow-duration="1s" class="col-lg-3 wow fadeInUp">
                        <img class="baybay__func-cat-img" src="/img/portfolio/baybay/controls.png" alt="">
                        <p class="baybay__norm-txt text-center">{!! trans('portfolio/baybay.functions2') !!}</p>
                    </div>

                    <div data-wow-delay="0.7s" data-wow-duration="1s" class="col-lg-3 wow fadeInUp">
                        <img class="baybay__func-cat-img" src="/img/portfolio/baybay/curriculum.png" alt="">
                        <p class="baybay__norm-txt text-center">{!! trans('portfolio/baybay.functions3') !!}</p>
                    </div>

                    <div data-wow-delay="0.9s" data-wow-duration="1s" class="col-lg-3 wow fadeInUp">
                        <img class="baybay__func-cat-img" src="/img/portfolio/baybay/piggy-bank.png" alt="">
                        <p class="baybay__norm-txt text-center">{!! trans('portfolio/baybay.functions4') !!}</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="baybay__other relative">
            <div data-wow-duration="1s"
                class="baybay__fragment-to-top baybay__fragment-to-top_left baybay__other-line wow bounceInLeft">
                <img src="/img/portfolio/baybay/fragment-totop.png" alt="">
            </div>
            <div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div data-wow-duration="1s"
                                class="baybay__home-head-wrap baybay__catalog-name-wrap baybay__catalog-name-wrap-product baybay__other-name wow bounceInLeft">
                                <h5 class="baybay__home-head">Other pages</h5>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-4 baybay__other-first">
                            <div data-wow-duration="1s" class="wow fadeInUp">
                                <img class="baybay__shad img-responsive" src="/img/portfolio/baybay/1-1.jpg"
                                    alt="">
                            </div>

                            <div data-wow-duration="1s" class="wow fadeInUp">
                                <img class="baybay__shad img-responsive" src="/img/portfolio/baybay/1-2.jpg"
                                    alt="">
                            </div>

                            <div data-wow-duration="1s" class="wow fadeInUp">
                                <img class="baybay__shad img-responsive" src="/img/portfolio/baybay/1-3.jpg"
                                    alt="">
                            </div>

                            <div data-wow-duration="1s" class="wow fadeIn">
                                <img class="baybay__shad img-responsive" src="/img/portfolio/baybay/1-4.jpg"
                                    alt="">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 baybay__other-sec">
                            <div name="fadeInUp" data-wow-duration="1s">
                                <img class="baybay__shad img-responsive" src="/img/portfolio/baybay/2-1.jpg"
                                    alt="">
                            </div>
                            <div data-wow-duration="1s" class="wow fadeInUp">
                                <img class="baybay__shad img-responsive" src="/img/portfolio/baybay/2-2.jpg"
                                    alt="">
                            </div>
                            <div data-wow-duration="1s" class="wow fadeIn">
                                <img class="baybay__shad img-responsive" src="/img/portfolio/baybay/2-3.jpg"
                                    alt="">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div data-wow-duration="1s" class="wow fadeInUp">
                                <img class="baybay__shad img-responsive" src="/img/portfolio/baybay/3-1.jpg"
                                    alt="">
                            </div>
                            <div data-wow-duration="1s" class="wow fadeInUp">
                                <img class="baybay__shad img-responsive" src="/img/portfolio/baybay/3-2.jpg"
                                    alt="">
                            </div>
                            <div data-wow-duration="1s" class="wow fadeInUp">
                                <img class="baybay__shad img-responsive" src="/img/portfolio/baybay/3-3.jpg"
                                    alt="">
                            </div>
                            <div data-wow-duration="1s" class="wow fadeInUp">
                                <img class="baybay__shad img-responsive" src="/img/portfolio/baybay/3-4.jpg"
                                    alt="">
                            </div>
                            <div data-wow-duration="1s" class="wow fadeIn">
                                <img class="baybay__shad img-responsive" src="/img/portfolio/baybay/3-5.jpg"
                                    alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="baybay__end-wrap">
                <h4 class="baybay__end">BAYBAY</h4>
                <div class="port-link-wrap" style="position: relative; z-index: 12;">
                    <a class="port-link port-link_black" href="http://baybay.com.ua/" rel="nofollow"
                        target="_blank">{{ trans('portfolio/baybay.footer_button') }}</a>
                </div>
            </div>
            <div class="baybay__fragment-to-bottom baybay__fragment-to-bottom_right baybay__other-frag">
                <img src="/img/portfolio/baybay/fragment-tobottom.png" alt="">
            </div>
        </section>
    </main>
@endsection

@section('bottom-scripts')
    <script src="{{ asset('js/libs.js') }}"></script>
@endsection
