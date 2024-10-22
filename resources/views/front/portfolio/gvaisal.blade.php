@extends('layouts.portfolio-item')

@section('seo')
    <link rel="canonical" href="{{ Request::url() }}">
    <title>{{ trans('portfolio/gvaisal.seo_title') }}</title>
    <meta name="description" content="{{ trans('portfolio/gvaisal.seo_descr') }}">
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/redesign.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/portfolio/gvaisal.css') }}">
@endsection

@section('content')
    <main class='gvaisal'>
        <header class="header">
            <div class="header__container">
                <div class="header__inner">
                    <div class="header__description">
                        <div data-wow-duration="1s" class="header__logo wow fadeInDown">
                            <img src="/img/portfolio/gvaisal/logo.png" alt="логотип.png">
                        </div>
                        <h1 data-wow-delay="0.5s" data-wow-duration="1s" class="header__txt wo fadeInUp">
                            {{ trans('portfolio/gvaisal.header_title') }}
                        </h1>
                        <div data-wow-delay="0.5s" data-wow-duration="1s" class="header__icons wow fadeInDown">
                            <div class="header__img-area">
                                <img class="header__icon-img" src="/img/portfolio/gvaisal/icons/laptop.png" alt="png">
                            </div>
                            <div class="header__img-area">
                                <img class="header__icon-img" src="/img/portfolio/gvaisal/icons/phone.png" alt="png">
                            </div>
                            <div class="header__img-area">
                                <img class="header__icon-img" src="/img/portfolio/gvaisal/icons/tablet.png" alt="png">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div data-wow-duration="2s" class="header__phone-laptop wow fadeInRight">
                <img class="header__img-phone" src="/img/portfolio/gvaisal/mobile-home.png" alt="png">
                <img class="header__img-laptop" src="/img/portfolio/gvaisal/laptop.png" alt="png">
            </div>
        </header>
        <section class="homepage">
            <div class="custom_container">
                <div data-wow-duration="1s" class="wow slideInDown">
                    <h2>{!! trans('portfolio/gvaisal.main_page') !!}</h2>
                </div>
            </div>
            <div class="content-img">
                <div data-wow-duration="1s wow zoomInLeft">
                    <img src="/img/portfolio/gvaisal/homepage.png" alt="">
                </div>
            </div>
        </section>
        <section class="color-section">
            <div class="custom_container">
                <div class="title-block">
                    <div data-wow-duration="1s" class="wow slideInDown">
                        <h2>{!! trans('portfolio/gvaisal.colors') !!}</h2>
                    </div>
                    <div class="img-block">
                        <img src="/img/portfolio/gvaisal/color-grey.png" alt="">
                    </div>
                </div>
                <div class="colors-block">
                    <div class="color-item">
                        <div class="green">
                            <div data-wow-duration="1s" class="wow flipInY">
                                <img src="/img/portfolio/gvaisal/green-circle1.png" alt="">
                            </div>
                        </div>
                        <p>#a0da8b</p>
                    </div>
                    <div class="color-item">
                        <div class="red">
                            <div data-wow-delay="0.5s" data-wow-duration="1s" class="wow flipInY">
                                <img src="/img/portfolio/gvaisal/red-circle1.png" alt="">
                            </div>
                        </div>
                        <p>#f86149</p>
                    </div>
                </div>
                <div class="title-block">
                    <div data-wow-delay="0.5s" data-wow-duration="1s" class="wow slideInDown">
                        <h2>{!! trans('portfolio/gvaisal.fonts') !!}</h2>
                    </div>
                    <div class="img-block">
                        <img src="/img/portfolio/gvaisal/typography-grey.png" alt="">
                    </div>
                </div>
                <div class="alphabet-block">
                    <div class="img-block">
                        <img src="/img/portfolio/gvaisal/girloy.png" alt="">
                    </div>
                    <div>
                        <div class="extrabold">
                            <p>ExtraBold</p>
                            <div class="divider"></div>
                            <p>a б в г д е ё ж з и й к л м н о
                                <br>
                                п р с т у ф х ц ч ш щ ъ ы ь э ю я
                            </p>
                        </div>
                        <div class="light">
                            <p>Light</p>
                            <div class="divider"></div>
                            <p>a б в г д е ё ж з и й к л м н о
                                <br>
                                п р с т у ф х ц ч ш щ ъ ы ь э ю я
                            </p>
                        </div>
                    </div>
                </div>
                <div class="model-block">
                    <div data-wow-delay="0.5s" data-wow-duration="1s" class="wow slideInUp">
                        <img src="/img/portfolio/gvaisal/girl.png" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section class="catalog">
            <div class="custom_container">
                <div class="img-block">
                    <div data-wow-duration="1s" class="wow zoomInLeft">
                        <img src="/img/portfolio/gvaisal/catalogpage.png" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section class="product">
            <div class="custom_container">
                <div class="img-block">
                    <div data-wow-duration="1s" class="wow zoomInLeft">
                        <img src="/img/portfolio/gvaisal/productpage.png" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section class="thanks">

            <div class="title">
                <div data-wow-duration="1s" class="wow slideInDown">
                    <h2>{!! trans('portfolio/gvaisal.footer') !!}</< /h2>
                </div>
            </div>
        </section>
    </main>
@endsection

@section('bottom-scripts')
    <script src="{{ asset('js/libs.js') }}"></script>
@endsection
