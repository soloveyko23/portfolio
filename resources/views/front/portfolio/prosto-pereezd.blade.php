@extends('layouts.portfolio-item')

@section('seo')
    <link rel="canonical" href="{{ Request::url() }}">
    <title>{{ trans('portfolio/prosto-pereezd.seo_title') }}</title>
    <meta name="description" content="{{ trans('portfolio/prosto-pereezd.seo_descr') }}">
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/redesign.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/portfolio/prosto-pereezd.css') }}">
@endsection

@section('content')
    <main class="prostoPereezd">
        <!--set meta data-->

        <!--end set meta data-->
        <header class="header">
            <div class="container">
                <div class="header__inner">
                    <div class="header__description">
                        <a data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow bounceInLeft header__logo" href="http://prostopereezd.com/" rel="nofollow">
                            <img src="/img/portfolio/prosto-pereezd/logo.png" alt="логотип.png">
                        </a>
                        <h1 data-wow-delay="0.3s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow bounceInLeft header__txt">
                            {{ trans('portfolio/prosto-pereezd.header_title') }}
                        </h1>
                        <div data-wow-delay="0.6s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow bounceInLeft header__icons">
                            <div class="header__img-area">
                                <img class="header__icon-img" src="/img/portfolio/prosto-pereezd/icons/laptop.png"
                                    alt="png">
                            </div>
                            <div class="header__img-area">
                                <img class="header__icon-img" src="/img/portfolio/prosto-pereezd/icons/phone.png"
                                    alt="png">
                            </div>
                            <div class="header__img-area">
                                <img class="header__icon-img" src="/img/portfolio/prosto-pereezd/icons/tablet.png"
                                    alt="png">
                            </div>
                        </div>
                        <a data-wow-delay="0.9s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow bounceInLeft header__button" href="http://prostopereezd.com/" rel="nofollow">
                            {{ trans('portfolio/prosto-pereezd.header_button') }}
                        </a>
                    </div>
                </div>
            </div>
            <div data-wow-delay="0.2s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                class="wow bounceInDown header__img">
                <img src="/img/portfolio/prosto-pereezd/phone-tablet.png" alt="png">
            </div>
        </header>
        <div class="main">
            <span class="main__border main__border_left"></span>
            <span class="main__border main__border_center"></span>
            <span class="main__border main__border_right"></span>
            <section class="home-page">
                <div class="main__container">
                    <h2 data-wow-delay="0.2s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                        class="wow zoomIn title title__primary home-page__title">
                        {{ trans('portfolio/prosto-pereezd.main_page') }}
                    </h2>
                    <div data-wow-delay="0.2s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                        class="wow bounceInLeft">
                        <img src="/img/portfolio/prosto-pereezd/home-page-img.png" class="home-page__img"
                            alt="home-page-img">
                        <img src="/img/portfolio/prosto-pereezd/main-page-txt.png" class="home-page__img-txt"
                            alt="home-page-img">
                    </div>
                </div>
            </section>
            <section class="icon-animation">
                <div class="main__container">
                    <h2 data-wow-delay="0.2s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                        class="wow zoomIn icon-animation__title title title__primary title__reverse">
                        {{ trans('portfolio/prosto-pereezd.animation') }} </h2>
                    <div class="icon-animation__icons">
                        <div data-wow-delay="0.2s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow zoomIn icon-animation__icon-area">
                            <div id="svgContainer_1" class="icon-animation__icon icon-animation__icon-svg1"></div>
                        </div>
                        <div data-wow-delay="0.5s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow zoomIn icon-animation__icon-area">
                            <div id="svgContainer_2" class="icon-animation__icon icon-animation__icon-svg2"></div>
                        </div>
                        <div data-wow-delay="0.8s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow zoomIn icon-animation__icon-area">
                            <div id="svgContainer_3" class="icon-animation__icon icon-animation__icon-svg3"></div>
                        </div>
                        <div data-wow-delay="1.1s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow zoomIn icon-animation__icon-area">
                            <div id="svgContainer_4" class="icon-animation__icon icon-animation__icon-svg4"></div>
                        </div>
                        <div data-wow-delay="1.5s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow zoomIn icon-animation__icon-area">
                            <div id="svgContainer_5" class="icon-animation__icon icon-animation__icon-svg5"></div>
                        </div>
                        <div data-wow-delay="1.8s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow zoomIn icon-animation__icon-area">
                            <div id="svgContainer_6" class="icon-animation__icon icon-animation__icon-svg6"></div>
                        </div>
                        <div data-wow-delay="2.1s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow zoomIn icon-animation__icon-area">
                            <div id="svgContainer_7" class="icon-animation__icon icon-animation__icon-svg7"></div>
                        </div>
                        <div data-wow-delay="2.4s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow zoomIn icon-animation__icon-area">
                            <div id="svgContainer_8" class="icon-animation__icon icon-animation__icon-svg8"></div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="colors">
                <div class="main__container">
                    <h2 data-wow-delay="0.1s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                        class="wow zoomIn title title__primary colors__title">
                        {{ trans('portfolio/prosto-pereezd.colors') }}
                    </h2>
                    <div class="colors__spheres">
                        <div data-wow-delay="0.1s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow fadeIn colors__sphere-item">
                            <div class="colors__spheres-txt">
                                #dd1d25
                            </div>
                            <div class="colors__sphere-outer">
                                <div class="colors__sphere-inner"></div>
                            </div>
                        </div>
                        <div data-wow-delay="0.5s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow fadeIn colors__sphere-item">
                            <div class="colors__spheres-txt">
                                #F3F3F3
                            </div>
                            <div class="colors__sphere-outer">
                                <div class="colors__sphere-inner colors__sphere-inner_color-gray"></div>
                            </div>
                        </div>
                        <div data-wow-delay="1s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow fadeIn colors__sphere-item">
                            <div class="colors__spheres-txt">
                                #222222
                            </div>
                            <div class="colors__sphere-outer">
                                <div class="colors__sphere-inner colors__sphere-inner_color-black"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="font-solution">
                <div class="main__container">
                    <h2 data-wow-delay="0.1s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                        class="wow zoomIn title title__primary font-solution__title">
                        {{ trans('portfolio/prosto-pereezd.fonts') }}
                    </h2>
                    <div data-wow-delay="0.2s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                        class="wow bounceInLeft title font-solution__subtitle-txt">
                        <div class="font-solution__subtitle">
                            Magistral
                            <div class="font-solution__txt">
                                Extrabold
                            </div>
                        </div>
                    </div>
                    <div data-wow-delay="0.5s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                        class="wow bounceInLeft title font-solution__subtitle-txt">
                        <div class="font-solution__subtitle font-solution__subtitle-txt_oswald">
                            Oswald
                            <div class="font-solution__txt">
                                Bold
                            </div>
                        </div>
                    </div>
                    <div data-wow-delay="0.8s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                        class="wow bounceInLeft title font-solution__subtitle-txt font-solution__subtitle-txt_plex-sans-bold">
                        <div class="font-solution__subtitle">
                            IBM plex Sans
                            <div class="font-solution__bold-regular">
                                <span class="font-solution__txt">
                                    Bold
                                </span>
                                <span class="font-solution__txt font-solution__txt_plex-sans-regular">
                                    Regular
                                </span>
                            </div>
                        </div>
                    </div>
                    <div data-wow-delay="0.3s" data-wow-duration="2s" data-wow-iteration="1" data-wow-offset="0"
                        class="wow fadeIn font-solution__img">
                        <img src="/img/portfolio/prosto-pereezd/A.png" alt="png">
                    </div>
                </div>
            </section>
            <section class="other-pages">
                <div class="main__container">
                    <h2 data-wow-delay="0.1s" data-wow-duration="2s" data-wow-iteration="1" data-wow-offset="0"
                        class="wow zoomIn title title__primary other-pages__title">
                        {{ trans('portfolio/prosto-pereezd.other_pages') }}
                    </h2>
                </div>
                <img src="/img/portfolio/prosto-pereezd/other-pages-bgi.png" class="other-pages__img"
                    alt="home-page-img">
            </section>
            <section class="ty">
                <div class="main__container">
                    <h2 data-wow-delay="0.1s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                        class="wow zoomInLeft title ty__title">
                        {{ trans('portfolio/prosto-pereezd.footer1') }}
                        <span class="ty__subtitle">
                            {{ trans('portfolio/prosto-pereezd.footer2') }}
                        </span>
                    </h2>
                </div>
            </section>
        </div>
    </main>
