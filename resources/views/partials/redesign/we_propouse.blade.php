
<section class="propouse">
<div class="container">
  <div class="row">
    <div class="col-xs-12">
        @include('partials.redesign.parts.section_title-button', trans('index.propose.section_title'))
    </div>
  </div>
  <div class="row row-flex propouse-loop">
    @foreach (trans('index.propose.items') as $item)
      <div class="col-xs-12 col-sm-4">
        @include('partials.redesign.parts.propouse-item',$item)
      </div>
    @endforeach
  </div>
</div>
</section>
