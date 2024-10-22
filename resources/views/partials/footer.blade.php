<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-lg-2 footer__logo">
                <a href="/" class="logo-link">
                    <img class="logo-link__img wow fadeInLeft" src="/img/icons/logo.svg" alt="logo.svg">
                </a>
                <p class="footer__copy phone-hidden">
                    Разработка и продвижение сайтов в Одессе - Mobios © 2012‐2021
                </p>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-2 footer__menu">
                <ul class="">
                    <li><a href="/portfolio">Наши проекты</a></li>
                    <li><a href="/contacts">Контакты</a></li>
                    {{-- <li><a href="/" >Вакансии</a></li> --}}
                </ul>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-3 footer__menu">
                <ul class="">
                    <li><a href="/razrabotka-sajtov">Разработка сайта</a></li>
                    <li><a href="/internet-magazin">Разработка интернет-магазина</a></li>
                    <li><a href="/seo-optimizatsiya">SEO-оптимизация</a></li>
                    <li><a href="/smm">SMM-продвижение</a></li>
                    {{-- <li><a href="/">CRM-системы</a></li>
          <li><a href="/">SMM-продвижение</a></li>
          <li><a href="/">Импорт товаров 1с/xml</a></li> --}}
                </ul>
            </div>
            <div class="col-xs-12 col-sm-4 d-none d-sm-block col-lg-2 footer__menu">
                <ul class="">
                    {{-- <li><a href="/">Интернет-маркетинг</a></li> --}}
                    <li><a href="/kontekstnaya-reklama">Контектсная реклама</a></li>
                    {{-- <li><a href="/">SEO-оптимизация</a></li> --}}
                    {{-- <li><a href="/">Youtube-продвижение</a></li> --}}
                    <li><a href="/mobapps">IOS/Android приложения</a></li>
                </ul>

                <p class="footer__copy phone-visible">
                    Разработка и продвижение сайтов в Одессе - Mobios © 2012‐2021
                </p>
            </div>
           
        </div>
    </div>
</footer>
<!-- <div class="col-xs-12 col-sm-6 col-lg-3 footer__contact">
                <a class="margin-left-auto footer__phone itle__color-main" href="tel:+380678887516">
                    +38 (067) 888-75-16
                </a>
                @include('partials.social')
                <button data-togle="#footer-popup"
                    class="margin-left-auto footer__button button button__center button__secondary margin_mt-34">
                    Задать вопрос
                </button>
                <div class="footer-brief">
                    <p>{{ trans('partials/footer.fill_out_brief') }}</p>
                    <ul>
                        <li>
                            <a href="/brief">{{ trans('partials/footer.site') }}</a>
                        </li>
                        <li>
                            <a href="/brief-seo">SEO</a>
                        </li>
                        <li>
                            <a href="/brief-style" class="small">{{ trans('partials/footer.site') }}</a>
                        </li>
                    </ul>
                </div>
            </div> -->
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
        {{-- <div class="error">
        <img src="img/icons/errorSend.png" alt="error">
        <p class="popup__title">Что-то пошло не так!</p>
        <p class="popup__subtitle">
         Все очень плохо ! <br>
        </div>
      </div> --}}
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
    "telephone": " +38 (067) 888-75-16, +38 (067) 888-75-16",
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
