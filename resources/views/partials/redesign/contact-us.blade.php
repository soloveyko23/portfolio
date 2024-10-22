<section class="contact_us">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-6 col-lg-5 ">
                <div class="contact_us-title">
                    {{ trans('index.contact_us') }}
                </div>
                <form action="" class="contact_us-form">
                    @csrf
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-12 col-lg-6">
                            <input type="text" name="user_name" placeholder="{{ trans('partials/ask-form.name') }}">
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-12 col-lg-6">
                            <input required type="text" name="user_phone" placeholder="phone">
                        </div>
                        <div class="col-xs-12">
                            <input type="text" name="user_email" placeholder="E-mail">
                        </div>
                        <div class="col-xs-12">
                            <input type="text" name="user_message"
                                placeholder="{{ trans('partials/ask-form.text') }}">
                        </div>
                        <div class="col-xs-12">
                            <div class="row">
                                <div class="col-xs-12 col-md-6">
                                    <button class="btn btn-red js-submit">
                                        {{ trans('index.send_button') }}
                                    </button>
                                </div>
                                <div class="col-xs-12 col-md-6" style="min-width: 300px">
                                    <div class="recaptcha" style="margin: 20px 20px 20px 0">
                                        <div class="g-recaptcha" data-callback="recaptchaCallback"></div>
                                        <div class="text-danger recaptchaError"></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </form>
                <div class="contact_us-brief">
                    <p>{{ trans('partials/footer.fill_out_brief') }}</p>
                    <ul>
                        <li>
                            <a href="{{ getLocaleUrl('brief') }}">{{ trans('partials/footer.site') }}</a>
                        </li>
                        <li>
                            <a href="{{ getLocaleUrl('brief-seo') }}">SEO</a>
                        </li>
                        <li>
                            <a href="{{ getLocaleUrl('brief-style') }}" class="small">{{ trans('partials/footer.firm_style') }}
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-12 col-md-6 col-lg-offset-1">
                <div class="contact_us-text_container">
                    {!! trans('index.about_company') !!}

                    {{-- <div class="contact_us-text_container-section">
            <p class="title">Стоимость разработки сайтов в Одессе?</p>
            <p>
              Цены на разработку сайта индивидуальны и завистят от множества факторов. Минимальная стоимость создания сайта от 800$.
            </p>
            <p>
              Более подробней цену можно обсудить с менеджерами по телефону <b>+38 (067) 888-75-16.</b>
            </p>
          </div>
          <div class="contact_us-text_container-section">
            <p class="title">Что входит в услугу создания сайта?</p>

            <p>В стоимость разработки сайта входит: </p>

            <ul>
              <li><p> Разработка уникального дизайна  </p></li>
              <li><p> Составление технического задания  </p></li>
              <li><p> Адаптивный дизайн  </p></li>
              <li><p> eCommerce  </p></li>
              <li><p> Функционал интернет магазина  </p></li>
              <li><p> Инструкция сайта  </p></li>
              <li><p> SSL сертификат  </p></li>
              <li><p> Доменное имя и хостинг </p></li>
              <li><p> Тех. поддержка сайта на протяжении 30 дней </p></li>
              <li><p> Экспорт/импорт товаров  </p></li>
            </ul>

          </div> --}}
                    {{-- //repeat  --}}
                    {{-- <div class="contact_us-text_container-section">
            <p class="title">Делаете ли вы мобильные версии сайтов? </p>
            <p>
              Цены на разработку сайта индивидуальны и завистят от множества факторов. Минимальная стоимость создания сайта от 800$.
            </p>
            <p>
              Более подробней цену можно обсудить с менеджерами по телефону <b>+38 (067) 888-75-16.</b>
            </p>
          </div>
          <div class="contact_us-text_container-section">
            <p class="title">Что входит в услугу создания сайта?</p>

            <p>В стоимость разработки сайта входит: </p>

            <ul>
              <li><p> Разработка уникального дизайна  </p></li>
              <li><p> Составление технического задания  </p></li>
              <li><p> Адаптивный дизайн  </p></li>
              <li><p> eCommerce  </p></li>
              <li><p> Функционал интернет магазина  </p></li>
              <li><p> Инструкция сайта  </p></li>
              <li><p> SSL сертификат  </p></li>
              <li><p> Доменное имя и хостинг </p></li>
              <li><p> Тех. поддержка сайта на протяжении 30 дней </p></li>
              <li><p> Экспорт/импорт товаров  </p></li>
            </ul>

          </div>
          <p class="title">Делаете ли вы мобильные версии сайтов? </p> --}}

                </div>
            </div>
        </div>
    </div>

</section>
