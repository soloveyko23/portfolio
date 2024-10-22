<section class="price_blocks">
  <div class="container">
    @include('partials.redesign.parts.section_title-button',
    ['title' => '<p class="section_title-h1">'. $b_title .'</p>','button'=>''])
    {{-- <p class="section-title text-left">
      {!!$b_title!!}
    </p> --}}

    <div class="price_blocks-loop">


    @foreach ($blocks as $block)
    <div class="price_blocks-item-holder">
      <div class="price_blocks-item">

        @if ( isset($block['discount'])  )
            <div class="price_blocks-item-discount">
              {!!$block['discount']!!}
            </div>
        @endif
        <div class="price_blocks-item-top">
          <p class="price_blocks-item-title">{{$block['cms']}}</p>
          <p class="price_blocks-item-subtitle">{{$block['type']}}</p>
        </div>
        <div class="price_blocks-item-content">
          <div class="price_blocks-item-content_top">
            <div class="price_blocks-item-content_top-item">
              <p class="price_blocks-item-content_top-item-title">
                Цена:
              </p>
              <p class="price_blocks-item-content_top-item-value">
                {!!$block['price']!!}
              </p>
            </div>
            <div class="price_blocks-item-content_top-item">
              <p class="price_blocks-item-content_top-item-title">
                Сроки:
              </p>
              <p class="price_blocks-item-content_top-item-value">
                {{$block['time']}}
              </p>
            </div>
          </div>
          <p class="price_blocks-item-content-title">
            Что вы получаете:
          </p>
          @php
              $icon_check = '<svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.59314 9.62701L7.81536 16.6111L18.7043 4.38892" stroke="#B2D550" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg>';
              $icon_cancle = '<svg width="21" height="22" viewBox="0 0 21 22" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M2.56076 3.44054C1.97495 2.85478 1.02516 2.85478 0.439356 3.44054C-0.146452 4.02631 -0.146452 4.97602 0.439356 5.56179L5.87863 11.0007L0.440825 16.4381C-0.144983 17.0238 -0.144983 17.9735 0.440825 18.5593C1.02663 19.1451 1.97642 19.1451 2.56222 18.5593L8.00003 13.1219L13.4375 18.559C14.0234 19.1448 14.9731 19.1448 15.5589 18.559C16.1448 17.9732 16.1448 17.0235 15.5589 16.4378L10.1214 11.0007L15.5604 5.56208C16.1462 4.97631 16.1462 4.0266 15.5604 3.44084C14.9746 2.85507 14.0248 2.85507 13.439 3.44084L8.00003 8.87942L2.56076 3.44054Z" fill="#FA5456"/></svg>'
          @endphp
          <ul class="price_blocks-item-content-list">
            @foreach ($block['list'] as $item)
            <li>
              @if ($item['icon'])
              <i class="icon">
                {!!$icon_check!!}
              </i>
              <p>
                {{$item['text']}}
              </p>
              @else
              <i class="icon">
                {!!$icon_cancle!!}
              </i>
              <p class="cancle">
                {{$item['text']}}
              </p>
              @endif
            </li>
            @endforeach
          </ul>
        </div>
        <div class="price_blocks-item-bottom">
          <button data-togle="#website-popup" class="price_blocks-item-btn ">
            Примеры работ
          </button>
          <button data-togle="#website-popup" class="price_blocks-item-btn price_blocks-item-btn--grey">
            доступ к демо
          </button>
        </div>
      </div>
    </div>
    @endforeach

    </div>
  </div>
</section>
