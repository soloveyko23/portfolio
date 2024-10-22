@extends('layouts.portfolio-item')

@section('seo')
    <link rel="canonical" href="{{ Request::url() }}">
    <title>{{ trans('portfolio/doggydogs.seo_title') }}</title>
    <meta name="description" content="{{ trans('portfolio/doggydogs.seo_descr') }}">
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/redesign.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/portfolio/doggydogs.css') }}">
@endsection

@section('content')
    <main class="doggydogs">
        <header class="header">
            <div class="header__container">
                <div class="header__inner">
                    <div class="header__description">
                        <div data-wow-duration="1s" class="header__logo wow fadeInDown">
                            <img src="/img/portfolio/doggydogs/logo.png" alt="логотип.png">
                        </div>
                        <h1 data-wow-delay="0.5s" data-wow-duration="1s" class="header__txt wow fadeInUp">
                            {{ trans('portfolio/doggydogs.header_title') }}
                        </h1>
                        <div data-wow-delay="0.5s" data-wow-duration="1s" class="header__icons wow fadeInDown">
                            <div class="header__img-area">
                                <img class="header__icon-img" src="/img/portfolio/doggydogs/icons/laptop.png"
                                    alt="png">
                            </div>
                            <div class="header__img-area">
                                <img class="header__icon-img" src="/img/portfolio/doggydogs/icons/phone.png" alt="png">
                            </div>
                            <div class="header__img-area">
                                <img class="header__icon-img" src="/img/portfolio/doggydogs/icons/tablet.png"
                                    alt="png">
                            </div>
                        </div>
                        <a data-wow-duration="2s" class="header__button wow  fadeInUp" href="http://doggydog.club/"
                            rel="nofollow">
                            {{ trans('portfolio/doggydogs.header_button') }}
                        </a>
                    </div>
                </div>
            </div>
            <div data-wow-duration="2s" class="header__phone-laptop wow fadeInRight">
                <img class="header__img-phone" src="/img/portfolio/doggydogs/mobile-home.png" alt="png">
                <img class="header__img-laptop" src="/img/portfolio/doggydogs/laptop.png" alt="png">
            </div>
        </header>
        <section class="homepage">
            <div data-wow-duration="1s" class="homepage-first wow zoomIn">
                <img src="/img/portfolio/doggydogs/homepage.png" alt="">
            </div>
        </section>
        <section class="animation-section">
            <div class="custom_container">
                <div data-wow-duration="1s" class="wow bounceInLeft">
                    <h2 class="section_title"> {{ trans('portfolio/doggydogs.animations') }}</h2>
                </div>
                <div class="section_subtitle">
                    <div class="divider"></div>
                    <p>
                        {{ trans('portfolio/doggydogs.animations_text') }}
                    </p>
                </div>
                <div class="animation-video">
                    <video id="video_1" autoplay="autoplay" loop="loop">
                        <source src="/img/portfolio/doggydogs/video.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
                    </video>
                </div>
            </div>
        </section>
        <section class="color-palette">
            <div class="custom_container">
                <div data-wow-duration="1s" class="wow bounceInLeft">
                    <h2 class="section_title">{{ trans('portfolio/doggydogs.colors') }}</h2>
                </div>
                <p class="section_subtext">{{ trans('portfolio/doggydogs.main_colors') }}</p>
                <div class="color-palette-block">
                    <div class="color-palette-img-block">
                        <img src="/img/portfolio/doggydogs/colorpalette-1.png" alt="">
                    </div>
                    <div class="pow-wrap">
                        <div data-wow-delay="0.4s" data-wow-duration="1s" class="item wow bounceIn">
                            <div class="img-block">
                                <img src="/img/portfolio/doggydogs/y-pow.png" alt="">
                            </div>
                            <p>#f2cc66</p>
                        </div>
                        <div data-wow-delay="0.6s" data-wow-duration="1s" class="item wow bounceIn">
                            <div class="img-block">
                                <img src="/img/portfolio/doggydogs/g-pow.png" alt="">
                            </div>
                            <p>#adce78</p>
                        </div>
                        <div data-wow-delay="0.8s" data-wow-duration="1s" class="item wow bounceIn">
                            <div class="img-block">
                                <img src="/img/portfolio/doggydogs/b-pow.png" alt="">
                            </div>
                            <p>#a0d6d9</p>
                        </div>
                        <div data-wow-delay="1s" data-wow-duration="1s" class="item wow bounceIn">
                            <div class="img-block">
                                <img src="/img/portfolio/doggydogs/r-pow.png" alt="">
                            </div>
                            <p>#de4c68</p>
                        </div>
                    </div>
                </div>
                <p class="section_subtext section_subtext_after">{{ trans('portfolio/doggydogs.addidional_colors') }}</p>
                <div class="additional-color-wrap">
                    <div class="item">
                        <div class="circle ad-green"></div>
                        <p>#6bdf96</p>
                    </div>
                    <div class="item">
                        <div class="circle ad-rose"></div>
                        <p>#f177bc</p>
                    </div>
                    <div class="item">
                        <div class="circle ad-blue"></div>
                        <p>#84d7da</p>
                    </div>
                    <div class="item">
                        <div class="circle ad-violet"></div>
                        <p>#bf7efc</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="lettering">
            <div class="custom_container">
                <div data-wow-delay="0.3s" data-wow-duration="1s" class="item wow bounceInDown">
                    <h2 class="section_title">{{ trans('portfolio/doggydogs.fonts') }}</h2>
                </div>
                <div class="lettering-block">
                    <p class="heavy-g">G</p>
                    <div class="alphabet-block">
                        <p class="alphabet-title">GEOMETRIA</p>
                        <p class="alphabet-text">a б в г д е ё ж з и й к л м н о
                            <br>
                            п р с т у ф х ц ч ш щ ъ ы ь э ю я
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="breed-page">
            <div class="custom_container">
                <div data-wow-duration="1s" class="wow zoomInLeft">
                    <h2 class="section_title">{!! trans('portfolio/doggydogs.custom_page') !!}</h2>
                </div>
            </div>
            <div class="breed-filter-page">
                <div class="breed-info">
                    <div class="pow-before">
                        <div name="zoomIn" data-wow-duration="1s">
                            <img src="/img/portfolio/doggydogs/breed-filter.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="breed-single-page">
            <div class="custom_container">
                <div data-wow-duration="1s" class="wow bounceInLeft">
                    <h2 class="section_title">{{ trans('portfolio/doggydogs.breed_page') }}</h2>
                </div>
            </div>
            <div class="pages-wrap">
                <div data-wow-duration="1s" class="page_1 wow zoomIn">
                    <img src="/img/portfolio/doggydogs/single-breed-page.png" alt="">
                </div>
                <div data-wow-duration="1s" class="page_2 img_shadow wow zoomIn">
                    <img src="/img/portfolio/doggydogs/single-breed-page2.png" alt="">
                </div>
                <div data-wow-duration="1s" class="page_3 img_shadow wow zoomIn">
                    <img src="/img/portfolio/doggydogs/single-breed-page3.png" alt="">
                </div>
            </div>
        </section>
        <section class="webinars">
            <div class="custom_container">
                <div data-wow-duration="1s" class="wow bounceInRight">
                    <h2 class="section_title">{{ trans('portfolio/doggydogs.webinars') }}</h2>
                </div>
                <div class="pages-wrap">
                    <div class="block_1">
                        <div data-wow-duration="1s" class="category-block wow slideInLeft">
                            <p class="category-title">{{ trans('portfolio/doggydogs.categories') }}</p>
                            <ul class="category-list">
                                <li class="category-item">
                                    <img src="/img/portfolio/doggydogs/puppies.svg" alt="">
                                    <p>{{ trans('portfolio/doggydogs.item1') }}</p>
                                </li>
                                <li class="category-divider"></li>
                                <li class="category-item">
                                    <img src="/img/portfolio/doggydogs/kinology.svg" alt="">
                                    <p>{{ trans('portfolio/doggydogs.item2') }}</p>
                                </li>
                                <li class="category-divider"></li>
                                <li class="category-item">
                                    <img src="/img/portfolio/doggydogs/veteran.svg" alt="">
                                    <p>{{ trans('portfolio/doggydogs.item3') }}</p>
                                </li>
                                <li class="category-divider"></li>
                                <li class="category-item">
                                    <img src="/img/portfolio/doggydogs/razvedenie.svg" alt="">
                                    <p>{{ trans('portfolio/doggydogs.item4') }}</p>
                                </li>
                                <li class="category-divider"></li>
                                <li class="category-item">
                                    <img src="/img/portfolio/doggydogs/goods.svg" alt="">
                                    <p>{{ trans('portfolio/doggydogs.item5') }}</p>
                                </li>
                            </ul>
                        </div>
                        <div data-wow-duration="1s" class="page_1 img_shadow wow zoomIn">
                            <img src="/img/portfolio/doggydogs/webinarpage1.png" alt="">
                        </div>
                    </div>
                    <div data-wow-duration="1s" class="page_2 img_shadow wow zoomIn">
                        <img src="/img/portfolio/doggydogs/webinarpage2.png" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section class=" knowledge-base">
            <div class="custom_container">
                <div data-wow-duration="1s" class="page_2 img_shadow wow bounceInRight">
                    <h2 class="section_title">{{ trans('portfolio/doggydogs.knowlege_title') }}</h2>
                </div>
                <div class="pages-wrap">
                    <div class="block_1">
                        <div data-wow-duration="1s" class="category-block wow slideInDown">
                            <p class="category-title">{{ trans('portfolio/doggydogs.knowlege_categories') }}</p>
                            <ul class="category-list">
                                <li class="category-item">
                                    <img src="/img/portfolio/doggydogs/az.svg" alt="">
                                    <p>{{ trans('portfolio/doggydogs.knowlege_item1') }}</p>
                                </li>
                                <li class="category-divider"></li>
                                <li class="category-item">
                                    <img src="/img/portfolio/doggydogs/food.svg" alt="">
                                    <p>{{ trans('portfolio/doggydogs.knowlege_item2') }}</p>
                                </li>
                                <li class="category-divider"></li>
                                <li class="category-item">
                                    <img src="/img/portfolio/doggydogs/dress.svg" alt="">
                                    <p>{{ trans('portfolio/doggydogs.knowlege_item3') }}</p>
                                </li>
                                <li class="category-divider"></li>
                                <li class="category-item">
                                    <img src="/img/portfolio/doggydogs/veteran.svg" alt="">
                                    <p>{{ trans('portfolio/doggydogs.knowlege_item4') }}</p>
                                </li>
                                <li class="category-divider"></li>
                                <li class="category-item">
                                    <img src="/img/portfolio/doggydogs/dogtypes.svg" alt="">
                                    <p>{{ trans('portfolio/doggydogs.knowlege_item5') }}</p>
                                </li>
                                <li class="category-divider"></li>
                                <li class="category-item">
                                    <img src="/img/portfolio/doggydogs/pitomnik.svg" alt="">
                                    <p>{!! trans('portfolio/doggydogs.knowlege_item6') !!}</p>
                                </li>
                                <li class="category-divider"></li>
                                <li class="category-item">
                                    <img src="/img/portfolio/doggydogs/goods.svg" alt="">
                                    <p>{{ trans('portfolio/doggydogs.knowlege_item7') }}</p>
                                </li>
                            </ul>
                        </div>
                        <div data-wow-duration="1s" class="page_1 img_shadow wow zoomIn">
                            <img src="/img/portfolio/doggydogs/kbase-page1.png" alt="">
                        </div>
                    </div>
                    <div data-wow-duration="1s" class="page_2 img_shadow wow zoomIn">
                        <img src="/img/portfolio/doggydogs/kbase-page2.png" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section class="user-profile">
            <div class="custom_container">
                <div data-wow-duration="1s" class="wow bounceInDown">
                    <h2 class="section_title">{!! trans('portfolio/doggydogs.user_profile') !!}</h2>
                </div>
                <div class="pages-wrap">
                    <div data-wow-duration="1s" class="page wow zoomIn">
                        <img src="/img/portfolio/doggydogs/userpage1.png" alt="">
                    </div>
                    <div data-wow-duration="1s" class="page wow zoomIn">
                        <img src="/img/portfolio/doggydogs/userpage2.png" alt="">
                    </div>
                    <div data-wow-duration="1s" class="page wow zoomIn">
                        <img src="/img/portfolio/doggydogs/userpage3.png" alt="">
                    </div>
                    <div data-wow-duration="1s" class="page zoomIn">
                        <img src="/img/portfolio/doggydogs/userpage4.png" alt="">
                    </div>
                    <div data-wow-duration="1s" class="page zoomIn">
                        <img src="/img/portfolio/doggydogs/userpage5.png" alt="">
                    </div>
                    <div data-wow-duration="1s" class="page wow zoomIn">
                        <img src="/img/portfolio/doggydogs/userpage6.png" alt="">
                    </div>
                    <div data-wow-duration="1s" class="page wow zoomIn">
                        <img src="/img/portfolio/doggydogs/userpage7.png" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section class="compare-page">
            <div class="custom_container">
                <div data-wow-duration="1s wow bounceInLeft">
                    <h2 class="section_title">{{ trans('portfolio/doggydogs.compare_page') }}</h2>
                </div>
                <div class="page-wrap img_shadow">
                    <div data-wow-duration="1s wow zoomIn">
                        <img src="/img/portfolio/doggydogs/comparepage.png" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section class="thanks">
            <div class="custom_container">
                <div class="thanks-block">
                    <div data-wow-duration="1s" class="wow tada">
                        <p>{!! trans('portfolio/doggydogs.footer') !!}</p>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@section('bottom-scripts')
    <script src="{{ asset('js/libs.js') }}"></script>
@endsection
