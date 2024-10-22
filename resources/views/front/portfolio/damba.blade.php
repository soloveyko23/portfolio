@extends('layouts.portfolio-item')

@section('seo')
    <link rel="canonical" href="{{ Request::url() }}">
    <title>{{ trans('portfolio/damba.seo_title') }}</title>
    <meta name="description" content="{{ trans('portfolio/damba.seo_descr') }}">
@endsection


@section('css')
    <link rel="stylesheet" href="{{ asset('css/redesign.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/portfolio/damba.css') }}">
@endsection

@section('content')
    <main>
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="header__container ">

                        <div class="header__inner">

                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 col-lg-offset-1">
                                <div class="header__descr posr">
                                    <div data-wow-duration="1s" class="header__logo wow fadeInDown">
                                        <img src="/img/portfolio/damba/logo.png" alt="логотип.png">
                                    </div>
                                    <h1 class="h1" data-wow-delay="0.5s" data-wow-duration="1s"
                                        class="header__txt wow fadeInUp">
                                        {!! trans('portfolio/damba.header_title') !!}
                                    </h1>
                                    <div data-wow-delay="0.5s" data-wow-duration="1s" class="header__icons wow fadeInDown">
                                        <div class="header__icons-icon">
                                            <img class="header__icon-img" src="/img/portfolio/damba/icons/laptop.png"
                                                alt="png">
                                        </div>
                                        <div class="header__icons-icon">
                                            <img class="header__icon-img" src="/img/portfolio/damba/icons/phone.png"
                                                alt="png">
                                        </div>
                                        <div class="header__icons-icon">
                                            <img class="header__icon-img" src="/img/portfolio/damba/icons/tablet.png"
                                                alt="png">
                                        </div>
                                    </div>
                                    <a data-wow-duration="2s" class="header__button button wow fadeInUp"
                                        href="https://damba.com.ua/" rel="nofollow">
                                        {{ trans('portfolio/damba.header_button') }}
                                    </a>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-8">
                                <div data-wow-duration="2s" class="header__img wow fadeInRight">
                                    {{-- <img class="header__img-phone" src="/img/portfolio/damba/mobile-home.png" alt="png"> --}}
                                    <img class="header__img-laptop" src="/img/portfolio/damba/laptop.png" alt="png">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="main">
            <div class="container">
                <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                    <p class="h1_decor">
                        {{ trans('portfolio/damba.main_page') }}
                    </p>
                </div>
                <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                    <div class="imgcont">
                        <div class="imgcont_position right">
                            <p class="imgcont_name  ">
                                main
                            </p>
                        </div>
                        <img src="/img/portfolio/damba/decor.png" class="decor" alt="">
                        <img src="/img/portfolio/damba/main.jpg" class="shadow" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section class="interactive">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                        <p class="h1_decor text-right">
                            {{ trans('portfolio/damba.plan') }}
                        </p>
                    </div>
                    <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                        <div class="imgcont">
                            <div class="imgcont_position left">
                                <p class="imgcont_name  ">
                                    Interactive plan
                                </p>
                            </div>
                            <img src="/img/portfolio/damba/interactive.jpg" class="shadow" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="category">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                        <p class="h1_decor">
                            {{ trans('portfolio/damba.categories') }}
                        </p>
                    </div>
                    <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                        <div class="imgcont">
                            <div class="imgcont_position bottom">
                                <p class="imgcont_name  text-right">
                                    categories
                                </p>
                            </div>
                            <img src="/img/portfolio/damba/category.jpg" class="shadow" alt="category">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="fonts">
            <img src="/img/portfolio/damba/decor.png" class="fonts_decor" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                        <p class="h1_decor">
                            {{ trans('portfolio/damba.colors') }}
                        </p>
                    </div>
                </div>
                <div class="row d-flex">
                    <div class="col-xs-12 col-sm-6 col-md-2 col-md-offset-1">
                        <p class="fonts_name">
                            Gilroy
                        </p>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-2">
                        <p class="fonts_font">Aa</p>
                    </div>
                    <div class="col-xs-12 col-sm-3 col-md-1">
                        <ul class="fonts_weig">
                            <li>
                                <p class="Black">Black</p>
                            </li>
                            <li>
                                <p class="Bold">Bold</p>
                            </li>
                            <li>
                                <p class="SemiBold">SemiBold</p>
                            </li>
                            <li>
                                <p class="Medium">Medium</p>
                            </li>
                            <li>
                                <p class="Regular">Regular</p>
                            </li>
                        </ul>
                    </div>
                    <div class="col-xs-12 col-sm-9 col-md-6">
                        <p class="fonts_expl upper">а б в г д е ё ж з и й к л м н о п р с т у ф х ц ч ш щ ъ ы ь э ю я</p>
                        <p class="fonts_expl">а б в г д е ё ж з и й к л м н о п р с т у ф х ц ч ш щ ъ ы ь э ю я</p>
                        <p class="fonts_expl">1 2 3 4 5 6 7 8 9 0</p>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-10 col-mdd-offset-1 d-flex">
                        <ul class="colors">
                            <li>
                                <img src="/img/portfolio/damba/cExampl.png" alt="example" class="color-exmpl">
                                <p class="color-000000">#000000</p>
                            </li>
                            <li>
                                <img src="/img/portfolio/damba/cExampl1.png" alt="example" class="color-exmpl">
                                <p class="color-484848">#484848</p>
                            </li>
                            <li>
                                <img src="/img/portfolio/damba/cExampl2.png" alt="example" class="color-exmpl">
                                <p class="color-808080">#808080</p>
                            </li>
                            <li>
                                <img src="/img/portfolio/damba/cExampl3.png" alt="example" class="color-exmpl">
                                <p class="color-ECECEC">#ECECEC</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="shome">
            <div class="row">
                <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                    <p class="h1_decor text-right">
                        {{ trans('portfolio/damba.home_page') }}
                    </p>
                </div>
                <div class="col-xs-12 col-sm-9 col-sm-offset-2">
                    <div class="imgcont">
                        <div class="imgcont_position left">
                            <p class="imgcont_name  ">
                                product page
                            </p>
                        </div>
                        <img src="/img/portfolio/damba/decor.png" class="shome_decor" alt="">
                        <img src="/img/portfolio/damba/product.jpg" class="shadow" alt="">
                    </div>
                </div>
            </div>
        </section>

        <section class="else">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                        <p class="h1_decor ">
                            {{ trans('portfolio/damba.other_pages') }}
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-1"></div>
                    <div class="col-xs-12 col-sm-11">
                        <div class="imgcont">
                            <div class="imgcont_position left">
                                <p class="imgcont_name clear  ">
                                    Other pages
                                </p>
                            </div>

                            <div class="row">
                                <div class="col-xs-12 col-sm-6">
                                    <img src="/img/portfolio/damba/other.png" alt="">
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <img src="/img/portfolio/damba/other1.png" class="right" alt="">
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
                    <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                        <p class="h1_decor text-center">
                            {{ trans('portfolio/damba.adaptive') }}
                        </p>
                    </div>
                </div>
                <div class="posr">
                    <div class="col-xs-12">
                        <img src="/img/portfolio/damba/adaptive.png" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section class="thanks posr">
            <img src="/img/portfolio/damba/decor.png" class="decor" alt="">
            <div class="container">
                <div class="row d-flex">

                    <img src="/img/portfolio/damba/logo.png" class="logo" alt="">
                    <div class="col-xs-12 col-sm-6 d-flex">
                        <div class="holder">
                            <p>
                                <b>{{ trans('portfolio/damba.footer1') }}</b>
                                <br> &nbsp&nbsp&nbsp {{ trans('portfolio/damba.footer2') }}
                            </p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <img src="/img/portfolio/damba/thanks.png" class="img" alt="">
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection


@section('bottom-scripts')
    <script src="{{ asset('js/libs.js') }}"></script>
@endsection
