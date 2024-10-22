<footer class="footer footer-redesign">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-2 footer__logo">
                <a href="{{ getLocaleUrl('/') }}" class="logo-link">
                    <img class="logo-link__img wow fadeInLeft" src="/img/icons/logo.jpg" alt="logo.svg">
                </a>
                <button data-togle="#footer-popup" class="margin-left-auto btn btn-red tt-upper">
                    {{ trans('index.contact_us') }}
                </button>

                <div class="footer-brief">
                    <p>{{ trans('partials/footer.fill_out_brief') }}</p>
                    <ul>
                        <li>
                            <a href="{{ getLocaleUrl('brief') }}">{{ trans('partials/footer.site') }}</a>
                        </li>
                        <li>
                            <a href="{{ getLocaleUrl('brief-seo') }}">SEO</a>
                        </li>
                        <li>
                            <a href="{{ getLocaleUrl('brief-style') }}" class="small">{{ trans('partials/footer.firm_style') }}</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-2 footer__menu">
                <ul class="pl-20prec">
                    <li>
                        <p class="footer__menu-title">{{ trans('partials/footer.menu') }}</p>
                    </li>
                    <li><a href="{{ getLocaleUrl('portfolio') }}"> {{ trans('partials/footer.projects') }} </a></li>
                    <li><a href="#">{{ trans('partials/footer.vacancies') }} </a></li>
                    <li><a href="{{ getLocaleUrl('contacts') }}"> {{ trans('partials/footer.contacts') }} </a></li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-2 footer__menu  footer__menu-services">
                <ul class="">
                    <li>
                        <p class="footer__menu-title">{{ trans('partials/footer.services') }}</p>
                    </li>
                    <li><a href="{{ getLocaleUrl('razrabotka-sajtov') }}"> {{ trans('partials/footer.site_dev') }} </a></li>
                    <li><a href="{{ getLocaleUrl('internet-magazin') }}"> {{ trans('partials/footer.e_store_dev') }} </a></li>
                    <li><a href="{{ getLocaleUrl('razrabotka-saita-vizitki') }}"> {{ trans('partials/footer.site_visit') }} </a></li>
                    <li><a href="{{ getLocaleUrl('mobapps') }}"> {{ trans('partials/footer.ios_android_app') }} </a></li>
                    <li><a href="{{ getLocaleUrl('kontekstnaya-reklama') }}"> {{ trans('partials/footer.context_advert') }} </a></li>
                    <li><a href="{{ getLocaleUrl('seo-optimizatsiya') }}"> {{ trans('partials/footer.seo-optimization') }} </a></li>
                    <li><a href="{{ getLocaleUrl('smm') }}"> {{ trans('partials/footer.smm') }} </a></li>
                </ul>
            </div>
            <!-- <div class="col-xs-12 col-sm-6 col-md-4 col-lg-2 footer__menu">
                <ul>
                    <li>
                        <p class="footer__menu-title"> {{ trans('partials/footer.contacts') }} </p>
                    </li>
                    <li>
                        <a class="margin-left-auto footer__phone itle__color-main" href="tel:+380678887516">
                            +38 (067) 888-75-16
                        </a>
                    </li>
                    <li>
                        @include('partials.social')
                    </li>
                </ul>
            </div> -->
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-2 footer__menu footer__menu-address">
                <ul>
                    <li>
                        <p class="footer__menu-title"> &nbsp; </p>
                    </li>
                    <li>
                        <div class="address_item">
                            <div class="icon">
                                <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M6.00013 0.000241163C9.30468 0.000241163 11.9963 2.63855 11.9963 5.8898C11.9963 6.72926 11.8231 7.54207 11.4633 8.28826C10.0488 11.0265 8.29862 13.5778 6.2533 15.8834C6.22203 15.92 6.1832 15.9493 6.1395 15.9694C6.0958 15.9896 6.04825 16 6.00013 16C5.95201 16 5.90447 15.9896 5.86076 15.9694C5.81706 15.9493 5.77823 15.92 5.74696 15.8834C4.9075 14.9107 2.01602 11.5129 0.523645 8.28826C0.177191 7.53637 -0.000195861 6.71766 0.00397824 5.8898C0.0109463 5.10936 0.171572 4.33794 0.476684 3.61958C0.781796 2.90123 1.22542 2.25001 1.78222 1.7031C2.33902 1.1562 2.99809 0.724332 3.72181 0.432153C4.44552 0.139974 5.2197 -0.00678965 6.00013 0.000241163ZM6.00013 8.94117C6.4061 8.94469 6.80878 8.8682 7.18518 8.71609C7.56159 8.56397 7.90435 8.3392 8.19388 8.05461C8.48342 7.77003 8.71406 7.4312 8.87265 7.05747C9.03123 6.68374 9.11465 6.28244 9.11813 5.87647C9.11813 4.19755 7.71903 2.82509 6.00013 2.82509C5.59416 2.82158 5.19148 2.89806 4.81508 3.05018C4.43867 3.2023 4.09591 3.42707 3.80638 3.71165C3.51684 3.99624 3.2862 4.33507 3.12761 4.7088C2.96903 5.08252 2.88562 5.48383 2.88213 5.8898C2.88213 7.56872 4.28123 8.9545 6.00013 8.9545V8.94117Z"
                                        fill="#EE4043" />
                                </svg>
                            </div>
                            <p>
                                {{ trans('partials/footer.adress') }}
                            </p>
                        </div>
                    </li>
                    <li>
                        <div class="address_item">
                            <div class="icon">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M8 0.5C3.8645 0.5 0.5 3.8645 0.5 8C0.5 12.1355 3.8645 15.5 8 15.5C12.1355 15.5 15.5 12.1355 15.5 8C15.5 3.8645 12.1355 0.5 8 0.5ZM8 13.9041C4.74449 13.9041 2.09572 11.2557 2.09572 8C2.09572 4.74434 4.74449 2.09587 8 2.09587C11.2555 2.09587 13.9043 4.74434 13.9043 8C13.9043 11.2557 11.2555 13.9041 8 13.9041Z"
                                        fill="#EE4043" />
                                    <path
                                        d="M11.9088 7.76779H8.5383V3.71519C8.5383 3.37416 8.2618 3.09766 7.92076 3.09766C7.57973 3.09766 7.30322 3.37416 7.30322 3.71519V8.38533C7.30322 8.72636 7.57973 9.00286 7.92076 9.00286H11.9088C12.2499 9.00286 12.5264 8.72636 12.5264 8.38533C12.5264 8.04429 12.2499 7.76779 11.9088 7.76779Z"
                                        fill="#EE4043" />
                                </svg>
                            </div>
                            <p>
                                {!! trans('partials/footer.work_schedule') !!}
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <p class="copy">
                    {{ trans('partials/footer.rights') }}
                </p>
            </div>
        </div>
    </div>
