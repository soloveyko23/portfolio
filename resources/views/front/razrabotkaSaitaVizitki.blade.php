@extends('layouts.default')

@section('seo')
    <title>{{ trans('website.seo_title') }}</title>
    <meta name="description" content="{{ trans('website.seo_description') }}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ trans('website.seo_title') }}">
    <meta property="og:url" content="{{ Request::url() }}" />
    <meta property="og:site_name" content="{{ trans('website.seo_name') }}" />
    <meta property="og:description" content="{{ trans('website.seo_description') }}" />
    <meta property="og:image" content="{{ Request::url() }}/img/logo.png">

    <link rel="canonical" href="{{ Request::url() }}">
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/website.css') }}">
    <link rel="stylesheet" href="{{ asset('css/redesign.css') }}">
    <link rel="stylesheet" href="{{ asset('css/process.css') }}">

    <style>
        .blockquote-block {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background-color: #EEEEEE;
            padding: 40px;
            margin-top: -40px;
        }

        blockquote {
            position: relative;
            margin: 0;
            max-width: 50%;
            text-align: center;
        }

        blockquote:before,
        blockquote:after {
            position: absolute;
            color: #f1efe6;
            font-size: 8rem;
            width: 4rem;
            height: 4rem;
        }

        blockquote:before {
            content: url(/img/icons/symbols-quote.svg);
            left: -5rem;
            top: -2rem;
        }

        blockquote:after {
            content: url(/img/icons/symbols-quote.svg);
            bottom: 3rem;
            right: 0;
        }

        @media (max-width: 1024px) {
            blockquote {
                position: relative;
                margin: 0;
                max-width: 100%;
                text-align: center;
            }
        }
    </style>
@endsection

