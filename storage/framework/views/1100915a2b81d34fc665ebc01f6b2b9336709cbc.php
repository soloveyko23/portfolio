<!DOCTYPE html>
<html lang="ru-UA">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <meta name="facebook-domain-verification" content="jpizkoipvbp9phsu3vuorbdmhtx679" />
  <!-- Google Tag Manager -->
  <script>
    (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-N8JM4W6');
  </script>
  <?php if(false): ?>
    
  <?php endif; ?>
  <!-- End Google Tag Manager -->
  <?php echo $__env->yieldContent('head-scripts'); ?>
  <?php echo $__env->yieldContent('seo'); ?>
  <?php echo $__env->yieldContent('css'); ?>
</head>

<body class="portfolio portfolio-item">
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N8JM4W6"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
<?php echo $__env->make('partials.redesign.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->yieldContent('content'); ?>

<?php echo $__env->make('partials.redesign.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->yieldContent('bottom-scripts'); ?>

</body>
</html>
<?php /**PATH E:\laragon\www\UNITED-SOLUTION\resources\views/layouts/portfolio-item.blade.php ENDPATH**/ ?>