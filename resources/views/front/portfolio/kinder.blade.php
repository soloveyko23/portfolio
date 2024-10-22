@extends('layouts.portfolio-item')

@section('seo')
    <link rel="canonical" href="{{ Request::url() }}">
    <title>{{ trans('portfolio/kinder.seo_title') }}</title>
    <meta name="description" content="{{ trans('portfolio/kinder.seo_descr') }}">
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/redesign.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/portfolio/kinder.css') }}">
@endsection

@section('content')
    <main>
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="header__container">
                        <div class="header__inner">
                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 col-lg-offset-1">
                                <div class="header__descr posr">
                                    <div data-wow-duration="1s" class="header__logo wow fadeInDown">
                                        <img src="/img/portfolio/kinder/logo.png" alt="логотип.png">
                                    </div>
                                    <h1 class="h1" data-wow-delay="0.5s" data-wow-duration="1s"
                                        class="header__txt wow fadeInUp">
                                        {!! trans('portfolio/kinder.header_title') !!}
                                    </h1>
                                    <div data-wow-delay="0.5s" data-wow-duration="1s" class="header__icons wow fadeInDown">
                                        <div class="header__icons-icon">
                                            <img class="header__icon-img" src="/img/portfolio/kinder/icons/laptop.png"
                                                alt="png">
                                        </div>
                                        <div class="header__icons-icon">
                                            <img class="header__icon-img" src="/img/portfolio/kinder/icons/phone.png"
                                                alt="png">
                                        </div>
                                        <div class="header__icons-icon">
                                            <img class="header__icon-img" src="/img/portfolio/kinder/icons/tablet.png"
                                                alt="png">
                                        </div>
                                    </div>
                                    <a data-wow-duration="2s" class="header__button button wow fadeInUp"
                                        href="https://kinder-style.com.ua/" rel="nofollow">
                                        {{ trans('portfolio/kinder.header_button') }}
                                    </a>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-8">
                                <div data-wow-duration="2s" class="header__img wow fadeInRight">
                                    {{-- <img class="header__img-phone" src="/img/portfolio/kinder/mobile-home.png" alt="png"> --}}
                                    <img class="header__img-laptop" src="/img/portfolio/kinder/laptop.png" alt="png">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="main">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                        <p class="h1_decor text-right">
                            {{ trans('portfolio/kinder.main_page') }}
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-9 col-sm-offset-2">
                        <div class="posr">
                            <img src="/img/portfolio/kinder/decor.png" class="decor main_decor" alt="">
                            <img src="/img/portfolio/kinder/main_mobile.png" class="main_mobile" alt="">
                            <img src="/img/portfolio/kinder/main.png" class="main_img" alt="">
                            <div class="main_girl">
                                <img src="/img/portfolio/kinder/gitl.png" class="decor" alt="">
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </section>

        <section class="catalog">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                        <p class="h1_decor text-right">
                            {{ trans('portfolio/kinder.catalog') }}
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-9 col-sm-offset-2">
                        <div class="posr">
                            <img src="/img/portfolio/kinder/catalog_decor.png" class="decor catalog_decor" alt="">
                            <img src="/img/portfolio/kinder/catalog.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="menu">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                        <p class="h1_decor ">
                            {{ trans('portfolio/kinder.menu') }}
                        </p>
                    </div>
                    <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                        <div class="posr">
                            <img src="/img/portfolio/kinder/menu.png" class="menu_img" alt="">
                            <img src="/img/portfolio/kinder/menu_decor.png" class="decor menu_decor" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="colors">

            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                        <p class="h1_decor ">
                            {{ trans('portfolio/kinder.color') }}
                        </p>
                    </div>
                    <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                        <ul class="colors_list">
                            <li>
                                <img src="/img/portfolio/kinder/color.png" alt="">
                                <p class="colors_p">
                                    <span>Gradient</span> <br>
                                    #833BFF <span>to</span> #C056FE
                                </p>
                            </li>
                            <li>
                                <img src="/img/portfolio/kinder/color2.png" alt="">
                                <p class="colors_p">
                                    <span>Gradient</span> <br>
                                    #FF974A <span>to</span> #FE6845
                                </p>
                            </li>
                            <li>
                                <img src="/img/portfolio/kinder/color3.png" alt="">
                                <p class="colors_p"><span>#331436</span></p>
                            </li>
                            <li>
                                <img src="/img/portfolio/kinder/color4.png" alt="">
                                <p class="colors_p"><span>#998A9B</span></p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="fonts">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                        <p class="h1_decor text-right">
                            {{ trans('portfolio/kinder.fonts') }}
                        </p>
                    </div>
                </div>
                <div class="row d-flex">
                    <div class="col-xs-12 col-sm-4 col-sm-offset-1 d-flex ai-center">
                        <img src="/img/portfolio/kinder/fonts.png" alt="fonts">
                    </div>
                    <div class="col-xs-12 col-sm-7 d-flex ai-center">
                        <div class="fonts_cont">
                            <p class="fonts_name">nunito</p>
                            <ul class="fonts_weight">
                                <li>
                                    <p class="Regular">Regular</p>
                                </li>
                                <li>
                                    <p class="SemiBold">SemiBold</p>
                                </li>
                                <li>
                                    <p class="Bold">Bold</p>
                                </li>
                                <li>
                                    <p class="ExtraBold">ExtraBold</p>
                                </li>
                            </ul>
                            <p class="fonts_example uppepr">а б в г д е ё ж з и й к л м н о п р с т у ф х ц ч ш щ ъ ы ь э ю
                                я</p>
                            <p class="fonts_example">а б в г д е ё ж з и й к л м н о п р с т у ф х ц ч ш щ ъ ы ь э ю я</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="product">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                        <p class="h1_decor">
                            {{ trans('portfolio/kinder.product_page') }}
                        </p>
                    </div>
                    <div class="col-xs-12 col-sm-9 col-sm-offset-1">
                        <div class="posr">
                            <img src="/img/portfolio/kinder/product.png" alt="">
                            <img src="/img/portfolio/kinder/product_mobile.png" class="mobile" alt="">
                            <img src="/img/portfolio/kinder/product_decor.png" class="decor" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="checkout">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                        <p class="h1_decor text-right">
                            {{ trans('portfolio/kinder.checkout') }}
                        </p>
                    </div>
                    <div class="col-xs-12 col-sm-10 col-sm-offset-2">
                        <div class="posr">
                            <img src="/img/portfolio/kinder/checkout.png" alt="">
                            <img src="/img/portfolio/kinder/checkout_mobile.png" class="mobile" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="other">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                        <p class="h1_decor">
                            {{ trans('portfolio/kinder.other_pages') }}
                        </p>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <div class="other_cont">
                            <img src="/img/portfolio/kinder/other.png" alt="">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <div class="other_cont other_cont-small">
                            <img src="/img/portfolio/kinder/other1.png" alt="">
                            <img src="/img/portfolio/kinder/other2.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-10 col-sm-offset-1 d-flex">
                        <div class="other_mobile">
                            <div class="other_mobile-item">
                                <img src="/img/portfolio/kinder/other_mobile.png" alt="">
                            </div>
                            <div class="other_mobile-item">
                                <img src="/img/portfolio/kinder/other_mobile1.png" alt="">
                            </div>
                            <div class="other_mobile-item">
                                <img src="/img/portfolio/kinder/other_mobile2.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="thanks">
            <div class="container posr">
                <img src="/img/portfolio/kinder/thanksdeor.png" class="thanks_decor" alt="">
                <div class="row d-flex">
                    <div class="col-xs-12 col-sm-6 d-flex">
                        <p>
                            <span> {{ trans('portfolio/kinder.footer1') }}</span><br>
                            {{ trans('portfolio/kinder.footer2') }}
                        </p>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <div class="thanks_cont ">
                            <img src="/img/portfolio/kinder/thanks.png" alt="">
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