@endsection

@section('bottom-scripts')
    <script src="{{ asset('js/libs.js') }}"></script>
@endsection

<script src="https://cdnjs.cloudflare.com/ajax/libs/lottie-web/5.7.8/lottie.min.js"
    integrity="sha512-w58XJ/0dVbEfZVJoJyBUOTMGBWmIW4jEYJSA0898d2L0Ghpum0FvwK7qTuHhkTctApzrchv3Neli+28ajI4+fg=="
    crossorigin="anonymous"></script>


<script>
    function animationRun(item) {
        console.log({
            item
        })
        var animation = lottie.loadAnimation({
            container: document.querySelector(item.container),
            renderer: 'svg',
            loop: true,
            autoplay: true,
            path: item.path
        })
    }
    document.addEventListener('DOMContentLoaded', function() {
        let icons = [{
                container: '#svgContainer_1',
                path: '/img/portfolio/prosto-pereezd/anime-icon/safebox.json'
            },
            {
                container: '#svgContainer_2',
                path: '/img/portfolio/prosto-pereezd/anime-icon/Planet.json'
            },
            {
                container: '#svgContainer_3',
                path: '/img/portfolio/prosto-pereezd/anime-icon/Open-box.json'
            },
            {
                container: '#svgContainer_4',
                path: '/img/portfolio/prosto-pereezd/anime-icon/grand-piano.json'
            },
            {
                container: '#svgContainer_5',
                path: '/img/portfolio/prosto-pereezd/anime-icon/Delivery-man.json'
            },
            {
                container: '#svgContainer_6',
                path: '/img/portfolio/prosto-pereezd/anime-icon/Shipping-other.json'
            },
            {
                container: '#svgContainer_7',
                path: '/img/portfolio/prosto-pereezd/anime-icon/Shipping-furniture.json'
            },
            {
                container: '#svgContainer_8',
                path: '/img/portfolio/prosto-pereezd/anime-icon/Shipping.json'
            },
        ]
        icons.forEach(item => {
            animationRun(item)
        })
    })
</script>
