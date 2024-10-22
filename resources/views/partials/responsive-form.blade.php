<section class="responsive-form">
    <div class="container">
        <span class="responsive-form-subtitle">
            Или воспользуйтесь привычной формой для
        </span>
        <span
            class="responsive-from__title title title_ta-left title_fsz-18 title_TTHoves-Bold margin_mt-13 margin_mb-22">ПОДАЧИ
            ЗАЯВКИ</span>
        <form class="form">
            <h3 class="form__title title__ta title_fsz-34 title_TTHoves-Bold">
                <div class="line-letter line-letter__form line-letter__form_O">
                    <div class="line-letter__inner">
                        <span class="line-letter__letter line-letter__letter_O">О</span>
                    </div>
                </div>
                бсудить проект
            </h3>
            <div class="form__input-area margin_mt-25">
                <div class="title_TTHoves-Bold margin_mb-13">
                    {{ trans('partials/ask-form.name') }}
                </div>
                <input class="form__input" type="text" name="name" placeholder="Андрей">
            </div>
            <div class="form__input-area margin_mt-25">
                <div class="title_TTHoves-Bold margin_mb-13">
                    Ваш телефон
                </div>
                <input class="form__input" type="tel" name="phone" placeholder="+380 (_ _)  _ _ _-_ _-_ _">
            </div>
            <div class="form__input-area margin_mt-25">
                <div class="title_TTHoves-Bold margin_mb-13">
                    Ваш E-Mail
                </div>
                <input class="form__input" type="email" name="email" placeholder="man@gmail.com">
            </div>
            <div class="from__tex-area-field margin_mt-25">
                <div class="title_TTHoves-Bold margin_mb-13">
                    {{ trans('partials/ask-form.text') }}
                </div>
                <textarea class="form__text-area wow fadeInUP" name="text" placeholder="Опишите задачу своими словами..."></textarea>
            </div>
            <button class="button button__center button__primary margin_mt-34">
                Отправить заявку
            </button>
        </form>
    </div>
</section>
