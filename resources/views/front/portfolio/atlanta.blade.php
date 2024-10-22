@extends('layouts.portfolio-item')

@section('seo')
    <link rel="canonical" href="{{ Request::url() }}">
    <title>{{ trans('portfolio/atlanta.seo_title') }}</title>
    <meta name="description" content="{{ trans('portfolio/atlanta.seo_descr') }}">
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/redesign.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/portfolio/atlanta.css') }}">
@endsection

@section('content')
    <main class="atlanta">
        <header class="header">
            <div class="container">
                <div class="header__inner">
                    <div class="header__description">
                        <a href="http://blog.atlanta.ua/" class="header__logo" rel="nofollow" data-wow-delay="0.2s"
                            data-wow-duration="1s">
                            <img src="/img/portfolio/atlanta/logo.png" alt="логотип">
                        </a>
                        <h1 class="header__txt wow bounceInLeft" data-wow-delay="0.5s" data-wow-duration="1s">
                            {{ trans('portfolio/atlanta.header_title') }}
                        </h1>
                        <div class="header__icons wow bounceInLeft" data-wow-delay="0.8s" data-wow-duration="1s">
                            <div class="header__img-area">
                                <img class="header__icon-img" src="/img/portfolio/atlanta/icons/laptop.png" alt="png">
                            </div>
                            <div class="header__img-area">
                                <img class="header__icon-img" src="/img/portfolio/atlanta/icons/phone.png" alt="png">
                            </div>
                            <div class="header__img-area">
                                <img class="header__icon-img" src="/img/portfolio/atlanta/icons/tablet.png" alt="png">
                            </div>
                        </div>
                        <a href="http://blog.atlanta.ua/" class="header__button" rel="nofollow" data-wow-delay="0.8s"
                            data-wow-duration="1s">
                            {{ trans('portfolio/atlanta.header_button') }}
                        </a>
                    </div>
                </div>
            </div>
            <div class="header__img wow zoomIn" data-wow-delay="0.5s" data-wow-duration="1s">
                <img src="/img/portfolio/atlanta/phone-tablet.png" alt="png">
            </div>
        </header>
        <div class="main">
            <section class="home-page">
                <div class="main__container">
                    <h2 class="title title__primary home-page__title wow flipInY" data-wow-delay="0.2s"
                        data-wow-duration="1s">
                        {{ trans('portfolio/atlanta.main_page1') }}
                        <span class="title title__secondary">
                            {{ trans('portfolio/atlanta.main_page2') }}
                        </span>
                    </h2>
                    <div class="home-page__img wow slideInUp" data-wow-delay="0.5s" data-wow-duration="1s">
                        <img src="/img/portfolio/atlanta/home-page-img.png" class="home-page__img" alt="img">
                    </div>
                    <div class="wow zoomIn" data-wow-delay="0" data-wow-duration="1s">
                        <img src="/img/portfolio/atlanta/home-page-txt.png" class="home-page__img" alt="img">
                    </div>
                </div>
            </section>
            <section class="menu">
                <img src="/img/portfolio/atlanta/menu-bgi.png" class="menu__bgi" alt="img">
                <div class="main__container">
                    <div class="menu__inner">
                        <img src="/img/portfolio/atlanta/menu-img.png" class="menu__img" alt="img">
                        <h2 class="title title__primary title__reverse">Menu</h2>
                    </div>
                </div>
            </section>
            <section class="colors">
                <div class="main__container">
                    <div class="colors__inner">
                        <h2 class="title title__primary colors__inner-title wow flipInY" data-wow-delay="1s"
                            data-wow-duration="0.5s">
                            {{ trans('portfolio/atlanta.colors1') }}
                            <span class="title title__secondary">
                                {{ trans('portfolio/atlanta.colors2') }}
                            </span>
                        </h2>
                        <div class="colors__inner-item wow bounceInDown" data-wow-delay="1s" data-wow-duration="0.5s">
                            <div class="colors__inner-elipse"></div>
                            <span class="colors__inner-txt">
                                #D5B26B
                            </span>
                        </div>
                        <div class="colors__inner-spheres">
                            <div class="colors__inner-sphere colors__inner-sphere_color-1 wow bounceInUp"
                                data-wow-delay="1s" data-wow-duration="1s"></div>
                            <div class="colors__inner-sphere colors__inner-sphere_color-2 wow bounceInDown"
                                data-wow-delay="1s" data-wow-duration="1.2s"></div>
                            <div class="colors__inner-sphere colors__inner-sphere_color-3 wow bounceInUp"
                                data-wow-delay="1s" data-wow-duration="1.4s"></div>
                            <div class="colors__inner-sphere colors__inner-sphere_color-4 wow bounceInDown"
                                data-wow-delay="1s" data-wow-duration="1.6s"></div>
                            <div class="colors__inner-sphere colors__inner-sphere_color-5 wow bounceInUp"
                                data-wow-delay="1s" data-wow-duration="1.8s"></div>
                            <div class="colors__inner-sphere colors__inner-sphere_color-6 wow bounceInDown"
                                data-wow-delay="1s" data-wow-duration="2s"></div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="font-solution">
                <div class="main__container">
                    <div class="font-solution__inner">
                        <div class="wow fadeInLeft" data-wow-delay="1s" data-wow-duration="1s">
                            <div class="font-solution__img-area">
                                <img src="/img/portfolio/atlanta/A.png" class="font-solution__img" alt="img">
                            </div>
                            <div class="font-solution__inner-proxima">
                                <h3 class="title font-solution__inner-title">
                                    Proxima Nova
                                </h3>
                                <span class="font-solution__txt font-solution__inner-txt font-solution__inner-txt_big">
                                    а б в г д е ё ж з и й к л м н о п р с т у ф х ц ч ш щ ъ ы ь э ю я
                                </span>
                                <span class="font-solution__txt font-solution__inner-txt font-solution__inner-txt_small">
                                    а б в г д е ё ж з и й к л м н о п р с т у ф х ц ч ш щ ъ ы ь э ю я
                                </span>
                            </div>
                        </div>
                        <div class="title title__primary font-solution__title wow flipInY" data-wow-delay="1s"
                            data-wow-duration="2s">
                            {{ trans('portfolio/atlanta.fonts1') }}
                            <span class="title title__secondary font-solution__subtitle">
                                {{ trans('portfolio/atlanta.fonts2') }}
                            </span>
                        </div>
                    </div>
                </div>
            </section>
            <section class="article-page">
                <div class="main__container">
                    <h3 class="title title__secondary article-page__title wow zoomIn" data-wow-delay="1s"
                        data-wow-duration="1s">
                        {{ trans('portfolio/atlanta.article1') }}
                        <span class="title title__primary article-page__subtitle">
                            {{ trans('portfolio/atlanta.article2') }}
                        </span>
                    </h3>
                    <div class="wow fadeInUp" data-wow-delay="1s" data-wow-duration="1s">
                        <img src="/img/portfolio/atlanta/article-page-img.png" class="article-page__img" alt="img">
                    </div>
                    <div class="wow zoomIn" data-wow-delay="1s" data-wow-duration="1s">
                        <img src="/img/portfolio/atlanta/article.png" class="article-page__img" alt="img">
                    </div>
                </div>
            </section>
            <section class="ty">
                <div class="title title__primary ty__title wow jackInTheBox" data-wow-delay="1s" data-wow-duration="1s">
                    {{ trans('portfolio/atlanta.footer1') }}
                    <span class="title title__secondary ty__subtitle">
                        {{ trans('portfolio/atlanta.footer2') }}
                    </span>
                </div>
            </section>
        </div>
    </main>
@endsection

@section('bottom-scripts')
    <script src="{{ asset('js/libs.js') }}"></script>
@endsection