@section('content')
    <main class="main webs">
        @php
            $indexBanner = [
                'title' => trans('razrabotkaSaitaVizitki.title'),
                'subtext' => trans('razrabotkaSaitaVizitki.subtext'),
                'type' => 'webDev',
                'crumbs' => [['text' => trans('razrabotkaSaitaVizitki.crumbs')]],
            ];

        @endphp
        @include('partials.redesign.index-banner', $indexBanner)
        @php
            $we_propouse = [
                'items' => [
                    [
                        'title' => 'Промо-сайт / визитка',
                        'descr' =>
                            'Это лучшее решение для молодых организаций. <br> Когда компания только начинает свою деятельность и еще не располагает большим количеством информации о своих достижениях, реализованных проектах, партнерах и т. д.',
                        'href' => '/internet-magazin',
                        'hrefText' => 'Обсудить проект',
                    ],
                    [
                        'title' => 'Интернет-магазин',
                        'descr' =>
                            'Индивидуальный удобный дизайн, <br> эффективное программное обеспечение, <br> уникальный контент и удобная система управления готовым магазином с полным функционалом.',
                        'href' => '/internet-magazin',
                        'hrefText' => 'Обсудить проект',
                    ],
                    [
                        'title' => 'Корпоративный сайт',
                        'descr' =>
                            'Это качественная и полноценная презентация компании в Интернете. Его цель - привлечь новых клиентов, развить бизнес путем раскрытия преимуществ компании, подробного описания ее деятельности, услуг или товаров.',
                        'href' => '/internet-magazin',
                        'hrefText' => 'Обсудить проект',
                    ],
                    [
                        'title' => 'Лендинг',
                        'descr' =>
                            'Вся структура и контент ориентированы только на целевое действие. У посетителя есть 6-10 секунд для определения ценности сайта, на который он попал, чтобы решить для себя обратиться ли он в эту компанию.',
                        'href' => '/internet-magazin',
                        'hrefText' => 'Обсудить проект',
                    ],
                    [
                        'title' => 'Индивидуальный проект',
                        'descr' =>
                            'Мы разработаем уникальный дизайн, <br>широкий функционал, проработаем маркетинговую составляющую. <br> Без сомнения, бренд или компания будут лучше представлены в Интернете.',
                        'href' => '/internet-magazin',
                        'hrefText' => 'Обсудить проект',
                    ],
                    [
                        'title' => 'Проект на Framework',
                        'descr' =>
                            'Это лучшее решение для молодых организаций. <br> Когда компания только начинает свою деятельность и еще не располагает большим количеством информации о своих достижениях, реализованных проектах, партнерах и т. д.',
                        'href' => '/internet-magazin',
                        'hrefText' => 'Обсудить проект',
                    ],
                ],
            ];
        @endphp
        <section class="process">
            <div class="container">
                <div class="process__inner">
                    <div class="section-title">{{ trans('razrabotkaSaitaVizitki.section_title') }}</div>
                    <div class="process-steps">
                        <div class="process-steps__item">
                            <div class="process-steps__number wow fadeInUp">1</div>
                            <img width="105" height="105" class="wow fadeInLeft delay-1s lazy"
                                data-src="/img/icons/razrabotka-saita-vizitki/step1.svg" alt="step 1">
                            <div class="process-steps__content wow fadeInLeft delay-2s">
                                <div class="process-steps__title">{!! trans('razrabotkaSaitaVizitki.stage_title1') !!}</div>
                                <div class="process-steps__text">{{ trans('razrabotkaSaitaVizitki.stage_text1') }}
                                </div>
                            </div>
                        </div>
                        <div class="process-steps__item">
                            <div class="process-steps__number wow fadeInUp">2</div>
                            <img width="105" height="105" class="lazy wow fadeInRight delay-1s"
                                data-src="/img/icons/razrabotka-saita-vizitki/step2.svg" alt="step 2">
                            <div class="process-steps__content wow fadeInRight delay-2s">
                                <div class="process-steps__title">{{ trans('razrabotkaSaitaVizitki.stage_title2') }}</div>
                                <div class="process-steps__text">{{ trans('razrabotkaSaitaVizitki.stage_text2') }}</div>
                            </div>
                        </div>
                        <div class="process-steps__item">
                            <div class="process-steps__number wow fadeInUp">3</div>
                            <img width="105" height="105" class="lazy wow fadeInLeft delay-1s"
                                data-src="/img/icons/razrabotka-saita-vizitki/step3.svg" alt="step 3">
                            <div class="process-steps__content wow fadeInLeft delay-2s">
                                <div class="process-steps__title">{{ trans('razrabotkaSaitaVizitki.stage_title3') }}</div>
                                <div class="process-steps__text">{{ trans('razrabotkaSaitaVizitki.stage_text3') }}</div>
                            </div>
                        </div>
                        <div class="process-steps__item">
                            <div class="process-steps__number wow fadeInUp">4</div>
                            <img width="105" height="105" class="lazy wow fadeInRight delay-1s"
                                data-src="/img/icons/razrabotka-saita-vizitki/step4.svg" alt="step 4">
                            <div class="process-steps__content wow fadeInRight delay-2s">
                                <div class="process-steps__title">{{ trans('razrabotkaSaitaVizitki.stage_title4') }}</div>
                                <div class="process-steps__text">{{ trans('razrabotkaSaitaVizitki.stage_text4') }}</div>
                            </div>
                        </div>
                        <div class="process-steps__item">
                            <div class="process-steps__number wow fadeInUp">5</div>
                            <img width="105" height="105" class="lazy wow fadeInLeft delay-1s"
                                data-src="/img/icons/razrabotka-saita-vizitki/step5.svg" alt="step 5">
                            <div class="process-steps__content wow fadeInLeft delay-2s">
                                <div class="process-steps__title">{{ trans('razrabotkaSaitaVizitki.stage_title5') }}</div>
                                <div class="process-steps__text">{{ trans('razrabotkaSaitaVizitki.stage_text5') }}</div>
                            </div>
                        </div>
                        <div class="process-steps__item">
                            <div class="process-steps__number wow fadeInUp">6</div>
                            <img width="105" height="105" class="lazy wow fadeInRight delay-1s"
                                data-src="/img/icons/razrabotka-saita-vizitki/step6.svg" alt="step 6">
                            <div class="process-steps__content wow fadeInRight delay-2s">
                                <div class="process-steps__title">{{ trans('razrabotkaSaitaVizitki.stage_title6') }}</div>
                                <div class="process-steps__text">{{ trans('razrabotkaSaitaVizitki.stage_text6') }}</div>
                            </div>
                        </div>
                        <div class="process-steps__item">
                            <div class="process-steps__number wow fadeInUp">7</div>
                            <img width="105" height="105" class="lazy wow fadeInRight delay-1s"
                                data-src="/img/icons/razrabotka-saita-vizitki/step7.svg" alt="step 7">
                            <div class="process-steps__content wow fadeInRight delay-2s">
                                <div class="process-steps__title">{{ trans('razrabotkaSaitaVizitki.stage_title7') }}</div>
                                <div class="process-steps__text">{{ trans('razrabotkaSaitaVizitki.stage_text7') }}</div>
                            </div>
                        </div>
                        <div class="process-steps__item">
                            <div class="process-steps__number wow fadeInUp">8</div>
                            <img width="105" height="105" class="lazy wow fadeInRight delay-1s"
                                data-src="/img/icons/razrabotka-saita-vizitki/step8.svg" alt="step 8">
                            <div class="process-steps__content wow fadeInRight delay-2s">
                                <div class="process-steps__title">{{ trans('razrabotkaSaitaVizitki.stage_title8') }}</div>
                                <div class="process-steps__text">{{ trans('razrabotkaSaitaVizitki.stage_text8') }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="blockquote-block">
            <blockquote class="blockquote">
                {{ trans('razrabotkaSaitaVizitki.blockquote') }}
            </blockquote>
        </div>
        @include('partials.ask', ['formClass' => 'razrabotka-saita-vizitki'])
        @php
            $we_propouse = [
                'section_title' => [
                    'title' => '<p class="section_title-h1">МЫ предлагаем <br> комплекс <br> услуг</p>',
                ],
                'items' => [
                    [
                        'title' => 'Разработка корп. сайтов',
                        'descr' => 'Создание сайта любой сложности<br />с уникальным дизайном под ключ',
                        'href' => '/razrabotka-saita-vizitki',
                    ],
                    [
                        'title' => 'LOGO & BRANDBOOK',
                        'descr' => 'Создание логотипа и фирменного стиля, управлению брендом',
                        //'href' => '/'
                    ],
                    [
                        'title' => 'SEO-ОПТИМИЗАЦИЯ',
                        'descr' =>
                            'Развитие и продвижение сайта в ТОП поиска для привлечения максимального объёма трафика и конвертации его в клиентов',
                        'href' => '/seo-optimizatsiya',
                    ],
                    [
                        'title' => 'Разработка Интернет магазина',
                        'descr' =>
                            'Создание многофункционального проекта, импорт товаров и разделов из XML, статистика продаж, оптимизация скорости',
                        'href' => '/internet-magazin',
                    ],
                    [
                        'title' => 'smm-продвижение',
                        'descr' =>
                            'Лидогенерация, лояльность и расширение аудитории, узнаваемость бренда, поддержка клиентов',
                        'href' => '/smm',
                    ],
                    [
                        'title' => 'КОНТЕКСТНАЯ РЕКЛАМА ppc',
                        'descr' => 'Привлечение потенциальных клиентов при помощи рекламы в Google, Яндекс, Facebook',
                        'href' => '/kontekstnaya-reklama',
                    ],
                ],
            ];
        @endphp
        @include('partials.redesign.we_propouse', $we_propouse)
        <section class="projects projects_redesign">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        @php $section_title =  ['title' => trans('index.main_section_title') ]; @endphp @include('partials.redesign.parts.section_title-button', $section_title)
                    </div>
                </div>
                <div class="row projects_redesign-loop">
                    <div class="col-xs-12">
                        <p
                            style="font-family: 'Stolzl', serif; font-style: normal; font-weight: 500; font-size: 26px; line-height: 106%; text-transform: uppercase; color: #222222;">
                            {{ trans('razrabotkaSaitaVizitki.portfolio_subtitle') }}
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
        @php
            $text = '
          <p>Одна из основных услуг веб-студии Mobios заключается в создании сайтов с нуля. Это комплексная работа, которая начинается с анализа целевой аудитории, изучения рынка и выработки дальнейшей концепции позиционирования. Заказать <strong>сайт под ключ с продвижением</strong> могут и частные лица, и небольшие компании, и крупные холдинги. Для каждого типа проекта предусмотрена определенная стоимость и спектр услуг, входящих в выбранных тариф. </p>
          <h2>Что входит в услугу разработки сайтов</h2>
          <p><strong>Заказать сайт под</strong> ключ можно любого типа:</p>
          <ul>
            <li>Интернет-магазин;</li>
            <li>Одностраничный сайт (Landing Page);</li>
            <li>Корпоративный сайт;</li>
            <li>Бизнес-сайт;</li>
            <li>Персональный сайт.</li>
          </ul>
          <p>Каждый из этих веб-ресурсов имеет свои отличительные особенности. Соответственно, наша команда предлагает разные типы оформления, настраиваемые инструменты и способы дальнейшего продвижения. </p>
          <p>В <strong>услуги разработки сайтов</strong> входит и предварительный выбор движка (например, <strong>wordpress</strong>, <strong>opencart</strong>, <strong>laravel</strong> или другие). От этого зависит функционал и простота дальнейшей работы с административной панелью и поисковым продвижением. </p>
          <p>Дополнительно в услугу продвижения входит настройка CRM-системы, подключение элементов оплаты платежных систем (для онлайн-магазинов), импорт и экспорт товаров, интеграция мобильной версии и многое другое. Сразу же после создания веб-дизайна и верстки специалисты веб-студии смогут приступить к дальнейшему продвижению. Речь идет о поисковой оптимизации, а также контекстной рекламе, SMM и других инструментах раскрутки. </p>
          <h2>Особенности разработки сайтов силами веб-студии Mobios</h2>
          <p>Компания Mobios предоставляет весь спектр услуг по созданию сайтов. Это не только непосредственная работа с движком и UI/UX-интерфейсом, но и предварительный выбор доменного имени, настройка хостинга, обучение системного администратора работе с CRM-интерфейсом и многое другое.</p>
          <p>Можно выделить несколько преимуществ услуги создания сайтов в студии Mobios:</p>
          <ul>
            <li>Доступная цена, которая зависит от выбранного пакета услуг;</li>
            <li>Возможность дальнейшего обслуживания сайта и его продвижения;</li>
            <li>Реализация даже самых сложных сайтов;</li>
            <li>Быстрый срок разработки до нескольких месяцев с нуля под ключ;</li>
            <li>Гарантия результата.</li>
          </ul>
          <p>Служба поддержки клиентов веб-студии работает каждый будний день, поэтому при необходимости можно обратиться за консультацией и помощью. </p>';
        @endphp
        @include('partials.redesign.contact-us', [$text])
    </main>
    <div id="website-popup" class="popup js-shape-close">
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
                    'formId' => 'website-popup-form',
                    'formClass' => 'website',
                ])
            </div>
        </div>
    </div>
