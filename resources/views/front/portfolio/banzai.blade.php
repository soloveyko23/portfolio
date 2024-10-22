@extends('layouts.portfolio-item')

@section('seo')
    <link rel="canonical" href="{{ Request::url() }}">
    <title>{{ trans('portfolio/banzai.seo_title') }}</title>
    <meta name="description" content="{{ trans('portfolio/banzai.seo_descr') }}">
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/redesign.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/portfolio/banzai.css') }}">
@endsection

@section('content')
    <main class="banzai">
        <header class="header">
            <div class="header__container">
                <div class="header__inner">
                    <div class="header__description">
                        <div data-wow-duration="1s" class="header__logo wow fadeInDown">
                            <img src="/img/portfolio/banzai/logo.png" alt="логотип.png">
                        </div>
                        <h2 data-wow-delay="0.5s" data-wow-duration="1s" class="header__txt wow fadeInUp">
                            {{ trans('portfolio/banzai.header_title') }}
                        </h2>
                        <div data-wow-delay="0.5s" data-wow-duration="1s" class="header__icons wow fadeInDown">
                            <div class="header__img-area">
                                <img class="header__icon-img" src="/img/portfolio/banzai/icons/laptop.png" alt="png">
                            </div>
                            <div class="header__img-area">
                                <img class="header__icon-img" src="/img/portfolio/banzai/icons/phone.png" alt="png">
                            </div>
                            <div class="header__img-area">
                                <img class="header__icon-img" src="/img/portfolio/banzai/icons/tablet.png" alt="png">
                            </div>
                        </div>
                        <a data-wow-duration="2s" class="header__button wow fadeInUp"
                            href="http://xn--80aabcujjguo6d.xn--p1ai/" rel="nofollow">
                            {{ trans('portfolio/banzai.header_button') }}
                        </a>
                    </div>
                </div>
            </div>
            <div data-wow-duration="2s" class="header__phone-laptop wow fadeInRight">
                <img class="header__img-phone" src="/img/portfolio/banzai/mobile-home.png" alt="png">
                <img class="header__img-laptop" src="/img/portfolio/banzai/laptop.png" alt="png">
            </div>
        </header>
        <section class="home">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="title-page">
                            <div data-wow-delay="0.2s" data-wow-duration="1s" class="wow slideInDown">
                                <span>{{ trans('portfolio/banzai.title_page1') }}</span>
                            </div>
                            <div data-wow-delay="0.2s" data-wow-duration="1s" class="wow slideInUp">
                                <span>{{ trans('portfolio/banzai.title_page2') }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div data-wow-duration="1s" class="home__image wow fadeIn">
                            <img src="/img/portfolio/banzai/home-image.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="font">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div data-wow-duration="1s" class="title-page wow slideInDown">
                            <span>{{ trans('portfolio/banzai.colors') }}</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3 col-sm-offset-1 col-md-2 col-md-offset-3 col-lg-2 col-lg-offset-3">
                            <div class="font__color">
                                <div data-wow-duration="1s" class="font__color-hex wow fadeIn">
                                    #ee2b28
                                </div>
                                <div data-wow-delay="0.2s" data-wow-duration="1s" class="font__color-grad red wow fadeIn">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-2 col-lg-2">
                            <div data-wow-delay="0.4s" data-wow-duration="1s" class="wow bounceIn">
                                <img src="/img/portfolio/banzai/font-logo.png" alt="" class="font__logo">
                            </div>
                        </div>
                        <div class="col-sm-3 col-md-2 col-lg-2">
                            <div class="font__color">
                                <div data-wow-delay="0.4s" data-wow-duration="1s"
                                    class="font__color-grad ylow wow slideInRight"></div>
                                <div data-wow-delay="0" data-wow-duration="1s" class="wow fadeIn">
                                    <span class="font__color-hex">#f1ca41</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-4 col-lg-offset-4">
                            <div class="font__family">
                                <div data-wow-delay="0.4s" data-wow-duration="1s" class="wow fadeIn">
                                    <span class="font__family-name">Geometria</span>
                                </div>
                                <div data-wow-delay="0.6s" data-wow-duration="1s" class="wow fadeInDown">
                                    <span class="font__family-text">а б в г д е ё ж з и й к л м н о
                                        п р с т у ф х ц ч ш щ ъ ы ь э ю я</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="adaptive">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-7 col-lg-8">
                        <div data-wow-duration="1s" class="wow fadeIn">
                            <img src="/img/portfolio/banzai/adaptive-img.png" alt="" class="adaptive__img">
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-5 col-lg-4">
                        <div data-wow-duration="1s" class="wow fadeIn">
                            <span class="adaptive__title">{{ trans('portfolio/banzai.adaptive') }}</span>
                        </div>
                        <div data-wow-delay="0.2s" data-wow-duration="1s" class="wow fadeIn">
                            <span class="adaptive__sub">{{ trans('portfolio/banzai.adaptive_text') }}</span>
                        </div>
                        <div data-wow-delay="0.4s" data-wow-duration="1s" class="adaptive__icon wow fadeIn">
                            <img src="/img/portfolio/banzai/laptop-w.svg" alt="">
                            <img src="/img/portfolio/banzai/smartphone-w.svg" alt="">
                            <img src="/img/portfolio/banzai/tablet-w.svg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="functional">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="functional__title">
                            <div data-wow-delay="0.2s" data-wow-duration="1s" class="wow fadeIn">
                                <span>{{ trans('portfolio/banzai.functional') }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4">
                        <div class="functional__list">
                            <div data-wow-duration="1s" class ="wow fadeIn">
                                <img src="/img/portfolio/banzai/lara-logo.png" alt=""
                                    class="functional__list-icon">
                            </div>
                            <div data-wow-delay="0.2s" data-wow-duration="1s" class="wow fadeIn">
                                <span class="functional__list-name">laravel 5</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4">
                        <div class="functional__list">
                            <div data-wow-duration="1s" class="wow fadeIn">
                                <img src="/img/portfolio/banzai/vue-logo.png" alt=""
                                    class="functional__list-icon">
                            </div>
                            <div data-wow-delay="0.2s" data-wow-duration="1s" class="wow fadeIn">
                                <span class="functional__list-name">Vue.js</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4">
                        <div class="functional__list">
                            <div data-wow-delay="0" data-wow-duration="1s" class="wow fadeIn">
                                <img src="/img/portfolio/banzai/bootstrap-logo.png" alt=""
                                    class="functional__list-icon">
                            </div>
                            <div data-wow-delay="0.2s" data-wow-duration="1s" class="wow fadeIn">
                                <span class="functional__list-name">Bootstrap 4</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div data-wow-delay="0.4s" data-wow-duration="1s wow fadeInDown">
                            <p class="functional__sub">{{ trans('portfolio/banzai.functional_text') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="category">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="title-page">
                            <div data-wow-delay="0.2s" data-wow-duration="1s wow slideInDown">
                                <span>{{ trans('portfolio/banzai.category_pages1') }}</span>
                            </div>
                            <div data-wow-delay="0.2s" data-wow-duration="1s" class="wow slideInUp">
                                <span>{{ trans('portfolio/banzai.category_pages2') }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div data-wow-duration="1s" class="category__image wow fadeInUp">
                            <img src="/img/portfolio/banzai/category-img.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="merpage">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="title-page">
                            <div data-wow-delay="0.2s" data-wow-duration="1s" class="wow slideInDown">
                                <span>{{ trans('portfolio/banzai.activities_page1') }}</span>
                            </div>
                            <div data-wow-delay="0.2s" data-wow-duration="1s" class="wow slideInUp">
                                <span>{{ trans('portfolio/banzai.activities_page2') }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div data-wow-duration="1s" class="merpage__image wow fadeInUp">
                            <img src="/img/portfolio/banzai/merpage-image.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-9 col-lg-offset-3">
                        <div data-wow-duration="1s" class="merpage__image-btm wow fadeInUp">
                            <img src="/img/portfolio/banzai/merpage-img-btm.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="allpage">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="title-page">
                            <div data-wow-duration="1s" class="wow slideInDown">
                                <span>{{ trans('portfolio/banzai.other_pages1') }}</span>
                            </div>
                            <div data-wow-duration="1s" class="wow slideInUp">
                                <span>{{ trans('portfolio/banzai.other_pages2') }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-lg-12">
                                <div data-wow-duration="1s" class="allpage__image wow fadeIn">
                                    <img src="/img/portfolio/banzai/allpage-1.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div data-wow-duration="1s" class="allpage__image wow fadeIn">
                                    <img src="/img/portfolio/banzai/allpage-3.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div data-wow-duration="1s" class="allpage__image wow fadeIn">
                                    <img src="/img/portfolio/banzai/allpage-5.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div data-wow-duration="1s" class="allpage__image wow fadeIn">
                                    <img src="/img/portfolio/banzai/allpage-9.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div data-wow-duration="1s" class="allpage__image wow fadeIn">
                                    <img src="/img/portfolio/banzai/allpage-11.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-lg-12">
                                <div data-wow-duration="1s" class="allpage__image wow fadeIn">
                                    <img src="/img/portfolio/banzai/allpage-2.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div data-wow-duration="1s" class="allpage__image wow fadeIn">
                                    <img src="/img/portfolio/banzai/allpage-4.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div data-wow-duration="1s" class="allpage__image wow fadeIn">
                                    <img src="/img/portfolio/banzai/allpage-6.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div data-wow-duration="1s" class="allpage__image wow fadeIn">
                                    <img src="/img/portfolio/banzai/allpage-8.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div data-wow-duration="1s" class="allpage__image wow fadeIn">
                                    <img src="/img/portfolio/banzai/allpage-10.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div data-wow-duration="1s" class="allpage__image wow fadeIn">
                                    <img src="/img/portfolio/banzai/allpage-12.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div data-wow-duration="1s" class="allpage__image wow fadeIn">
                                    <img src="/img/portfolio/banzai/allpage-13.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="thankyou">
                            <div data-wow-duration="1s" class="thankyou__main wow fadeInUp">
                                {{ trans('portfolio/banzai.footer1') }}
                            </div>
                            <div data-wow-duration="1s" class="thankyou__sub wow fadeInDown">
                                {{ trans('portfolio/banzai.footer2') }}
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
