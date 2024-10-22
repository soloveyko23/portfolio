@extends('layouts.portfolio-item')

@section('seo')
    <link rel="canonical" href="{{ Request::url() }}">
    <title>{{ trans('portfolio/cosmopolis.seo_title') }}</title>
    <meta name="description" content="{{ trans('portfolio/cosmopolis.seo_descr') }}">
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/redesign.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/portfolio/cosmopolis.css') }}">
@endsection

@section('content')
    <main>
        <header class="header">
            <div class="header__container">
                <div class="header__inner">
                    <div class="header__description">
                        <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow fadeInDown header__logo header__logo-txt">
                            cosmopolis
                        </div>
                        <h1 data-wow-delay="0.5s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow fadeInUp header__txt">
                            {{ trans('portfolio/cosmopolis.header_title') }}
                        </h1>
                        <div data-wow-delay="0.5s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow fadeInDown header__icons">
                            <div class="header__img-area">
                                <img class="header__icon-img" src="/img/portfolio/our-projects/icons/laptop.png"
                                    alt="png">
                            </div>
                            <div class="header__img-area">
                                <img class="header__icon-img" src="/img/portfolio/our-projects/icons/phone.png"
                                    alt="png">
                            </div>
                            <div class="header__img-area">
                                <img class="header__icon-img" src="/img/portfolio/our-projects/icons/tablet.png"
                                    alt="png">
                            </div>
                        </div>
                        <a data-wow-delay="0s" data-wow-duration="2s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow fadeInUp header__button" href="https://cosmopolis.ch/" rel="nofollow">
                            {{ trans('portfolio/cosmopolis.header_button') }}
                        </a>
                    </div>
                </div>
            </div>
            <div data-wow-delay="0s" data-wow-duration="2s" data-wow-iteration="1" data-wow-offset="0"
                class="wow fadeInRight header__phone-laptop">
                <img class="header__img-phone" src="/img/portfolio/cosmopolis/mobile-home.png" alt="png">
                <img class="header__img-laptop" src="/img/portfolio/cosmopolis/laptop.png" alt="png">
            </div>
        </header>
        <section class="main-page">
            <div class="title">
                <div data-wow-delay="1.2s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                    class="wow bounceInDown img-block">
                    <h2>Main<br><span>page</span></h2>
                </div>
                <div data-wow-delay="1.2s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                    class="wow rotateIn black-square">
                </div>
            </div>
            <div class="line"></div>
            <div class="img-block">
                <div data-wow-delay="1.2s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                    class="wow zoomIn">
                    <img src="/img/portfolio/cosmopolis/main-page-bg.png" alt="">
                </div>
            </div>
        </section>
        <section class="main-color">
            <div class="custom_container">
                <div class="color-title">
                    <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                        class="wow bounceInDown">
                        <h2>Color</h2>
                        <div class="line"></div>
                    </div>
                    <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                        class="wow rotateIn black-square">
                    </div>
                </div>
                <div class="color-block">
                    <div>
                        <div class="color-item">
                            <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                                class="wow zoomIn">
                                <img src="/img/portfolio/cosmopolis/main-color-black.png" alt="">
                            </div>
                        </div>
                        <p>#222222</p>
                    </div>
                    <div class="divider"></div>
                    <div>
                        <div class="color-item">
                            <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                                class="wow zoomIn">
                                <img src="/img/portfolio/cosmopolis/main-color-white.png" alt="">
                            </div>
                        </div>
                        <p>#FFFFFF</p>
                    </div>
                </div>
                <div class="additional-colors">
                    <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                        class="wow rotateIn black-square">
                    </div>
                    <p class="additional-title">and additional colors</p>
                    <div>
                        <div data-wow-delay="0.2s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow fadeInUp additional-item">
                            <div class="additional-line blue"></div>
                            <p>#517dd2</p>
                        </div>
                        <div data-wow-delay="0.4s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow fadeInUp additional-item">
                            <div class="additional-line yellow"></div>
                            <p>#f8ea00</p>
                        </div>
                        <div data-wow-delay="0.6s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow fadeInUp additional-item">
                            <div class="additional-line green"></div>
                            <p>#76d600</p>
                        </div>
                        <div data-wow-delay="0.8s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow fadeInUp additional-item">
                            <div class="additional-line red"></div>
                            <p>#f95e6c</p>
                        </div>
                        <div data-wow-delay="1s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow fadeInUp additional-item">
                            <div class="additional-line violet"></div>
                            <p>#8300fa</p>
                        </div>
                        <div data-wow-delay="1.2s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow fadeInUp additional-item">
                            <div class="additional-line lightblue"></div>
                            <p>#20def1</p>
                        </div>
                        <div data-wow-delay="1.4s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow fadeInUp additional-item">
                            <div class="additional-line orange"></div>
                            <p>#f7a700</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="typography">
            <div class="custom_container">
                <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                    class="wow bounceInDown">
                    <h2>Typography</h2>
                </div>
                <div class="line"></div>
                <div class="typography-block">
                    <div class="alphabet alphabet-libre">
                        <p class="alphabet-title">Libre Baskerville</p>
                        <p>a b c d e f g h i j k l m n o
                            <br>
                            p q r s t u v w x y z
                        </p>
                    </div>
                    <div class="divider"></div>
                    <div class="alphabet alphabet-quicksand">
                        <p class="alphabet-title">Quicksand</p>
                        <p>a b c d e f g h i j k l m n o
                            <br>
                            p q r s t u v w x y z
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="category">
            <div class="category_container">
                <div class="title">
                    <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                        class="wow bounceInDown">
                        <h2>Category<br><span>page</span></h2>
                        <div class="line"></div>
                    </div>
                    <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                        class="wow rotateIn black-square"></div>
                </div>
                <div class="line"></div>
                <div class="img-block">
                    <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                        class="wow zoomIn">
                        <img src="/img/portfolio/cosmopolis/categorypage.png" alt="">
                    </div>
                </div>
            </div>
            <div class="each-category">
                <div class="custom_container">
                    <div class="each-category-title-block">
                        <p class="each-category-title">Each category has its own <span>color</span></p>
                        <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow rotateIn black-square">
                        </div>
                    </div>
                </div>
                <div class="each-category-img-block">
                    <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                        class="wow zoomIn">
                        <img src="/img/portfolio/cosmopolis/category-menu.png" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section class="article-page">
            <div class="custom_container">
                <div class="title">
                    <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                        class="wow rotateIn black-squares">
                        <img src="/img/portfolio/cosmopolis/two-squares.png" alt="">
                    </div>
                    <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                        class="wow bounceInDown article-title-block">
                        <h2>Article<br><span>page</span></h2>
                        <div class="line"></div>
                    </div>
                </div>
                <div class="img-block">
                    <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                        class="wow zoomIn">
                        <img src="/img/portfolio/cosmopolis/articlepage.png" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section class="functional">
            <div class="custom_container">
                <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                    class="wow bounceInDown">
                    <h2>Functional</h2>
                </div>
                <div class="line"></div>
                <div class="functional-block">
                    <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                        class="wow fadeInLeft functional-item">
                        <p>cms<br><span>Wordpress</span></p>
                        <img src="/img/portfolio/cosmopolis/wp-logo.png" alt="">
                    </div>
                    <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                        class="wow fadeInRight functional-item">
                        <p>framework<br><span>Bootstrap 4</span></p>
                        <img src="/img/portfolio/cosmopolis/b-logo.png" alt="">
                    </div>
                </div>
                <div class="info-block">
                    <div class="info-item">
                        <ul>
                            <li>3 unique language versions</li>
                            <li>More than 40 unique categories</li>
                        </ul>
                    </div>
                    <div class="info-item">
                        <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow rotateIn functional-item">
                            <img src="/img/portfolio/cosmopolis/two-squares(2).png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="thanks">
            <h2>Thanks<br><span>for watching!</span></h2>
        </section>
    </main>
@endsection

@section('bottom-scripts')
    <script src="{{ asset('js/libs.js') }}"></script>
@endsection
