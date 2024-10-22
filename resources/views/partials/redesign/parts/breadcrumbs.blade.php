@if (isset($crumbs))


    <div class="breadcrumbs">
        <ul class="breadcrumbs-list" itemscope itemtype="http://schema.org/BreadcrumbList">
            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                <a href="{{ url('/') }}" class="breadcrumbs-link" itemprop="item">
                    <span itemprop="name">{{ trans('website.crumbs_main') }}</span>
                    <meta itemprop="position" content="1">
                </a>
            </li>
            @foreach ($crumbs as $index => $item)
                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                    <span class="breadcrumbs-current-page" itemprop="name">{{ $item['text'] }}</span>
                    <meta itemprop="position" content="{{ $index + 2 }}">
                </li>
            @endforeach
        </ul>
    </div>
@endif
