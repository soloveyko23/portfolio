@extends('layouts.portfolio-item')

@section('seo')
    <link rel="canonical" href="{{ Request::url() }}">
    <title>{{ trans('portfolio/bravetattoo.seo_title') }}</title>
    <meta name="description" content="{{ trans('portfolio/bravetattoo.seo_descr') }}">
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/redesign.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/portfolio/bravetattoo.css') }}">
@endsection

@section('content')
    <main class="bravetattoo">
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="header__container ">

                        <div class="header__inner">

                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 col-lg-offset-1">
                                <div class="header__descr posr">

                                    <div data-wow-duration="1s" class="header__logo wow fadeInDown">
                                        <img src="/img/portfolio/bravetattoo/logo.png" alt="логотип.png">
                                    </div>
                                    <h1 class="h1" data-wow-delay="0.5s" data-wow-duration="1s"
                                        class="header__txt wow fadeInUp">
                                        {!! trans('portfolio/bravetattoo.header_title') !!}
                                    </h1>
                                    <div data-wow-delay="0.5s" data-wow-duration="1s" class="header__icons wow fadeInDown">
                                        <div class="header__icons-icon">
                                            <img class="header__icon-img" src="/img/portfolio/bravetattoo/icons/laptop.png"
                                                alt="png">
                                        </div>
                                        <div class="header__icons-icon">
                                            <img class="header__icon-img" src="/img/portfolio/bravetattoo/icons/phone.png"
                                                alt="png">
                                        </div>
                                        <div class="header__icons-icon">
                                            <img class="header__icon-img" src="/img/portfolio/bravetattoo/icons/tablet.png"
                                                alt="png">
                                        </div>
                                    </div>
                                    <a data-wow-duration="2s" class="header__button button wow fadeInUp"
                                        href="https://bravetattoo.com/" rel="nofollow">
                                        {{ trans('portfolio/bravetattoo.header_button') }}
                                    </a>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-8">
                                <div data-wow-duration="2s" class="header__img wow fadeInRight">
                                    {{-- <img class="header__img-phone" src="/img/portfolio/bravetattoo/mobile-home.png" alt="png"> --}}
                                    <img class="header__img-laptop" src="/img/portfolio/bravetattoo/laptop.png"
                                        alt="png">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <section class="mainpage">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                        <p class="h1_decor">
                            <span>01</span> Main <span>DESKTOP & mobile </span>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                        <div class="imggorder">
                            <img src="/img/portfolio/bravetattoo/mainpage.jpg" alt="">
                        </div>
                    </div>
                </div>

            </div>
            <div class="mainpage-phones">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12  col-sm-3 col-sm-offset-2">
                            <img src="/img/portfolio/bravetattoo/main_phone.jpg" class="bradius" alt="">
                        </div>
                        <div class="col-xs-12  col-sm-3 ">
                            <img src="/img/portfolio/bravetattoo/main_phone1.jpg" class="bradius" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="menu">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-10 col-sm-offset-1">

                        <p class="h1_decor inverse">
                            <span>02</span> menu <span>DESKTOP & mobile </span>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                        <div class="imggorder">
                            <img src="/img/portfolio/bravetattoo/menu.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-sm-offset-7">
                        <img src="/img/portfolio/bravetattoo/menu_phone.jpg" class="bradius" alt="">
                    </div>
                </div>
            </div>
            <img src="/img/portfolio/bravetattoo/menu_decor.jpg" class="decor menu_decor" alt="">

        </section>
        <section class="services">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-10 col-sm-offset-1">

                        <p class="h1_decor">
                            <span>03</span> services <span>DESKTOP </span>
                        </p>
                    </div>
                    <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                        <div class="imggorder">
                            <img src="/img/portfolio/bravetattoo/services.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="face">
            <img src="/img/portfolio/bravetattoo/face.jpg" alt="face">
        </section>
        <section class="fonts cercle_decor">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                        <p class="h1_decor">
                            <span>04</span>typography <span> fonts </span>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-4 col-sm-offset-2 ">
                        <p class="fonts_name">
                            heading
                        </p>
                    </div>
                    <div class="col-xs-12 col-sm-5">
                        <p class="fonts_fname BebasNeue">
                            Bebas Neue
                        </p>
                        <p class="fonts_example BebasNeue">
                            а б в г д е ё ж з и й к л м н о п <br> р с т у ф х ц ч ш щ ъ ы ь э ю я
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-4 col-sm-offset-2 ">
                        <p class="fonts_name">
                            paragraph
                        </p>
                    </div>
                    <div class="col-xs-12 col-sm-5">
                        <p class="fonts_fname Gilroy">
                            Gilroy
                        </p>
                        <p class="fonts_text Gilroy">
                            Brave Tatto - профессиональная тату студия, расположенная
                            в центре Одессы. Предлагаемые нашими художниками услуги по нанесению однотонных и сложных
                            рисунков помогут вам реализовать свои замыслы по украшению своего тела.
                        </p>
                        <p class="fonts_text Gilroy shad">
                            Наличие профильного образования, большого практического опыта, а самое главное - огромной любви
                            к своей работе
                            и жизни в целом позволяют мастерам Brave Tattoo профессионально выполнять заказы любой
                            сложности.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="ourteam">
            <div class="bg-red">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-10 col-sm-offset-1">

                            <p class="h1_decor inverse">
                                <span>05</span> our team <span>DESKTOP & mobile </span>
                            </p>
                        </div>
                        <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                            <div class="imggorder">
                                <img src="/img/portfolio/bravetattoo/team.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ourteam-footer ">
                <div class="container ">
                    <div class="row d-flex">
                        <div class="col-xs-12 col-sm-4 cercle_decor">

                        </div>
                        <div class="col-xs-12 col-sm-3">
                            <img src="/img/portfolio/bravetattoo/team_mobile.jpg" class="bradius" alt="">
                        </div>
                        <div class="col-xs-12 col-sm-3">
                            <img src="/img/portfolio/bravetattoo/team_mobile1.jpg" class="bradius" alt="">
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <section class="404">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                        <p class="h1_decor">
                            <span>06</span> 404 page <span>DESKTOP </span>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                        <div class="imggorder">
                            <img src="/img/portfolio/bravetattoo/404.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="thanks">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                        <p>
                            <span class="red">
                                thank <br>
                            </span>
                            <span class="red">you</span> for <br>
                            watching
                        </p>
                    </div>
                </div>
            </div>
            <img src="/img/portfolio/bravetattoo/thanks.jpg" alt="" class=" decor thanks_decor">
        </section>
    </main>
@endsection

@section('bottom-scripts')
    <script src="{{ asset('js/libs.js') }}"></script>
@endsection
