<!DOCTYPE html>
<html lang="{{app()->getLocale() == 'ru' ? 'ru-UA' : 'en-US' }}">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <meta name="facebook-domain-verification" content="jpizkoipvbp9phsu3vuorbdmhtx679" />
    <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-N8JM4W6');</script>
  <!-- End Google Tag Manager -->
  @if (false)

    <!-- Global site tag (gtag.js) - Google Analytics -->
      {{-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-33193759-1"></script>
      <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-33193759-1');
      </script> --}}

  @endif

    @yield('head-scripts')
    @yield('seo')
    @yield('css')
</head>

<body  class="@yield('bodyClass')">
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N8JM4W6"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->


@include('partials.redesign.header')

@yield('content')

@include('partials.redesign.footer')

<script src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@17.3.1/dist/lazyload.min.js"></script>
@yield('bottom-scripts')
<script>
  var lazyLoadInstance = new LazyLoad({
  // Your custom settings go here
});
</script>
</body>
</html>
