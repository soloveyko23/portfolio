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
                <img class="projects__img lazy" data-src="{{ $item['src'] }}/sample.jpg" alt="{{ $item['name'] }}">
            </picture>
            <div class="projects__txt">
                <div class="projects__txt-top">
                    <p class="projects__subtitle title_color-main">
                        {!! $item['name'] !!}
                    </p>
                    <span class="projects__desc">
                        {{ $item['descr'] }}
                    </span>
                </div>
                <div class="projects__txt-cont">
                    <div class="shape-text">
                        <p>
                            Технологии:
                        </p>
                        @foreach ($item['tech'] as $tech)
                            @if ($tech == 'laravel')
                                <span> <img width="117" height="43" class="lazy"
                                        data-src="/img/icons/laravel-icon.svg" alt="laravel"></span>
                            @endif
                            @if ($tech == 'vue')
                                <span> <img width="112" height="36" class="lazy"
                                        data-src="/img/icons/vue-icon.svg" alt="vue"></span>
                            @endif

                            @if ($tech == 'opencart')
                                <span> <img width="128" height="43" class="lazy"
                                        data-src="/img/icons/opencart-icon.svg" alt="opencart"></span>
                            @endif
                            @if ($tech == 'wp')
                                <span> <img width="162" height="34" class="lazy"
                                        data-src="/img/icons/wp-icon.svg" alt="wp"></span>
                            @endif

                            @if ($tech == 'joomla')
                                <span> <img src="/img/icons/joomla-icon.svg" alt="joomla"></span>
                            @endif
                            @if ($tech == 'nuxt')
                                <span> <img src="/img/icons/nuxt-icon.svg" alt="joomla"></span>
                            @endif
                        @endforeach
                    </div>
                    <div class="shape-text">
                        <p>
                            Cрок <br>
                            разработки:
                        </p>
                        <span>{{ $item['devTermin'] }}</span>
                    </div>
                </div>
                <div class="projects__txt-footer">
                    <button data-togle="#footer-popup" class="button button__yellow button__yellow-solid">
                        {{ trans('index.do_same_site') }}
                    </button>
                    @if (isset($item['href']))
                        <a href="{{ $item['href'] }}" class="button button__green">
                            {{ trans('index.check_project') }}
                        </a>
                    @endif

                </div>
            </div>
        </div>
    </div>
@endif
