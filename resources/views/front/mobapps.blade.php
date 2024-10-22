@extends('layouts.default')

@section('seo')
    <title> {{ trans('partials/mobapps-tech.seo_title') }}</title>
    <meta name="description" content="{{ trans('partials/mobapps-tech.seo_descr') }}">
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mobapps.css') }}">
    <link rel="stylesheet" href="{{ asset('css/redesign.css') }}">
@endsection

@section('content')
    <main class="mobapps">
        <section class="banner full-height">
            <div class="container">
                <div class="banner__wrapper">
                    <div class="banner__top">
                        <div class="bread-crumbs">
                            <div class="bread-crumbs__inner">
                                <ul class="bread-crumbs__list" itemscope itemtype="http://schema.org/BreadcrumbList">
                                    <li class="bread-crumbs__list-item" itemprop="itemListElement" itemscope
                                        itemtype="http://schema.org/ListItem">
                                        <a href="{{ url('/') }}" class="bread-crumbs__link" itemprop="item">
                                            <span itemprop="name">{{ trans('partials/mobapps-tech.crumbs_main') }}</span>
                                            <meta itemprop="position" content="1">
                                        </a>
                                    </li>
                                    <li class="bread-crumbs__list-item" itemprop="itemListElement" itemscope
                                        itemtype="http://schema.org/ListItem">
                                        <span class="bread-crumbs__current-page" itemprop="name">
                                            {{ trans('partials/mobapps-tech.crumbs_title') }}
                                        </span>
                                        <meta itemprop="position" content="2">
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="banner__cont">
                        <div class="row d-flex">
                            <div class="col-xs-12 col-sm-6 col-sm-offset-3 col-md-offset-0 col-md-6 d-flex">
                                <div class="banner__text">
                                    <h1 class="banner__h1 wow fadeInDown" data-wow-delay="0" data-wow-duration="1s">
                                        {!! trans('partials/mobapps-tech.banner_title') !!}
                                    </h1>
                                    <p class="banner__p wow fadeInDown" data-wow-delay="1s" data-wow-duration="1s">
                                        {{ trans('partials/mobapps-tech.banner_descr') }}
                                    </p>
                                    <button data-togle="#agency-popup"
                                        class="button button__green button__green-solid wow fadeInLeft" data-wow-delay="1s"
                                        data-wow-duration="1s">
                                        {!! trans('partials/mobapps-tech.banner_button') !!}
                                    </button>
                                    <ul class="banner__list">
                                        <li class="wow fadeInLeft" data-wow-delay="0.5s" data-wow-duration="1s">
                                            <p>IOS apps</p>
                                            <svg width="38" height="44" viewBox="0 0 38 44" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M27.8205 0C22.8796 1.65413 19.0291 3.30827 19.5781 10.4762C24.519 9.37342 28.9185 6.61653 27.8205 0ZM12.1286 9.95237C7.37143 9.95237 0.5 14.1429 0.5 22C0.5 33 7.9 44 12.1286 44C15.3 44 17.9429 41.9048 20.0571 41.9048C22.1714 41.9048 24.2857 44 27.4571 44C31.6857 44 36.4429 37.7143 37.5 31.9524C33.8 29.3333 31.1571 27.7619 31.1571 23.0476C31.1571 19.9048 33.8 16.7619 36.9714 14.1428C35.3857 12.0476 32.2143 9.95237 29.0429 9.95237C25.8714 9.95237 22.461 12.439 20.0571 12.5714C17.9429 12.5714 15.3 9.95237 12.1286 9.95237Z"
                                                    fill="white" />
                                            </svg>
                                        </li>
                                        <li class="wow fadeInLeft" data-wow-delay="1s" data-wow-duration="1s">
                                            <p>Android apps</p>
                                            <svg width="38" height="44" viewBox="0 0 38 44" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M2.76985 14.3472H2.65573C1.1928 14.3472 0 15.529 0 16.9701V28.39C0 29.8368 1.1928 31.0148 2.65573 31.0148H2.77179C4.23473 31.0148 5.42753 29.833 5.42753 28.39V16.97C5.42559 15.529 4.23093 14.3472 2.76985 14.3472Z"
                                                    fill="white" />
                                                <path
                                                    d="M6.69922 32.7979C6.69922 34.1244 7.79686 35.2047 9.13994 35.2047H11.7481V41.3732C11.7481 42.8218 12.9447 43.9999 14.4039 43.9999H14.518C15.9829 43.9999 17.1775 42.82 17.1775 41.3732V35.2047H20.8225V41.3732C20.8225 42.8218 22.0229 43.9999 23.482 43.9999H23.5943C25.0591 43.9999 26.2519 42.82 26.2519 41.3732V35.2047H28.8619C30.2031 35.2047 31.3008 34.1244 31.3008 32.7979V14.7661H6.69922V32.7979Z"
                                                    fill="white" />
                                                <path
                                                    d="M25.1273 3.83106L27.199 0.67268C27.3322 0.473473 27.2732 0.2011 27.0697 0.0714025C26.8681 -0.0601241 26.5922 -0.00559718 26.4609 0.199184L24.3131 3.46662C22.7019 2.81465 20.9022 2.44829 19.0017 2.44829C17.0993 2.44829 15.3034 2.81465 13.6884 3.46662L11.5444 0.199184C11.4132 -0.00559718 11.1354 -0.0601241 10.9318 0.0714025C10.7283 0.201013 10.6693 0.473473 10.8024 0.67268L12.876 3.83106C9.13781 5.64047 6.61719 9.05067 6.61719 12.9625C6.61719 13.203 6.63245 13.4397 6.65335 13.6746H31.3518C31.3727 13.4397 31.3861 13.203 31.3861 12.9625C31.3862 9.05067 28.8636 5.64047 25.1273 3.83106ZM13.2755 9.48653C12.6192 9.48653 12.0865 8.96417 12.0865 8.31412C12.0865 7.66406 12.6192 7.14353 13.2755 7.14353C13.9356 7.14353 14.4645 7.66397 14.4645 8.31412C14.4645 8.96426 13.9319 9.48653 13.2755 9.48653ZM24.726 9.48653C24.0696 9.48653 23.537 8.96417 23.537 8.31412C23.537 7.66406 24.0696 7.14353 24.726 7.14353C25.3841 7.14353 25.913 7.66397 25.913 8.31412C25.913 8.96417 25.3841 9.48653 24.726 9.48653Z"
                                                    fill="white" />
                                                <path
                                                    d="M35.3402 14.3472H35.2298C33.7669 14.3472 32.5703 15.529 32.5703 16.9701V28.39C32.5703 29.8368 33.7688 31.0148 35.2298 31.0148H35.3421C36.8069 31.0148 37.9978 29.833 37.9978 28.39V16.97C37.9978 15.529 36.8031 14.3472 35.3402 14.3472Z"
                                                    fill="white" />
                                            </svg>

                                        </li>
                                        <li class="wow fadeInLeft" data-wow-delay="1.5s" data-wow-duration="1s">
                                            <p>mobile web apps</p>
                                            <svg width="44" height="40" viewBox="0 0 44 40" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M38.8438 13.9844V1.52344C38.8438 0.811531 38.2666 0.234375 37.5547 0.234375H1.28906C0.577156 0.234375 0 0.811531 0 1.52344V21.7188H28.5312V17.8516C28.5312 15.7192 30.266 13.9844 32.3984 13.9844H38.8438Z"
                                                    fill="white" />
                                                <path
                                                    d="M0 30.7422C0 31.4541 0.577156 32.0312 1.28906 32.0312H28.5312V24.2969H0V30.7422Z"
                                                    fill="white" />
                                                <path
                                                    d="M25.8672 37.1875H24.5781V34.6094H14.2656V37.1875H12.9766C12.2647 37.1875 11.6875 37.7647 11.6875 38.4766C11.6875 39.1885 12.2647 39.7656 12.9766 39.7656H25.8672C26.5791 39.7656 27.1562 39.1885 27.1562 38.4766C27.1562 37.7647 26.5791 37.1875 25.8672 37.1875Z"
                                                    fill="white" />
                                                <path
                                                    d="M42.7109 16.5625H32.3984C31.6865 16.5625 31.1094 17.1397 31.1094 17.8516V38.4766C31.1094 39.1885 31.6865 39.7656 32.3984 39.7656H42.7109C43.4228 39.7656 44 39.1885 44 38.4766V17.8516C44 17.1397 43.4228 16.5625 42.7109 16.5625ZM37.5547 35.8984C36.8428 35.8984 36.2656 35.3213 36.2656 34.6094C36.2656 33.8975 36.8428 33.3203 37.5547 33.3203C38.2666 33.3203 38.8438 33.8975 38.8438 34.6094C38.8438 35.3213 38.2666 35.8984 37.5547 35.8984Z"
                                                    fill="white" />
                                            </svg>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <img src="/img/moapps_top.png" class="sm-hidden wow fadeInRight mobapps_top_img"
                                data-wow-delay="1s" data-wow-duration="1s" alt="moapps_top">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @include('partials.wedo')

        @include('partials.mobAppsCase')
        @include('partials.advantage')
        @include('partials.mobapps-tech')
        @include('partials.ask', ['formClass' => 'android'])
        @include('partials.our-services')
        @include('partials.contact-us', ['formClass' => 'android'])


        <div id="agency-popup" class="popup js-shape-close">
            <div class="popup__wind">
                <button class="popup__close js-close"></button>
                <div class="popup__wind__top">
                    <p class="popup__title">{{ trans('website.popup_title') }}
                        <span class="popup__subtitle">{{ trans('website.popup_subtitle') }}</span>
                    </p>
                </div>
                <div class="popup__wind__cont">
                    @include('partials.ask-form', [
                        'social' => false,
                        'formId' => 'agency-popup',
                        'formClass' => 'android',
                    ])
                </div>
            </div>
        </div>

    </main>
@endsection

@section('bottom-scripts')
    <script src="{{ asset('js/libs.js') }}"></script>
@endsection
