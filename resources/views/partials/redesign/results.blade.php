  <section class="results results-redesign">
      <div class="container">
          @include('partials.redesign.parts.section_title-button', [
              'title' => $title ?? '',
              'button' => $button ?? '',
          ])

          <div class="posr">
              <div class="results__slider">
                  <div class="results__slide">
                      <div class="item">
                          <div class="item__top row">
                              <div class="col-xs-12 col-md-6">
                                  <p class="item__name item__name--phone">
                                      planetakolgot.com.ua
                                  </p>
                                  <div class="item__poster">
                                      <picture>
                                          <source type="image/webp" data-srcset="/img/results/c_poster.webp">
                                          <img width="823" height="506" data-src="/img/results/c_poster.png"
                                              alt="colgotov_desctop" class="lazy desctop">
                                      </picture>
                                  </div>
                              </div>
                              <div class="col-xs-12 col-md-6">
                                  <div class="item__info">
                                      <p class="item__name">
                                          planetakolgot.com.ua
                                      </p>
                                      <div class="item__text">
                                          <p class="text__bold">{{ trans('partials/results.sold_services') }}</p>
                                          <ul class="item__services">
                                              <li>{{ trans('partials/results.service_marketing') }}</li>
                                              <li>{{ trans('partials/results.style_develop') }}</li>
                                              <li>{{ trans('partials/results.design_develop') }}</li>
                                              <li>{{ trans('partials/results.seo') }}</li>
                                              <li>{{ trans('partials/results.advertising') }}</li>
                                              <li><b>{{ trans('partials/results.dev_time') }}</b></li>
                                          </ul>
                                          <div class="item__cell__footer">
                                              <p class="text__bold">{{ trans('partials/results.result') }}</p>
                                              {{-- <div class="row">
                          <div class="col-xs-12">
                            <p class="text__bold">Срок разработки:</p>
                            <ul class="item__services item__services-termin">
                              <li> 2 месяца </li>
                            </ul>
                          </div>
                          <div class="col-xs-12">
                            <p class="text__bold">Технологии:</p>
                            <ul class="item__tech">
                              <li><img class="lazy" width="140" height="27" data-src="/img/tech/opencart.png" alt="opencart"></li>
                              <li><img class="lazy" width="118" height="27" data-src="/img/tech/jquery.png" alt="jquery"></li>
                              <li><img class="lazy" width="102" height="27" data-src="/img/tech/bootstrap.png" alt="bootstrap"></li>
                            </ul>
                          </div>
                        </div> --}}
                                              <ul class="item__results">
                                                  <li>
                                                      <p class="item__results-digit">32 +</p>
                                                      <p class="item__results-descr">{!! trans('partials/results.orders_day') !!}</p>
                                                  </li>
                                                  <li>
                                                      <p class="item__results-digit">902 +</p>
                                                      <p class="item__results-descr">{!! trans('partials/results.orders_month') !!} </p>
                                                  </li>
                                                  <li>
                                                      <p class="item__results-digit">35 %</p>
                                                      <p class="item__results-descr">
                                                          {{ trans('partials/results.users_returned') }} </p>
                                                  </li>
                                                  <li>
                                                      <p class="item__results-digit">13,10 %</p>
                                                      <p class="item__results-descr">
                                                          {{ trans('partials/results.conversion_ratio') }}</p>
                                                      {{-- <p class="item__results-descr__more">
                              (в разных сферах <b>средний коэффициент конверсии</b> составляет всего 2,35%)
                            </p> --}}
                                                  </li>
                                              </ul>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="item__footer">
                              {{-- <p class="text__bold text-center">Успешные результаты продвижения:</p> --}}

                              <button class="btn btn-red tt-upper margin-auto" style="margin-top: 20px"
                                  data-togle="#popoup-1">
                                  {{ trans('index.check_project') }}
                              </button>
                          </div>
                      </div>
                  </div>

                  <div class="results__slide">
                      <div class="item">
                          <div class="item__top row">
                              <div class="col-xs-12 col-md-6">
                                  <p class="item__name item__name--phone">
                                      kolgotoff.com.ua
                                  </p>
                                  <div class="item__poster">
                                      <picture>
                                          <source type="image/webp" data-srcset="/img/results/colgotof_poster.webp">
                                          <img width="824" height="506" data-src="/img/results/colgotof_poster.png"
                                              alt="colgotof_poster" class="lazy desctop">
                                      </picture>
                                  </div>
                              </div>
                              <div class="col-xs-12 col-md-6">
                                  <div class="item__info">
                                      <p class="item__name">
                                          kolgotoff.com.ua
                                      </p>
                                      <div class="item__text">
                                          <p class="text__bold">{{ trans('partials/results.sold_services') }}</p>
                                          <ul class="item__services">
                                              <li>{{ trans('partials/results.service_marketing') }}</li>
                                              <li>{{ trans('partials/results.interface_design') }}</li>
                                              <li>{{ trans('partials/results.design_develop') }}</li>
                                              <li>{{ trans('partials/results.seo') }}</li>
                                              <li>{{ trans('partials/results.advertising') }}</li>
                                          </ul>
                                          <div class="item__cell__footer">
                                              <p class="text__bold">{{ trans('partials/results.result') }}</p>
                                              {{-- <div class="row">
                          <div class="col-xs-12">
                            <p class="text__bold">Срок разработки:</p>
                            <ul class="item__services item__services-termin">
                              <li> 3 месяца </li>
                            </ul>
                          </div>
                          <div class="col-xs-12">
                            <p class="text__bold">Технологии:</p>
                            <ul class="item__tech">
                              <li><img class="lazy" data-src="/img/tech/laravel.png" alt="laravel"></li>
                              <li><img class="lazy" data-src="/img/tech/vue.png" alt="vue"></li>
                              <li><img class="lazy" data-src="/img/tech/bootstrap.png" alt="bootstrap"></li>
                            </ul>
                          </div>
                        </div> --}}
                                              <ul class="item__results">
                                                  <li>
                                                      <p class="item__results-digit">8 +</p>
                                                      <p class="item__results-descr">{!! trans('partials/results.orders_day') !!} </p>
                                                  </li>
                                                  <li>
                                                      <p class="item__results-digit">200 +</p>
                                                      <p class="item__results-descr">{!! trans('partials/results.orders_month') !!}</b> </p>
                                                  </li>
                                                  <li>
                                                      <p class="item__results-digit">18,8 %</p>
                                                      <p class="item__results-descr">
                                                          {{ trans('partials/results.users_returned') }} </p>
                                                  </li>
                                                  <li>
                                                      <p class="item__results-digit">2,3 %</p>
                                                      <p class="item__results-descr">
                                                          {{ trans('partials/results.conversion_ratio') }}</p>
                                                      {{-- <p class="item__results-descr__more">
                              (в разных сферах <b>средний коэффициент конверсии</b> составляет всего 2,35%)
                            </p> --}}
                                                  </li>
                                              </ul>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="item__footer">
                              {{-- <p class="text__bold text-center">Успешные результаты продвижения:</p> --}}

                              <button class="btn btn-red tt-upper margin-auto" style="margin-top: 20px"
                                  data-togle="#popoup-3">
                                  {{ trans('index.check_project') }}
                              </button>
                          </div>
                      </div>
                  </div>

                  <div class="results__slide">
                      <div class="item">
                          <div class="item__top row">
                              <div class="col-xs-12 col-md-6">
                                  <p class="item__name item__name--phone">
                                      HOZSKLAD.com.ua
                                  </p>
                                  <div class="item__poster">
                                      <picture>
                                          <source type="image/webp" data-srcset="/img/results/hozsklad_poster.webp">
                                          <img width="824" height="506" data-src="/img/results/hozsklad_poster.png"
                                              alt="hozsklad_poster" class="lazy desctop">
                                      </picture>
                                  </div>
                              </div>
                              <div class="col-xs-12 col-md-6">
                                  <div class="item__info">
                                      <p class="item__name">
                                          HOZSKLAD.com.ua
                                      </p>
                                      <div class="item__text">
                                          <p class="text__bold">{{ trans('partials/results.sold_services') }}</p>
                                          <ul class="item__services">
                                              <li>{{ trans('partials/results.service_marketing') }}</li>
                                              <li>{{ trans('partials/results.interface_design') }}</li>
                                              <li>{{ trans('partials/results.design_develop') }}</li>
                                              <li>{{ trans('partials/results.seo') }}</li>
                                              <li>{{ trans('partials/results.tech_supp') }}</li>
                                          </ul>
                                          {{-- <div class="item__cell__footer">
                        <p class="text__bold">результаты продвижения:</p>
                        <div class="row">
                          <div class="col-xs-12">
                            <p class="text__bold">Срок разработки:</p>
                            <ul class="item__services item__services-termin">
                              <li> 7 месяца </li>
                            </ul>
                          </div>
                          <div class="col-xs-12">
                            <p class="text__bold">Технологии:</p>
                            <ul class="item__tech">
                              <li><img class="lazy" width="111" height="27" data-src="/img/tech/laravel.png" alt="laravel"></li>
                              <li><img class="lazy" width="90" height="27" data-src="/img/tech/vue.png" alt="vue"></li>
                              <li><img class="lazy" width="102" height="27" data-src="/img/tech/bootstrap.png" alt="bootstrap"></li>
                            </ul>
                          </div>
                        </div>
                        <ul class="item__results">
                          <li>
                            <p class="item__results-digit">500 +</p>
                            <p class="item__results-descr">заказов в <b>ДЕНЬ</b> </p>
                          </li>
                          <li>
                            <p class="item__results-digit">2 500 +</p>
                            <p class="item__results-descr">посещений в <b>ДЕНЬ</b> </p>
                          </li>
                          <li>
                            <p class="item__results-digit">49,69 %</p>
                            <p class="item__results-descr">вернувшихся <br> пользователей </p>
                          </li>
                          <li>
                            <p class="item__results-digit">на 45 %</p>
                            <p class="item__results-descr">увеличился трафик за <b>ГОД</b></p>
                          </li>
                        </ul>
                      </div>
                      --}}
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="item__footer">
                              {{-- <p class="text__bold text-center">Успешные результаты продвижения:</p> --}}

                              <button class="btn btn-red tt-upper margin-auto" style="margin-top: 20px"
                                  data-togle="#popoup-2">
                                  {{ trans('index.check_project') }}
                              </button>
                          </div>
                      </div>
                  </div>

              </div>
              <div class="results__buttons">
                  <button class="button prev">
                      <i>
                          <svg width="28" height="12" viewBox="0 0 28 12" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <path
                                  d="M0.469667 6.53033C0.176775 6.23744 0.176775 5.76256 0.469667 5.46967L5.24264 0.696699C5.53553 0.403806 6.01041 0.403806 6.3033 0.696699C6.59619 0.989593 6.59619 1.46447 6.3033 1.75736L2.06066 6L6.3033 10.2426C6.59619 10.5355 6.59619 11.0104 6.3033 11.3033C6.01041 11.5962 5.53553 11.5962 5.24264 11.3033L0.469667 6.53033ZM28 6.75H0.999998V5.25H28V6.75Z"
                                  fill="#222222" />
                          </svg>
                      </i>
                      {{ trans('index.previous_case') }}
                  </button>
                  <button class="button next">

                      {{ trans('index.next_case') }}
                      <i>
                          <svg width="28" height="12" viewBox="0 0 28 12" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <path
                                  d="M27.5303 6.53033C27.8232 6.23744 27.8232 5.76256 27.5303 5.46967L22.7574 0.696699C22.4645 0.403806 21.9896 0.403806 21.6967 0.696699C21.4038 0.989593 21.4038 1.46447 21.6967 1.75736L25.9393 6L21.6967 10.2426C21.4038 10.5355 21.4038 11.0104 21.6967 11.3033C21.9896 11.5962 22.4645 11.5962 22.7574 11.3033L27.5303 6.53033ZM0 6.75H27V5.25H0V6.75Z"
                                  fill="#222222" />
                          </svg>
                      </i>
                  </button>
              </div>
          </div>
          <div class="item-popup js-shape-close" id="popoup-1">
              <div class="popupShape"></div>
              <div class="container">
                  <div class="item">
                      <button class="item-popup-close js-close"></button>
                      <div class="item__top row">
                          <div class="col-xs-12 col-md-6">
                              <p class="item__name item__name--phone">
                                  planetakolgot.com.ua
                              </p>
                              <div class="item__poster">
                                  <picture>
                                      <source type="image/webp" data-srcset="/img/results/c_poster.webp">
                                      <img data-src="/img/results/c_poster.png" alt="colgotov_desctop"
                                          class="lazy desctop">
                                  </picture>
                              </div>
                          </div>
                          <div class="col-xs-12 col-md-6">
                              <div class="item__info">
                                  <p class="item__name">
                                      planetakolgot.com.ua
                                  </p>
                                  <div class="item__text">
                                      <p class="text__bold">{{ trans('partials/results.sold_services') }}</p>
                                      <ul class="item__services">
                                          <li>{{ trans('partials/results.service_marketing') }}</li>
                                          <li>{{ trans('partials/results.style_develop') }}</li>
                                          <li>{{ trans('partials/results.design_develop') }}</li>
                                          <li>{{ trans('partials/results.seo') }}</li>
                                          <li>{{ trans('partials/results.advertising') }}</li>

                                      </ul>
                                      <div class="item__cell__footer">
                                          <p class="text__bold">{{ trans('partials/results.result') }}</p>
                                          <div class="row">
                                              <div class="col-xs-12">
                                                  <p class="text__bold">{{ trans('partials/results.time_inside') }}
                                                  </p>
                                                  <ul class="item__services item__services-termin">
                                                      <li> {{ trans('partials/results.2_month') }} </li>
                                                  </ul>
                                              </div>
                                              <div class="col-xs-12">
                                                  <p class="text__bold">{{ trans('partials/results.technologies') }}
                                                  </p>
                                                  <ul class="item__tech">
                                                      <li><img class="lazy" data-src="/img/tech/opencart.png"
                                                              alt="opencart"></li>
                                                      <li><img class="lazy" data-src="/img/tech/jquery.png"
                                                              alt="jquery"></li>
                                                      <li><img class="lazy" data-src="/img/tech/bootstrap.png"
                                                              alt="bootstrap"></li>
                                                  </ul>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="item__footer">

                          {{-- <p class="text__bold text-center">Этапы работ:</p> --}}
                          <ul class="item__stages">
                              <li>
                                  <div class="decor"></div>
                                  <svg width="44" height="43" viewBox="0 0 44 43" fill="none"
                                      xmlns="http://www.w3.org/2000/svg">
                                      <path
                                          d="M12.3733 5.23594C13.1814 5.23594 13.8365 4.58085 13.8365 3.77275C13.8365 2.96466 13.1814 2.30957 12.3733 2.30957C11.5652 2.30957 10.9102 2.96466 10.9102 3.77275C10.9102 4.58085 11.5652 5.23594 12.3733 5.23594Z"
                                          fill="#222222" />
                                      <path
                                          d="M4.5042 5.23594C5.31229 5.23594 5.96738 4.58085 5.96738 3.77275C5.96738 2.96466 5.31229 2.30957 4.5042 2.30957C3.69611 2.30957 3.04102 2.96466 3.04102 3.77275C3.04102 4.58085 3.69611 5.23594 4.5042 5.23594Z"
                                          fill="#222222" />
                                      <path
                                          d="M24.6442 32.953C24.6442 32.6603 24.6546 32.3573 24.686 32.0646C25.0936 27.3929 28.6052 23.5782 33.2352 22.7943V1.46318C33.2352 0.658432 32.5767 0 31.772 0H28.7411V1.13919C30.2043 1.48409 31.1031 2.94727 30.7582 4.41045C30.4133 5.87364 28.9501 6.77245 27.4869 6.42756C26.0238 6.08266 25.125 4.61948 25.4698 3.1563C25.7102 2.15297 26.4836 1.37957 27.4869 1.13919V0H20.8713V1.13919C22.3345 1.48409 23.2333 2.94727 22.8884 4.41045C22.5435 5.87364 21.0803 6.77245 19.6171 6.42756C18.1539 6.08266 17.2551 4.61948 17.6 3.1563C17.8404 2.15297 18.6138 1.37957 19.6171 1.13919V0H13.0014V1.13919C14.4646 1.48409 15.3634 2.94727 15.0185 4.41045C14.6736 5.87364 13.2105 6.77245 11.7473 6.42756C10.2841 6.08266 9.38528 4.61948 9.73017 3.1563C9.97055 2.15297 10.7439 1.37957 11.7473 1.13919V0H5.13159V1.13919C6.59478 1.48409 7.49359 2.94727 7.1487 4.41045C6.8038 5.87364 5.34062 6.77245 3.87744 6.42756C2.41425 6.08266 1.51544 4.61948 1.86033 3.1563C2.10071 2.15297 2.87411 1.37957 3.87744 1.13919V0H1.46318C0.658433 0 0 0.658432 0 1.46318V36.9976C0 37.8024 0.658433 38.4608 1.46318 38.4608H26.2432C25.1981 36.8095 24.6442 34.8969 24.6442 32.953ZM5.12114 13.9107H28.114C28.4589 13.9107 28.7411 14.1929 28.7411 14.5378C28.7411 14.8827 28.4589 15.1649 28.114 15.1649H5.12114C4.77625 15.1649 4.49406 14.8827 4.49406 14.5378C4.49406 14.1824 4.77625 13.9107 5.12114 13.9107ZM5.12114 19.6485H28.114C28.4589 19.6485 28.7411 19.9306 28.7411 20.2755C28.7411 20.6204 28.4589 20.9026 28.114 20.9026H5.12114C4.77625 20.9026 4.49406 20.6204 4.49406 20.2755C4.49406 19.9306 4.77625 19.6485 5.12114 19.6485ZM5.12114 25.3967H25.5012C25.8461 25.3967 26.1283 25.6789 26.1283 26.0238C26.1283 26.3687 25.8461 26.6508 25.5012 26.6508H5.12114C4.77625 26.6508 4.49406 26.3687 4.49406 26.0238C4.49406 25.6789 4.77625 25.3967 5.12114 25.3967ZM23.1392 32.3991H5.12114C4.77625 32.3991 4.49406 32.1169 4.49406 31.772C4.49406 31.4271 4.77625 31.1449 5.12114 31.1449H23.1392C23.4841 31.1449 23.7663 31.4271 23.7663 31.772C23.7663 32.1169 23.4841 32.3991 23.1392 32.3991Z"
                                          fill="#222222" />
                                      <path
                                          d="M28.1155 5.23594C28.9236 5.23594 29.5787 4.58085 29.5787 3.77275C29.5787 2.96466 28.9236 2.30957 28.1155 2.30957C27.3074 2.30957 26.6523 2.96466 26.6523 3.77275C26.6523 4.58085 27.3074 5.23594 28.1155 5.23594Z"
                                          fill="#222222" />
                                      <path
                                          d="M38.0847 24.4559C33.392 22.721 28.1873 25.1248 26.4524 29.8174C26.1702 30.5699 25.9925 31.3642 25.9298 32.169C25.9089 32.4302 25.8984 32.6915 25.8984 32.9528C25.8984 37.9485 29.9535 42.0036 34.9493 42.0036C39.945 42.0036 44.0001 37.9485 44.0001 32.9528C44.0001 29.159 41.6381 25.7728 38.0847 24.4559ZM39.5897 30.7162L39.5792 30.7267L34.249 36.0568C34.0087 36.2972 33.6115 36.2972 33.3607 36.0568L30.3298 33.026C30.0894 32.7856 30.0894 32.3884 30.3298 32.1376C30.5702 31.8972 30.9673 31.8972 31.2182 32.1376L33.8101 34.7295L38.7013 29.8383C38.9417 29.5875 39.3388 29.5875 39.5897 29.8279C39.8196 30.0682 39.83 30.4654 39.5897 30.7162Z"
                                          fill="#222222" />
                                      <path
                                          d="M20.2444 5.23594C21.0525 5.23594 21.7076 4.58085 21.7076 3.77275C21.7076 2.96466 21.0525 2.30957 20.2444 2.30957C19.4363 2.30957 18.7812 2.96466 18.7812 3.77275C18.7812 4.58085 19.4363 5.23594 20.2444 5.23594Z"
                                          fill="#222222" />
                                  </svg>
                                  <p>
                                      {!! trans('partials/results.item__stage1') !!}
                                  </p>
                              </li>
                              <li>
                                  <div class="decor"></div>
                                  <svg width="44" height="42" viewBox="0 0 44 42" fill="none"
                                      xmlns="http://www.w3.org/2000/svg">
                                      <path
                                          d="M11.9494 13.0988L6.34381 14.6681C5.53673 14.8952 5.05688 15.7617 5.27549 16.6068L7.62524 25.7755C7.84247 26.6205 8.67293 27.1221 9.48001 26.895L10.7353 26.5429L15.8514 40.822C16.169 41.6268 16.9403 42.1413 17.5659 41.966C18.1901 41.7906 19.2131 41.5046 19.8387 41.3293C20.4629 41.154 20.885 40.3061 20.7764 39.4424L18.3455 24.1674L32.7011 26.8074L29.5992 14.7069L26.4974 2.60791L13.6584 13.8576C13.3298 13.2411 12.6327 12.9077 11.9494 13.0988Z"
                                          fill="#222222" />
                                      <path
                                          d="M1.3017 19.7897C0.285635 20.1878 -0.24921 21.5588 0.11377 22.9671C0.474 24.374 1.59181 25.2852 2.66288 25.0969C2.94061 25.837 3.70507 26.261 4.45715 26.0512L6.45216 25.4921L4.39528 17.4688L2.39889 18.0263C1.64681 18.2376 1.18758 19.0036 1.3017 19.7897Z"
                                          fill="#222222" />
                                      <path
                                          d="M32.8111 9.14087L30.768 1.17355C30.5535 0.329964 29.7231 -0.171586 28.9146 0.0540396L28.6259 0.135955C27.8188 0.36158 27.3389 1.22959 27.5562 2.07317L33.8753 26.7181C34.0912 27.5617 34.9216 28.0633 35.7287 27.8362L36.0174 27.7557C36.8245 27.5301 37.3057 26.6621 37.0871 25.8185L35.0454 17.8512C35.9913 17.1973 36.3172 15.1667 35.7576 12.9837C35.198 10.8007 33.9427 9.21416 32.8111 9.14087Z"
                                          fill="#222222" />
                                      <path
                                          d="M37.9959 5.939C38.3067 5.66883 38.6765 5.46045 38.9419 5.18596C39.2017 4.90141 39.3901 4.58238 39.5235 4.28058C39.8026 3.68993 39.8356 3.14096 39.8356 3.14096L39.7269 3.03174C39.7269 3.03174 39.2045 3.08635 38.6504 3.40251C38.3685 3.55197 38.0688 3.76035 37.8076 4.04202C37.5546 4.33232 37.3703 4.72752 37.1242 5.06093C36.148 6.40463 35.2832 7.85898 35.2832 7.85898L35.3932 7.9682C35.3918 7.96964 36.7502 7.00965 37.9959 5.939Z"
                                          fill="#222222" />
                                      <path
                                          d="M42.2467 18.0728C41.8837 17.9736 41.463 17.9866 41.067 17.9161C39.4749 17.6402 37.8401 17.5181 37.8401 17.5181L37.7988 17.6704C37.7988 17.6704 39.2439 18.4781 40.7315 19.1319C41.1041 19.2915 41.452 19.5386 41.8109 19.6565C42.1711 19.7643 42.5299 19.7873 42.8475 19.77C43.4786 19.7542 43.9571 19.5286 43.9571 19.5286L43.9997 19.3777C43.9997 19.3777 43.7082 18.9192 43.183 18.5542C42.9218 18.3631 42.6069 18.1834 42.2467 18.0728Z"
                                          fill="#222222" />
                                      <path
                                          d="M41.9823 10.5848C41.6757 10.5575 41.332 10.5704 40.9827 10.6667C40.6376 10.7745 40.2994 11.0073 39.9392 11.1568C38.5038 11.7618 37.1055 12.5235 37.1055 12.5235L37.144 12.6758C37.144 12.6758 38.7183 12.6054 40.2513 12.3783C40.6349 12.3194 41.0391 12.3453 41.3897 12.2576C41.739 12.1599 42.0428 11.9889 42.2931 11.8064C42.8018 11.4586 43.0836 11.0116 43.0836 11.0116L43.0493 10.8593C43.0493 10.8593 42.59 10.6207 41.9823 10.5848Z"
                                          fill="#222222" />
                                  </svg>
                                  <p>
                                      {!! trans('partials/results.item__stage2') !!}
                                  </p>
                              </li>
                              <li>
                                  <div class="decor"></div>
                                  <svg width="54" height="40" viewBox="0 0 54 40" fill="none"
                                      xmlns="http://www.w3.org/2000/svg">
                                      <path d="M32.6925 27.1162H21.3105V34.4235H32.6925V27.1162Z" fill="#222222" />
                                      <path d="M49.091 27.1162H37.709V34.4235H49.091V27.1162Z" fill="#222222" />
                                      <path
                                          d="M54 5.38496V1.73076C54 0.776533 53.2519 0 52.3327 0H1.66728C0.748055 0 0 0.776533 0 1.73076V5.38496H54ZM12.8403 2.4046H13.7306C14.0374 2.4046 14.2864 2.66306 14.2864 2.98152C14.2864 3.29998 14.0374 3.55844 13.7306 3.55844H12.8403C12.5335 3.55844 12.2845 3.29998 12.2845 2.98152C12.2845 2.66306 12.5335 2.4046 12.8403 2.4046ZM8.59652 2.4046H9.48796C9.79474 2.4046 10.0437 2.66306 10.0437 2.98152C10.0437 3.29998 9.79474 3.55844 9.48796 3.55844H8.59652C8.28974 3.55844 8.04076 3.29998 8.04076 2.98152C8.04076 2.66306 8.28974 2.4046 8.59652 2.4046ZM4.35272 2.4046H5.24305C5.54983 2.4046 5.79881 2.66306 5.79881 2.98152C5.79881 3.29998 5.54983 3.55844 5.24305 3.55844H4.35272C4.04594 3.55844 3.79696 3.29998 3.79696 2.98152C3.79696 2.66306 4.04594 2.4046 4.35272 2.4046Z"
                                          fill="#222222" />
                                      <path d="M16.2921 27.1162H4.91016V34.4235H16.2921V27.1162Z" fill="#222222" />
                                      <path d="M49.0932 10.6748H4.91016V23.6555H49.0932V10.6748Z" fill="#222222" />
                                      <path
                                          d="M0 6.53857V38.2691C0 39.2233 0.748055 39.9999 1.66728 39.9999H52.3327C53.2519 39.9999 54 39.2233 54 38.2691V6.53857H0ZM17.402 35.0003C17.402 35.3188 17.153 35.5772 16.8462 35.5772H4.35272C4.04594 35.5772 3.79696 35.3188 3.79696 35.0003V26.5392C3.79696 26.2207 4.04594 25.9623 4.35272 25.9623H16.8462C17.153 25.9623 17.402 26.2207 17.402 26.5392V35.0003ZM33.8025 35.0003C33.8025 35.3188 33.5535 35.5772 33.2468 35.5772H20.7532C20.4465 35.5772 20.1975 35.3188 20.1975 35.0003V26.5392C20.1975 26.2207 20.4465 25.9623 20.7532 25.9623H33.2468C33.5535 25.9623 33.8025 26.2207 33.8025 26.5392V35.0003ZM50.203 35.0003C50.203 35.3188 49.9541 35.5772 49.6473 35.5772H37.1538C36.847 35.5772 36.598 35.3188 36.598 35.0003V26.5392C36.598 26.2207 36.847 25.9623 37.1538 25.9623H49.6473C49.9541 25.9623 50.203 26.2207 50.203 26.5392V35.0003ZM50.203 24.2315C50.203 24.55 49.9541 24.8084 49.6473 24.8084H4.35272C4.04594 24.8084 3.79696 24.55 3.79696 24.2315V10.097C3.79696 9.77855 4.04594 9.52009 4.35272 9.52009H49.6473C49.9541 9.52009 50.203 9.77855 50.203 10.097V24.2315Z"
                                          fill="#222222" />
                                  </svg>
                                  <p>
                                      {!! trans('partials/results.item__stage3') !!}
                                  </p>
                              </li>
                              <li>
                                  <div class="decor"></div>
                                  <svg width="45" height="44" viewBox="0 0 45 44" fill="none"
                                      xmlns="http://www.w3.org/2000/svg">
                                      <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M15.75 10.9824V17.7379L21.7499 20.7724V13.41L18.75 12.1962L15.75 10.9824Z"
                                          fill="#222222" />
                                      <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M22.5008 6.91699L16.8301 9.78458L22.5008 12.0794L28.1714 9.78458L22.5008 6.91699Z"
                                          fill="#222222" />
                                      <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M23.25 13.41V20.7724L29.2499 17.7379V10.9824L26.25 12.1962L23.25 13.41Z"
                                          fill="#222222" />
                                      <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M40.4995 7.5862H38.9995V9.10344C38.9995 9.5222 38.6643 9.86206 38.2495 9.86206C37.8348 9.86206 37.4996 9.5222 37.4996 9.10344V7.5862H35.9996C35.5848 7.5862 35.2496 7.24634 35.2496 6.82758C35.2496 6.40882 35.5848 6.06896 35.9996 6.06896H37.4996V4.55172C37.4996 4.13296 37.8348 3.7931 38.2495 3.7931C38.6643 3.7931 38.9995 4.13296 38.9995 4.55172V6.06896H40.4995C40.9143 6.06896 41.2495 6.40882 41.2495 6.82758C41.2495 7.24634 40.9143 7.5862 40.4995 7.5862ZM40.4995 22H36.7496C36.3348 22 35.9996 21.6601 35.9996 21.2414C35.9996 20.8226 36.3348 20.4827 36.7496 20.4827H40.4995C40.9143 20.4827 41.2495 20.8226 41.2495 21.2414C41.2495 21.6601 40.9143 22 40.4995 22ZM40.4995 25.0345H38.9995C38.5848 25.0345 38.2495 24.6946 38.2495 24.2758C38.2495 23.8571 38.5848 23.5172 38.9995 23.5172H40.4995C40.9143 23.5172 41.2495 23.8571 41.2495 24.2758C41.2495 24.6946 40.9143 25.0345 40.4995 25.0345ZM35.9996 25.0345H32.9996C32.5849 25.0345 32.2496 24.6946 32.2496 24.2758C32.2496 23.8571 32.5849 23.5172 32.9996 23.5172H35.9996C36.4143 23.5172 36.7496 23.8571 36.7496 24.2758C36.7496 24.6946 36.4143 25.0345 35.9996 25.0345ZM30.7496 18.2069C30.7496 18.4944 30.5891 18.7569 30.3349 18.8859L22.835 22.679C22.8245 22.6843 22.8117 22.682 22.7997 22.6873C22.7037 22.7298 22.6032 22.7586 22.4997 22.7586C22.3962 22.7586 22.2957 22.7298 22.1997 22.6873C22.1877 22.682 22.175 22.6843 22.1645 22.679L14.6646 18.8859C14.4103 18.7569 14.2498 18.4944 14.2498 18.2069V11.6365C14.2498 10.9689 14.0668 10.1807 14.3631 9.55103C14.5768 9.09965 15.1588 8.93351 15.5803 8.72034L19.1833 6.89813L22.1645 5.39C22.3752 5.28379 22.6242 5.28379 22.835 5.39L28.5432 8.27731C29.1514 8.58455 29.8511 8.77496 30.3686 9.24303C30.8434 9.67165 30.7496 10.1799 30.7496 10.7633V14.875V18.2069ZM11.9999 5.31034H8.2499C7.83516 5.31034 7.49991 4.97048 7.49991 4.55172C7.49991 4.13296 7.83516 3.7931 8.2499 3.7931H11.9999C12.4146 3.7931 12.7499 4.13296 12.7499 4.55172C12.7499 4.97048 12.4146 5.31034 11.9999 5.31034ZM11.9999 8.34482H10.4999C10.0851 8.34482 9.74989 8.00496 9.74989 7.5862C9.74989 7.16744 10.0851 6.82758 10.4999 6.82758H11.9999C12.4146 6.82758 12.7499 7.16744 12.7499 7.5862C12.7499 8.00496 12.4146 8.34482 11.9999 8.34482ZM11.0301 23.7395C11.3234 24.0361 11.3234 24.5156 11.0301 24.8122C10.8839 24.9601 10.6919 25.0345 10.4999 25.0345C10.3079 25.0345 10.1159 24.9601 9.96963 24.8122L8.2499 23.0727L6.53017 24.8122C6.38393 24.9601 6.19193 25.0345 5.99993 25.0345C5.80793 25.0345 5.61593 24.9601 5.46969 24.8122C5.17644 24.5156 5.17644 24.0361 5.46969 23.7395L7.18942 22L5.46969 20.2605C5.17644 19.9639 5.17644 19.4844 5.46969 19.1878C5.76293 18.8912 6.23693 18.8912 6.53017 19.1878L8.2499 20.9273L9.96963 19.1878C10.2629 18.8912 10.7369 18.8912 11.0301 19.1878C11.3234 19.4844 11.3234 19.9639 11.0301 20.2605L9.31039 22L11.0301 23.7395ZM3.74996 7.5862C3.74996 7.16744 4.0852 6.82758 4.49995 6.82758H7.49991C7.91466 6.82758 8.2499 7.16744 8.2499 7.5862C8.2499 8.00496 7.91466 8.34482 7.49991 8.34482H4.49995C4.0852 8.34482 3.74996 8.00496 3.74996 7.5862ZM4.49995 3.7931H5.24994C5.66468 3.7931 5.99993 4.13296 5.99993 4.55172C5.99993 4.97048 5.66468 5.31034 5.24994 5.31034H4.49995C4.0852 5.31034 3.74996 4.97048 3.74996 4.55172C3.74996 4.13296 4.0852 3.7931 4.49995 3.7931ZM32.9996 20.4827H33.7496C34.1643 20.4827 34.4996 20.8226 34.4996 21.2414C34.4996 21.6601 34.1643 22 33.7496 22H32.9996C32.5849 22 32.2496 21.6601 32.2496 21.2414C32.2496 20.8226 32.5849 20.4827 32.9996 20.4827ZM41.626 0H3.37346C1.51348 0 0 1.5309 0 3.41303V27.3103H44.9995V3.41303C44.9995 1.5309 43.486 0 41.626 0Z"
                                          fill="#222222" />
                                      <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M26.7312 35.6563C26.6314 37.4231 27.3934 39.1588 28.7779 40.2065H16.2231C17.6075 39.1588 18.3703 37.4223 18.2698 35.6547L26.7312 35.6563ZM0 32.2425C0 34.1238 1.51348 35.6547 3.37346 35.6547H16.7653C16.8718 36.9838 16.3026 38.2955 15.2481 39.0473L13.8981 40.0107C13.8118 40.0707 13.7398 40.145 13.6806 40.2262C12.7386 40.3263 11.9999 41.1244 11.9999 42.103C11.9999 43.1484 12.8406 43.9996 13.8748 43.9996H31.1246C32.1589 43.9996 32.9996 43.1484 32.9996 42.103C32.9996 41.1251 32.2616 40.3271 31.3204 40.2262C31.2626 40.1458 31.1906 40.0737 31.1066 40.013L29.7536 39.0488C28.6992 38.297 28.1284 36.9846 28.2357 35.6547H41.626C43.4867 35.6547 44.9995 34.1238 44.9995 32.2425V28.8271H0V32.2425Z"
                                          fill="#222222" />
                                  </svg>
                                  <p>
                                      {!! trans('partials/results.item__stage4') !!}
                                  </p>
                              </li>
                              <li>
                                  <div class="decor"></div>
                                  <svg width="41" height="40" viewBox="0 0 41 40" fill="none"
                                      xmlns="http://www.w3.org/2000/svg">
                                      <path
                                          d="M22.6964 34.8148C22.6962 35.0112 22.619 35.1995 22.4817 35.3384C22.3445 35.4772 22.1584 35.5553 21.9643 35.5556H19.0357C18.8415 35.5556 18.6553 35.4775 18.518 35.3386C18.3807 35.1997 18.3036 35.0113 18.3036 34.8148C18.3036 34.6184 18.3807 34.4299 18.518 34.291C18.6553 34.1521 18.8415 34.0741 19.0357 34.0741H21.9643C22.1584 34.0743 22.3445 34.1524 22.4817 34.2913C22.619 34.4301 22.6962 34.6184 22.6964 34.8148ZM25.3366 19.8579L25.9911 20.7407H29.7146L27.0893 18.0845L25.3366 19.8579ZM9.13669 20.7407H4.39286V10.3704H36.6071V20.7407H31.7854L27.607 16.5132C27.539 16.4445 27.4583 16.3899 27.3695 16.3527C27.2806 16.3154 27.1854 16.2963 27.0893 16.2963C26.9931 16.2963 26.8979 16.3154 26.8091 16.3527C26.7203 16.3899 26.6396 16.4445 26.5716 16.5132L24.4491 18.6606L21.8179 15.1111C21.7497 15.0191 21.6612 14.9444 21.5596 14.893C21.4579 14.8416 21.3458 14.8148 21.2321 14.8148C21.1185 14.8148 21.0064 14.8416 20.9047 14.893C20.8031 14.9444 20.7146 15.0191 20.6464 15.1111L18.3745 18.1759L15.2427 13.6493C15.1752 13.5517 15.0854 13.472 14.981 13.417C14.8766 13.362 14.7606 13.3333 14.6429 13.3333C14.5251 13.3333 14.4092 13.362 14.3047 13.417C14.2003 13.472 14.1106 13.5517 14.043 13.6493L9.13669 20.7407ZM24.1607 14.0741C24.1607 14.2206 24.2037 14.3638 24.2841 14.4856C24.3646 14.6074 24.4789 14.7024 24.6127 14.7584C24.7465 14.8145 24.8937 14.8292 25.0357 14.8006C25.1777 14.772 25.3082 14.7015 25.4106 14.5979C25.513 14.4943 25.5827 14.3623 25.6109 14.2186C25.6392 14.0749 25.6247 13.926 25.5693 13.7906C25.5139 13.6553 25.42 13.5396 25.2996 13.4582C25.1792 13.3768 25.0377 13.3333 24.8929 13.3333C24.6987 13.3333 24.5125 13.4114 24.3752 13.5503C24.2379 13.6892 24.1607 13.8776 24.1607 14.0741ZM18.3036 20.7407H24.1607L21.2321 16.7901L18.3036 20.7407ZM0 5.92593H41V39.2593C40.9998 39.4556 40.9226 39.6439 40.7853 39.7828C40.6481 39.9217 40.462 39.9998 40.2679 40H0.732143C0.538033 39.9998 0.351937 39.9217 0.21468 39.7828C0.0774242 39.6439 0.000218005 39.4556 0 39.2593V5.92593ZM10.25 28.8889C10.25 28.6924 10.1729 28.504 10.0356 28.3651C9.89826 28.2262 9.71203 28.1481 9.51786 28.1481H8.05357C7.8594 28.1481 7.67317 28.2262 7.53587 28.3651C7.39857 28.504 7.32143 28.6924 7.32143 28.8889C7.32143 29.0853 7.39857 29.2738 7.53587 29.4127C7.67317 29.5516 7.8594 29.6296 8.05357 29.6296H9.51786C9.71203 29.6296 9.89826 29.5516 10.0356 29.4127C10.1729 29.2738 10.25 29.0853 10.25 28.8889ZM24.1607 34.8148C24.16 34.2257 23.9284 33.6608 23.5166 33.2442C23.1049 32.8276 22.5466 32.5933 21.9643 32.5926H19.0357C18.4532 32.5926 17.8945 32.8267 17.4826 33.2435C17.0707 33.6602 16.8393 34.2254 16.8393 34.8148C16.8393 35.4042 17.0707 35.9694 17.4826 36.3862C17.8945 36.8029 18.4532 37.037 19.0357 37.037H21.9643C22.5466 37.0364 23.1049 36.802 23.5166 36.3854C23.9284 35.9688 24.16 35.404 24.1607 34.8148ZM29.2857 28.8889C29.2857 28.6924 29.2086 28.504 29.0713 28.3651C28.934 28.2262 28.7477 28.1481 28.5536 28.1481H12.4464C12.2523 28.1481 12.066 28.2262 11.9287 28.3651C11.7914 28.504 11.7143 28.6924 11.7143 28.8889C11.7143 29.0853 11.7914 29.2738 11.9287 29.4127C12.066 29.5516 12.2523 29.6296 12.4464 29.6296H28.5536C28.7477 29.6296 28.934 29.5516 29.0713 29.4127C29.2086 29.2738 29.2857 29.0853 29.2857 28.8889ZM16.1071 26.6667H24.8929C25.087 26.6667 25.2733 26.5886 25.4106 26.4497C25.5479 26.3108 25.625 26.1224 25.625 25.9259C25.625 25.7295 25.5479 25.5411 25.4106 25.4021C25.2733 25.2632 25.087 25.1852 24.8929 25.1852H16.1071C15.913 25.1852 15.7267 25.2632 15.5894 25.4021C15.4521 25.5411 15.375 25.7295 15.375 25.9259C15.375 26.1224 15.4521 26.3108 15.5894 26.4497C15.7267 26.5886 15.913 26.6667 16.1071 26.6667ZM33.6786 28.8889C33.6786 28.6924 33.6014 28.504 33.4641 28.3651C33.3268 28.2262 33.1406 28.1481 32.9464 28.1481H31.4821C31.288 28.1481 31.1017 28.2262 30.9644 28.3651C30.8271 28.504 30.75 28.6924 30.75 28.8889C30.75 29.0853 30.8271 29.2738 30.9644 29.4127C31.1017 29.5516 31.288 29.6296 31.4821 29.6296H32.9464C33.1406 29.6296 33.3268 29.5516 33.4641 29.4127C33.6014 29.2738 33.6786 29.0853 33.6786 28.8889ZM2.92857 21.4815C2.92857 21.6779 3.00571 21.8663 3.14301 22.0053C3.28031 22.1442 3.46654 22.2222 3.66071 22.2222H37.3393C37.5335 22.2222 37.7197 22.1442 37.857 22.0053C37.9943 21.8663 38.0714 21.6779 38.0714 21.4815V9.62963C38.0714 9.43317 37.9943 9.24476 37.857 9.10585C37.7197 8.96693 37.5335 8.88889 37.3393 8.88889H3.66071C3.46654 8.88889 3.28031 8.96693 3.14301 9.10585C3.00571 9.24476 2.92857 9.43317 2.92857 9.62963V21.4815ZM10.924 20.7407H16.4732L17.45 19.4231L14.6429 15.3657L10.924 20.7407ZM41 0.740741V4.44444H0V0.740741C0.000218005 0.544352 0.0774242 0.356069 0.21468 0.217201C0.351937 0.0783334 0.538033 0.000220566 0.732143 0H40.2679C40.462 0.000220566 40.6481 0.0783334 40.7853 0.217201C40.9226 0.356069 40.9998 0.544352 41 0.740741ZM2.92857 2.22222C2.92857 2.07572 2.88563 1.9325 2.80518 1.81069C2.72473 1.68887 2.61039 1.59393 2.47661 1.53787C2.34283 1.4818 2.19562 1.46713 2.05359 1.49571C1.91157 1.5243 1.78112 1.59485 1.67873 1.69844C1.57633 1.80203 1.5066 1.93402 1.47835 2.07771C1.4501 2.2214 1.4646 2.37034 1.52002 2.50569C1.57543 2.64104 1.66927 2.75673 1.78967 2.83813C1.91007 2.91952 2.05162 2.96296 2.19643 2.96296C2.3906 2.96296 2.57683 2.88492 2.71413 2.746C2.85143 2.60709 2.92857 2.41868 2.92857 2.22222ZM5.85714 2.22222C5.85714 2.07572 5.8142 1.9325 5.73375 1.81069C5.65331 1.68887 5.53896 1.59393 5.40518 1.53787C5.2714 1.4818 5.12419 1.46713 4.98217 1.49571C4.84014 1.5243 4.70969 1.59485 4.6073 1.69844C4.50491 1.80203 4.43517 1.93402 4.40693 2.07771C4.37867 2.2214 4.39317 2.37034 4.44859 2.50569C4.504 2.64104 4.59784 2.75673 4.71824 2.83813C4.83864 2.91952 4.9802 2.96296 5.125 2.96296C5.31918 2.96296 5.5054 2.88492 5.6427 2.746C5.78001 2.60709 5.85714 2.41868 5.85714 2.22222ZM8.78571 2.22222C8.78571 2.07572 8.74277 1.9325 8.66233 1.81069C8.58188 1.68887 8.46753 1.59393 8.33375 1.53787C8.19997 1.4818 8.05276 1.46713 7.91074 1.49571C7.76872 1.5243 7.63826 1.59485 7.53587 1.69844C7.43348 1.80203 7.36375 1.93402 7.3355 2.07771C7.30725 2.2214 7.32175 2.37034 7.37716 2.50569C7.43257 2.64104 7.52641 2.75673 7.64681 2.83813C7.76721 2.91952 7.90877 2.96296 8.05357 2.96296C8.24775 2.96296 8.43397 2.88492 8.57127 2.746C8.70858 2.60709 8.78571 2.41868 8.78571 2.22222Z"
                                          fill="#222222" />
                                  </svg>
                                  <p>
                                      {!! trans('partials/results.item__stage5') !!}
                                  </p>
                              </li>
                              <li class="empty">
                              </li>
                              <li>
                                  <div class="decor"></div>
                                  <svg width="45" height="44" viewBox="0 0 45 44" fill="none"
                                      xmlns="http://www.w3.org/2000/svg">
                                      <path
                                          d="M22.0017 23.0503C19.6992 23.0503 17.793 24.7826 17.5195 27.0126H26.4844C26.2104 24.7826 24.3042 23.0503 22.0017 23.0503Z"
                                          fill="#222222" />
                                      <path
                                          d="M22.0057 11.1626C16.0277 11.1626 11.1641 16.0251 11.1641 22.0015C11.1641 27.9773 16.0277 32.8393 22.0057 32.8393C27.9805 32.8393 32.8407 27.9779 32.8407 22.0015C32.8407 16.0251 27.9805 11.1626 22.0057 11.1626ZM22.003 14.212C23.8454 14.212 25.3446 15.7112 25.3446 17.5542C25.3446 19.3967 23.8454 20.8959 22.003 20.8959C20.1599 20.8959 18.6607 19.3967 18.6607 17.5542C18.6607 15.7112 20.1599 14.212 22.003 14.212ZM27.0725 28.1196H16.9334C16.6278 28.1196 16.3798 27.8721 16.3798 27.566C16.3798 24.4651 18.9026 21.9428 22.003 21.9428C25.1033 21.9428 27.6261 24.4657 27.6261 27.566C27.6261 27.8721 27.3787 28.1196 27.0725 28.1196Z"
                                          fill="#222222" />
                                      <path
                                          d="M22.0026 19.7883C23.2349 19.7883 24.237 18.7857 24.237 17.5538C24.237 16.322 23.2344 15.3188 22.0026 15.3188C20.7707 15.3188 19.7676 16.3215 19.7676 17.5538C19.7676 18.7862 20.7702 19.7883 22.0026 19.7883Z"
                                          fill="#222222" />
                                      <path
                                          d="M39.9807 18.9063C39.8002 17.8246 39.5101 16.7406 39.1198 15.6842C39.0318 15.4462 39.1165 15.1782 39.3263 15.0354L42.2356 13.0479L39.8711 8.95324L36.6888 10.4796C36.4596 10.5887 36.1856 10.5294 36.0239 10.3345C35.3164 9.48362 34.5236 8.69027 33.6688 7.97665C33.4739 7.81444 33.4147 7.54039 33.5243 7.3123L35.0506 4.13282L30.9527 1.76662L28.9657 4.67482C28.8218 4.88464 28.556 4.97101 28.3158 4.88188C27.2943 4.5032 26.2103 4.21365 25.0942 4.02043C24.8445 3.97725 24.6557 3.7702 24.6364 3.51719L24.3656 0H19.6388L19.3681 3.51719C19.3487 3.7702 19.1599 3.97725 18.9102 4.02043C17.7913 4.21365 16.7073 4.5032 15.6892 4.88188C15.4512 4.9699 15.1826 4.8852 15.0393 4.67537L13.049 1.76662L8.9538 4.13282L10.4796 7.31285C10.5892 7.5415 10.53 7.81499 10.3351 7.9772C9.4814 8.68972 8.68806 9.48362 7.97665 10.3356C7.81443 10.5305 7.53984 10.5898 7.31229 10.4801L4.13227 8.95435L1.76662 13.0479L4.67482 15.0354C4.88409 15.1782 4.9699 15.4456 4.88243 15.6831C4.50043 16.7228 4.21033 17.8079 4.02043 18.9097C3.97725 19.1599 3.76964 19.3487 3.51663 19.3675L0 19.6327V24.3645L3.51663 24.6319C3.76964 24.6513 3.97725 24.8401 4.02043 25.0898C4.21088 26.1943 4.50098 27.2788 4.88243 28.313C4.9699 28.5511 4.88464 28.8179 4.67537 28.9613L1.76662 30.951L4.13282 35.0462L7.31285 33.5226C7.5415 33.4152 7.81443 33.4728 7.97665 33.6666C8.70024 34.5308 9.49358 35.323 10.3351 36.0228C10.5305 36.185 10.5903 36.4591 10.4807 36.6877L8.95435 39.8705L13.049 42.2361L15.0393 39.3246C15.1826 39.1154 15.45 39.0301 15.6876 39.1176C16.7339 39.5029 17.8179 39.7941 18.9102 39.9829C19.1599 40.0261 19.3487 40.2331 19.3681 40.4856L19.6388 44H24.3656L24.6364 40.4856C24.6557 40.2331 24.8445 40.0261 25.0937 39.9829C26.197 39.7919 27.281 39.5012 28.3163 39.1181C28.5538 39.0307 28.8223 39.1154 28.9657 39.3252L30.9527 42.2361L35.0506 39.8705L33.5243 36.6877C33.4147 36.4591 33.4739 36.185 33.6693 36.0228C34.512 35.3219 35.3042 34.5297 36.0245 33.6677C36.1867 33.4722 36.4613 33.4147 36.6883 33.5226L39.8711 35.0462L42.2356 30.9516L39.3263 28.9619C39.1165 28.8185 39.0312 28.5511 39.1198 28.3124C39.5095 27.2611 39.7996 26.1782 39.9807 25.0931C40.0227 24.8423 40.2304 24.6519 40.4845 24.6325L44.0017 24.3651V19.6332L40.485 19.3681C40.2309 19.3481 40.0227 19.1577 39.9807 18.9063ZM22.005 33.9467C15.4163 33.9467 10.0561 28.5882 10.0561 22.0017C10.0561 15.4146 15.4163 10.0555 22.005 10.0555C28.5898 10.0555 33.9473 15.4146 33.9473 22.0017C33.9473 28.5882 28.5898 33.9467 22.005 33.9467Z"
                                          fill="#222222" />
                                  </svg>
                                  <p>
                                      {!! trans('partials/results.item__stage6') !!}
                                  </p>
                              </li>
                              <li>
                                  <div class="decor"></div>
                                  <svg width="46" height="35" viewBox="0 0 46 35" fill="none"
                                      xmlns="http://www.w3.org/2000/svg">
                                      <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M2.91094 0C2.57213 0 2.3 0.359375 2.3 0.805122V31.1111H0.79362C0.35424 31.1111 0 31.4465 0 31.8631V31.9147C0 32.3312 0.35424 32.6667 0.79362 32.6667H2.3V34.1949C2.3 34.6406 2.57213 35 2.91094 35H3.2224C3.5612 35 3.83333 34.6406 3.83333 34.1949V32.6667H45.2064C45.6458 32.6667 46 32.3312 46 31.9147V31.8631C46 31.4465 45.6458 31.1111 45.2064 31.1111H44.4667H3.83333V0.805122C3.83333 0.359375 3.5612 0 3.2224 0H2.91094ZM9.96667 8.55556L8.32402 14.1109L10.7603 17.4058L13.2834 14.2765L9.96667 8.55556ZM17.6333 10.1111L10.7333 18.6667L6.13333 12.4444L4.6 16.3333V26.7027V30.3333H43.7H44.4667V21L38.3333 12.4444L32.9667 20.2222L27.6 14.7778L23 18.6667L17.6333 10.1111ZM32.9667 12.4444L29.894 16.0067L32.8633 19.0176L35.3296 15.4416L32.9667 12.4444ZM23 14L21.9428 15.5328L23.1782 17.503L24.9646 15.9931L23 14Z"
                                          fill="#222222" />
                                  </svg>
                                  <p>
                                      {!! trans('partials/results.item__stage7') !!}
                                  </p>
                              </li>
                              <li>
                                  <div class="decor"></div>
                                  <svg width="54" height="47" viewBox="0 0 54 47" fill="none"
                                      xmlns="http://www.w3.org/2000/svg">
                                      <path
                                          d="M19.5095 8.09582C19.4458 7.77413 19.2663 7.50044 19.0032 7.32413C18.765 7.16536 18.4844 7.10951 18.2149 7.1649L17.7603 7.25721C17.686 7.27244 17.6107 7.29782 17.5392 7.33105C17.5101 7.34398 17.4806 7.35459 17.4492 7.36151C17.3578 7.38321 17.2641 7.37628 17.175 7.34121C17.0592 7.29598 16.965 7.20367 16.9175 7.08782C16.4823 6.02998 15.8541 5.08659 15.0515 4.28444C15.0298 4.26275 15.0109 4.23921 14.9943 4.21567C14.9661 4.17367 14.9449 4.12428 14.9324 4.07398C14.9273 4.05275 14.9204 4.03151 14.9255 4.03798L14.9167 3.98905L14.926 3.87505C14.9412 3.79013 14.9758 3.71628 15.0501 3.62951L15.3907 3.11213C15.7332 2.56982 15.5892 1.83136 15.0695 1.46582C14.8286 1.29644 14.541 1.23321 14.2609 1.28951C13.9761 1.34582 13.7306 1.51798 13.5695 1.77367L13.3147 2.17659C13.281 2.23013 13.252 2.28967 13.2257 2.35244C13.1781 2.46644 13.0844 2.55828 12.9704 2.60398C12.855 2.64921 12.7244 2.64736 12.6113 2.59567C11.6126 2.14936 10.534 1.92228 9.38842 1.92182C9.1738 1.92551 8.96842 1.74874 8.93888 1.51244L8.83319 0.953052C8.7695 0.630898 8.59042 0.356745 8.32688 0.180437C8.08873 0.0216678 7.80903 -0.0355629 7.53857 0.0216679C6.9455 0.142129 6.56473 0.758744 6.69027 1.3989L6.8038 1.95274C6.86473 2.17844 6.7498 2.41567 6.53565 2.50382C5.48057 2.94044 4.54688 3.59767 3.76042 4.45659C3.60442 4.6269 3.34365 4.65551 3.15442 4.52213L2.80596 4.27936C2.56411 4.10951 2.27703 4.04675 1.9978 4.10305C1.71303 4.15936 1.4675 4.33105 1.3055 4.58767C0.963034 5.13044 1.10703 5.8689 1.62673 6.23351L1.98673 6.4869C2.16211 6.61059 2.2295 6.83536 2.15057 7.03475C1.70057 8.17105 1.49842 9.37382 1.54965 10.6103C1.55888 10.8378 1.4038 11.0363 1.18042 11.0815L0.872111 11.1443C0.279034 11.2647 -0.101274 11.8818 0.0238029 12.5192C0.0870337 12.8404 0.266572 13.1146 0.528726 13.29C0.765495 13.4483 1.04565 13.506 1.31888 13.4501L1.69503 13.3735C1.91288 13.3297 2.12934 13.446 2.2138 13.6504C2.68365 14.7923 3.37042 15.7943 4.25519 16.6278C4.4158 16.7787 4.44673 17.0234 4.32903 17.2098L4.14396 17.5034C3.8015 18.0461 3.9455 18.7846 4.46473 19.1497C4.70519 19.3195 4.99227 19.3837 5.27334 19.3264C5.55811 19.2701 5.80365 19.0984 5.96565 18.8423L6.2278 18.4264C6.34919 18.2441 6.58273 18.1721 6.78534 18.2547C7.41627 18.5104 8.09704 18.6803 8.80734 18.7606C8.98827 18.7818 9.16965 18.8021 9.34827 18.81H9.35011C9.63211 18.8206 9.88596 18.8197 10.132 18.8054C10.1592 18.804 10.1864 18.8044 10.2104 18.8072L10.2907 18.8243C10.4495 18.8723 10.57 19.0047 10.6115 19.2027L10.7015 19.662C10.7647 19.9846 10.9447 20.2592 11.2078 20.4346C11.3878 20.5541 11.5853 20.6155 11.7884 20.6155C11.8572 20.6155 11.9273 20.6081 11.997 20.5938C12.5897 20.4734 12.9704 19.8567 12.8453 19.2194L12.7517 18.7426C12.7429 18.6997 12.7327 18.66 12.7212 18.6203C12.6557 18.4011 12.7581 18.1707 12.9649 18.072C13.215 17.9529 13.4643 17.8163 13.7057 17.6672C14.41 17.232 15.0437 16.6837 15.5892 16.038C15.6289 15.9909 15.6769 15.9531 15.7327 15.9249C15.7812 15.8995 15.8338 15.8838 15.8864 15.8774L15.903 15.8783L15.9275 15.8778C16.0489 15.8654 16.1601 15.9134 16.2427 15.9858C16.2746 16.0144 16.3069 16.0403 16.3387 16.062L16.7273 16.3357C16.9692 16.506 17.2563 16.5687 17.5355 16.5124C17.8203 16.4561 18.0658 16.2844 18.2278 16.0278C18.5703 15.4851 18.4263 14.7466 17.9066 14.382L17.5207 14.1101C17.4603 14.0677 17.3966 14.0317 17.332 14.0035C17.1127 13.9061 17.0038 13.6527 17.0846 13.4266C17.4695 12.3466 17.637 11.2163 17.5812 10.0661C17.5752 9.94244 17.62 9.82013 17.704 9.72967C17.788 9.63967 17.9061 9.58567 18.0303 9.5829C18.0893 9.58105 18.1484 9.57644 18.2093 9.56398L18.6612 9.47213C19.2543 9.35075 19.6346 8.73413 19.5095 8.09582ZM10.6673 14.8754C9.47796 15.1167 8.25857 14.8735 7.25288 14.2029C6.21765 13.5129 5.51427 12.4537 5.27196 11.22C4.77765 8.70228 6.39027 6.24459 8.86688 5.74013C10.0549 5.49828 11.2669 5.73644 12.2804 6.41259C13.3157 7.10305 14.019 8.16228 14.2613 9.39598C14.7561 11.9137 13.1435 14.3714 10.6673 14.8754Z"
                                          fill="#222222" />
                                      <path
                                          d="M17.4598 5.1222C17.4958 5.18082 17.5341 5.23712 17.5692 5.29666C17.6707 5.46928 17.7672 5.64559 17.8586 5.82466L17.9371 5.80851C18.5721 5.67789 19.2234 5.80805 19.7703 6.17266C20.3426 6.55389 20.7321 7.14282 20.8669 7.83005C21.136 9.19989 20.2863 10.5337 18.9695 10.8213C18.9663 10.9256 18.9571 11.0294 18.9501 11.1333H53.9984V4.77051H17.2383C17.2424 4.77651 17.2457 4.78251 17.2498 4.78851C17.3227 4.89789 17.3911 5.01005 17.4598 5.1222ZM49.1491 7.48066C49.1491 6.97112 49.5626 6.55758 50.0721 6.55758H50.4118C50.9214 6.55758 51.3349 6.97112 51.3349 7.48066V7.83789C51.3349 8.34743 50.9214 8.76097 50.4118 8.76097H50.0721C49.5626 8.76097 49.1491 8.34743 49.1491 7.83789V7.48066ZM44.2655 7.48066C44.2655 6.97112 44.6791 6.55758 45.1886 6.55758H45.5278C46.0374 6.55758 46.4509 6.97112 46.4509 7.48066V7.83789C46.4509 8.34743 46.0374 8.76097 45.5278 8.76097H45.1886C44.6791 8.76097 44.2655 8.34743 44.2655 7.83789V7.48066ZM39.382 7.48066C39.382 6.97112 39.7955 6.55758 40.3051 6.55758H40.6443C41.1538 6.55758 41.5674 6.97112 41.5674 7.48066V7.83789C41.5674 8.34743 41.1538 8.76097 40.6443 8.76097H40.3051C39.7955 8.76097 39.382 8.34743 39.382 7.83789V7.48066Z"
                                          fill="#222222" />
                                      <path
                                          d="M48.2698 42.1147C48.3137 42.0594 48.3543 42.0017 48.3917 41.9426C48.4 41.9292 48.4078 41.9154 48.4157 41.902C48.4822 41.7912 48.5371 41.6749 48.5814 41.5549C48.5892 41.5332 48.5985 41.5124 48.6059 41.4903C48.6243 41.434 48.6395 41.3772 48.6529 41.3195C48.6645 41.2706 48.6737 41.2207 48.6815 41.1709C48.6903 41.1174 48.6986 41.0643 48.7032 41.0103C48.7102 40.9244 48.712 40.8377 48.7079 40.75C48.7065 40.7177 48.7037 40.6853 48.7009 40.6535C48.6908 40.5478 48.6765 40.4421 48.6497 40.3364C48.4231 39.4627 47.6652 38.8973 46.8391 38.9292C46.7209 38.9338 46.6014 38.9504 46.4818 38.9804C45.2528 39.2343 44.0385 39.483 42.8283 39.73C41.9722 39.9049 41.1174 40.0793 40.2635 40.2533C38.5628 40.6 36.862 40.947 35.1608 41.2964C35.0422 41.3472 34.9129 41.3721 34.7943 41.3707C34.5931 41.4123 34.3918 41.4538 34.1906 41.4953C34.1011 41.5138 34.0102 41.5193 33.9188 41.5101L29.8494 41.1298C29.8166 41.1266 29.7838 41.122 29.7515 41.1155L22.7034 39.6838C22.2035 39.5823 21.8809 39.0953 21.9825 38.5955C22.0835 38.0966 22.57 37.7726 23.0708 37.8746L30.0705 39.2957L33.9534 39.6584C34.1242 39.6234 34.2954 39.5883 34.4666 39.5532C34.468 39.5518 34.4694 39.5509 34.4708 39.55C34.6074 39.442 34.8054 39.2583 34.9558 39.0155C34.9692 38.9933 34.9831 38.9717 34.9955 38.9486C35.0135 38.9158 35.0302 38.8821 35.0458 38.8475C35.0625 38.811 35.0772 38.7727 35.0911 38.734C35.1012 38.7058 35.1118 38.6781 35.1197 38.649C35.1395 38.5775 35.1557 38.5032 35.1626 38.4252C35.2355 37.6743 34.6 36.718 33.448 36.4641C28.7463 35.1889 24.1032 33.9243 19.4454 32.6426L19.2982 32.6915C17.9191 33.1521 16.5446 33.6081 15.1665 34.0678C13.0545 34.7721 10.9411 35.4778 8.83231 36.1784C8.83 36.1793 8.82815 36.1789 8.82584 36.1798C7.98169 36.4604 7.13338 36.7447 6.29015 37.0244L6.08984 44.4926L13.3111 41.9647C13.4098 41.9301 13.5128 41.913 13.6162 41.913C13.7205 41.913 13.8252 41.9306 13.9249 41.9661L23.662 45.4212C23.7003 45.4346 23.7377 45.4507 23.7742 45.4692C24.3049 45.741 24.9322 45.9981 25.588 46.2118C26.1151 46.3706 26.6722 46.4966 27.3137 46.6014C34.0568 45.3012 40.7818 44.0001 47.5258 42.682C47.8249 42.562 48.0742 42.3607 48.2698 42.1147Z"
                                          fill="#222222" />
                                      <path
                                          d="M8.0201 13.0507C8.72395 13.5206 9.5658 13.6867 10.3901 13.5187C12.1236 13.1657 13.2507 11.4363 12.9023 9.66305C12.7315 8.79351 12.2376 8.04859 11.5116 7.56443C10.9869 7.21459 10.3855 7.0332 9.77164 7.0332C9.5621 7.0332 9.35164 7.05443 9.1421 7.09736C7.40856 7.45043 6.28149 9.17982 6.62949 10.953C6.80072 11.8217 7.29456 12.5675 8.0201 13.0507Z"
                                          fill="#222222" />
                                      <path
                                          d="M18.6624 12.9795C18.6448 13.0478 18.631 13.117 18.6121 13.1849L18.7035 13.2495C19.8167 14.0332 20.1282 15.6112 19.3985 16.7673C19.0325 17.347 18.4676 17.7384 17.8076 17.8709C17.2048 17.99 16.5928 17.8801 16.0676 17.5589C15.5078 18.1132 14.8856 18.5886 14.209 18.9804C14.4628 20.3521 13.5993 21.6809 12.2724 21.9509C12.1127 21.9832 11.9521 21.9993 11.7924 21.9993C11.7915 21.9993 11.7905 21.9998 11.7896 21.9998C11.6475 21.9998 11.5067 21.9832 11.3673 21.9583C11.3272 21.9509 11.2879 21.9407 11.2482 21.9315C11.1439 21.9075 11.0419 21.8761 10.9408 21.8383C10.9016 21.8235 10.8628 21.8101 10.8245 21.793C10.6921 21.7349 10.5624 21.6689 10.4387 21.5867C10.3205 21.5078 10.2112 21.4192 10.1092 21.3236C10.075 21.2913 10.0459 21.2549 10.0136 21.2207C9.94946 21.1538 9.88623 21.0864 9.82992 21.013C9.79669 20.9696 9.76854 20.9226 9.73854 20.8769C9.69146 20.8063 9.64531 20.7356 9.60561 20.6609C9.57838 20.6096 9.55577 20.5566 9.53177 20.5035C9.51007 20.4555 9.48377 20.4103 9.46484 20.3604V34.022C11.9839 33.1838 14.5021 32.3461 17.0258 31.5038C17.7268 31.2698 18.4265 31.0372 19.1276 30.8032C19.3016 30.7446 19.4881 30.7395 19.6653 30.7884C24.4122 32.096 29.1421 33.3841 33.889 34.6732C35.7878 35.09 37.1742 36.8175 37.0016 38.5949C36.9878 38.7537 36.9624 38.906 36.9273 39.0504C37.9316 38.8455 38.9355 38.6406 39.9393 38.4361C41.9835 38.0198 44.0272 37.603 46.0713 37.1816C46.3062 37.1221 46.543 37.0893 46.7779 37.0806C47.8353 37.0418 48.8618 37.4987 49.5781 38.2866C49.9764 38.7241 50.2787 39.2637 50.4379 39.8775C50.4744 40.0215 50.4998 40.1655 50.5196 40.31C50.5252 40.3492 50.5284 40.3884 50.5325 40.4277C50.5445 40.5407 50.5515 40.6538 50.5538 40.7664C50.5542 40.802 50.5561 40.838 50.5556 40.8735C50.5528 41.1656 50.5173 41.4541 50.4513 41.7333C50.4476 41.749 50.4462 41.7652 50.4425 41.7809H53.9996V12.9795H18.6624ZM26.3202 25.3289L23.7748 28.009C23.6008 28.1923 23.3585 28.2966 23.1056 28.2966C22.8527 28.2966 22.6104 28.1923 22.4364 28.009L21.1044 26.6064C20.7532 26.2367 20.7684 25.6529 21.1381 25.3016C21.5078 24.9504 22.0916 24.9652 22.4433 25.3353L23.1061 26.0332L24.9822 24.0583C25.333 23.6886 25.9173 23.6738 26.2875 24.0246C26.6562 24.3753 26.6715 24.9592 26.3202 25.3289ZM26.3202 18.0075L23.7748 20.6876C23.6008 20.8709 23.3585 20.9752 23.1056 20.9752C22.8527 20.9752 22.6104 20.8709 22.4364 20.6876L21.1044 19.285C20.7532 18.9153 20.7684 18.3315 21.1381 17.9803C21.5078 17.629 22.0916 17.6438 22.4433 18.014L23.1061 18.7118L24.9822 16.7369C25.333 16.3672 25.9173 16.3524 26.2875 16.7032C26.6562 17.0535 26.6715 17.6378 26.3202 18.0075ZM43.8393 27.4367H30.6245C30.115 27.4367 29.7015 27.0232 29.7015 26.5136C29.7015 26.0041 30.115 25.5906 30.6245 25.5906H43.8388C44.3484 25.5906 44.7619 26.0041 44.7619 26.5136C44.7619 27.0232 44.3488 27.4367 43.8393 27.4367ZM43.8393 19.6349H30.6245C30.115 19.6349 29.7015 19.2213 29.7015 18.7118C29.7015 18.2023 30.115 17.7887 30.6245 17.7887H43.8388C44.3484 17.7887 44.7619 18.2023 44.7619 18.7118C44.7619 19.2213 44.3488 19.6349 43.8393 19.6349Z"
                                          fill="#222222" />
                                  </svg>
                                  <p>
                                      {!! trans('partials/results.item__stage8') !!}
                                  </p>
                              </li>
                              <li>
                                  <div class="decor"></div>
                                  <svg width="49" height="40" viewBox="0 0 49 40" fill="none"
                                      xmlns="http://www.w3.org/2000/svg">
                                      <path
                                          d="M49 6.1413V0.508133C49 0.227644 48.7746 0 48.4968 0H0.503204C0.225435 0 0 0.227644 0 0.508133V6.1413H49ZM10.5472 2.22664C10.7434 2.02847 11.0624 2.02847 11.2587 2.22664L11.8082 2.78152L12.3577 2.22664C12.5539 2.02847 12.873 2.02847 13.0692 2.22664C13.2655 2.42481 13.2655 2.74697 13.0692 2.94514L12.5197 3.50002L13.0682 4.05389C13.2645 4.25206 13.2645 4.57422 13.0682 4.77239C12.9696 4.87198 12.8408 4.92076 12.7119 4.92076C12.5831 4.92076 12.4543 4.87097 12.3557 4.77239L11.8072 4.21852L11.2587 4.77239C11.1601 4.87198 11.0312 4.92076 10.9024 4.92076C10.7736 4.92076 10.6448 4.87097 10.5462 4.77239C10.3499 4.57422 10.3499 4.25206 10.5462 4.05389L11.0946 3.50002L10.5451 2.94514C10.3499 2.74595 10.3499 2.42481 10.5472 2.22664ZM6.82647 2.99189H8.98823C9.266 2.99189 9.49143 3.21953 9.49143 3.50002C9.49143 3.78051 9.266 4.00816 8.98823 4.00816H6.82647C6.5487 4.00816 6.32326 3.78051 6.32326 3.50002C6.32326 3.21953 6.5487 2.99189 6.82647 2.99189ZM3.82133 1.93599C4.67577 1.93599 5.37019 2.63721 5.37019 3.50002C5.37019 4.36283 4.67577 5.06406 3.82133 5.06406C2.9679 5.06406 2.27247 4.36283 2.27247 3.50002C2.27247 2.63721 2.96689 1.93599 3.82133 1.93599Z"
                                          fill="#222222" />
                                      <path
                                          d="M0 7.15723V39.4918C0 39.7723 0.225435 39.9999 0.503204 39.9999H48.4968C48.7746 39.9999 49 39.7723 49 39.4918V7.15723H0ZM18.7091 28.9683C18.9336 29.134 18.9819 29.4521 18.8178 29.6787C18.7192 29.8139 18.5662 29.886 18.4112 29.886C18.3076 29.886 18.2039 29.8545 18.1143 29.7875L9.58403 23.4795C9.55685 23.4592 9.54075 23.4307 9.51861 23.4063C9.50552 23.3921 9.48741 23.386 9.47634 23.3707C9.47131 23.3636 9.47131 23.3555 9.46627 23.3484C9.44615 23.3189 9.43507 23.2864 9.423 23.2529C9.41193 23.2244 9.39885 23.1959 9.39281 23.1665C9.38677 23.135 9.38878 23.1025 9.38878 23.0699C9.38878 23.0374 9.38677 23.0059 9.39281 22.9734C9.39885 22.9439 9.41293 22.9155 9.423 22.887C9.43608 22.8535 9.44715 22.822 9.46627 22.7915C9.47131 22.7833 9.47131 22.7752 9.47634 22.7691C9.49244 22.7468 9.51659 22.7346 9.53572 22.7142C9.55383 22.697 9.5649 22.6746 9.58503 22.6594L18.1153 16.3504C18.3378 16.1837 18.6538 16.2325 18.8188 16.4601C18.9829 16.6868 18.9346 17.0048 18.7101 17.1705L10.7343 23.0689L18.7091 28.9683ZM27.3371 13.7508L22.6402 32.636C22.5828 32.8667 22.3775 33.0202 22.1531 33.0202C22.1118 33.0202 22.0705 33.0151 22.0303 33.005C21.7606 32.9369 21.5965 32.6604 21.6649 32.3881L26.3619 13.5028C26.4293 13.2304 26.699 13.0638 26.9727 13.1339C27.2415 13.203 27.4045 13.4784 27.3371 13.7508ZM39.6092 23.1675C39.6042 23.1959 39.5901 23.2224 39.58 23.2498C39.5669 23.2844 39.5559 23.3179 39.5347 23.3494C39.5297 23.3565 39.5297 23.3646 39.5247 23.3707C39.5136 23.386 39.4965 23.3921 39.4844 23.4053C39.4623 23.4297 39.4452 23.4592 39.417 23.4795L30.8877 29.7875C30.7971 29.8535 30.6934 29.886 30.5898 29.886C30.4358 29.886 30.2818 29.8139 30.1842 29.6787C30.0201 29.4511 30.0685 29.134 30.2919 28.9683L38.2667 23.0699L30.2919 17.1715C30.0674 17.0059 30.0191 16.6878 30.1842 16.4611C30.3492 16.2345 30.6632 16.1868 30.8877 16.3514L39.417 22.6604C39.4381 22.6766 39.4512 22.7 39.4693 22.7193C39.4884 22.7376 39.5096 22.7488 39.5257 22.7701C39.5307 22.7772 39.5307 22.7854 39.5357 22.7915C39.5569 22.822 39.5679 22.8555 39.581 22.8911C39.5921 22.9185 39.6052 22.9449 39.6102 22.9734C39.6173 23.0059 39.6142 23.0374 39.6142 23.0709C39.6142 23.1045 39.6162 23.135 39.6092 23.1675Z"
                                          fill="#222222" />
                                      <path
                                          d="M3.82175 4.04768C4.12134 4.04768 4.3642 3.80244 4.3642 3.49992C4.3642 3.19739 4.12134 2.95215 3.82175 2.95215C3.52216 2.95215 3.2793 3.19739 3.2793 3.49992C3.2793 3.80244 3.52216 4.04768 3.82175 4.04768Z"
                                          fill="#222222" />
                                  </svg>
                                  <p>
                                      {!! trans('partials/results.item__stage9') !!}
                                  </p>
                              </li>
                          </ul>

                          {{-- <p class="text__bold text-center">Над проектом работали:</p> --}}
                          <ol class="item__works">
                              <li>Project Manager</li>
                              <li>{{ trans('partials/results.works_marketing') }}</li>
                              <li>{{ trans('partials/results.works_designer') }}</li>
                              <ul class="item__results">
                                  <li>
                                      <p class="item__results-digit">32 +</p>
                                      <p class="item__results-descr">{!! trans('partials/results.orders_day') !!}</p>
                                  </li>
                                  <li>
                                      <p class="item__results-digit">902 +</p>
                                      <p class="item__results-descr">{!! trans('partials/results.orders_month') !!} </p>
                                  </li>
                                  <li>
                                      <p class="item__results-digit">35 %</p>
                                      <p class="item__results-descr">{{ trans('partials/results.users_returned') }}
                                      </p>
                                  </li>
                                  <li>
                                      <p class="item__results-digit">13,10 %</p>
                                      <p class="item__results-descr">{{ trans('partials/results.conversion_ratio') }}
                                      </p>
                                      {{-- <p class="item__results-descr__more">
                            (в разных сферах <b>средний коэффициент конверсии</b> составляет всего 2,35%)
                          </p> --}}
                                  </li>
                              </ul>
                              <li>{{ trans('partials/results.works_front') }}</li>
                              <li>{{ trans('partials/results.works_front') }}</li>
                              <li>{{ trans('partials/results.works_seo') }}</li>
                              <li>{{ trans('partials/results.works_qna') }}</li>
                          </ol>

                          {{-- <p class="text__bold text-center">Успешные результаты продвижения:</p> --}}


                          <div class="item__section">
                              <p class="item__section-text">
                                  {{ trans('partials/results.organic_traffic') }}
                              </p>
                              <div class="item__section-cont">
                                  <div class="item__section-image">
                                      <img data-src="/img/results/slider__graphic-1.png"
                                          class="lazy item__section-descktop" alt="slider__graphic-1">
                                      <img data-src="/img/results/planetakolgot__graph-mobile-1.1.png"
                                          class="lazy item__section-mobile" alt="slider__graphic-1">
                                      <p class="item__section-image__text">
                                          {{ trans('partials/results.period1') }}
                                      </p>
                                      <img data-src="/img/results/planetakolgot__graph-mobile-1.2.png"
                                          class="lazy item__section-mobile" alt="slider__graphic-mpbile-1.2">
                                  </div>
                                  <div class="item__section-wind">
                                      <p class="bold">{{ trans('partials/results.per_november') }}</p>
                                      <p><span>18 195</span> {{ trans('partials/results.visits') }}</p>
                                      <p>{{ trans('partials/results.from') }} <span>32</span>
                                          {{ trans('partials/results.orders_per_day') }}</p>
                                      <p><span>2 011</span> {{ trans('partials/results.conversions') }}</p>
                                  </div>
                              </div>
                          </div>
                          <div class="item__section item__section-orange">
                              <p class="item__section-text">
                                  {{ trans('partials/results.top10') }}
                              </p>
                              <div class="item__section-cont">
                                  <div class="item__section-image">
                                      <img data-src="/img/results/slider__graphic-2.png"
                                          class="lazy item__section-descktop" alt="slider__graphic-1">
                                      <img data-src="/img/results/planetakolgot__graph-mobile-2.1.png"
                                          class="lazy item__section-mobile" alt="slider__graphic-1">
                                      <p class="item__section-image__text">
                                          {{ trans('partials/results.period2') }}
                                      </p>
                                      <img data-src="/img/results/planetakolgot__graph-mobile-2.2.png"
                                          class="lazy item__section-mobile" alt="slider__graphic-1">
                                  </div>
                                  <div class="item__section-wind">
                                      <p class="bold">{{ trans('partials/results.per_november') }}</p>
                                      <p><span>677</span> {{ trans('partials/results.top3') }}</p>
                                      <p><span>1 266</span> {{ trans('partials/results.top_10') }}</p>
                                      <p><span>1 807</span> {{ trans('partials/results.top_30') }}</p>
                                  </div>
                              </div>
                          </div>
                          <div class="item__section item__section-green">
                              <p class="item__section-text">
                                  {{ trans('partials/results.reference_profile') }}
                              </p>
                              <div class="item__section-cont">
                                  <div class="item__section-image">
                                      <img data-src="/img/results/slider__graphic-3.png"
                                          class="lazy item__section-descktop" alt="slider__graphic-3">
                                      <img data-src="/img/results/planetakolgot__graph-mobile-3.1.png"
                                          class="lazy item__section-mobile" alt="slider__graphic-3">
                                      <p class="item__section-image__text">
                                          {{ trans('partials/results.period3') }}
                                      </p>
                                  </div>
                                  <div class="item__section-wind">
                                      <p class="bold">{{ trans('partials/results.per_november') }}</p>
                                      <p><span>371</span> {{ trans('partials/results.domen') }}</p>
                                      <p><span>1 524</span> {{ trans('partials/results.pages') }}</p>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="item-popup js-shape-close" id="popoup-2">
              <div class="popupShape"></div>
              <div class="container">
                  <div class="item">
                      <button class="item-popup-close js-close"></button>
                      <div class="item__top row">
                          <div class="col-xs-12 col-md-6">
                              <p class="item__name item__name--phone">
                                  HOZSKLAD.com.ua
                              </p>
                              <div class="item__poster">
                                  <picture>
                                      <source type="image/webp" data-srcset="/img/results/hozsklad_poster.webp">
                                      <img data-src="/img/results/hozsklad_poster.png" alt="hozsklad_poster"
                                          class="lazy desctop">
                                  </picture>
                              </div>
                          </div>
                          <div class="col-xs-12 col-md-6">
                              <div class="item__info">
                                  <p class="item__name">
                                      HOZSKLAD.com.ua
                                  </p>
                                  <div class="item__text">
                                      <p class="text__bold">{{ trans('partials/results.sold_services') }}</p>
                                      <ul class="item__services">
                                          <li>{{ trans('partials/results.service_marketing') }}</li>
                                          <li>{{ trans('partials/results.interface_design') }}</li>
                                          <li>{{ trans('partials/results.design_develop') }}</li>
                                          <li>{{ trans('partials/results.seo') }}</li>
                                          <li>{{ trans('partials/results.tech_supp') }}</li>
                                      </ul>
                                      <div class="item__cell__footer">
                                          <p class="text__bold">{{ trans('partials/results.result') }}</p>
                                          <div class="row">
                                              <div class="col-xs-12">
                                                  <p class="text__bold">{{ trans('partials/results.time_inside') }}
                                                  </p>
                                                  <ul class="item__services item__services-termin">
                                                      <li> {{ trans('partials/results.7_month') }} </li>
                                                  </ul>
                                              </div>
                                              <div class="col-xs-12">
                                                  <p class="text__bold">{{ trans('partials/results.technologies') }}
                                                  </p>
                                                  <ul class="item__tech">
                                                      <li><img class="lazy" data-src="/img/tech/laravel.png"
                                                              alt="laravel"></li>
                                                      <li><img class="lazy" data-src="/img/tech/vue.png"
                                                              alt="vue"></li>
                                                      <li><img class="lazy" data-src="/img/tech/bootstrap.png"
                                                              alt="bootstrap"></li>
                                                  </ul>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="item__footer">

                          {{-- <p class="text__bold text-center">Этапы работ:</p> --}}
                          <ul class="item__stages">
                              <li>
                                  <div class="decor"></div>
                                  <svg width="44" height="43" viewBox="0 0 44 43" fill="none"
                                      xmlns="http://www.w3.org/2000/svg">
                                      <path
                                          d="M12.3733 5.23594C13.1814 5.23594 13.8365 4.58085 13.8365 3.77275C13.8365 2.96466 13.1814 2.30957 12.3733 2.30957C11.5652 2.30957 10.9102 2.96466 10.9102 3.77275C10.9102 4.58085 11.5652 5.23594 12.3733 5.23594Z"
                                          fill="#222222" />
                                      <path
                                          d="M4.5042 5.23594C5.31229 5.23594 5.96738 4.58085 5.96738 3.77275C5.96738 2.96466 5.31229 2.30957 4.5042 2.30957C3.69611 2.30957 3.04102 2.96466 3.04102 3.77275C3.04102 4.58085 3.69611 5.23594 4.5042 5.23594Z"
                                          fill="#222222" />
                                      <path
                                          d="M24.6442 32.953C24.6442 32.6603 24.6546 32.3573 24.686 32.0646C25.0936 27.3929 28.6052 23.5782 33.2352 22.7943V1.46318C33.2352 0.658432 32.5767 0 31.772 0H28.7411V1.13919C30.2043 1.48409 31.1031 2.94727 30.7582 4.41045C30.4133 5.87364 28.9501 6.77245 27.4869 6.42756C26.0238 6.08266 25.125 4.61948 25.4698 3.1563C25.7102 2.15297 26.4836 1.37957 27.4869 1.13919V0H20.8713V1.13919C22.3345 1.48409 23.2333 2.94727 22.8884 4.41045C22.5435 5.87364 21.0803 6.77245 19.6171 6.42756C18.1539 6.08266 17.2551 4.61948 17.6 3.1563C17.8404 2.15297 18.6138 1.37957 19.6171 1.13919V0H13.0014V1.13919C14.4646 1.48409 15.3634 2.94727 15.0185 4.41045C14.6736 5.87364 13.2105 6.77245 11.7473 6.42756C10.2841 6.08266 9.38528 4.61948 9.73017 3.1563C9.97055 2.15297 10.7439 1.37957 11.7473 1.13919V0H5.13159V1.13919C6.59478 1.48409 7.49359 2.94727 7.1487 4.41045C6.8038 5.87364 5.34062 6.77245 3.87744 6.42756C2.41425 6.08266 1.51544 4.61948 1.86033 3.1563C2.10071 2.15297 2.87411 1.37957 3.87744 1.13919V0H1.46318C0.658433 0 0 0.658432 0 1.46318V36.9976C0 37.8024 0.658433 38.4608 1.46318 38.4608H26.2432C25.1981 36.8095 24.6442 34.8969 24.6442 32.953ZM5.12114 13.9107H28.114C28.4589 13.9107 28.7411 14.1929 28.7411 14.5378C28.7411 14.8827 28.4589 15.1649 28.114 15.1649H5.12114C4.77625 15.1649 4.49406 14.8827 4.49406 14.5378C4.49406 14.1824 4.77625 13.9107 5.12114 13.9107ZM5.12114 19.6485H28.114C28.4589 19.6485 28.7411 19.9306 28.7411 20.2755C28.7411 20.6204 28.4589 20.9026 28.114 20.9026H5.12114C4.77625 20.9026 4.49406 20.6204 4.49406 20.2755C4.49406 19.9306 4.77625 19.6485 5.12114 19.6485ZM5.12114 25.3967H25.5012C25.8461 25.3967 26.1283 25.6789 26.1283 26.0238C26.1283 26.3687 25.8461 26.6508 25.5012 26.6508H5.12114C4.77625 26.6508 4.49406 26.3687 4.49406 26.0238C4.49406 25.6789 4.77625 25.3967 5.12114 25.3967ZM23.1392 32.3991H5.12114C4.77625 32.3991 4.49406 32.1169 4.49406 31.772C4.49406 31.4271 4.77625 31.1449 5.12114 31.1449H23.1392C23.4841 31.1449 23.7663 31.4271 23.7663 31.772C23.7663 32.1169 23.4841 32.3991 23.1392 32.3991Z"
                                          fill="#222222" />
                                      <path
                                          d="M28.1155 5.23594C28.9236 5.23594 29.5787 4.58085 29.5787 3.77275C29.5787 2.96466 28.9236 2.30957 28.1155 2.30957C27.3074 2.30957 26.6523 2.96466 26.6523 3.77275C26.6523 4.58085 27.3074 5.23594 28.1155 5.23594Z"
                                          fill="#222222" />
                                      <path
                                          d="M38.0847 24.4559C33.392 22.721 28.1873 25.1248 26.4524 29.8174C26.1702 30.5699 25.9925 31.3642 25.9298 32.169C25.9089 32.4302 25.8984 32.6915 25.8984 32.9528C25.8984 37.9485 29.9535 42.0036 34.9493 42.0036C39.945 42.0036 44.0001 37.9485 44.0001 32.9528C44.0001 29.159 41.6381 25.7728 38.0847 24.4559ZM39.5897 30.7162L39.5792 30.7267L34.249 36.0568C34.0087 36.2972 33.6115 36.2972 33.3607 36.0568L30.3298 33.026C30.0894 32.7856 30.0894 32.3884 30.3298 32.1376C30.5702 31.8972 30.9673 31.8972 31.2182 32.1376L33.8101 34.7295L38.7013 29.8383C38.9417 29.5875 39.3388 29.5875 39.5897 29.8279C39.8196 30.0682 39.83 30.4654 39.5897 30.7162Z"
                                          fill="#222222" />
                                      <path
                                          d="M20.2444 5.23594C21.0525 5.23594 21.7076 4.58085 21.7076 3.77275C21.7076 2.96466 21.0525 2.30957 20.2444 2.30957C19.4363 2.30957 18.7812 2.96466 18.7812 3.77275C18.7812 4.58085 19.4363 5.23594 20.2444 5.23594Z"
                                          fill="#222222" />
                                  </svg>
                                  <p>
                                      {!! trans('partials/results.item__stage1') !!}
                                  </p>
                              </li>
                              <li>
                                  <div class="decor"></div>
                                  <svg width="44" height="42" viewBox="0 0 44 42" fill="none"
                                      xmlns="http://www.w3.org/2000/svg">
                                      <path
                                          d="M11.9494 13.0988L6.34381 14.6681C5.53673 14.8952 5.05688 15.7617 5.27549 16.6068L7.62524 25.7755C7.84247 26.6205 8.67293 27.1221 9.48001 26.895L10.7353 26.5429L15.8514 40.822C16.169 41.6268 16.9403 42.1413 17.5659 41.966C18.1901 41.7906 19.2131 41.5046 19.8387 41.3293C20.4629 41.154 20.885 40.3061 20.7764 39.4424L18.3455 24.1674L32.7011 26.8074L29.5992 14.7069L26.4974 2.60791L13.6584 13.8576C13.3298 13.2411 12.6327 12.9077 11.9494 13.0988Z"
                                          fill="#222222" />
                                      <path
                                          d="M1.3017 19.7897C0.285635 20.1878 -0.24921 21.5588 0.11377 22.9671C0.474 24.374 1.59181 25.2852 2.66288 25.0969C2.94061 25.837 3.70507 26.261 4.45715 26.0512L6.45216 25.4921L4.39528 17.4688L2.39889 18.0263C1.64681 18.2376 1.18758 19.0036 1.3017 19.7897Z"
                                          fill="#222222" />
                                      <path
                                          d="M32.8111 9.14087L30.768 1.17355C30.5535 0.329964 29.7231 -0.171586 28.9146 0.0540396L28.6259 0.135955C27.8188 0.36158 27.3389 1.22959 27.5562 2.07317L33.8753 26.7181C34.0912 27.5617 34.9216 28.0633 35.7287 27.8362L36.0174 27.7557C36.8245 27.5301 37.3057 26.6621 37.0871 25.8185L35.0454 17.8512C35.9913 17.1973 36.3172 15.1667 35.7576 12.9837C35.198 10.8007 33.9427 9.21416 32.8111 9.14087Z"
                                          fill="#222222" />
                                      <path
                                          d="M37.9959 5.939C38.3067 5.66883 38.6765 5.46045 38.9419 5.18596C39.2017 4.90141 39.3901 4.58238 39.5235 4.28058C39.8026 3.68993 39.8356 3.14096 39.8356 3.14096L39.7269 3.03174C39.7269 3.03174 39.2045 3.08635 38.6504 3.40251C38.3685 3.55197 38.0688 3.76035 37.8076 4.04202C37.5546 4.33232 37.3703 4.72752 37.1242 5.06093C36.148 6.40463 35.2832 7.85898 35.2832 7.85898L35.3932 7.9682C35.3918 7.96964 36.7502 7.00965 37.9959 5.939Z"
                                          fill="#222222" />
                                      <path
                                          d="M42.2467 18.0728C41.8837 17.9736 41.463 17.9866 41.067 17.9161C39.4749 17.6402 37.8401 17.5181 37.8401 17.5181L37.7988 17.6704C37.7988 17.6704 39.2439 18.4781 40.7315 19.1319C41.1041 19.2915 41.452 19.5386 41.8109 19.6565C42.1711 19.7643 42.5299 19.7873 42.8475 19.77C43.4786 19.7542 43.9571 19.5286 43.9571 19.5286L43.9997 19.3777C43.9997 19.3777 43.7082 18.9192 43.183 18.5542C42.9218 18.3631 42.6069 18.1834 42.2467 18.0728Z"
                                          fill="#222222" />
                                      <path
                                          d="M41.9823 10.5848C41.6757 10.5575 41.332 10.5704 40.9827 10.6667C40.6376 10.7745 40.2994 11.0073 39.9392 11.1568C38.5038 11.7618 37.1055 12.5235 37.1055 12.5235L37.144 12.6758C37.144 12.6758 38.7183 12.6054 40.2513 12.3783C40.6349 12.3194 41.0391 12.3453 41.3897 12.2576C41.739 12.1599 42.0428 11.9889 42.2931 11.8064C42.8018 11.4586 43.0836 11.0116 43.0836 11.0116L43.0493 10.8593C43.0493 10.8593 42.59 10.6207 41.9823 10.5848Z"
                                          fill="#222222" />
                                  </svg>
                                  <p>
                                      {!! trans('partials/results.item__stage2') !!}
                                  </p>
                              </li>
                              <li>
                                  <div class="decor"></div>
                                  <svg width="54" height="40" viewBox="0 0 54 40" fill="none"
                                      xmlns="http://www.w3.org/2000/svg">
                                      <path d="M32.6925 27.1162H21.3105V34.4235H32.6925V27.1162Z" fill="#222222" />
                                      <path d="M49.091 27.1162H37.709V34.4235H49.091V27.1162Z" fill="#222222" />
                                      <path
                                          d="M54 5.38496V1.73076C54 0.776533 53.2519 0 52.3327 0H1.66728C0.748055 0 0 0.776533 0 1.73076V5.38496H54ZM12.8403 2.4046H13.7306C14.0374 2.4046 14.2864 2.66306 14.2864 2.98152C14.2864 3.29998 14.0374 3.55844 13.7306 3.55844H12.8403C12.5335 3.55844 12.2845 3.29998 12.2845 2.98152C12.2845 2.66306 12.5335 2.4046 12.8403 2.4046ZM8.59652 2.4046H9.48796C9.79474 2.4046 10.0437 2.66306 10.0437 2.98152C10.0437 3.29998 9.79474 3.55844 9.48796 3.55844H8.59652C8.28974 3.55844 8.04076 3.29998 8.04076 2.98152C8.04076 2.66306 8.28974 2.4046 8.59652 2.4046ZM4.35272 2.4046H5.24305C5.54983 2.4046 5.79881 2.66306 5.79881 2.98152C5.79881 3.29998 5.54983 3.55844 5.24305 3.55844H4.35272C4.04594 3.55844 3.79696 3.29998 3.79696 2.98152C3.79696 2.66306 4.04594 2.4046 4.35272 2.4046Z"
                                          fill="#222222" />
                                      <path d="M16.2921 27.1162H4.91016V34.4235H16.2921V27.1162Z" fill="#222222" />
                                      <path d="M49.0932 10.6748H4.91016V23.6555H49.0932V10.6748Z" fill="#222222" />
                                      <path
                                          d="M0 6.53857V38.2691C0 39.2233 0.748055 39.9999 1.66728 39.9999H52.3327C53.2519 39.9999 54 39.2233 54 38.2691V6.53857H0ZM17.402 35.0003C17.402 35.3188 17.153 35.5772 16.8462 35.5772H4.35272C4.04594 35.5772 3.79696 35.3188 3.79696 35.0003V26.5392C3.79696 26.2207 4.04594 25.9623 4.35272 25.9623H16.8462C17.153 25.9623 17.402 26.2207 17.402 26.5392V35.0003ZM33.8025 35.0003C33.8025 35.3188 33.5535 35.5772 33.2468 35.5772H20.7532C20.4465 35.5772 20.1975 35.3188 20.1975 35.0003V26.5392C20.1975 26.2207 20.4465 25.9623 20.7532 25.9623H33.2468C33.5535 25.9623 33.8025 26.2207 33.8025 26.5392V35.0003ZM50.203 35.0003C50.203 35.3188 49.9541 35.5772 49.6473 35.5772H37.1538C36.847 35.5772 36.598 35.3188 36.598 35.0003V26.5392C36.598 26.2207 36.847 25.9623 37.1538 25.9623H49.6473C49.9541 25.9623 50.203 26.2207 50.203 26.5392V35.0003ZM50.203 24.2315C50.203 24.55 49.9541 24.8084 49.6473 24.8084H4.35272C4.04594 24.8084 3.79696 24.55 3.79696 24.2315V10.097C3.79696 9.77855 4.04594 9.52009 4.35272 9.52009H49.6473C49.9541 9.52009 50.203 9.77855 50.203 10.097V24.2315Z"
                                          fill="#222222" />
                                  </svg>
                                  <p>
                                      {!! trans('partials/results.item__stage3') !!}
                                  </p>
                              </li>
                              <li>
                                  <div class="decor"></div>
                                  <svg width="45" height="44" viewBox="0 0 45 44" fill="none"
                                      xmlns="http://www.w3.org/2000/svg">
                                      <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M15.75 10.9824V17.7379L21.7499 20.7724V13.41L18.75 12.1962L15.75 10.9824Z"
                                          fill="#222222" />
                                      <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M22.5008 6.91699L16.8301 9.78458L22.5008 12.0794L28.1714 9.78458L22.5008 6.91699Z"
                                          fill="#222222" />
                                      <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M23.25 13.41V20.7724L29.2499 17.7379V10.9824L26.25 12.1962L23.25 13.41Z"
                                          fill="#222222" />
                                      <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M40.4995 7.5862H38.9995V9.10344C38.9995 9.5222 38.6643 9.86206 38.2495 9.86206C37.8348 9.86206 37.4996 9.5222 37.4996 9.10344V7.5862H35.9996C35.5848 7.5862 35.2496 7.24634 35.2496 6.82758C35.2496 6.40882 35.5848 6.06896 35.9996 6.06896H37.4996V4.55172C37.4996 4.13296 37.8348 3.7931 38.2495 3.7931C38.6643 3.7931 38.9995 4.13296 38.9995 4.55172V6.06896H40.4995C40.9143 6.06896 41.2495 6.40882 41.2495 6.82758C41.2495 7.24634 40.9143 7.5862 40.4995 7.5862ZM40.4995 22H36.7496C36.3348 22 35.9996 21.6601 35.9996 21.2414C35.9996 20.8226 36.3348 20.4827 36.7496 20.4827H40.4995C40.9143 20.4827 41.2495 20.8226 41.2495 21.2414C41.2495 21.6601 40.9143 22 40.4995 22ZM40.4995 25.0345H38.9995C38.5848 25.0345 38.2495 24.6946 38.2495 24.2758C38.2495 23.8571 38.5848 23.5172 38.9995 23.5172H40.4995C40.9143 23.5172 41.2495 23.8571 41.2495 24.2758C41.2495 24.6946 40.9143 25.0345 40.4995 25.0345ZM35.9996 25.0345H32.9996C32.5849 25.0345 32.2496 24.6946 32.2496 24.2758C32.2496 23.8571 32.5849 23.5172 32.9996 23.5172H35.9996C36.4143 23.5172 36.7496 23.8571 36.7496 24.2758C36.7496 24.6946 36.4143 25.0345 35.9996 25.0345ZM30.7496 18.2069C30.7496 18.4944 30.5891 18.7569 30.3349 18.8859L22.835 22.679C22.8245 22.6843 22.8117 22.682 22.7997 22.6873C22.7037 22.7298 22.6032 22.7586 22.4997 22.7586C22.3962 22.7586 22.2957 22.7298 22.1997 22.6873C22.1877 22.682 22.175 22.6843 22.1645 22.679L14.6646 18.8859C14.4103 18.7569 14.2498 18.4944 14.2498 18.2069V11.6365C14.2498 10.9689 14.0668 10.1807 14.3631 9.55103C14.5768 9.09965 15.1588 8.93351 15.5803 8.72034L19.1833 6.89813L22.1645 5.39C22.3752 5.28379 22.6242 5.28379 22.835 5.39L28.5432 8.27731C29.1514 8.58455 29.8511 8.77496 30.3686 9.24303C30.8434 9.67165 30.7496 10.1799 30.7496 10.7633V14.875V18.2069ZM11.9999 5.31034H8.2499C7.83516 5.31034 7.49991 4.97048 7.49991 4.55172C7.49991 4.13296 7.83516 3.7931 8.2499 3.7931H11.9999C12.4146 3.7931 12.7499 4.13296 12.7499 4.55172C12.7499 4.97048 12.4146 5.31034 11.9999 5.31034ZM11.9999 8.34482H10.4999C10.0851 8.34482 9.74989 8.00496 9.74989 7.5862C9.74989 7.16744 10.0851 6.82758 10.4999 6.82758H11.9999C12.4146 6.82758 12.7499 7.16744 12.7499 7.5862C12.7499 8.00496 12.4146 8.34482 11.9999 8.34482ZM11.0301 23.7395C11.3234 24.0361 11.3234 24.5156 11.0301 24.8122C10.8839 24.9601 10.6919 25.0345 10.4999 25.0345C10.3079 25.0345 10.1159 24.9601 9.96963 24.8122L8.2499 23.0727L6.53017 24.8122C6.38393 24.9601 6.19193 25.0345 5.99993 25.0345C5.80793 25.0345 5.61593 24.9601 5.46969 24.8122C5.17644 24.5156 5.17644 24.0361 5.46969 23.7395L7.18942 22L5.46969 20.2605C5.17644 19.9639 5.17644 19.4844 5.46969 19.1878C5.76293 18.8912 6.23693 18.8912 6.53017 19.1878L8.2499 20.9273L9.96963 19.1878C10.2629 18.8912 10.7369 18.8912 11.0301 19.1878C11.3234 19.4844 11.3234 19.9639 11.0301 20.2605L9.31039 22L11.0301 23.7395ZM3.74996 7.5862C3.74996 7.16744 4.0852 6.82758 4.49995 6.82758H7.49991C7.91466 6.82758 8.2499 7.16744 8.2499 7.5862C8.2499 8.00496 7.91466 8.34482 7.49991 8.34482H4.49995C4.0852 8.34482 3.74996 8.00496 3.74996 7.5862ZM4.49995 3.7931H5.24994C5.66468 3.7931 5.99993 4.13296 5.99993 4.55172C5.99993 4.97048 5.66468 5.31034 5.24994 5.31034H4.49995C4.0852 5.31034 3.74996 4.97048 3.74996 4.55172C3.74996 4.13296 4.0852 3.7931 4.49995 3.7931ZM32.9996 20.4827H33.7496C34.1643 20.4827 34.4996 20.8226 34.4996 21.2414C34.4996 21.6601 34.1643 22 33.7496 22H32.9996C32.5849 22 32.2496 21.6601 32.2496 21.2414C32.2496 20.8226 32.5849 20.4827 32.9996 20.4827ZM41.626 0H3.37346C1.51348 0 0 1.5309 0 3.41303V27.3103H44.9995V3.41303C44.9995 1.5309 43.486 0 41.626 0Z"
                                          fill="#222222" />
                                      <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M26.7312 35.6563C26.6314 37.4231 27.3934 39.1588 28.7779 40.2065H16.2231C17.6075 39.1588 18.3703 37.4223 18.2698 35.6547L26.7312 35.6563ZM0 32.2425C0 34.1238 1.51348 35.6547 3.37346 35.6547H16.7653C16.8718 36.9838 16.3026 38.2955 15.2481 39.0473L13.8981 40.0107C13.8118 40.0707 13.7398 40.145 13.6806 40.2262C12.7386 40.3263 11.9999 41.1244 11.9999 42.103C11.9999 43.1484 12.8406 43.9996 13.8748 43.9996H31.1246C32.1589 43.9996 32.9996 43.1484 32.9996 42.103C32.9996 41.1251 32.2616 40.3271 31.3204 40.2262C31.2626 40.1458 31.1906 40.0737 31.1066 40.013L29.7536 39.0488C28.6992 38.297 28.1284 36.9846 28.2357 35.6547H41.626C43.4867 35.6547 44.9995 34.1238 44.9995 32.2425V28.8271H0V32.2425Z"
                                          fill="#222222" />
                                  </svg>
                                  <p>
                                      4{!! trans('partials/results.item__stage4') !!}
                                  </p>
                              </li>
                              <li>
                                  <div class="decor"></div>
                                  <svg width="41" height="40" viewBox="0 0 41 40" fill="none"
                                      xmlns="http://www.w3.org/2000/svg">
                                      <path
                                          d="M22.6964 34.8148C22.6962 35.0112 22.619 35.1995 22.4817 35.3384C22.3445 35.4772 22.1584 35.5553 21.9643 35.5556H19.0357C18.8415 35.5556 18.6553 35.4775 18.518 35.3386C18.3807 35.1997 18.3036 35.0113 18.3036 34.8148C18.3036 34.6184 18.3807 34.4299 18.518 34.291C18.6553 34.1521 18.8415 34.0741 19.0357 34.0741H21.9643C22.1584 34.0743 22.3445 34.1524 22.4817 34.2913C22.619 34.4301 22.6962 34.6184 22.6964 34.8148ZM25.3366 19.8579L25.9911 20.7407H29.7146L27.0893 18.0845L25.3366 19.8579ZM9.13669 20.7407H4.39286V10.3704H36.6071V20.7407H31.7854L27.607 16.5132C27.539 16.4445 27.4583 16.3899 27.3695 16.3527C27.2806 16.3154 27.1854 16.2963 27.0893 16.2963C26.9931 16.2963 26.8979 16.3154 26.8091 16.3527C26.7203 16.3899 26.6396 16.4445 26.5716 16.5132L24.4491 18.6606L21.8179 15.1111C21.7497 15.0191 21.6612 14.9444 21.5596 14.893C21.4579 14.8416 21.3458 14.8148 21.2321 14.8148C21.1185 14.8148 21.0064 14.8416 20.9047 14.893C20.8031 14.9444 20.7146 15.0191 20.6464 15.1111L18.3745 18.1759L15.2427 13.6493C15.1752 13.5517 15.0854 13.472 14.981 13.417C14.8766 13.362 14.7606 13.3333 14.6429 13.3333C14.5251 13.3333 14.4092 13.362 14.3047 13.417C14.2003 13.472 14.1106 13.5517 14.043 13.6493L9.13669 20.7407ZM24.1607 14.0741C24.1607 14.2206 24.2037 14.3638 24.2841 14.4856C24.3646 14.6074 24.4789 14.7024 24.6127 14.7584C24.7465 14.8145 24.8937 14.8292 25.0357 14.8006C25.1777 14.772 25.3082 14.7015 25.4106 14.5979C25.513 14.4943 25.5827 14.3623 25.6109 14.2186C25.6392 14.0749 25.6247 13.926 25.5693 13.7906C25.5139 13.6553 25.42 13.5396 25.2996 13.4582C25.1792 13.3768 25.0377 13.3333 24.8929 13.3333C24.6987 13.3333 24.5125 13.4114 24.3752 13.5503C24.2379 13.6892 24.1607 13.8776 24.1607 14.0741ZM18.3036 20.7407H24.1607L21.2321 16.7901L18.3036 20.7407ZM0 5.92593H41V39.2593C40.9998 39.4556 40.9226 39.6439 40.7853 39.7828C40.6481 39.9217 40.462 39.9998 40.2679 40H0.732143C0.538033 39.9998 0.351937 39.9217 0.21468 39.7828C0.0774242 39.6439 0.000218005 39.4556 0 39.2593V5.92593ZM10.25 28.8889C10.25 28.6924 10.1729 28.504 10.0356 28.3651C9.89826 28.2262 9.71203 28.1481 9.51786 28.1481H8.05357C7.8594 28.1481 7.67317 28.2262 7.53587 28.3651C7.39857 28.504 7.32143 28.6924 7.32143 28.8889C7.32143 29.0853 7.39857 29.2738 7.53587 29.4127C7.67317 29.5516 7.8594 29.6296 8.05357 29.6296H9.51786C9.71203 29.6296 9.89826 29.5516 10.0356 29.4127C10.1729 29.2738 10.25 29.0853 10.25 28.8889ZM24.1607 34.8148C24.16 34.2257 23.9284 33.6608 23.5166 33.2442C23.1049 32.8276 22.5466 32.5933 21.9643 32.5926H19.0357C18.4532 32.5926 17.8945 32.8267 17.4826 33.2435C17.0707 33.6602 16.8393 34.2254 16.8393 34.8148C16.8393 35.4042 17.0707 35.9694 17.4826 36.3862C17.8945 36.8029 18.4532 37.037 19.0357 37.037H21.9643C22.5466 37.0364 23.1049 36.802 23.5166 36.3854C23.9284 35.9688 24.16 35.404 24.1607 34.8148ZM29.2857 28.8889C29.2857 28.6924 29.2086 28.504 29.0713 28.3651C28.934 28.2262 28.7477 28.1481 28.5536 28.1481H12.4464C12.2523 28.1481 12.066 28.2262 11.9287 28.3651C11.7914 28.504 11.7143 28.6924 11.7143 28.8889C11.7143 29.0853 11.7914 29.2738 11.9287 29.4127C12.066 29.5516 12.2523 29.6296 12.4464 29.6296H28.5536C28.7477 29.6296 28.934 29.5516 29.0713 29.4127C29.2086 29.2738 29.2857 29.0853 29.2857 28.8889ZM16.1071 26.6667H24.8929C25.087 26.6667 25.2733 26.5886 25.4106 26.4497C25.5479 26.3108 25.625 26.1224 25.625 25.9259C25.625 25.7295 25.5479 25.5411 25.4106 25.4021C25.2733 25.2632 25.087 25.1852 24.8929 25.1852H16.1071C15.913 25.1852 15.7267 25.2632 15.5894 25.4021C15.4521 25.5411 15.375 25.7295 15.375 25.9259C15.375 26.1224 15.4521 26.3108 15.5894 26.4497C15.7267 26.5886 15.913 26.6667 16.1071 26.6667ZM33.6786 28.8889C33.6786 28.6924 33.6014 28.504 33.4641 28.3651C33.3268 28.2262 33.1406 28.1481 32.9464 28.1481H31.4821C31.288 28.1481 31.1017 28.2262 30.9644 28.3651C30.8271 28.504 30.75 28.6924 30.75 28.8889C30.75 29.0853 30.8271 29.2738 30.9644 29.4127C31.1017 29.5516 31.288 29.6296 31.4821 29.6296H32.9464C33.1406 29.6296 33.3268 29.5516 33.4641 29.4127C33.6014 29.2738 33.6786 29.0853 33.6786 28.8889ZM2.92857 21.4815C2.92857 21.6779 3.00571 21.8663 3.14301 22.0053C3.28031 22.1442 3.46654 22.2222 3.66071 22.2222H37.3393C37.5335 22.2222 37.7197 22.1442 37.857 22.0053C37.9943 21.8663 38.0714 21.6779 38.0714 21.4815V9.62963C38.0714 9.43317 37.9943 9.24476 37.857 9.10585C37.7197 8.96693 37.5335 8.88889 37.3393 8.88889H3.66071C3.46654 8.88889 3.28031 8.96693 3.14301 9.10585C3.00571 9.24476 2.92857 9.43317 2.92857 9.62963V21.4815ZM10.924 20.7407H16.4732L17.45 19.4231L14.6429 15.3657L10.924 20.7407ZM41 0.740741V4.44444H0V0.740741C0.000218005 0.544352 0.0774242 0.356069 0.21468 0.217201C0.351937 0.0783334 0.538033 0.000220566 0.732143 0H40.2679C40.462 0.000220566 40.6481 0.0783334 40.7853 0.217201C40.9226 0.356069 40.9998 0.544352 41 0.740741ZM2.92857 2.22222C2.92857 2.07572 2.88563 1.9325 2.80518 1.81069C2.72473 1.68887 2.61039 1.59393 2.47661 1.53787C2.34283 1.4818 2.19562 1.46713 2.05359 1.49571C1.91157 1.5243 1.78112 1.59485 1.67873 1.69844C1.57633 1.80203 1.5066 1.93402 1.47835 2.07771C1.4501 2.2214 1.4646 2.37034 1.52002 2.50569C1.57543 2.64104 1.66927 2.75673 1.78967 2.83813C1.91007 2.91952 2.05162 2.96296 2.19643 2.96296C2.3906 2.96296 2.57683 2.88492 2.71413 2.746C2.85143 2.60709 2.92857 2.41868 2.92857 2.22222ZM5.85714 2.22222C5.85714 2.07572 5.8142 1.9325 5.73375 1.81069C5.65331 1.68887 5.53896 1.59393 5.40518 1.53787C5.2714 1.4818 5.12419 1.46713 4.98217 1.49571C4.84014 1.5243 4.70969 1.59485 4.6073 1.69844C4.50491 1.80203 4.43517 1.93402 4.40693 2.07771C4.37867 2.2214 4.39317 2.37034 4.44859 2.50569C4.504 2.64104 4.59784 2.75673 4.71824 2.83813C4.83864 2.91952 4.9802 2.96296 5.125 2.96296C5.31918 2.96296 5.5054 2.88492 5.6427 2.746C5.78001 2.60709 5.85714 2.41868 5.85714 2.22222ZM8.78571 2.22222C8.78571 2.07572 8.74277 1.9325 8.66233 1.81069C8.58188 1.68887 8.46753 1.59393 8.33375 1.53787C8.19997 1.4818 8.05276 1.46713 7.91074 1.49571C7.76872 1.5243 7.63826 1.59485 7.53587 1.69844C7.43348 1.80203 7.36375 1.93402 7.3355 2.07771C7.30725 2.2214 7.32175 2.37034 7.37716 2.50569C7.43257 2.64104 7.52641 2.75673 7.64681 2.83813C7.76721 2.91952 7.90877 2.96296 8.05357 2.96296C8.24775 2.96296 8.43397 2.88492 8.57127 2.746C8.70858 2.60709 8.78571 2.41868 8.78571 2.22222Z"
                                          fill="#222222" />
                                  </svg>
                                  <p>
                                      {!! trans('partials/results.item__stage5') !!}
                                  </p>
                              </li>
                              <li class="empty">
                              </li>
                              <li>
                                  <div class="decor"></div>
                                  <svg width="45" height="44" viewBox="0 0 45 44" fill="none"
                                      xmlns="http://www.w3.org/2000/svg">
                                      <path
                                          d="M22.0017 23.0503C19.6992 23.0503 17.793 24.7826 17.5195 27.0126H26.4844C26.2104 24.7826 24.3042 23.0503 22.0017 23.0503Z"
                                          fill="#222222" />
                                      <path
                                          d="M22.0057 11.1626C16.0277 11.1626 11.1641 16.0251 11.1641 22.0015C11.1641 27.9773 16.0277 32.8393 22.0057 32.8393C27.9805 32.8393 32.8407 27.9779 32.8407 22.0015C32.8407 16.0251 27.9805 11.1626 22.0057 11.1626ZM22.003 14.212C23.8454 14.212 25.3446 15.7112 25.3446 17.5542C25.3446 19.3967 23.8454 20.8959 22.003 20.8959C20.1599 20.8959 18.6607 19.3967 18.6607 17.5542C18.6607 15.7112 20.1599 14.212 22.003 14.212ZM27.0725 28.1196H16.9334C16.6278 28.1196 16.3798 27.8721 16.3798 27.566C16.3798 24.4651 18.9026 21.9428 22.003 21.9428C25.1033 21.9428 27.6261 24.4657 27.6261 27.566C27.6261 27.8721 27.3787 28.1196 27.0725 28.1196Z"
                                          fill="#222222" />
                                      <path
                                          d="M22.0026 19.7883C23.2349 19.7883 24.237 18.7857 24.237 17.5538C24.237 16.322 23.2344 15.3188 22.0026 15.3188C20.7707 15.3188 19.7676 16.3215 19.7676 17.5538C19.7676 18.7862 20.7702 19.7883 22.0026 19.7883Z"
                                          fill="#222222" />
                                      <path
                                          d="M39.9807 18.9063C39.8002 17.8246 39.5101 16.7406 39.1198 15.6842C39.0318 15.4462 39.1165 15.1782 39.3263 15.0354L42.2356 13.0479L39.8711 8.95324L36.6888 10.4796C36.4596 10.5887 36.1856 10.5294 36.0239 10.3345C35.3164 9.48362 34.5236 8.69027 33.6688 7.97665C33.4739 7.81444 33.4147 7.54039 33.5243 7.3123L35.0506 4.13282L30.9527 1.76662L28.9657 4.67482C28.8218 4.88464 28.556 4.97101 28.3158 4.88188C27.2943 4.5032 26.2103 4.21365 25.0942 4.02043C24.8445 3.97725 24.6557 3.7702 24.6364 3.51719L24.3656 0H19.6388L19.3681 3.51719C19.3487 3.7702 19.1599 3.97725 18.9102 4.02043C17.7913 4.21365 16.7073 4.5032 15.6892 4.88188C15.4512 4.9699 15.1826 4.8852 15.0393 4.67537L13.049 1.76662L8.9538 4.13282L10.4796 7.31285C10.5892 7.5415 10.53 7.81499 10.3351 7.9772C9.4814 8.68972 8.68806 9.48362 7.97665 10.3356C7.81443 10.5305 7.53984 10.5898 7.31229 10.4801L4.13227 8.95435L1.76662 13.0479L4.67482 15.0354C4.88409 15.1782 4.9699 15.4456 4.88243 15.6831C4.50043 16.7228 4.21033 17.8079 4.02043 18.9097C3.97725 19.1599 3.76964 19.3487 3.51663 19.3675L0 19.6327V24.3645L3.51663 24.6319C3.76964 24.6513 3.97725 24.8401 4.02043 25.0898C4.21088 26.1943 4.50098 27.2788 4.88243 28.313C4.9699 28.5511 4.88464 28.8179 4.67537 28.9613L1.76662 30.951L4.13282 35.0462L7.31285 33.5226C7.5415 33.4152 7.81443 33.4728 7.97665 33.6666C8.70024 34.5308 9.49358 35.323 10.3351 36.0228C10.5305 36.185 10.5903 36.4591 10.4807 36.6877L8.95435 39.8705L13.049 42.2361L15.0393 39.3246C15.1826 39.1154 15.45 39.0301 15.6876 39.1176C16.7339 39.5029 17.8179 39.7941 18.9102 39.9829C19.1599 40.0261 19.3487 40.2331 19.3681 40.4856L19.6388 44H24.3656L24.6364 40.4856C24.6557 40.2331 24.8445 40.0261 25.0937 39.9829C26.197 39.7919 27.281 39.5012 28.3163 39.1181C28.5538 39.0307 28.8223 39.1154 28.9657 39.3252L30.9527 42.2361L35.0506 39.8705L33.5243 36.6877C33.4147 36.4591 33.4739 36.185 33.6693 36.0228C34.512 35.3219 35.3042 34.5297 36.0245 33.6677C36.1867 33.4722 36.4613 33.4147 36.6883 33.5226L39.8711 35.0462L42.2356 30.9516L39.3263 28.9619C39.1165 28.8185 39.0312 28.5511 39.1198 28.3124C39.5095 27.2611 39.7996 26.1782 39.9807 25.0931C40.0227 24.8423 40.2304 24.6519 40.4845 24.6325L44.0017 24.3651V19.6332L40.485 19.3681C40.2309 19.3481 40.0227 19.1577 39.9807 18.9063ZM22.005 33.9467C15.4163 33.9467 10.0561 28.5882 10.0561 22.0017C10.0561 15.4146 15.4163 10.0555 22.005 10.0555C28.5898 10.0555 33.9473 15.4146 33.9473 22.0017C33.9473 28.5882 28.5898 33.9467 22.005 33.9467Z"
                                          fill="#222222" />
                                  </svg>
                                  <p>
                                      {!! trans('partials/results.item__stage6') !!}
                                  </p>
                              </li>
                              <li>
                                  <div class="decor"></div>
                                  <svg width="46" height="35" viewBox="0 0 46 35" fill="none"
                                      xmlns="http://www.w3.org/2000/svg">
                                      <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M2.91094 0C2.57213 0 2.3 0.359375 2.3 0.805122V31.1111H0.79362C0.35424 31.1111 0 31.4465 0 31.8631V31.9147C0 32.3312 0.35424 32.6667 0.79362 32.6667H2.3V34.1949C2.3 34.6406 2.57213 35 2.91094 35H3.2224C3.5612 35 3.83333 34.6406 3.83333 34.1949V32.6667H45.2064C45.6458 32.6667 46 32.3312 46 31.9147V31.8631C46 31.4465 45.6458 31.1111 45.2064 31.1111H44.4667H3.83333V0.805122C3.83333 0.359375 3.5612 0 3.2224 0H2.91094ZM9.96667 8.55556L8.32402 14.1109L10.7603 17.4058L13.2834 14.2765L9.96667 8.55556ZM17.6333 10.1111L10.7333 18.6667L6.13333 12.4444L4.6 16.3333V26.7027V30.3333H43.7H44.4667V21L38.3333 12.4444L32.9667 20.2222L27.6 14.7778L23 18.6667L17.6333 10.1111ZM32.9667 12.4444L29.894 16.0067L32.8633 19.0176L35.3296 15.4416L32.9667 12.4444ZM23 14L21.9428 15.5328L23.1782 17.503L24.9646 15.9931L23 14Z"
                                          fill="#222222" />
                                  </svg>
                                  <p>
                                      {!! trans('partials/results.item__stage7') !!}
                                  </p>
                              </li>
                              <li>
                                  <div class="decor"></div>
                                  <svg width="54" height="47" viewBox="0 0 54 47" fill="none"
                                      xmlns="http://www.w3.org/2000/svg">
                                      <path
                                          d="M19.5095 8.09582C19.4458 7.77413 19.2663 7.50044 19.0032 7.32413C18.765 7.16536 18.4844 7.10951 18.2149 7.1649L17.7603 7.25721C17.686 7.27244 17.6107 7.29782 17.5392 7.33105C17.5101 7.34398 17.4806 7.35459 17.4492 7.36151C17.3578 7.38321 17.2641 7.37628 17.175 7.34121C17.0592 7.29598 16.965 7.20367 16.9175 7.08782C16.4823 6.02998 15.8541 5.08659 15.0515 4.28444C15.0298 4.26275 15.0109 4.23921 14.9943 4.21567C14.9661 4.17367 14.9449 4.12428 14.9324 4.07398C14.9273 4.05275 14.9204 4.03151 14.9255 4.03798L14.9167 3.98905L14.926 3.87505C14.9412 3.79013 14.9758 3.71628 15.0501 3.62951L15.3907 3.11213C15.7332 2.56982 15.5892 1.83136 15.0695 1.46582C14.8286 1.29644 14.541 1.23321 14.2609 1.28951C13.9761 1.34582 13.7306 1.51798 13.5695 1.77367L13.3147 2.17659C13.281 2.23013 13.252 2.28967 13.2257 2.35244C13.1781 2.46644 13.0844 2.55828 12.9704 2.60398C12.855 2.64921 12.7244 2.64736 12.6113 2.59567C11.6126 2.14936 10.534 1.92228 9.38842 1.92182C9.1738 1.92551 8.96842 1.74874 8.93888 1.51244L8.83319 0.953052C8.7695 0.630898 8.59042 0.356745 8.32688 0.180437C8.08873 0.0216678 7.80903 -0.0355629 7.53857 0.0216679C6.9455 0.142129 6.56473 0.758744 6.69027 1.3989L6.8038 1.95274C6.86473 2.17844 6.7498 2.41567 6.53565 2.50382C5.48057 2.94044 4.54688 3.59767 3.76042 4.45659C3.60442 4.6269 3.34365 4.65551 3.15442 4.52213L2.80596 4.27936C2.56411 4.10951 2.27703 4.04675 1.9978 4.10305C1.71303 4.15936 1.4675 4.33105 1.3055 4.58767C0.963034 5.13044 1.10703 5.8689 1.62673 6.23351L1.98673 6.4869C2.16211 6.61059 2.2295 6.83536 2.15057 7.03475C1.70057 8.17105 1.49842 9.37382 1.54965 10.6103C1.55888 10.8378 1.4038 11.0363 1.18042 11.0815L0.872111 11.1443C0.279034 11.2647 -0.101274 11.8818 0.0238029 12.5192C0.0870337 12.8404 0.266572 13.1146 0.528726 13.29C0.765495 13.4483 1.04565 13.506 1.31888 13.4501L1.69503 13.3735C1.91288 13.3297 2.12934 13.446 2.2138 13.6504C2.68365 14.7923 3.37042 15.7943 4.25519 16.6278C4.4158 16.7787 4.44673 17.0234 4.32903 17.2098L4.14396 17.5034C3.8015 18.0461 3.9455 18.7846 4.46473 19.1497C4.70519 19.3195 4.99227 19.3837 5.27334 19.3264C5.55811 19.2701 5.80365 19.0984 5.96565 18.8423L6.2278 18.4264C6.34919 18.2441 6.58273 18.1721 6.78534 18.2547C7.41627 18.5104 8.09704 18.6803 8.80734 18.7606C8.98827 18.7818 9.16965 18.8021 9.34827 18.81H9.35011C9.63211 18.8206 9.88596 18.8197 10.132 18.8054C10.1592 18.804 10.1864 18.8044 10.2104 18.8072L10.2907 18.8243C10.4495 18.8723 10.57 19.0047 10.6115 19.2027L10.7015 19.662C10.7647 19.9846 10.9447 20.2592 11.2078 20.4346C11.3878 20.5541 11.5853 20.6155 11.7884 20.6155C11.8572 20.6155 11.9273 20.6081 11.997 20.5938C12.5897 20.4734 12.9704 19.8567 12.8453 19.2194L12.7517 18.7426C12.7429 18.6997 12.7327 18.66 12.7212 18.6203C12.6557 18.4011 12.7581 18.1707 12.9649 18.072C13.215 17.9529 13.4643 17.8163 13.7057 17.6672C14.41 17.232 15.0437 16.6837 15.5892 16.038C15.6289 15.9909 15.6769 15.9531 15.7327 15.9249C15.7812 15.8995 15.8338 15.8838 15.8864 15.8774L15.903 15.8783L15.9275 15.8778C16.0489 15.8654 16.1601 15.9134 16.2427 15.9858C16.2746 16.0144 16.3069 16.0403 16.3387 16.062L16.7273 16.3357C16.9692 16.506 17.2563 16.5687 17.5355 16.5124C17.8203 16.4561 18.0658 16.2844 18.2278 16.0278C18.5703 15.4851 18.4263 14.7466 17.9066 14.382L17.5207 14.1101C17.4603 14.0677 17.3966 14.0317 17.332 14.0035C17.1127 13.9061 17.0038 13.6527 17.0846 13.4266C17.4695 12.3466 17.637 11.2163 17.5812 10.0661C17.5752 9.94244 17.62 9.82013 17.704 9.72967C17.788 9.63967 17.9061 9.58567 18.0303 9.5829C18.0893 9.58105 18.1484 9.57644 18.2093 9.56398L18.6612 9.47213C19.2543 9.35075 19.6346 8.73413 19.5095 8.09582ZM10.6673 14.8754C9.47796 15.1167 8.25857 14.8735 7.25288 14.2029C6.21765 13.5129 5.51427 12.4537 5.27196 11.22C4.77765 8.70228 6.39027 6.24459 8.86688 5.74013C10.0549 5.49828 11.2669 5.73644 12.2804 6.41259C13.3157 7.10305 14.019 8.16228 14.2613 9.39598C14.7561 11.9137 13.1435 14.3714 10.6673 14.8754Z"
                                          fill="#222222" />
                                      <path
                                          d="M17.4598 5.1222C17.4958 5.18082 17.5341 5.23712 17.5692 5.29666C17.6707 5.46928 17.7672 5.64559 17.8586 5.82466L17.9371 5.80851C18.5721 5.67789 19.2234 5.80805 19.7703 6.17266C20.3426 6.55389 20.7321 7.14282 20.8669 7.83005C21.136 9.19989 20.2863 10.5337 18.9695 10.8213C18.9663 10.9256 18.9571 11.0294 18.9501 11.1333H53.9984V4.77051H17.2383C17.2424 4.77651 17.2457 4.78251 17.2498 4.78851C17.3227 4.89789 17.3911 5.01005 17.4598 5.1222ZM49.1491 7.48066C49.1491 6.97112 49.5626 6.55758 50.0721 6.55758H50.4118C50.9214 6.55758 51.3349 6.97112 51.3349 7.48066V7.83789C51.3349 8.34743 50.9214 8.76097 50.4118 8.76097H50.0721C49.5626 8.76097 49.1491 8.34743 49.1491 7.83789V7.48066ZM44.2655 7.48066C44.2655 6.97112 44.6791 6.55758 45.1886 6.55758H45.5278C46.0374 6.55758 46.4509 6.97112 46.4509 7.48066V7.83789C46.4509 8.34743 46.0374 8.76097 45.5278 8.76097H45.1886C44.6791 8.76097 44.2655 8.34743 44.2655 7.83789V7.48066ZM39.382 7.48066C39.382 6.97112 39.7955 6.55758 40.3051 6.55758H40.6443C41.1538 6.55758 41.5674 6.97112 41.5674 7.48066V7.83789C41.5674 8.34743 41.1538 8.76097 40.6443 8.76097H40.3051C39.7955 8.76097 39.382 8.34743 39.382 7.83789V7.48066Z"
                                          fill="#222222" />
                                      <path
                                          d="M48.2698 42.1147C48.3137 42.0594 48.3543 42.0017 48.3917 41.9426C48.4 41.9292 48.4078 41.9154 48.4157 41.902C48.4822 41.7912 48.5371 41.6749 48.5814 41.5549C48.5892 41.5332 48.5985 41.5124 48.6059 41.4903C48.6243 41.434 48.6395 41.3772 48.6529 41.3195C48.6645 41.2706 48.6737 41.2207 48.6815 41.1709C48.6903 41.1174 48.6986 41.0643 48.7032 41.0103C48.7102 40.9244 48.712 40.8377 48.7079 40.75C48.7065 40.7177 48.7037 40.6853 48.7009 40.6535C48.6908 40.5478 48.6765 40.4421 48.6497 40.3364C48.4231 39.4627 47.6652 38.8973 46.8391 38.9292C46.7209 38.9338 46.6014 38.9504 46.4818 38.9804C45.2528 39.2343 44.0385 39.483 42.8283 39.73C41.9722 39.9049 41.1174 40.0793 40.2635 40.2533C38.5628 40.6 36.862 40.947 35.1608 41.2964C35.0422 41.3472 34.9129 41.3721 34.7943 41.3707C34.5931 41.4123 34.3918 41.4538 34.1906 41.4953C34.1011 41.5138 34.0102 41.5193 33.9188 41.5101L29.8494 41.1298C29.8166 41.1266 29.7838 41.122 29.7515 41.1155L22.7034 39.6838C22.2035 39.5823 21.8809 39.0953 21.9825 38.5955C22.0835 38.0966 22.57 37.7726 23.0708 37.8746L30.0705 39.2957L33.9534 39.6584C34.1242 39.6234 34.2954 39.5883 34.4666 39.5532C34.468 39.5518 34.4694 39.5509 34.4708 39.55C34.6074 39.442 34.8054 39.2583 34.9558 39.0155C34.9692 38.9933 34.9831 38.9717 34.9955 38.9486C35.0135 38.9158 35.0302 38.8821 35.0458 38.8475C35.0625 38.811 35.0772 38.7727 35.0911 38.734C35.1012 38.7058 35.1118 38.6781 35.1197 38.649C35.1395 38.5775 35.1557 38.5032 35.1626 38.4252C35.2355 37.6743 34.6 36.718 33.448 36.4641C28.7463 35.1889 24.1032 33.9243 19.4454 32.6426L19.2982 32.6915C17.9191 33.1521 16.5446 33.6081 15.1665 34.0678C13.0545 34.7721 10.9411 35.4778 8.83231 36.1784C8.83 36.1793 8.82815 36.1789 8.82584 36.1798C7.98169 36.4604 7.13338 36.7447 6.29015 37.0244L6.08984 44.4926L13.3111 41.9647C13.4098 41.9301 13.5128 41.913 13.6162 41.913C13.7205 41.913 13.8252 41.9306 13.9249 41.9661L23.662 45.4212C23.7003 45.4346 23.7377 45.4507 23.7742 45.4692C24.3049 45.741 24.9322 45.9981 25.588 46.2118C26.1151 46.3706 26.6722 46.4966 27.3137 46.6014C34.0568 45.3012 40.7818 44.0001 47.5258 42.682C47.8249 42.562 48.0742 42.3607 48.2698 42.1147Z"
                                          fill="#222222" />
                                      <path
                                          d="M8.0201 13.0507C8.72395 13.5206 9.5658 13.6867 10.3901 13.5187C12.1236 13.1657 13.2507 11.4363 12.9023 9.66305C12.7315 8.79351 12.2376 8.04859 11.5116 7.56443C10.9869 7.21459 10.3855 7.0332 9.77164 7.0332C9.5621 7.0332 9.35164 7.05443 9.1421 7.09736C7.40856 7.45043 6.28149 9.17982 6.62949 10.953C6.80072 11.8217 7.29456 12.5675 8.0201 13.0507Z"
                                          fill="#222222" />
                                      <path
                                          d="M18.6624 12.9795C18.6448 13.0478 18.631 13.117 18.6121 13.1849L18.7035 13.2495C19.8167 14.0332 20.1282 15.6112 19.3985 16.7673C19.0325 17.347 18.4676 17.7384 17.8076 17.8709C17.2048 17.99 16.5928 17.8801 16.0676 17.5589C15.5078 18.1132 14.8856 18.5886 14.209 18.9804C14.4628 20.3521 13.5993 21.6809 12.2724 21.9509C12.1127 21.9832 11.9521 21.9993 11.7924 21.9993C11.7915 21.9993 11.7905 21.9998 11.7896 21.9998C11.6475 21.9998 11.5067 21.9832 11.3673 21.9583C11.3272 21.9509 11.2879 21.9407 11.2482 21.9315C11.1439 21.9075 11.0419 21.8761 10.9408 21.8383C10.9016 21.8235 10.8628 21.8101 10.8245 21.793C10.6921 21.7349 10.5624 21.6689 10.4387 21.5867C10.3205 21.5078 10.2112 21.4192 10.1092 21.3236C10.075 21.2913 10.0459 21.2549 10.0136 21.2207C9.94946 21.1538 9.88623 21.0864 9.82992 21.013C9.79669 20.9696 9.76854 20.9226 9.73854 20.8769C9.69146 20.8063 9.64531 20.7356 9.60561 20.6609C9.57838 20.6096 9.55577 20.5566 9.53177 20.5035C9.51007 20.4555 9.48377 20.4103 9.46484 20.3604V34.022C11.9839 33.1838 14.5021 32.3461 17.0258 31.5038C17.7268 31.2698 18.4265 31.0372 19.1276 30.8032C19.3016 30.7446 19.4881 30.7395 19.6653 30.7884C24.4122 32.096 29.1421 33.3841 33.889 34.6732C35.7878 35.09 37.1742 36.8175 37.0016 38.5949C36.9878 38.7537 36.9624 38.906 36.9273 39.0504C37.9316 38.8455 38.9355 38.6406 39.9393 38.4361C41.9835 38.0198 44.0272 37.603 46.0713 37.1816C46.3062 37.1221 46.543 37.0893 46.7779 37.0806C47.8353 37.0418 48.8618 37.4987 49.5781 38.2866C49.9764 38.7241 50.2787 39.2637 50.4379 39.8775C50.4744 40.0215 50.4998 40.1655 50.5196 40.31C50.5252 40.3492 50.5284 40.3884 50.5325 40.4277C50.5445 40.5407 50.5515 40.6538 50.5538 40.7664C50.5542 40.802 50.5561 40.838 50.5556 40.8735C50.5528 41.1656 50.5173 41.4541 50.4513 41.7333C50.4476 41.749 50.4462 41.7652 50.4425 41.7809H53.9996V12.9795H18.6624ZM26.3202 25.3289L23.7748 28.009C23.6008 28.1923 23.3585 28.2966 23.1056 28.2966C22.8527 28.2966 22.6104 28.1923 22.4364 28.009L21.1044 26.6064C20.7532 26.2367 20.7684 25.6529 21.1381 25.3016C21.5078 24.9504 22.0916 24.9652 22.4433 25.3353L23.1061 26.0332L24.9822 24.0583C25.333 23.6886 25.9173 23.6738 26.2875 24.0246C26.6562 24.3753 26.6715 24.9592 26.3202 25.3289ZM26.3202 18.0075L23.7748 20.6876C23.6008 20.8709 23.3585 20.9752 23.1056 20.9752C22.8527 20.9752 22.6104 20.8709 22.4364 20.6876L21.1044 19.285C20.7532 18.9153 20.7684 18.3315 21.1381 17.9803C21.5078 17.629 22.0916 17.6438 22.4433 18.014L23.1061 18.7118L24.9822 16.7369C25.333 16.3672 25.9173 16.3524 26.2875 16.7032C26.6562 17.0535 26.6715 17.6378 26.3202 18.0075ZM43.8393 27.4367H30.6245C30.115 27.4367 29.7015 27.0232 29.7015 26.5136C29.7015 26.0041 30.115 25.5906 30.6245 25.5906H43.8388C44.3484 25.5906 44.7619 26.0041 44.7619 26.5136C44.7619 27.0232 44.3488 27.4367 43.8393 27.4367ZM43.8393 19.6349H30.6245C30.115 19.6349 29.7015 19.2213 29.7015 18.7118C29.7015 18.2023 30.115 17.7887 30.6245 17.7887H43.8388C44.3484 17.7887 44.7619 18.2023 44.7619 18.7118C44.7619 19.2213 44.3488 19.6349 43.8393 19.6349Z"
                                          fill="#222222" />
                                  </svg>
                                  <p>
                                      {!! trans('partials/results.item__stage9') !!}
                                  </p>
                              </li>
                              <li>
                                  <div class="decor"></div>
                                  <svg width="49" height="40" viewBox="0 0 49 40" fill="none"
                                      xmlns="http://www.w3.org/2000/svg">
                                      <path
                                          d="M49 6.1413V0.508133C49 0.227644 48.7746 0 48.4968 0H0.503204C0.225435 0 0 0.227644 0 0.508133V6.1413H49ZM10.5472 2.22664C10.7434 2.02847 11.0624 2.02847 11.2587 2.22664L11.8082 2.78152L12.3577 2.22664C12.5539 2.02847 12.873 2.02847 13.0692 2.22664C13.2655 2.42481 13.2655 2.74697 13.0692 2.94514L12.5197 3.50002L13.0682 4.05389C13.2645 4.25206 13.2645 4.57422 13.0682 4.77239C12.9696 4.87198 12.8408 4.92076 12.7119 4.92076C12.5831 4.92076 12.4543 4.87097 12.3557 4.77239L11.8072 4.21852L11.2587 4.77239C11.1601 4.87198 11.0312 4.92076 10.9024 4.92076C10.7736 4.92076 10.6448 4.87097 10.5462 4.77239C10.3499 4.57422 10.3499 4.25206 10.5462 4.05389L11.0946 3.50002L10.5451 2.94514C10.3499 2.74595 10.3499 2.42481 10.5472 2.22664ZM6.82647 2.99189H8.98823C9.266 2.99189 9.49143 3.21953 9.49143 3.50002C9.49143 3.78051 9.266 4.00816 8.98823 4.00816H6.82647C6.5487 4.00816 6.32326 3.78051 6.32326 3.50002C6.32326 3.21953 6.5487 2.99189 6.82647 2.99189ZM3.82133 1.93599C4.67577 1.93599 5.37019 2.63721 5.37019 3.50002C5.37019 4.36283 4.67577 5.06406 3.82133 5.06406C2.9679 5.06406 2.27247 4.36283 2.27247 3.50002C2.27247 2.63721 2.96689 1.93599 3.82133 1.93599Z"
                                          fill="#222222" />
                                      <path
                                          d="M0 7.15723V39.4918C0 39.7723 0.225435 39.9999 0.503204 39.9999H48.4968C48.7746 39.9999 49 39.7723 49 39.4918V7.15723H0ZM18.7091 28.9683C18.9336 29.134 18.9819 29.4521 18.8178 29.6787C18.7192 29.8139 18.5662 29.886 18.4112 29.886C18.3076 29.886 18.2039 29.8545 18.1143 29.7875L9.58403 23.4795C9.55685 23.4592 9.54075 23.4307 9.51861 23.4063C9.50552 23.3921 9.48741 23.386 9.47634 23.3707C9.47131 23.3636 9.47131 23.3555 9.46627 23.3484C9.44615 23.3189 9.43507 23.2864 9.423 23.2529C9.41193 23.2244 9.39885 23.1959 9.39281 23.1665C9.38677 23.135 9.38878 23.1025 9.38878 23.0699C9.38878 23.0374 9.38677 23.0059 9.39281 22.9734C9.39885 22.9439 9.41293 22.9155 9.423 22.887C9.43608 22.8535 9.44715 22.822 9.46627 22.7915C9.47131 22.7833 9.47131 22.7752 9.47634 22.7691C9.49244 22.7468 9.51659 22.7346 9.53572 22.7142C9.55383 22.697 9.5649 22.6746 9.58503 22.6594L18.1153 16.3504C18.3378 16.1837 18.6538 16.2325 18.8188 16.4601C18.9829 16.6868 18.9346 17.0048 18.7101 17.1705L10.7343 23.0689L18.7091 28.9683ZM27.3371 13.7508L22.6402 32.636C22.5828 32.8667 22.3775 33.0202 22.1531 33.0202C22.1118 33.0202 22.0705 33.0151 22.0303 33.005C21.7606 32.9369 21.5965 32.6604 21.6649 32.3881L26.3619 13.5028C26.4293 13.2304 26.699 13.0638 26.9727 13.1339C27.2415 13.203 27.4045 13.4784 27.3371 13.7508ZM39.6092 23.1675C39.6042 23.1959 39.5901 23.2224 39.58 23.2498C39.5669 23.2844 39.5559 23.3179 39.5347 23.3494C39.5297 23.3565 39.5297 23.3646 39.5247 23.3707C39.5136 23.386 39.4965 23.3921 39.4844 23.4053C39.4623 23.4297 39.4452 23.4592 39.417 23.4795L30.8877 29.7875C30.7971 29.8535 30.6934 29.886 30.5898 29.886C30.4358 29.886 30.2818 29.8139 30.1842 29.6787C30.0201 29.4511 30.0685 29.134 30.2919 28.9683L38.2667 23.0699L30.2919 17.1715C30.0674 17.0059 30.0191 16.6878 30.1842 16.4611C30.3492 16.2345 30.6632 16.1868 30.8877 16.3514L39.417 22.6604C39.4381 22.6766 39.4512 22.7 39.4693 22.7193C39.4884 22.7376 39.5096 22.7488 39.5257 22.7701C39.5307 22.7772 39.5307 22.7854 39.5357 22.7915C39.5569 22.822 39.5679 22.8555 39.581 22.8911C39.5921 22.9185 39.6052 22.9449 39.6102 22.9734C39.6173 23.0059 39.6142 23.0374 39.6142 23.0709C39.6142 23.1045 39.6162 23.135 39.6092 23.1675Z"
                                          fill="#222222" />
                                      <path
                                          d="M3.82175 4.04768C4.12134 4.04768 4.3642 3.80244 4.3642 3.49992C4.3642 3.19739 4.12134 2.95215 3.82175 2.95215C3.52216 2.95215 3.2793 3.19739 3.2793 3.49992C3.2793 3.80244 3.52216 4.04768 3.82175 4.04768Z"
                                          fill="#222222" />
                                  </svg>
                                  <p>
                                      {!! trans('partials/results.item__stage9') !!}
                                  </p>
                              </li>
                          </ul>

                          {{-- <p class="text__bold text-center">Над проектом работали:</p> --}}
                          <ol class="item__works">
                              <li>Project Manager</li>
                              <li>{{ trans('partials/results.works_marketing') }}</li>
                              <li>{{ trans('partials/results.works_designer') }}</li>
                              {{-- <ul class="item__results">
                  <li>
                    <p class="item__results-digit">1034 +</p>
                    <p class="item__results-descr">заказов в <b>ДЕНЬ</b> </p>
                  </li>
                  <li>
                    <p class="item__results-digit">26 437 +</p>
                    <p class="item__results-descr">заказов в <b>МЕСЯЦ</b> </p>
                  </li>
                  <li>
                    <p class="item__results-digit">49,69 %</p>
                    <p class="item__results-descr">вернувшихся пользователей </p>
                  </li>
                  <li>
                    <p class="item__results-digit">2,08 %</p>
                    <p class="item__results-descr">коэффициент конверсии</p>
                    <p class="item__results-descr__more">
                      (в разных сферах <b>средний коэффициент конверсии</b> составляет всего 2,35%)
                    </p>
                  </li>
                </ul> --}}
                              <li>{{ trans('partials/results.works_front') }}</li>
                              <li>{{ trans('partials/results.works_front') }}</li>
                              <li>{{ trans('partials/results.works_seo') }}</li>
                              <li>{{ trans('partials/results.works_qna') }}</li>
                          </ol>

                          {{-- <p class="text__bold text-center">Успешные результаты продвижения:</p> --}}


                          {{-- <div class="item__section">
                <p class="item__section-text">
                  1) Органический трафик:
                </p>
                <div class="item__section-cont">
                  <div class="item__section-image">
                    <img class="lazy" data-src="/img/results/hoasklad__graph-1.png" alt="hoasklad__graph-1">
                    <p class="item__section-image__text">
                      период: август 2020 — ноябрь 2020
                    </p>
                  </div>
                  <div class="item__section-wind">
                    <p class="bold">за ноябрь 2020:</p>
                    <p><span>12 332</span> визитов</p>
                    <p>от <span>273</span> заказов в день</p>
                    <p><span>24 011</span> конверсий</p>
                  </div>
                </div>
              </div> --}}

                          {{-- <div class="item__section item__section-green">
                <p class="item__section-text">
                  1) Ссылочный профиль:
                </p>
                <div class="item__section-cont">
                  <div class="item__section-image">
                    <img class="lazy" data-src="/img/results/hoasklad__graph-2.png" alt="hoasklad__graph-2">
                    <p class="item__section-image__text">
                      период: декабрь 2019 — ноябрь 2020
                    </p>
                  </div>
                  <div class="item__section-wind">
                    <p class="bold">за ноябрь 2020:</p>
                    <p><span>144</span> домена</p>
                    <p><span>298 370</span> страницы</p>
                  </div>
                </div>
              </div> --}}
                      </div>
                  </div>
              </div>
          </div>
          <div class="item-popup js-shape-close" id="popoup-3">
              <div class="popupShape"></div>
              <div class="container">
                  <div class="item">
                      <button class="item-popup-close js-close"></button>
                      <div class="item__top row">
                          <div class="col-xs-12 col-md-6">
                              <p class="item__name item__name--phone">
                                  kolgotoff.com.ua
                              </p>
                              <div class="item__poster">
                                  <picture>
                                      <source type="image/webp" data-srcset="/img/results/colgotof_poster.webp">
                                      <img width="824" height="506" data-src="/img/results/colgotof_poster.png"
                                          alt="colgotof_poster" class="lazy desctop">
                                  </picture>
                              </div>
                          </div>
                          <div class="col-xs-12 col-md-6">
                              <div class="item__info">
                                  <p class="item__name">
                                      kolgotoff.com.ua
                                  </p>
                                  <div class="item__text">
                                      <p class="text__bold">{{ trans('partials/results.sold_services') }}</p>
                                      <ul class="item__services">
                                          <li>{{ trans('partials/results.service_marketing') }}</li>
                                          <li>{{ trans('partials/results.style_develop') }}</li>
                                          <li>{{ trans('partials/results.design_develop') }}</li>
                                          <li>{{ trans('partials/results.seo') }}</li>
                                          <li>{{ trans('partials/results.advertising') }}</li>
                                      </ul>
                                      <div class="item__cell__footer">
                                          <p class="text__bold">{{ trans('partials/results.result') }}</p>
                                          <div class="row">
                                              <div class="col-xs-12">
                                                  <p class="text__bold">{{ trans('partials/results.time_inside') }}
                                                  </p>
                                                  <ul class="item__services item__services-termin">
                                                      <li> {{ trans('partials/results.3_month') }} </li>
                                                  </ul>
                                              </div>
                                              <div class="col-xs-12">
                                                  <p class="text__bold">{{ trans('partials/results.technologies') }}
                                                  </p>
                                                  <ul class="item__tech">
                                                      <li><img class="lazy" data-src="/img/tech/laravel.png"
                                                              alt="laravel"></li>
                                                      <li><img class="lazy" data-src="/img/tech/vue.png"
                                                              alt="vue"></li>
                                                      <li><img class="lazy" data-src="/img/tech/bootstrap.png"
                                                              alt="bootstrap"></li>
                                                  </ul>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="item__footer">

                          {{-- <p class="text__bold text-center">Этапы работ:</p> --}}
                          <ul class="item__stages">
                              <li>
                                  <div class="decor"></div>
                                  <svg width="44" height="43" viewBox="0 0 44 43" fill="none"
                                      xmlns="http://www.w3.org/2000/svg">
                                      <path
                                          d="M12.3733 5.23594C13.1814 5.23594 13.8365 4.58085 13.8365 3.77275C13.8365 2.96466 13.1814 2.30957 12.3733 2.30957C11.5652 2.30957 10.9102 2.96466 10.9102 3.77275C10.9102 4.58085 11.5652 5.23594 12.3733 5.23594Z"
                                          fill="#222222" />
                                      <path
                                          d="M4.5042 5.23594C5.31229 5.23594 5.96738 4.58085 5.96738 3.77275C5.96738 2.96466 5.31229 2.30957 4.5042 2.30957C3.69611 2.30957 3.04102 2.96466 3.04102 3.77275C3.04102 4.58085 3.69611 5.23594 4.5042 5.23594Z"
                                          fill="#222222" />
                                      <path
                                          d="M24.6442 32.953C24.6442 32.6603 24.6546 32.3573 24.686 32.0646C25.0936 27.3929 28.6052 23.5782 33.2352 22.7943V1.46318C33.2352 0.658432 32.5767 0 31.772 0H28.7411V1.13919C30.2043 1.48409 31.1031 2.94727 30.7582 4.41045C30.4133 5.87364 28.9501 6.77245 27.4869 6.42756C26.0238 6.08266 25.125 4.61948 25.4698 3.1563C25.7102 2.15297 26.4836 1.37957 27.4869 1.13919V0H20.8713V1.13919C22.3345 1.48409 23.2333 2.94727 22.8884 4.41045C22.5435 5.87364 21.0803 6.77245 19.6171 6.42756C18.1539 6.08266 17.2551 4.61948 17.6 3.1563C17.8404 2.15297 18.6138 1.37957 19.6171 1.13919V0H13.0014V1.13919C14.4646 1.48409 15.3634 2.94727 15.0185 4.41045C14.6736 5.87364 13.2105 6.77245 11.7473 6.42756C10.2841 6.08266 9.38528 4.61948 9.73017 3.1563C9.97055 2.15297 10.7439 1.37957 11.7473 1.13919V0H5.13159V1.13919C6.59478 1.48409 7.49359 2.94727 7.1487 4.41045C6.8038 5.87364 5.34062 6.77245 3.87744 6.42756C2.41425 6.08266 1.51544 4.61948 1.86033 3.1563C2.10071 2.15297 2.87411 1.37957 3.87744 1.13919V0H1.46318C0.658433 0 0 0.658432 0 1.46318V36.9976C0 37.8024 0.658433 38.4608 1.46318 38.4608H26.2432C25.1981 36.8095 24.6442 34.8969 24.6442 32.953ZM5.12114 13.9107H28.114C28.4589 13.9107 28.7411 14.1929 28.7411 14.5378C28.7411 14.8827 28.4589 15.1649 28.114 15.1649H5.12114C4.77625 15.1649 4.49406 14.8827 4.49406 14.5378C4.49406 14.1824 4.77625 13.9107 5.12114 13.9107ZM5.12114 19.6485H28.114C28.4589 19.6485 28.7411 19.9306 28.7411 20.2755C28.7411 20.6204 28.4589 20.9026 28.114 20.9026H5.12114C4.77625 20.9026 4.49406 20.6204 4.49406 20.2755C4.49406 19.9306 4.77625 19.6485 5.12114 19.6485ZM5.12114 25.3967H25.5012C25.8461 25.3967 26.1283 25.6789 26.1283 26.0238C26.1283 26.3687 25.8461 26.6508 25.5012 26.6508H5.12114C4.77625 26.6508 4.49406 26.3687 4.49406 26.0238C4.49406 25.6789 4.77625 25.3967 5.12114 25.3967ZM23.1392 32.3991H5.12114C4.77625 32.3991 4.49406 32.1169 4.49406 31.772C4.49406 31.4271 4.77625 31.1449 5.12114 31.1449H23.1392C23.4841 31.1449 23.7663 31.4271 23.7663 31.772C23.7663 32.1169 23.4841 32.3991 23.1392 32.3991Z"
                                          fill="#222222" />
                                      <path
                                          d="M28.1155 5.23594C28.9236 5.23594 29.5787 4.58085 29.5787 3.77275C29.5787 2.96466 28.9236 2.30957 28.1155 2.30957C27.3074 2.30957 26.6523 2.96466 26.6523 3.77275C26.6523 4.58085 27.3074 5.23594 28.1155 5.23594Z"
                                          fill="#222222" />
                                      <path
                                          d="M38.0847 24.4559C33.392 22.721 28.1873 25.1248 26.4524 29.8174C26.1702 30.5699 25.9925 31.3642 25.9298 32.169C25.9089 32.4302 25.8984 32.6915 25.8984 32.9528C25.8984 37.9485 29.9535 42.0036 34.9493 42.0036C39.945 42.0036 44.0001 37.9485 44.0001 32.9528C44.0001 29.159 41.6381 25.7728 38.0847 24.4559ZM39.5897 30.7162L39.5792 30.7267L34.249 36.0568C34.0087 36.2972 33.6115 36.2972 33.3607 36.0568L30.3298 33.026C30.0894 32.7856 30.0894 32.3884 30.3298 32.1376C30.5702 31.8972 30.9673 31.8972 31.2182 32.1376L33.8101 34.7295L38.7013 29.8383C38.9417 29.5875 39.3388 29.5875 39.5897 29.8279C39.8196 30.0682 39.83 30.4654 39.5897 30.7162Z"
                                          fill="#222222" />
                                      <path
                                          d="M20.2444 5.23594C21.0525 5.23594 21.7076 4.58085 21.7076 3.77275C21.7076 2.96466 21.0525 2.30957 20.2444 2.30957C19.4363 2.30957 18.7812 2.96466 18.7812 3.77275C18.7812 4.58085 19.4363 5.23594 20.2444 5.23594Z"
                                          fill="#222222" />
                                  </svg>
                                  <p>
                                      {!! trans('partials/results.item__stage1') !!}
                                  </p>
                              </li>
                              <li>
                                  <div class="decor"></div>
                                  <svg width="44" height="42" viewBox="0 0 44 42" fill="none"
                                      xmlns="http://www.w3.org/2000/svg">
                                      <path
                                          d="M11.9494 13.0988L6.34381 14.6681C5.53673 14.8952 5.05688 15.7617 5.27549 16.6068L7.62524 25.7755C7.84247 26.6205 8.67293 27.1221 9.48001 26.895L10.7353 26.5429L15.8514 40.822C16.169 41.6268 16.9403 42.1413 17.5659 41.966C18.1901 41.7906 19.2131 41.5046 19.8387 41.3293C20.4629 41.154 20.885 40.3061 20.7764 39.4424L18.3455 24.1674L32.7011 26.8074L29.5992 14.7069L26.4974 2.60791L13.6584 13.8576C13.3298 13.2411 12.6327 12.9077 11.9494 13.0988Z"
                                          fill="#222222" />
                                      <path
                                          d="M1.3017 19.7897C0.285635 20.1878 -0.24921 21.5588 0.11377 22.9671C0.474 24.374 1.59181 25.2852 2.66288 25.0969C2.94061 25.837 3.70507 26.261 4.45715 26.0512L6.45216 25.4921L4.39528 17.4688L2.39889 18.0263C1.64681 18.2376 1.18758 19.0036 1.3017 19.7897Z"
                                          fill="#222222" />
                                      <path
                                          d="M32.8111 9.14087L30.768 1.17355C30.5535 0.329964 29.7231 -0.171586 28.9146 0.0540396L28.6259 0.135955C27.8188 0.36158 27.3389 1.22959 27.5562 2.07317L33.8753 26.7181C34.0912 27.5617 34.9216 28.0633 35.7287 27.8362L36.0174 27.7557C36.8245 27.5301 37.3057 26.6621 37.0871 25.8185L35.0454 17.8512C35.9913 17.1973 36.3172 15.1667 35.7576 12.9837C35.198 10.8007 33.9427 9.21416 32.8111 9.14087Z"
                                          fill="#222222" />
                                      <path
                                          d="M37.9959 5.939C38.3067 5.66883 38.6765 5.46045 38.9419 5.18596C39.2017 4.90141 39.3901 4.58238 39.5235 4.28058C39.8026 3.68993 39.8356 3.14096 39.8356 3.14096L39.7269 3.03174C39.7269 3.03174 39.2045 3.08635 38.6504 3.40251C38.3685 3.55197 38.0688 3.76035 37.8076 4.04202C37.5546 4.33232 37.3703 4.72752 37.1242 5.06093C36.148 6.40463 35.2832 7.85898 35.2832 7.85898L35.3932 7.9682C35.3918 7.96964 36.7502 7.00965 37.9959 5.939Z"
                                          fill="#222222" />
                                      <path
                                          d="M42.2467 18.0728C41.8837 17.9736 41.463 17.9866 41.067 17.9161C39.4749 17.6402 37.8401 17.5181 37.8401 17.5181L37.7988 17.6704C37.7988 17.6704 39.2439 18.4781 40.7315 19.1319C41.1041 19.2915 41.452 19.5386 41.8109 19.6565C42.1711 19.7643 42.5299 19.7873 42.8475 19.77C43.4786 19.7542 43.9571 19.5286 43.9571 19.5286L43.9997 19.3777C43.9997 19.3777 43.7082 18.9192 43.183 18.5542C42.9218 18.3631 42.6069 18.1834 42.2467 18.0728Z"
                                          fill="#222222" />
                                      <path
                                          d="M41.9823 10.5848C41.6757 10.5575 41.332 10.5704 40.9827 10.6667C40.6376 10.7745 40.2994 11.0073 39.9392 11.1568C38.5038 11.7618 37.1055 12.5235 37.1055 12.5235L37.144 12.6758C37.144 12.6758 38.7183 12.6054 40.2513 12.3783C40.6349 12.3194 41.0391 12.3453 41.3897 12.2576C41.739 12.1599 42.0428 11.9889 42.2931 11.8064C42.8018 11.4586 43.0836 11.0116 43.0836 11.0116L43.0493 10.8593C43.0493 10.8593 42.59 10.6207 41.9823 10.5848Z"
                                          fill="#222222" />
                                  </svg>
                                  <p>
                                      {!! trans('partials/results.item__stage2') !!}
                                  </p>
                              </li>
                              <li>
                                  <div class="decor"></div>
                                  <svg width="54" height="40" viewBox="0 0 54 40" fill="none"
                                      xmlns="http://www.w3.org/2000/svg">
                                      <path d="M32.6925 27.1162H21.3105V34.4235H32.6925V27.1162Z" fill="#222222" />
                                      <path d="M49.091 27.1162H37.709V34.4235H49.091V27.1162Z" fill="#222222" />
                                      <path
                                          d="M54 5.38496V1.73076C54 0.776533 53.2519 0 52.3327 0H1.66728C0.748055 0 0 0.776533 0 1.73076V5.38496H54ZM12.8403 2.4046H13.7306C14.0374 2.4046 14.2864 2.66306 14.2864 2.98152C14.2864 3.29998 14.0374 3.55844 13.7306 3.55844H12.8403C12.5335 3.55844 12.2845 3.29998 12.2845 2.98152C12.2845 2.66306 12.5335 2.4046 12.8403 2.4046ZM8.59652 2.4046H9.48796C9.79474 2.4046 10.0437 2.66306 10.0437 2.98152C10.0437 3.29998 9.79474 3.55844 9.48796 3.55844H8.59652C8.28974 3.55844 8.04076 3.29998 8.04076 2.98152C8.04076 2.66306 8.28974 2.4046 8.59652 2.4046ZM4.35272 2.4046H5.24305C5.54983 2.4046 5.79881 2.66306 5.79881 2.98152C5.79881 3.29998 5.54983 3.55844 5.24305 3.55844H4.35272C4.04594 3.55844 3.79696 3.29998 3.79696 2.98152C3.79696 2.66306 4.04594 2.4046 4.35272 2.4046Z"
                                          fill="#222222" />
                                      <path d="M16.2921 27.1162H4.91016V34.4235H16.2921V27.1162Z" fill="#222222" />
                                      <path d="M49.0932 10.6748H4.91016V23.6555H49.0932V10.6748Z" fill="#222222" />
                                      <path
                                          d="M0 6.53857V38.2691C0 39.2233 0.748055 39.9999 1.66728 39.9999H52.3327C53.2519 39.9999 54 39.2233 54 38.2691V6.53857H0ZM17.402 35.0003C17.402 35.3188 17.153 35.5772 16.8462 35.5772H4.35272C4.04594 35.5772 3.79696 35.3188 3.79696 35.0003V26.5392C3.79696 26.2207 4.04594 25.9623 4.35272 25.9623H16.8462C17.153 25.9623 17.402 26.2207 17.402 26.5392V35.0003ZM33.8025 35.0003C33.8025 35.3188 33.5535 35.5772 33.2468 35.5772H20.7532C20.4465 35.5772 20.1975 35.3188 20.1975 35.0003V26.5392C20.1975 26.2207 20.4465 25.9623 20.7532 25.9623H33.2468C33.5535 25.9623 33.8025 26.2207 33.8025 26.5392V35.0003ZM50.203 35.0003C50.203 35.3188 49.9541 35.5772 49.6473 35.5772H37.1538C36.847 35.5772 36.598 35.3188 36.598 35.0003V26.5392C36.598 26.2207 36.847 25.9623 37.1538 25.9623H49.6473C49.9541 25.9623 50.203 26.2207 50.203 26.5392V35.0003ZM50.203 24.2315C50.203 24.55 49.9541 24.8084 49.6473 24.8084H4.35272C4.04594 24.8084 3.79696 24.55 3.79696 24.2315V10.097C3.79696 9.77855 4.04594 9.52009 4.35272 9.52009H49.6473C49.9541 9.52009 50.203 9.77855 50.203 10.097V24.2315Z"
                                          fill="#222222" />
                                  </svg>
                                  <p>
                                      {!! trans('partials/results.item__stage3') !!}
                                  </p>
                              </li>
                              <li>
                                  <div class="decor"></div>
                                  <svg width="45" height="44" viewBox="0 0 45 44" fill="none"
                                      xmlns="http://www.w3.org/2000/svg">
                                      <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M15.75 10.9824V17.7379L21.7499 20.7724V13.41L18.75 12.1962L15.75 10.9824Z"
                                          fill="#222222" />
                                      <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M22.5008 6.91699L16.8301 9.78458L22.5008 12.0794L28.1714 9.78458L22.5008 6.91699Z"
                                          fill="#222222" />
                                      <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M23.25 13.41V20.7724L29.2499 17.7379V10.9824L26.25 12.1962L23.25 13.41Z"
                                          fill="#222222" />
                                      <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M40.4995 7.5862H38.9995V9.10344C38.9995 9.5222 38.6643 9.86206 38.2495 9.86206C37.8348 9.86206 37.4996 9.5222 37.4996 9.10344V7.5862H35.9996C35.5848 7.5862 35.2496 7.24634 35.2496 6.82758C35.2496 6.40882 35.5848 6.06896 35.9996 6.06896H37.4996V4.55172C37.4996 4.13296 37.8348 3.7931 38.2495 3.7931C38.6643 3.7931 38.9995 4.13296 38.9995 4.55172V6.06896H40.4995C40.9143 6.06896 41.2495 6.40882 41.2495 6.82758C41.2495 7.24634 40.9143 7.5862 40.4995 7.5862ZM40.4995 22H36.7496C36.3348 22 35.9996 21.6601 35.9996 21.2414C35.9996 20.8226 36.3348 20.4827 36.7496 20.4827H40.4995C40.9143 20.4827 41.2495 20.8226 41.2495 21.2414C41.2495 21.6601 40.9143 22 40.4995 22ZM40.4995 25.0345H38.9995C38.5848 25.0345 38.2495 24.6946 38.2495 24.2758C38.2495 23.8571 38.5848 23.5172 38.9995 23.5172H40.4995C40.9143 23.5172 41.2495 23.8571 41.2495 24.2758C41.2495 24.6946 40.9143 25.0345 40.4995 25.0345ZM35.9996 25.0345H32.9996C32.5849 25.0345 32.2496 24.6946 32.2496 24.2758C32.2496 23.8571 32.5849 23.5172 32.9996 23.5172H35.9996C36.4143 23.5172 36.7496 23.8571 36.7496 24.2758C36.7496 24.6946 36.4143 25.0345 35.9996 25.0345ZM30.7496 18.2069C30.7496 18.4944 30.5891 18.7569 30.3349 18.8859L22.835 22.679C22.8245 22.6843 22.8117 22.682 22.7997 22.6873C22.7037 22.7298 22.6032 22.7586 22.4997 22.7586C22.3962 22.7586 22.2957 22.7298 22.1997 22.6873C22.1877 22.682 22.175 22.6843 22.1645 22.679L14.6646 18.8859C14.4103 18.7569 14.2498 18.4944 14.2498 18.2069V11.6365C14.2498 10.9689 14.0668 10.1807 14.3631 9.55103C14.5768 9.09965 15.1588 8.93351 15.5803 8.72034L19.1833 6.89813L22.1645 5.39C22.3752 5.28379 22.6242 5.28379 22.835 5.39L28.5432 8.27731C29.1514 8.58455 29.8511 8.77496 30.3686 9.24303C30.8434 9.67165 30.7496 10.1799 30.7496 10.7633V14.875V18.2069ZM11.9999 5.31034H8.2499C7.83516 5.31034 7.49991 4.97048 7.49991 4.55172C7.49991 4.13296 7.83516 3.7931 8.2499 3.7931H11.9999C12.4146 3.7931 12.7499 4.13296 12.7499 4.55172C12.7499 4.97048 12.4146 5.31034 11.9999 5.31034ZM11.9999 8.34482H10.4999C10.0851 8.34482 9.74989 8.00496 9.74989 7.5862C9.74989 7.16744 10.0851 6.82758 10.4999 6.82758H11.9999C12.4146 6.82758 12.7499 7.16744 12.7499 7.5862C12.7499 8.00496 12.4146 8.34482 11.9999 8.34482ZM11.0301 23.7395C11.3234 24.0361 11.3234 24.5156 11.0301 24.8122C10.8839 24.9601 10.6919 25.0345 10.4999 25.0345C10.3079 25.0345 10.1159 24.9601 9.96963 24.8122L8.2499 23.0727L6.53017 24.8122C6.38393 24.9601 6.19193 25.0345 5.99993 25.0345C5.80793 25.0345 5.61593 24.9601 5.46969 24.8122C5.17644 24.5156 5.17644 24.0361 5.46969 23.7395L7.18942 22L5.46969 20.2605C5.17644 19.9639 5.17644 19.4844 5.46969 19.1878C5.76293 18.8912 6.23693 18.8912 6.53017 19.1878L8.2499 20.9273L9.96963 19.1878C10.2629 18.8912 10.7369 18.8912 11.0301 19.1878C11.3234 19.4844 11.3234 19.9639 11.0301 20.2605L9.31039 22L11.0301 23.7395ZM3.74996 7.5862C3.74996 7.16744 4.0852 6.82758 4.49995 6.82758H7.49991C7.91466 6.82758 8.2499 7.16744 8.2499 7.5862C8.2499 8.00496 7.91466 8.34482 7.49991 8.34482H4.49995C4.0852 8.34482 3.74996 8.00496 3.74996 7.5862ZM4.49995 3.7931H5.24994C5.66468 3.7931 5.99993 4.13296 5.99993 4.55172C5.99993 4.97048 5.66468 5.31034 5.24994 5.31034H4.49995C4.0852 5.31034 3.74996 4.97048 3.74996 4.55172C3.74996 4.13296 4.0852 3.7931 4.49995 3.7931ZM32.9996 20.4827H33.7496C34.1643 20.4827 34.4996 20.8226 34.4996 21.2414C34.4996 21.6601 34.1643 22 33.7496 22H32.9996C32.5849 22 32.2496 21.6601 32.2496 21.2414C32.2496 20.8226 32.5849 20.4827 32.9996 20.4827ZM41.626 0H3.37346C1.51348 0 0 1.5309 0 3.41303V27.3103H44.9995V3.41303C44.9995 1.5309 43.486 0 41.626 0Z"
                                          fill="#222222" />
                                      <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M26.7312 35.6563C26.6314 37.4231 27.3934 39.1588 28.7779 40.2065H16.2231C17.6075 39.1588 18.3703 37.4223 18.2698 35.6547L26.7312 35.6563ZM0 32.2425C0 34.1238 1.51348 35.6547 3.37346 35.6547H16.7653C16.8718 36.9838 16.3026 38.2955 15.2481 39.0473L13.8981 40.0107C13.8118 40.0707 13.7398 40.145 13.6806 40.2262C12.7386 40.3263 11.9999 41.1244 11.9999 42.103C11.9999 43.1484 12.8406 43.9996 13.8748 43.9996H31.1246C32.1589 43.9996 32.9996 43.1484 32.9996 42.103C32.9996 41.1251 32.2616 40.3271 31.3204 40.2262C31.2626 40.1458 31.1906 40.0737 31.1066 40.013L29.7536 39.0488C28.6992 38.297 28.1284 36.9846 28.2357 35.6547H41.626C43.4867 35.6547 44.9995 34.1238 44.9995 32.2425V28.8271H0V32.2425Z"
                                          fill="#222222" />
                                  </svg>
                                  <p>
                                      {!! trans('partials/results.item__stage4') !!}
                                  </p>
                              </li>
                              <li>
                                  <div class="decor"></div>
                                  <svg width="41" height="40" viewBox="0 0 41 40" fill="none"
                                      xmlns="http://www.w3.org/2000/svg">
                                      <path
                                          d="M22.6964 34.8148C22.6962 35.0112 22.619 35.1995 22.4817 35.3384C22.3445 35.4772 22.1584 35.5553 21.9643 35.5556H19.0357C18.8415 35.5556 18.6553 35.4775 18.518 35.3386C18.3807 35.1997 18.3036 35.0113 18.3036 34.8148C18.3036 34.6184 18.3807 34.4299 18.518 34.291C18.6553 34.1521 18.8415 34.0741 19.0357 34.0741H21.9643C22.1584 34.0743 22.3445 34.1524 22.4817 34.2913C22.619 34.4301 22.6962 34.6184 22.6964 34.8148ZM25.3366 19.8579L25.9911 20.7407H29.7146L27.0893 18.0845L25.3366 19.8579ZM9.13669 20.7407H4.39286V10.3704H36.6071V20.7407H31.7854L27.607 16.5132C27.539 16.4445 27.4583 16.3899 27.3695 16.3527C27.2806 16.3154 27.1854 16.2963 27.0893 16.2963C26.9931 16.2963 26.8979 16.3154 26.8091 16.3527C26.7203 16.3899 26.6396 16.4445 26.5716 16.5132L24.4491 18.6606L21.8179 15.1111C21.7497 15.0191 21.6612 14.9444 21.5596 14.893C21.4579 14.8416 21.3458 14.8148 21.2321 14.8148C21.1185 14.8148 21.0064 14.8416 20.9047 14.893C20.8031 14.9444 20.7146 15.0191 20.6464 15.1111L18.3745 18.1759L15.2427 13.6493C15.1752 13.5517 15.0854 13.472 14.981 13.417C14.8766 13.362 14.7606 13.3333 14.6429 13.3333C14.5251 13.3333 14.4092 13.362 14.3047 13.417C14.2003 13.472 14.1106 13.5517 14.043 13.6493L9.13669 20.7407ZM24.1607 14.0741C24.1607 14.2206 24.2037 14.3638 24.2841 14.4856C24.3646 14.6074 24.4789 14.7024 24.6127 14.7584C24.7465 14.8145 24.8937 14.8292 25.0357 14.8006C25.1777 14.772 25.3082 14.7015 25.4106 14.5979C25.513 14.4943 25.5827 14.3623 25.6109 14.2186C25.6392 14.0749 25.6247 13.926 25.5693 13.7906C25.5139 13.6553 25.42 13.5396 25.2996 13.4582C25.1792 13.3768 25.0377 13.3333 24.8929 13.3333C24.6987 13.3333 24.5125 13.4114 24.3752 13.5503C24.2379 13.6892 24.1607 13.8776 24.1607 14.0741ZM18.3036 20.7407H24.1607L21.2321 16.7901L18.3036 20.7407ZM0 5.92593H41V39.2593C40.9998 39.4556 40.9226 39.6439 40.7853 39.7828C40.6481 39.9217 40.462 39.9998 40.2679 40H0.732143C0.538033 39.9998 0.351937 39.9217 0.21468 39.7828C0.0774242 39.6439 0.000218005 39.4556 0 39.2593V5.92593ZM10.25 28.8889C10.25 28.6924 10.1729 28.504 10.0356 28.3651C9.89826 28.2262 9.71203 28.1481 9.51786 28.1481H8.05357C7.8594 28.1481 7.67317 28.2262 7.53587 28.3651C7.39857 28.504 7.32143 28.6924 7.32143 28.8889C7.32143 29.0853 7.39857 29.2738 7.53587 29.4127C7.67317 29.5516 7.8594 29.6296 8.05357 29.6296H9.51786C9.71203 29.6296 9.89826 29.5516 10.0356 29.4127C10.1729 29.2738 10.25 29.0853 10.25 28.8889ZM24.1607 34.8148C24.16 34.2257 23.9284 33.6608 23.5166 33.2442C23.1049 32.8276 22.5466 32.5933 21.9643 32.5926H19.0357C18.4532 32.5926 17.8945 32.8267 17.4826 33.2435C17.0707 33.6602 16.8393 34.2254 16.8393 34.8148C16.8393 35.4042 17.0707 35.9694 17.4826 36.3862C17.8945 36.8029 18.4532 37.037 19.0357 37.037H21.9643C22.5466 37.0364 23.1049 36.802 23.5166 36.3854C23.9284 35.9688 24.16 35.404 24.1607 34.8148ZM29.2857 28.8889C29.2857 28.6924 29.2086 28.504 29.0713 28.3651C28.934 28.2262 28.7477 28.1481 28.5536 28.1481H12.4464C12.2523 28.1481 12.066 28.2262 11.9287 28.3651C11.7914 28.504 11.7143 28.6924 11.7143 28.8889C11.7143 29.0853 11.7914 29.2738 11.9287 29.4127C12.066 29.5516 12.2523 29.6296 12.4464 29.6296H28.5536C28.7477 29.6296 28.934 29.5516 29.0713 29.4127C29.2086 29.2738 29.2857 29.0853 29.2857 28.8889ZM16.1071 26.6667H24.8929C25.087 26.6667 25.2733 26.5886 25.4106 26.4497C25.5479 26.3108 25.625 26.1224 25.625 25.9259C25.625 25.7295 25.5479 25.5411 25.4106 25.4021C25.2733 25.2632 25.087 25.1852 24.8929 25.1852H16.1071C15.913 25.1852 15.7267 25.2632 15.5894 25.4021C15.4521 25.5411 15.375 25.7295 15.375 25.9259C15.375 26.1224 15.4521 26.3108 15.5894 26.4497C15.7267 26.5886 15.913 26.6667 16.1071 26.6667ZM33.6786 28.8889C33.6786 28.6924 33.6014 28.504 33.4641 28.3651C33.3268 28.2262 33.1406 28.1481 32.9464 28.1481H31.4821C31.288 28.1481 31.1017 28.2262 30.9644 28.3651C30.8271 28.504 30.75 28.6924 30.75 28.8889C30.75 29.0853 30.8271 29.2738 30.9644 29.4127C31.1017 29.5516 31.288 29.6296 31.4821 29.6296H32.9464C33.1406 29.6296 33.3268 29.5516 33.4641 29.4127C33.6014 29.2738 33.6786 29.0853 33.6786 28.8889ZM2.92857 21.4815C2.92857 21.6779 3.00571 21.8663 3.14301 22.0053C3.28031 22.1442 3.46654 22.2222 3.66071 22.2222H37.3393C37.5335 22.2222 37.7197 22.1442 37.857 22.0053C37.9943 21.8663 38.0714 21.6779 38.0714 21.4815V9.62963C38.0714 9.43317 37.9943 9.24476 37.857 9.10585C37.7197 8.96693 37.5335 8.88889 37.3393 8.88889H3.66071C3.46654 8.88889 3.28031 8.96693 3.14301 9.10585C3.00571 9.24476 2.92857 9.43317 2.92857 9.62963V21.4815ZM10.924 20.7407H16.4732L17.45 19.4231L14.6429 15.3657L10.924 20.7407ZM41 0.740741V4.44444H0V0.740741C0.000218005 0.544352 0.0774242 0.356069 0.21468 0.217201C0.351937 0.0783334 0.538033 0.000220566 0.732143 0H40.2679C40.462 0.000220566 40.6481 0.0783334 40.7853 0.217201C40.9226 0.356069 40.9998 0.544352 41 0.740741ZM2.92857 2.22222C2.92857 2.07572 2.88563 1.9325 2.80518 1.81069C2.72473 1.68887 2.61039 1.59393 2.47661 1.53787C2.34283 1.4818 2.19562 1.46713 2.05359 1.49571C1.91157 1.5243 1.78112 1.59485 1.67873 1.69844C1.57633 1.80203 1.5066 1.93402 1.47835 2.07771C1.4501 2.2214 1.4646 2.37034 1.52002 2.50569C1.57543 2.64104 1.66927 2.75673 1.78967 2.83813C1.91007 2.91952 2.05162 2.96296 2.19643 2.96296C2.3906 2.96296 2.57683 2.88492 2.71413 2.746C2.85143 2.60709 2.92857 2.41868 2.92857 2.22222ZM5.85714 2.22222C5.85714 2.07572 5.8142 1.9325 5.73375 1.81069C5.65331 1.68887 5.53896 1.59393 5.40518 1.53787C5.2714 1.4818 5.12419 1.46713 4.98217 1.49571C4.84014 1.5243 4.70969 1.59485 4.6073 1.69844C4.50491 1.80203 4.43517 1.93402 4.40693 2.07771C4.37867 2.2214 4.39317 2.37034 4.44859 2.50569C4.504 2.64104 4.59784 2.75673 4.71824 2.83813C4.83864 2.91952 4.9802 2.96296 5.125 2.96296C5.31918 2.96296 5.5054 2.88492 5.6427 2.746C5.78001 2.60709 5.85714 2.41868 5.85714 2.22222ZM8.78571 2.22222C8.78571 2.07572 8.74277 1.9325 8.66233 1.81069C8.58188 1.68887 8.46753 1.59393 8.33375 1.53787C8.19997 1.4818 8.05276 1.46713 7.91074 1.49571C7.76872 1.5243 7.63826 1.59485 7.53587 1.69844C7.43348 1.80203 7.36375 1.93402 7.3355 2.07771C7.30725 2.2214 7.32175 2.37034 7.37716 2.50569C7.43257 2.64104 7.52641 2.75673 7.64681 2.83813C7.76721 2.91952 7.90877 2.96296 8.05357 2.96296C8.24775 2.96296 8.43397 2.88492 8.57127 2.746C8.70858 2.60709 8.78571 2.41868 8.78571 2.22222Z"
                                          fill="#222222" />
                                  </svg>
                                  <p>
                                      {!! trans('partials/results.item__stage5') !!}
                                  </p>
                              </li>
                              <li class="empty">
                              </li>
                              <li>
                                  <div class="decor"></div>
                                  <svg width="45" height="44" viewBox="0 0 45 44" fill="none"
                                      xmlns="http://www.w3.org/2000/svg">
                                      <path
                                          d="M22.0017 23.0503C19.6992 23.0503 17.793 24.7826 17.5195 27.0126H26.4844C26.2104 24.7826 24.3042 23.0503 22.0017 23.0503Z"
                                          fill="#222222" />
                                      <path
                                          d="M22.0057 11.1626C16.0277 11.1626 11.1641 16.0251 11.1641 22.0015C11.1641 27.9773 16.0277 32.8393 22.0057 32.8393C27.9805 32.8393 32.8407 27.9779 32.8407 22.0015C32.8407 16.0251 27.9805 11.1626 22.0057 11.1626ZM22.003 14.212C23.8454 14.212 25.3446 15.7112 25.3446 17.5542C25.3446 19.3967 23.8454 20.8959 22.003 20.8959C20.1599 20.8959 18.6607 19.3967 18.6607 17.5542C18.6607 15.7112 20.1599 14.212 22.003 14.212ZM27.0725 28.1196H16.9334C16.6278 28.1196 16.3798 27.8721 16.3798 27.566C16.3798 24.4651 18.9026 21.9428 22.003 21.9428C25.1033 21.9428 27.6261 24.4657 27.6261 27.566C27.6261 27.8721 27.3787 28.1196 27.0725 28.1196Z"
                                          fill="#222222" />
                                      <path
                                          d="M22.0026 19.7883C23.2349 19.7883 24.237 18.7857 24.237 17.5538C24.237 16.322 23.2344 15.3188 22.0026 15.3188C20.7707 15.3188 19.7676 16.3215 19.7676 17.5538C19.7676 18.7862 20.7702 19.7883 22.0026 19.7883Z"
                                          fill="#222222" />
                                      <path
                                          d="M39.9807 18.9063C39.8002 17.8246 39.5101 16.7406 39.1198 15.6842C39.0318 15.4462 39.1165 15.1782 39.3263 15.0354L42.2356 13.0479L39.8711 8.95324L36.6888 10.4796C36.4596 10.5887 36.1856 10.5294 36.0239 10.3345C35.3164 9.48362 34.5236 8.69027 33.6688 7.97665C33.4739 7.81444 33.4147 7.54039 33.5243 7.3123L35.0506 4.13282L30.9527 1.76662L28.9657 4.67482C28.8218 4.88464 28.556 4.97101 28.3158 4.88188C27.2943 4.5032 26.2103 4.21365 25.0942 4.02043C24.8445 3.97725 24.6557 3.7702 24.6364 3.51719L24.3656 0H19.6388L19.3681 3.51719C19.3487 3.7702 19.1599 3.97725 18.9102 4.02043C17.7913 4.21365 16.7073 4.5032 15.6892 4.88188C15.4512 4.9699 15.1826 4.8852 15.0393 4.67537L13.049 1.76662L8.9538 4.13282L10.4796 7.31285C10.5892 7.5415 10.53 7.81499 10.3351 7.9772C9.4814 8.68972 8.68806 9.48362 7.97665 10.3356C7.81443 10.5305 7.53984 10.5898 7.31229 10.4801L4.13227 8.95435L1.76662 13.0479L4.67482 15.0354C4.88409 15.1782 4.9699 15.4456 4.88243 15.6831C4.50043 16.7228 4.21033 17.8079 4.02043 18.9097C3.97725 19.1599 3.76964 19.3487 3.51663 19.3675L0 19.6327V24.3645L3.51663 24.6319C3.76964 24.6513 3.97725 24.8401 4.02043 25.0898C4.21088 26.1943 4.50098 27.2788 4.88243 28.313C4.9699 28.5511 4.88464 28.8179 4.67537 28.9613L1.76662 30.951L4.13282 35.0462L7.31285 33.5226C7.5415 33.4152 7.81443 33.4728 7.97665 33.6666C8.70024 34.5308 9.49358 35.323 10.3351 36.0228C10.5305 36.185 10.5903 36.4591 10.4807 36.6877L8.95435 39.8705L13.049 42.2361L15.0393 39.3246C15.1826 39.1154 15.45 39.0301 15.6876 39.1176C16.7339 39.5029 17.8179 39.7941 18.9102 39.9829C19.1599 40.0261 19.3487 40.2331 19.3681 40.4856L19.6388 44H24.3656L24.6364 40.4856C24.6557 40.2331 24.8445 40.0261 25.0937 39.9829C26.197 39.7919 27.281 39.5012 28.3163 39.1181C28.5538 39.0307 28.8223 39.1154 28.9657 39.3252L30.9527 42.2361L35.0506 39.8705L33.5243 36.6877C33.4147 36.4591 33.4739 36.185 33.6693 36.0228C34.512 35.3219 35.3042 34.5297 36.0245 33.6677C36.1867 33.4722 36.4613 33.4147 36.6883 33.5226L39.8711 35.0462L42.2356 30.9516L39.3263 28.9619C39.1165 28.8185 39.0312 28.5511 39.1198 28.3124C39.5095 27.2611 39.7996 26.1782 39.9807 25.0931C40.0227 24.8423 40.2304 24.6519 40.4845 24.6325L44.0017 24.3651V19.6332L40.485 19.3681C40.2309 19.3481 40.0227 19.1577 39.9807 18.9063ZM22.005 33.9467C15.4163 33.9467 10.0561 28.5882 10.0561 22.0017C10.0561 15.4146 15.4163 10.0555 22.005 10.0555C28.5898 10.0555 33.9473 15.4146 33.9473 22.0017C33.9473 28.5882 28.5898 33.9467 22.005 33.9467Z"
                                          fill="#222222" />
                                  </svg>
                                  <p>
                                      9. Техническая <br> поддержка
                                  </p>
                              </li>
                              <li>
                                  <div class="decor"></div>
                                  <svg width="46" height="35" viewBox="0 0 46 35" fill="none"
                                      xmlns="http://www.w3.org/2000/svg">
                                      <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M2.91094 0C2.57213 0 2.3 0.359375 2.3 0.805122V31.1111H0.79362C0.35424 31.1111 0 31.4465 0 31.8631V31.9147C0 32.3312 0.35424 32.6667 0.79362 32.6667H2.3V34.1949C2.3 34.6406 2.57213 35 2.91094 35H3.2224C3.5612 35 3.83333 34.6406 3.83333 34.1949V32.6667H45.2064C45.6458 32.6667 46 32.3312 46 31.9147V31.8631C46 31.4465 45.6458 31.1111 45.2064 31.1111H44.4667H3.83333V0.805122C3.83333 0.359375 3.5612 0 3.2224 0H2.91094ZM9.96667 8.55556L8.32402 14.1109L10.7603 17.4058L13.2834 14.2765L9.96667 8.55556ZM17.6333 10.1111L10.7333 18.6667L6.13333 12.4444L4.6 16.3333V26.7027V30.3333H43.7H44.4667V21L38.3333 12.4444L32.9667 20.2222L27.6 14.7778L23 18.6667L17.6333 10.1111ZM32.9667 12.4444L29.894 16.0067L32.8633 19.0176L35.3296 15.4416L32.9667 12.4444ZM23 14L21.9428 15.5328L23.1782 17.503L24.9646 15.9931L23 14Z"
                                          fill="#222222" />
                                  </svg>
                                  <p>
                                      {!! trans('partials/results.item__stage7') !!}
                                  </p>
                              </li>
                              <li>
                                  <div class="decor"></div>
                                  <svg width="54" height="47" viewBox="0 0 54 47" fill="none"
                                      xmlns="http://www.w3.org/2000/svg">
                                      <path
                                          d="M19.5095 8.09582C19.4458 7.77413 19.2663 7.50044 19.0032 7.32413C18.765 7.16536 18.4844 7.10951 18.2149 7.1649L17.7603 7.25721C17.686 7.27244 17.6107 7.29782 17.5392 7.33105C17.5101 7.34398 17.4806 7.35459 17.4492 7.36151C17.3578 7.38321 17.2641 7.37628 17.175 7.34121C17.0592 7.29598 16.965 7.20367 16.9175 7.08782C16.4823 6.02998 15.8541 5.08659 15.0515 4.28444C15.0298 4.26275 15.0109 4.23921 14.9943 4.21567C14.9661 4.17367 14.9449 4.12428 14.9324 4.07398C14.9273 4.05275 14.9204 4.03151 14.9255 4.03798L14.9167 3.98905L14.926 3.87505C14.9412 3.79013 14.9758 3.71628 15.0501 3.62951L15.3907 3.11213C15.7332 2.56982 15.5892 1.83136 15.0695 1.46582C14.8286 1.29644 14.541 1.23321 14.2609 1.28951C13.9761 1.34582 13.7306 1.51798 13.5695 1.77367L13.3147 2.17659C13.281 2.23013 13.252 2.28967 13.2257 2.35244C13.1781 2.46644 13.0844 2.55828 12.9704 2.60398C12.855 2.64921 12.7244 2.64736 12.6113 2.59567C11.6126 2.14936 10.534 1.92228 9.38842 1.92182C9.1738 1.92551 8.96842 1.74874 8.93888 1.51244L8.83319 0.953052C8.7695 0.630898 8.59042 0.356745 8.32688 0.180437C8.08873 0.0216678 7.80903 -0.0355629 7.53857 0.0216679C6.9455 0.142129 6.56473 0.758744 6.69027 1.3989L6.8038 1.95274C6.86473 2.17844 6.7498 2.41567 6.53565 2.50382C5.48057 2.94044 4.54688 3.59767 3.76042 4.45659C3.60442 4.6269 3.34365 4.65551 3.15442 4.52213L2.80596 4.27936C2.56411 4.10951 2.27703 4.04675 1.9978 4.10305C1.71303 4.15936 1.4675 4.33105 1.3055 4.58767C0.963034 5.13044 1.10703 5.8689 1.62673 6.23351L1.98673 6.4869C2.16211 6.61059 2.2295 6.83536 2.15057 7.03475C1.70057 8.17105 1.49842 9.37382 1.54965 10.6103C1.55888 10.8378 1.4038 11.0363 1.18042 11.0815L0.872111 11.1443C0.279034 11.2647 -0.101274 11.8818 0.0238029 12.5192C0.0870337 12.8404 0.266572 13.1146 0.528726 13.29C0.765495 13.4483 1.04565 13.506 1.31888 13.4501L1.69503 13.3735C1.91288 13.3297 2.12934 13.446 2.2138 13.6504C2.68365 14.7923 3.37042 15.7943 4.25519 16.6278C4.4158 16.7787 4.44673 17.0234 4.32903 17.2098L4.14396 17.5034C3.8015 18.0461 3.9455 18.7846 4.46473 19.1497C4.70519 19.3195 4.99227 19.3837 5.27334 19.3264C5.55811 19.2701 5.80365 19.0984 5.96565 18.8423L6.2278 18.4264C6.34919 18.2441 6.58273 18.1721 6.78534 18.2547C7.41627 18.5104 8.09704 18.6803 8.80734 18.7606C8.98827 18.7818 9.16965 18.8021 9.34827 18.81H9.35011C9.63211 18.8206 9.88596 18.8197 10.132 18.8054C10.1592 18.804 10.1864 18.8044 10.2104 18.8072L10.2907 18.8243C10.4495 18.8723 10.57 19.0047 10.6115 19.2027L10.7015 19.662C10.7647 19.9846 10.9447 20.2592 11.2078 20.4346C11.3878 20.5541 11.5853 20.6155 11.7884 20.6155C11.8572 20.6155 11.9273 20.6081 11.997 20.5938C12.5897 20.4734 12.9704 19.8567 12.8453 19.2194L12.7517 18.7426C12.7429 18.6997 12.7327 18.66 12.7212 18.6203C12.6557 18.4011 12.7581 18.1707 12.9649 18.072C13.215 17.9529 13.4643 17.8163 13.7057 17.6672C14.41 17.232 15.0437 16.6837 15.5892 16.038C15.6289 15.9909 15.6769 15.9531 15.7327 15.9249C15.7812 15.8995 15.8338 15.8838 15.8864 15.8774L15.903 15.8783L15.9275 15.8778C16.0489 15.8654 16.1601 15.9134 16.2427 15.9858C16.2746 16.0144 16.3069 16.0403 16.3387 16.062L16.7273 16.3357C16.9692 16.506 17.2563 16.5687 17.5355 16.5124C17.8203 16.4561 18.0658 16.2844 18.2278 16.0278C18.5703 15.4851 18.4263 14.7466 17.9066 14.382L17.5207 14.1101C17.4603 14.0677 17.3966 14.0317 17.332 14.0035C17.1127 13.9061 17.0038 13.6527 17.0846 13.4266C17.4695 12.3466 17.637 11.2163 17.5812 10.0661C17.5752 9.94244 17.62 9.82013 17.704 9.72967C17.788 9.63967 17.9061 9.58567 18.0303 9.5829C18.0893 9.58105 18.1484 9.57644 18.2093 9.56398L18.6612 9.47213C19.2543 9.35075 19.6346 8.73413 19.5095 8.09582ZM10.6673 14.8754C9.47796 15.1167 8.25857 14.8735 7.25288 14.2029C6.21765 13.5129 5.51427 12.4537 5.27196 11.22C4.77765 8.70228 6.39027 6.24459 8.86688 5.74013C10.0549 5.49828 11.2669 5.73644 12.2804 6.41259C13.3157 7.10305 14.019 8.16228 14.2613 9.39598C14.7561 11.9137 13.1435 14.3714 10.6673 14.8754Z"
                                          fill="#222222" />
                                      <path
                                          d="M17.4598 5.1222C17.4958 5.18082 17.5341 5.23712 17.5692 5.29666C17.6707 5.46928 17.7672 5.64559 17.8586 5.82466L17.9371 5.80851C18.5721 5.67789 19.2234 5.80805 19.7703 6.17266C20.3426 6.55389 20.7321 7.14282 20.8669 7.83005C21.136 9.19989 20.2863 10.5337 18.9695 10.8213C18.9663 10.9256 18.9571 11.0294 18.9501 11.1333H53.9984V4.77051H17.2383C17.2424 4.77651 17.2457 4.78251 17.2498 4.78851C17.3227 4.89789 17.3911 5.01005 17.4598 5.1222ZM49.1491 7.48066C49.1491 6.97112 49.5626 6.55758 50.0721 6.55758H50.4118C50.9214 6.55758 51.3349 6.97112 51.3349 7.48066V7.83789C51.3349 8.34743 50.9214 8.76097 50.4118 8.76097H50.0721C49.5626 8.76097 49.1491 8.34743 49.1491 7.83789V7.48066ZM44.2655 7.48066C44.2655 6.97112 44.6791 6.55758 45.1886 6.55758H45.5278C46.0374 6.55758 46.4509 6.97112 46.4509 7.48066V7.83789C46.4509 8.34743 46.0374 8.76097 45.5278 8.76097H45.1886C44.6791 8.76097 44.2655 8.34743 44.2655 7.83789V7.48066ZM39.382 7.48066C39.382 6.97112 39.7955 6.55758 40.3051 6.55758H40.6443C41.1538 6.55758 41.5674 6.97112 41.5674 7.48066V7.83789C41.5674 8.34743 41.1538 8.76097 40.6443 8.76097H40.3051C39.7955 8.76097 39.382 8.34743 39.382 7.83789V7.48066Z"
                                          fill="#222222" />
                                      <path
                                          d="M48.2698 42.1147C48.3137 42.0594 48.3543 42.0017 48.3917 41.9426C48.4 41.9292 48.4078 41.9154 48.4157 41.902C48.4822 41.7912 48.5371 41.6749 48.5814 41.5549C48.5892 41.5332 48.5985 41.5124 48.6059 41.4903C48.6243 41.434 48.6395 41.3772 48.6529 41.3195C48.6645 41.2706 48.6737 41.2207 48.6815 41.1709C48.6903 41.1174 48.6986 41.0643 48.7032 41.0103C48.7102 40.9244 48.712 40.8377 48.7079 40.75C48.7065 40.7177 48.7037 40.6853 48.7009 40.6535C48.6908 40.5478 48.6765 40.4421 48.6497 40.3364C48.4231 39.4627 47.6652 38.8973 46.8391 38.9292C46.7209 38.9338 46.6014 38.9504 46.4818 38.9804C45.2528 39.2343 44.0385 39.483 42.8283 39.73C41.9722 39.9049 41.1174 40.0793 40.2635 40.2533C38.5628 40.6 36.862 40.947 35.1608 41.2964C35.0422 41.3472 34.9129 41.3721 34.7943 41.3707C34.5931 41.4123 34.3918 41.4538 34.1906 41.4953C34.1011 41.5138 34.0102 41.5193 33.9188 41.5101L29.8494 41.1298C29.8166 41.1266 29.7838 41.122 29.7515 41.1155L22.7034 39.6838C22.2035 39.5823 21.8809 39.0953 21.9825 38.5955C22.0835 38.0966 22.57 37.7726 23.0708 37.8746L30.0705 39.2957L33.9534 39.6584C34.1242 39.6234 34.2954 39.5883 34.4666 39.5532C34.468 39.5518 34.4694 39.5509 34.4708 39.55C34.6074 39.442 34.8054 39.2583 34.9558 39.0155C34.9692 38.9933 34.9831 38.9717 34.9955 38.9486C35.0135 38.9158 35.0302 38.8821 35.0458 38.8475C35.0625 38.811 35.0772 38.7727 35.0911 38.734C35.1012 38.7058 35.1118 38.6781 35.1197 38.649C35.1395 38.5775 35.1557 38.5032 35.1626 38.4252C35.2355 37.6743 34.6 36.718 33.448 36.4641C28.7463 35.1889 24.1032 33.9243 19.4454 32.6426L19.2982 32.6915C17.9191 33.1521 16.5446 33.6081 15.1665 34.0678C13.0545 34.7721 10.9411 35.4778 8.83231 36.1784C8.83 36.1793 8.82815 36.1789 8.82584 36.1798C7.98169 36.4604 7.13338 36.7447 6.29015 37.0244L6.08984 44.4926L13.3111 41.9647C13.4098 41.9301 13.5128 41.913 13.6162 41.913C13.7205 41.913 13.8252 41.9306 13.9249 41.9661L23.662 45.4212C23.7003 45.4346 23.7377 45.4507 23.7742 45.4692C24.3049 45.741 24.9322 45.9981 25.588 46.2118C26.1151 46.3706 26.6722 46.4966 27.3137 46.6014C34.0568 45.3012 40.7818 44.0001 47.5258 42.682C47.8249 42.562 48.0742 42.3607 48.2698 42.1147Z"
                                          fill="#222222" />
                                      <path
                                          d="M8.0201 13.0507C8.72395 13.5206 9.5658 13.6867 10.3901 13.5187C12.1236 13.1657 13.2507 11.4363 12.9023 9.66305C12.7315 8.79351 12.2376 8.04859 11.5116 7.56443C10.9869 7.21459 10.3855 7.0332 9.77164 7.0332C9.5621 7.0332 9.35164 7.05443 9.1421 7.09736C7.40856 7.45043 6.28149 9.17982 6.62949 10.953C6.80072 11.8217 7.29456 12.5675 8.0201 13.0507Z"
                                          fill="#222222" />
                                      <path
                                          d="M18.6624 12.9795C18.6448 13.0478 18.631 13.117 18.6121 13.1849L18.7035 13.2495C19.8167 14.0332 20.1282 15.6112 19.3985 16.7673C19.0325 17.347 18.4676 17.7384 17.8076 17.8709C17.2048 17.99 16.5928 17.8801 16.0676 17.5589C15.5078 18.1132 14.8856 18.5886 14.209 18.9804C14.4628 20.3521 13.5993 21.6809 12.2724 21.9509C12.1127 21.9832 11.9521 21.9993 11.7924 21.9993C11.7915 21.9993 11.7905 21.9998 11.7896 21.9998C11.6475 21.9998 11.5067 21.9832 11.3673 21.9583C11.3272 21.9509 11.2879 21.9407 11.2482 21.9315C11.1439 21.9075 11.0419 21.8761 10.9408 21.8383C10.9016 21.8235 10.8628 21.8101 10.8245 21.793C10.6921 21.7349 10.5624 21.6689 10.4387 21.5867C10.3205 21.5078 10.2112 21.4192 10.1092 21.3236C10.075 21.2913 10.0459 21.2549 10.0136 21.2207C9.94946 21.1538 9.88623 21.0864 9.82992 21.013C9.79669 20.9696 9.76854 20.9226 9.73854 20.8769C9.69146 20.8063 9.64531 20.7356 9.60561 20.6609C9.57838 20.6096 9.55577 20.5566 9.53177 20.5035C9.51007 20.4555 9.48377 20.4103 9.46484 20.3604V34.022C11.9839 33.1838 14.5021 32.3461 17.0258 31.5038C17.7268 31.2698 18.4265 31.0372 19.1276 30.8032C19.3016 30.7446 19.4881 30.7395 19.6653 30.7884C24.4122 32.096 29.1421 33.3841 33.889 34.6732C35.7878 35.09 37.1742 36.8175 37.0016 38.5949C36.9878 38.7537 36.9624 38.906 36.9273 39.0504C37.9316 38.8455 38.9355 38.6406 39.9393 38.4361C41.9835 38.0198 44.0272 37.603 46.0713 37.1816C46.3062 37.1221 46.543 37.0893 46.7779 37.0806C47.8353 37.0418 48.8618 37.4987 49.5781 38.2866C49.9764 38.7241 50.2787 39.2637 50.4379 39.8775C50.4744 40.0215 50.4998 40.1655 50.5196 40.31C50.5252 40.3492 50.5284 40.3884 50.5325 40.4277C50.5445 40.5407 50.5515 40.6538 50.5538 40.7664C50.5542 40.802 50.5561 40.838 50.5556 40.8735C50.5528 41.1656 50.5173 41.4541 50.4513 41.7333C50.4476 41.749 50.4462 41.7652 50.4425 41.7809H53.9996V12.9795H18.6624ZM26.3202 25.3289L23.7748 28.009C23.6008 28.1923 23.3585 28.2966 23.1056 28.2966C22.8527 28.2966 22.6104 28.1923 22.4364 28.009L21.1044 26.6064C20.7532 26.2367 20.7684 25.6529 21.1381 25.3016C21.5078 24.9504 22.0916 24.9652 22.4433 25.3353L23.1061 26.0332L24.9822 24.0583C25.333 23.6886 25.9173 23.6738 26.2875 24.0246C26.6562 24.3753 26.6715 24.9592 26.3202 25.3289ZM26.3202 18.0075L23.7748 20.6876C23.6008 20.8709 23.3585 20.9752 23.1056 20.9752C22.8527 20.9752 22.6104 20.8709 22.4364 20.6876L21.1044 19.285C20.7532 18.9153 20.7684 18.3315 21.1381 17.9803C21.5078 17.629 22.0916 17.6438 22.4433 18.014L23.1061 18.7118L24.9822 16.7369C25.333 16.3672 25.9173 16.3524 26.2875 16.7032C26.6562 17.0535 26.6715 17.6378 26.3202 18.0075ZM43.8393 27.4367H30.6245C30.115 27.4367 29.7015 27.0232 29.7015 26.5136C29.7015 26.0041 30.115 25.5906 30.6245 25.5906H43.8388C44.3484 25.5906 44.7619 26.0041 44.7619 26.5136C44.7619 27.0232 44.3488 27.4367 43.8393 27.4367ZM43.8393 19.6349H30.6245C30.115 19.6349 29.7015 19.2213 29.7015 18.7118C29.7015 18.2023 30.115 17.7887 30.6245 17.7887H43.8388C44.3484 17.7887 44.7619 18.2023 44.7619 18.7118C44.7619 19.2213 44.3488 19.6349 43.8393 19.6349Z"
                                          fill="#222222" />
                                  </svg>
                                  <p>
                                      {!! trans('partials/results.item__stage8') !!}
                                  </p>
                              </li>
                              <li>
                                  <div class="decor"></div>
                                  <svg width="49" height="40" viewBox="0 0 49 40" fill="none"
                                      xmlns="http://www.w3.org/2000/svg">
                                      <path
                                          d="M49 6.1413V0.508133C49 0.227644 48.7746 0 48.4968 0H0.503204C0.225435 0 0 0.227644 0 0.508133V6.1413H49ZM10.5472 2.22664C10.7434 2.02847 11.0624 2.02847 11.2587 2.22664L11.8082 2.78152L12.3577 2.22664C12.5539 2.02847 12.873 2.02847 13.0692 2.22664C13.2655 2.42481 13.2655 2.74697 13.0692 2.94514L12.5197 3.50002L13.0682 4.05389C13.2645 4.25206 13.2645 4.57422 13.0682 4.77239C12.9696 4.87198 12.8408 4.92076 12.7119 4.92076C12.5831 4.92076 12.4543 4.87097 12.3557 4.77239L11.8072 4.21852L11.2587 4.77239C11.1601 4.87198 11.0312 4.92076 10.9024 4.92076C10.7736 4.92076 10.6448 4.87097 10.5462 4.77239C10.3499 4.57422 10.3499 4.25206 10.5462 4.05389L11.0946 3.50002L10.5451 2.94514C10.3499 2.74595 10.3499 2.42481 10.5472 2.22664ZM6.82647 2.99189H8.98823C9.266 2.99189 9.49143 3.21953 9.49143 3.50002C9.49143 3.78051 9.266 4.00816 8.98823 4.00816H6.82647C6.5487 4.00816 6.32326 3.78051 6.32326 3.50002C6.32326 3.21953 6.5487 2.99189 6.82647 2.99189ZM3.82133 1.93599C4.67577 1.93599 5.37019 2.63721 5.37019 3.50002C5.37019 4.36283 4.67577 5.06406 3.82133 5.06406C2.9679 5.06406 2.27247 4.36283 2.27247 3.50002C2.27247 2.63721 2.96689 1.93599 3.82133 1.93599Z"
                                          fill="#222222" />
                                      <path
                                          d="M0 7.15723V39.4918C0 39.7723 0.225435 39.9999 0.503204 39.9999H48.4968C48.7746 39.9999 49 39.7723 49 39.4918V7.15723H0ZM18.7091 28.9683C18.9336 29.134 18.9819 29.4521 18.8178 29.6787C18.7192 29.8139 18.5662 29.886 18.4112 29.886C18.3076 29.886 18.2039 29.8545 18.1143 29.7875L9.58403 23.4795C9.55685 23.4592 9.54075 23.4307 9.51861 23.4063C9.50552 23.3921 9.48741 23.386 9.47634 23.3707C9.47131 23.3636 9.47131 23.3555 9.46627 23.3484C9.44615 23.3189 9.43507 23.2864 9.423 23.2529C9.41193 23.2244 9.39885 23.1959 9.39281 23.1665C9.38677 23.135 9.38878 23.1025 9.38878 23.0699C9.38878 23.0374 9.38677 23.0059 9.39281 22.9734C9.39885 22.9439 9.41293 22.9155 9.423 22.887C9.43608 22.8535 9.44715 22.822 9.46627 22.7915C9.47131 22.7833 9.47131 22.7752 9.47634 22.7691C9.49244 22.7468 9.51659 22.7346 9.53572 22.7142C9.55383 22.697 9.5649 22.6746 9.58503 22.6594L18.1153 16.3504C18.3378 16.1837 18.6538 16.2325 18.8188 16.4601C18.9829 16.6868 18.9346 17.0048 18.7101 17.1705L10.7343 23.0689L18.7091 28.9683ZM27.3371 13.7508L22.6402 32.636C22.5828 32.8667 22.3775 33.0202 22.1531 33.0202C22.1118 33.0202 22.0705 33.0151 22.0303 33.005C21.7606 32.9369 21.5965 32.6604 21.6649 32.3881L26.3619 13.5028C26.4293 13.2304 26.699 13.0638 26.9727 13.1339C27.2415 13.203 27.4045 13.4784 27.3371 13.7508ZM39.6092 23.1675C39.6042 23.1959 39.5901 23.2224 39.58 23.2498C39.5669 23.2844 39.5559 23.3179 39.5347 23.3494C39.5297 23.3565 39.5297 23.3646 39.5247 23.3707C39.5136 23.386 39.4965 23.3921 39.4844 23.4053C39.4623 23.4297 39.4452 23.4592 39.417 23.4795L30.8877 29.7875C30.7971 29.8535 30.6934 29.886 30.5898 29.886C30.4358 29.886 30.2818 29.8139 30.1842 29.6787C30.0201 29.4511 30.0685 29.134 30.2919 28.9683L38.2667 23.0699L30.2919 17.1715C30.0674 17.0059 30.0191 16.6878 30.1842 16.4611C30.3492 16.2345 30.6632 16.1868 30.8877 16.3514L39.417 22.6604C39.4381 22.6766 39.4512 22.7 39.4693 22.7193C39.4884 22.7376 39.5096 22.7488 39.5257 22.7701C39.5307 22.7772 39.5307 22.7854 39.5357 22.7915C39.5569 22.822 39.5679 22.8555 39.581 22.8911C39.5921 22.9185 39.6052 22.9449 39.6102 22.9734C39.6173 23.0059 39.6142 23.0374 39.6142 23.0709C39.6142 23.1045 39.6162 23.135 39.6092 23.1675Z"
                                          fill="#222222" />
                                      <path
                                          d="M3.82175 4.04768C4.12134 4.04768 4.3642 3.80244 4.3642 3.49992C4.3642 3.19739 4.12134 2.95215 3.82175 2.95215C3.52216 2.95215 3.2793 3.19739 3.2793 3.49992C3.2793 3.80244 3.52216 4.04768 3.82175 4.04768Z"
                                          fill="#222222" />
                                  </svg>
                                  <p>
                                      {!! trans('partials/results.item__stage9') !!}
                                  </p>
                              </li>
                          </ul>

                          {{-- <p class="text__bold text-center">Над проектом работали:</p> --}}
                          <ol class="item__works">
                              <li>Project Manager</li>
                              <li>{{ trans('partials/results.works_marketing') }}</li>
                              <li>{{ trans('partials/results.works_designer') }}</li>
                              <ul class="item__results">
                                  <li>
                                      <p class="item__results-digit">8 +</p>
                                      <p class="item__results-descr">{!! trans('partials/results.orders_day') !!} </p>
                                  </li>
                                  <li>
                                      <p class="item__results-digit">200 +</p>
                                      <p class="item__results-descr">{!! trans('partials/results.orders_month') !!} </p>
                                  </li>
                                  <li>
                                      <p class="item__results-digit">18,8 %</p>
                                      <p class="item__results-descr">{{ trans('partials/results.users_returned') }}
                                      </p>
                                  </li>
                                  <li>
                                      <p class="item__results-digit">2,3 %</p>
                                      <p class="item__results-descr">{{ trans('partials/results.conversion_ratio') }}
                                      </p>
                                      {{-- <p class="item__results-descr__more">
                            (в разных сферах <b>средний коэффициент конверсии</b> составляет всего 2,35%)
                          </p> --}}
                                  </li>
                              </ul>
                              <li>{{ trans('partials/results.works_front') }}</li>
                              <li>{{ trans('partials/results.works_back') }}</li>
                              <li>{{ trans('partials/results.works_seo') }}</li>
                              <li>{{ trans('partials/results.works_qna') }}</li>
                          </ol>

                          {{-- <p class="text__bold text-center">Успешные результаты продвижения:</p> --}}


                          <div class="item__section">
                              <p class="item__section-text">
                                  {{ trans('partials/results.organic_traffic') }}
                              </p>
                              <div class="item__section-cont">
                                  <div class="item__section-image">
                                      <img class="lazy" data-src="/img/results/kolg__graphic-1.png"
                                          alt="kolg__graphic-1">
                                      <p class="item__section-image__text">
                                          {{ trans('partials/results.period2') }}
                                      </p>
                                  </div>
                                  <div class="item__section-wind">
                                      <p class="bold">{{ trans('partials/results.per_november') }}</p>
                                      <p><span>203</span> {{ trans('partials/results.visits') }}</p>
                                      <p>{{ trans('partials/results.from') }} <span>10</span>
                                          {{ trans('partials/results.orders_per_day') }}</p>
                                      <p><span>1 200</span> {{ trans('partials/results.conversions') }}</p>
                                  </div>
                              </div>
                          </div>

                          {{-- <p class="text__bold text-center">Этапы работ:</p> --}}
                          <ul class="item__stages">
                              <li>
                                  <div class="decor"></div>
                                  <svg width="44" height="43" viewBox="0 0 44 43" fill="none"
                                      xmlns="http://www.w3.org/2000/svg">
                                      <path
                                          d="M12.3733 5.23594C13.1814 5.23594 13.8365 4.58085 13.8365 3.77275C13.8365 2.96466 13.1814 2.30957 12.3733 2.30957C11.5652 2.30957 10.9102 2.96466 10.9102 3.77275C10.9102 4.58085 11.5652 5.23594 12.3733 5.23594Z"
                                          fill="#222222" />
                                      <path
                                          d="M4.5042 5.23594C5.31229 5.23594 5.96738 4.58085 5.96738 3.77275C5.96738 2.96466 5.31229 2.30957 4.5042 2.30957C3.69611 2.30957 3.04102 2.96466 3.04102 3.77275C3.04102 4.58085 3.69611 5.23594 4.5042 5.23594Z"
                                          fill="#222222" />
                                      <path
                                          d="M24.6442 32.953C24.6442 32.6603 24.6546 32.3573 24.686 32.0646C25.0936 27.3929 28.6052 23.5782 33.2352 22.7943V1.46318C33.2352 0.658432 32.5767 0 31.772 0H28.7411V1.13919C30.2043 1.48409 31.1031 2.94727 30.7582 4.41045C30.4133 5.87364 28.9501 6.77245 27.4869 6.42756C26.0238 6.08266 25.125 4.61948 25.4698 3.1563C25.7102 2.15297 26.4836 1.37957 27.4869 1.13919V0H20.8713V1.13919C22.3345 1.48409 23.2333 2.94727 22.8884 4.41045C22.5435 5.87364 21.0803 6.77245 19.6171 6.42756C18.1539 6.08266 17.2551 4.61948 17.6 3.1563C17.8404 2.15297 18.6138 1.37957 19.6171 1.13919V0H13.0014V1.13919C14.4646 1.48409 15.3634 2.94727 15.0185 4.41045C14.6736 5.87364 13.2105 6.77245 11.7473 6.42756C10.2841 6.08266 9.38528 4.61948 9.73017 3.1563C9.97055 2.15297 10.7439 1.37957 11.7473 1.13919V0H5.13159V1.13919C6.59478 1.48409 7.49359 2.94727 7.1487 4.41045C6.8038 5.87364 5.34062 6.77245 3.87744 6.42756C2.41425 6.08266 1.51544 4.61948 1.86033 3.1563C2.10071 2.15297 2.87411 1.37957 3.87744 1.13919V0H1.46318C0.658433 0 0 0.658432 0 1.46318V36.9976C0 37.8024 0.658433 38.4608 1.46318 38.4608H26.2432C25.1981 36.8095 24.6442 34.8969 24.6442 32.953ZM5.12114 13.9107H28.114C28.4589 13.9107 28.7411 14.1929 28.7411 14.5378C28.7411 14.8827 28.4589 15.1649 28.114 15.1649H5.12114C4.77625 15.1649 4.49406 14.8827 4.49406 14.5378C4.49406 14.1824 4.77625 13.9107 5.12114 13.9107ZM5.12114 19.6485H28.114C28.4589 19.6485 28.7411 19.9306 28.7411 20.2755C28.7411 20.6204 28.4589 20.9026 28.114 20.9026H5.12114C4.77625 20.9026 4.49406 20.6204 4.49406 20.2755C4.49406 19.9306 4.77625 19.6485 5.12114 19.6485ZM5.12114 25.3967H25.5012C25.8461 25.3967 26.1283 25.6789 26.1283 26.0238C26.1283 26.3687 25.8461 26.6508 25.5012 26.6508H5.12114C4.77625 26.6508 4.49406 26.3687 4.49406 26.0238C4.49406 25.6789 4.77625 25.3967 5.12114 25.3967ZM23.1392 32.3991H5.12114C4.77625 32.3991 4.49406 32.1169 4.49406 31.772C4.49406 31.4271 4.77625 31.1449 5.12114 31.1449H23.1392C23.4841 31.1449 23.7663 31.4271 23.7663 31.772C23.7663 32.1169 23.4841 32.3991 23.1392 32.3991Z"
                                          fill="#222222" />
                                      <path
                                          d="M28.1155 5.23594C28.9236 5.23594 29.5787 4.58085 29.5787 3.77275C29.5787 2.96466 28.9236 2.30957 28.1155 2.30957C27.3074 2.30957 26.6523 2.96466 26.6523 3.77275C26.6523 4.58085 27.3074 5.23594 28.1155 5.23594Z"
                                          fill="#222222" />
                                      <path
                                          d="M38.0847 24.4559C33.392 22.721 28.1873 25.1248 26.4524 29.8174C26.1702 30.5699 25.9925 31.3642 25.9298 32.169C25.9089 32.4302 25.8984 32.6915 25.8984 32.9528C25.8984 37.9485 29.9535 42.0036 34.9493 42.0036C39.945 42.0036 44.0001 37.9485 44.0001 32.9528C44.0001 29.159 41.6381 25.7728 38.0847 24.4559ZM39.5897 30.7162L39.5792 30.7267L34.249 36.0568C34.0087 36.2972 33.6115 36.2972 33.3607 36.0568L30.3298 33.026C30.0894 32.7856 30.0894 32.3884 30.3298 32.1376C30.5702 31.8972 30.9673 31.8972 31.2182 32.1376L33.8101 34.7295L38.7013 29.8383C38.9417 29.5875 39.3388 29.5875 39.5897 29.8279C39.8196 30.0682 39.83 30.4654 39.5897 30.7162Z"
                                          fill="#222222" />
                                      <path
                                          d="M20.2444 5.23594C21.0525 5.23594 21.7076 4.58085 21.7076 3.77275C21.7076 2.96466 21.0525 2.30957 20.2444 2.30957C19.4363 2.30957 18.7812 2.96466 18.7812 3.77275C18.7812 4.58085 19.4363 5.23594 20.2444 5.23594Z"
                                          fill="#222222" />
                                  </svg>
                                  <p>
                                      1. Разработка <br> технического задания
                                  </p>
                              </li>
                              <li>
                                  <div class="decor"></div>
                                  <svg width="44" height="42" viewBox="0 0 44 42" fill="none"
                                      xmlns="http://www.w3.org/2000/svg">
                                      <path
                                          d="M11.9494 13.0988L6.34381 14.6681C5.53673 14.8952 5.05688 15.7617 5.27549 16.6068L7.62524 25.7755C7.84247 26.6205 8.67293 27.1221 9.48001 26.895L10.7353 26.5429L15.8514 40.822C16.169 41.6268 16.9403 42.1413 17.5659 41.966C18.1901 41.7906 19.2131 41.5046 19.8387 41.3293C20.4629 41.154 20.885 40.3061 20.7764 39.4424L18.3455 24.1674L32.7011 26.8074L29.5992 14.7069L26.4974 2.60791L13.6584 13.8576C13.3298 13.2411 12.6327 12.9077 11.9494 13.0988Z"
                                          fill="#222222" />
                                      <path
                                          d="M1.3017 19.7897C0.285635 20.1878 -0.24921 21.5588 0.11377 22.9671C0.474 24.374 1.59181 25.2852 2.66288 25.0969C2.94061 25.837 3.70507 26.261 4.45715 26.0512L6.45216 25.4921L4.39528 17.4688L2.39889 18.0263C1.64681 18.2376 1.18758 19.0036 1.3017 19.7897Z"
                                          fill="#222222" />
                                      <path
                                          d="M32.8111 9.14087L30.768 1.17355C30.5535 0.329964 29.7231 -0.171586 28.9146 0.0540396L28.6259 0.135955C27.8188 0.36158 27.3389 1.22959 27.5562 2.07317L33.8753 26.7181C34.0912 27.5617 34.9216 28.0633 35.7287 27.8362L36.0174 27.7557C36.8245 27.5301 37.3057 26.6621 37.0871 25.8185L35.0454 17.8512C35.9913 17.1973 36.3172 15.1667 35.7576 12.9837C35.198 10.8007 33.9427 9.21416 32.8111 9.14087Z"
                                          fill="#222222" />
                                      <path
                                          d="M37.9959 5.939C38.3067 5.66883 38.6765 5.46045 38.9419 5.18596C39.2017 4.90141 39.3901 4.58238 39.5235 4.28058C39.8026 3.68993 39.8356 3.14096 39.8356 3.14096L39.7269 3.03174C39.7269 3.03174 39.2045 3.08635 38.6504 3.40251C38.3685 3.55197 38.0688 3.76035 37.8076 4.04202C37.5546 4.33232 37.3703 4.72752 37.1242 5.06093C36.148 6.40463 35.2832 7.85898 35.2832 7.85898L35.3932 7.9682C35.3918 7.96964 36.7502 7.00965 37.9959 5.939Z"
                                          fill="#222222" />
                                      <path
                                          d="M42.2467 18.0728C41.8837 17.9736 41.463 17.9866 41.067 17.9161C39.4749 17.6402 37.8401 17.5181 37.8401 17.5181L37.7988 17.6704C37.7988 17.6704 39.2439 18.4781 40.7315 19.1319C41.1041 19.2915 41.452 19.5386 41.8109 19.6565C42.1711 19.7643 42.5299 19.7873 42.8475 19.77C43.4786 19.7542 43.9571 19.5286 43.9571 19.5286L43.9997 19.3777C43.9997 19.3777 43.7082 18.9192 43.183 18.5542C42.9218 18.3631 42.6069 18.1834 42.2467 18.0728Z"
                                          fill="#222222" />
                                      <path
                                          d="M41.9823 10.5848C41.6757 10.5575 41.332 10.5704 40.9827 10.6667C40.6376 10.7745 40.2994 11.0073 39.9392 11.1568C38.5038 11.7618 37.1055 12.5235 37.1055 12.5235L37.144 12.6758C37.144 12.6758 38.7183 12.6054 40.2513 12.3783C40.6349 12.3194 41.0391 12.3453 41.3897 12.2576C41.739 12.1599 42.0428 11.9889 42.2931 11.8064C42.8018 11.4586 43.0836 11.0116 43.0836 11.0116L43.0493 10.8593C43.0493 10.8593 42.59 10.6207 41.9823 10.5848Z"
                                          fill="#222222" />
                                  </svg>
                                  <p>
                                      {!! trans('partials/results.item__stage2') !!}
                                  </p>
                              </li>
                              <li>
                                  <div class="decor"></div>
                                  <svg width="54" height="40" viewBox="0 0 54 40" fill="none"
                                      xmlns="http://www.w3.org/2000/svg">
                                      <path d="M32.6925 27.1162H21.3105V34.4235H32.6925V27.1162Z" fill="#222222" />
                                      <path d="M49.091 27.1162H37.709V34.4235H49.091V27.1162Z" fill="#222222" />
                                      <path
                                          d="M54 5.38496V1.73076C54 0.776533 53.2519 0 52.3327 0H1.66728C0.748055 0 0 0.776533 0 1.73076V5.38496H54ZM12.8403 2.4046H13.7306C14.0374 2.4046 14.2864 2.66306 14.2864 2.98152C14.2864 3.29998 14.0374 3.55844 13.7306 3.55844H12.8403C12.5335 3.55844 12.2845 3.29998 12.2845 2.98152C12.2845 2.66306 12.5335 2.4046 12.8403 2.4046ZM8.59652 2.4046H9.48796C9.79474 2.4046 10.0437 2.66306 10.0437 2.98152C10.0437 3.29998 9.79474 3.55844 9.48796 3.55844H8.59652C8.28974 3.55844 8.04076 3.29998 8.04076 2.98152C8.04076 2.66306 8.28974 2.4046 8.59652 2.4046ZM4.35272 2.4046H5.24305C5.54983 2.4046 5.79881 2.66306 5.79881 2.98152C5.79881 3.29998 5.54983 3.55844 5.24305 3.55844H4.35272C4.04594 3.55844 3.79696 3.29998 3.79696 2.98152C3.79696 2.66306 4.04594 2.4046 4.35272 2.4046Z"
                                          fill="#222222" />
                                      <path d="M16.2921 27.1162H4.91016V34.4235H16.2921V27.1162Z" fill="#222222" />
                                      <path d="M49.0932 10.6748H4.91016V23.6555H49.0932V10.6748Z" fill="#222222" />
                                      <path
                                          d="M0 6.53857V38.2691C0 39.2233 0.748055 39.9999 1.66728 39.9999H52.3327C53.2519 39.9999 54 39.2233 54 38.2691V6.53857H0ZM17.402 35.0003C17.402 35.3188 17.153 35.5772 16.8462 35.5772H4.35272C4.04594 35.5772 3.79696 35.3188 3.79696 35.0003V26.5392C3.79696 26.2207 4.04594 25.9623 4.35272 25.9623H16.8462C17.153 25.9623 17.402 26.2207 17.402 26.5392V35.0003ZM33.8025 35.0003C33.8025 35.3188 33.5535 35.5772 33.2468 35.5772H20.7532C20.4465 35.5772 20.1975 35.3188 20.1975 35.0003V26.5392C20.1975 26.2207 20.4465 25.9623 20.7532 25.9623H33.2468C33.5535 25.9623 33.8025 26.2207 33.8025 26.5392V35.0003ZM50.203 35.0003C50.203 35.3188 49.9541 35.5772 49.6473 35.5772H37.1538C36.847 35.5772 36.598 35.3188 36.598 35.0003V26.5392C36.598 26.2207 36.847 25.9623 37.1538 25.9623H49.6473C49.9541 25.9623 50.203 26.2207 50.203 26.5392V35.0003ZM50.203 24.2315C50.203 24.55 49.9541 24.8084 49.6473 24.8084H4.35272C4.04594 24.8084 3.79696 24.55 3.79696 24.2315V10.097C3.79696 9.77855 4.04594 9.52009 4.35272 9.52009H49.6473C49.9541 9.52009 50.203 9.77855 50.203 10.097V24.2315Z"
                                          fill="#222222" />
                                  </svg>
                                  <p>
                                      {!! trans('partials/results.item__stage3') !!}
                                  </p>
                              </li>
                              <li>
                                  <div class="decor"></div>
                                  <svg width="45" height="44" viewBox="0 0 45 44" fill="none"
                                      xmlns="http://www.w3.org/2000/svg">
                                      <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M15.75 10.9824V17.7379L21.7499 20.7724V13.41L18.75 12.1962L15.75 10.9824Z"
                                          fill="#222222" />
                                      <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M22.5008 6.91699L16.8301 9.78458L22.5008 12.0794L28.1714 9.78458L22.5008 6.91699Z"
                                          fill="#222222" />
                                      <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M23.25 13.41V20.7724L29.2499 17.7379V10.9824L26.25 12.1962L23.25 13.41Z"
                                          fill="#222222" />
                                      <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M40.4995 7.5862H38.9995V9.10344C38.9995 9.5222 38.6643 9.86206 38.2495 9.86206C37.8348 9.86206 37.4996 9.5222 37.4996 9.10344V7.5862H35.9996C35.5848 7.5862 35.2496 7.24634 35.2496 6.82758C35.2496 6.40882 35.5848 6.06896 35.9996 6.06896H37.4996V4.55172C37.4996 4.13296 37.8348 3.7931 38.2495 3.7931C38.6643 3.7931 38.9995 4.13296 38.9995 4.55172V6.06896H40.4995C40.9143 6.06896 41.2495 6.40882 41.2495 6.82758C41.2495 7.24634 40.9143 7.5862 40.4995 7.5862ZM40.4995 22H36.7496C36.3348 22 35.9996 21.6601 35.9996 21.2414C35.9996 20.8226 36.3348 20.4827 36.7496 20.4827H40.4995C40.9143 20.4827 41.2495 20.8226 41.2495 21.2414C41.2495 21.6601 40.9143 22 40.4995 22ZM40.4995 25.0345H38.9995C38.5848 25.0345 38.2495 24.6946 38.2495 24.2758C38.2495 23.8571 38.5848 23.5172 38.9995 23.5172H40.4995C40.9143 23.5172 41.2495 23.8571 41.2495 24.2758C41.2495 24.6946 40.9143 25.0345 40.4995 25.0345ZM35.9996 25.0345H32.9996C32.5849 25.0345 32.2496 24.6946 32.2496 24.2758C32.2496 23.8571 32.5849 23.5172 32.9996 23.5172H35.9996C36.4143 23.5172 36.7496 23.8571 36.7496 24.2758C36.7496 24.6946 36.4143 25.0345 35.9996 25.0345ZM30.7496 18.2069C30.7496 18.4944 30.5891 18.7569 30.3349 18.8859L22.835 22.679C22.8245 22.6843 22.8117 22.682 22.7997 22.6873C22.7037 22.7298 22.6032 22.7586 22.4997 22.7586C22.3962 22.7586 22.2957 22.7298 22.1997 22.6873C22.1877 22.682 22.175 22.6843 22.1645 22.679L14.6646 18.8859C14.4103 18.7569 14.2498 18.4944 14.2498 18.2069V11.6365C14.2498 10.9689 14.0668 10.1807 14.3631 9.55103C14.5768 9.09965 15.1588 8.93351 15.5803 8.72034L19.1833 6.89813L22.1645 5.39C22.3752 5.28379 22.6242 5.28379 22.835 5.39L28.5432 8.27731C29.1514 8.58455 29.8511 8.77496 30.3686 9.24303C30.8434 9.67165 30.7496 10.1799 30.7496 10.7633V14.875V18.2069ZM11.9999 5.31034H8.2499C7.83516 5.31034 7.49991 4.97048 7.49991 4.55172C7.49991 4.13296 7.83516 3.7931 8.2499 3.7931H11.9999C12.4146 3.7931 12.7499 4.13296 12.7499 4.55172C12.7499 4.97048 12.4146 5.31034 11.9999 5.31034ZM11.9999 8.34482H10.4999C10.0851 8.34482 9.74989 8.00496 9.74989 7.5862C9.74989 7.16744 10.0851 6.82758 10.4999 6.82758H11.9999C12.4146 6.82758 12.7499 7.16744 12.7499 7.5862C12.7499 8.00496 12.4146 8.34482 11.9999 8.34482ZM11.0301 23.7395C11.3234 24.0361 11.3234 24.5156 11.0301 24.8122C10.8839 24.9601 10.6919 25.0345 10.4999 25.0345C10.3079 25.0345 10.1159 24.9601 9.96963 24.8122L8.2499 23.0727L6.53017 24.8122C6.38393 24.9601 6.19193 25.0345 5.99993 25.0345C5.80793 25.0345 5.61593 24.9601 5.46969 24.8122C5.17644 24.5156 5.17644 24.0361 5.46969 23.7395L7.18942 22L5.46969 20.2605C5.17644 19.9639 5.17644 19.4844 5.46969 19.1878C5.76293 18.8912 6.23693 18.8912 6.53017 19.1878L8.2499 20.9273L9.96963 19.1878C10.2629 18.8912 10.7369 18.8912 11.0301 19.1878C11.3234 19.4844 11.3234 19.9639 11.0301 20.2605L9.31039 22L11.0301 23.7395ZM3.74996 7.5862C3.74996 7.16744 4.0852 6.82758 4.49995 6.82758H7.49991C7.91466 6.82758 8.2499 7.16744 8.2499 7.5862C8.2499 8.00496 7.91466 8.34482 7.49991 8.34482H4.49995C4.0852 8.34482 3.74996 8.00496 3.74996 7.5862ZM4.49995 3.7931H5.24994C5.66468 3.7931 5.99993 4.13296 5.99993 4.55172C5.99993 4.97048 5.66468 5.31034 5.24994 5.31034H4.49995C4.0852 5.31034 3.74996 4.97048 3.74996 4.55172C3.74996 4.13296 4.0852 3.7931 4.49995 3.7931ZM32.9996 20.4827H33.7496C34.1643 20.4827 34.4996 20.8226 34.4996 21.2414C34.4996 21.6601 34.1643 22 33.7496 22H32.9996C32.5849 22 32.2496 21.6601 32.2496 21.2414C32.2496 20.8226 32.5849 20.4827 32.9996 20.4827ZM41.626 0H3.37346C1.51348 0 0 1.5309 0 3.41303V27.3103H44.9995V3.41303C44.9995 1.5309 43.486 0 41.626 0Z"
                                          fill="#222222" />
                                      <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M26.7312 35.6563C26.6314 37.4231 27.3934 39.1588 28.7779 40.2065H16.2231C17.6075 39.1588 18.3703 37.4223 18.2698 35.6547L26.7312 35.6563ZM0 32.2425C0 34.1238 1.51348 35.6547 3.37346 35.6547H16.7653C16.8718 36.9838 16.3026 38.2955 15.2481 39.0473L13.8981 40.0107C13.8118 40.0707 13.7398 40.145 13.6806 40.2262C12.7386 40.3263 11.9999 41.1244 11.9999 42.103C11.9999 43.1484 12.8406 43.9996 13.8748 43.9996H31.1246C32.1589 43.9996 32.9996 43.1484 32.9996 42.103C32.9996 41.1251 32.2616 40.3271 31.3204 40.2262C31.2626 40.1458 31.1906 40.0737 31.1066 40.013L29.7536 39.0488C28.6992 38.297 28.1284 36.9846 28.2357 35.6547H41.626C43.4867 35.6547 44.9995 34.1238 44.9995 32.2425V28.8271H0V32.2425Z"
                                          fill="#222222" />
                                  </svg>
                                  <p>
                                      {!! trans('partials/results.item__stage4') !!}
                                  </p>
                              </li>
                              <li>
                                  <div class="decor"></div>
                                  <svg width="41" height="40" viewBox="0 0 41 40" fill="none"
                                      xmlns="http://www.w3.org/2000/svg">
                                      <path
                                          d="M22.6964 34.8148C22.6962 35.0112 22.619 35.1995 22.4817 35.3384C22.3445 35.4772 22.1584 35.5553 21.9643 35.5556H19.0357C18.8415 35.5556 18.6553 35.4775 18.518 35.3386C18.3807 35.1997 18.3036 35.0113 18.3036 34.8148C18.3036 34.6184 18.3807 34.4299 18.518 34.291C18.6553 34.1521 18.8415 34.0741 19.0357 34.0741H21.9643C22.1584 34.0743 22.3445 34.1524 22.4817 34.2913C22.619 34.4301 22.6962 34.6184 22.6964 34.8148ZM25.3366 19.8579L25.9911 20.7407H29.7146L27.0893 18.0845L25.3366 19.8579ZM9.13669 20.7407H4.39286V10.3704H36.6071V20.7407H31.7854L27.607 16.5132C27.539 16.4445 27.4583 16.3899 27.3695 16.3527C27.2806 16.3154 27.1854 16.2963 27.0893 16.2963C26.9931 16.2963 26.8979 16.3154 26.8091 16.3527C26.7203 16.3899 26.6396 16.4445 26.5716 16.5132L24.4491 18.6606L21.8179 15.1111C21.7497 15.0191 21.6612 14.9444 21.5596 14.893C21.4579 14.8416 21.3458 14.8148 21.2321 14.8148C21.1185 14.8148 21.0064 14.8416 20.9047 14.893C20.8031 14.9444 20.7146 15.0191 20.6464 15.1111L18.3745 18.1759L15.2427 13.6493C15.1752 13.5517 15.0854 13.472 14.981 13.417C14.8766 13.362 14.7606 13.3333 14.6429 13.3333C14.5251 13.3333 14.4092 13.362 14.3047 13.417C14.2003 13.472 14.1106 13.5517 14.043 13.6493L9.13669 20.7407ZM24.1607 14.0741C24.1607 14.2206 24.2037 14.3638 24.2841 14.4856C24.3646 14.6074 24.4789 14.7024 24.6127 14.7584C24.7465 14.8145 24.8937 14.8292 25.0357 14.8006C25.1777 14.772 25.3082 14.7015 25.4106 14.5979C25.513 14.4943 25.5827 14.3623 25.6109 14.2186C25.6392 14.0749 25.6247 13.926 25.5693 13.7906C25.5139 13.6553 25.42 13.5396 25.2996 13.4582C25.1792 13.3768 25.0377 13.3333 24.8929 13.3333C24.6987 13.3333 24.5125 13.4114 24.3752 13.5503C24.2379 13.6892 24.1607 13.8776 24.1607 14.0741ZM18.3036 20.7407H24.1607L21.2321 16.7901L18.3036 20.7407ZM0 5.92593H41V39.2593C40.9998 39.4556 40.9226 39.6439 40.7853 39.7828C40.6481 39.9217 40.462 39.9998 40.2679 40H0.732143C0.538033 39.9998 0.351937 39.9217 0.21468 39.7828C0.0774242 39.6439 0.000218005 39.4556 0 39.2593V5.92593ZM10.25 28.8889C10.25 28.6924 10.1729 28.504 10.0356 28.3651C9.89826 28.2262 9.71203 28.1481 9.51786 28.1481H8.05357C7.8594 28.1481 7.67317 28.2262 7.53587 28.3651C7.39857 28.504 7.32143 28.6924 7.32143 28.8889C7.32143 29.0853 7.39857 29.2738 7.53587 29.4127C7.67317 29.5516 7.8594 29.6296 8.05357 29.6296H9.51786C9.71203 29.6296 9.89826 29.5516 10.0356 29.4127C10.1729 29.2738 10.25 29.0853 10.25 28.8889ZM24.1607 34.8148C24.16 34.2257 23.9284 33.6608 23.5166 33.2442C23.1049 32.8276 22.5466 32.5933 21.9643 32.5926H19.0357C18.4532 32.5926 17.8945 32.8267 17.4826 33.2435C17.0707 33.6602 16.8393 34.2254 16.8393 34.8148C16.8393 35.4042 17.0707 35.9694 17.4826 36.3862C17.8945 36.8029 18.4532 37.037 19.0357 37.037H21.9643C22.5466 37.0364 23.1049 36.802 23.5166 36.3854C23.9284 35.9688 24.16 35.404 24.1607 34.8148ZM29.2857 28.8889C29.2857 28.6924 29.2086 28.504 29.0713 28.3651C28.934 28.2262 28.7477 28.1481 28.5536 28.1481H12.4464C12.2523 28.1481 12.066 28.2262 11.9287 28.3651C11.7914 28.504 11.7143 28.6924 11.7143 28.8889C11.7143 29.0853 11.7914 29.2738 11.9287 29.4127C12.066 29.5516 12.2523 29.6296 12.4464 29.6296H28.5536C28.7477 29.6296 28.934 29.5516 29.0713 29.4127C29.2086 29.2738 29.2857 29.0853 29.2857 28.8889ZM16.1071 26.6667H24.8929C25.087 26.6667 25.2733 26.5886 25.4106 26.4497C25.5479 26.3108 25.625 26.1224 25.625 25.9259C25.625 25.7295 25.5479 25.5411 25.4106 25.4021C25.2733 25.2632 25.087 25.1852 24.8929 25.1852H16.1071C15.913 25.1852 15.7267 25.2632 15.5894 25.4021C15.4521 25.5411 15.375 25.7295 15.375 25.9259C15.375 26.1224 15.4521 26.3108 15.5894 26.4497C15.7267 26.5886 15.913 26.6667 16.1071 26.6667ZM33.6786 28.8889C33.6786 28.6924 33.6014 28.504 33.4641 28.3651C33.3268 28.2262 33.1406 28.1481 32.9464 28.1481H31.4821C31.288 28.1481 31.1017 28.2262 30.9644 28.3651C30.8271 28.504 30.75 28.6924 30.75 28.8889C30.75 29.0853 30.8271 29.2738 30.9644 29.4127C31.1017 29.5516 31.288 29.6296 31.4821 29.6296H32.9464C33.1406 29.6296 33.3268 29.5516 33.4641 29.4127C33.6014 29.2738 33.6786 29.0853 33.6786 28.8889ZM2.92857 21.4815C2.92857 21.6779 3.00571 21.8663 3.14301 22.0053C3.28031 22.1442 3.46654 22.2222 3.66071 22.2222H37.3393C37.5335 22.2222 37.7197 22.1442 37.857 22.0053C37.9943 21.8663 38.0714 21.6779 38.0714 21.4815V9.62963C38.0714 9.43317 37.9943 9.24476 37.857 9.10585C37.7197 8.96693 37.5335 8.88889 37.3393 8.88889H3.66071C3.46654 8.88889 3.28031 8.96693 3.14301 9.10585C3.00571 9.24476 2.92857 9.43317 2.92857 9.62963V21.4815ZM10.924 20.7407H16.4732L17.45 19.4231L14.6429 15.3657L10.924 20.7407ZM41 0.740741V4.44444H0V0.740741C0.000218005 0.544352 0.0774242 0.356069 0.21468 0.217201C0.351937 0.0783334 0.538033 0.000220566 0.732143 0H40.2679C40.462 0.000220566 40.6481 0.0783334 40.7853 0.217201C40.9226 0.356069 40.9998 0.544352 41 0.740741ZM2.92857 2.22222C2.92857 2.07572 2.88563 1.9325 2.80518 1.81069C2.72473 1.68887 2.61039 1.59393 2.47661 1.53787C2.34283 1.4818 2.19562 1.46713 2.05359 1.49571C1.91157 1.5243 1.78112 1.59485 1.67873 1.69844C1.57633 1.80203 1.5066 1.93402 1.47835 2.07771C1.4501 2.2214 1.4646 2.37034 1.52002 2.50569C1.57543 2.64104 1.66927 2.75673 1.78967 2.83813C1.91007 2.91952 2.05162 2.96296 2.19643 2.96296C2.3906 2.96296 2.57683 2.88492 2.71413 2.746C2.85143 2.60709 2.92857 2.41868 2.92857 2.22222ZM5.85714 2.22222C5.85714 2.07572 5.8142 1.9325 5.73375 1.81069C5.65331 1.68887 5.53896 1.59393 5.40518 1.53787C5.2714 1.4818 5.12419 1.46713 4.98217 1.49571C4.84014 1.5243 4.70969 1.59485 4.6073 1.69844C4.50491 1.80203 4.43517 1.93402 4.40693 2.07771C4.37867 2.2214 4.39317 2.37034 4.44859 2.50569C4.504 2.64104 4.59784 2.75673 4.71824 2.83813C4.83864 2.91952 4.9802 2.96296 5.125 2.96296C5.31918 2.96296 5.5054 2.88492 5.6427 2.746C5.78001 2.60709 5.85714 2.41868 5.85714 2.22222ZM8.78571 2.22222C8.78571 2.07572 8.74277 1.9325 8.66233 1.81069C8.58188 1.68887 8.46753 1.59393 8.33375 1.53787C8.19997 1.4818 8.05276 1.46713 7.91074 1.49571C7.76872 1.5243 7.63826 1.59485 7.53587 1.69844C7.43348 1.80203 7.36375 1.93402 7.3355 2.07771C7.30725 2.2214 7.32175 2.37034 7.37716 2.50569C7.43257 2.64104 7.52641 2.75673 7.64681 2.83813C7.76721 2.91952 7.90877 2.96296 8.05357 2.96296C8.24775 2.96296 8.43397 2.88492 8.57127 2.746C8.70858 2.60709 8.78571 2.41868 8.78571 2.22222Z"
                                          fill="#222222" />
                                  </svg>
                                  <p>
                                      {!! trans('partials/results.item__stage5') !!}
                                  </p>
                              </li>
                              <li class="empty">
                              </li>
                              <li>
                                  <div class="decor"></div>
                                  <svg width="45" height="44" viewBox="0 0 45 44" fill="none"
                                      xmlns="http://www.w3.org/2000/svg">
                                      <path
                                          d="M22.0017 23.0503C19.6992 23.0503 17.793 24.7826 17.5195 27.0126H26.4844C26.2104 24.7826 24.3042 23.0503 22.0017 23.0503Z"
                                          fill="#222222" />
                                      <path
                                          d="M22.0057 11.1626C16.0277 11.1626 11.1641 16.0251 11.1641 22.0015C11.1641 27.9773 16.0277 32.8393 22.0057 32.8393C27.9805 32.8393 32.8407 27.9779 32.8407 22.0015C32.8407 16.0251 27.9805 11.1626 22.0057 11.1626ZM22.003 14.212C23.8454 14.212 25.3446 15.7112 25.3446 17.5542C25.3446 19.3967 23.8454 20.8959 22.003 20.8959C20.1599 20.8959 18.6607 19.3967 18.6607 17.5542C18.6607 15.7112 20.1599 14.212 22.003 14.212ZM27.0725 28.1196H16.9334C16.6278 28.1196 16.3798 27.8721 16.3798 27.566C16.3798 24.4651 18.9026 21.9428 22.003 21.9428C25.1033 21.9428 27.6261 24.4657 27.6261 27.566C27.6261 27.8721 27.3787 28.1196 27.0725 28.1196Z"
                                          fill="#222222" />
                                      <path
                                          d="M22.0026 19.7883C23.2349 19.7883 24.237 18.7857 24.237 17.5538C24.237 16.322 23.2344 15.3188 22.0026 15.3188C20.7707 15.3188 19.7676 16.3215 19.7676 17.5538C19.7676 18.7862 20.7702 19.7883 22.0026 19.7883Z"
                                          fill="#222222" />
                                      <path
                                          d="M39.9807 18.9063C39.8002 17.8246 39.5101 16.7406 39.1198 15.6842C39.0318 15.4462 39.1165 15.1782 39.3263 15.0354L42.2356 13.0479L39.8711 8.95324L36.6888 10.4796C36.4596 10.5887 36.1856 10.5294 36.0239 10.3345C35.3164 9.48362 34.5236 8.69027 33.6688 7.97665C33.4739 7.81444 33.4147 7.54039 33.5243 7.3123L35.0506 4.13282L30.9527 1.76662L28.9657 4.67482C28.8218 4.88464 28.556 4.97101 28.3158 4.88188C27.2943 4.5032 26.2103 4.21365 25.0942 4.02043C24.8445 3.97725 24.6557 3.7702 24.6364 3.51719L24.3656 0H19.6388L19.3681 3.51719C19.3487 3.7702 19.1599 3.97725 18.9102 4.02043C17.7913 4.21365 16.7073 4.5032 15.6892 4.88188C15.4512 4.9699 15.1826 4.8852 15.0393 4.67537L13.049 1.76662L8.9538 4.13282L10.4796 7.31285C10.5892 7.5415 10.53 7.81499 10.3351 7.9772C9.4814 8.68972 8.68806 9.48362 7.97665 10.3356C7.81443 10.5305 7.53984 10.5898 7.31229 10.4801L4.13227 8.95435L1.76662 13.0479L4.67482 15.0354C4.88409 15.1782 4.9699 15.4456 4.88243 15.6831C4.50043 16.7228 4.21033 17.8079 4.02043 18.9097C3.97725 19.1599 3.76964 19.3487 3.51663 19.3675L0 19.6327V24.3645L3.51663 24.6319C3.76964 24.6513 3.97725 24.8401 4.02043 25.0898C4.21088 26.1943 4.50098 27.2788 4.88243 28.313C4.9699 28.5511 4.88464 28.8179 4.67537 28.9613L1.76662 30.951L4.13282 35.0462L7.31285 33.5226C7.5415 33.4152 7.81443 33.4728 7.97665 33.6666C8.70024 34.5308 9.49358 35.323 10.3351 36.0228C10.5305 36.185 10.5903 36.4591 10.4807 36.6877L8.95435 39.8705L13.049 42.2361L15.0393 39.3246C15.1826 39.1154 15.45 39.0301 15.6876 39.1176C16.7339 39.5029 17.8179 39.7941 18.9102 39.9829C19.1599 40.0261 19.3487 40.2331 19.3681 40.4856L19.6388 44H24.3656L24.6364 40.4856C24.6557 40.2331 24.8445 40.0261 25.0937 39.9829C26.197 39.7919 27.281 39.5012 28.3163 39.1181C28.5538 39.0307 28.8223 39.1154 28.9657 39.3252L30.9527 42.2361L35.0506 39.8705L33.5243 36.6877C33.4147 36.4591 33.4739 36.185 33.6693 36.0228C34.512 35.3219 35.3042 34.5297 36.0245 33.6677C36.1867 33.4722 36.4613 33.4147 36.6883 33.5226L39.8711 35.0462L42.2356 30.9516L39.3263 28.9619C39.1165 28.8185 39.0312 28.5511 39.1198 28.3124C39.5095 27.2611 39.7996 26.1782 39.9807 25.0931C40.0227 24.8423 40.2304 24.6519 40.4845 24.6325L44.0017 24.3651V19.6332L40.485 19.3681C40.2309 19.3481 40.0227 19.1577 39.9807 18.9063ZM22.005 33.9467C15.4163 33.9467 10.0561 28.5882 10.0561 22.0017C10.0561 15.4146 15.4163 10.0555 22.005 10.0555C28.5898 10.0555 33.9473 15.4146 33.9473 22.0017C33.9473 28.5882 28.5898 33.9467 22.005 33.9467Z"
                                          fill="#222222" />
                                  </svg>
                                  <p>
                                      {!! trans('partials/results.item__stage6') !!}
                                  </p>
                              </li>
                              <li>
                                  <div class="decor"></div>
                                  <svg width="46" height="35" viewBox="0 0 46 35" fill="none"
                                      xmlns="http://www.w3.org/2000/svg">
                                      <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M2.91094 0C2.57213 0 2.3 0.359375 2.3 0.805122V31.1111H0.79362C0.35424 31.1111 0 31.4465 0 31.8631V31.9147C0 32.3312 0.35424 32.6667 0.79362 32.6667H2.3V34.1949C2.3 34.6406 2.57213 35 2.91094 35H3.2224C3.5612 35 3.83333 34.6406 3.83333 34.1949V32.6667H45.2064C45.6458 32.6667 46 32.3312 46 31.9147V31.8631C46 31.4465 45.6458 31.1111 45.2064 31.1111H44.4667H3.83333V0.805122C3.83333 0.359375 3.5612 0 3.2224 0H2.91094ZM9.96667 8.55556L8.32402 14.1109L10.7603 17.4058L13.2834 14.2765L9.96667 8.55556ZM17.6333 10.1111L10.7333 18.6667L6.13333 12.4444L4.6 16.3333V26.7027V30.3333H43.7H44.4667V21L38.3333 12.4444L32.9667 20.2222L27.6 14.7778L23 18.6667L17.6333 10.1111ZM32.9667 12.4444L29.894 16.0067L32.8633 19.0176L35.3296 15.4416L32.9667 12.4444ZM23 14L21.9428 15.5328L23.1782 17.503L24.9646 15.9931L23 14Z"
                                          fill="#222222" />
                                  </svg>
                                  <p>
                                      8 {!! trans('partials/results.item__stage7') !!}
                                  </p>
                              </li>
                              <li>
                                  <div class="decor"></div>
                                  <svg width="54" height="47" viewBox="0 0 54 47" fill="none"
                                      xmlns="http://www.w3.org/2000/svg">
                                      <path
                                          d="M19.5095 8.09582C19.4458 7.77413 19.2663 7.50044 19.0032 7.32413C18.765 7.16536 18.4844 7.10951 18.2149 7.1649L17.7603 7.25721C17.686 7.27244 17.6107 7.29782 17.5392 7.33105C17.5101 7.34398 17.4806 7.35459 17.4492 7.36151C17.3578 7.38321 17.2641 7.37628 17.175 7.34121C17.0592 7.29598 16.965 7.20367 16.9175 7.08782C16.4823 6.02998 15.8541 5.08659 15.0515 4.28444C15.0298 4.26275 15.0109 4.23921 14.9943 4.21567C14.9661 4.17367 14.9449 4.12428 14.9324 4.07398C14.9273 4.05275 14.9204 4.03151 14.9255 4.03798L14.9167 3.98905L14.926 3.87505C14.9412 3.79013 14.9758 3.71628 15.0501 3.62951L15.3907 3.11213C15.7332 2.56982 15.5892 1.83136 15.0695 1.46582C14.8286 1.29644 14.541 1.23321 14.2609 1.28951C13.9761 1.34582 13.7306 1.51798 13.5695 1.77367L13.3147 2.17659C13.281 2.23013 13.252 2.28967 13.2257 2.35244C13.1781 2.46644 13.0844 2.55828 12.9704 2.60398C12.855 2.64921 12.7244 2.64736 12.6113 2.59567C11.6126 2.14936 10.534 1.92228 9.38842 1.92182C9.1738 1.92551 8.96842 1.74874 8.93888 1.51244L8.83319 0.953052C8.7695 0.630898 8.59042 0.356745 8.32688 0.180437C8.08873 0.0216678 7.80903 -0.0355629 7.53857 0.0216679C6.9455 0.142129 6.56473 0.758744 6.69027 1.3989L6.8038 1.95274C6.86473 2.17844 6.7498 2.41567 6.53565 2.50382C5.48057 2.94044 4.54688 3.59767 3.76042 4.45659C3.60442 4.6269 3.34365 4.65551 3.15442 4.52213L2.80596 4.27936C2.56411 4.10951 2.27703 4.04675 1.9978 4.10305C1.71303 4.15936 1.4675 4.33105 1.3055 4.58767C0.963034 5.13044 1.10703 5.8689 1.62673 6.23351L1.98673 6.4869C2.16211 6.61059 2.2295 6.83536 2.15057 7.03475C1.70057 8.17105 1.49842 9.37382 1.54965 10.6103C1.55888 10.8378 1.4038 11.0363 1.18042 11.0815L0.872111 11.1443C0.279034 11.2647 -0.101274 11.8818 0.0238029 12.5192C0.0870337 12.8404 0.266572 13.1146 0.528726 13.29C0.765495 13.4483 1.04565 13.506 1.31888 13.4501L1.69503 13.3735C1.91288 13.3297 2.12934 13.446 2.2138 13.6504C2.68365 14.7923 3.37042 15.7943 4.25519 16.6278C4.4158 16.7787 4.44673 17.0234 4.32903 17.2098L4.14396 17.5034C3.8015 18.0461 3.9455 18.7846 4.46473 19.1497C4.70519 19.3195 4.99227 19.3837 5.27334 19.3264C5.55811 19.2701 5.80365 19.0984 5.96565 18.8423L6.2278 18.4264C6.34919 18.2441 6.58273 18.1721 6.78534 18.2547C7.41627 18.5104 8.09704 18.6803 8.80734 18.7606C8.98827 18.7818 9.16965 18.8021 9.34827 18.81H9.35011C9.63211 18.8206 9.88596 18.8197 10.132 18.8054C10.1592 18.804 10.1864 18.8044 10.2104 18.8072L10.2907 18.8243C10.4495 18.8723 10.57 19.0047 10.6115 19.2027L10.7015 19.662C10.7647 19.9846 10.9447 20.2592 11.2078 20.4346C11.3878 20.5541 11.5853 20.6155 11.7884 20.6155C11.8572 20.6155 11.9273 20.6081 11.997 20.5938C12.5897 20.4734 12.9704 19.8567 12.8453 19.2194L12.7517 18.7426C12.7429 18.6997 12.7327 18.66 12.7212 18.6203C12.6557 18.4011 12.7581 18.1707 12.9649 18.072C13.215 17.9529 13.4643 17.8163 13.7057 17.6672C14.41 17.232 15.0437 16.6837 15.5892 16.038C15.6289 15.9909 15.6769 15.9531 15.7327 15.9249C15.7812 15.8995 15.8338 15.8838 15.8864 15.8774L15.903 15.8783L15.9275 15.8778C16.0489 15.8654 16.1601 15.9134 16.2427 15.9858C16.2746 16.0144 16.3069 16.0403 16.3387 16.062L16.7273 16.3357C16.9692 16.506 17.2563 16.5687 17.5355 16.5124C17.8203 16.4561 18.0658 16.2844 18.2278 16.0278C18.5703 15.4851 18.4263 14.7466 17.9066 14.382L17.5207 14.1101C17.4603 14.0677 17.3966 14.0317 17.332 14.0035C17.1127 13.9061 17.0038 13.6527 17.0846 13.4266C17.4695 12.3466 17.637 11.2163 17.5812 10.0661C17.5752 9.94244 17.62 9.82013 17.704 9.72967C17.788 9.63967 17.9061 9.58567 18.0303 9.5829C18.0893 9.58105 18.1484 9.57644 18.2093 9.56398L18.6612 9.47213C19.2543 9.35075 19.6346 8.73413 19.5095 8.09582ZM10.6673 14.8754C9.47796 15.1167 8.25857 14.8735 7.25288 14.2029C6.21765 13.5129 5.51427 12.4537 5.27196 11.22C4.77765 8.70228 6.39027 6.24459 8.86688 5.74013C10.0549 5.49828 11.2669 5.73644 12.2804 6.41259C13.3157 7.10305 14.019 8.16228 14.2613 9.39598C14.7561 11.9137 13.1435 14.3714 10.6673 14.8754Z"
                                          fill="#222222" />
                                      <path
                                          d="M17.4598 5.1222C17.4958 5.18082 17.5341 5.23712 17.5692 5.29666C17.6707 5.46928 17.7672 5.64559 17.8586 5.82466L17.9371 5.80851C18.5721 5.67789 19.2234 5.80805 19.7703 6.17266C20.3426 6.55389 20.7321 7.14282 20.8669 7.83005C21.136 9.19989 20.2863 10.5337 18.9695 10.8213C18.9663 10.9256 18.9571 11.0294 18.9501 11.1333H53.9984V4.77051H17.2383C17.2424 4.77651 17.2457 4.78251 17.2498 4.78851C17.3227 4.89789 17.3911 5.01005 17.4598 5.1222ZM49.1491 7.48066C49.1491 6.97112 49.5626 6.55758 50.0721 6.55758H50.4118C50.9214 6.55758 51.3349 6.97112 51.3349 7.48066V7.83789C51.3349 8.34743 50.9214 8.76097 50.4118 8.76097H50.0721C49.5626 8.76097 49.1491 8.34743 49.1491 7.83789V7.48066ZM44.2655 7.48066C44.2655 6.97112 44.6791 6.55758 45.1886 6.55758H45.5278C46.0374 6.55758 46.4509 6.97112 46.4509 7.48066V7.83789C46.4509 8.34743 46.0374 8.76097 45.5278 8.76097H45.1886C44.6791 8.76097 44.2655 8.34743 44.2655 7.83789V7.48066ZM39.382 7.48066C39.382 6.97112 39.7955 6.55758 40.3051 6.55758H40.6443C41.1538 6.55758 41.5674 6.97112 41.5674 7.48066V7.83789C41.5674 8.34743 41.1538 8.76097 40.6443 8.76097H40.3051C39.7955 8.76097 39.382 8.34743 39.382 7.83789V7.48066Z"
                                          fill="#222222" />
                                      <path
                                          d="M48.2698 42.1147C48.3137 42.0594 48.3543 42.0017 48.3917 41.9426C48.4 41.9292 48.4078 41.9154 48.4157 41.902C48.4822 41.7912 48.5371 41.6749 48.5814 41.5549C48.5892 41.5332 48.5985 41.5124 48.6059 41.4903C48.6243 41.434 48.6395 41.3772 48.6529 41.3195C48.6645 41.2706 48.6737 41.2207 48.6815 41.1709C48.6903 41.1174 48.6986 41.0643 48.7032 41.0103C48.7102 40.9244 48.712 40.8377 48.7079 40.75C48.7065 40.7177 48.7037 40.6853 48.7009 40.6535C48.6908 40.5478 48.6765 40.4421 48.6497 40.3364C48.4231 39.4627 47.6652 38.8973 46.8391 38.9292C46.7209 38.9338 46.6014 38.9504 46.4818 38.9804C45.2528 39.2343 44.0385 39.483 42.8283 39.73C41.9722 39.9049 41.1174 40.0793 40.2635 40.2533C38.5628 40.6 36.862 40.947 35.1608 41.2964C35.0422 41.3472 34.9129 41.3721 34.7943 41.3707C34.5931 41.4123 34.3918 41.4538 34.1906 41.4953C34.1011 41.5138 34.0102 41.5193 33.9188 41.5101L29.8494 41.1298C29.8166 41.1266 29.7838 41.122 29.7515 41.1155L22.7034 39.6838C22.2035 39.5823 21.8809 39.0953 21.9825 38.5955C22.0835 38.0966 22.57 37.7726 23.0708 37.8746L30.0705 39.2957L33.9534 39.6584C34.1242 39.6234 34.2954 39.5883 34.4666 39.5532C34.468 39.5518 34.4694 39.5509 34.4708 39.55C34.6074 39.442 34.8054 39.2583 34.9558 39.0155C34.9692 38.9933 34.9831 38.9717 34.9955 38.9486C35.0135 38.9158 35.0302 38.8821 35.0458 38.8475C35.0625 38.811 35.0772 38.7727 35.0911 38.734C35.1012 38.7058 35.1118 38.6781 35.1197 38.649C35.1395 38.5775 35.1557 38.5032 35.1626 38.4252C35.2355 37.6743 34.6 36.718 33.448 36.4641C28.7463 35.1889 24.1032 33.9243 19.4454 32.6426L19.2982 32.6915C17.9191 33.1521 16.5446 33.6081 15.1665 34.0678C13.0545 34.7721 10.9411 35.4778 8.83231 36.1784C8.83 36.1793 8.82815 36.1789 8.82584 36.1798C7.98169 36.4604 7.13338 36.7447 6.29015 37.0244L6.08984 44.4926L13.3111 41.9647C13.4098 41.9301 13.5128 41.913 13.6162 41.913C13.7205 41.913 13.8252 41.9306 13.9249 41.9661L23.662 45.4212C23.7003 45.4346 23.7377 45.4507 23.7742 45.4692C24.3049 45.741 24.9322 45.9981 25.588 46.2118C26.1151 46.3706 26.6722 46.4966 27.3137 46.6014C34.0568 45.3012 40.7818 44.0001 47.5258 42.682C47.8249 42.562 48.0742 42.3607 48.2698 42.1147Z"
                                          fill="#222222" />
                                      <path
                                          d="M8.0201 13.0507C8.72395 13.5206 9.5658 13.6867 10.3901 13.5187C12.1236 13.1657 13.2507 11.4363 12.9023 9.66305C12.7315 8.79351 12.2376 8.04859 11.5116 7.56443C10.9869 7.21459 10.3855 7.0332 9.77164 7.0332C9.5621 7.0332 9.35164 7.05443 9.1421 7.09736C7.40856 7.45043 6.28149 9.17982 6.62949 10.953C6.80072 11.8217 7.29456 12.5675 8.0201 13.0507Z"
                                          fill="#222222" />
                                      <path
                                          d="M18.6624 12.9795C18.6448 13.0478 18.631 13.117 18.6121 13.1849L18.7035 13.2495C19.8167 14.0332 20.1282 15.6112 19.3985 16.7673C19.0325 17.347 18.4676 17.7384 17.8076 17.8709C17.2048 17.99 16.5928 17.8801 16.0676 17.5589C15.5078 18.1132 14.8856 18.5886 14.209 18.9804C14.4628 20.3521 13.5993 21.6809 12.2724 21.9509C12.1127 21.9832 11.9521 21.9993 11.7924 21.9993C11.7915 21.9993 11.7905 21.9998 11.7896 21.9998C11.6475 21.9998 11.5067 21.9832 11.3673 21.9583C11.3272 21.9509 11.2879 21.9407 11.2482 21.9315C11.1439 21.9075 11.0419 21.8761 10.9408 21.8383C10.9016 21.8235 10.8628 21.8101 10.8245 21.793C10.6921 21.7349 10.5624 21.6689 10.4387 21.5867C10.3205 21.5078 10.2112 21.4192 10.1092 21.3236C10.075 21.2913 10.0459 21.2549 10.0136 21.2207C9.94946 21.1538 9.88623 21.0864 9.82992 21.013C9.79669 20.9696 9.76854 20.9226 9.73854 20.8769C9.69146 20.8063 9.64531 20.7356 9.60561 20.6609C9.57838 20.6096 9.55577 20.5566 9.53177 20.5035C9.51007 20.4555 9.48377 20.4103 9.46484 20.3604V34.022C11.9839 33.1838 14.5021 32.3461 17.0258 31.5038C17.7268 31.2698 18.4265 31.0372 19.1276 30.8032C19.3016 30.7446 19.4881 30.7395 19.6653 30.7884C24.4122 32.096 29.1421 33.3841 33.889 34.6732C35.7878 35.09 37.1742 36.8175 37.0016 38.5949C36.9878 38.7537 36.9624 38.906 36.9273 39.0504C37.9316 38.8455 38.9355 38.6406 39.9393 38.4361C41.9835 38.0198 44.0272 37.603 46.0713 37.1816C46.3062 37.1221 46.543 37.0893 46.7779 37.0806C47.8353 37.0418 48.8618 37.4987 49.5781 38.2866C49.9764 38.7241 50.2787 39.2637 50.4379 39.8775C50.4744 40.0215 50.4998 40.1655 50.5196 40.31C50.5252 40.3492 50.5284 40.3884 50.5325 40.4277C50.5445 40.5407 50.5515 40.6538 50.5538 40.7664C50.5542 40.802 50.5561 40.838 50.5556 40.8735C50.5528 41.1656 50.5173 41.4541 50.4513 41.7333C50.4476 41.749 50.4462 41.7652 50.4425 41.7809H53.9996V12.9795H18.6624ZM26.3202 25.3289L23.7748 28.009C23.6008 28.1923 23.3585 28.2966 23.1056 28.2966C22.8527 28.2966 22.6104 28.1923 22.4364 28.009L21.1044 26.6064C20.7532 26.2367 20.7684 25.6529 21.1381 25.3016C21.5078 24.9504 22.0916 24.9652 22.4433 25.3353L23.1061 26.0332L24.9822 24.0583C25.333 23.6886 25.9173 23.6738 26.2875 24.0246C26.6562 24.3753 26.6715 24.9592 26.3202 25.3289ZM26.3202 18.0075L23.7748 20.6876C23.6008 20.8709 23.3585 20.9752 23.1056 20.9752C22.8527 20.9752 22.6104 20.8709 22.4364 20.6876L21.1044 19.285C20.7532 18.9153 20.7684 18.3315 21.1381 17.9803C21.5078 17.629 22.0916 17.6438 22.4433 18.014L23.1061 18.7118L24.9822 16.7369C25.333 16.3672 25.9173 16.3524 26.2875 16.7032C26.6562 17.0535 26.6715 17.6378 26.3202 18.0075ZM43.8393 27.4367H30.6245C30.115 27.4367 29.7015 27.0232 29.7015 26.5136C29.7015 26.0041 30.115 25.5906 30.6245 25.5906H43.8388C44.3484 25.5906 44.7619 26.0041 44.7619 26.5136C44.7619 27.0232 44.3488 27.4367 43.8393 27.4367ZM43.8393 19.6349H30.6245C30.115 19.6349 29.7015 19.2213 29.7015 18.7118C29.7015 18.2023 30.115 17.7887 30.6245 17.7887H43.8388C44.3484 17.7887 44.7619 18.2023 44.7619 18.7118C44.7619 19.2213 44.3488 19.6349 43.8393 19.6349Z"
                                          fill="#222222" />
                                  </svg>
                                  <p>
                                      {!! trans('partials/results.item__stage8') !!}
                                  </p>
                              </li>
                              <li>
                                  <div class="decor"></div>
                                  <svg width="49" height="40" viewBox="0 0 49 40" fill="none"
                                      xmlns="http://www.w3.org/2000/svg">
                                      <path
                                          d="M49 6.1413V0.508133C49 0.227644 48.7746 0 48.4968 0H0.503204C0.225435 0 0 0.227644 0 0.508133V6.1413H49ZM10.5472 2.22664C10.7434 2.02847 11.0624 2.02847 11.2587 2.22664L11.8082 2.78152L12.3577 2.22664C12.5539 2.02847 12.873 2.02847 13.0692 2.22664C13.2655 2.42481 13.2655 2.74697 13.0692 2.94514L12.5197 3.50002L13.0682 4.05389C13.2645 4.25206 13.2645 4.57422 13.0682 4.77239C12.9696 4.87198 12.8408 4.92076 12.7119 4.92076C12.5831 4.92076 12.4543 4.87097 12.3557 4.77239L11.8072 4.21852L11.2587 4.77239C11.1601 4.87198 11.0312 4.92076 10.9024 4.92076C10.7736 4.92076 10.6448 4.87097 10.5462 4.77239C10.3499 4.57422 10.3499 4.25206 10.5462 4.05389L11.0946 3.50002L10.5451 2.94514C10.3499 2.74595 10.3499 2.42481 10.5472 2.22664ZM6.82647 2.99189H8.98823C9.266 2.99189 9.49143 3.21953 9.49143 3.50002C9.49143 3.78051 9.266 4.00816 8.98823 4.00816H6.82647C6.5487 4.00816 6.32326 3.78051 6.32326 3.50002C6.32326 3.21953 6.5487 2.99189 6.82647 2.99189ZM3.82133 1.93599C4.67577 1.93599 5.37019 2.63721 5.37019 3.50002C5.37019 4.36283 4.67577 5.06406 3.82133 5.06406C2.9679 5.06406 2.27247 4.36283 2.27247 3.50002C2.27247 2.63721 2.96689 1.93599 3.82133 1.93599Z"
                                          fill="#222222" />
                                      <path
                                          d="M0 7.15723V39.4918C0 39.7723 0.225435 39.9999 0.503204 39.9999H48.4968C48.7746 39.9999 49 39.7723 49 39.4918V7.15723H0ZM18.7091 28.9683C18.9336 29.134 18.9819 29.4521 18.8178 29.6787C18.7192 29.8139 18.5662 29.886 18.4112 29.886C18.3076 29.886 18.2039 29.8545 18.1143 29.7875L9.58403 23.4795C9.55685 23.4592 9.54075 23.4307 9.51861 23.4063C9.50552 23.3921 9.48741 23.386 9.47634 23.3707C9.47131 23.3636 9.47131 23.3555 9.46627 23.3484C9.44615 23.3189 9.43507 23.2864 9.423 23.2529C9.41193 23.2244 9.39885 23.1959 9.39281 23.1665C9.38677 23.135 9.38878 23.1025 9.38878 23.0699C9.38878 23.0374 9.38677 23.0059 9.39281 22.9734C9.39885 22.9439 9.41293 22.9155 9.423 22.887C9.43608 22.8535 9.44715 22.822 9.46627 22.7915C9.47131 22.7833 9.47131 22.7752 9.47634 22.7691C9.49244 22.7468 9.51659 22.7346 9.53572 22.7142C9.55383 22.697 9.5649 22.6746 9.58503 22.6594L18.1153 16.3504C18.3378 16.1837 18.6538 16.2325 18.8188 16.4601C18.9829 16.6868 18.9346 17.0048 18.7101 17.1705L10.7343 23.0689L18.7091 28.9683ZM27.3371 13.7508L22.6402 32.636C22.5828 32.8667 22.3775 33.0202 22.1531 33.0202C22.1118 33.0202 22.0705 33.0151 22.0303 33.005C21.7606 32.9369 21.5965 32.6604 21.6649 32.3881L26.3619 13.5028C26.4293 13.2304 26.699 13.0638 26.9727 13.1339C27.2415 13.203 27.4045 13.4784 27.3371 13.7508ZM39.6092 23.1675C39.6042 23.1959 39.5901 23.2224 39.58 23.2498C39.5669 23.2844 39.5559 23.3179 39.5347 23.3494C39.5297 23.3565 39.5297 23.3646 39.5247 23.3707C39.5136 23.386 39.4965 23.3921 39.4844 23.4053C39.4623 23.4297 39.4452 23.4592 39.417 23.4795L30.8877 29.7875C30.7971 29.8535 30.6934 29.886 30.5898 29.886C30.4358 29.886 30.2818 29.8139 30.1842 29.6787C30.0201 29.4511 30.0685 29.134 30.2919 28.9683L38.2667 23.0699L30.2919 17.1715C30.0674 17.0059 30.0191 16.6878 30.1842 16.4611C30.3492 16.2345 30.6632 16.1868 30.8877 16.3514L39.417 22.6604C39.4381 22.6766 39.4512 22.7 39.4693 22.7193C39.4884 22.7376 39.5096 22.7488 39.5257 22.7701C39.5307 22.7772 39.5307 22.7854 39.5357 22.7915C39.5569 22.822 39.5679 22.8555 39.581 22.8911C39.5921 22.9185 39.6052 22.9449 39.6102 22.9734C39.6173 23.0059 39.6142 23.0374 39.6142 23.0709C39.6142 23.1045 39.6162 23.135 39.6092 23.1675Z"
                                          fill="#222222" />
                                      <path
                                          d="M3.82175 4.04768C4.12134 4.04768 4.3642 3.80244 4.3642 3.49992C4.3642 3.19739 4.12134 2.95215 3.82175 2.95215C3.52216 2.95215 3.2793 3.19739 3.2793 3.49992C3.2793 3.80244 3.52216 4.04768 3.82175 4.04768Z"
                                          fill="#222222" />
                                  </svg>
                                  <p>
                                      {!! trans('partials/results.item__stage9') !!}
                                  </p>
                              </li>
                          </ul>

                          {{-- <p class="text__bold text-center">Над проектом работали:</p> --}}
                          <ol class="item__works">
                              <li>Project Manager</li>
                              <li>{{ trans('partials/results.works_marketing') }}</li>
                              <li>{{ trans('partials/results.works_designer') }}</li>
                              {{-- <ul class="item__results">
                <li>
                  <p class="item__results-digit">1034 +</p>
                  <p class="item__results-descr">заказов в <b>ДЕНЬ</b> </p>
                </li>
                <li>
                  <p class="item__results-digit">26 437 +</p>
                  <p class="item__results-descr">заказов в <b>МЕСЯЦ</b> </p>
                </li>
                <li>
                  <p class="item__results-digit">49,69 %</p>
                  <p class="item__results-descr">вернувшихся пользователей </p>
                </li>
                <li>
                  <p class="item__results-digit">2,08 %</p>
                  <p class="item__results-descr">коэффициент конверсии</p>
                  <p class="item__results-descr__more">
                    (в разных сферах <b>средний коэффициент конверсии</b> составляет всего 2,35%)
                  </p>
                </li>
              </ul> --}}
                              <li>{{ trans('partials/results.works_front') }}</li>
                              <li>{{ trans('partials/results.works_front') }}</li>
                              <li>{{ trans('partials/results.works_seo') }}</li>
                              <li>{{ trans('partials/results.works_qna') }}</li>
                          </ol>

                          {{-- <p class="text__bold text-center">Успешные результаты продвижения:</p> --}}


                          {{-- <div class="item__section">
              <p class="item__section-text">
                1) Органический трафик:
              </p>
              <div class="item__section-cont">

                <div class="item__section-image">
                  <img class="lazy" data-src="/img/results/hoasklad__graph-1.png" alt="hoasklad__graph-1">
                  <p class="item__section-image__text">
                    период: август 2020 — ноябрь 2020
                  </p>
                </div>
                <div class="item__section-wind">
                  <p class="bold">за ноябрь 2020:</p>
                  <p><span>12 332</span> визитов</p>
                  <p>от <span>273</span> заказов в день</p>
                  <p><span>24 011</span> конверсий</p>
                </div>
              </div>
            </div> --}}

                          {{-- <div class="item__section item__section-green">
              <p class="item__section-text">
                1) Ссылочный профиль:
              </p>
              <div class="item__section-cont">
                <div class="item__section-image">
                  <img class="lazy" data-src="/img/results/hoasklad__graph-2.png" alt="hoasklad__graph-2">
                  <p class="item__section-image__text">
                    период: декабрь 2019 — ноябрь 2020
                  </p>
                </div>
                <div class="item__section-wind">
                  <p class="bold">за ноябрь 2020:</p>
                  <p><span>144</span> домена</p>
                  <p><span>298 370</span> страницы</p>
                </div>
              </div>
            </div> --}}
                      </div>
                  </div>
              </div>
          </div>
          <div class="item-popup js-shape-close" id="popoup-3">
              <div class="popupShape"></div>
              <div class="container">
                  <div class="item">
                      <button class="item-popup-close js-close"></button>
                      <div class="item__top row">
                          <div class="col-xs-12 col-md-6">
                              <p class="item__name item__name--phone">
                                  kolgotoff.com.ua
                              </p>
                              <div class="item__poster">
                                  <picture>
                                      <source type="image/webp" data-srcset="/img/results/colgotof_poster.webp">
                                      <img width="824" height="506" data-src="/img/results/colgotof_poster.png"
                                          alt="colgotof_poster" class="lazy desctop">
                                  </picture>
                              </div>
                          </div>
                          <div class="col-xs-12 col-md-6">
                              <div class="item__info">
                                  <p class="item__name">
                                      kolgotoff.com.ua
                                  </p>
                                  <div class="item__text">
                                      <p class="text__bold">{{ trans('partials/results.sold_services') }}</p>
                                      <ul class="item__services">
                                          <li>{{ trans('partials/results.service_marketing') }}</li>
                                          <li>{{ trans('partials/results.interface_design') }}</li>
                                          <li>{{ trans('partials/results.design_develop') }}</li>
                                          <li>{{ trans('partials/results.seo') }}</li>
                                          <li>{{ trans('partials/results.advertising') }}</li>
                                      </ul>
                                      <div class="item__cell__footer">
                                          <p class="text__bold">{{ trans('partials/results.result') }}</p>
                                          <div class="row">
                                              <div class="col-xs-12">
                                                  <p class="text__bold">{{ trans('partials/results.time_inside') }}
                                                  </p>
                                                  <ul class="item__services item__services-termin">
                                                      <li> {{ trans('partials/results.3_month') }} </li>
                                                  </ul>
                                              </div>
                                              <div class="col-xs-12">
                                                  <p class="text__bold">{{ trans('partials/results.technologies') }}
                                                  </p>
                                                  <ul class="item__tech">
                                                      <li><img class="lazy" data-src="/img/tech/laravel.png"
                                                              alt="laravel"></li>
                                                      <li><img class="lazy" data-src="/img/tech/vue.png"
                                                              alt="vue"></li>
                                                      <li><img class="lazy" data-src="/img/tech/bootstrap.png"
                                                              alt="bootstrap"></li>
                                                  </ul>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="item__section item__section-green">
                                  <p class="item__section-text">
                                      {{ trans('partials/results.reference_profile') }}
                                  </p>
                                  <div class="item__section-cont">
                                      <div class="item__section-image">
                                          <img class="lazy" data-src="/img/results/kolg__graphic-3.png"
                                              alt="kolg__graphic-3">
                                          <p class="item__section-image__text">
                                              {{ trans('partials/results.period4') }}
                                          </p>
                                      </div>
                                      <div class="item__section-wind">
                                          <p class="bold">за апрель 2021:</p>
                                          <p><span>330</span>доменов</p>
                                          <p><span>4 014</span>{{ trans('partials/results.pages') }}</p>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
  </section>