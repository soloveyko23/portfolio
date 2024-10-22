@extends('layouts.portfolio-item')

@section('seo')
    <link rel="canonical" href="{{ Request::url() }}">
    <title>{{ trans('portfolio/amore.seo_title') }}</title>
    <meta name="description" content="{{ trans('portfolio/amore.seo_descr') }}">
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/redesign.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/portfolio/amore.css') }}">
@endsection

@section('content')
    <header class="header">
        <div class="header__container">
            <div class="header__inner">
                <div class="header__description">
                    <div class="header__logo wow bounceInDown" data-wow-delay="0s" duration="1s">
                        <img src="/img/portfolio/amore/logo.png" alt="логотип.png">
                    </div>
                    <h1 class="header__txt wow fadeInUp" data-wow-delay="0.5s" duration="1s">
                        {{ trans('portfolio/amore.header_title') }}
                    </h1>
                    <div class="header__icons wow fadeInDown" data-wow-delay="0.5s" duration="1s">
                        <div class="header__img-area">
                            <img class="header__icon-img" src="/img/portfolio/amore/icons/laptop.png" alt="png">
                        </div>
                        <div class="header__img-area">
                            <img class="header__icon-img" src="/img/portfolio/amore/icons/phone.png" alt="png">
                        </div>
                        <div class="header__img-area">
                            <img class="header__icon-img" src="/img/portfolio/amore/icons/tablet.png" alt="png">
                        </div>
                    </div>
                    <a href="https://amoremio-ua.com/" class="header__button wow bounceInUp" rel="nofollow">
                        {{ trans('portfolio/amore.header_button') }}
                    </a>
                </div>
            </div>
        </div>
        <div class="header__phone-laptop wow bounceInRight" data-wow-delay="0s" duration="2s">
            <img class="header__img-phone" src="/img/portfolio/amore/mobile-home.png" alt="png">
            <img class="header__img-laptop" src="/img/portfolio/amore/laptop.png" alt="png">
        </div>
    </header>
    <section class="container color__container">
        <div class="color">
            <div class="color__example">
                <h3 class="amore__name amore__name_color wow bounceInLeft" data-wow-delay="0s" duration="1s">
                    {{ trans('portfolio/amore.colors') }}
                </h3>
                <div class="color__in">
                    <div class="color__wrap wow fadeInUp" data-wow-delay="0.4s" duration="1s">
                        <div class="color__inner color__inner_brown"></div>
                        <p class="color__name">#74675f</p>
                    </div>
                    <div class="color__wrap wow fadeInUp" data-wow-delay="0.5s" duration="1s">
                        <div class="color__inner color__inner_blue"></div>
                        <p class="color__name">#809ec6</p>
                    </div>
                    <div class="color__wrap wow fadeInUp" data-wow-delay="0.6s" duration="1s">
                        <div class="color__inner color__inner_green"></div>
                        <p class="color__name">#b7dc7c</p>
                    </div>
                    <div class="color__wrap wow fadeInUp" data-wow-delay="0.7s" duration="1s">
                        <div class="color__inner color__inner_red"></div>
                        <p class="color__name">#ff7171</p>
                    </div>
                </div>
            </div>
            <div class="color__img wow bounceInRight" data-wow-delay="0.7s" duration="1s">
                <img src="/img/portfolio/amore/color-img.png" alt="color-img.png">
            </div>
        </div>
    </section>
    <section class="container">
        <div class="typo">
            <div class="typo__img wow bounceInLeft" data-wow-delay="0s" duration="1s">
                <img src="/img/portfolio/amore/note-mock.png" alt="note-mock.png">
            </div>
            <div class="typo__txt">
                <h3 class="amore__name amore__name_color wow bounceIn" data-wow-delay="0s" duration="1s">
                    {{ trans('portfolio/amore.fonts') }}
                </h3>
                <div class="typo__inner wow bounceInRight" data-wow-delay="0s" duration="1s">
                    <p class="typo__bellico">Bellico</p>
                    <p class="typo__coquette">CoquetteC</p>
                    <div>
                        <p class="typo__cs">Clear Sans</p>
                        <p class="typo__cs_ex typo__cs_b">Bold</p>
                        <p class="typo__cs_ex typo__cs_r">Regular</p>
                        <p class="typo__cs_ex typo__cs_l">Light</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container prev">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 prev__shad_zi-0 wow fadeIn" data-wow-delay="0s" duration="1s">
                <img class="img-responsive prev__shad" src="/img/portfolio/amore/home.jpg" alt="">
            </div>
            <div class="col-md-2 dn9922 wow bounceInRight" data-wow-delay="0s" duration="1s">
                <p class="prev__name">
                    {{ trans('portfolio/amore.home_page1') }}
                </p>
                <p class="prev__name prev__name_right prev__name_line">
                    {{ trans('portfolio/amore.home_page2') }}
                </p>
            </div>
        </div>
        <div>
            <div class="row">
                <div class="col-md-6 prev__catalog">
                    <div class="prev__catalog-name dn992">
                        <p class="prev__name">
                            {{ trans('portfolio/amore.catalog1') }}
                        </p>
                        <p class="prev__name prev__name_right">
                            {{ trans('portfolio/amore.catalog2') }}
                        </p>
                    </div>
                    <div class="prev__shad_zi-5 wow fadeInUp" data-wow-delay="0s" duration="1s">
                        <img class="img-responsive prev__shad" src="/img/portfolio/amore/cataloge.jpg"
                            alt="cataloge.jpg">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-md-offset-6 prev__p-page wow fadeInUp" data-wow-delay="0s" duration="1s">
                <img class="img-responsive prev__shad" src="/img/portfolio/amore/product-page.jpg"
                    alt="product-page.jpg">
            </div>
        </div>
        <div class="row">
            <div class="prev__phone wow fadeInUp" data-wow-delay="0s" duration="1s">
                <img src="img/portfolio/amore/iphone5.png" alt="iphone5.png">
            </div>
        </div>
    </section>
    <section class="container func__container">
        <div class="func">
            <h3 class="amore__name amore__name_color wow bounceInLeft" data-wow-delay="0s" duration="1s">
                {{ trans('portfolio/amore.func') }}
            </h3>
            <div class="func__wrap">
                <div class="func__list">
                    <h3 class="func__inner wow bounceIn" data-wow-delay="0s" duration="1s">
                        <span class="func__number func__number_1">1</span>
                        <p class="func__name"><span>CMS</span> Opencart PRO</p>
                    </h3>
                    <h3 class="func__inner wow bounceIn" data-wow-delay="0s" duration="1s">
                        <span class="func__number">2</span>
                        <p class="func__name"><span>Framework</span> Bootstrap 3</p>
                    </h3>
                    <h3 class="func__inner wow bounceIn" data-wow-delay="0s" duration="1s">
                        <span class="func__number">3</span>
                        <p class="func__name">{!! trans('portfolio/amore.func_name1') !!}</p>
                    </h3>
                    <h3 class="func__inner wow bounceIn" data-wow-delay="0s" duration="1s">
                        <span class="func__number">4</span>
                        <p class="func__name">{!! trans('portfolio/amore.func_name2') !!}</p>
                    </h3>
                </div>
                <div class="func__img wow bounceInRight" data-wow-delay="0s" duration="1s">
                    <img src="/img/portfolio/amore/func-img.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="container another__container">
        <h3 class="amore__name amore__name_another wow bounceIn" data-wow-delay="0s" duration="1s">
            {{ trans('portfolio/amore.others') }}
        </h3>
        <div class="row">
            <div class="col-md-8 wow fadeInLeft" data-wow-delay="0s" duration="1s">
                <img class="img-responsive prev__shad" src="/img/portfolio/amore/contact.jpg" alt="contact.jpg">
            </div>
        </div>
        <div class="row">
            <div class="col-md-7 col-md-offset-5 another__404 wow fadeInRight">
                <img class="img-responsive prev__shad" src="/img/portfolio/amore/notfound.jpg" alt="notfound.jpg">
            </div>
        </div>
    </section>
    <section class="bottom">
        <div class="bottom__wrap">
            <img class="bottom__img" src="img/portfolio/amore/bottom.gif" alt="bottom.gif">
        </div>
        <h5 class="bottom__name">Amore mio</h5>
    </section>
@endsection

@section('bottom-scripts')
    <script src="{{ asset('js/libs.js') }}"></script>
@endsection
