@extends('layouts.portfolio-item')

@section('seo')
    <link rel="canonical" href="{{ Request::url() }}">
    <title>{{ trans('portfolio/hozsklad.seo_title') }}</title>
    <meta name="description" content="{{ trans('portfolio/hozsklad.seo_descr') }}">
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/redesign.css') }}">
    {{-- test --}}
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/portfolio/hozsklad.css') }}">
@endsection

@section('content')
    <main class="hozsklad">
        <header class="header">
            <div class="header__container">
                <div class="header__inner">
                    <div class="header__description">
                        <a data-wow-delay="1s" duration="1s" class="header__logo wow bounceInLeft"
                            href="https://hozsklad.ua/" rel="nofollow">
                            <img src="/img/portfolio/hozsklad/logo.png" alt="logo">
                        </a>
                        <h1 data-wow-delay="1s" duration="1.2s" class="header__title wow bounceInLeft">
                            {{ trans('portfolio/hozsklad.header_title') }}
                        </h1>
                        <div data-wow-delay="1s" duration="1.4s" class="header__icons wow bounceInLeft">
                            <img class="header__icon header__icon-laptop" src="/img/portfolio/hozsklad/laptop_(2).png"
                                alt="icon">
                            <img class="header__icon header__icon-smartphone"
                                src="/img/portfolio/hozsklad/smartphone_(3).png" alt="icon">
                            <img class="header__icon header__icon-tablet" src="/img/portfolio/hozsklad/tablet.png"
                                alt="icon">
                        </div>
                        <div data-wow-delay="1s" duration="1.6s" class="header__button-container wow bounceInLeft">
                            <a class="header__button" href="https://hozsklad.ua/"
                                rel="nofollow">{{ trans('portfolio/hozsklad.header_button') }}</a>
                        </div>
                    </div>
                </div>
                <div data-wow-delay="1s" duration="1.6s" class="header__img wow fadeIn">
                    <img src="/img/portfolio/hozsklad/preview-img.png" alt="">
                </div>
            </div>
        </header>
        <div>
            <section class="home-page">
                <div class="container">
                    <div class="home-page__inner">
                        <div data-wow-delay="1s" duration="0.5s" class="subtitle-container wow flipInX">
                            <div>
                                <p class="home-page__subtitle subtitle subtitle_sq subtitle_sq-left">
                                    {!! trans('portfolio/hozsklad.main_page') !!}
                                </p>
                            </div>
                            <div data-wow-delay="1s" duration="1.6s" class="image1-container wow zoomIn">
                                <img class="main-page-img2" src="/img/portfolio/hozsklad/cleaning_supplies.png"
                                    alt="cleaning_supplies">
                            </div>
                        </div>
                        <div data-wow-delay="1s" duration="1.6s" class="image2-container wow bounceInRight">
                            <p class="t_title left-title home-page__title">home page</p>
                            <div class="main-page-img-container">
                                <img class="main-page-img" src="/img/portfolio/hozsklad/main-page-img.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="site-decoration">
                <div class="container">
                    <p data-wow-delay="1s" duration="1.6s"
                        class="subtitle subtitle_pos-right subtitle_sq subtitle_sq-right wow flipInX">
                        {!! trans('portfolio/hozsklad.color') !!}
                    </p>
                    <div class="colors">
                        <div data-wow-delay="1s" duration="0.5s" class="colors__section wow fadeIn">
                            <div class="color-square color-square_color1"></div>
                            <div>
                                <span class="color-name color1-name">#f76c12</span>
                            </div>
                        </div>
                        <div data-wow-delay="0.8s" duration="0.8s" class="colors__section wow fadeIn">
                            <div class="color-square color-square_color2"></div>
                            <div>
                                <span class="color-name color2-name">#00bd50</span>
                            </div>
                        </div>
                        <div data-wow-delay="0.8s" duration="1.1s" class="colors__section">
                            <div class="color-square color-square_color3"></div>
                            <div>
                                <span class="color-name color3-name">#00ceee</span>
                            </div>
                        </div>
                        <div data-wow-delay="0.8s" duration="1.4s" class="colors__section wow fadeIn">
                            <div class="color-square color-square_color4"></div>
                            <div>
                                <span class="color-name color4-name">#ef4a4a</span>
                            </div>
                        </div>
                    </div>
                    <p data-wow-delay="1s" duration="0.5s"
                        class="fonts-subtitle subtitle subtitle_sq subtitle_sq-left wow flipInX">
                        {!! trans('portfolio/hozsklad.font') !!}
                    </p>

                    <div class="fonts">
                        <div data-wow-delay="1s" duration="0.5s" class="fonts__names wow bounceInLeft">
                            <p class="fonts__title">Proxima Nova</p>
                            <div>
                                <span class="fonts__letters">
                                    а б в г д е ё ж з и й к л м н о
                                </span>
                                <span class="fonts__letters">
                                    п р с т у ф х ц ч ш щ ъ ы ь э ю я
                                </span>
                            </div>
                        </div>

                        <ul class="fonts__list">
                            <li data-wow-delay="1s" duration="0.5s"
                                class="fonts__weight-name fonts__weight-name1 wow bounceInRight">Light Italic</li>
                            <li data-wow-delay="1s" duration="0.8s"
                                class="fonts__weight-name fonts__weight-name2 wow bounceInRight">Regular</li>
                            <li data-wow-delay="1s" duration="1.1s"
                                class="fonts__weight-name fonts__weight-name3 wow bounceInRight">Semibold</li>
                            <li data-wow-delay="1s" duration="1.4s"
                                class="fonts__weight-name fonts__weight-name4 wow bounceInRight">Bold</li>
                            <li data-wow-delay="1s" duration="1.7s"
                                class="fonts__weight-name fonts__weight-name5 wow bounceInRight">Extrabold</li>
                        </ul>
                        <div data-wow-delay="1s" duration="1.1s" class="fonts__preview wow zoomIn">
                            <img src="/img/portfolio/hozsklad/cleaning.png" alt="cleaning">
                        </div>
                    </div>
                </div>
            </section>

            <section class="adaptation">
                <div class="container">
                    <div class="adaptation__subtitle-inner">
                        <p data-wow-delay="1s" duration="0.6s"
                            class="adaptation__subtitle subtitle subtitle_sq subtitle_sq-green-left wow flipInX">
                            {!! trans('portfolio/hozsklad.adaptive') !!}
                        </p>
                    </div>
                    <div data-wow-delay="1s" duration="0.2s" class="adaptation__description wow fadeInDown">
                        <span>{!! trans('portfolio/hozsklad.adaptive_descr') !!}</span>
                    </div>
                    <div data-wow-delay="1s" duration="0.6s" class="adaptation__img wow zoomIn">
                        <img src="/img/portfolio/hozsklad/mobile-cards.png" alt="">
                    </div>
                </div>
            </section>

            <section class="categories">
                <div class="container">
                    <div data-wow-delay="1s" duration="0.5s" class="subtitle subtitle_sq subtitle_sq-left wow flipInX">
                        {!! trans('portfolio/hozsklad.categories') !!}
                    </div>

                    <div class="categories__inner">
                        <div data-wow-delay="0.5s" duration="1s"
                            class="card-container category-card1-container wow fadeInRight">
                            <img src="/img/portfolio/hozsklad/categories-img1.jpg" alt="">
                        </div>
                        <div data-wow-delay="1s" duration="0.5s"
                            class="card-container category-card2-container wow fadeInLeft">
                            <img src="/img/portfolio/hozsklad/categories-img2.jpg" alt="">
                        </div>
                    </div>
                </div>
            </section>

            <section class="product-card">
                <div class="container">
                    <p data-wow-delay="0.5s" duration="1s"
                        class="subtitle subtitle_pos-right subtitle_sq subtitle_sq-right wow flipInX">
                        {!! trans('portfolio/hozsklad.product_card') !!}
                    </p>
                    <div data-wow-delay="0.5s" duration="1s" class="product-card__inner wow bounceInLeft">
                        <div class="card-container">
                            <img class="product-page-img" src="/img/portfolio/hozsklad/product-page-img.jpg"
                                alt="">
                        </div>
                        <p class="t_title right-title product-card__title">product page</p>
                    </div>
                </div>
            </section>

            <section class="cart">
                <div class="container">
                    <div class="cart__subtitle-container">
                        <p data-wow-delay="0.5s" duration="1s"
                            class="cart__subtitle subtitle subtitle_sq subtitle_sq-orange-left wow flipInX">
                            {!! trans('portfolio/hozsklad.cart') !!}
                        </p>
                    </div>
                    <div data-wow-delay="0.5s" duration="1s" class="cart-container wow bounceInRight">
                        <p class="t_title left-title cart__title">cart page</p>
                        <div class="cart__image-inner">
                            <img class="img-shadow" src="/img/portfolio/hozsklad/cart-image.jpg" alt="">
                        </div>
                    </div>
                </div>
            </section>

            <section class="private-account">
                <div class="container">
                    <p data-wow-delay="0.5s" duration="1s"
                        class="subtitle subtitle_pos-right subtitle_sq subtitle_sq-right wow flipInX">
                        {!! trans('portfolio/hozsklad.cabinet') !!}
                    </p>
                    <div class="private-account__inner">
                        <div class="private-account__cards-container private-account__cards-container1">
                            <div data-wow-delay="0.5s" duration="1s" class="card1 wow bounceInDown">
                                <img class="img-shadow" src="/img/portfolio/hozsklad/account-wishlist.jpg"
                                    alt="">
                            </div>
                            <div data-wow-delay="0.5s" duration="1s" class="card2 wow bounceInLeft">
                                <img class="img-shadow" src="/img/portfolio/hozsklad/account-addresses.jpg"
                                    alt="">
                            </div>
                        </div>
                        <div class="private-account__cards-container private-account__cards-container2">
                            <div data-wow-delay="0.5s" duration="1s" class="card3 wow bounceInRight">
                                <img class="img-shadow" src="/img/portfolio/hozsklad/account-reviews.jpg" alt="">
                            </div>
                            <div data-wow-delay="0.5s" duration="1s" class="card4 wow bounceInUp">
                                <img class="img-shadow" src="/img/portfolio/hozsklad/account-personal-data.jpg"
                                    alt="">
                            </div>
                        </div>
                        <div class="private-account__cards-container private-account__cards-container3">
                            <div data-wow-delay="0.5s" duration="1s" class="card5 wow bounceInLeft">
                                <img class="img-shadow" src="/img/portfolio/hozsklad/account-viewed-prod.jpg"
                                    alt="">
                            </div>
                            <div data-wow-delay="0.5s" duration="1s" class="card6 wow bounceInDown">
                                <img class="img-shadow" src="/img/portfolio/hozsklad/account-orderlist.jpg"
                                    alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="other-pages">
                <div class="container">
                    <p data-wow-delay="0.5s" duration="1s" class="subtitle subtitle_sq subtitle_sq-left wow flipInX">
                        {!! trans('portfolio/hozsklad.other_pages') !!}
                    </p>

                    <div class="other-pages__inner">
                        <div class="other-pages-wrapper1">
                            <div data-wow-delay="0.5s" duration="1s" class="other-pages-cards1 wow bounceInUp">
                                <img class="img-shadow" src="/img/portfolio/hozsklad/hozsklad-blog.jpg" alt="">
                            </div>
                            <div data-wow-delay="0.5s" duration="1s" class="other-pages-cards1 wow bounceInLeft">
                                <img class="img-shadow" src="/img/portfolio/hozsklad/hozsklad-sertificats.jpg"
                                    alt="">
                            </div>
                            <div data-wow-delay="0.5s" duration="1s" class="other-pages-cards1 wow bounceInDown">
                                <img class="img-shadow" src="/img/portfolio/hozsklad/hozslad-questions.jpg"
                                    alt="">
                            </div>
                            <div data-wow-delay="0.5s" duration="1s" class="other-pages-cards1 wow bounceInRight">
                                <img class="img-shadow" src="/img/portfolio/hozsklad/hozsklad-404.jpg" alt="">
                            </div>
                        </div>

                        <div class="other-pages-wrapper2">
                            <div data-wow-delay="0.5s" duration="1s" class="other-pages-cards2 wow bounceInRight">
                                <img class="img-shadow" src="/img/portfolio/hozsklad/hozsklad-news.jpg" alt="">
                            </div>
                            <div data-wow-delay="0.5s" duration="1s" class="other-pages-cards2 wow bounceInUp">
                                <img class="img-shadow" src="/img/portfolio/hozsklad/hozsklad-login.jpg wow bounceInUp"
                                    alt="">
                            </div>
                            <div data-wow-delay="0.5s" duration="1s" class="other-pages-cards2 wow bounceInRight">
                                <img class="img-shadow" src="/img/portfolio/hozsklad/hozsklad-brands.jpg" alt="">
                            </div>
                            <div data-wow-delay="0.5s" duration="1s" class="other-pages-cards2 wow bounceInDown">
                                <img class="img-shadow" src="/img/portfolio/hozsklad/hozsklad-contacts.jpg"
                                    alt="">
                            </div>
                            <div data-wow-delay="0.5s" duration="1s" class="other-pages-cards2 wow bounceInLeft">
                                <img class="img-shadow" src="/img/portfolio/hozsklad/hozsklad-order-page.jpg"
                                    alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <footer class="end-section">
            <div class="container">
                <div class="end-section__inner">
                    <div data-wow-delay="0.5s" duration="1s" class="wow zoomIn">
                        <img class ="end-section__img" src="/img/portfolio/hozsklad/cleaning_supplies.png"
                            alt="">
                    </div>
                    <div data-wow-delay="0.5s" duration="1s" class="end-section description wow jackInTheBox">
                        <p class="end-section__title"> {!! trans('portfolio/hozsklad.footer1') !!}</p>
                        <span class="end-section__subtitle">{!! trans('portfolio/hozsklad.footer2') !!}</span>
                    </div>
                </div>
            </div>
        </footer>
    </main>
@endsection

@section('bottom-scripts')
    <script src="{{ asset('js/libs.js') }}"></script>
@endsection
