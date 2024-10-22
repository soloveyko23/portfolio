@extends('layouts.default')

@section('seo')
    <title>{{ trans('contacts.seo_title') }}</title>
    <meta name="description" content="{{ trans('contacts.seo_descr') }}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ trans('contacts.seo_title') }}">
    <meta property="og:url" content="{{ Request::url() }}" />
    <meta property="og:site_name" content="{{ trans('contacts.seo_name') }}" />
    <meta property="og:description" content="{{ trans('contacts.seo_descr') }}" />
    <meta property="og:image" content="{{ Request::url() }}/img/logo.png">

    <link rel="canonical" href="{{ Request::url() }}">
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('css/contacts.css') }}">
    <link rel="stylesheet" href="{{ asset('css/redesign.css') }}">
@endsection

@section('bodyClass')
    {{-- blackHeader --}}
@endsection

@section('content')
    <main class="main contacts">
        <div class="bread-crumbs">
            <div class="container">
                <div class="bread-crumbs__inner">
                    <ul class="bread-crumbs__list" itemscope itemtype="http://schema.org/BreadcrumbList">
                        <li class="bread-crumbs__list-item" itemprop="itemListElement" itemscope
                            itemtype="http://schema.org/ListItem">
                            <a href="{{ url('/') }}" class="bread-crumbs__link" itemprop="item">
                                <span itemprop="name">{{ trans('contacts.crumbs_main') }}</span>
                                <meta itemprop="position" content="1">
                            </a>
                        </li>
                        <li class="bread-crumbs__list-item" itemprop="itemListElement" itemscope
                            itemtype="http://schema.org/ListItem">
                            <span class="bread-crumbs__current-page"
                                itemprop="name">{{ trans('contacts.crumbs_page') }}</span>
                            <meta itemprop="position" content="2">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        @include('partials.contact-us', ['formClass' => 'contactform'])
    </main>
@endsection

@section('bottom-scripts')
    <script src="{{ asset('js/libs.js') }}"></script>
@endsection
