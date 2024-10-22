$(document).ready(function(){
  window.initPhoneMask = function (item) {
    let $selector = $(item);
    let events = {
      onKeyPress: function (cep, e, currentField, options) {
        e.target.classList.add('validation-error')
      },
      onComplete: function (cep, e) {
        e.target.classList.remove('validation-error')
      },
    };
    if ($selector.length) {
      $selector.mask("+1 (99) 999-99-99", {
        'translation': {
          9: {pattern: /[0-9]/},
          0: {pattern: /[0]/, fallback: '0'}
        },
        placeholder: "+1 (__) ___-__-__",
        ...events
      });

      $selector.intlTelInput({
        defaultCountry: "us",
        // allowExtensions: true,
        autoPlaceholder: 'off',
        autoHideDialCode: true,
        formatOnDisplay: false,
        preferredCountries: ['us', 'ru', 'md', 'by', 'pl', 'il', 'kz', 'am'],
        nationalMode: true,
        // utilsScript: "./international-mask/js/utils.js",
      });

      $(document).on('click', '[data-country-code]', function () {
        let country = $(this).data('country-code');

        switch (country) {
          case "ru":
          case "kz":
          $selector.mask("+7 (999) 999-99-99", {
            placeholder: "+7 (___) ___-__-__",
            ...events
          });
          break;
          case "ua":
          $selector.mask("+380 (99) 999-99-99", {
            'translation': {
              9: {pattern: /[0-9]/},
              0: {pattern: /[0]/, fallback: '0'}
            },
            placeholder: "+380 (__) ___-__-__",
            ...events
          });
          break;
          case "md":
          $selector.mask("+373 (99) 999-99-99", {
            placeholder: "+373 (__) ___-__-__",
            ...events
          });
          break;
          case "am":
          $selector.mask("+374 (99) 999-99-99", {
            placeholder: "+374 (__) ___-__-__",
            ...events
          });
          break;
          case "by":
          $selector.mask("+375 (99) 999-99-99", {
            placeholder: "+375 (__) ___-__-__",
            ...events
          });
          break;
          case "pl":
          $selector.mask("+48 (999) 999-99-99", {
            placeholder: "+48 (___) ___-__-__",
            ...events
          });
          break;
          case "us":
          $selector.mask("+1 (999) 999-99-99", {
            placeholder: "+1 (___) ___-__-__",
            ...events
          });
          break;
          case "il":
          $selector.mask("+072 (99) 999-99-99", {
            'translation': {
              9: {pattern: /[0-9]/},
              0: {pattern: /[9]/, fallback: '9'}
            },
            placeholder: "+972 (__) ___-__-__",
            ...events
          });
          break;
          default:
          $selector.mask("+999 (99) 999-99ZZ", {
            'translation': {
              'Z': {
                pattern: /[0-9]/, optional: true
              }
            },
            placeholder: "+___ (__) ___-__-__",
            ...events
          });
        }
      });
    }
  };

  $('.mainHeader-redesign .navi li span').on('click', (e) => {
    $(e.target).parents('li').toggleClass('active')
  })

  $('.seo-text__show-more').on('click', function() {
    $(this).next().slideToggle()
  })

  $('.video').on('click',function(){
    $(this).addClass('load');
    let _frame =  $(this).find('[data-onclick-src]')[0];
    _frame.src = _frame.dataset.onclickSrc;
    _frame.onload = function() {
      $(this).removeClass('load');
    }
    delete _frame.dataset.onclickSrc;
  })

  let $hamburger = $('.hamburger');
  let $overlay = $('.overlay');
  let $popup;

  function togglePopup(){
    $popup = $(this.dataset.togle);
    $popup.toggleClass('active');
    $('html').toggleClass('popupShow');
  }

  $('[data-togle]').on('click', togglePopup);
  $('.js-close').on('click', function(){
    $('html').removeClass('popupShow')
    if($popup && $popup[0]){
      bodyStockToggle(false);
      $($popup).removeClass('active');
    }
    else{
      $('.popup.active').removeClass('active');
    }
  });
  $('.js-shape-close').on('click', function(e){
    let $this = $(this);
    if($this[0] == e.target){
      bodyStockToggle(false);
      $this.removeClass('active');
      $('html').removeClass('popupShow');
    }
  })



  $('form').on('submit',function(e){
    e.preventDefault();
    let _form = this;
    // find category for gtag event
    const categories = {
      website: 'razrabotka_sayta',
      ecommerce: 'internet_magazin',
      zapros: 'zapros_video',
      homepage: 'glavnaya',
      portfolio__form: 'portfolio',
      popupform: 'zadat_vopros',
      contactform: 'contacts',
      seopage: 'seo',
      smm: 'smm_prod',
      android: 'mob_appc'
    }

    let eventCategory = 'default'

    for (const category of Object.keys(categories)) {
      if (e.target.classList.contains(category)) {
        eventCategory = categories[category]
      }
    }

    const form = new FormData(e.target)
    const formObject = {};
    form.forEach(function(value, key){
      formObject[key] = value;
    });

    formObject.url = window.location.href

    const button = e.target.querySelector('.button,.js-submit')
    button.disabled = true;

    const recaptcha =  e.target.querySelector('recaptcha') ;
    const errorContainer = e.target.querySelector('.recaptchaError')
    if(recaptcha) {
      if(formObject['g-recaptcha-response'].length){
        errorContainer.textContent = '';

      } else {
        errorContainer.textContent = 'Введи капчу'
        return
      }
    }
    send();

    function send(){
      _form.reset();
      $.ajax({
        type: 'POST',
        url: '/mail/send',
        data: formObject,
        success: function(response) {
          $(this).addClass('success');
          showMessage(true);
          button.disabled = false
          if (gtag) {
            gtag('event', 'send_form', {
              'event_category': eventCategory,
            });
          }
        },
        error: function(error) {
          errorContainer.textContent = 'Ошибка отправки формы';
          console.error({message:error.responseJSON.message , error})
          button.disabled = false
        }
      })
    }
  })

  $('[name="user_name"]').on('keypress', function() {
    var that = this;

    setTimeout(function() {
      var res = /[^а-яa-zєії'ґ ]/gi.exec(that.value);

      that.value = that.value.replace(res, '');
    }, 0);
  });

  function showMessage(result,message){
    $('html').removeClass('popupShow')
    $($popup).removeClass('active');

    $popup = $('#popupmessage');
    $popup.toggleClass('active');
    $('html').addClass('popupShow');

    if(result){
      $popup.addClass('success');
    } else {
      $popup.addClass('error');
    }
  }

  var inputs = document.querySelectorAll("[name='user_phone']");
  inputs.forEach(input=>{
    initPhoneMask(input);
  })


  $hamburger.on('click', function() {

    toggleMobileMenu();
    document.scrollingElement.scroll(0,0)

  });

  $overlay.on('click', function() {
    toggleMobileMenu();
    bodyStockToggle(false)

  });

  function toggleMobileMenu() {
    $hamburger.toggleClass('is-active').next().toggleClass('active');
    $overlay.fadeToggle();
    $('.mainHeader').toggleClass('active')
  }
  /*end показать скрытый блок под гамбургером*/

  /*показать выпадающее меню*/
  // document.addEventListener('click', toggleServicesMenu, false);
  // function toggleServicesMenu(e) {
  //   if (e.target.id === 'serviceCaret') {

  //   }
  // };

  $('#serviceCaret').on('click',e=>{
    document.querySelector('.navigation__menu-list').classList.toggle('active');
  })
  /*end выпадающее меню*/

  /*работа с popup*/
  $('.popup-slider-link').magnificPopup({
    removalDelay: 500,
    callbacks: {
      beforeOpen: function() {
        this.st.mainClass = this.st.el.attr('data-effect');
      },
      open: function() {
        $('.gallery__slider').not('.slick-initialized').slick();
      }
    },
    midClick: true
  });
  $('.popup-link').magnificPopup({
    removalDelay: 500,
    callbacks: {
      beforeOpen: function() {
        this.st.mainClass = this.st.el.attr('data-effect');
      },
      open: function() {
        $('.gallery__slider').not('.slick-initialized').slick();
      }
    },
    midClick: true
  });
  $('.popup-link-success').magnificPopup({
    removalDelay: 500,
    callbacks: {
      beforeOpen: function() {
        this.st.mainClass = this.st.el.attr('data-effect');
      },
      open: function() {
        $('.gallery__slider').not('.slick-initialized').slick();
      }
    },
    midClick: true
  });
  /*end работа с popup*/

  /*работа со слайдерами*/
  $('.results__slider').slick({
    arrows: true,
    adaptiveHeight: true,
    slidesToShow: 1,
    dots: true,
    infinite: false,
    appendDots:$('.results__buttons'),
    appendArrows:$('.results__buttons'),
    nextArrow:'.button.next',
    prevArrow:'.button.prev',
  });

  $('.popup__clients-result-slider').slick({
    arrows: false,
    infinite: true,
    slidesToScroll: 1,
    dots: false,
    adaptiveHeight: true,
    currentProjectSlide: 0,
  });
  /*end работа со слайдерами*/

  let $techtab = $('.techtab-tab');
  $('[data-jsTabToggle]').on('click', function(){
    let $active = $('[data-jsTabToggle].active');
    let $newActive = $(this);

    $active.removeClass('active');
    $techtab.removeClass($active[0].dataset.jstabtoggle);

    $newActive.addClass('active');
    $techtab.addClass($newActive[0].dataset.jstabtoggle);
  });

  let _loop = document.querySelector('.portfolio__projectsLoop');
  if(_loop){
    _loop = $(_loop).clone();
  }

  // filter type
  $('[data-type]').on('click',function(){
    $('[data-type].active').removeClass('active')
    $(this).addClass('active');

    let $loopClone = $(_loop).clone();
    let projectsLoop = $('.portfolio__projectsLoop');
    projectsLoop.after($loopClone);
    projectsLoop.remove();
    console.log({projectsLoop})

    let type = this.dataset.type;

    if( type == 'all' ) {
      portfolioHider();
      return
    } ;
    $('.portfolio__projectsLoop [data-item-type]').each((i,item)=>{
      if(item.dataset && item.dataset.itemType!==type){
        item.parentElement.remove();
      }
      else{
        $(item).find('[data-togle]').on('click', togglePopup);
      }
    });
    lazyLoadInstance.update();
    portfolioHider();

  });

  portfolioHider();
  interceptionObserver(document.querySelectorAll('#google-map, .g-recaptcha'));

  onScroll();
});

let showMore = 12;

$('.js-showMore').on('click',function(){
  showMore += 6;
  portfolioHider();

});


const mediaQuery = '(min-width: 767px)';
const mediaQueryList = window.matchMedia(mediaQuery);
if (mediaQueryList.matches) {
  dataSrc();
  new WOW().init();
}


mediaQueryList.addEventListener('change', event => {
  if (event.matches) {
    dataSrc();
    new WOW().init();
  }
})

function dataSrc(){

  $('[data-src]').each((i,item)=>{
    if(!item.dataset.src  ) return
    item.src = item.dataset.src
    delete item.dataset.src
  })

}

function isVideo (src){
  return /.mp4/.test(src);
}

function isMobile(){
  return screen.width <= 768;

}

function portfolioHider(){
  let items =   $('.portfolio__projectsLoop [data-item-type]');

  if(!items[0]) return;
  items.each((i,item)=>{
    if(i>showMore-1){
      $(item).addClass('hidden');
    } else {

      $(item).removeClass('hidden');
      // let $img = $(item).find('[data-hidden-src]');
      // if($img[0] &&  $img[0].dataset){
      //   $img[0].src = $img[0].dataset.hiddenSrc;
      //   delete $img[0].dataset.hiddenSrc;
      // }
    }
  })
  if(!$('.portfolio__projectsLoop [data-item-type].hidden').length){
    $('.js-showMore').addClass('hidden')
    $('.projects__footer').addClass('last')
  } else {
    $('.js-showMore').removeClass('hidden')
    $('.projects__footer').removeClass('last')
  }
}

function onScroll(){
  if ($(window).scrollTop() > 10) {

    $('.mainHeader').addClass('mainHeader-background');
    $('.mainHeader__inner-item').addClass('item-hidden');
  }
  else {
    $('.mainHeader').removeClass('mainHeader-background');
    $('.mainHeader__inner-item').removeClass('item-hidden');
  }
}
//interceptionObserver
function interceptionObserver(itemList){
  // устанавливаем настройки
  const options = {
    root: null,
    rootMargin: '0px',
    threshold: 0.5
  }

  // создаем наблюдатель
  const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const target = entry.target;
        if(target.id == 'google-map' )
        {
          initMap();
        }
        else{
          recaptchaInit();
        }
        observer.unobserve(target)
      }
    })
  }, options)


  itemList.forEach(item=>{
    observer.observe(item);
  })

}
// mapInclude
function initMap(){
  window.initMap = function() {
    let map = new google.maps.Map(document.getElementById("google-map"), {
      zoom: 17,
      center:{ lat: 46.458551, lng: 30.740516 },
      styles: [{"featureType":"all","elementType":"all","stylers":[{"saturation":-100},{"gamma":0.5}]}]
    });
    const image = '/img/icons/map-marker.png';
    const marker = new google.maps.Marker({
      position: { lat: 46.458551, lng: 30.740516 },
      map,
      icon: image,
    });
  };
  let script = document.createElement('script');
  script.src = 'https://maps.googleapis.com/maps/api/js?key=AIzaSyBjdeoiMUd__EiEU86NviKYb3Pad7DVh14&callback=initMap&libraries=&v=weekly';
  script.async = true;

  document.body.appendChild(script);
}
// captchaInclude
function recaptchaInit(){
  let key = '6LfTdqYaAAAAAFUhIZq7rac-iaNkSwCu_V8z-L2d';
  let script = document.createElement('script');
  let isExist = document.querySelector('#recaptchaInit');
  if(isExist) return

  script.src = 'https://www.google.com/recaptcha/api.js?render=explicit';
  script.async = true;
  script.id = 'recaptchaInit'
  script.onload = function () {
    grecaptcha.ready(function () {
      document.querySelectorAll('.g-recaptcha').forEach(el => {
        grecaptcha.render(el,{'sitekey': key});
      })
    })
  }
  document.body.appendChild(script);
}

