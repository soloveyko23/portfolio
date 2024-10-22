@if ($item['visible'])
    <div class="portfolio__item" data-item-type="{{ $item['type'] }}">
        @php
            $class = null;
            if (isset($item['color'])) {
                $class = 'projects__img-field-' . $item['color'];
            }
        @endphp
        <div class="projects__img-field {{ $class }}">
            <picture>
                <source type="image/webp" data-srcset="{{ $item['src'] }}/sample.webp">
                <img class="projects__img lazy" data-src="{{ $item['src'] }}/sample.jpg"
                    alt="{{ $item['name'][app()->getLocale()] ?? $item['name'] }}">
            </picture>
            <div class="projects__txt">
                <div class="projects__txt-top">
                    <p class="projects__subtitle title_color-main">
                        {!! $item['name'][app()->getLocale()] ?? $item['name'] !!}
                    </p>
                    <span class="projects__desc">
                        {{ $item['descr'][app()->getLocale()] ?? $item['descr'] }}
                    </span>
                </div>
                <div class="projects__txt-cont">
                    @php
                        $techMap = [
                            'laravel' => 'Laravel',
                            'vue' => 'Vue.js',
                            'opencart' => 'OpenCart',
                            'wp' => 'WordPress',
                            'joomla' => 'Joomla',
                            'nuxt' => 'Nuxt'
                        ];
                        $techCount = count($item['tech'] ?? []); // Подсчитываем количество технологий, если они есть
                    @endphp

                    <div class="shape-text" style="{{ $techCount > 0 ? '' : 'display: none;' }}">
                        <p>
                            {{ trans('partials/mini-portfolio.project_tech') }} &nbsp;
                        </p>

                        @if ($techCount > 0)
                            @foreach ($item['tech'] as $key => $tech)
                                @if (isset($techMap[$tech]))
                                    <span>{{ $techMap[$tech] }}</span>

                                    @if ($key < $techCount - 1) <!-- Если это не последний элемент -->
                                        <span>, &nbsp;</span> <!-- Добавляем запятую после элемента -->
                                    @endif
                                @endif
                            @endforeach
                        @endif
                    </div>
                        
                    @php
                        // Выбираем текущий язык, можно определить его на основе настроек приложения или запроса
                        $language = app()->getLocale(); // Например, 'ru' или 'en'
                        $serviceProvidedText = $item['serviceProvided'][$language] ?? '';
                    @endphp

                    @if (!empty($serviceProvidedText))
                        <div class="shape-text">
                            <p>
                            {{ trans('partials/mini-portfolio.project_services') }} &nbsp;
                            </p>
                            <span>{{ $serviceProvidedText }}</span>
                        </div>
                    @endif


                    <div class="shape-text">
                        <p>
                            {{ trans('partials/mini-portfolio.project_time') }} &nbsp;
                        </p>
                        <span>{{ $item['devTermin'][app()->getLocale()] ?? $item['devTermin'] }}</span>
                    </div>
                </div>
                <div class="projects__txt-footer">
                    <button data-togle="#footer-popup" class="btn btn-red">
                        {{ trans('index.do_same_site') }}
                    </button>
                    @if (isset($item['href']))
                        <a href="{{ $item['href_public'] ?? getLocaleUrl($item['href']) }}" class="btn btn-transp">
                            {{ trans('index.check_project') }}
                        </a>
                    @endif

                </div>
            </div>
        </div>
    </div>
@endif
