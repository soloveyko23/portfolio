@extends('layouts.default')

@section('seo')
    <title>{{ trans('portfolio.seo_title') }}</title>
    <meta name="description" content="{{ trans('portfolio.seo_descr') }}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ trans('portfolio.seo_name') }}">
    <meta property="og:url" content="{{ Request::url() }}" />
    <meta property="og:site_name" content="{{ trans('portfolio.seo_subtitle') }}" />
    <meta property="og:description" content="{{ trans('portfolio.seo_descr') }}" />
    <meta property="og:image" content="{{ Request::url() }}/img/logo.png">

    <link rel="canonical" href="{{ Request::url() }}">
@endsection

{{-- @section('bodyClass')blackHeader @endsection --}}

@section('css')
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/website.css') }}">
    <link rel="stylesheet" href="{{ asset('css/portfoliopage.css') }}">
    <link rel="stylesheet" href="{{ asset('css/redesign.css') }}">
    {{-- test --}}
@endsection

@section('content')
    <main class="main webs ">

        <section class="portfolio">
            <div class="container">
                <div class="row">
                    <div class="bread-crumbs black">
                        <div class="bread-crumbs__inner">
                            <ul class="bread-crumbs__list" itemscope itemtype="http://schema.org/BreadcrumbList">
                                <li class="bread-crumbs__list-item" itemprop="itemListElement" itemscope
                                    itemtype="http://schema.org/ListItem">
                                    <a href="{{ url('/') }}" class="bread-crumbs__link" itemprop="item">
                                        <span itemprop="name">{{ trans('portfolio.crumbs_main') }}</span>
                                        <meta itemprop="position" content="1">
                                    </a>
                                </li>
                                <li class="bread-crumbs__list-item" itemprop="itemListElement" itemscope
                                    itemtype="http://schema.org/ListItem">
                                    <span class="bread-crumbs__current-page"
                                        itemprop="name">{{ trans('portfolio.crumbs_page') }}</span>
                                    <meta itemprop="position" content="2">
                                </li>
                            </ul>
                        </div>
                    </div>
                    <h2 class="section-title">
                        {{ trans('portfolio.section_title') }}
                        <span class="section-title-sub">
                            {{ trans('portfolio.section_subtitle') }}
                        </span>
                    </h2>
                    <div class="portfolio__top">
                        <div class="ddl">
                            <div class="ddl-selector"> {{ trans('portfolio.selector_all') }} </div>
                            <div class="ddl-list">
                                <button class="active" data-type="all">{{ trans('portfolio.selector_all') }}</button>
                                <button data-type="1">{{ trans('portfolio.selector1') }}</button>
                                <button data-type="2">{{ trans('portfolio.selector2') }}</button>
                                <button data-type="3">{{ trans('portfolio.selector3') }}</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="portfolio__projectsLoop projects_redesign-loop">
                    @foreach ($portfolios as $item)
                        @if ($item['visible'])
                            <div class="col-xs-12 col-sm-6 col-md-4">
                                @include('partials.redesign.parts.mini-portfolio', ['item' => $item])
                            </div>
                        @endif
                    @endforeach
                </div>
                <div class="projects__footer">
                    <span class="projects__footer__span">
                        {{ trans('portfolio.footer_text') }}
                    </span>
                    <button class=" js-showMore button button__green button__green-solid">
                        {{ trans('portfolio.footer_button') }}
                    </button>
                    <button data-togle="#footer-popup"
                        class=" projects__footer_popup button button__green button__green-solid">
                        {{ trans('portfolio.footer_contact') }}
                    </button>
                </div>

            </div>
        </section>
        @include('partials.redesign.results')
        <div class="black">
            @include('partials.ask', ['formClass' => 'portfolio__form'])
        </div>
        @include('partials.our-technologies')
    </main>
@endsection

@section('bottom-scripts')
    <script src="{{ asset('js/libs.js') }}"></script>
@endsection
