

<?php $__env->startSection('seo'); ?>
    <title><?php echo e(trans('index.meta_title')); ?></title>
    <meta name="description" content="<?php echo e(trans('index.meta_description')); ?>">

    <meta property="og:type" content="website">
    <meta property="og:title" content="<?php echo e(trans('index.meta_title')); ?>">
    <meta property="og:url" content="<?php echo e(Request::url()); ?>" />
    <meta property="og:site_name" content="<?php echo e(trans('index.site_name')); ?>" />
    <meta property="og:description" content="<?php echo e(trans('index.meta_description')); ?>" />
    <meta property="og:image" content="<?php echo e(Request::url()); ?>/img/logo.png">

    <link rel="canonical" href="<?php echo e(Request::url()); ?>">
    <link rel="preload" href="/img/main_banner_bg.jpg" as="image">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/animate.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/magnific-popup.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/slick.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/homepage.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/redesign.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <main class="main index">
        <?php echo $__env->make('partials.redesign.index-banner', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('partials.redesign.we_propouse', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <section class="projects projects_redesign">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <?php echo $__env->make('partials.redesign.parts.section_title-button', [
                            'title' => trans('index.main_section_title'),
                        ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                </div>
                <div class="row projects_redesign-loop">
                    <div class="col-xs-12">
                        <p
                            style="font-family: 'Stolzl', serif; font-style: normal; font-weight: 500; font-size: 26px; line-height: 106%; text-transform: uppercase; color: #222222;">
                            <?php echo e(trans('index.corporate_sites')); ?>

                        </p>
                    </div>
                    <?php $__currentLoopData = $portfolioCorporates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if(isset($item)): ?>
                            <div class="col-xs-12 col-sm-6 col-md-4">
                                <?php echo $__env->make('partials.redesign.parts.mini-portfolio', ['item' => $item], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </section>
        <!-- <?php echo $__env->make('partials.redesign.results', [
            'title' => trans('index.our_clients_results'),
            'button' => ' ',
        ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> -->
        <section class="projects projects_redesign">
            <div class="container">
                <div class="row projects_redesign-loop">
                    <div class="col-xs-12">
                        <p
                            style="font-family: 'Stolzl', serif; font-style: normal; font-weight: 500; font-size: 26px; line-height: 106%; text-transform: uppercase; color: #222222;">
                            <?php echo e(trans('index.online_store')); ?>

                        </p>
                    </div>
                    <?php $__currentLoopData = $portfolioEcommerce; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if(isset($item)): ?>
                            <div class="col-xs-12 col-sm-6 col-md-4">
                                <?php echo $__env->make('partials.redesign.parts.mini-portfolio', ['item' => $item], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </section>
        <section class="projects projects_redesign">
            <div class="container">
                <div class="row projects_redesign-loop">
                    <div class="col-xs-12">
                        <p
                            style="font-family: 'Stolzl', serif; font-style: normal; font-weight: 500; font-size: 26px; line-height: 106%; text-transform: uppercase; color: #222222;">
                            <?php echo e(trans('index.logo_brandbook')); ?>

                        </p>
                    </div>
                    <?php $__currentLoopData = $portfolioOther; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if(isset($item)): ?>
                            <div class="col-xs-12 col-sm-6 col-md-4">
                                <?php echo $__env->make('partials.redesign.parts.mini-portfolio', ['item' => $item], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </section>
        <?php echo $__env->make('partials.redesign.contact-us', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </main>
    <div id="agency-popup" class="popup js-shape-close">
        <div class="popup__wind">
            <button class="popup__close js-close"></button>
            <div class="popup__wind__top">
                <p class="popup__title"><?php echo e(trans('website.popup_title')); ?>

                    <span class="popup__subtitle"><?php echo e(trans('website.popup_subtitle')); ?></span>
                </p>
            </div>
            <div class="popup__wind__cont">
                <?php echo $__env->make('partials.ask-form', [
                    'social' => false,
                    'formId' => 'agency-popup',
                    'formClass' => 'homepage',
                ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('bottom-scripts'); ?>
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "BreadcrumbList",
      "itemListElement": [{
        "@type": "ListItem",
        "position": 1,
        "name": "Веб студия",
        "item": "https://mobios.ua"
      },{
        "@type": "ListItem",
        "position": 2,
        "name": "Студия разработки сайтов"
      }]
    }
  </script>
    <script src="<?php echo e(asset('js/libs.js')); ?>"></script>
    <script type="application/ld+json">
    {
      "@context": "https://schema.org/",
      "@type": "Product",
      "name": "Разработка сайтов под ключ по выгодной цене от студии Mobios",
      "description": "Создание сайта любой сложности с уникальным дизайном под ключ ⭐ Интернет-магазин ⭐ Сайт-визитка ⭐ Landing page ⭐ Индивидуальный проект ► Звоните ☎ (067) 888-75-16",
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.8",
        "reviewCount": "56"
      }
    }
  </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\UNITED-SOLUTION\resources\views/front/index.blade.php ENDPATH**/ ?>