@extends('layouts.default')

@section('seo')
    <title>{{ trans('seo.seo_maintitle') }}</title>
    <meta name="description" content="{{ trans('seo.seo_descr') }}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ trans('seo.seo_title') }}">
    <meta property="og:url" content="{{ Request::url() }}" />
    <meta property="og:site_name" content="{{ trans('seo.seo_name') }}" />
    <meta property="og:description" content="{{ trans('seo.seo_descr') }}" />
    <meta property="og:image" content="{{ Request::url() }}/img/logo.png">

    <link rel="canonical" href="{{ Request::url() }}">
@endsection

@section('css')
    <link rel="preload" href="/fonts/Stolzl/Stolzl-Book.woff2" as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" href="/fonts/NeueMachina/NeueMachina-Ultrabold.woff2" as="font" type="font/woff2"
        crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/seo.css') }}">
    <link rel="stylesheet" href="{{ asset('css/redesign.css') }}">
@endsection

@section('content')
    <main class="main seo">
        <div class="banner">
            <svg id="google-svg" width="1726" height="1724" viewBox="0 0 1726 1724" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <g id="circle">
                    <path d="M878.031 641.028L1725.55 415.454L1642.55 415.473L794.817 640.45L878.031 641.028Z"
                        fill="#292929" />
                    <path d="M848.183 1103.33L5.33015e-05 1326.38L82.9997 1326.61L931.395 1104.16L848.183 1103.33Z"
                        fill="#292929" />
                    <path d="M616.091 845.511L381.002 0.585449L381.954 83.58L616.447 928.727L616.091 845.511Z"
                        fill="#292929" />
                    <path d="M1077.96 874.212L1296.38 1723.6L1297.06 1640.6L1080.5 795L1077.96 874.212Z" fill="#292929" />
                    <circle cx="852" cy="875.454" r="228.5" stroke="#292929" stroke-width="27" />
                    <path
                        d="M563.002 662.5C563.002 667.194 559.196 671 554.502 671C549.808 671 546.002 667.194 546.002 662.5C546.002 657.806 549.808 654 554.502 654C559.196 654 563.002 657.806 563.002 662.5Z"
                        fill="#28B446" />
                    <path
                        d="M621.002 857.5C621.002 862.194 617.196 866 612.502 866C607.808 866 604.002 862.194 604.002 857.5C604.002 852.806 607.808 849 612.502 849C617.196 849 621.002 852.806 621.002 857.5Z"
                        fill="#28B446" />
                    <path
                        d="M1058.55 584.21C1058.55 588.905 1054.74 592.71 1050.05 592.71C1045.35 592.71 1041.55 588.905 1041.55 584.21C1041.55 579.516 1045.35 575.71 1050.05 575.71C1054.74 575.71 1058.55 579.516 1058.55 584.21Z"
                        fill="#28B446" />
                    <path
                        d="M1101 573.002C1101 577.696 1097.19 581.502 1092.5 581.502C1087.81 581.502 1084 577.696 1084 573.002C1084 568.308 1087.81 564.502 1092.5 564.502C1097.19 564.502 1101 568.308 1101 573.002Z"
                        fill="#518EF8" />
                    <path
                        d="M968.887 607.844C968.887 612.538 965.081 616.344 960.387 616.344C955.692 616.344 951.887 612.538 951.887 607.844C951.887 603.149 955.692 599.344 960.387 599.344C965.081 599.344 968.887 603.149 968.887 607.844Z"
                        fill="#F14336" />
                    <path
                        d="M1310.34 517.042C1310.34 521.736 1306.53 525.542 1301.84 525.542C1297.14 525.542 1293.34 521.736 1293.34 517.042C1293.34 512.348 1297.14 508.542 1301.84 508.542C1306.53 508.542 1310.34 512.348 1310.34 517.042Z"
                        fill="#FBBB00" />
                    <path
                        d="M1151.87 1082.01C1151.87 1086.7 1148.06 1090.51 1143.37 1090.51C1138.67 1090.51 1134.87 1086.7 1134.87 1082.01C1134.87 1077.31 1138.67 1073.51 1143.37 1073.51C1148.06 1073.51 1151.87 1077.31 1151.87 1082.01Z"
                        fill="#FBBB00" />
                    <path
                        d="M1142 1044.5C1142 1049.2 1138.2 1053 1133.5 1053C1128.81 1053 1125 1049.2 1125 1044.5C1125 1039.81 1128.81 1036 1133.5 1036C1138.2 1036 1142 1039.81 1142 1044.5Z"
                        fill="#28B446" />
                    <path
                        d="M1179.3 1191.72C1179.3 1196.42 1175.49 1200.22 1170.8 1200.22C1166.1 1200.22 1162.3 1196.42 1162.3 1191.72C1162.3 1187.03 1166.1 1183.22 1170.8 1183.22C1175.49 1183.22 1179.3 1187.03 1179.3 1191.72Z"
                        fill="#28B446" />
                    <path
                        d="M947.084 1087.35C947.084 1092.04 943.278 1095.85 938.584 1095.85C933.89 1095.85 930.084 1092.04 930.084 1087.35C930.084 1082.65 933.89 1078.85 938.584 1078.85C943.278 1078.85 947.084 1082.65 947.084 1087.35Z"
                        fill="#28B446" />
                    <path
                        d="M421 1229.14C421 1233.84 417.194 1237.64 412.5 1237.64C407.806 1237.64 404 1233.84 404 1229.14C404 1224.45 407.806 1220.64 412.5 1220.64C417.194 1220.64 421 1224.45 421 1229.14Z"
                        fill="#28B446" />
                    <path
                        d="M449 1221.5C449 1226.2 445.194 1230 440.5 1230C435.806 1230 432 1226.2 432 1221.5C432 1216.81 435.806 1213 440.5 1213C445.194 1213 449 1216.81 449 1221.5Z"
                        fill="#28B446" />
                    <path
                        d="M474.943 1214.5C474.943 1219.2 471.138 1223 466.443 1223C461.749 1223 457.943 1219.2 457.943 1214.5C457.943 1209.81 461.749 1206 466.443 1206C471.138 1206 474.943 1209.81 474.943 1214.5Z"
                        fill="#518EF8" />
                    <path
                        d="M626 1175.5C626 1180.2 622.194 1184 617.5 1184C612.806 1184 609 1180.2 609 1175.5C609 1170.81 612.806 1167 617.5 1167C622.194 1167 626 1170.81 626 1175.5Z"
                        fill="#F14336" />
                    <path
                        d="M578.057 717.904C578.057 722.599 574.251 726.404 569.557 726.404C564.862 726.404 561.057 722.599 561.057 717.904C561.057 713.21 564.862 709.404 569.557 709.404C574.251 709.404 578.057 713.21 578.057 717.904Z"
                        fill="#F14336" />

                </g>
                <circle cx="852" cy="875.45" r="185.5" stroke="#292929" stroke-width="25" />
                <circle cx="851.999" cy="875.454" r="172.985" fill="url(#paint0_linear)" />
                <g clip-path="url(#clip0)">
                    <path
                        d="M778.184 902.528L769.516 935.015L737.837 935.687C728.37 918.057 723 897.886 723 876.45C723 855.722 728.021 836.175 736.921 818.964H736.927L765.131 824.155L777.485 852.302C774.899 859.871 773.49 867.996 773.49 876.45C773.491 885.626 775.147 894.417 778.184 902.528Z"
                        fill="#FBBB00" />
                    <path
                        d="M969.824 853.099C971.254 860.66 971.999 868.469 971.999 876.45C971.999 885.399 971.062 894.129 969.277 902.549C963.216 931.203 947.38 956.224 925.442 973.93L925.435 973.923L889.912 972.103L884.884 940.592C899.441 932.021 910.817 918.607 916.81 902.549H850.236V853.099H917.781H969.824Z"
                        fill="#518EF8" />
                    <path
                        d="M925.434 973.923L925.441 973.93C904.105 991.148 877.002 1001.45 847.499 1001.45C800.086 1001.45 758.864 974.843 737.836 935.688L778.182 902.529C788.696 930.702 815.765 950.757 847.499 950.757C861.139 950.757 873.917 947.055 884.883 940.592L925.434 973.923Z"
                        fill="#28B446" />
                    <path
                        d="M926.969 780.228L886.637 813.38C875.288 806.258 861.873 802.144 847.501 802.144C815.049 802.144 787.474 823.119 777.487 852.302L736.929 818.964H736.922C757.642 778.854 799.384 751.45 847.501 751.45C877.709 751.45 905.407 762.254 926.969 780.228Z"
                        fill="#F14336" />
                </g>
                <circle cx="970.867" cy="724.229" r="46.5" stroke="white" stroke-width="11" />
                <circle cx="970.866" cy="724.391" r="41.5442" fill="#34A853" />
                <path id="google-arrow" fill-rule="evenodd" clip-rule="evenodd"
                    d="M982.557 714.018L970.867 702.347L959.176 714.018H969.037V746.435H972.696V714.018H982.557Z"
                    fill="white" />
                <defs>
                    <linearGradient id="paint0_linear" x1="975.163" y1="751.814" x2="757.466" y2="1015.63"
                        gradientUnits="userSpaceOnUse">
                        <stop stop-color="#333333" />
                        <stop offset="1" stop-color="#464646" />
                    </linearGradient>
                    <clipPath id="clip0">
                        <rect width="249" height="250" fill="white" transform="translate(723 751.45)" />
                    </clipPath>
                </defs>
            </svg>

            <div class="container">
                <div class="banner__inner">
                    <div class="bread-crumbs">
                        <div class="bread-crumbs__inner">
                            <ul class="bread-crumbs__list" itemscope itemtype="http://schema.org/BreadcrumbList">
                                <li class="bread-crumbs__list-item" itemprop="itemListElement" itemscope
                                    itemtype="http://schema.org/ListItem">
                                    <a href="{{ url('/') }}" class="bread-crumbs__link" itemprop="item">
                                        <span itemprop="name">{{ trans('seo.crumbs_main') }}</span>
                                        <meta itemprop="position" content="1">
                                    </a>
                                </li>
                                <li class="bread-crumbs__list-item" itemprop="itemListElement" itemscope
                                    itemtype="http://schema.org/ListItem">
                                    <span class="bread-crumbs__current-page"
                                        itemprop="name">{{ trans('seo.crumbs_page') }}</span>
                                    <meta itemprop="position" content="2">
                                </li>
                            </ul>
                        </div>
                    </div>
                    <h1 class="banner__title">{{ trans('seo.banner_title') }}</h1>
                    <div class="banner__subtitle">
                        {{ trans('seo.banner_subtitle') }}
                    </div>
                    <button data-togle="#seo-popup"
                        class="button button__cursor button__green button__green-solid">{{ trans('seo.banner_button') }}</button>
                </div>
            </div>
        </div>
        <section class="includes">
            <div class="container">
                <div class="includes__inner">
                    <h2 class="section-title">{{ trans('seo.section_title') }}</h2>
                    <div class="includes__items">
                        <div class="includes-item">
                            <div class="includes-item__inner">
                                <div class="includes-item__title"> {{ trans('seo.list_title1') }}</div>
                                <div class="includes-item__content">
                                    <ul class="includes-item__list">
                                        <li class="includes-item__list-item">{{ trans('seo.list_item1_1') }}</li>
                                        <li class="includes-item__list-item">{{ trans('seo.list_item1_2') }}
                                        </li>
                                        <li class="includes-item__list-item">{{ trans('seo.list_item1_3') }}</li>
                                        <li class="includes-item__list-item">{{ trans('seo.list_item1_4') }}</li>
                                        <li class="includes-item__list-item">{{ trans('seo.list_item1_5') }}</li>
                                        <li class="includes-item__list-item">{{ trans('seo.list_item1_6') }}</li>
                                        <li class="includes-item__list-item">{{ trans('seo.list_item1_7') }}
                                        </li>
                                        <li class="includes-item__list-item">{{ trans('seo.list_item1_8') }}</li>
                                        <li class="includes-item__list-item">{{ trans('seo.list_item1_9') }}
                                        </li>
                                        <li class="includes-item__list-item">{{ trans('seo.list_item1_10') }}</li>
                                        <li class="includes-item__list-item">{{ trans('seo.list_item1_11') }}</li>
                                        <li class="includes-item__list-item">{{ trans('seo.list_item1_12') }}</li>
                                        <li class="includes-item__list-item">{{ trans('seo.list_item1_13') }}</li>
                                        <li class="includes-item__list-item">{{ trans('seo.list_item1_14') }}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="includes-item">
                            <div class="includes-item__inner">
                                <div class="includes-item__title">{{ trans('seo.list_title2') }}</div>
                                <div class="includes-item__content">
                                    <ul class="includes-item__list">
                                        <li class="includes-item__list-item">{{ trans('seo.list_item2_1') }}</li>
                                        <li class="includes-item__list-item">{{ trans('seo.list_item2_2') }}</li>
                                        <li class="includes-item__list-item">{{ trans('seo.list_item2_3') }}</li>
                                        <li class="includes-item__list-item">{{ trans('seo.list_item2_4') }}</li>
                                        <li class="includes-item__list-item">{{ trans('seo.list_item2_5') }}</li>
                                        <li class="includes-item__list-item">{{ trans('seo.list_item2_6') }}</li>
                                        <li class="includes-item__list-item">{{ trans('seo.list_item2_7') }}</li>
                                        <li class="includes-item__list-item">{{ trans('seo.list_item2_8') }}
                                        </li>
                                        <li class="includes-item__list-item">{{ trans('seo.list_item2_9') }}
                                        </li>
                                        <li class="includes-item__list-item">{{ trans('seo.list_item2_10') }}</li>
                                        <li class="includes-item__list-item">{{ trans('seo.list_item2_11') }}
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="includes-item">
                            <div class="includes-item__inner">
                                <div class="includes-item__title">{{ trans('seo.list_title3') }}</div>
                                <div class="includes-item__content">
                                    <ul class="includes-item__list">
                                        <li class="includes-item__list-item">{{ trans('seo.list_item3_1') }}</li>
                                        <li class="includes-item__list-item">{{ trans('seo.list_item3_2') }}</li>
                                        <li class="includes-item__list-item">{{ trans('seo.list_item3_3') }}
                                        </li>
                                        <li class="includes-item__list-item">{{ trans('seo.list_item3_4') }}</li>
                                        <li class="includes-item__list-item">{{ trans('seo.list_item3_5') }}</li>
                                        <li class="includes-item__list-item">{{ trans('seo.list_item3_6') }}</li>
                                        <li class="includes-item__list-item">{{ trans('seo.list_item3_7') }}</li>
                                        <li class="includes-item__list-item">{{ trans('seo.list_item3_8') }}</li>
                                        <li class="includes-item__list-item">{{ trans('seo.list_item3_9') }}</li>
                                        <li class="includes-item__list-item">{{ trans('seo.list_item3_10') }}
                                        </li>
                                        <li class="includes-item__list-item">{{ trans('seo.list_item3_11') }}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="top">
            <div class="container">
                <div class="top__inner">
                    <div class="section-title">{{ trans('seo.section_title2') }}</div>
                    <div class="top__items">
                        <div class="top-item">
                            <div class="top-item__title">
                                <img width="63" height="63" class="lazy" data-src="/img/icons/seo/top1.svg"
                                    alt="icon">
                                <span>{{ trans('seo.item_title1') }}</span>
                            </div>
                            <div class="top-item__content">
                                <p>
                                    {{ trans('seo.item_content1') }}
                                </p>
                            </div>
                        </div>
                        <div class="top-item">
                            <div class="top-item__title">
                                <img width="63" height="63" class="lazy" data-src="/img/icons/seo/top2.svg"
                                    alt="icon">
                                <span>{{ trans('seo.item_title2') }}</span>
                            </div>
                            <div class="top-item__content">
                                <p> {{ trans('seo.item_content2') }} </p>
                            </div>
                        </div>
                        <div class="top-item">
                            <div class="top-item__title">
                                <img width="63" height="63" class="lazy" data-src="/img/icons/seo/top3.svg"
                                    alt="icon">
                                <span>{{ trans('seo.item_title3') }}</span>
                            </div>
                            <div class="top-item__content">
                                <p> {{ trans('seo.item_content3') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="cases">
            <div class="container">
                <div class="cases__inner">
                    <div class="section-title">{{ trans('seo.section_title3') }}</div>
                    <div class="cases__slider-wrapper">
                        <div class="cases__slider">
                            <div class="case">
                                <div class="case__inner">
                                    <div class="case__img-container">
                                        <div class="case__mobile-title">Ukrticket.com.ua</div>
                                        <img width="862" height="554" data-src="/img/seo/case1.png"
                                            class="lazy case__img" alt="case image">
                                    </div>
                                    <div class="case__info">
                                        <div class="case__title">Ukrticket.com.ua</div>
                                        <div class="case__lists">
                                            <div class="case__list-wrapper">
                                                <div class="case__list-title">{{ trans('seo.cases_title1') }}</div>
                                                <ul class="case__list case__list_block">
                                                    <li class="case__list-item">{{ trans('seo.cases_item1') }}</li>
                                                    <li class="case__list-item">{{ trans('seo.cases_item2') }}</li>
                                                    <li class="case__list-item">{{ trans('seo.cases_item3') }}</li>
                                                    <li class="case__list-item">{{ trans('seo.cases_item4') }}</li>
                                                    <li class="case__list-item">{{ trans('seo.cases_item5') }}</li>
                                                </ul>
                                            </div>
                                            <div class="case__list-wrapper">
                                                <div class="case__list-title">{{ trans('seo.cases_title2') }}</div>
                                                <ul class="case__list">
                                                    <li class="case__list-item">{!! trans('seo.cases_item6') !!}</li>
                                                    <li class="case__list-item">{!! trans('seo.cases_item7') !!}</li>
                                                </ul>
                                            </div>
                                            <div class="case__list-wrapper">
                                                <div class="case__list-title">{{ trans('seo.cases_title3') }}</div>
                                                <ul class="case__list">
                                                    <li class="case__list-item">{!! trans('seo.cases_item8') !!}
                                                    </li>
                                                    <li class="case__list-item">{!! trans('seo.cases_item9') !!}
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="case">
                                <div class="case__inner">
                                    <div class="case__img-container">
                                        <div class="case__mobile-title">psihiatrov.net</div>
                                        <img width="860" height="552" data-src="/img/seo/case2.png"
                                            class="case__img lazy" alt="case image">
                                    </div>
                                    <div class="case__info">
                                        <div class="case__title">psihiatrov.net</div>
                                        <div class="case__lists">
                                            <div class="case__list-wrapper">
                                                <div class="case__list-title">{{ trans('seo.cases_title1') }}</div>
                                                <ul class="case__list">
                                                    <li class="case__list-item">{{ trans('seo.cases_item2_1') }}</li>
                                                    <li class="case__list-item">{{ trans('seo.cases_item2_2') }}</li>
                                                    <li class="case__list-item">{{ trans('seo.cases_item2_3') }}</li>
                                                    <li class="case__list-item">{{ trans('seo.cases_item2_4') }}</li>
                                                    <li class="case__list-item">{{ trans('seo.cases_item2_5') }}</li>
                                                    <li class="case__list-item">{{ trans('seo.cases_item2_6') }}</li>
                                                    <li class="case__list-item">{{ trans('seo.cases_item2_7') }}</li>
                                                    <li class="case__list-item">{{ trans('seo.cases_item2_8') }}</li>
                                                    <li class="case__list-item">{{ trans('seo.cases_item2_9') }}</li>
                                                    <li class="case__list-item">{{ trans('seo.cases_item2_10') }}</li>
                                                </ul>
                                            </div>
                                            <div class="case__list-wrapper">
                                                <div class="case__list-title">{{ trans('seo.cases_title2') }}</div>
                                                <ul class="case__list">
                                                    <li class="case__list-item">{!! trans('seo.cases_item2_11') !!}</li>
                                                    <li class="case__list-item">{!! trans('seo.cases_item2_12') !!}</li>
                                                </ul>
                                            </div>
                                            <div class="case__list-wrapper">
                                                <div class="case__list-title">{{ trans('seo.cases_title3') }}</div>
                                                <ul class="case__list">
                                                    <li class="case__list-item">{!! trans('seo.cases_item2_13') !!}
                                                    </li>
                                                    <li class="case__list-item">{!! trans('seo.cases_item2_14') !!}
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="case">
                                <div class="case__inner">
                                    <div class="case__img-container">
                                        <div class="case__mobile-title">BANKOW.ru</div>
                                        <img width="863" height="564" data-src="/img/seo/case3.png"
                                            class="lazy case__img" alt="case image">
                                    </div>
                                    <div class="case__info">
                                        <div class="case__title">BANKOW.ru</div>
                                        <div class="case__lists">
                                            <div class="case__list-wrapper">
                                                <div class="case__list-title">{{ trans('seo.cases_title1') }}</div>
                                                <ul class="case__list">
                                                    <li class="case__list-item">{{ trans('seo.cases_item3_1') }}</li>
                                                    <li class="case__list-item">{{ trans('seo.cases_item3_2') }}</li>
                                                    <li class="case__list-item">{{ trans('seo.cases_item3_3') }}</li>
                                                    <li class="case__list-item">{{ trans('seo.cases_item3_4') }}</li>
                                                    <li class="case__list-item">{{ trans('seo.cases_item3_5') }}</li>
                                                    <li class="case__list-item">{{ trans('seo.cases_item3_6') }}</li>
                                                    <li class="case__list-item">{{ trans('seo.cases_item3_7') }}</li>
                                                    <li class="case__list-item">{{ trans('seo.cases_item3_8') }}</li>
                                                    <li class="case__list-item">{{ trans('seo.cases_item3_9') }}</li>
                                                    <li class="case__list-item">{{ trans('seo.cases_item3_10') }}</li>
                                                </ul>
                                            </div>
                                            <div class="case__list-wrapper">
                                                <div class="case__list-title">{{ trans('seo.cases_title2') }}</div>
                                                <ul class="case__list">
                                                    <li class="case__list-item">{!! trans('seo.cases_item3_11') !!}</li>
                                                    <li class="case__list-item">{!! trans('seo.cases_item3_12') !!}</li>
                                                </ul>
                                            </div>
                                            <div class="case__list-wrapper">
                                                <div class="case__list-title">{{ trans('seo.cases_title3') }}</div>
                                                <ul class="case__list">
                                                    <li class="case__list-item">{!! trans('seo.cases_item3_13') !!}
                                                    </li>
                                                    <li class="case__list-item">{!! trans('seo.cases_item3_14') !!}
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="case">
                                <div class="case__inner">
                                    <div class="case__img-container">
                                        <div class="case__mobile-title">top-kolgot.com.ua</div>
                                        <img width="863" height="554" data-src="/img/seo/case4.png"
                                            class="lazy case__img" alt="case image">
                                    </div>
                                    <div class="case__info">
                                        <div class="case__title">top-kolgot.com.ua</div>
                                        <div class="case__lists">
                                            <div class="case__list-wrapper">
                                                <div class="case__list-title">{{ trans('seo.cases_title1') }}</div>
                                                <ul class="case__list case__list_block">
                                                    <li class="case__list-item">{{ trans('seo.cases_item4_1') }}</li>
                                                    <li class="case__list-item">{{ trans('seo.cases_item4_2') }}</li>
                                                    <li class="case__list-item">{{ trans('seo.cases_item4_3') }}</li>
                                                    <li class="case__list-item">{{ trans('seo.cases_item4_4') }}</li>
                                                    <li class="case__list-item">{{ trans('seo.cases_item4_5') }}</li>
                                                </ul>
                                            </div>
                                            <div class="case__list-wrapper">
                                                <div class="case__list-title">{{ trans('seo.cases_title2') }}</div>
                                                <ul class="case__list">
                                                    <li class="case__list-item">{!! trans('seo.cases_item4_6') !!}</li>
                                                    <li class="case__list-item">{!! trans('seo.cases_item4_7') !!}</li>
                                                </ul>
                                            </div>
                                            <div class="case__list-wrapper">
                                                <div class="case__list-title">{{ trans('seo.cases_title3') }}</div>
                                                <ul class="case__list">
                                                    <li class="case__list-item">{!! trans('seo.cases_item4_8') !!}
                                                    </li>
                                                    <li class="case__list-item">{!! trans('seo.cases_item4_9') !!}
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="case">
                                <div class="case__inner">
                                    <div class="case__img-container">
                                        <div class="case__mobile-title">kolgotoff.com.ua</div>
                                        <img width="863" height="554" data-src="/img/seo/case5.png"
                                            class="lazy case__img" alt="case image">
                                    </div>
                                    <div class="case__info">
                                        <div class="case__title">kolgotoff.com.ua</div>
                                        <div class="case__lists">
                                            <div class="case__list-wrapper">
                                                <div class="case__list-title">{{ trans('seo.cases_title1') }}</div>
                                                <ul class="case__list case__list_block">
                                                    <li class="case__list-item">{{ trans('seo.cases_item5_1') }}</li>
                                                    <li class="case__list-item">{{ trans('seo.cases_item5_2') }}</li>
                                                    <li class="case__list-item">{{ trans('seo.cases_item5_3') }}</li>
                                                    <li class="case__list-item">{{ trans('seo.cases_item5_4') }}</li>
                                                    <li class="case__list-item">{{ trans('seo.cases_item5_5') }}</li>
                                                    <li class="case__list-item">{{ trans('seo.cases_item5_6') }}</li>
                                                </ul>
                                            </div>
                                            <div class="case__list-wrapper">
                                                <div class="case__list-title">{{ trans('seo.cases_title2') }}</div>
                                                <ul class="case__list">
                                                    <li class="case__list-item">{!! trans('seo.cases_item5_7') !!}</li>
                                                    <li class="case__list-item">{!! trans('seo.cases_item5_8') !!}</li>
                                                </ul>
                                            </div>
                                            <div class="case__list-wrapper">
                                                <div class="case__list-title">{{ trans('seo.cases_title3') }}</div>
                                                <ul class="case__list">
                                                    <li class="case__list-item">{!! trans('seo.cases_item5_9') !!}
                                                    </li>
                                                    <li class="case__list-item">{!! trans('seo.cases_item5_10') !!}
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cases__slider-controls">
                            <button class="slick-prev slick-arrow">
                                <svg width="28" height="12" viewBox="0 0 28 12" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M0.469667 6.53033C0.176775 6.23744 0.176775 5.76256 0.469667 5.46967L5.24264 0.696699C5.53553 0.403806 6.01041 0.403806 6.3033 0.696699C6.59619 0.989593 6.59619 1.46447 6.3033 1.75736L2.06066 6L6.3033 10.2426C6.59619 10.5355 6.59619 11.0104 6.3033 11.3033C6.01041 11.5962 5.53553 11.5962 5.24264 11.3033L0.469667 6.53033ZM28 6.75H0.999998V5.25H28V6.75Z"
                                        fill="#222222"></path>
                                </svg>
                                {{ trans('index.previous_case') }}
                            </button>
                            <div class="slick-dots"></div>
                            <button class="slick-next slick-arrow">
                                {{ trans('index.next_case') }}
                                <svg width="28" height="12" viewBox="0 0 28 12" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M27.5303 6.53033C27.8232 6.23744 27.8232 5.76256 27.5303 5.46967L22.7574 0.696699C22.4645 0.403806 21.9896 0.403806 21.6967 0.696699C21.4038 0.989593 21.4038 1.46447 21.6967 1.75736L25.9393 6L21.6967 10.2426C21.4038 10.5355 21.4038 11.0104 21.6967 11.3033C21.9896 11.5962 22.4645 11.5962 22.7574 11.3033L27.5303 6.53033ZM0 6.75H27V5.25H0V6.75Z"
                                        fill="#222222"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @include('partials.ask')
        <section class="steps">
            <div class="container">
                <div class="section-title">
                    {{ trans('seo.section_title4') }}
                </div>
                <div class="steps__columns steps__columns-slider">
                    <div class="steps__column">
                        <div class="steps__title">
                            {{ trans('seo.steps_title1') }}
                        </div>
                        <div class="steps__cards steps__cards_line-purple">
                            <div class="steps__card">
                                <div class="steps__img-field">
                                    <img class="steps__img wow fadeInDown lazy" data-src="img/icons/seo/steps1.svg"
                                        alt="icon.svg">
                                </div>
                                <span class="steps__card-title">
                                    {{ trans('seo.steps_item1') }}
                                </span>
                            </div>
                            <div class="steps__card">
                                <div class="steps__img-field">
                                    <img class="steps__img wow fadeInDown lazy" data-src="img/icons/seo/steps2.svg"
                                        alt="icon.svg">
                                </div>
                                <span class="steps__card-title">
                                    {{ trans('seo.steps_item2') }}
                                </span>
                            </div>
                            <div class="steps__card">
                                <div class="steps__img-field">
                                    <img class="steps__img wow fadeInDown lazy" data-src="img/icons/seo/steps3.svg"
                                        alt="icon.svg">
                                </div>
                                <span class="steps__card-title">
                                    {{ trans('seo.steps_item3') }}
                                </span>
                            </div>
                        </div>

                    </div>
                    <div class="steps__column">
                        <div class="steps__title">
                            {{ trans('seo.steps_title2') }}
                        </div>
                        <div class="steps__cards steps__cards_line-pink">
                            <div class="steps__card">
                                <div class="steps__img-field">
                                    <img class="steps__img wow fadeInDown lazy" data-src="img/icons/seo/steps4.svg"
                                        alt="icon.svg">
                                </div>
                                <span class="steps__card-title">
                                    {{ trans('seo.steps_item4') }}
                                </span>
                            </div>
                            <div class="steps__card">
                                <div class="steps__img-field">
                                    <img class="steps__img wow fadeInDown lazy" data-src="img/icons/seo/steps5.svg"
                                        alt="icon.svg">
                                </div>
                                <span class="steps__card-title">
                                    {{ trans('seo.steps_item5') }}
                                </span>
                            </div>
                            <div class="steps__card">
                                <div class="steps__img-field">
                                    <img class="steps__img wow fadeInDown lazy" data-src="img/icons/seo/steps6.svg"
                                        alt="icon.svg">
                                </div>
                                <span class="steps__card-title">
                                    {{ trans('seo.steps_item6') }}
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="steps__column">
                        <div class="steps__title">
                            {{ trans('seo.steps_title3') }}
                        </div>
                        <div class="steps__cards steps__cards_line-blue">
                            <div class="steps__card">
                                <div class="steps__img-field">
                                    <img class="steps__img wow fadeInDown lazy" data-src="img/icons/seo/steps7.svg"
                                        alt="icon.svg">
                                </div>
                                <span class="steps__card-title">
                                    {{ trans('seo.steps_item7') }}
                                </span>
                            </div>
                            <div class="steps__card">
                                <div class="steps__img-field">
                                    <img class="steps__img wow fadeInDown lazy" data-src="img/icons/seo/steps8.svg"
                                        alt="icon.svg">
                                </div>
                                <span class="steps__card-title">
                                    {{ trans('seo.steps_item8') }}
                                </span>
                            </div>
                            <div class="steps__card">
                                <div class="steps__img-field">
                                    <img class="steps__img wow fadeInDown lazy" data-src="img/icons/seo/steps9.svg"
                                        alt="icon.svg">
                                </div>
                                <span class="steps__card-title">
                                    {{ trans('seo.steps_item9') }}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @include('partials.our-services')
        @include('partials.contact-us', ['formClass' => 'seopage'])
    </main>
    <div id="seo-popup" class="popup js-shape-close">
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
                    'formId' => 'seo-popup-form',
                    'formClass' => 'seopage',
                ])
            </div>
        </div>
    </div>
