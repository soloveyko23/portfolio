@extends('layouts.default')

@section('seo')
    <title>Контекстная реклама (PPC). Услуги создания рекламы в Google и Яндекс</title>
    <meta name="description"
        content="Настройка контекстной рекламы в Google и Yandex по доступным ценам ⭐ Гарантированные продажи ⭐ Индивидуальные стратегии ⭐ Сертифицированные специалисты ☎: +38(063) 726-70-70">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Контекстная реклама (PPC). Услуги создания рекламы в Google и Яндекс">
    <meta property="og:url" content="{{ Request::url() }}" />
    <meta property="og:site_name" content="Студия разработки сайтов MobiOS" />
    <meta property="og:description"
        content="Настройка контекстной рекламы в Google и Yandex по доступным ценам ⭐ Гарантированные продажи ⭐ Индивидуальные стратегии ⭐ Сертифицированные специалисты ☎: +38(063) 726-70-70" />
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
    {{--  <link rel="stylesheet" href="{{ asset('css/context.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('css/redesign.css') }}">
    <link rel="stylesheet" href="{{ asset('css/razrabotka_korporativnogo_sajta.css') }}">
@endsection

@section('content')
    <main class="main context">
        @include('partials.ask')
        <section class="process">
            <div class="container">
                <div class="process__inner">
                    <div class="section-title">Основные этапы разработки корпоративного сайта</div>
                    <div class="process-steps">
                        <div class="process-steps__item">
                            <div class="process-steps__number wow fadeInUp">1</div>
                            <img width="105" height="105" class="wow fadeInLeft delay-1s lazy"
                                data-src="/img/razrabotka-korporativnogo-sajta/Illustration.svg" alt="step 1">
                            <div class="process-steps__content wow fadeInLeft delay-2s">
                                <div class="process-steps__title">Сбор информации о компании и ее бизнес-потребностях</div>
                                <div class="process-steps__text">
                                    <p>На этом этапе происходит анализ целей и задач клиента, определение целевой аудитории,
                                        сбор
                                        информации о конкурентах и т.д</p>
                                </div>
                            </div>
                        </div>
                        <div class="process-steps__item">
                            <div class="process-steps__number wow fadeInUp">2</div>
                            <img width="105" height="105" class="lazy wow fadeInRight delay-1s"
                                data-src="/img/razrabotka-korporativnogo-sajta/step2.svg" alt="step 2">
                            <div class="process-steps__content wow fadeInRight delay-2s">
                                <div class="process-steps__title">Проектирование сайта</div>
                                <div class="process-steps__text">На этом этапе разрабатывается структура сайта, создается
                                    дизайн и
                                    выбираются необходимые функциональные элементы
                                </div>
                            </div>
                        </div>
                        <div class="process-steps__item">
                            <div class="process-steps__number wow fadeInUp">3</div>
                            <img width="105" height="105" class="lazy wow fadeInLeft delay-1s"
                                data-src="/img/razrabotka-korporativnogo-sajta/step3.svg" alt="step 3">
                            <div class="process-steps__content wow fadeInLeft delay-2s">
                                <div class="process-steps__title">Разработка контента</div>
                                <div class="process-steps__text">В этой части происходит написание текстовых блоков,
                                    составление меню и
                                    заполнение сайта контентом
                                </div>
                            </div>
                        </div>
                        <div class="process-steps__item">
                            <div class="process-steps__number wow fadeInUp">4</div>
                            <img width="105" height="105" class="lazy wow fadeInRight delay-1s"
                                data-src="/img/razrabotka-korporativnogo-sajta/step4.svg" alt="step 4">
                            <div class="process-steps__content wow fadeInRight delay-2s">
                                <div class="process-steps__title">Верстка и программирование</div>
                                <div class="process-steps__text">На этом этапе создается функционирующий сайт с
                                    использованием
                                    необходимых технологий и языков программирования
                                </div>
                            </div>
                        </div>
                        <div class="process-steps__item">
                            <div class="process-steps__number wow fadeInUp">5</div>
                            <img width="105" height="105" class="lazy wow fadeInLeft delay-1s"
                                data-src="/img/razrabotka-korporativnogo-sajta/sourse.svg" alt="sourse">
                            <div class="process-steps__content wow fadeInLeft delay-2s">
                                <div class="process-steps__title">Тестирование и запуск</div>
                                <div class="process-steps__text">В этой части происходит проверка работоспособности сайта,
                                    его
                                    корректности и оптимизации. Затем сайт готовится к запуску
                                </div>
                            </div>
                        </div>
                        <div class="process-steps__item">
                            <div class="process-steps__number wow fadeInUp">6</div>
                            <img width="105" height="105" class="lazy wow fadeInRight delay-1s"
                                data-src="/img/razrabotka-korporativnogo-sajta/step6.svg" alt="step 6">
                            <div class="process-steps__content wow fadeInRight delay-2s">
                                <div class="process-steps__title">Поддержка и сопровождение</div>
                                <div class="process-steps__text">После запуска сайта, компания может предоставить услуги по
                                    его
                                    поддержке, обновлению и сопровождению
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{--    @include('partials.ask') --}}

        @if (!isset($formId))
            @php
                $formId = null;
            @endphp
        @endif
        @if (!isset($formClass))
            @php
                $formClass = null;
            @endphp
        @endif
        <section class="asks">
            <div class="container">
                <p class="h1">
                    {{ trans('partials/about-us.ask_expert') }}
                </p>
                <p class="h1-sub">
                    {{ trans('partials/about-us.recall_button') }}
                </p>
                <div class="row">
                    <div class="col-xs-12 col-lg-5">
                        @include('partials.ask-form', ['social' => false, 'formClass' => $formClass])
                    </div>
                    <div class="col-xs-12 col-lg-6 col-lg-offset-1">
                        <div class="context-services__banners">
                            <div class="context-services__banner">
                                <div class="context-services__banner-title wow fadeInUp">Основными преимуществами
                                    разработки корпоративного сайта</div>
                                <ul class="context-services__list">
                                    <li class="context-services__item"><img width="22" height="15"
                                            class="wow fadeInLeft delay-1s lazy"
                                            data-src="/img/razrabotka-korporativnogo-sajta/arrow.svg" alt="arrow">
                                        <p>Повышение узнаваемости компании</p>
                                    </li>
                                    <li class="context-services__item"><img width="22" height="15"
                                            class="wow fadeInLeft delay-1s lazy"
                                            data-src="/img/razrabotka-korporativnogo-sajta/arrow.svg" alt="arrow">
                                        <p>Улучшение имиджа и репутации бренда</p>
                                    </li>
                                    <li class="context-services__item"><img width="22" height="15"
                                            class="wow fadeInLeft delay-1s lazy"
                                            data-src="/img/razrabotka-korporativnogo-sajta/arrow.svg" alt="arrow">
                                        <p>Привлечение новых клиентов</p>
                                    </li>
                                    <li class="context-services__item"><img width="22" height="15"
                                            class="wow fadeInLeft delay-1s lazy"
                                            data-src="/img/razrabotka-korporativnogo-sajta/arrow.svg" alt="arrow">
                                        <p>Улучшение взаимодействия с уже имеющейся аудиторией</p>
                                    </li>
                                    <li class="context-services__item"><img width="22" height="15"
                                            class="wow fadeInLeft delay-1s lazy"
                                            data-src="/img/razrabotka-korporativnogo-sajta/arrow.svg" alt="arrow">
                                        <p>и многие другие</p>
                                    </li>
                                </ul>
                                <img class="context-services__banner-img lazy" data-src="/img/mockup.png" alt="mockup">
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
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
