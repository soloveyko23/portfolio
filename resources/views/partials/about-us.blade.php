@if (!isset($formClass))
    @php
        $formClass = null;
    @endphp
@endif
<section class="about-us">
    <div class="container">
        <div class="about-us__container">
            <div class="about-us__descr">
                <div class="about-us__video posa posa_full">
                    <video data-src="video/homepage-video.mp4" class="posa posa_full" type='video/mp4' autoplay loop
                        muted></video>
                </div>
                <div class="section-title text-left">О нас</div>
                <div class="about-us__items ">
                    <div class="item">
                        <p class="item__digit">
                            180 +
                        </p>
                        <p class="item__text">
                            <strong>Проектов</strong>
                            на CMS
                        </p>
                    </div>
                    <div class="item">
                        <p class="item__digit">
                            25 +
                        </p>
                        <p class="item__text">
                            <strong>Проектов</strong>
                            на Framework
                        </p>
                    </div>
                    <div class="item">
                        <p class="item__digit">
                            9 +
                        </p>
                        <p class="item__text">
                            <strong>Лет</strong>
                            опыта в IT
                        </p>
                    </div>

                    <div class="item">
                        <p class="item__digit">
                            12 +
                        </p>
                        <p class="item__text">
                            <strong>Стран мира</strong>
                            сотрудничают с нами
                        </p>
                    </div>
                    <div class="item">
                        <p class="item__digit">
                            180 +
                        </p>
                        <p class="item__text">
                            <strong>Сайтов</strong>
                            продвинуто в ТОП-10
                        </p>
                    </div>
                    <div class="item">
                        <p class="item__digit">
                            25 +
                        </p>
                        <p class="item__text">
                            <strong>Специалистов</strong>
                            работают в компании
                        </p>
                    </div>
                </div>
            </div>
            <div class="about-us__form">
                <p class="about-us__h3">
                    {{ trans('partials/about-us.ask_expert') }}
                </p>
                <p class="about-us__p">
                    {{ trans('partials/about-us.recall_button') }}
                </p>
                @include('partials.ask-form', [
                    'social' => true,
                    'formClass' => $formClass,
                    'btntext' => 'Перезвоните мне',
                    'btnclass' => 'button__yellow button__yellow-solid',
                ])

            </div>
        </div>
    </div>
    </div>
</section>