$('.ddl-selector').on('click',function(){
  $('.ddl').toggleClass('active')
})

$('.ddl button').on('click',function(){
  $('.ddl.active').removeClass('active')
  $('.ddl-selector').text( $(this).text() )
})
$('.js-body-toggle').on('click',bodyStockToggle)

function recaptchaCallback(e,item) {
  console.log('recaptchaCallback',{e,item})
}


$(window).on('scroll',onScroll);

function bodyStockToggle(force){
  let body =document.getElementsByTagName('html')[0],
      stackClass ='js-stack' ;

  if( force!==undefined &&  !force.hasOwnProperty('originalEvent')){
    if(force){
      body.classList.add(stackClass);
    } else {
      body.classList.remove(stackClass);
    }
    return
  }

  if(body.classList.contains(stackClass)){
    body.classList.remove(stackClass);
    return
  }

  body.classList.add(stackClass);
}

function getHeaderHeight(){
  return document.querySelector('header').offsetHeight;
}
//redesign
function jsPaddingHeigh(){

    let headerPadding = getHeaderHeight();
    document.querySelectorAll('.js-padding-header').forEach(_element=>{
      _element.style.paddingTop=headerPadding+'px';
    })

}


function sideMunuheightfix(){
  if(window.innerWidth <= 993){

    $('.mainHeader-redesign .navigation').height(window.innerHeight - getHeaderHeight())
  }
  else{
    $('.mainHeader-redesign .navigation').height('')
  }
}

function onLoad(){
  //jsPaddingHeigh();\
  onResize();
  $('header .navigation [data-togle="#footer-popup"]').on('click',
    ()=>{ $('.hamburger').trigger('click')
  })
}
function onResize(){
  jsPaddingHeigh();
  sideMunuheightfix();
}
document.addEventListener('DOMContentLoaded', onLoad)
window.addEventListener('resize', onResize, true);


