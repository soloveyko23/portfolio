@extends('layouts.default')

@section('seo')
    <title>{{ trans('e_commerce.seo_title') }}</title>
    <meta name="description" content="{{ trans('e_commerce.seo_descr') }}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ trans('e_commerce.seo_subtitle') }}">
    <meta property="og:url" content="{{ Request::url() }}" />
    <meta property="og:site_name" content="{{ trans('e_commerce.seo_name') }}" />
    <meta property="og:description" content="{{ trans('e_commerce.seo_descr') }}" />
    <meta property="og:image" content="{{ Request::url() }}/img/logo.png">

    <link rel="canonical" href="{{ Request::url() }}">
@endsection

@section('css')
    {{-- <link rel="preload" as="image" href="/img/ecommerce_banner_bg.jpg"> --}}
    <link rel="preload" href="/fonts/NeueMachina/NeueMachina-Ultrabold.woff2" as="font" type="font/woff2"
        crossorigin="anonymous">
    <link rel="preload" href="/fonts/NeueMachina/NeueMachina-Black.woff2" as="font" type="font/woff2"
        crossorigin="anonymous">
    <link rel="preload" href="/fonts/NeueMachina/NeueMachina-Bold.woff2" as="font" type="font/woff2"
        crossorigin="anonymous">
    <link rel="preload" href="/fonts/Stolzl/Stolzl-Book.woff2" as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" href="/fonts/Stolzl/Stolzl-Bold.woff2" as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" href="/fonts/Stolzl/Stolzl-Medium.woff2" as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/ecommerce.css') }}">
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
    <main class="main commerce">
        @php
            $indexBanner = [
                'ru' => [
                    'title' => '<h1>Разработка<br />интернет-магазина</h1>',
                    'subtext' =>
                        '<p>создание онлайн-магазина, который позволит Вам продавать<br />свой товар в Интернете и привлекать новых клиентов</p>',
                    'type' => 'ecommerce',
                    'crumbs' => [['text' => 'Разработка интернет-магазина']],
                ],
                'en' => [
                    'title' => '<h1>Online store <br /> development</h1>',
                    'subtext' =>
                        '<p>Online-store development that will allow you to sell<br />your product online and attract new customers</p>',
                    'type' => 'ecommerce',
                    'crumbs' => [['text' => 'Online-store development']],
                ],
            ];

        @endphp
        @include('partials.redesign.index-banner', $indexBanner[app()->getLocale()])
        <div class="blockquote-block">
            <blockquote class="blockquote">
                {!! trans('e_commerce.blockquote') !!}
            </blockquote>
        </div>
        <section class="process">
            <div class="container">
                <div class="process__inner">
                    <div class="section-title">{{ trans('e_commerce.section_title') }}</div>
                    <div class="process-steps">
                        <div class="process-steps__item">
                            <div class="process-steps__number wow fadeInUp">1</div>
                            <img width="105" height="105" class="wow fadeInLeft delay-1s lazy"
                                data-src="/img/icons/internet-magazin/step1.svg" alt="step 1">
                            <div class="process-steps__content wow fadeInLeft delay-2s">
                                <div class="process-steps__title"> {!! trans('e_commerce.steps__title1') !!}</div>
                                <div class="process-steps__text">{{ trans('e_commerce.steps__text1') }}
                                </div>
                            </div>
                        </div>
                        <div class="process-steps__item">
                            <div class="process-steps__number wow fadeInUp">2</div>
                            <img width="105" height="105" class="lazy wow fadeInRight delay-1s"
                                data-src="/img/icons/internet-magazin/step2.svg" alt="step 2">
                            <div class="process-steps__content wow fadeInRight delay-2s">
                                <div class="process-steps__title">{{ trans('e_commerce.steps__title2') }}</div>
                                <div class="process-steps__text">{{ trans('e_commerce.steps__text2') }}</div>
                            </div>
                        </div>
                        <div class="process-steps__item">
                            <div class="process-steps__number wow fadeInUp">3</div>
                            <img width="105" height="105" class="lazy wow fadeInLeft delay-1s"
                                data-src="/img/icons/internet-magazin/step3.svg" alt="step 3">
                            <div class="process-steps__content wow fadeInLeft delay-2s">
                                <div class="process-steps__title">{{ trans('e_commerce.steps__title3') }}</div>
                                <div class="process-steps__text">{{ trans('e_commerce.steps__text3') }}</div>
                            </div>
                        </div>
                        <div class="process-steps__item">
                            <div class="process-steps__number wow fadeInUp">4</div>
                            <img width="105" height="105" class="lazy wow fadeInRight delay-1s"
                                data-src="/img/icons/internet-magazin/step4.svg" alt="step 4">
                            <div class="process-steps__content wow fadeInRight delay-2s">
                                <div class="process-steps__title">{{ trans('e_commerce.steps__title4') }}</div>
                                <div class="process-steps__text">{{ trans('e_commerce.steps__text4') }}</div>
                            </div>
                        </div>
                        <div class="process-steps__item">
                            <div class="process-steps__number wow fadeInUp">5</div>
                            <img width="105" height="105" class="lazy wow fadeInLeft delay-1s"
                                data-src="/img/icons/internet-magazin/step5.svg" alt="step 5">
                            <div class="process-steps__content wow fadeInLeft delay-2s">
                                <div class="process-steps__title">{{ trans('e_commerce.steps__title5') }}</div>
                                <div class="process-steps__text">{{ trans('e_commerce.steps__text5') }}</div>
                            </div>
                        </div>
                        <div class="process-steps__item">
                            <div class="process-steps__number wow fadeInUp">6</div>
                            <img width="105" height="105" class="lazy wow fadeInRight delay-1s"
                                data-src="/img/icons/internet-magazin/step6.svg" alt="step 6">
                            <div class="process-steps__content wow fadeInRight delay-2s">
                                <div class="process-steps__title">{{ trans('e_commerce.steps__title6') }}</div>
                                <div class="process-steps__text">{{ trans('e_commerce.steps__text6') }}
                                </div>
                            </div>
                        </div>
                        <div class="process-steps__item">
                            <div class="process-steps__number wow fadeInUp">7</div>
                            <img width="105" height="105" class="lazy wow fadeInRight delay-1s"
                                data-src="/img/icons/internet-magazin/step7.svg" alt="step 7">
                            <div class="process-steps__content wow fadeInRight delay-2s">
                                <div class="process-steps__title">{{ trans('e_commerce.steps__title7') }}</div>
                                <div class="process-steps__text">{{ trans('e_commerce.steps__text7') }}</div>
                            </div>
                        </div>
                        <div class="process-steps__item">
                            <div class="process-steps__number wow fadeInUp">8</div>
                            <img width="105" height="105" class="lazy wow fadeInRight delay-1s"
                                data-src="/img/icons/internet-magazin/step8.svg" alt="step 8">
                            <div class="process-steps__content wow fadeInRight delay-2s">
                                <div class="process-steps__title">{{ trans('e_commerce.steps__title8') }}</div>
                                <div class="process-steps__text">{{ trans('e_commerce.steps__text8') }}</div>
                            </div>
                        </div>
                        <div class="process-steps__item">
                            <div class="process-steps__number wow fadeInUp">9</div>
                            <img width="105" height="105" class="lazy wow fadeInRight delay-1s"
                                data-src="/img/icons/internet-magazin/step9.svg" alt="step 9">
                            <div class="process-steps__content wow fadeInRight delay-2s">
                                <div class="process-steps__title">{{ trans('e_commerce.steps__title9') }}</div>
                                <div class="process-steps__text">{{ trans('e_commerce.steps__text9') }} </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @include('partials.redesign.results')
        @include('partials.ask', ['formClass' => 'internet-magazin'])
        @php
            $we_propouse = [
                'section_title' => [
                    'title' => '<p class="section_title-h1">МЫ предлагаем <br> комплекс <br> услуг</p>',
                ],
                'items' => [
                    [
                        'title' => 'Разработка корп. сайтов',
                        'descr' => 'Создание сайта любой сложности<br />с уникальным дизайном под ключ',
                        'href' => '/internet-magazin',
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
                        @php
                        $section_title = ['title' => trans('index.main_section_title')]; @endphp @include('partials.redesign.parts.section_title-button', $section_title)
                    </div>
                </div>
                <div class="row projects_redesign-loop">
                    <div class="col-xs-12">
                        <p
                            style="font-family: 'Stolzl', serif; font-style: normal; font-weight: 500; font-size: 26px; line-height: 106%; text-transform: uppercase; color: #222222;">
                            {{ trans('e_commerce.online_shops') }}
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

        {{-- @include('partials.techtab')
    @include('partials.our-technologies')
    @include('partials.steps')
    @include('partials.contact-us', ['formClass'=>'ecommerce'])
  --}}
        @php
            $text = '
        <p>
          Ежедневно в мире совершается более 1 миллиона покупок в онлайн-магазинах. И с каждым годом спрос на интернет-покупки растет примерно на 15%. В Украине наблюдается такая же тенденция, поэтому многие задумываются о создании собственной площадки онлайн-продаж. Что для этого нужно? Всего лишь обратиться в веб-студию Mobios, специалисты которой выполняют <strong>разработку и продвижение интернет-магазина</strong> любого уровня.
        </p>
        <h2 class="title">Что входит в услугу создания онлайн-магазина</h2>
        <p>Данная процедура включает в себя следующие процессы:</p>
        <ul>
          <li>Анализ конкурентов и определение целевой аудитории;</li>
          <li>Создание структуры сайта с категориями товаров;</li>
          <li>Подбор движка (например, <strong>laravel или opencart</strong>) в соответствии с параметрами будущего магазина;</li>
          <li>Прорисовка веб-дизайна и интерфейса;</li>
          <li>Верстка;</li>
          <li>Тестирование;</li>
          <li>Подключение домена и хостинга;</li>
          <li>Обучение работы с административной панелью.</li>
        </ul>
        <p>После того как будет выполнена <strong>разработка интернет-магазина</strong>, специалисты веб-студии Mobios могут приступить к процессу продвижения по желанию заказчика.</p>
        <p>Услуга разработки онлайн-магазина включает в себя весь спектр работ, вплоть до совершения первых продаж. Это значит, что можно дополнительно совершить импорт или экспорт товаров из таблицы, подключить систему онлайн-оплаты, чат-бота, формы обратной связи и многое другое. </p>
        <h2 class="title">Результативная разработка интернет-магазинов для предпринимателей</h2>
        <p>Прежде чем <strong>заказать сайт-магазин</strong> в веб-студии Mobios, рекомендуем ознакомиться с успешно реализованными кейсами на сайте компании. Опыт команды помогает создавать успешные коммерческие сайты для украинских и международных компаний. В кейсах есть успешные примеры создания онлайн-магазинов одежды, хозяйственных товаров, продуктов питания, детских товаров и многого другого.</p>
        <p>Каждый разрабатываемый онлайн-магазин создается с нуля, с учетом актуальных трендов в сфере веб-дизайна и структуры. Заказать в веб-студии можно не просто интернет-площадку, но и одностраничных магазин или же полноценный маркетплейс.</p>
        <p>Сразу после создания специалисты могут помочь с запуском проекта и его дальнейшим продвижением. Стоимость оптимизации рассчитывается индивидуально. Сотрудники службы поддержки ответят на любые вопросы об услуге разработки сайтов и их продвижения. </p>
      ';
        @endphp
        @include('partials.redesign.contact-us', [$text])
        <div id="ecommerce-popup" class="popup js-shape-close">
            <div class="popup__wind popup__wind--small">
                <button class="popup__close js-close"></button>
                <div class="popup__wind__top">
                    <p class="popup__title">
                        Теперь ваша жизнь <br> изменится к лучшему!
                    </p>
                </div>
                <div class="popup__wind__cont">
                    <form id="ecommerce-popup-form" class="form zapros">
                        <input type="hidden" name="user_message" value="видео-обзор интернет-магазина">
                        @csrf
                        <div class="form__form">
                            <div class="form__row" style="flex-wrap: wrap">
                                <div class="form__cell">
                                    <input required type="text" name="user_name"
                                        placeholder="*{{ trans('partials/ask-form.name') }}">
                                </div>
                                <div class="form__cell">
                                    <input required type="text" name="user_phone" placeholder="phone">
                                </div>
                            </div>
                            <div class="form__row " style="flex-wrap: wrap">
                                <div class="form__cell">
                                    <div class="recaptcha">
                                        <div class="g-recaptcha" data-callback="recaptchaCallback"></div>
                                        <div class="text-danger recaptchaError"></div>
                                    </div>
                                </div>
                                <div class="form__cell">
                                    <button class="button button__green button__green-solid "
                                        data-form="ecommerce-popup-form">
                                        {{ trans('website.popup_button') }}
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="form_success">
                            <div class="form__icon"></div>

                            <div class="form__message">
                                <div class="form__title">
                                    Вопрос отправлен!
                                </div>
                                <div class="form__text">
                                    Наши менеджеры обработают вашу заявку
                                    и свяжутся с вами в ближайшее время
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
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
    <script src="{{ asset('js/flip-master.min.js') }}"></script>
    {{-- <script src="{{ asset('js/scene.js') }}"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r121/three.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.dots.min.js"></script>
    <script>
        // const mediaQuery = '(max-width: 767px)';
        // const mediaQueryList = window.matchMedia(mediaQuery);
        $(document).ready(function() {
            jsPaddingHeigh();
            if (mediaQueryList.matches) {
                const l = document.createElement("link");
                l.href = "/css/animate.css"
                l.rel = "stylesheet"
                $("head").append(l);


                const s = document.createElement("script");
                s.type = "text/javascript";
                s.src = "/js/scene.js";
                $("body").append(s);

                runVanta('#banner-three')


            }
        })

        function runVanta(itemSelector) {
            if ($(itemSelector).hasClass('vanta-ready')) return
            VANTA.GLOBE({
                el: itemSelector,
                mouseControls: true,
                touchControls: true,
                gyroControls: false,
                minHeight: 200.00,
                minWidth: 200.00,
                scale: 1.00,
                scaleMobile: 1.00,
                color: 0x878787,
                size: 0.90,
                backgroundColor: 0x222222
            })
            $(itemSelector).addClass('vanta-ready');
        }

        function handleTickInit(tick) {
            console.log({
                Tick
            })

            locale = {
                DAY_PLURAL: 'Дней',
                DAY_SINGULAR: 'День',
                HOUR_PLURAL: 'Часов',
                HOUR_SINGULAR: 'Час',
                MINUTE_PLURAL: 'Минут',
                MINUTE_SINGULAR: 'минута',
                SECOND_PLURAL: 'Секунд',
                SECOND_SINGULAR: 'Секунда',
            };

            for (var key in locale) {
                if (!locale.hasOwnProperty(key)) {
                    continue;
                }
                tick.setConstant(key, locale[key]);
            }

            var termin = getEndWeek();
            Tick.count.down(termin).onupdate = function(value) {
                tick.value = value;
            };
        }

        mediaQueryList.addEventListener('change', event => {
            if (event.matches) {
                runVanta('.js-vanta')
            }
        })

        function getEndWeek() {
            let now = new Date();
            nowDay = 0 || now.getDay();
            if (nowDay == 6) {
                now.setDate(now.getDate() + 6);
            } else if (nowDay == 0) {
                now.setDate(now.getDate() + 5);
            } else {
                now.setDate(now.getDate() + (6 - nowDay));
            }
            now.setDate(now.getDate() - 1);
            now.setHours(23);
            now.setMinutes(59);
            now.setSeconds(59);
            return now;
        }
    </script>

    <script type="application/ld+json">
      {
        "@context": "https://schema.org/",
        "@type": "Product",
        "name": "Разработка интернет-магазина по выгодной цене",
        "description": "Заказывайте разработку интернет-магазина под ключ с подключением платежных систем, API, служб доставки, SMS сервисов и других модулей. Звоните. ☎ (067) 888-75-16.",
        "aggregateRating": {
          "@type": "AggregateRating",
          "ratingValue": "4.8",
          "reviewCount": "56"
        }
      }
    </script>
@endsection
