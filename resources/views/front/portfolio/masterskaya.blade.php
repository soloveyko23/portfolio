@extends('layouts.portfolio-item')

@section('seo')
    <link rel="canonical" href="{{ Request::url() }}">
    <title>{{ trans('portfolio/masterskaya.seo_title') }}</title>
    <meta name="description" content="{{ trans('portfolio/masterskaya.seo_descr') }}">
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/redesign.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/portfolio/masterskaya.css') }}">
@endsection

@section('content')
    <main class="masterskaya" id="mir">
        <!--set meta data-->
        <vue-headful title="{{ trans('portfolio/masterskaya.headful_title') }}" keywords="" />
        <!--end set meta data-->
        <div class="main_mir">
            <div class="row no-margin">
                <div class="container">
                    <div class="col-xs-12">
                        <img class="middle-pic" id="mir_logo" src="/img/portfolio/masterskaya/logo.png">
                    </div>
                    <div class="col-xs-12">
                        <h1 class="main_page_title">{{ trans('portfolio/masterskaya.development') }}</h1>
                        <p class="mir_border_white"></p>
                        <p class="sub text white-text">
                            {{ trans('portfolio/masterskaya.task') }}
                        </p>
                        <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow fadeInUp col-xs-12 center">
                            <a class="btn read-more" tabindex="-1" href="https://interior-shop.com.ua/" rel="nofollow"
                                target="blank">{{ trans('portfolio/masterskaya.header_button') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="about_mir">
            <div class="row no-margin">
                <div class="col-xs-12 col-md-4 about_back_photo">
                </div>
                <div class="col-xs-12 col-md-8 about_back_color">
                    <div class="row">
                        <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow fadeInUp col-xs-12 col-md-6">
                            <h2 class="text name white-text">
                                {{ trans('portfolio/masterskaya.catalog') }}</h2>
                            <p class="mir_border_white"></p>
                            <p class="text sub white-text about">
                                {!! trans('portfolio/masterskaya.about') !!}</p>
                        </div>
                        <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow fadeInUp col-xs-12 col-md-6">
                            <p class="text name white-text">
                                {!! trans('portfolio/masterskaya.develop') !!}</p>
                            <p class="mir_border_white"></p>
                            <ul class="text sub white-text">
                                <li>{{ trans('portfolio/masterskaya.develop_list1') }}
                                </li>
                                <li>{{ trans('portfolio/masterskaya.develop_list2') }}
                                </li>
                                <li>{{ trans('portfolio/masterskaya.develop_list3') }}
                                </li>
                                <li>{{ trans('portfolio/masterskaya.develop_list4') }}
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="icons_mir">
            <div class="row no-margin">
                <div class="container">
                    <div class="col-xs-12">
                        <p class="white-text text name">
                            {{ trans('portfolio/masterskaya.icons') }}</p>
                    </div>
                    <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                        class="wow zoomIn">
                        <div class="parrent_icon col-xs-6 col-md-4 col-lg-3">
                            <div class="for_mir_icon">
                                <img class="mir-icon middle-pic responsive-img" src="/img/portfolio/masterskaya/icon_6.png">
                            </div>
                        </div>
                        <div class="parrent_icon col-xs-6 col-md-4 col-lg-3">
                            <div class="for_mir_icon">
                                <img class="mir-icon middle-pic responsive-img"
                                    src="/img/portfolio/masterskaya/icon_11.png">
                            </div>
                        </div>
                        <div class="parrent_icon col-xs-6 col-md-4 col-lg-3">
                            <div class="for_mir_icon">
                                <img class="mir-icon middle-pic responsive-img"
                                    src="/img/portfolio/masterskaya/icon_12.png">
                            </div>
                        </div>
                        <div class="parrent_icon col-xs-6 col-md-4 col-lg-3">
                            <div class="for_mir_icon">
                                <img class="mir-icon middle-pic responsive-img"
                                    src="/img/portfolio/masterskaya/icon_13.png">
                            </div>
                        </div>
                        <div class="parrent_icon col-xs-6 col-md-4 col-lg-3">
                            <div class="for_mir_icon">
                                <img class="mir-icon middle-pic responsive-img" src="/img/portfolio/masterskaya/icon_1.png">
                            </div>
                        </div>
                        <div class="parrent_icon col-xs-6 col-md-4 col-lg-3">
                            <div class="for_mir_icon">
                                <img class="mir-icon middle-pic responsive-img" src="/img/portfolio/masterskaya/icon_2.png">
                            </div>
                        </div>
                        <div class="parrent_icon col-xs-6 col-md-4 col-lg-3">
                            <div class="for_mir_icon">
                                <img class="mir-icon middle-pic responsive-img" src="/img/portfolio/masterskaya/icon_3.png">
                            </div>
                        </div>
                        <div class="parrent_icon col-xs-6 col-md-4 col-lg-3">
                            <div class="for_mir_icon">
                                <img class="mir-icon middle-pic responsive-img" src="/img/portfolio/masterskaya/icon_4.png">
                            </div>
                        </div>
                        <div class="parrent_icon col-xs-6 col-md-4 col-lg-3">
                            <div class="for_mir_icon">
                                <img class="mir-icon middle-pic responsive-img"
                                    src="/img/portfolio/masterskaya/icon_5.png">
                            </div>
                        </div>
                        <div class="parrent_icon col-xs-6 col-md-4 col-lg-3">
                            <div class="for_mir_icon">
                                <img class="mir-icon middle-pic responsive-img"
                                    src="/img/portfolio/masterskaya/icon_7.png">
                            </div>
                        </div>
                        <div class="parrent_icon col-xs-6 col-md-4 col-lg-3">
                            <div class="for_mir_icon">
                                <img class="mir-icon middle-pic responsive-img"
                                    src="/img/portfolio/masterskaya/icon_8.png">
                            </div>
                        </div>
                        <div class="parrent_icon col-xs-6 col-md-4 col-lg-3">
                            <div class="for_mir_icon">
                                <img class="mir-icon middle-pic responsive-img"
                                    src="/img/portfolio/masterskaya/icon_9.png">
                            </div>
                        </div>
                        <div class="parrent_icon col-xs-6 col-md-4 col-lg-3">
                            <div class="for_mir_icon">
                                <img class="mir-icon middle-pic responsive-img"
                                    src="/img/portfolio/masterskaya/icon_10.png">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="firm_style_mir">
            <div class="row no-margin">
                <div class="container">
                    <div class="col-xs-12">
                        <p class="grey-text text name">
                            {{ trans('portfolio/masterskaya.logo') }}</p>
                        <p class="mir_border_grey"></p>
                        <p class="grey-text text sub">
                            {{ trans('portfolio/masterskaya.logo_text') }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="black_back_1">
            <div class="row no-margin">
                <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                    class="wow zoomIn container">
                    <div class="parrent_icon col-xs-12 col-lg-3">
                        <div class="for_mir_logo">
                            <img class="mir-logo middle-pic responsive-img" src="/img/portfolio/masterskaya/logo_1.png">
                        </div>
                    </div>
                    <div class="parrent_icon col-xs-12 col-lg-3">
                        <div class="for_mir_logo">
                            <img class="mir-logo middle-pic responsive-img" src="/img/portfolio/masterskaya/logo_2.png">
                        </div>
                    </div>
                    <div class="parrent_icon col-xs-12 col-lg-3">
                        <div class="for_mir_logo">
                            <img class="mir-logo middle-pic responsive-img" src="/img/portfolio/masterskaya/logo_3.png">
                        </div>
                    </div>
                    <div class="parrent_icon col-xs-12 col-lg-3">
                        <div class="for_mir_logo">
                            <img class="mir-logo middle-pic responsive-img" src="/img/portfolio/masterskaya/logo_4.png">
                        </div>
                    </div>
                    <div class="parrent_icon col-xs-12 col-lg-3">
                        <div class="for_mir_logo">
                            <img class="mir-logo middle-pic responsive-img" src="/img/portfolio/masterskaya/logo_5.png">
                        </div>
                    </div>
                    <div class="parrent_icon col-xs-12 col-lg-3">
                        <div class="for_mir_logo">
                            <img class="mir-logo middle-pic responsive-img" src="/img/portfolio/masterskaya/logo_6.png">
                        </div>
                    </div>
                    <div class="parrent_icon col-xs-12 col-lg-3">
                        <div class="for_mir_logo">
                            <img class="mir-logo middle-pic responsive-img" src="/img/portfolio/masterskaya/logo_7.png">
                        </div>
                    </div>
                    <div class="parrent_icon col-xs-12 col-lg-3">
                        <div class="for_mir_logo">
                            <img class="mir-logo middle-pic responsive-img" src="/img/portfolio/masterskaya/logo_8.png">
                        </div>
                    </div>
                    <div class="parrent_icon col-xs-12 col-lg-4">
                        <div class="for_mir_logo">
                            <img class="mir-logo middle-pic responsive-img" src="/img/portfolio/masterskaya/logo_9.png">
                        </div>
                    </div>
                    <div class="parrent_icon col-xs-12 col-lg-4">
                        <div class="for_mir_logo">
                            <img class="mir-logo middle-pic responsive-img" src="/img/portfolio/masterskaya/logo_10.png">
                        </div>
                    </div>
                    <div class="parrent_icon col-xs-12 col-lg-4">
                        <div class="for_mir_logo">
                            <img class="mir-logo middle-pic responsive-img" src="/img/portfolio/masterskaya/logo_11.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="firm_style_mir">
            <div class="row no-margin">
                <div class="container">
                    <div class="col-xs-12">
                        <p class="grey-text text name">
                            {{ trans('portfolio/masterskaya.style') }}</p>
                        <p class="mir_border_grey"></p>
                        <p class="grey-text text sub">
                            {{ trans('portfolio/masterskaya.style_text') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="black_back_2">
            <div class="row no-margin">
                <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                    class="wow slideInLeft col-xs-12 col-lg-6">
                    <p class="white-text text name">
                        {{ trans('portfolio/masterskaya.design1') }}</p>
                    <img class="middle-pic responsive-img fs_page" src="/img/portfolio/masterskaya/Fs_MIR_1.jpg">
                </div>
                <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                    class="wow slideInRight col-xs-12 col-lg-6">
                    <p class="white-text text name">
                        {{ trans('portfolio/masterskaya.design2') }}</p>
                    <img class="middle-pic responsive-img fs_page" src="/img/portfolio/masterskaya/Fs_MIR_3.jpg">
                </div>
            </div>
        </div>
        <div class="design_mir">
            <div class="row no-margin">
                <div class="col-xs-12">
                    <p class="text name grey_text">
                        {{ trans('portfolio/masterskaya.design3') }}</p>
                    <p class="mir_border_grey"></p>
                    <p class="text sub grey_text">
                        {{ trans('portfolio/masterskaya.design_text') }}
                    </p>
                </div>
                <div class="col-xs-12 col-md-6">
                    <img class="responsive-img middle-pic var" src="/img/portfolio/masterskaya/1_03.png">
                </div>
                <div class="col-xs-12 col-md-6">
                    <img class="responsive-img middle-pic var" src="/img/portfolio/masterskaya/2_03.png">
                </div>
            </div>
        </div>
        <div class="all_pages_mir">
            <div class="row no-margin">
                <div class="col-xs-12">
                    <p class="text name grey_text">
                        {{ trans('portfolio/masterskaya.final') }}</p>
                    <p class="mir_border_grey"></p>
                    <p class="text sub grey_text">
                        {{ trans('portfolio/masterskaya.final_text') }}</p>
                </div>
                <div class="col-xs-12">
                    <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                        class="wow slideInLeft">
                        <img class=" responsive-img middle-pic mir_final mir_page"
                            src="/img/portfolio/masterskaya/Index-2_v3_лого.png">
                    </div>
                </div>
                <div class="col-xs-12 col-md-6">
                    <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                        class="wow slideInLeft">
                        <img class=" responsive-img middle-pic mir_page"
                            src="/img/portfolio/masterskaya/Index-2_oboi.png">
                    </div>
                </div>
                <div class="col-xs-12 col-md-6">
                    <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                        class="wow slideInRight">
                        <img class=" responsive-img middle-pic mir_page"
                            src="/img/portfolio/masterskaya/Index-2_artikle.png">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="container">
                <div class="col-xs-12 col-md-5 col-lg-3 parent">
                    <div class="photo">
                        <img class="responsive-img" src="/img/portfolio/masterskaya/ico2.png">
                    </div>
                </div>
                <div class="col-xs-12 col-md-7 col-lg-9">
                    <blockquote>
                        <q>{{ trans('portfolio/masterskaya.quote') }}
                        </q><br><br>
                        <cite></cite>
                    </blockquote>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="container slide_8 center bottom">
                <div class="aligncenter col-100 case-1 load">
                    <img class="responsive-img" src="/img/portfolio/masterskaya/ico1.png" width="55" height=""
                        alt="разработка интернет-магазина"><br />
                    <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                        class="wow fadeInUp col-xs-12">
                        <a class="btn-1 read-more" tabindex="-1" href="http://interior-shop.com.ua/" rel="nofollow"
                            target="blank">{{ trans('portfolio/masterskaya.footer') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
@section('bottom-scripts')
    <script src="{{ asset('js/libs.js') }}"></script>
@endsection
