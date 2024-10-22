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
<form id="{{ $formId }}" class="form {{ $formClass }}">
    @csrf
    <div class="form__form">
        <div class="form__row">
            <div class="form__cell form__cell-half">
                <input required type="text" name="user_name" placeholder="*{{ trans('contacts.your_name') }}">
            </div>
            <div class="form__cell form__cell-half">
                <input required type="text" name="user_phone" placeholder="phone">
            </div>
        </div>
        <div class="form__row">
            <div class="form__cell">
                <input type="email" name="user_email" placeholder="E-mail">
            </div>
        </div>
        <div class="form__row">
            <div class="form__cell">
                <input name="user_message" type="text" placeholder="{{ trans('partials/ask-form.text') }}">
            </div>
        </div>
        <div class="form__row">
            <div class="form__cell form__footer form__footer_with-captcha">
                <div class="recaptcha">
                    <div class="g-recaptcha" data-callback="recaptchaCallback"></div>
                    <div class="text-danger recaptchaError"></div>
                </div>
                @php
                    if (!isset($btnclass)) {
                        $btnclass = 'button__green button__green-solid';
                    }
                @endphp
                <button class="button {{ $btnclass }} " data-form="{{ $formId }}">
                    @if (isset($btntext))
                        {{ $btntext }}
                    @else
                        {{ trans('website.popup_button') }}
                    @endif
                </button>
            </div>
        </div>
        <div class="form__row">
            @isset($social)
                @if ($social)
                    <div class="form__cell form__footer">
                        @include('partials.social')
                    </div>
                @endif
            @endisset
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



<!-- js-скрипт гугл капчи -->
{{-- <script src='https://www.google.com/recaptcha/api.js' async defer></script> --}}
