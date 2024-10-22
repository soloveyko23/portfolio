@extends('layouts.default')

@section('seo')
    <title>{{ trans('context.seo_title') }}</title>
    <meta name="description" content="{{ trans('context.seo_descr') }}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ trans('context.seo_title') }}">
    <meta property="og:url" content="{{ Request::url() }}" />
    <meta property="og:site_name" content="{{ trans('context.seo_name') }}" />
    <meta property="og:description" content="{{ trans('context.seo_descr') }}" />
    <meta property="og:image" content="{{ Request::url() }}/img/logo.png">

    <link rel="canonical" href="{{ Request::url() }}">
@endsection

@section('css')
    <link rel="preload" href="/fonts/Stolzl/Stolzl-Book.woff2" as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" href="/fonts/NeueMachina/NeueMachina-Ultrabold.woff2" as="font" type="font/woff2"
        crossorigin="anonymous">

    {{-- <link rel="stylesheet" href="{{ asset('css/animate.css') }}"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.compat.css" />
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/context.css') }}">
    <link rel="stylesheet" href="{{ asset('css/redesign.css') }}">
@endsection

@section('content')
    <main class="main context">
        <div class="banner">
            <img class="banner__mobile-bg lazy" style="display: none" data-src="/img/context-mobile-bg.png"
                alt="banner image">
            <div class="container">
                <div class="box">
                    <div class="back side"><span class='dot'></span></div>
                    <div class="left side"><span class='dot'></span></div>
                    <div class="right side"><span class='dot'></span></div>
                    <div class="top side"><span class='dot'></span></div>
                    <div class="bottom side"><span class='dot'></span></div>
                    <div class="front side"><span class='dot'></span></div>
                </div>
                <div class="banner__inner">

                    <div class="bread-crumbs">
                        <div class="bread-crumbs__inner">
                            <ul class="bread-crumbs__list" itemscope itemtype="http://schema.org/BreadcrumbList">
                                <li class="bread-crumbs__list-item" itemprop="itemListElement" itemscope
                                    itemtype="http://schema.org/ListItem">
                                    <a href="{{ url('/') }}" class="bread-crumbs__link" itemprop="item">
                                        <span itemprop="name">{{ trans('context.crumbs_main') }}</span>
                                        <meta itemprop="position" content="1">
                                    </a>
                                </li>
                                <li class="bread-crumbs__list-item" itemprop="itemListElement" itemscope
                                    itemtype="http://schema.org/ListItem">
                                    <span class="bread-crumbs__current-page"
                                        itemprop="name">{{ trans('context.crumbs_page') }}</span>
                                    <meta itemprop="position" content="2">
                                </li>
                            </ul>
                        </div>
                    </div>
                    <h1 class="banner__title">{{ trans('context.banner_title') }}</h1>
                    <div class="banner__subtitle">
                        {{ trans('context.banner_subtitle') }}
                    </div>
                    <button data-togle="#context-popup"
                        class="button button__cursor button__green button__green-solid">{{ trans('context.banner_button') }}</button>
                    <div class="banner__features">
                        <div class="banner__feature">
                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M7.46615 25.516C10.1798 25.516 12.3796 23.3292 12.3796 20.6318C12.3796 17.9343 10.1798 15.7476 7.46615 15.7476C4.75254 15.7476 2.55273 17.9343 2.55273 20.6318C2.55273 23.3292 4.75254 25.516 7.46615 25.516Z"
                                    fill="white" />
                                <path
                                    d="M13.3966 28.8422C12.4224 27.6212 10.9399 26.8633 9.33033 26.8633H5.68762C3.06149 26.8633 0.816568 28.8422 0.520069 31.4528L0.0117849 35.6633C-0.0729291 36.2106 0.308284 36.7159 0.858925 36.8422C2.97678 37.3054 5.2217 37.5159 7.55133 37.5159C8.48319 37.5159 9.4574 37.4738 10.3469 37.3896L10.8128 33.6001C10.9399 31.7054 11.9565 29.9791 13.3966 28.8422Z"
                                    fill="white" />
                                <path
                                    d="M32.3744 25.516C35.088 25.516 37.2878 23.3292 37.2878 20.6318C37.2878 17.9343 35.088 15.7476 32.3744 15.7476C29.6607 15.7476 27.4609 17.9343 27.4609 20.6318C27.4609 23.3292 29.6607 25.516 32.3744 25.516Z"
                                    fill="white" />
                                <path
                                    d="M39.4039 31.4528C39.1074 28.8422 36.8625 26.8633 34.2363 26.8633H30.5936C28.9417 26.8633 27.4592 27.6212 26.5273 28.8422C27.9675 30.0212 28.9417 31.7054 29.1958 33.6422L29.6618 37.4317C30.5513 37.5159 31.4831 37.558 32.4573 37.558C34.787 37.558 37.0319 37.3475 39.1497 36.8843C39.7004 36.758 40.0392 36.2528 39.9969 35.7054L39.4039 31.4528Z"
                                    fill="white" />
                                <path
                                    d="M21.7424 29.3477H18.0997C15.4736 29.3477 13.2287 31.3266 12.9322 33.9371L12.4239 38.1477C12.3392 38.695 12.7204 39.2003 13.271 39.3266C15.3889 39.7898 17.6338 40.0003 19.9634 40.0003C22.2931 40.0003 24.538 39.7477 26.6559 39.3266C27.2065 39.2003 27.5454 38.695 27.503 38.1477L26.9947 33.9371C26.6135 31.2845 24.4109 29.3477 21.7424 29.3477Z"
                                    fill="white" />
                                <path
                                    d="M19.9193 27.9999C22.6329 27.9999 24.8327 25.8131 24.8327 23.1157C24.8327 20.4182 22.6329 18.2314 19.9193 18.2314C17.2057 18.2314 15.0059 20.4182 15.0059 23.1157C15.0059 25.8131 17.2057 27.9999 19.9193 27.9999Z"
                                    fill="white" />
                                <path
                                    d="M22.8416 12.8842C22.8416 13.3895 23.2652 13.7684 23.7311 13.7684C24.197 13.7684 24.6206 13.3474 24.6206 12.8842V9.01053H25.1289C25.5101 9.01053 25.8489 8.67368 25.8489 8.29474V5.47368C25.8489 5.09474 25.5101 4.75789 25.1289 4.75789H24.6206V0.88421C24.6206 0.378947 24.197 0 23.7311 0C23.2652 0 22.8416 0.421053 22.8416 0.88421V1.47368L16.7422 4.08421V9.68421L22.8416 12.2947V12.8842Z"
                                    fill="white" />
                                <path
                                    d="M27.8418 6.90543C27.8418 7.4107 28.2654 7.87385 28.816 7.87385H30.9339C31.4421 7.87385 31.9081 7.4528 31.9081 6.90543C31.9081 6.40017 31.4845 5.93701 30.9339 5.93701H28.816C28.2654 5.93701 27.8418 6.35806 27.8418 6.90543Z"
                                    fill="white" />
                                <path
                                    d="M28.2644 4.0419L30.0857 2.98926C30.5516 2.73663 30.7211 2.14716 30.4246 1.684C30.1704 1.22084 29.5774 1.09453 29.1115 1.34716L27.2901 2.39979C26.9936 2.56821 26.8242 2.90505 26.8242 3.2419C26.8242 3.41032 26.8666 3.57874 26.9513 3.70505C27.2054 4.12611 27.7984 4.29453 28.2644 4.0419Z"
                                    fill="white" />
                                <path
                                    d="M30.4675 12.1264C30.7217 11.6633 30.5946 11.0738 30.1287 10.8212L28.3073 9.76855C27.8414 9.51591 27.2484 9.64223 26.9943 10.1054C26.9095 10.2738 26.8672 10.4001 26.8672 10.5685C26.8672 10.9054 27.0366 11.2001 27.3331 11.4107L29.1545 12.4633C29.6204 12.7159 30.2134 12.5896 30.4675 12.1264Z"
                                    fill="white" />
                                <path
                                    d="M10.6864 9.68447H11.5335L12.5924 13.895C12.6348 14.1476 12.8889 14.3161 13.1431 14.3161H14.5832C14.9221 14.3161 15.1762 13.9792 15.0915 13.6845L14.0749 9.68447H15.3033V4.08447H10.6864C10.1781 4.08447 9.79688 4.46342 9.79688 4.96868V8.80026C9.79688 9.30553 10.1781 9.68447 10.6864 9.68447Z"
                                    fill="white" />
                            </svg>
                            <div class="banner__feature-body">
                                <div class="banner__feature-title">112 +</div>
                                <div class="banner__feature-subtitle">{{ trans('context.feature_subtitle') }}</div>
                            </div>
                        </div>
                        <div class="banner__feature">
                            <svg width="39" height="40" viewBox="0 0 39 40" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11.7833 30.8029C11.6002 30.6761 11.3559 30.5601 11.0508 30.4551V32.0298C11.7226 32.0035 12.0582 31.7717 12.0582 31.3343C12.0582 31.1069 11.9665 30.9298 11.7833 30.8029Z"
                                    fill="white" />
                                <path
                                    d="M17.2613 13.1205C17.2613 12.8932 17.1697 12.716 16.9865 12.589C16.8033 12.4623 16.5592 12.3464 16.2539 12.2412V13.8159C16.9257 13.7897 17.2613 13.558 17.2613 13.1205Z"
                                    fill="white" />
                                <path
                                    d="M9.52148 27.1622C9.52148 27.3811 9.59773 27.5539 9.75038 27.6806C9.90287 27.8074 10.1317 27.9192 10.4371 28.0153V26.4014C9.82671 26.4537 9.52148 26.7076 9.52148 27.1622Z"
                                    fill="white" />
                                <path
                                    d="M15.6401 8.18652C15.0297 8.23892 14.7246 8.49263 14.7246 8.94732C14.7246 9.16622 14.8009 9.33896 14.9535 9.46565C15.1059 9.5925 15.3348 9.70424 15.6401 9.80033V8.18652Z"
                                    fill="white" />
                                <path
                                    d="M32.4246 4.83533C33.391 4.83533 34.1772 4.0465 34.1772 3.07709C34.1772 2.10768 33.391 1.31885 32.4246 1.31885C31.4581 1.31885 30.6719 2.10768 30.6719 3.07709C30.6719 4.0465 31.4581 4.83533 32.4246 4.83533Z"
                                    fill="white" />
                                <path
                                    d="M1.53292 18.022C2.13698 18.022 2.62835 17.5291 2.62835 16.9231C2.62835 16.3171 2.13698 15.8242 1.53292 15.8242C0.928863 15.8242 0.4375 16.3171 0.4375 16.9231C0.4375 17.5291 0.928863 18.022 1.53292 18.022Z"
                                    fill="white" />
                                <path
                                    d="M33.7384 32.9668C32.2888 32.9668 31.1094 34.1499 31.1094 35.6042C31.1094 37.0584 32.2888 38.2415 33.7384 38.2415C35.188 38.2415 36.3674 37.0584 36.3674 35.6042C36.3674 34.1499 35.188 32.9668 33.7384 32.9668Z"
                                    fill="white" />
                                <path
                                    d="M15.8424 21.7856C21.7089 21.7856 26.4817 16.9976 26.4817 11.1125C26.4817 5.22741 21.7089 0.439453 15.8424 0.439453C9.97593 0.439453 5.20312 5.22741 5.20312 11.1125C5.20313 16.9976 9.97593 21.7856 15.8424 21.7856ZM15.8424 2.63717C20.5008 2.63717 24.2908 6.43919 24.2908 11.1124C24.2908 11.3552 24.0947 11.552 23.8527 11.552C23.6106 11.552 23.4145 11.3552 23.4145 11.1124C23.4145 6.92385 20.0176 3.51629 15.8424 3.51629C15.6004 3.51629 15.4042 3.31954 15.4042 3.07673C15.4042 2.83391 15.6004 2.63717 15.8424 2.63717ZM13.8996 11.434C12.8976 10.9455 12.5133 10.2613 12.5133 9.2886C12.5133 8.83391 12.5917 8.42908 12.7487 8.07479C13.2525 6.93862 14.2772 6.41158 15.4954 6.28376V4.95857H16.3977V6.28376C16.9644 6.33633 17.4966 6.46328 17.9936 6.66433C18.4905 6.86556 18.922 7.07101 19.2884 7.28103L18.3471 9.06556C18.321 9.03075 18.2445 8.97369 18.1179 8.89501C17.7903 8.69114 17.3444 8.5031 16.98 8.37668C16.7401 8.29361 16.4983 8.23453 16.254 8.19954V9.98398C16.3898 10.0227 17.0756 10.1661 17.8761 10.4891C19.0515 10.964 19.5634 11.761 19.5634 12.9101C19.5634 13.4088 19.4761 13.8332 19.3018 14.1831C19.1273 14.5332 18.8941 14.8193 18.6019 15.0426C17.9814 15.5162 17.1706 15.7122 16.3981 15.7442V17.2664H15.4956V15.7313C14.3597 15.632 13.1127 15.2659 12.1209 14.603L13.0625 12.7264C13.0974 12.7704 13.191 12.8426 13.3438 12.9429C13.7313 13.1986 14.2867 13.4246 14.7237 13.5731C15.02 13.6736 15.3253 13.7458 15.6393 13.7896V12.0439C15.3384 11.9477 14.5993 11.7752 13.8996 11.434ZM7.83214 10.6729C8.07419 10.6729 8.27031 10.8696 8.27031 11.1124C8.27031 15.301 11.6672 18.7086 15.8424 18.7086C16.0844 18.7086 16.2806 18.9053 16.2806 19.1481C16.2806 19.3908 16.0844 19.5877 15.8424 19.5877C11.184 19.5877 7.39397 15.7857 7.39397 11.1124C7.39397 10.8697 7.5901 10.6729 7.83214 10.6729Z"
                                    fill="white" />
                                <path
                                    d="M29.9323 19.7086C29.7622 19.591 29.5354 19.4834 29.252 19.3857V20.848C29.8757 20.8236 30.1874 20.6084 30.1874 20.2022C30.1874 19.9911 30.1023 19.8266 29.9323 19.7086Z"
                                    fill="white" />
                                <path
                                    d="M27.832 16.3276C27.832 16.531 27.9029 16.6913 28.0446 16.809C28.1862 16.9269 28.3987 17.0306 28.6823 17.1198V15.6211C28.1154 15.6697 27.832 15.9054 27.832 16.3276Z"
                                    fill="white" />
                                <path
                                    d="M38.9977 18.3378C38.9977 11.8833 33.2944 6.86348 26.8666 7.76959C28.8029 14.1829 24.8868 20.8349 18.5 22.3539C20.12 26.3554 24.0194 29.0109 28.3583 29.0109C34.2248 29.0108 38.9977 24.223 38.9977 18.3378ZM32.0825 21.1892C31.9203 21.5143 31.7039 21.78 31.4326 21.9873C30.8552 22.4277 30.1021 22.6091 29.386 22.6389V24.0523H28.5479V22.6269C27.4925 22.5344 26.335 22.1946 25.4143 21.5791L26.2886 19.8367C26.3209 19.8774 26.4079 19.9445 26.5499 20.0377C26.9088 20.2746 27.4223 20.4838 27.8312 20.6228C28.1064 20.716 28.3898 20.7832 28.6814 20.8238V19.2028C28.406 19.1145 27.7171 18.9538 27.066 18.6363C26.7747 18.4943 26.5337 18.3299 26.3434 18.143C26.3251 18.125 26.3093 18.1054 26.2919 18.0869C27.1636 16.8608 27.7934 15.4497 28.1122 13.9239C28.2539 13.8943 28.3984 13.8696 28.5479 13.854V12.6234H29.3859V13.854C29.912 13.9028 30.4062 14.0207 30.8678 14.2074C31.3292 14.3943 31.7298 14.5851 32.0701 14.78L31.196 16.4372C31.1717 16.4048 31.1007 16.3518 30.9831 16.2787C30.6795 16.0898 30.2654 15.9149 29.9263 15.7975C29.7036 15.7203 29.479 15.6655 29.2523 15.633V17.2899C29.3784 17.3259 30.0152 17.4592 30.7586 17.7591C31.8681 18.2075 32.3253 18.9593 32.3253 20.0072C32.3253 20.4702 32.2442 20.8643 32.0825 21.1892Z"
                                    fill="white" />
                                <path
                                    d="M17.6248 22.5266C13.995 23.0946 10.2248 21.9098 7.54554 19.1152C3.0905 20.4715 0 24.6327 0 29.3272C0 35.2123 4.7728 40.0002 10.6393 40.0002C17.3175 40.0002 22.3548 33.8761 21.083 27.2884C19.5682 26.051 18.361 24.4251 17.6248 22.5266ZM10.6393 37.8024C6.01204 37.8024 2.24746 34.026 2.24746 29.3841C2.24746 27.5544 2.8226 25.8145 3.91092 24.3527C4.05561 24.158 4.33034 24.1182 4.5241 24.2635C4.71803 24.4086 4.75782 24.6841 4.61305 24.8786C3.63882 26.1875 3.1238 27.7455 3.1238 29.3841C3.1238 33.5412 6.49525 36.9233 10.6393 36.9233C10.8813 36.9233 11.0774 37.1201 11.0774 37.3629C11.0774 37.6057 10.8813 37.8024 10.6393 37.8024ZM14.0986 32.398C13.9241 32.748 13.691 33.0342 13.3988 33.2574C12.7768 33.7317 11.9661 33.9271 11.1949 33.959V35.4812H10.2923V33.9462C9.15958 33.8469 7.91255 33.4829 6.91773 32.8178L7.85936 30.9413C7.89406 30.9851 7.98792 31.0574 8.14057 31.1578C8.52757 31.4131 9.0808 31.6384 9.52046 31.7879C9.81692 31.8883 10.1221 31.9607 10.4361 32.0044V30.2587C9.9439 30.0973 8.63132 29.8184 7.91833 29.1173C7.47131 28.6782 7.31016 28.1384 7.31016 27.5033C7.31016 27.0486 7.3885 26.6438 7.54572 26.2896C8.04426 25.1646 9.06196 24.6276 10.2924 24.4985V23.1733H11.1949V24.4985C11.7614 24.551 12.2935 24.678 12.7907 24.8791C13.2876 25.0803 13.7192 25.2858 14.0856 25.4958L13.1442 27.2803C13.118 27.2455 13.0415 27.1885 12.915 27.1098C12.5883 26.9062 12.139 26.717 11.777 26.5915C11.5373 26.5084 11.2953 26.4493 11.0512 26.4142V28.1987C11.19 28.2383 11.871 28.3803 12.6732 28.7039C13.8747 29.1894 14.3605 30.0033 14.3605 31.1249C14.3602 31.6235 14.2728 32.0481 14.0986 32.398Z"
                                    fill="white" />
                                <path
                                    d="M37.4639 29.89C37.8269 29.89 38.1211 29.5948 38.1211 29.2306C38.1211 28.8665 37.8269 28.5713 37.4639 28.5713C37.1009 28.5713 36.8066 28.8665 36.8066 29.2306C36.8066 29.5948 37.1009 29.89 37.4639 29.89Z"
                                    fill="white" />
                                <path
                                    d="M37.0244 7.03304C37.3874 7.03304 37.6817 6.73784 37.6817 6.3737C37.6817 6.00955 37.3874 5.71436 37.0244 5.71436C36.6615 5.71436 36.3672 6.00955 36.3672 6.3737C36.3672 6.73784 36.6615 7.03304 37.0244 7.03304Z"
                                    fill="white" />
                                <path
                                    d="M26.0713 1.31868C26.4343 1.31868 26.7286 1.02348 26.7286 0.65934C26.7286 0.295197 26.4343 0 26.0713 0C25.7083 0 25.4141 0.295197 25.4141 0.65934C25.4141 1.02348 25.7083 1.31868 26.0713 1.31868Z"
                                    fill="white" />
                                <path
                                    d="M1.97171 1.75813C2.3347 1.75813 2.62896 1.46294 2.62896 1.09879C2.62896 0.73465 2.3347 0.439453 1.97171 0.439453C1.60872 0.439453 1.31445 0.73465 1.31445 1.09879C1.31445 1.46294 1.60872 1.75813 1.97171 1.75813Z"
                                    fill="white" />
                                <path
                                    d="M2.40921 11.868C2.7722 11.868 3.06646 11.5728 3.06646 11.2087C3.06646 10.8445 2.7722 10.5493 2.40921 10.5493C2.04622 10.5493 1.75195 10.8445 1.75195 11.2087C1.75195 11.5728 2.04622 11.868 2.40921 11.868Z"
                                    fill="white" />
                                <path
                                    d="M24.7569 32.9671C25.1199 32.9671 25.4141 32.6719 25.4141 32.3078C25.4141 31.9436 25.1199 31.6484 24.7569 31.6484C24.3939 31.6484 24.0996 31.9436 24.0996 32.3078C24.0996 32.6719 24.3939 32.9671 24.7569 32.9671Z"
                                    fill="white" />
                                <path
                                    d="M22.128 39.9998C22.4909 39.9998 22.7852 39.7046 22.7852 39.3405C22.7852 38.9763 22.4909 38.6812 22.128 38.6812C21.765 38.6812 21.4707 38.9763 21.4707 39.3405C21.4707 39.7046 21.765 39.9998 22.128 39.9998Z"
                                    fill="white" />
                            </svg>
                            <div class="banner__feature-body">
                                <div class="banner__feature-title">{{ trans('context.feature_title') }}</div>
                                <div class="banner__feature-subtitle">{{ trans('context.feature_subtitle2') }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="context-services">
            <div class="container">
                <div class="context-services__inner">
                    <div class="context-services__gif-wrap">
                        <img class="context-services__gif lazy" data-src="/img/cat-gif.gif" alt="cat animation">
                    </div>
                    <div class="section-title">{{ trans('context.services_title') }}</div>
                    <div class="context-services__parts">
                        <div class="context-services__list-wrapper">
                            <ul class="context-services__list">
                                <li class="context-services__list-item">{{ trans('context.service_item1') }}</li>
                                <li class="context-services__list-item">{{ trans('context.service_item2') }}</li>
                                <li class="context-services__list-item">{{ trans('context.service_item3') }}</li>
                                <li class="context-services__list-item">{{ trans('context.service_item4') }}</li>
                                <li class="context-services__list-item">{{ trans('context.service_item5') }}</li>
                                <li class="context-services__list-item">{{ trans('context.service_item6') }}</li>
                                <li class="context-services__list-item">{{ trans('context.service_item7') }}</li>
                                <li class="context-services__list-item">{{ trans('context.service_item8') }}</li>
                            </ul>
                        </div>
                        <div class="context-services__banners">
                            <div class="context-services__banner">
                                <div class="context-services__banner-title wow fadeInUp">
                                    {{ trans('context.servise_bannertitle1') }}</div>
                                <div class="context-services__banner-text wow fadeInUp delay-1s">
                                    {{ trans('context.servise_bannertext1') }}</div>
                                <button data-togle="#context-popup"
                                    class="context-services__banner-button wow fadeInUp delay-2s">{{ trans('context.servise_bannerbutton') }}</button>
                                <img class="context-services__banner-img lazy" data-src="/img/google-context.png"
                                    alt="google">
                            </div>
                            <div class="context-services__banner">
                                <div class="context-services__banner-title wow fadeInUp">
                                    {{ trans('context.servise_bannertitle2') }}</div>
                                <div class="context-services__banner-text wow fadeInUp delay-1s">
                                    {{ trans('context.servise_bannertext2') }}</div>
                                <button data-togle="#context-popup"
                                    class="delay-2s context-services__banner-button context-services__banner-button_yellow wow fadeInUp">{{ trans('context.servise_bannerbutton') }}</button>
                                <img class="context-services__banner-img lazy" data-src="/img/yandex-context.png"
                                    alt="yandex">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="profits">
            <div class="container">
                <div class="profits__inner">
                    <div class="section-title">{{ trans('context.profits_title') }}</div>
                    <div class="profits__items">
                        <div class="profits__item">
                            <img class="profits__item-img lazy" width="68" height="68"
                                data-src="/img/icons/context/profit1.svg" alt="item itcon">
                            <div class="profits__item-title">{{ trans('context.profits_item1') }}</div>
                        </div>
                        <div class="profits__item">
                            <img class="profits__item-img lazy" width="68" height="68"
                                data-src="/img/icons/context/profit2.svg" alt="item itcon">
                            <div class="profits__item-title">{{ trans('context.profits_item2') }}</div>
                        </div>
                        <div class="profits__item">
                            <img class="profits__item-img lazy" width="68" height="68"
                                data-src="/img/icons/context/profit3.svg" alt="item itcon">
                            <div class="profits__item-title">{{ trans('context.profits_item3') }}</div>
                        </div>
                        <div class="profits__item">
                            <img class="profits__item-img lazy" width="68" height="68"
                                data-src="/img/icons/context/profit4.svg" alt="item itcon">
                            <div class="profits__item-title">{{ trans('context.profits_item4') }}</div>
                        </div>
                        <div class="profits__item">
                            <img class="profits__item-img lazy" width="68" height="68"
                                data-src="/img/icons/context/profit5.svg" alt="item itcon">
                            <div class="profits__item-title">{{ trans('context.profits_item5') }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="process">
            <div class="container">
                <div class="process__inner">
                    <div class="section-title">{{ trans('context.process_title') }}</div>
                    <div class="process-steps">
                        <div class="process-steps__item">
                            <div class="process-steps__number wow fadeInUp">1</div>
                            <img width="105" height="105" class="wow fadeInLeft delay-1s lazy"
                                data-src="/img/icons/context/step1.svg" alt="step 1">
                            <div class="process-steps__content wow fadeInLeft delay-2s">
                                <div class="process-steps__title">{{ trans('context.steps_title1') }}</div>
                                <div class="process-steps__text">
                                    <p>{{ trans('context.steps_text1') }}</p>
                                    <div class="process-steps__contacts">
                                        <a class="process-steps__social-link" href="tg://resolve?domain=mobios_agency">
                                            <svg width="34" height="34" viewBox="0 0 34 34" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M16.9699 0.0011804C26.3247 -0.0276634 33.9844 7.57799 34.0003 16.9279C34.017 26.3401 26.535 33.8941 17.1969 34.0012C7.72599 34.1097 0.0549515 26.5435 0.000293976 17.1359C-0.0543636 7.64251 7.51951 0.0292651 16.9699 0.0011804ZM23.2427 25.3336C23.809 25.2668 24.1718 24.9662 24.3009 24.3954C25.3986 19.5633 26.4943 14.7307 27.5879 9.89764C27.7451 9.20463 27.1689 8.62851 26.4416 8.75224C26.2317 8.79784 26.0262 8.86185 25.8275 8.94351C21.1765 10.6185 16.5261 12.2945 11.8762 13.9714C10.2344 14.5635 8.59266 15.1545 6.95091 15.7446C6.5091 15.904 6.29882 16.2213 6.39827 16.5613C6.49316 16.8831 6.74975 16.9978 7.04429 17.0782C8.53295 17.4813 10.0193 17.8934 11.5087 18.2927C11.7266 18.3511 11.8504 18.4445 11.9248 18.6684C12.469 20.2996 13.0278 21.9255 13.5797 23.5537C13.8734 24.4212 14.5627 24.589 15.2361 23.9529C15.9535 23.2751 16.6784 22.6056 17.3829 21.9149C17.5788 21.7221 17.7048 21.7289 17.9227 21.8792C19.4409 22.9257 20.9686 23.963 22.5055 24.9913C22.7287 25.137 22.9944 25.2198 23.2427 25.3329V25.3336Z">
                                                </path>
                                                <path
                                                    d="M14.1532 22.6424C14.1106 22.5475 14.059 22.4549 14.0256 22.3562C13.5906 21.0659 13.1648 19.7679 12.7199 18.479C12.5969 18.123 12.6971 17.9143 13.0137 17.7336C16.4374 15.7793 19.8583 13.8205 23.2764 11.8571C23.3318 11.826 23.385 11.7744 23.4427 11.769C23.5787 11.7622 23.715 11.7622 23.8511 11.769C23.8032 11.8935 23.7926 12.0613 23.6992 12.1357C22.7503 12.9311 21.7885 13.7114 20.8297 14.4963C18.8643 16.1047 16.8944 17.7086 14.9389 19.3291C14.7741 19.4763 14.6633 19.6743 14.6238 19.8916C14.5031 20.6651 14.4272 21.4454 14.3315 22.2226C14.3156 22.3577 14.2852 22.4913 14.2617 22.6249L14.1532 22.6424Z">
                                                </path>
                                            </svg>
                                        </a>
                                        <a class="process-steps__social-link" href="viber://chat?number=%2B380678887516">
                                            <svg width="34" height="34" viewBox="0 0 34 34" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M16.9831 33.9964C13.6206 33.993 10.3347 32.9924 7.54105 31.121C4.74744 29.2497 2.57167 26.5918 1.28904 23.4837C0.00641106 20.3755 -0.32545 16.9567 0.335455 13.6599C0.99636 10.3631 2.62033 7.33641 5.00189 4.96276C7.38345 2.58911 10.4156 0.97519 13.7146 0.325186C17.0137 -0.324818 20.4314 0.0183098 23.5354 1.31116C26.6394 2.604 29.2902 4.78847 31.1523 7.58817C33.0145 10.3879 34.0043 13.677 33.9966 17.0394C33.9933 19.27 33.5506 21.4781 32.6937 23.5376C31.8368 25.5971 30.5826 27.4676 29.0027 29.0422C27.4227 30.6169 25.5481 31.8649 23.4857 32.715C21.4234 33.565 19.2138 34.0005 16.9831 33.9964ZM17.3619 6.42325C16.0139 6.50642 15.109 6.52812 14.2112 6.62666C12.8063 6.78035 11.386 6.90872 10.1737 7.76665C8.57891 8.89489 7.43165 10.298 7.11161 12.3067C6.76126 14.4645 6.74236 16.6632 7.05556 18.8267C7.44612 21.5207 9.01828 23.2447 11.4321 24.2988C11.6898 24.4109 11.7657 24.5393 11.7585 24.7978C11.744 25.3547 11.7639 25.9125 11.7513 26.4694C11.7413 26.9214 11.876 27.283 12.3154 27.4512C12.7548 27.6193 13.0992 27.4602 13.4075 27.1321C14.0159 26.4848 14.6253 25.8366 15.2635 25.2191C15.4413 25.053 15.6731 24.9567 15.9163 24.9479C17.7443 25.0003 19.5524 24.8494 21.3651 24.6161C23.995 24.2771 26.558 21.5831 26.8799 19.2534C27.1845 17.0412 27.2749 14.8525 26.9413 12.643C26.5065 9.7682 24.3403 7.34085 21.6815 6.91053C20.112 6.65017 18.5164 6.5462 17.3619 6.42325Z">
                                                </path>
                                                <path
                                                    d="M17.1217 8.2113C18.4723 8.36137 19.9242 8.47438 21.3707 8.69406C23.0387 8.9481 24.704 10.6414 25.0322 12.2958C25.4915 14.6146 25.5394 16.9434 24.9888 19.2433C24.5576 21.0514 23.3217 22.27 21.5534 22.6615C19.9821 23.0104 18.3304 23.0041 16.7121 23.1261C16.4074 23.1487 16.1832 23.2093 15.9654 23.438C14.9998 24.4524 14.0171 25.4504 13.0317 26.4449C12.9277 26.5497 12.7604 26.594 12.6257 26.6664C12.5796 26.5181 12.4947 26.3698 12.4938 26.2216C12.482 25.1828 12.4938 24.1423 12.4757 23.1044C12.4757 22.9544 12.3527 22.7229 12.2289 22.6723C10.1775 21.8288 9.01944 20.348 8.77896 18.1141C8.5656 16.1361 8.58277 14.178 8.98689 12.2279C9.34852 10.4696 11.0843 8.883 13.0082 8.62083C14.3344 8.44093 15.6715 8.35233 17.1217 8.2113ZM17.8729 18.417C17.6153 18.3402 17.4543 18.3049 17.3016 18.2452C16.0359 17.7543 15.1897 16.8422 14.6689 15.6072C14.3688 14.8958 14.3932 14.8036 14.9944 14.3063C15.4347 13.9447 15.5432 13.5506 15.243 13.0805C14.8633 12.4865 14.4375 11.9206 14.0108 11.3583C13.7676 11.0373 13.4114 10.9587 13.0913 11.1964C12.6714 11.505 12.2829 11.8541 11.9314 12.2388C11.6548 12.5462 11.653 12.9385 11.8021 13.3444C13.1374 16.9606 15.5721 19.5064 19.1603 20.9564C19.8953 21.253 20.4775 21.1454 20.9974 20.5948C21.213 20.3646 21.4019 20.1108 21.5606 19.8382C21.8192 19.3952 21.7631 19.0941 21.3536 18.7732C20.8925 18.4116 20.4115 18.0726 19.9288 17.7408C19.2462 17.2734 18.9677 17.3276 18.4334 17.9478C18.2662 18.1404 18.0411 18.2796 17.8729 18.417ZM17.0828 10.4985C17.1198 10.4985 17.0331 10.4741 16.9725 10.5039C16.8407 10.5751 16.7136 10.6545 16.5919 10.7417C16.7094 10.8475 16.8116 10.9903 16.949 11.0509C17.0864 11.1115 17.2735 11.1015 17.4381 11.1169C18.3819 11.1977 19.2736 11.5842 19.9778 12.2177C20.682 12.8512 21.1603 13.6972 21.34 14.6273C21.4223 15.0386 21.4304 15.4644 21.5064 15.8767C21.5308 16.0023 21.6872 16.1018 21.7857 16.213C21.8761 16.0828 22.0343 15.9553 22.0416 15.8206C22.0418 15.5201 22.0164 15.22 21.9656 14.9238C21.6664 12.4558 19.6395 10.5817 17.0828 10.4985ZM20.7334 15.1453L20.8021 15.1227C20.6538 14.6372 20.5652 14.1228 20.3446 13.6762C19.7507 12.4684 18.6884 11.9405 17.3929 11.8356C17.2762 11.8266 17.1461 11.9857 17.0222 12.0661C17.1181 12.1807 17.2264 12.2844 17.345 12.3753C17.4254 12.4259 17.5502 12.4024 17.6541 12.4187C18.9913 12.6348 19.8908 13.4837 20.1268 14.7692C20.1647 14.9753 20.1331 15.1959 20.1864 15.3957C20.219 15.5159 20.3546 15.6082 20.4441 15.713C20.5465 15.6067 20.6411 15.4931 20.727 15.3731C20.7614 15.3134 20.7334 15.2203 20.7334 15.1453ZM19.4342 15.0097C19.4288 13.9348 18.6486 13.1374 17.7509 13.188C17.6333 13.1944 17.5231 13.3282 17.4091 13.4032C17.4932 13.5099 17.5701 13.7024 17.6623 13.7097C18.4461 13.7739 18.8005 14.2214 18.9027 14.9609C18.918 15.0757 19.1034 15.167 19.2109 15.2691L19.4342 15.0097Z">
                                                </path>
                                            </svg>
                                        </a>
                                        <a class="process-steps__phone-link" href="tel:+380678887516">+38 (067)
                                            888-75-16</a>
                                    </div>
                                    <button data-togle="#context-popup"
                                        class="process-steps__button">{{ trans('context.steps_button') }}</button>
                                </div>
                            </div>
                        </div>
                        <div class="process-steps__item">
                            <div class="process-steps__number wow fadeInUp">2</div>
                            <img width="105" height="105" class="lazy wow fadeInRight delay-1s"
                                data-src="/img/icons/context/step2.svg" alt="step 2">
                            <div class="process-steps__content wow fadeInRight delay-2s">
                                <div class="process-steps__title">{{ trans('context.steps_title2') }}</div>
                                <div class="process-steps__text">{{ trans('context.steps_text2') }}</div>
                            </div>
                        </div>
                        <div class="process-steps__item">
                            <div class="process-steps__number wow fadeInUp">3</div>
                            <img width="105" height="105" class="lazy wow fadeInLeft delay-1s"
                                data-src="/img/icons/context/step3.svg" alt="step 3">
                            <div class="process-steps__content wow fadeInLeft delay-2s">
                                <div class="process-steps__title">{{ trans('context.steps_title3') }}</div>
                                <div class="process-steps__text">{{ trans('context.steps_text3') }}</div>
                            </div>
                        </div>
                        <div class="process-steps__item">
                            <div class="process-steps__number wow fadeInUp">4</div>
                            <img width="105" height="105" class="lazy wow fadeInRight delay-1s"
                                data-src="/img/icons/context/step4.svg" alt="step 4">
                            <div class="process-steps__content wow fadeInRight delay-2s">
                                <div class="process-steps__title">{{ trans('context.steps_title4') }}</div>
                                <div class="process-steps__text">{{ trans('context.steps_text4') }}</div>
                            </div>
                        </div>
                        <div class="process-steps__item">
                            <div class="process-steps__number wow fadeInUp">5</div>
                            <img width="105" height="105" class="lazy wow fadeInLeft delay-1s"
                                data-src="/img/icons/context/step5.svg" alt="step 5">
                            <div class="process-steps__content wow fadeInLeft delay-2s">
                                <div class="process-steps__title">{{ trans('context.steps_title5') }}</div>
                                <div class="process-steps__text">{{ trans('context.steps_text5') }}</div>
                            </div>
                        </div>
                        <div class="process-steps__item">
                            <div class="process-steps__number wow fadeInUp">6</div>
                            <img width="105" height="105" class="lazy wow fadeInRight delay-1s"
                                data-src="/img/icons/context/step6.svg" alt="step 6">
                            <div class="process-steps__content wow fadeInRight delay-2s">
                                <div class="process-steps__title">{{ trans('context.steps_title6') }}</div>
                                <div class="process-steps__text">{{ trans('context.steps_text6') }}</div>
                            </div>
                        </div>
                        <div class="process-steps__item">
                            <div class="process-steps__number wow fadeInUp">7</div>
                            <img width="105" height="105" class="lazy wow fadeInLeft delay-1s"
                                data-src="/img/icons/context/step7.svg" alt="step 7">
                            <div class="process-steps__content wow fadeInLeft delay-2s">
                                <div class="process-steps__title">{{ trans('context.steps_title7') }}</div>
                                <div class="process-steps__text">{{ trans('context.steps_text7') }}</div>
                            </div>
                        </div>
                        <div class="process-steps__item">
                            <div class="process-steps__number wow fadeInUp">8</div>
                            <img width="105" height="105" class="lazy  wow fadeInRight delay-1s"
                                data-src="/img/icons/context/step8.svg" alt="step 8">
                            <div class="process-steps__content  wow fadeInRight delay-2s">
                                <div class="process-steps__title">{{ trans('context.steps_title8') }}</div>
                                <div class="process-steps__text">{{ trans('context.steps_text8') }}
                                </div>
                            </div>
                        </div>
                        <div class="process-steps__item">
                            <div class="process-steps__number wow fadeInUp">9</div>
                            <img width="105" height="105" class="lazy wow fadeInLeft delay-1s"
                                data-src="/img/icons/context/step9.svg" alt="step 9">
                            <div class="process-steps__content wow fadeInLeft delay-2s">
                                <div class="process-steps__title">{{ trans('context.steps_title9') }}</div>
                                <div class="process-steps__text">{{ trans('context.steps_text9') }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @include('partials.ask')
        @include('partials.our-services')
        @include('partials.contact-us', ['formClass' => 'contextpage'])
    </main>
    <div id="context-popup" class="popup js-shape-close">
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
                    'formId' => 'context-popup-form',
                    'formClass' => 'contextpage',
                ])
            </div>
        </div>
    </div>
@endsection

@section('bottom-scripts')
    <script src="{{ asset('js/libs.js') }}"></script>

    <script type="application/ld+json">
    {
      "@context": "https://schema.org/",
      "@type": "Product",
      "name": "Продвижение сайтов в Одессе, SEO оптимизация Одесса, Киев, Украина",
      "description": "Комплексное SEO продвижение сайтов от специалистов агенства Mobios ✅ Анализ конкурентов ✅ Поисковый и технический аудит ✅ Ежемесячные отчеты ✅ Звоните ☎ (067) 888-75-16",
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.8",
        "reviewCount": "56"
      }
    }
  </script>
@endsection
