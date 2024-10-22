@extends('layouts.portfolio-item')

@section('seo')
    <link rel="canonical" href="{{ Request::url() }}">
    <title>{{ trans('portfolio/artsumki.seo_title') }}</title>
    <meta name="description" content="{{ trans('portfolio/artsumki.seo_descr') }}">
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/redesign.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/portfolio/artsumki.css') }}">
@endsection

@section('content')
    <main class="artsumki">
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="header__container ">

                        <div class="header__inner">

                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 col-lg-offset-1">
                                <div class="header__descr posr">
                                    <div data-wow-duration="1s" class="header__logo wow fadeInDown">
                                        <img src="/img/portfolio/artsumki/logo.png" alt="логотип.png">
                                    </div>
                                    <h1 class="h1" data-wow-delay="0.5s" data-wow-duration="1s"
                                        class="header__txt wow fadeInUp">
                                        {!! trans('portfolio/artsumki.header_title') !!}

                                    </h1>
                                    <div data-wow-delay="0.5s" data-wow-duration="1s" class="header__icons wow fadeInDown">
                                        <div class="header__icons-icon">
                                            <img class="header__icon-img" src="/img/portfolio/artsumki/icons/laptop.png"
                                                alt="png">
                                        </div>
                                        <div class="header__icons-icon">
                                            <img class="header__icon-img" src="/img/portfolio/artsumki/icons/phone.png"
                                                alt="png">
                                        </div>
                                        <div class="header__icons-icon">
                                            <img class="header__icon-img" src="/img/portfolio/artsumki/icons/tablet.png"
                                                alt="png">
                                        </div>
                                    </div>
                                    <a data-wow-duration="2s" class="header__button button wow fadeInUp"
                                        href="https://artsumki.com.ua/" rel="nofollow">
                                        {{ trans('portfolio/artsumki.header_button') }}
                                    </a>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-8">
                                <div data-wow-duration="2s" class="header__img wow fadeInRight">
                                    <img class="header__img-laptop" src="/img/portfolio/artsumki/laptop.png" alt="png">
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
                        <p class="h1_decor wow fadeInLeft" data-wow-duration="1s">
                            {{ trans('portfolio/artsumki.main_page') }}
                        </p>
                    </div>
                    <div class="col-xs-12 col-sm-9 col-sm-offset-2">
                        <div class="imgcont">
                            <div class="imgcont_position left wow fadeIn" data-wow-duration="1s">
                                <p class="imgcont_name">
                                    main page
                                </p>
                            </div>
                            <img src="/img/portfolio/artsumki/main.jpg" class="shadow  wow fadeInRight"
                                data-wow-duration="1s" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="search">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-9 col-sm-offset-1">
                        <p class="h1_decor text-right">
                            {{ trans('portfolio/artsumki.search') }}
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-9 col-sm-offset-3">
                        <div class="imgcont wow fadeInLeft" data-wow-duration="1s">
                            <div class="imgcont_position left left-bottom wow fadeInRight" data-wow-duration="1s">
                                <p class="imgcont_name wow fadeIn" data-wow-duration="1s">
                                    search
                                </p>
                            </div>
                            <img src="/img/portfolio/artsumki/search_decor.png" class="decor" alt="">
                            <img src="/img/portfolio/artsumki/search.jpg" class="shadow" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="category">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-9 col-sm-offset-1">
                        <p class="h1_decor wow fadeInLeft" data-wow-duration="1s">
                            {{ trans('portfolio/artsumki.category') }}
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-9 col-sm-offset-3">
                        <div class="imgcont wow fadeInRight" data-wow-duration="1s">
                            <div class="imgcont_position left wow fadeIn" data-wow-duration="1s">
                                <p class="imgcont_name text-right">
                                    category
                                </p>
                            </div>
                            <img src="/img/portfolio/artsumki/category_mobile.jpg" class="category_mobile" alt="">
                            <img src="/img/portfolio/artsumki/category.jpg" class="shadow" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="fonts">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                        <p class="h1_decor wow fadeInLeft" data-wow-duration="1s">
                            {{ trans('portfolio/artsumki.typo') }}
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-3 col-sm-offset-1">
                        <p class="fonts_Aa wow fadeInLeft" data-wow-duration="1s">Aa</p>
                    </div>
                    <div class="col-xs-12 col-sm-2">
                        <div class="Evolventa">
                            <p class="fonts_name wow fadeInRight" data-wow-duration="1s">
                                Evolventa
                            </p>
                            <p class="fonts_weight regular wow fadeInDown" data-wow-delay="1s" data-wow-duration="1s">
                                Regular </p>
                            <p class="fonts_weight bold wow fadeInDown" data-wow-delay="1.5s" data-wow-duration="1s">
                                Bold </p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-2 col-sm-offset-1">
                        <div class="NotoSans">
                            <p class="fonts_name wow fadeInRight" data-wow-duration="1s">
                                Noto Sans
                            </p>
                            <p class="fonts_weight regular wow fadeInDown" data-wow-delay="1s" data-wow-duration="1s">
                                Regular </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="colors">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                        <p class="h1_decor wow fadeInLeft" data-wow-duration="1s">
                            {{ trans('portfolio/artsumki.colors') }}
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-sm-offset-1">
                        <div class="colors_list">
                            <li class="wow fadeInLeft" data-wow-delay="1s" data-wow-duration="1s">
                                <div class="colors_item"></div>
                                <p class="colors_p">111111</p>
                            </li>
                            <li class="wow fadeInLeft" data-wow-delay="1.5s" data-wow-duration="1s">
                                <div class="colors_item colors_item-F5F0EA"></div>
                                <p class="colors_p">F5F0EA</p>
                            </li>
                            <li class="wow fadeInLeft" data-wow-delay="2s" data-wow-duration="1s">
                                <div class="colors_item colors_item-F18517"></div>
                                <p class="colors_p">F18517</p>
                            </li>
                            <li class="wow fadeInLeft" data-wow-delay="2.5s" data-wow-duration="1s">
                                <div class="colors_item colors_item-777777"></div>
                                <p class="colors_p">777777</p>
                            </li>
                        </div>
                    </div>
                </div>
                <div class="posr">
                    <img src="/img/portfolio/artsumki/colors_decor.png" class="decor colors_decor wow fadeInRight"
                        data-wow-duration="1s" alt="">
                </div>
            </div>
        </section>
        <section class="product">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                        <p class="h1_decor wow fadeInLeft" data-wow-duration="1s">
                            {{ trans('portfolio/artsumki.product_page') }}
                        </p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-9 col-sm-offset-1">
                    <div class="imgcont wow fadeInRight" data-wow-duration="1s">
                        <div class="imgcont_position right wow fadeIn" data-wow-duration="1s">
                            <p class="imgcont_name text-left">
                                product page
                            </p>
                        </div>
                        <img src="/img/portfolio/artsumki/product_mobile.png" class="product_mobile" alt="">
                        <img src="/img/portfolio/artsumki/product.jpg" class="shadow" alt="">
                    </div>
                </div>
            </div>
            </div>

        </section>
        <section class="checkout">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                        <p class="h1_decor text-right wow fadeInRight" data-wow-duration="1s">
                            {!! trans('portfolio/artsumki.checkout') !!}
                        </p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-9 col-sm-offset-2">
                    <div class="imgcont  wow fadeInLeft" data-wow-duration="1s">
                        <div class="imgcont_position left wow fadeIn" data-wow-duration="1s">
                            <p class="imgcont_name text-right">
                                checkout
                            </p>
                        </div>
                        <img src="/img/portfolio/artsumki/checkout.jpg" class="shadow" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section class="thanks">
            <div class="container">
                <div class="row d-flex">
                    <div class="col-xs-12 col-sm-8 d-flex">
                        <div class="thanks_p  wow fadeIn" data-wow-duration="1s">
                            Thanks for
                            <span>
                                watching
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@section('bottom-scripts')
    <script src="{{ asset('js/libs.js') }}"></script>
@endsection
