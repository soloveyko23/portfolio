@extends('layouts.portfolio-item')

@section('seo')
    <link rel="canonical" href="{{ Request::url() }}">
    <title>{{ trans('portfolio/lndc.seo_title') }}</title>
    <meta name="description" content="{{ trans('portfolio/lndc.seo_descr') }}">
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/redesign.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/portfolio/lndc.css') }}">
@endsection

@section('content')
    <main class='lndc'>
        <header class="header">
            <div class="header__container">
                <div class="header__inner">
                    <div class="header__description">
                        <div data-wow-duration="1s" class="header__logo wow fadeInDown">
                            <img src="/img/portfolio/lndc/logo.png" alt="логотип.png">
                        </div>
                        <h1 data-wow-delay="0.5s" data-wow-duration="1s" class="header__txt wow fadeInUp">
                            {{ trans('portfolio/lndc.header_title') }}
                        </h1>
                        <div data-wow-delay="0.5s" data-wow-duration="1s" class="header__icons wow fadeInDown">
                            <div class="header__img-area">
                                <img class="header__icon-img" src="/img/portfolio/lndc/icons/laptop.png" alt="png">
                            </div>
                            <div class="header__img-area">
                                <img class="header__icon-img" src="/img/portfolio/lndc/icons/phone.png" alt="png">
                            </div>
                            <div class="header__img-area">
                                <img class="header__icon-img" src="/img/portfolio/lndc/icons/tablet.png" alt="png">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div data-wow-duration="2s" class="header__phone-laptop wowfadeInRight">
                <img class="header__img-phone" src="/img/portfolio/lndc/mobile-home.png" alt="png">
                <img class="header__img-laptop" src="/img/portfolio/lndc/laptop.png" alt="png">
            </div>
        </header>
        <section class="functional">
            <div class="container">
                <div data-wow-duration="1s" class="section-name section-name_left wow bounceInLeft">
                    <h3 class="section-name-txt section-name_left-txt">{{ trans('portfolio/lndc.functional') }}</h3>
                </div>
                <div class="functional__inner">
                    <div data-wow-duration="1s" class="functional__item wow fadeInUp">
                        <div class="functional__img">
                            <img src="/img/portfolio/lndc/func-1.png" alt="">
                        </div>
                        <div>
                            <p class="functional__reg">CMS</p>
                            <p><b class="functional__bold">WordPress</b></p>
                        </div>
                    </div>
                    <div data-wow-duration="1s" class="functional__item wow fadeInUp">
                        <div class="functional__img">
                            <img src="/img/portfolio/lndc/func-2.png" alt="">
                        </div>
                        <div>
                            <p class="functional__reg">Framework</p>
                            <p><b class="functional__bold">Bootstrap 4</b></p>
                        </div>
                    </div>
                    <div data-wow-duration="1s" class="functional__item wow fadeInUp">
                        <div>
                            <p class="functional__reg">{!! trans('portfolio/lndc.lang') !!}</p>
                        </div>
                    </div>
                    <div data-wow-duration="1s" class="functional__item wow fadeInUp">
                        <div>
                            <p class="functional__reg">{!! trans('portfolio/lndc.catalog') !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="color">
            <div class="container">
                <div data-wow-duration="1s" class="section-name section-name_left wow bounceInLeft">
                    <h3 class="section-name-txt color__section-name section-name_left-txt">{!! trans('portfolio/lndc.colors') !!}</h3>
                </div>
                <div class="color__inner">
                    <div data-wow-duration="1s" class="color__item wow bounceInLeft">
                        <p class="color__txt"><span class="color__sharp">#</span>72c9e2</p>
                        <div class="color__circle color__circle_blue"></div>
                    </div>
                    <div data-wow-delay="0.2s" data-wow-duration="1s" class="color__item wow bounceInLeft">
                        <p class="color__txt"><span class="color__sharp">#</span>9acc17</p>
                        <div class="color__circle color__circle_green"></div>
                    </div>
                    <div data-wow-delay="0.4s" data-wow-duration="1s" class="color__item wow bounceInLeft">
                        <p class="color__txt"><span class="color__sharp">#</span>222222</p>
                        <div class="color__circle color__circle_black"></div>
                    </div>
                </div>
            </div>
        </section>

        <section class="font">
            <div class="container">
                <div data-wow-delay="0.4s" data-wow-duration="1s" class="section-name section-name_right wow bounceInRight">
                    <h3 class="section-name-txt section-name_right-txt">{!! trans('portfolio/lndc.fonts') !!}</h3>
                </div>
                <div class="row">
                    <div class="col-md-offset-5 col-md-7">
                        <p data-wow-duration="1s" class="font__roboto-big wow fadeInUp">
                            ROBOTO
                        </p>
                        <div class="font__weight-wrap">
                            <p data-wow-duration="1s" class="font__weight font__weight_black wow fadeInUp">
                                Black
                            </p>
                            <p data-wow-duration="1s" class="font__weight font__weight_bold wow fadeInUp">
                                Bold
                            </p>
                            <p data-wow-duration="1s" class="font__weight font__weight_reg wow fadeInUp">
                                Regular
                            </p>
                        </div>
                        <div>
                            <p data-wow-delay="0.2s" data-wow-duration="1s"
                                class="font__weight font__weight_reg font__weight_upp wow fadeInUp">
                                а б в г д е ё ж з и й к л м н о п р с т у ф х ц ч ш щ ъ ы ь э ю я
                            </p>
                            <p data-wow-delay="0.4s" data-wow-duration="1s"
                                class="font__weight font__weight_reg wow fadeInUp">
                                а б в г д е ё ж з и й к л м н о п р с т у ф х ц ч ш щ ъ ы ь э ю я
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div data-wow-duration="1s" class="col-md-5 font__full-1 wow bounceInLeft">
                        <img class="img-responsive" src="/img/portfolio/lndc/full-1.jpg" alt="">
                    </div>
                </div>
                <div class="row">
                    <div data-wow-duration="1s" class="col-md-offset-3 col-md-7 font__full-2 wow bounceInRight">
                        <img class="img-responsive" src="/img/portfolio/lndc/full-2.jpg" alt="">
                    </div>
                </div>
                <h3 class="font__name">Product page</h3>
            </div>
        </section>

        <section class="adaptive">
            <div class="container">
                <div data-wow-duration="1s" class="section-name section-name_left wow bounceInLeft">
                    <h3 class="section-name-txt section-name_left-txt">{!! trans('portfolio/lndc.adaptive') !!}</h3>
                </div>
                <div class="row">
                    <div data-wow-duration="1s" class="col-md-4 wow bounceInLeft">
                        <p class="adaptive__txt">{!! trans('portfolio/lndc.adaptive_text') !!}</p>
                    </div>
                </div>
                <div data-wow-duration="1s" class="adaptive__img wow fadeInUp">
                    <img class="img-responsive" src="/img/portfolio/lndc/mob-mock.png" alt="">
                </div>
            </div>
        </section>

        <section class="other">
            <div class="container">
                <div data-wow-duration="1s" class="section-name section-name_right wow bounceInRight">
                    <h3 class="section-name-txt section-name_right-txt">{!! trans('portfolio/lndc.other_page') !!}</h3>
                </div>
                <div class="row other__inner">
                    <div data-wow-duration="1s" class="col-md-7 wow bounceInLeft">
                        <img src="/img/portfolio/lndc/full-3.jpg" alt="" class="img-responsive">
                        <img src="/img/portfolio/lndc/full-4.jpg" alt="" class="img-responsive">
                    </div>
                </div>
                <div class="row">
                    <div data-wow-duration="1s" class="col-md-offset-4 col-md-8 other__full-2 wow bounceInRight">
                        <img src="/img/portfolio/lndc/full-5.jpg" alt="" class="img-responsive">
                        <img src="/img/portfolio/lndc/full-6.jpg" alt="" class="img-responsive">
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@section('bottom-scripts')
    <script src="{{ asset('js/libs.js') }}"></script>
@endsection
