@extends('layouts.portfolio-item')

@section('seo')
    <link rel="canonical" href="{{ Request::url() }}">
    <title>{{ trans('portfolio/boneco.seo_title') }}</title>
    <meta name="description" content="{{ trans('portfolio/boneco.seo_descr') }}">
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/redesign.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/portfolio/boneco.css') }}">
@endsection

@section('content')
    <main>
        <div class="boneco_wrap">
            <main class="boneco">
                <header class="header">
                    <div class="header__container">
                        <div class="header__inner">
                            <div class="header__description">
                                <div data-wow-duration="1s" class="header__logo wow fadeInDown">
                                    <img src="/img/portfolio/boneco/logo.png" alt="логотип.png">
                                </div>
                                <h1 data-wow-delay="0.5s" data-wow-duration="1s" class="header__txt wow fadeInUp">
                                    {{ trans('portfolio/boneco.header_title') }}
                                </h1>
                                <div data-wow-delay="0.5s" data-wow-duration="1s" class="header__icons wow fadeInDown">
                                    <div class="header__img-area">
                                        <img class="header__icon-img" src="/img/portfolio/boneco/icons/laptop.png"
                                            alt="png">
                                    </div>
                                    <div class="header__img-area">
                                        <img class="header__icon-img" src="/img/portfolio/boneco/icons/phone.png"
                                            alt="png">
                                    </div>
                                    <div class="header__img-area">
                                        <img class="header__icon-img" src="/img/portfolio/boneco/icons/tablet.png"
                                            alt="png">
                                    </div>
                                </div>
                                <a data-wow-duration="2s" class="header__button wow fadeInUp"
                                    href="https://www.boneco-shop.ru/" rel="nofollow">
                                    {{ trans('portfolio/boneco.header_button') }}
                                </a>
                            </div>
                        </div>
                    </div>
                    <div data-wow-duration="2s" class="header__phone-laptop wow fadeInRight">
                        <img class="header__img-phone" src="/img/portfolio/boneco/mobile-home.png" alt="png">
                        <img class="header__img-laptop" src="/img/portfolio/boneco/laptop.png" alt="png">
                    </div>
                </header>
                <div class="boneco__content">
                    <div class="col-md-offset-6 col-md-5">
                        <div class="boneco__banner_aim">
                            <h5 class="boneco__boldhead boneco__boldhead-big">{{ trans('portfolio/boneco.task') }}</h5>
                            <p class="boneco__banner_txt-aim">{{ trans('portfolio/boneco.task_text') }}</p>
                        </div>
                    </div>
                    <div class="boneco__topline boneco__topline-left-bottom"></div>
                    <!--top-lines-->
                    <div class="boneco__topline boneco__topline-left"></div>
                    <div class="boneco__topline boneco__topline-mid"></div>
                    <div class="boneco__topline boneco__topline-right"></div>
                    <!--top-lines-->

                    <!--content-->
                    <div class="boneco__color">
                        <div class="container">
                            <div class="row">
                                <span
                                    class="boneco__sidetxt boneco__sidetxt-typo boneco__sidetxt-60 boneco__sidetxt-left">TYPOGRAPHY</span>
                                <div data-wow-duration="1s" class="col-md-offset-1 col-sm-offset-4 col-md-5 wow fadeInLeft">
                                    <p class="boneco__boldhead">Proxima Nova</p>
                                    <p class="boneco__color_example">а б в г д е ё ж з и й к л м н о п р с т у ф х <br> ц ч
                                        ш щ ъ ы ь э ю я</p>
                                    <p class="boneco__color_inner">
                                        <span class="boneco__color_t boneco__color-PNBl">Black</span>
                                        <span class="boneco__color_t boneco__color-PNB">Bold</span>
                                        <span class="boneco__color_t boneco__color-PNSB">Semibold</span>
                                        <span class="boneco__color_t boneco__color-PNR">Regular</span>
                                        <span class="boneco__color_t boneco__color-PNL">Light</span>
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <span class="boneco__sidetxt boneco__sidetxt-110 boneco__sidetxt-right">COLOR</span>
                                <div class="col-md-offset-7 col-lg-3 col-md-4">
                                    <div data-wow-duration="1s" class="boneco__color_wrap wow fadeInRight">
                                        <p class="boneco__boldhead">{{ trans('portfolio/boneco.colors') }}</p>
                                        <div class="boneco__color_wrapinn">
                                            <div class="boneco__color_inn">
                                                <div class="boneco__color_rec boneco__color_rec-blue"></div>
                                                <span class="boneco__color_desc">#3a83a3</span>
                                            </div>
                                            <div class="boneco__color_inn">
                                                <div class="boneco__color_rec boneco__color_rec-red"></div>
                                                <span class="boneco__color_desc">#ed3441</span>
                                            </div>
                                            <div class="boneco__color_inn">
                                                <div class="boneco__color_rec boneco__color_rec-black"></div>
                                                <span class="boneco__color_desc">#222222</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="boneco__pics">
                        <div class="container boneco__pics_wrap">
                            <div class="row">
                                <span
                                    class="boneco__sidetxt boneco__sidetxt-mob boneco__sidetxt-60 boneco__sidetxt-left">MOBILE</span>
                                <div data-wow-duration="1s" class="col-md-offset-1 col-md-3 wow fadeInLeft">
                                    <div class="bnc-img-dn">
                                        <img src="/img/portfolio/boneco/bnc-pic-1.png" alt="">
                                    </div>
                                </div>
                                <div data-wow-duration="1s" class="col-md-offset-1 col-md-6 wow fadeInUp">
                                    <div class="boneco__pics_main_wrap">
                                        <p class="boneco__boldhead boneco__boldhead-pics">
                                            {{ trans('portfolio/boneco.main_page') }}</p>
                                        <img class="img-responsive boneco__pics_main"
                                            src="/img/portfolio/boneco/bnc-full.jpg" alt="">
                                    </div>
                                </div>
                                <span
                                    class="boneco__sidetxt boneco__sidetxt-index boneco__sidetxt-180 boneco__sidetxt-right">HOME
                                    PAGE</span>
                            </div>
                            <div class="boneco__pics_itemsmall">
                                <div class="row">
                                    <span
                                        class="boneco__sidetxt boneco__sidetxt-norm boneco__sidetxt-28 boneco__sidetxt-left">Normal</span>
                                    <span class="boneco__sidetxt boneco__sidetxt-hov boneco__sidetxt-28">Hover</span>
                                    <div data-wow-duration="1s" class="col-md-3 wow fadeInLeft">
                                        <div>
                                            <p class="boneco__boldhead">{{ trans('portfolio/boneco.card') }}</p>
                                            <img class="boneco__pics_border" src="/img/portfolio/boneco/bnc-pic-2.jpg"
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                                <div data-wow-duration="1s" class="row wow fadeInLeft">
                                    <div class="col-md-offset-2 col-md-3">
                                        <div class="boneco__pics_item_02">
                                            <img class="boneco__pics_border" src="/img/portfolio/boneco/bnc-pic-3.jpg"
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <span
                                    class="boneco__sidetxt boneco__sidetxt-catalog boneco__sidetxt-120 boneco__sidetxt-left">CATALOG</span>
                                <span
                                    class="boneco__sidetxt boneco__sidetxt-product boneco__sidetxt-60 boneco__sidetxt-left">
                                    PRODUCT
                                    <span class="boneco__sidetxt boneco__sidetxt-60 boneco__sidetxt-product2">PAGE</span>
                                </span>
                                <div data-wow-duration="1s" class="col-md-offset-1 col-md-6 wow fadeInUp">
                                    <div class="boneco__pics_item_catalog">
                                        <p class="boneco__boldhead">{{ trans('portfolio/boneco.catalog') }}</p>
                                        <img class="boneco__pics_shadow" src="/img/portfolio/boneco/bnc-pic-4.png"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div data-wow-duration="1s" class="col-md-offset-4 col-md-6 wow fadeInRight">
                                    <div class="boneco__pics_item_card">
                                        <p class="boneco__boldhead boneco__boldhead-card">
                                            {{ trans('portfolio/boneco.card_page') }}</p>
                                        <img class="boneco__pics_shadow img-responsive"
                                            src="/img/portfolio/boneco/bnc-pic-5.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="row boneco__sidetxt_wrap">
                                <span
                                    class="boneco__sidetxt boneco__sidetxt-mob2 boneco__sidetxt-60 boneco__sidetxt-right">MOBILE</span>
                                <div data-wow-duration="1s" class="col-md-offset-9 col-md-3 wow fadeInUp">
                                    <div class="boneco__pics_item_mob">
                                        <img class="bnc-img-dn" src="/img/portfolio/boneco/bnc-pic-6.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="row boneco__pics_item_wrap">
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div data-wow-duration="1s" class="wow fadeInUp">
                                        <p class="boneco__boldhead">{{ trans('portfolio/boneco.other_pages') }}</p>
                                        <img class="boneco__pics_shadow" src="/img/portfolio/boneco/bnc-pic-delivery.jpg"
                                            alt="">
                                    </div>
                                </div>
                                <div data-wow-duration="1s" class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp">
                                    <div class="boneco__pics_item_compare">
                                        <img class="boneco__pics_shadow" src="/img/portfolio/boneco/bnc-pic-compare.jpg"
                                            alt="">
                                    </div>
                                </div>
                                <div data-wow-duration="1s" class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp">
                                    <div class="boneco__pics_item_cart">
                                        <img class="boneco__pics_shadow img-responsive"
                                            src="/img/portfolio/boneco/bnc-pic-cart.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="row boneco__pics_bottom">
                                <div data-wow-duration="1s" class="col-md-3 col-sm-4 col-xs-12 wow fadeInUp">
                                    <div class="boneco__pics_item_discount">
                                        <img class="boneco__pics_shadow img-responsive"
                                            src="/img/portfolio/boneco/bnc-pic-discount.png" alt="">
                                    </div>
                                </div>
                                <div data-wow-duration="1s" class="col-md-3 col-sm-4 col-xs-12 wow fadeInUp">
                                    <div class="boneco__pics_item_news">
                                        <img class="boneco__pics_shadow img-responsive"
                                            src="/img/portfolio/boneco/news.png" alt="">
                                    </div>
                                </div>
                                <div data-wow-duration="1s" class="col-md-3 col-sm-4 col-xs-12 wow fadeInUp">
                                    <div class="boneco__pics_item_news-inn">
                                        <img class="boneco__pics_shadow img-responsive"
                                            src="/img/portfolio/boneco/bnc-pic-news-inn.png" alt="">
                                    </div>
                                </div>
                                <div data-wow-duration="1s" class="col-md-3 col-sm-4 col-xs-12 wow fadeInUp">
                                    <div class="boneco__pics_item_f04">
                                        <img class="boneco__pics_shadow img-responsive"
                                            src="/img/portfolio/boneco/bnc-pic-404.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--content-->

                    <!--vert-lines-->
                    <div class="boneco__line boneco__line-left-middle"></div>
                    <div class="boneco__line boneco__line-middle"></div>
                    <div class="boneco__line boneco__line-right-middle"></div>
                    <!--vert-lines-->
                </div>
            </main>
            <div data-wow-duration="1s" class="boneco__last wow fadeInUp" style="padding-bottom: 180px">
                <div class="container">
                    <span class="boneco__sidetxt-last boneco__sidetxt-120">OTHER PAGES</span>
                    <span class="boneco__last_more">And more...</span>
                    <img class="img-responsive boneco__logo" src="/img/portfolio/boneco/logo.png" alt="">
                    <!--            <div class="boneco__sitelink_bottomwrap">-->
                    <!--                <a class="boneco__sitelink" rel="nofollow" href="#">Cмотреть сайт</a>-->
                    <!--            </div>-->
                </div>
            </div>
        </div>
    </main>
@endsection

@section('bottom-scripts')
    <script src="{{ asset('js/libs.js') }}"></script>
@endsection
