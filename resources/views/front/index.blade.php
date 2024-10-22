@extends('layouts.default')

@section('seo')
    <title>{{ trans('index.meta_title') }}</title>
    <meta name="description" content="{{ trans('index.meta_description') }}">

    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ trans('index.meta_title') }}">
    <meta property="og:url" content="{{ Request::url() }}" />
    <meta property="og:site_name" content="{{ trans('index.site_name') }}" />
    <meta property="og:description" content="{{ trans('index.meta_description') }}" />
    <meta property="og:image" content="{{ Request::url() }}/img/logo.png">

    <link rel="canonical" href="{{ Request::url() }}">
    <link rel="preload" href="/img/main_banner_bg.jpg" as="image">
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('css/homepage.css') }}">
    <link rel="stylesheet" href="{{ asset('css/redesign.css') }}">
@endsection

@section('content')
    <main class="main index">
        @include('partials.redesign.index-banner')
        @include('partials.redesign.we_propouse')
        <section class="projects projects_redesign">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        @include('partials.redesign.parts.section_title-button', [
                            'title' => trans('index.main_section_title'),
                        ])
                    </div>
                </div>
                <div class="row projects_redesign-loop">
                    <div class="col-xs-12">
                        <p
                            style="font-family: 'Stolzl', serif; font-style: normal; font-weight: 500; font-size: 26px; line-height: 106%; text-transform: uppercase; color: #222222;">
                            {{ trans('index.corporate_sites') }}
                        </p>
                    </div>
                    @foreach ($portfolioCorporates as $item)
                        @isset($item)
                            <div class="col-xs-12 col-sm-6 col-md-4">
                                @include('partials.redesign.parts.mini-portfolio', ['item' => $item])
                            </div>
                        @endisset
                    @endforeach
                </div>
            </div>
        </section>
        <!-- @include('partials.redesign.results', [
            'title' => trans('index.our_clients_results'),
            'button' => ' ',
        ]) -->
        <section class="projects projects_redesign">
            <div class="container">
                <div class="row projects_redesign-loop">
                    <div class="col-xs-12">
                        <p
                            style="font-family: 'Stolzl', serif; font-style: normal; font-weight: 500; font-size: 26px; line-height: 106%; text-transform: uppercase; color: #222222;">
                            {{ trans('index.online_store') }}
                        </p>
                    </div>
                    @foreach ($portfolioEcommerce as $item)
                        @isset($item)
                            <div class="col-xs-12 col-sm-6 col-md-4">
                                @include('partials.redesign.parts.mini-portfolio', ['item' => $item])
                            </div>
                        @endisset
                    @endforeach
                </div>
            </div>
        </section>
        <section class="projects projects_redesign">
            <div class="container">
                <div class="row projects_redesign-loop">
                    <div class="col-xs-12">
                        <p
                            style="font-family: 'Stolzl', serif; font-style: normal; font-weight: 500; font-size: 26px; line-height: 106%; text-transform: uppercase; color: #222222;">
                            {{ trans('index.logo_brandbook') }}
                        </p>
                    </div>
                    @foreach ($portfolioOther as $item)
                        @isset($item)
                            <div class="col-xs-12 col-sm-6 col-md-4">
                                @include('partials.redesign.parts.mini-portfolio', ['item' => $item])
                            </div>
                        @endisset
                    @endforeach
                </div>
            </div>
        </section>
        @include('partials.redesign.contact-us')
    </main>
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
                    'formClass' => 'homepage',
                ])
            </div>
        </div>
    </div>
@endsection

@section('bottom-scripts')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "BreadcrumbList",
      "itemListElement": [{
        "@type": "ListItem",
        "position": 1,
        "name": "Веб студия",
        "item": "https://mobios.ua"
      },{
        "@type": "ListItem",
        "position": 2,
        "name": "Студия разработки сайтов"
      }]
    }
  </script>
    <script src="{{ asset('js/libs.js') }}"></script>
    <script type="application/ld+json">
    {
      "@context": "https://schema.org/",
      "@type": "Product",
      "name": "Разработка сайтов под ключ по выгодной цене от студии Mobios",
      "description": "Создание сайта любой сложности с уникальным дизайном под ключ ⭐ Интернет-магазин ⭐ Сайт-визитка ⭐ Landing page ⭐ Индивидуальный проект ► Звоните ☎ (067) 888-75-16",
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.8",
        "reviewCount": "56"
      }
    }
  </script>
@endsection
