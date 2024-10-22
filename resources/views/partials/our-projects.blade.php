<section class="projects">

  <div class="container">
    <div class="section-title">
      Кейсы
      <span class="section-title-sub">
        Представляем несколько наших недавних проектов
      </span>
    </div>
    <div class="portfolio__projectsLoop">
      @foreach ($potfolList as $item)
      @if($item['visible'])
      @include('partials.mini-portfolio',['item'=>$item])
      @endif
      @endforeach


    </div>
    <div class="projects__footer">
      <span class="projects__footer__span">
        Понравилось?
      </span>
      <a href="/portfolio" class="button button__green button__green-solid">Показать еще работы</a>
    </div>
  </div>
</section>
