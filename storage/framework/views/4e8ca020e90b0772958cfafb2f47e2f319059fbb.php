

<?php $__env->startSection('seo'); ?>
    <title><?php echo e(trans('portfolio.seo_title')); ?></title>
    <meta name="description" content="<?php echo e(trans('portfolio.seo_descr')); ?>">
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?php echo e(trans('portfolio.seo_name')); ?>">
    <meta property="og:url" content="<?php echo e(Request::url()); ?>" />
    <meta property="og:site_name" content="<?php echo e(trans('portfolio.seo_subtitle')); ?>" />
    <meta property="og:description" content="<?php echo e(trans('portfolio.seo_descr')); ?>" />
    <meta property="og:image" content="<?php echo e(Request::url()); ?>/img/logo.png">

    <link rel="canonical" href="<?php echo e(Request::url()); ?>">
<?php $__env->stopSection(); ?>



<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/animate.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/magnific-popup.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/website.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/portfoliopage.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/redesign.css')); ?>">
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <main class="main webs ">

        <section class="portfolio">
            <div class="container">
                <div class="row">
                    <div class="bread-crumbs black">
                        <div class="bread-crumbs__inner">
                            <ul class="bread-crumbs__list" itemscope itemtype="http://schema.org/BreadcrumbList">
                                <li class="bread-crumbs__list-item" itemprop="itemListElement" itemscope
                                    itemtype="http://schema.org/ListItem">
                                    <a href="<?php echo e(url('/')); ?>" class="bread-crumbs__link" itemprop="item">
                                        <span itemprop="name"><?php echo e(trans('portfolio.crumbs_main')); ?></span>
                                        <meta itemprop="position" content="1">
                                    </a>
                                </li>
                                <li class="bread-crumbs__list-item" itemprop="itemListElement" itemscope
                                    itemtype="http://schema.org/ListItem">
                                    <span class="bread-crumbs__current-page"
                                        itemprop="name"><?php echo e(trans('portfolio.crumbs_page')); ?></span>
                                    <meta itemprop="position" content="2">
                                </li>
                            </ul>
                        </div>
                    </div>
                    <h2 class="section-title">
                        <?php echo e(trans('portfolio.section_title')); ?>

                        <span class="section-title-sub">
                            <?php echo e(trans('portfolio.section_subtitle')); ?>

                        </span>
                    </h2>
                    <div class="portfolio__top">
                        <div class="ddl">
                            <div class="ddl-selector"> <?php echo e(trans('portfolio.selector_all')); ?> </div>
                            <div class="ddl-list">
                                <button class="active" data-type="all"><?php echo e(trans('portfolio.selector_all')); ?></button>
                                <button data-type="1"><?php echo e(trans('portfolio.selector1')); ?></button>
                                <button data-type="2"><?php echo e(trans('portfolio.selector2')); ?></button>
                                <button data-type="3"><?php echo e(trans('portfolio.selector3')); ?></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="portfolio__projectsLoop projects_redesign-loop">
                    <?php $__currentLoopData = $portfolios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($item['visible']): ?>
                            <div class="col-xs-12 col-sm-6 col-md-4">
                                <?php echo $__env->make('partials.redesign.parts.mini-portfolio', ['item' => $item], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <div class="projects__footer">
                    <span class="projects__footer__span">
                        <?php echo e(trans('portfolio.footer_text')); ?>

                    </span>
                    <button class=" js-showMore button button__green button__green-solid">
                        <?php echo e(trans('portfolio.footer_button')); ?>

                    </button>
                    <button data-togle="#footer-popup"
                        class=" projects__footer_popup button button__green button__green-solid">
                        <?php echo e(trans('portfolio.footer_contact')); ?>

                    </button>
                </div>

            </div>
        </section>
        <?php echo $__env->make('partials.redesign.results', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="black">
            <?php echo $__env->make('partials.ask', ['formClass' => 'portfolio__form'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <?php echo $__env->make('partials.our-technologies', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </main>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('bottom-scripts'); ?>
    <script src="<?php echo e(asset('js/libs.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\UNITED-SOLUTION\resources\views/front/portfolio.blade.php ENDPATH**/ ?>