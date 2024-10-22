@extends('layouts.portfolio-item')

@section('seo')
    <link rel="canonical" href="{{ Request::url() }}">
    <title>{{ trans('portfolio/modoboom.seo_title') }}</title>
    <meta name="description" content="{{ trans('portfolio/modoboom.seo_descr') }}">
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/redesign.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/portfolio/modaboom.css') }}">
@endsection

@section('content')
    <main class="modaboom">
        <!--set meta data-->
        <!--end set meta data-->
        <header class="header">
            <div class="header__container">
                <div class="header__inner">
                    <div class="header__description">
                        <div class=" header__logo wow fadeInDown" data-wow-delay="0s" data-wow-duration="1s"
                            data-wow-iteration="1" data-wow-offset="0 ">
                            <img src="/img/portfolio/modaboom/logo.png" alt="логотип.png">
                        </div>
                        <h1 class=" header__txt wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="1s"
                            data-wow-iteration="1" data-wow-offset="0 ">
                            {{ trans('portfolio/modoboom.header_title') }}
                    </div>
                    <div class=" header__icons wow fadeInDown" data-wow-delay="0.5s" data-wow-duration="1s"
                        data-wow-iteration="1" data-wow-offset="0 ">
                        <div class="header__img-area">
                            <img class="header__icon-img" src="/img/portfolio/our-projects/icons/laptop.png" alt="png">
                        </div>
                        <div class="header__img-area">
                            <img class="header__icon-img" src="/img/portfolio/our-projects/icons/phone.png" alt="png">
                        </div>
                        <div class="header__img-area">
                            <img class="header__icon-img" src="/img/portfolio/our-projects/icons/tablet.png" alt="png">
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <div class=" header__phone-laptop wow fadeInRight"data-wow-delay="0s" uration="2s" iteration="1"
                offset="0" begin="false ">
                <img class="header__img-phone" src="/img/portfolio/modaboom/mobile-home.png" alt="png">
                <img class="header__img-laptop" src="/img/portfolio/modaboom/laptop.png" alt="png">
            </div>
        </header>
        <section class="home">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="title">
                            <div class="wow zoomIn" data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1"
                                data-wow-offset="0">
                                <span class="title__background text-right">Main page</span>
                            </div>
                            <div class="wow zoomIn" data-wow-delay="1s" data-wow-duration="1s" data-wow-iteration="1"
                                data-wow-offset="0">
                                <h3 class="title__h3 text-right">
                                    {{ trans('portfolio/modoboom.main_page') }}
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 home__circle__bg">
                        <div class="lineBg lineBg__home-top">
                            <div class=" lineBg__small wow fadeInUp" data-wow-delay="2s" data-wow-duration="1s"
                                data-wow-iteration="1" data-wow-offset="0 ">
                            </div>
                            <div class=" lineBg__big wow fadeInUp" data-wow-delay="2.3s" data-wow-duration="1s"
                                data-wow-iteration="1" data-wow-offset="0 ">
                            </div>
                            <div class=" lineBg__small wow fadeInUp" data-wow-delay="2s" data-wow-duration="1s"
                                data-wow-iteration="1" data-wow-offset="0 ">
                            </div>
                        </div>
                        <div class=" home__imagebg wow fadeIn"data-wow-delay="0s" uration="1s" iteration="1"
                            offset="0" begin="false ">
                            <div class=" home__imagebg-font hifleft wow slideInLeft"data-wow-delay="2s" uration="1s"
                                iteration="1" offset="0" begin="false ">
                            </div>
                            <img src="/img/portfolio/modaboom/home-page-image.png" alt="">
                            <div class=" home__imagebg-font hifright wow slideInRight"data-wow-delay="2s" uration="1s"
                                iteration="1" offset="0" begin="false ">
                            </div>
                        </div>
                        <div class="lineBg lineBg__home-bottom">
                            <div class=" lineBg__small wow fadeInUp" data-wow-delay="2s" data-wow-duration="1s"
                                data-wow-iteration="1" data-wow-offset="0 ">
                            </div>
                            <div class=" lineBg__big wow fadeInUp"data-wow-delay="2.3s" uration="1s" iteration="1"
                                offset="0" begin="false ">
                            </div>
                            <div class=" lineBg__small wow fadeInUp"data-wow-delay="2s" uration="1s" iteration="1"
                                offset="0" begin="false ">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="color">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="title">
                            <div class="wow zoomIn" data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1"
                                data-wow-offset="0">
                                <span class="title__background text-left">Color</span>
                            </div>
                            <div class="wow zoomIn" data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1"
                                data-wow-offset="0">
                                <h3 class="title__h3 text-left" data-wow-delay="1s">
                                    {{ trans('portfolio/modoboom.colors') }}
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 col-lg-offset-1">
                        <div class="color__hash">
                            <div class="color__hash-gradient">
                                <div class="wow fadeIn" data-wow-delay="0s" data-wow-duration="1s"
                                    data-wow-iteration="1" data-wow-offset="0">
                                    <span class="color__hash-gradient-line pink"></span>
                                </div>
                                <div class="wow flipInX" data-wow-delay="0.5s" data-wow-duration="1s"
                                    data-wow-iteration="1" data-wow-offset="0">
                                    <p>
                                        #e5007d</p>
                                </div>
                            </div>
                            <div class="color__hash-gradient">
                                <span class="color__hash-gradient-line grey wow fadeIn"></span>
                                <div class="wow flipInX" data-wow-delay="0.5s" data-wow-duration="1s"
                                    data-wow-iteration="1" data-wow-offset="0">
                                    <p>
                                        #868786</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-3 col-md-3 col-lg-2">
                        <div class="color__hash">
                            <div class="color__hash-gradient">
                                <div class=" color__hash-gradient-circle red wow fadeIn" data-wow-delay="0.7s"
                                    data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0 ">
                                </div>

                                <div class="wow flipInX" data-wow-delay="1s" data-wow-duration="1s"
                                    data-wow-iteration="1" data-wow-offset="0">
                                    <p>
                                        #f41e1e</p>
                                </div>
                            </div>
                            <div class="color__hash-gradient">
                                <div class=" color__hash-gradient-circle green wow fadeIn" data-wow-delay="0.7s"
                                    data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0 ">
                                </div>
                                <div class="wow flipInX" data-wow-delay="1s" data-wow-duration="1s"
                                    data-wow-iteration="1" data-wow-offset="0">
                                    <p>
                                        #74b65f</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-3 col-md-3 col-lg-2">
                        <div class="color__hash">
                            <div class="color__hash">
                                <div class="color__hash-gradient">
                                    <div class=" color__hash-gradient-circle pink-lovand wow fadeIn" data-wow-delay="1.2s"
                                        data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0 ">
                                    </div>
                                    <div class="wow flipInX" data-wow-delay="1.5s" data-wow-duration="1s"
                                        data-wow-iteration="1" data-wow-offset="0">
                                        <p>
                                            #fff2f2</p>
                                    </div>
                                </div>
                                <div class="color__hash-gradient">
                                    <div class=" color__hash-gradient-circle sea-foman wow fadeIn" data-wow-delay="1.2s"
                                        data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0 "></div>
                                    <div class="wow flipInX" data-wow-delay="1.5s" data-wow-duration="1s"
                                        data-wow-iteration="1" data-wow-offset="0">
                                        <p>
                                            #fffaf0</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-3 col-md-3 col-lg-2">
                        <div class="color__hash">
                            <div class="color__hash">
                                <div class="color__hash-gradient">
                                    <div class=" color__hash-gradient-circle whide wow fadeIn" data-wow-delay="1.7s"
                                        data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0 "></div>
                                    <div class="wow flipInX" data-wow-delay="2s" data-wow-duration="1s"
                                        data-wow-iteration="1" data-wow-offset="0">
                                        <p>
                                            #f3f6ff</p>
                                    </div>
                                </div>
                                <div class="color__hash-gradient">
                                    <div class=" color__hash-gradient-circle whide-shade wow fadeIn" data-wow-delay="1.7s"
                                        data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0 "></div>
                                    <div class="wow flipInX" data-wow-delay="2s" data-wow-duration="1s"
                                        data-wow-iteration="1" data-wow-offset="0">
                                        <p>
                                            #f7fff4</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="typography">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="title">
                            <div class="wow zoomIn" data-wow-delay="2s" data-wow-duration="1s" data-wow-iteration="1"
                                data-wow-offset="0">
                                <span class="title__background text-left">Typography</span>
                            </div>
                            <div class="wow zoomIn" data-wow-delay="1s" data-wow-duration="1s" data-wow-iteration="1"
                                data-wow-offset="0">
                                <h3 class="title__h3 text-right">
                                    {{ trans('portfolio/modoboom.fonts') }}
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <div class="typography__text clearfix">
                            <div class="wow fadeIn" data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1"
                                data-wow-offset="0">
                                <span>а б в г д е ё ж з и й к л м н о<br>
                                    п р с т у ф х ц ч ш щ ъ ы ь э ю я</span>
                            </div>
                            <div class="wow fadeIn" data-wow-delay="0.5s" data-wow-duration="1s" data-wow-iteration="1"
                                data-wow-offset="0">
                                <span>а б в г д е ё ж з и й к л м н о<br>
                                    п р с т у ф х ц ч ш щ ъ ы ь э ю я</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <div class=" typography__tex-letter wow bounceIn" data-wow-delay="1s" data-wow-duration="1s"
                            data-wow-iteration="1" data-wow-offset="0 ">
                            <span>a</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="catalog">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="title">
                            <div class="wow zoomIn" data-wow-delay="1s" data-wow-duration="1s" data-wow-iteration="1"
                                data-wow-offset="0">
                                <h3 class="title__h3 text-right">
                                    {{ trans('portfolio/modoboom.catalog') }}</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12  catalog__circle__bg">
                        <div class="catalog__title__bg">
                            Cataloge page
                        </div>
                        <div class="lineBg lineBg__catalog-top">
                            <div class=" lineBg__small wow fadeInUp" data-wow-delay="2s" data-wow-duration="1s"
                                data-wow-iteration="1" data-wow-offset="0 "></div>
                            <div class=" lineBg__big wow fadeInUp" data-wow-delay="2.3s" data-wow-duration="1s"
                                data-wow-iteration="1" data-wow-offset="0 "></div>
                            <div class=" lineBg__small wow fadeInUp" data-wow-delay="2s" data-wow-duration="1s"
                                data-wow-iteration="1" data-wow-offset="0 "></div>

                        </div>
                        <div class=" catalog__imagebg wow fadeIn" data-wow-delay="0.8s" data-wow-duration="1s"
                            data-wow-iteration="1" data-wow-offset="0 ">
                            <div class="home__imagebg-font hifleft"></div>
                            <img src="/img/portfolio/modaboom/catalog-page-image.jpg" alt="">
                            <div class="home__imagebg-font hifright"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="adaptive">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="title">
                            <div class="wow zoomIn" data-wow-delay="1s" data-wow-duration="1s" data-wow-iteration="1"
                                data-wow-offset="0">
                                <h3 class="title__h3">
                                    {{ trans('portfolio/modoboom.adaptive') }}</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="wow fadeIn" data-wow-delay="2s" data-wow-duration="1s" data-wow-iteration="1"
                            data-wow-offset="0">
                            <img class="adaptive__bag" src="/img/portfolio/modaboom/catalog-page.png" alt="">
                        </div>
                        <div class=" adaptive__phone wow fadeIn" data-wow-delay="1s" data-wow-duration="1s"
                            data-wow-iteration="1" data-wow-offset="0 ">
                            <div class="adaptive__title__bg">
                                Responsive
                            </div>
                            <img class="wow fadeIn" data-wow-delay="1.2s"
                                src="/img/portfolio/modaboom/adaptive-phone.png" alt="">
                        </div>
                        <div class="lineBg lineBg__adaptive-bottom">
                            <div class=" lineBg__small wow fadeInUp" data-wow-delay="2s" data-wow-duration="1s"
                                data-wow-iteration="1" data-wow-offset="0 "></div>
                            <div class=" lineBg__big wow fadeInUp" data-wow-delay="2.3s" data-wow-duration="1s"
                                data-wow-iteration="1" data-wow-offset="0 "></div>
                            <div class=" lineBg__small wow fadeInUp" data-wow-delay="2s" data-wow-duration="1s"
                                data-wow-iteration="1" data-wow-offset="0 "></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="product">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="title">
                            <div class="wow zoomIn" data-wow-delay="1s" data-wow-duration="1s" data-wow-iteration="1"
                                data-wow-offset="0">
                                <h3 class="title__h3 text-right">
                                    {{ trans('portfolio/modoboom.product_page') }}</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 product__circle__bg">
                        <div class=" product__title__bg wow fadeIn" data-wow-delay="2s" data-wow-duration="1s"
                            data-wow-iteration="1" data-wow-offset="0 ">
                            Product page
                        </div>
                        <div class=" product__imagebg wow fadeIn" data-wow-delay="0s" data-wow-duration="1s"
                            data-wow-iteration="1" data-wow-offset="0 ">
                            <div class="home__imagebg-font hifleft"></div>
                            <img src="/img/portfolio/modaboom/catalog-page-image.jpg" alt="">
                            <div class="home__imagebg-font hifright"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="thanks">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="title">
                            <div class="wow zoomIn" data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1"
                                data-wow-offset="0">
                                <span class="title__background text-left">thanks</span>
                            </div>
                            <div class="wow zoomIn" data-wow-delay="1s" data-wow-duration="1s" data-wow-iteration="1"
                                data-wow-offset="0">
                                <h3 class="title__h3 text-right">
                                    {{ trans('portfolio/modoboom.footer') }}</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@section('bottom-scripts')
    <script src="{{ asset('js/libs.js') }}"></script>
@endsection
