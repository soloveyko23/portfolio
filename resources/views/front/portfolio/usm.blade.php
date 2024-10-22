 @extends('layouts.portfolio-item')

 @section('seo')
     <link rel="canonical" href="{{ Request::url() }}">
     <title>{{ trans('portfolio/usm.seo_title') }}</title>
     <meta name="description" content="{{ trans('portfolio/usm.seo_descr') }}">
 @endsection

 @section('css')
     <link rel="stylesheet" href="{{ asset('css/redesign.css') }}">
     <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
     <link rel="stylesheet" href="{{ asset('css/portfolio/usm.css') }}">
 @endsection


 @section('content')
     <main class="usm">
         <header class="header">
             <div class="container">
                 <div class="header__inner">
                     <div class="header__description">
                         <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                             class="wow fadeInDown header__logo">
                             <img src="/img/portfolio/usm/logo.png" alt="логотип.png">
                         </div>
                         <h1 data-wow-delay="0.5s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                             class="wow fadeInUp header__txt">
                             {{ trans('portfolio/usm.header_title') }}
                         </h1>
                         <div data-wow-delay="0.5s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                             class="wow fadeInDown header__icons">
                             <div class="header__img-area">
                                 <img class="header__icon-img" src="/img/portfolio/usm/icons/laptop.png" alt="png">
                             </div>
                             <div class="header__img-area">
                                 <img class="header__icon-img" src="/img/portfolio/usm/icons/phone.png" alt="png">
                             </div>
                             <div class="header__img-area">
                                 <img class="header__icon-img" src="/img/portfolio/usm/icons/tablet.png" alt="png">
                             </div>
                         </div>
                         <a data-wow-delay="0s" data-wow-duration="2s" data-wow-iteration="1" data-wow-offset="0"
                             class="wow fadeInUp header__button" href="https://usm.ua/" rel="nofollow">
                             {{ trans('portfolio/usm.header_button') }}
                         </a>
                     </div>
                 </div>
             </div>
             <div data-wow-delay="0s" data-wow-duration="2s" data-wow-iteration="1" data-wow-offset="0"
                 class="wow fadeInRight header__phone-laptop">
                 <img class="header__img-phone" src="/img/portfolio/usm/mobile-home.png" alt="png">
                 <img class="header__img-laptop" src="/img/portfolio/usm/laptop-home.png" alt="png">
             </div>
         </header>
         <div class="main">
             <section class="home-page">
                 <div class="main__container">
                     <h2 data-wow-delay="0s" data-wow-duration="2s" data-wow-iteration="1" data-wow-offset="0"
                         class="wow fadeInRight title title__primary home-page__title">
                         {{ trans('portfolio/usm.main_page') }}
                     </h2>
                     <div data-wow-delay="0s" data-wow-duration="2s" data-wow-iteration="1" data-wow-offset="0"
                         class="wow fadeInUp home-page__img-area">
                         <img src="/img/portfolio/usm/home-page-txt.png" class="home-page__img-txt" alt="home-page-img">
                         <img src="/img/portfolio/usm/home-page-img.jpg" class="home-page__image" alt="home-page-img">
                     </div>
                 </div>
             </section>
             <section class="colors">
                 <div class="main__container">
                     <div class="colors__inner">
                         <h2 data-wow-delay="0s" data-wow-duration="2s" data-wow-iteration="1" data-wow-offset="0"
                             class="wow fadeInLeft title title__primary colors__title">
                             {{ trans('portfolio/usm.colors') }}
                         </h2>
                         <div data-wow-delay="0s" data-wow-duration="1.5s" data-wow-iteration="1" data-wow-offset="0"
                             class="wow zoomIn colors__inner-item">
                             <div class="colors__square colors__square_color-blue"></div>
                             <div class="colors__square-txt">
                                 #0042a3
                             </div>
                         </div>
                         <div data-wow-delay="0s" data-wow-duration="1.5s" data-wow-iteration="1" data-wow-offset="0"
                             class="wow zoomIn colors__inner-item">
                             <div class="colors__square colors__square_color-yellow"></div>
                             <div class="colors__square-txt">
                                 #ffd80b
                             </div>
                         </div>
                     </div>
                 </div>
             </section>
             <section class="font-solution">
                 <div class="main__container">
                     <div class="font-solution__inner">
                         <div data-wow-delay="0s" data-wow-duration="1.5s" data-wow-iteration="1" data-wow-offset="0"
                             class="wow zoomIn font-solution__big-letter">
                             <span class="title font-solution__title-A">
                                 A
                             </span>
                             <img src="/img/portfolio/usm/A.png" class="font-solution__img-A" alt="home-page-img">
                         </div>
                         <h2 data-wow-delay="0s" data-wow-duration="1.5s" data-wow-iteration="1" data-wow-offset="0"
                             class="wow zoomIn font-solution__subtitle">
                             Akrobat
                             <span class="font-solution__txt">
                                 а б в г д е ё ж з и й к л м н о п р с т у ф х ц ч ш щ ъ ы ь э ю я
                             </span>
                         </h2>
                         <h2 data-wow-delay="0s" data-wow-duration="1.5s" data-wow-iteration="1" data-wow-offset="0"
                             class="wow zoomIn title title__primary font-solution__title">
                             {{ trans('portfolio/usm.fonts') }}
                         </h2>
                     </div>
                 </div>
             </section>
             <section class="about-company">
                 <h2 data-wow-delay="0s" data-wow-duration="1.5s" data-wow-iteration="1" data-wow-offset="0"
                     class="wow fadeInUp title title__primary about-company__title">
                     {!! trans('portfolio/usm.about') !!}
                 </h2>
                 <div class="main__container about-company__container">
                     <div data-wow-delay="0s" data-wow-duration="1.5s" data-wow-iteration="1" data-wow-offset="0"
                         class="wow fadeInUp about-company__img-area">
                         <img src="/img/portfolio/usm/about-company-txt.png" class="about-company__img-txt"
                             alt="home-page-img">
                         <img src="/img/portfolio/usm/about-company-img.jpg" class="about-company__img-page"
                             alt="home-page-img">
                         <img src="/img/portfolio/usm/about-company-transport.png" class="about-company__img-transport"
                             alt="home-page-img">
                     </div>
                 </div>
             </section>
             <section class="product-page">
                 <div class="main__container">
                     <h2 data-wow-delay="0s" data-wow-duration="1.5s" data-wow-iteration="1" data-wow-offset="0"
                         class="wow fadeInRight title title__primary product-page__title">
                         {{ trans('portfolio/usm.product_page') }}
                     </h2>
                     <div data-wow-delay="0s" data-wow-duration="1.5s" data-wow-iteration="1" data-wow-offset="0"
                         class="wow fadeInUp product-page__img-area">
                         <img src="/img/portfolio/usm/product-page-txt.png" class="product-page__img-txt"
                             alt="home-page-img">
                         <img src="/img/portfolio/usm/product-page-img.jpg" class="product-page__img-page"
                             alt="home-page-img">
                     </div>
                 </div>
             </section>
             <section class="contact-page">
                 <div class="main__container contact-page__container">
                     <h2 data-wow-delay="0s" data-wow-duration="1.5s" data-wow-iteration="1" data-wow-offset="0"
                         class="wow fadeInLeft title title__primary contact-page__title">
                         {{ trans('portfolio/usm.contacts') }}
                     </h2>
                     <div data-wow-delay="0s" data-wow-duration="1.5s" data-wow-iteration="1" data-wow-offset="0"
                         class="wow fadeInUp contact-page__img-area">
                         <img src="/img/portfolio/usm/contacts-txt.png" class="contact-page__img-txt"
                             alt="home-page-img">
                         <img src="/img/portfolio/usm/contact-page-img.jpg" class="contact-page__img-page"
                             alt="home-page-img">
                     </div>
                 </div>
             </section>
             <section class="ty">
                 <div class="main__container">
                     <div data-wow-delay="0s" data-wow-duration="1.5s" data-wow-iteration="1" data-wow-offset="0"
                         class="wow fadeInRight title ty__title">
                         {!! trans('portfolio/usm.footer') !!}
                     </div>
                 </div>
             </section>
         </div>
     </main>
 @endsection

 @section('bottom-scripts')
     <script src="{{ asset('js/libs.js') }}"></script>
 @endsection
