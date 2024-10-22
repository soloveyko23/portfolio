@extends('layouts.portfolio-item')

@section('seo')
    <link rel="canonical" href="{{ Request::url() }}">
    <title>{{ trans('portfolio/l-america.seo_title') }}</title>
    <meta name="description" content="{{ trans('portfolio/l-america.seo_descr') }}">
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/redesign.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/portfolio/l-america.css') }}">
@endsection

@section('content')
    <main class='l-america'>
        <header class="header">
            <div class="header__container">
                <div class="header__inner">
                    <div class="header__description">
                        <div data-wow-duration="1s" class="header__logo wow fadeInDown">
                            <img src="/img/portfolio/l-america/logo.png" alt="логотип.png">
                        </div>
                        <h1 data-wow-delay="0.5s" data-wow-duration="1s" class="header__txt wow fadeInUp">
                            {{ trans('portfolio/l-america.header_title') }}
                        </h1>
                        <div data-wow-delay="0.5s" data-wow-duration="1s" class="header__icons wow fadeInDown">
                            <div class="header__img-area">
                                <img class="header__icon-img" src="/img/portfolio/l-america/icons/laptop.png"
                                    alt="png">
                            </div>
                            <div class="header__img-area">
                                <img class="header__icon-img" src="/img/portfolio/l-america/icons/phone.png" alt="png">
                            </div>
                            <div class="header__img-area">
                                <img class="header__icon-img" src="/img/portfolio/l-america/icons/tablet.png"
                                    alt="png">
                            </div>
                        </div>
                        <a data-wow-delay="0s" data-wow-duration="2s" class="header__button wow fadeInUp"
                            href="http://ilp.org.ua/" rel="nofollow">
                            {{ trans('portfolio/l-america.header_button') }}
                        </a>
                    </div>
                </div>
            </div>
            <div data-wow-delay="0s" data-wow-duration="2s" class="header__phone-laptop wow fadeInRight">
                <img class="header__img-phone" src="/img/portfolio/l-america/mobile-home.png" alt="png">
                <img class="header__img-laptop" src="/img/portfolio/l-america/laptop.png" alt="png">
            </div>
        </header>
        <section class="l-america__yellow l-america__content">
            <div class="container">
                <div data-wow-delay="0s" data-wow-duration="1s" class="row wow fadeInRight">
                    <div class="col-md-offset-7 col-md-5">
                        <div class="l-america__content_aim">
                            <h5 class="l-america__bold-txt l-america__bold-txt_left">
                                {{ trans('portfolio/l-america.task') }}</h5>
                            <p class="l-america__content_txt">{{ trans('portfolio/l-america.task_text') }}</p>
                        </div>
                    </div>
                </div>
                <div data-wow-delay="0s" data-wow-duration="1s" class="row wow fadeInLeft">
                    <div class="col-md-5">
                        <div class="l-america__content_aim">
                            <h5 class="l-america__bold-txt l-america__bold-txt_left">
                                {{ trans('portfolio/l-america.tools1') }}</h5>
                            <p class="l-america__content_txt">{{ trans('portfolio/l-america.tools2') }}</p>
                            <p class="l-america__content_txt l-america__content_txt-p0">Framework - bootstrap 4</p>
                            <p class="l-america__content_txt l-america__content_txt-p0">
                                {{ trans('portfolio/l-america.tools3') }} - GULP,
                                SASS</p>
                        </div>
                    </div>
                </div>
                <div data-wow-delay="0s" data-wow-duration="1s" class="row wow fadeInRight">
                    <div class="col-md-offset-6 col-md-5">
                        <div class="l-america__content_girl">
                            <img src="/img/portfolio/l-america/la-girl.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="l-america__content_wrap">
                        <div data-wow-delay="0s" data-wow-duration="1s" class="col-md-offset-1 col-md-3 wow fadeInLeft">
                            <div>
                                <img class="img-responsive" src="/img/portfolio/l-america/la-tree.png" alt="">
                            </div>
                        </div>
                        <div data-wow-delay="0s" data-wow-duration="1s" class="col-md-offset-2 col-md-6 wow fadeInRight">
                            <div class="l-america__content_color">
                                <h5 class="l-america__bold-txt l-america__bold-before l-america__bold-txt_left">
                                    {{ trans('portfolio/l-america.color') }} </h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="l-america__content_tree">
                    <div data-wow-delay="0s" data-wow-duration="1s" class="row wow fadeInLeft">
                        <div class="col-md-6">
                            <div>
                                <p class="l-america__content_color-txt">{{ trans('portfolio/l-america.main_colors') }}</p>
                                <div class="l-america__content_colorwrap">
                                    <div class="l-america__content_colorinner">
                                        <span class="l-america__content_colorinner_txt">#3b3b90</span>
                                    </div>
                                    <div class="l-america__content_colorinner l-america__content_colorinner-black">
                                        <span class="l-america__content_colorinner_txt">#222222</span>
                                    </div>
                                    <div class="l-america__content_colorinner l-america__content_colorinner-red">
                                        <span class="l-america__content_colorinner_txt">#e75048</span>
                                    </div>
                                    <div class="l-america__content_colorinner l-america__content_colorinner-white">
                                        <span class="l-america__content_colorinner_txt">#ffffff</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-wow-delay="0s" data-wow-duration="1s" class="row wow fadeInRight">
                        <div class="col-md-offset-4 col-lg-5 col-md-6">
                            <div class="l-america__content_typo">
                                <h5 class="l-america__bold-txt l-america__bold-before l-america__bold-before-typo">
                                    {{ trans('portfolio/l-america.fonts') }}</h5>
                            </div>
                        </div>
                    </div>
                    <div data-wow-delay="0s" data-wow-duration="1s" class="l-america__content_tree_wrap wow fadeInRight">
                        <img src="/img/portfolio/l-america/la-tree.png" alt="">
                    </div>
                </div>
                <div data-wow-delay="0s" data-wow-duration="1s" class="row wow fadeInLeft">
                    <div class="col-md-5 col-sm-7">
                        <div class="l-america__content_typo_example">
                            <p class="l-america__content_typo_PR">Freakomix by Avdo</p>
                            <p class="l-america__content_typo_txtFA">а б в г д е ё ж з и й к л м н о п р с т у ф х ц ч ш щ
                                ъ ы ь э ю я</p>
                        </div>
                    </div>
                </div>
                <div data-wow-delay="0s" data-wow-duration="1s" class="row wow fadeInRight">
                    <div class="col-md-offset-8 col-sm-offset-5 col-md-4 col-sm-7">
                        <div class="l-america__content_typo_example l-america__content_typo_example-right">
                            <p class="l-america__content_typo_PR">Play</p>
                            <p>
                                <span class="l-america__content_typo_PR-mini">Regular</span>
                                <span class="l-america__content_typo_PB-mini">Bold</span>
                            </p>
                            <p class="l-america__content_typo_txtPB">а б в г д е ё ж з и й к л м н о п р с т у ф х ц ч ш щ
                                ъ ы ь э ю я</p>
                        </div>
                    </div>
                </div>
                <div data-wow-delay="0s" data-wow-duration="1s" class="l-america__main wow bounceInUp">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="l-america__main_wrap">
                                <h5 class="l-america__bold-txt"> {{ trans('portfolio/l-america.main_page') }}</h5>
                                <div class="l-america__main_inner">
                                    <div class="l-america__main_page">
                                        <img class="img-responsive l-america__main_img"
                                            src="/img/portfolio/l-america/la-full.jpg" alt="">
                                    </div>
                                    <div class="l-america__main_wrap_treesmall l-america__treereverse">
                                        <img class="img-responsive" src="/img/portfolio/l-america/la-tree.png"
                                            alt="">
                                    </div>
                                    <div
                                        class="l-america__main_wrap_treesmall l-america__main_wrap_treesmall-right l-america__treereverse">
                                        <img class="img-responsive" src="/img/portfolio/l-america/la-tree.png"
                                            alt="">
                                    </div>
                                    <div class="l-america__main_wrap_boy">
                                        <img src="/img/portfolio/l-america/la-boy.png" alt="">
                                    </div>
                                    <div class="l-america__main_wrap_mobile">
                                        <img class="img-responsive" src="/img/portfolio/l-america/la-mobile.png"
                                            alt="">
                                    </div>
                                    <div class="l-america__main_wrap_mockup">
                                        <img src="/img/portfolio/l-america/la-mock.png" alt="">
                                    </div>
                                    <div class="l-america__main_wrap_tooltip">
                                        <p class="l-america__main_wrap_tooltip-p">
                                            {{ trans('portfolio/l-america.adaptive') }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="l-america__other">
            <div class="container l-america__other_inn">
                <div data-wow-delay="0s" data-wow-duration="1s" class="row wow bounceInUp">
                    <div class="col-md-12">
                        <h5 class="l-america__bold-txt l-america__bold-before l-america__bold-txt_another">
                            {{ trans('portfolio/l-america.other_pages') }}</h5>
                        <div class="l-america__other_poster">
                            <img class="img-responsive l-america__other_poster_inn"
                                src="/img/portfolio/l-america/la-bottom-other-pages.png" alt="">
                            <div class="l-america__other_tree">
                                <img class="img-responsive" src="/img/portfolio/l-america/la-tree.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="l-america__other_bottom wow fadeInUp">
                <img src="/img/portfolio/l-america/la-bg-down.png" alt="">
            </div>
        </div>
    </main>
@endsection

@section('bottom-scripts')
    <script src="{{ asset('js/libs.js') }}"></script>
@endsection
