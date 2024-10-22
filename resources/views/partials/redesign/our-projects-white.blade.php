<section class="projects projects_redesign">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                @php
                    $section_title = ['title' => trans('index.main_section_title')];
                @endphp
                @include('partials.redesign.parts.section_title-button', $section_title)
            </div>
        </div>
        <div class="row projects_redesign-loop">
            <div class="col-xs-12">
                <p
                    style="font-family: 'Stolzl', serif;font-style: normal;font-weight: 500;font-size: 26px;line-height: 106%;text-transform: uppercase;color: #222222;">
                    Корпоративные сайты
                </p>
            </div>
            @foreach ($potfolList as $item)
                @isset($item)
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        @include('partials.redesign.parts.mini-portfolio', ['item' => $item])
                    </div>
                @endisset
            @endforeach
        </div>
    </div>

</section>
