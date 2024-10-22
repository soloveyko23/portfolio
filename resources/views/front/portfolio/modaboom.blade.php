@extends('layouts.portfolio-item')

@section('seo')
    <link rel="canonical" href="{{ Request::url() }}">
    <title>{{ trans('portfolio/modaboom.seo_title') }}</title>
    <meta name="description" content="{{ trans('portfolio/modaboom.seo_descr') }}">
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/redesign.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/portfolio/modaboom.css') }}">
@endsection
@section('content')
    <main class="modaboom">
        <header class="header">
            <div class="header__container">
                <div class="header__inner">
                    <div class="header__description">
                        <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow fadeInDown header__logo">
                            <img src="/img/portfolio/modaboom/logo.png" alt="логотип.png">
                        </div>
                        <div data-wow-delay="0.5s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow fadeInUp header__txt" el="h1">
                            {{ trans('portfolio/modaboom.header_title') }}
                        </div>
                        <div data-wow-delay="0.5s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow fadeInDown header__icons">
                            <div class="header__img-area">
                                <img class="header__icon-img" src="/img/portfolio/our-projects/icons/laptop.png"
                                    alt="png">
                            </div>
                            <div class="header__img-area">
                                <img class="header__icon-img" src="/img/portfolio/our-projects/icons/phone.png"
                                    alt="png">
                            </div>
                            <div class="header__img-area">
                                <img class="header__icon-img" src="/img/portfolio/our-projects/icons/tablet.png"
                                    alt="png">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div data-wow-delay="0s" data-wow-duration="2s" data-wow-iteration="1" data-wow-offset="0"
                class="wow fadeInRight header__phone-laptop">
                <img class="header__img-phone" src="/img/portfolio/modaboom/mobile-home.png" alt="png">
                <img class="header__img-laptop" src="/img/portfolio/modaboom/laptop.png" alt="png">
            </div>
        </header>
        <section class="home">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="title">
                            <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                                class="wow zoomIn">
                                <span class="title__background text-right">Main page</span>
                            </div>
                            <div data-wow-delay="1s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                                class="wow zoomIn">
                                <h3 class="title__h3 text-right">
                                    {!! trans('portfolio/modaboom.main_page') !!}
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 home__circle__bg">
                        <div class="lineBg lineBg__home-top">
                            <div data-wow-delay="2s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                                class="wow fadeInUp lineBg__small">
                            </div>
                            <div data-wow-delay="2.3s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                                class="wow fadeInUp lineBg__big">
                            </div>
                            <div data-wow-delay="2s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                                class="wow fadeInUp lineBg__small">
                            </div>
                        </div>
                        <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow fadeIn home__imagebg">
                            <div data-wow-delay="2s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                                class="wow slideInLeft home__imagebg-font hifleft">
                            </div>
                            <img src="/img/portfolio/modaboom/home-page-image.png" alt="">
                            <div data-wow-delay="2s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                                class="wow slideInRight home__imagebg-font hifright">
                            </div>
                        </div>
                        <div class="lineBg lineBg__home-bottom">
                            <div data-wow-delay="2s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                                class="wow fadeInUp lineBg__small">
                            </div>
                            <div data-wow-delay="2.3s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                                class="wow fadeInUp lineBg__big">
                            </div>
                            <div data-wow-delay="2s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                                class="wow fadeInUp lineBg__small">
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
                            <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                                class="wow zoomIn">
                                <span class="title__background text-left">Color</span>
                            </div>
                            <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                                class="wow zoomIn">
                                <h3 class="title__h3 text-left" data-wow-delay="1s">
                                    {!! trans('portfolio/modaboom.colors') !!}
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 col-lg-offset-1">
                        <div class="color__hash">
                            <div class="color__hash-gradient">
                                <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1"
                                    data-wow-offset="0" class="wow fadeIn">
                                    <span class="color__hash-gradient-line pink"></span>
                                </div>
                                <div data-wow-delay="0.5s" data-wow-duration="1s" data-wow-iteration="1"
                                    data-wow-offset="0" class="wow flipInX">
                                    <p>
                                        #e5007d</p>
                                </div>
                            </div>
                            <div class="color__hash-gradient">
                                <span class="color__hash-gradient-line grey wow fadeIn"></span>
                                <div data-wow-delay="0.5s" data-wow-duration="1s" data-wow-iteration="1"
                                    data-wow-offset="0" class="wow flipInX">
                                    <p>
                                        #868786</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-3 col-md-3 col-lg-2">
                        <div class="color__hash">
                            <div class="color__hash-gradient">
                                <div data-wow-delay="0.7s" data-wow-duration="1s" data-wow-iteration="1"
                                    data-wow-offset="0" class="wow fadeIn color__hash-gradient-circle red">
                                </div>
                                <div data-wow-delay="1s" data-wow-duration="1s" data-wow-iteration="1"
                                    data-wow-offset="0" class="wow flipInX">
                                    <p>
                                        #f41e1e</p>
                                </div>
                            </div>
                            <div class="color__hash-gradient">
                                <div data-wow-delay="0.7s" data-wow-duration="1s" data-wow-iteration="1"
                                    data-wow-offset="0" class="wow fadeIn color__hash-gradient-circle green">
                                </div>
                                <div data-wow-delay="1s" data-wow-duration="1s" data-wow-iteration="1"
                                    data-wow-offset="0" class="wow flipInX">
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
                                    <div data-wow-delay="1.2s" data-wow-duration="1s" data-wow-iteration="1"
                                        data-wow-offset="0" class="wow fadeIn color__hash-gradient-circle pink-lovand">
                                    </div>
                                    <div data-wow-delay="1.5s" data-wow-duration="1s" data-wow-iteration="1"
                                        data-wow-offset="0" class="wow flipInX">
                                        <p>
                                            #fff2f2</p>
                                    </div>
                                </div>
                                <div class="color__hash-gradient">
                                    <div data-wow-delay="1.2s" data-wow-duration="1s" data-wow-iteration="1"
                                        data-wow-offset="0" class="wow fadeIn color__hash-gradient-circle sea-foman">
                                    </div>
                                    <div data-wow-delay="1.5s" data-wow-duration="1s" data-wow-iteration="1"
                                        data-wow-offset="0" class="wow flipInX">
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
                                    <div data-wow-delay="1.7s" data-wow-duration="1s" data-wow-iteration="1"
                                        data-wow-offset="0" class="wow fadeIn color__hash-gradient-circle whide"></div>
                                    <div data-wow-delay="2s" data-wow-duration="1s" data-wow-iteration="1"
                                        data-wow-offset="0" class="wow flipInX">
                                        <p>
                                            #f3f6ff</p>
                                    </div>
                                </div>
                                <div class="color__hash-gradient">
                                    <div data-wow-delay="1.7s" data-wow-duration="1s" data-wow-iteration="1"
                                        data-wow-offset="0" class="wow fadeIn color__hash-gradient-circle whide-shade">
                                    </div>
                                    <div data-wow-delay="2s" data-wow-duration="1s" data-wow-iteration="1"
                                        data-wow-offset="0" class="wow flipInX">
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
                            <div data-wow-delay="2s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                                class="wow zoomIn">
                                <span class="title__background text-left">Typography</span>
                            </div>
                            <div data-wow-delay="1s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                                class="wow zoomIn">
                                <h3 class="title__h3 text-right">
                                    {!! trans('portfolio/modaboom.fonts') !!}
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <div class="typography__text clearfix">
                            <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                                class="wow fadeIn">
                                <span>а б в г д е ё ж з и й к л м н о<br>
                                    п р с т у ф х ц ч ш щ ъ ы ь э ю я</span>
                            </div>
                            <div data-wow-delay="0.5s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                                class="wow fadeIn">
                                <span>а б в г д е ё ж з и й к л м н о<br>
                                    п р с т у ф х ц ч ш щ ъ ы ь э ю я</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <div data-wow-delay="1s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow bounceIn typography__tex-letter">
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
                            <div data-wow-delay="1s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                                class="wow zoomIn">
                                <h3 class="title__h3 text-right">
                                    {!! trans('portfolio/modaboom.catalog') !!}
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
                            <div data-wow-delay="2s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                                class="wow fadeInUp lineBg__small"></div>
                            <div data-wow-delay="2.3s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                                class="wow fadeInUp lineBg__big"></div>
                            <div data-wow-delay="2s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                                class="wow fadeInUp lineBg__small"></div>
                        </div>
                        <div data-wow-delay="0.8s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow fadeIn catalog__imagebg">
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
                            <div data-wow-delay="1s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                                class="wow zoomIn">
                                <h3 class="title__h3">
                                    {!! trans('portfolio/modaboom.adaptive') !!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div data-wow-delay="2s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow fadeIn">
                            <img class="adaptive__bag" src="/img/portfolio/modaboom/catalog-page.png" alt="">
                        </div>
                        <div data-wow-delay="1s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow fadeIn adaptive__phone">
                            <div class="adaptive__title__bg">
                                Responsive
                            </div>
                            <img class="wow fadeIn" data-wow-delay="1.2s"
                                src="/img/portfolio/modaboom/adaptive-phone.png" alt="">
                        </div>
                        <div class="lineBg lineBg__adaptive-bottom">
                            <div data-wow-delay="2s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                                class="wow fadeInUp lineBg__small"></div>
                            <div data-wow-delay="2.3s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                                class="wow fadeInUp lineBg__big"></div>
                            <div data-wow-delay="2s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                                class="wow fadeInUp lineBg__small"></div>
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
                            <div data-wow-delay="1s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                                class="wow zoomIn">
                                <h3 class="title__h3 text-right">
                                    {!! trans('portfolio/modaboom.product_page') !!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 product__circle__bg">
                        <div data-wow-delay="2s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow fadeIn product__title__bg">
                            Product page
                        </div>
                        <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow fadeIn product__imagebg">
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
                            <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                                class="wow zoomIn">
                                <span class="title__background text-left">thanks</span>
                            </div>
                            <div data-wow-delay="1s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                                class="wow zoomIn">
                                <h3 class="title__h3 text-right">
                                    {!! trans('portfolio/modaboom.product_page') !!}
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@section('bottom-scripts')
    <script src="{{ asset('js/libs.js') }}"></script>
@endsection
