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
<section class="contact-us">
    <div class="contact-cont">
        <div class="contact-us__map">
            <div class="contact-map">
                <div id="google-map"></div>
            </div>
        </div>
        <div class="contact-us__form">
            <div class="contact-form">
                <p class="contact-h1">
                    {{ trans('partials/contact-us.contact_title') }}
                </p>
                <p class="contact-sub">
                    {{ trans('partials/contact-us.contact_text') }}
                </p>

                @include('partials.ask-form', ['social' => true, 'formClass' => $formClass])

            </div>
        </div>
    </div>
</section>
