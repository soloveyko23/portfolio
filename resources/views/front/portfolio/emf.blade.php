@extends('layouts.portfolio-item')

@section('seo')
    <link rel="canonical" href="{{ Request::url() }}">
    <title>{{ trans('portfolio/emf.seo_title') }}</title>
    <meta name="description" content="{{ trans('portfolio/emf.seo_descr') }}">
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/redesign.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/portfolio/emf.css') }}">
@endsection

@section('content')
    <main class="emf">
        <div id="1" class="container-white">
            <div class="overflow-hidden">
                <div class="row">
                    <div class="container _bg-6 table">
                        <div class="table-row">
                            <div class="case-2 case-2__type-1 col-25 __bp2-100 gutter _bg-5 pos-rel table-cell">
                                <a class="case-2_link" href="" target="_blank">euromuaythai</a><br>
                                <span class="case-2_delim"></span><br>
                                <em><time class="case-2_release" datetime="2014-07-09">{{ trans('portfolio/emf.date') }}:
                                        07.09.2015</time></em>
                            </div>
                            <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                                class="wow bounceInRight case-2 col-75 __b2-100 _bg-10 gutter table-cell">
                                <h1 class="main_page_title">{{ trans('portfolio/emf.header_title') }}</h1>
                                <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                                    class="wow fadeInUp col-xs-12 right">
                                    <a class="btn read-more" tabindex="-1" href="http://emfmuaythai.eu/" rel="nofollow"
                                        target="blank">{{ trans('portfolio/emf.header_button') }}</a>
                                </div>
                                <div class="clear">
                                    <p>{{ trans('portfolio/emf.header_text') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="container center">
                        <div class="col-xs-12">
                            <img class="responsive-img" src="/img/portfolio/emf/emf1.jpg"
                                alt="разработка сайта wellness-zone">
                        </div>
                        <div class="col-xs-12 col-md-6 col-lg-6">
                            <h2>{{ trans('portfolio/emf.develop_title') }}</h2>
                            <h3>LARAVEL, Material Design.</h3>
                        </div>
                        <div class="col-xs-12 col-md-6 col-lg-6">
                            <p> {!! trans('portfolio/emf.develop_text') !!}</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="container center">
                        <div class="col-xs-12 col-md-12 col-lg-12">
                            <div data-wow-delay="0.2s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                                class="wow flipInX col-xs-12 col-md-4 col-lg-4 gutter">
                                <img class="responsive-img" src="/img/portfolio/emf/slide9-1.png"
                                    alt="разработка сайта wellness-zone">
                                <p>{!! trans('portfolio/emf.item1') !!}</p>
                            </div>
                            <div data-wow-delay="0.6s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                                class="wow flipInX col-xs-12 col-md-4 col-lg-4 gutter">
                                <img class="responsive-img" src="/img/portfolio/emf/slide9-2.png"
                                    alt="разработка сайта wellness-zone">
                                <p>{!! trans('portfolio/emf.item2') !!}</p>
                            </div>
                            <div data-wow-delay="1s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                                class="wow flipInX col-xs-12 col-md-4 col-lg-4 gutter">
                                <img class="responsive-img" src="/img/portfolio/emf/slide9-3.png"
                                    alt="разработка сайта wellness-zone">
                                <p>{!! trans('portfolio/emf.item3') !!}</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow fadeInUp container slide_4 text-align-center">
                            <div class="case-2 col-100 gutter">
                                <p>{{ trans('portfolio/emf.adaptive_item1') }}</p>
                                <h3>{{ trans('portfolio/emf.adaptive_item2') }}</h3><br>
                                <p>{{ trans('portfolio/emf.adaptive_item3') }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="container slide_8">
                            <div class="case-2 col-100">
                                <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                                    class="wow bounceInRight item03 case-1 col-85 aligncenter text-align-center">
                                    <div class="item-title">{{ trans('portfolio/emf.categories') }}</div>
                                    <p><img class="responsive-img" src="/img/portfolio/emf/EMF12.jpg"
                                            alt="разработка сайта wellness-zone"><br></p>
                                    <p>{{ trans('portfolio/emf.categories_item1') }}<br>
                                        <img class="responsive-img" src="/img/portfolio/emf/emf2.jpg"
                                            alt="разработка сайта wellness-zone"><br>
                                    </p>
                                    <p>{{ trans('portfolio/emf.categories_item2') }}<br>
                                        <img class="responsive-img" src="/img/portfolio/emf/emf3.jpg"
                                            alt="разработка сайта wellness-zone"><br>
                                    </p>
                                    <p>
                                        {{ trans('portfolio/emf.categories_item3') }}<br>
                                        <img class="responsive-img" src="/img/portfolio/emf/emf4.jpg"
                                            alt="разработка сайта wellness-zone"><br>
                                    </p>
                                    <p><img class="responsive-img" src="/img/portfolio/emf/emf5.jpg"
                                            alt="разработка сайта wellness-zone"><br></p>
                                    <p>{{ trans('portfolio/emf.categories_item4') }}<br>
                                        <img class="responsive-img" src="/img/portfolio/emf/emf6.jpg"
                                            alt="разработка сайта wellness-zone"><br>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row bottom">
                        <div class="container slide_8 centered text-align-center">
                            <div class="aligncenter col-100 case-1 load">
                                <img class="responsive-img" src="/img/portfolio/emf/ico1.png" width="55"
                                    height="" alt="разработка сайта wellness-zone"><br />
                                <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1"
                                    data-wow-offset="0" class="wow fadeInUp col-xs-12 text-align-center">
                                    <a class="btn read-more" tabindex="-1" href="http://emfmuaythai.eu/" rel="nofollow"
                                        target="blank">{{ trans('portfolio/emf.footer_button') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