@endsection

@section('bottom-scripts')
    <script src="{{ asset('js/libs.js') }}"></script>
    <script>
        $('.cases__slider').slick({
            dots: true,
            prevArrow: $('.slick-prev'),
            nextArrow: $('.slick-next'),
            appendDots: $('.slick-dots'),
            responsive: [{
                breakpoint: 575,
                settings: {
                    adaptiveHeight: true
                }
            }]
        })

        // const mediaQuery = '(max-width: 767px)';
        // const mediaQueryList = window.matchMedia(mediaQuery);

        if (mediaQueryList.matches) {
            removeClickToggle()
        } else {
            addClickToggle()
        }

        mediaQueryList.addEventListener('change', event => {
            if (event.matches) {
                removeClickToggle()

            } else {
                addClickToggle()
            }
        })

        function addClickToggle() {
            items = [...document.querySelectorAll('.includes-item__title')]
            items.forEach(item => {
                item.addEventListener('click', toggleView, false)
            });
        }

        function removeClickToggle() {
            items = [...document.querySelectorAll('.includes-item__title')]
            items.forEach(item => {
                item.removeEventListener('click', toggleView)
            });
        }

        function toggleView() {
            $(this).toggleClass('active')
            $(this).next().slideToggle()
        }
    </script>
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
