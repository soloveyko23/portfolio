<div class="section_title">
    <div class="section_title-text">
        @isset($title)
            <p class="section_title-h1">
                {!! $title !!}
            </p>
        @endisset
    </div>
    <div class="section_title-button">
        @if (isset($button))
            {!! $button !!}
        @else
            <button data-togle="#footer-popup" class="btn btn-red ">
                {{ trans('index.send_request') }}
            </button>
        @endif

    </div>
</div>
