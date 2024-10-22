@extends('layouts.portfolio-item')

@section('seo')
    <link rel="canonical" href="{{ Request::url() }}">
    <title>{{ trans('portfolio/perevozchik.seo_title') }}</title>
    <meta name="description" content="{{ trans('portfolio/perevozchik.seo_descr') }}">
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/redesign.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/portfolio/perevozchik.css') }}">
@endsection


@section('content')
    <main id="perevozchik" class="perevozchik">
        <!--set meta data-->
        <vue-headful title="{{ trans('portfolio/perevozchik.headful_title') }}" keywords="" />
        <!--end set meta data-->
        <div class="perevozchik_head">
            <div class="row no-margin">
                <div class="container">
                    <div class="col-xs-12">
                        <img class="perevozchik-logo" src="/img/portfolio/perevozchik/logo.png" alt="разработка сайта">
                        <div class="back">
                            <p class="white_text text name_perevozchik">
                                {{ trans('portfolio/perevozchik.header_title') }}</p>
                            <h1 class="main_page_title white_text text name_perevozchik">
                                {{ trans('portfolio/perevozchik.header_text') }}</h1>
                            <p class="white_text sub text">
                                {!! trans('portfolio/perevozchik.task') !!} <br>
                            </p>
                            <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                                class="fadeInUp col-xs-12 center">
                                <a class="btn read-more" tabindex="-1" href="http://pereezd.odessa.ua/" rel="nofollow"
                                    target="blank">{!! trans('portfolio/perevozchik.header_button') !!}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="perevozchik_old_pages">
            <div class="row">
                <div class="container">
                    <div class="col-xs-12">
                        <h2 class="center text name_perevozchik">
                            {{ trans('portfolio/perevozchik.name') }}
                        </h2>
                        <div class="perevozchik_border"></div>
                    </div>
                    <div data-wow-delay="0.5s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                        class="slideInLeft old_pages col-xs-12 col-lg-8">
                        <img class="responsive-img" src="/img/portfolio/perevozchik/old_pages_1.png">
                    </div>
                    <div class="col-xs-12 col-lg-4">
                        <p class="text_block center text sub">
                            {!! trans('portfolio/perevozchik.text') !!}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="perevozchik_conception">
            <div class="row">
                <div class="container">
                    <div class="col-xs-12">
                        <p class="center text name_perevozchik">
                            {!! trans('portfolio/perevozchik.concept') !!}</p>
                        <div class="perevozchik_border"></div>
                    </div>
                    <div class="col-xs-12">
                        <p class="text_block center text sub">
                            {!! trans('portfolio/perevozchik.concept_text') !!}</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                    class="fadeInUp col-xs-12 col-md-6">
                    <img class="variants responsive-img middle-pic"
                        src="/img/portfolio/perevozchik/perevozchik-site2-v4.png">
                </div>
                <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                    class="fadeInUp col-xs-12 col-md-6">
                    <img class="variants responsive-img middle-pic"
                        src="/img/portfolio/perevozchik/perevozchik-site1-v2.png">
                </div>
            </div>
        </div>
        <div class="yellow_back ">
            <div class="row">
                <div class="container">
                    <div class="cl-xs-12">
                        <p class="center text name_perevozchik">
                            {!! trans('portfolio/perevozchik.solution') !!}</p>
                        <div class="perevozchik_border"></div>
                    </div>
                    <div class="col-xs-12 col-lg-4">
                        <p class="text_block center text sub">
                            {!! trans('portfolio/perevozchik.solution_text') !!}</p>
                    </div>
                    <div class="col-xs-12 col-lg-8">
                        <img class="img middle-pic" src="/img/portfolio/perevozchik/1.png">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <p class="center text name_perevozchik">
                    {!! trans('portfolio/perevozchik.final') !!}</p>
                <div class="perevozchik_border"></div>
            </div>
            <div class="col-xs-12">
                <p class="center text sub">
                    {!! trans('portfolio/perevozchik.final_text') !!} </p>
            </div>
            <div data-wow-delay="0.5s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                class="slideInLeft animated col-xs-12">
                <img class="responsive_img middle-pic final" src="/img/portfolio/perevozchik/perevozchik-site2-v4.png">
            </div>
        </div>
        <div class="row">
            <div class="container">
                <div class="col-xs-12 col-md-5 col-lg-3 parent">
                    <div class="photo">
                        <img class="responsive-img" src="/img/portfolio/perevozchik/ico2.png">
                    </div>
                </div>
                <div class="col-xs-12 col-md-7 col-lg-9">
                    <blockquote>
                        <q>{!! trans('portfolio/perevozchik.quote') !!}
                        </q><br><br>
                        <cite></cite>
                    </blockquote>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="container slide_8 center bottom">
                <div class="aligncenter col-100 case-1 load">
                    <img class="responsive-img" src="/img/portfolio/perevozchik/ico1.png" width="55" height=""
                        alt="разработка интернет-магазина"><br />
                    <div data-wow-delay="0.5s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                        class="fadeInUp col-xs-12 center">
                        <a class="btn-1 read-more" tabindex="-1" href="http://pereezd.odessa.ua/" rel="nofollow"
                            target="blank">{!! trans('portfolio/perevozchik.footer') !!}</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@section('bottom-scripts')
    <script src="{{ asset('js/libs.js') }}"></script>
@endsection
