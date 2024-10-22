<section class="banner-redesign index-banner">
    <div class="container js-padding-header">
        <div class="row">
            <div class="col-12 top">
                @if (isset($crumbs))
                    @include('partials.redesign.parts.breadcrumbs', $crumbs)
                @endif
            </div>
            <div class="col-12 center">
                @if (isset($title))
                    {!! $title !!}
                @else
                    <h1>
                        {!! trans('index.banner_title') !!}
                    </h1>
                @endif
                @if (isset($subtext))
                    {!! $subtext !!}
                @else
                    <p style="text-transform: uppercase;">{!! trans('index.banner_text') !!}</p>
                @endif
                @if (isset($type))
                    @if ($type == 'webDev')
                        <div class="banner-redesign-footer">
                            <button data-togle="#footer-popup" class="btn btn-red">
                                {{ trans('index.check_button') }}
                            </button>
                            <button data-togle="#footer-popup" class="btn btn-transp">
                                {{ trans('index.projects_button') }}
                            </button>
                        </div>
                    @endif
                    @if ($type == 'ecommerce')
                        <div class="banner-redesign-footer">
                            <button data-togle="#footer-popup" class="btn btn-red">
                                {!! trans('index.review_button') !!}
                            </button>
                            <button data-togle="#footer-popup" class="btn btn-transp">
                                {{ trans('index.projects_button') }}
                            </button>
                        </div>
                    @endif
                @endif
            </div>
        </div>
    </div>
</section>
