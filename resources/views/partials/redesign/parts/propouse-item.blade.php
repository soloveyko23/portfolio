<div class="propouse-item">
    @isset($title)
        <p class="propouse-item-title">
            {{ $title }}
        </p>
    @endisset
    @isset($descr)
        <p class="propouse-item-descr">
            {!! $descr !!}
        </p>
    @endisset
    @isset($href)
        <div class="propouse-item-footer">
            <div class="test">
                <a href="{{ $href }}" class="btn btn-red">{{ $hrefText ?? trans('index.read_more') }}</a>
                <div class="propouse-item-footer-dots"></div>
            </div>
        </div>
    @endisset
</div>