</footer>

<div class="overlay"></div>
<div id="footer-popup" class="popup js-shape-close">
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
                'formId' => 'popup',
                'formClass' => 'popupform',
            ])
        </div>
    </div>
</div>
<div id="popupmessage" class="popup popup-wa js-shape-close">
    <div class="popup__wind">
        <button class="popup__close js-close"></button>
        <div class="success">
            <img class="lazy" data-src="img/icons/successSend.png" alt="success">
            <p class="popup__title thanks">Спасибо!</p>
            <p class="popup__title">Вопрос отправлен!</p>
            <p class="popup__subtitle">
                Наши менеджеры обработают вашу заявку <br>
                и свяжутся с вами в ближайшее время </p>
        </div>
    </div>
</div>
</div>
<script type="application/ld+json">
  {
    "@context": "http://schema.org",
    "@type": "Organization",
    "name": "MobIOS Studio",
    "url": "https://mobios.ua/",
    "logo": "{{Request::url()}}/img/logo.png",
    "telephone": "+38 (067) 888-75-16",
    "email": "pm.mobios@gmail.com",
    "sameAs": ["https://www.instagram.com/mobios_studio/",
      "https://www.behance.net/mobios-studio"
    ],
    "aggregateRating": {
      "@type": "AggregateRating",
      "ratingValue": "4.8",
      "reviewCount": "56"
    },
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "ул. Среднефонтанская 19а",
      "addressLocality": "Одесса",
      "addressRegion": "Одесская область",
      "addressCountry": "Украина"
    }
  }
</script>