@endsection

@section('bottom-scripts')
    <script src="{{ asset('js/libs.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r121/three.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.dots.min.js"></script>
    <script>
        function runVanta(itemSelector) {

            if ($(itemSelector).hasClass('vanta-ready')) return
            VANTA.DOTS({
                el: itemSelector,
                mouseControls: false,
                touchControls: false,
                gyroControls: false,
                minHeight: 200.00,
                minWidth: 200.00,
                scale: 1.00,
                scaleMobile: 1.00,
                color: 0x727272,
                color2: 0x727272
            })
            $(itemSelector).addClass('vanta-ready');
        }

        $(document).ready(function() {
            jsPaddingHeigh();
            if (mediaQueryList.matches) {
                removeClickToggle()
                runVanta('#banner-three');
            } else {
                addClickToggle()
            }
        })

        mediaQueryList.addEventListener('change', event => {
            if (event.matches) {
                removeClickToggle()
                runVanta('#banner-three');

            } else {
                addClickToggle()
            }
        })

        function addClickToggle() {
            items = [...document.querySelectorAll('.for-you-item__body')]
            items.forEach(item => {
                item.addEventListener('click', toggleSiteType, false)
            });
        }

        function removeClickToggle() {
            items = [...document.querySelectorAll('.for-you-item__body')]
            items.forEach(item => {
                item.removeEventListener('click', toggleSiteType)
            });
        }

        function toggleSiteType() {
            this.classList.toggle('active')
        }
    </script>
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
