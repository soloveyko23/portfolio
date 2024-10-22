@extends('layouts.portfolio-item')

@section('seo')
    <link rel="canonical" href="{{ Request::url() }}">
    <title>{{ trans('portfolio/p3dstudio.seo_title') }}</title>
    <meta name="description" content="{{ trans('portfolio/p3dstudio.seo_descr') }}">
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/redesign.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/portfolio/p3dstudio.css') }}">
@endsection

@section('content')
    <main class='p3d'>
        <header class="header">
            <div class="header__container">
                <div class="header__inner">
                    <div class="header__description">
                        <div data-wow-duration="1s" class="header__logo wow fadeInDown">
                            <img src="/img/portfolio/p3d/logo.png" alt="логотип.png">
                        </div>
                        <h1 data-wow-delay="0.5s" data-wow-duration="1s" class="header__txt wow fadeInUp">
                            {{ trans('portfolio/p3dstudio.header_title') }}
                        </h1>
                        <div data-wow-delay="0.5s" data-wow-duration="1s" class="header__icons wow fadeInDown">
                            <div class="header__img-area">
                                <img class="header__icon-img" src="/img/portfolio/p3d/icons/laptop.png" alt="png">
                            </div>
                            <div class="header__img-area">
                                <img class="header__icon-img" src="/img/portfolio/p3d/icons/phone.png" alt="png">
                            </div>
                            <div class="header__img-area">
                                <img class="header__icon-img" src="/img/portfolio/p3d/icons/tablet.png" alt="png">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div data-wow-duration="2s" class="header__phone-laptop wow fadeInRight">
                <img class="header__img-phone" src="/img/portfolio/p3d/mobile-home.png" alt="png">
                <img class="header__img-laptop" src="/img/portfolio/p3d/laptop.png" alt="png">
            </div>
        </header>
        <section class="functional">
            <div class="container">
                <div data-wow-duration="1s" class="section-name section-name_left wow fadeInUp">
                    <h3 class="section-name-txt">{{ trans('portfolio/p3dstudio.functional') }}</h3>
                </div>
                <div class="line-l"></div>
                <div class="line-mid"></div>
                <div class="line-r"></div>
                <div class="functional__instr"><img src="/img/portfolio/p3d/instr-txt.png" alt=""></div>
                <div data-wow-duration="1s" class="functional__inner wow bounceInLeft">
                    <div>
                        <div class="functional__item">
                            <div class="functional__img">
                                <img src="/img/portfolio/p3d/wp.png" alt="">
                            </div>
                            <div>
                                <p class="functional__reg">CMS</p>
                                <p><b class="functional__bold">WordPress</b></p>
                            </div>
                        </div>
                        <div class="functional__item functional__item_2">
                            <div class="functional__img">
                                <img src="/img/portfolio/lndc/func-2.png" alt="">
                            </div>
                            <div>
                                <p class="functional__reg">Framework</p>
                                <p><b class="functional__bold">Bootstrap 4</b></p>
                            </div>
                        </div>
                    </div>
                    <div class="functional__item">
                        <div>
                            {!! trans('portfolio/p3dstudio.functional_item') !!}
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="colors">
            <div class="container">
                <div data-wow-duration="1s" class="section-name section-name_right colors__section-name wow bounceInRight">
                    <h3 class="section-name-txt"> {!! trans('portfolio/p3dstudio.color') !!}</h3>
                </div>
                <div data-wow-duration="1s" class="colors__inner wow fadeInUp">
                    <div class="colors__item colors__item_blue">
                        <img src="/img/portfolio/p3d/color-1.png" alt="">
                        <p class="colors__txt">#0097ff</p>
                    </div>
                    <div class="colors__item colors__item_yellow">
                        <img src="/img/portfolio/p3d/color-2.png" alt="">
                        <p class="colors__txt">#ff9700</p>
                    </div>
                    <div class="colors__item colors__item_black">
                        <img src="/img/portfolio/p3d/color-3.png" alt="">
                        <p class="colors__txt">#0e0e0e</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="font">
            <div data-wow-duration="1s" class="section-name section-name_center wow bounceInLeft">
                <h3 class="section-name-txt">{!! trans('portfolio/p3dstudio.font') !!}</h3>
            </div>
            <div class="font__inner">
                <div class="container">
                    <p data-wow-duration="1s" class="font__gotham-big wow fadeInUp">
                        Gotham pro
                    </p>
                    <div data-wow-duration="1s" class="font__weight-wrap wow fadeInUp">
                        <p class="font__weight font__weight_black">Black</p>
                        <p class="font__weight font__weight_bold">Bold</p>
                        <p class="font__weight font__weight_med">Medium</p>
                        <p class="font__weight font__weight_reg">Regular</p>
                    </div>
                    <div>
                        <p data-wow-duration="1s" class="font__weight font__weight_reg font__weight_upp wow bounceInLeft">
                            а б в г д е ё ж з и й к л м н о п р с т у ф х ц ч ш щ ъ ы ь э ю я
                        </p>
                        <p data-wow-duration="1s" class="font__weight font__weight_reg wow bounceInRight">
                            а б в г д е ё ж з и й к л м н о п р с т у ф х ц ч ш щ ъ ы ь э ю я
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="main">
            <div class="container">
                <div data-wow-duration="1s"
                    class="section-name section-name_right colors__section-name wow bounceInRight">
                    <h3 class="section-name-txt">{!! trans('portfolio/p3dstudio.main_page') !!}</h3>
                </div>
                <div class="main__inner">
                    <div data-wow-duration="1s" class="main-frag main-frag-1 wow fadeInUp">
                        <img src="/img/portfolio/p3d/main-frag-1.png" alt="">
                    </div>
                    <div data-wow-duration="1s" class="main-frag main-frag-2 wow fadeInUp">
                        <img src="/img/portfolio/p3d/main-frag-2.png" alt="">
                    </div>
                    <div data-wow-duration="1s" class="main-frag main-frag-3 wow fadeInUp">
                        <img src="/img/portfolio/p3d/main-frag-3.png" alt="">
                    </div>
                    <div data-wow-duration="1s" class="main-frag main-frag-4 wow fadeInUp">
                        <img src="/img/portfolio/p3d/main-frag-4.png" alt="">
                    </div>
                    <div data-wow-duration="1s" class="col-md-8 col-md-offset-4 main__full wow fadeInUp">
                        <div class="row">
                            <img class="img-responsive" src="/img/portfolio/p3d/main-full.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="other">
            <div class="container">
                <div data-wow-duration="1s" class="section-name section-name_right other__section-name wow bounceInLeft">
                    <h3 class="section-name-txt">{!! trans('portfolio/p3dstudio.other_page') !!}</h3>
                </div>
                <div class="other__inner">
                    <div data-wow-duration="1s" class="main-frag other-frag wow bounceInLeft">
                        <img src="/img/portfolio/p3d/main-frag-3.png" alt="">
                    </div>
                </div>
            </div>
            <div data-wow-duration="1s" class="other__bottom-mock wow zoomIn">
                <img class="img-responsive" src="/img/portfolio/p3d/table-bottom.png" alt="">
            </div>
            <div class="container relative">
                <div class="row">
                    <div data-wow-duration="1s" class="col-md-6 other__page-1 wow zoomInLeft">
                        <img src="/img/portfolio/p3d/other-1.jpg" alt="" class="img-responsive other__shadow">
                    </div>
                </div>
                <div class="row">
                    <div data-wow-duration="1s" class="col-md-6 col-md-offset-3 other__page-2 wow zoomInLeft">
                        <img src="/img/portfolio/p3d/other-2.jpg" alt="" class="img-responsive other__shadow">
                    </div>
                </div>
                <div class="row">
                    <div data-wow-duration="1s" class="col-md-6 col-md-offset-6 other__page-3 wow zoomInLeft">
                        <img src="/img/portfolio/p3d/other-3.jpg" alt="" class="img-responsive other__shadow">
                    </div>
                </div>
                <div class="section-name section-name_right other-bottom__section-name">

                    <!--                <h3 class="section-name-txt other__section-name-txt">СПАСИБО<span class="section-name-txt_inner">За просмотр</span></h3>-->
                </div>
                <div class="other__txt">
                    <img src="/img/portfolio/p3d/other-txt.png" alt="">
                </div>
                <div class="main-frag other-frag-1">
                    <img src="/img/portfolio/p3d/main-frag-1.png" alt="">
                </div>
                <div class="main-frag other-frag-3">
                    <img src="/img/portfolio/p3d/main-frag-3.png" alt="">
                </div>
            </div>
        </section>
    </main>
@endsection

@section('bottom-scripts')
    <script src="{{ asset('js/libs.js') }}"></script>
@endsection
