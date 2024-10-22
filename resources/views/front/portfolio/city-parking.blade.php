@extends('layouts.portfolio-item')

@section('seo')
    <link rel="canonical" href="{{ Request::url() }}">
    <title>{{ trans('portfolio/city-parking.seo_title') }}</title>
    <meta name="description" content="{{ trans('portfolio/city-parking.seo_descr') }}">
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/redesign.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/portfolio/city-parking.css') }}">
@endsection

@section('content')
    <main class='city-parking'>
        <section class="banner">
            <div class="container">
                <h1>{{ trans('portfolio/city-parking.header_title') }}</h1>
                <div class="row">
                    <div name="fadeInUp" data-wow-duration="1s" class="white-block col-xs-12 col-md-7">
                        <p class="title-banner">City parking</p>
                        <p class=" text-banner">{{ trans('portfolio/city-parking.text_banner') }}</p>
                        <div class="col-xs-12 wow fadeInUp">
                            <a class="btn read-more" tabindex="-1" href="http://cityparking.ua/" rel="nofollow"
                                target="blank">{{ trans('portfolio/city-parking.header_button') }}</a>
                        </div>
                    </div>
                    <div name="fadeInUp" data-wow-duration="1s">
                        <img src="/img/portfolio/city-parking/mockups.png" alt="model">
                    </div>
                </div>
            </div>
        </section>
        <section class="project">
            <div class="container rel">
                <div class="row">
                    <div data-wow-duration="1s" class="col-xs-12 col-md-11 block-1 wow fadeInUp">
                        <p class="title-project center">{{ trans('portfolio/city-parking.project_title') }}</p>
                        <p class="text-project">{!! trans('portfolio/city-parking.project_text') !!}
                        </p>
                    </div>
                    <div data-wow-duration="1s" class="col-xs-12 col-md-2 block-2 wow fadeInUp">
                        <img src="/img/portfolio/city-parking/joomla.png" alt="joomla">
                    </div>
                    <div data-wow-delay="0.2s" data-wow-duration="1s" class="col-xs-12 col-md-6 block-3 wow fadeInUp">
                        <p class="title-project center">{{ trans('portfolio/city-parking.develop_title') }}</p>
                        <p class="text-project">{!! trans('portfolio/city-parking.develop_text') !!}</p>
                    </div>
                    <div data-wow-delay="0.4s" data-wow-duration="1s" class="col-xs-12 col-md-5 block-4 wow fadeInUp">
                        <p class="title-project center">{{ trans('portfolio/city-parking.tools') }}</p>
                        <ul class="text-project">
                            <li class="rel">Concept design</li>
                            <li class="rel">Web UI/UX Design</li>
                            <li class="rel">Web Development</li>
                            <li class="rel">Front-End: Materialize + Bootstrap</li>
                            <li class="rel">CMS Joomla</li>
                        </ul>
                    </div>
                    <div data-wow-delay="0.6s" data-wow-duration="1s" class="block-5 wow fadeInUp">
                        <span></span>
                    </div>
                </div>
            </div>
        </section>
        <section class="design">
            <div class="container">
                <div class="row">
                    <p data-wow-duration="1s" class="title-design center fadeInUp">
                        {{ trans('portfolio/city-parking.design') }}
                    </p>
                    <div data-wow-duration="1s" class="col-xs-12 col-md-3 img-1 wow fadeInUp">
                        <img src="/img/portfolio/city-parking/screen-left.png" alt="model">
                    </div>
                    <div data-wow-duration="1s" class="col-xs-12 col-md-3 img-2 wow fadeInUp">
                        <img src="/img/portfolio/city-parking/screen-center.png" alt="model">
                    </div>
                    <div data-wow-duration="1s" class="col-xs-12 col-md-3 img-3-2 wow fadeInUp">
                        <img src="/img/portfolio/city-parking/screen-right.png" alt="model">
                    </div>
                </div>
            </div>
        </section>
        <section class="info">
            <div class="container">
                <div class="row center">
                    <div data-wow-duration="1s" class="col-xs-12 col-md-4 icon wow fadeInUp">
                        <img src="/img/portfolio/city-parking/icon-1.png" alt="icon">
                        <p class="title-info">{{ trans('portfolio/city-parking.design_text1') }} </p>
                        <p class="text-info">{{ trans('portfolio/city-parking.design_text2') }} </p>
                    </div>
                    <div data-wow-duration="1s" class="col-xs-12 col-md-4 icon wow fadeInUp">
                        <img src="/img/portfolio/city-parking/icon-2.png" alt="icon">
                        <p class="title-info">{{ trans('portfolio/city-parking.search1') }} </p>
                        <p class="text-info">{!! trans('portfolio/city-parking.search2') !!}</p>
                    </div>
                    <div data-wow-duration="1s" class="col-xs-12 col-md-4 icon wow fadeInUp">
                        <img src="/img/portfolio/city-parking/icon-3.png" alt="icon">
                        <p class="title-info">{{ trans('portfolio/city-parking.management1') }}</p>
                        <p class="text-info">{!! trans('portfolio/city-parking.management2') !!} </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="guide-line">
            <div class="container">
                <div class="row">
                    <p class="title-guide">{{ trans('portfolio/city-parking.guideline') }}</p>
                    <div class="col-xs-12 col-md-6">
                        <div data-wow-duration="1s" class="col-md-offset-1 col-sm-offset-3 col-xs-offset-3 wow fadeInUp">
                            <div class="col-md-2 col-sm-3  col-xs-12 color-1">
                                <p>#4caf50</p>
                            </div>
                            <div class="col-md-2 col-sm-3 col-xs-12 color-2">
                                <p>#dd3d5a</p>
                            </div>
                            <div class="col-md-2 col-sm-3 col-xs-12 color-3">
                                <p>#ff6f00</p>
                            </div>
                            <div class="col-md-2  col-sm-3 col-xs-12 color-4">
                                <p>#fafafa</p>
                            </div>
                            <div class="col-md-2s col-sm-2 empty"></div>
                        </div>
                        <br>
                        <div data-wow-duration="1s" class="col-md-offset-1 col-sm-offset-3 col-xs-offset-3 wow fadeInUp">
                            <div class="col-md-2 col-sm-3 col-xs-12 color-5">
                                <p>#2962ff</p>
                            </div>
                            <div class="col-md-2 col-sm-3 col-xs-12 color-6">
                                <p>#aa00ff</p>
                            </div>
                            <div class="col-md-2 col-sm-3 col-xs-12 color-7">
                                <p>#ec407a</p>
                            </div>
                            <div class="col-md-2 col-sm-3 col-xs-12 color-8">
                                <p>#323232</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 fonts col-md-6">
                        <div data-wow-duration="1s" class="col-xs-12 col-md-6 col-sm-6 font-1 wow fadeInUp">
                            <p class="FS-title">Fira Sans</p>
                            <p class="FS-text">АБВГДЕЁЖЗИЙКЛМНО
                                <br>
                                абвгдеёжзийклмно
                                <br>
                                0123456789
                            </p>
                        </div>
                        <div data-wow-duration="1s" class="col-xs-12 col-md-6 col-sm-6 font-2 wow fadeInUp">
                            <p class="OS-title">Open Sans</p>
                            <p class="OS-text">АБВГДЕЁЖЗИЙКЛМНО
                                <br>
                                абвгдеёжзийклмно
                                <br>
                                0123456789
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="icons">
            <div class="container">
                <div class="row">
                    <div data-wow-duration="1s" class="col-xs-12 col-md-4 img-guide wow fadeInUp">
                        <img src="/img/portfolio/city-parking/note.png" alt="model">
                    </div>
                    <div data-wow-duration="1s" class="col-xs-12 col-md-7 center block-guide wow fadeInUp">
                        <p class="title-icons">{{ trans('portfolio/city-parking.icons') }}</p>
                        <img src="/img/portfolio/city-parking/icon.png" alt="model">
                    </div>
                    <div data-wow-duration="1s" class="col-xs-12 center wow fadeInUp">
                        <a class="btn read-more" tabindex="-1" href="http://cityparking.ua/" rel="nofollow"
                            target="blank">{{ trans('portfolio/city-parking.footer_button') }}</a>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@section('bottom-scripts')
    <script src="{{ asset('js/libs.js') }}"></script>
@endsection
