

<?php $__env->startSection('seo'); ?>
    <title><?php echo e(trans('contacts.seo_title')); ?></title>
    <meta name="description" content="<?php echo e(trans('contacts.seo_descr')); ?>">
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?php echo e(trans('contacts.seo_title')); ?>">
    <meta property="og:url" content="<?php echo e(Request::url()); ?>" />
    <meta property="og:site_name" content="<?php echo e(trans('contacts.seo_name')); ?>" />
    <meta property="og:description" content="<?php echo e(trans('contacts.seo_descr')); ?>" />
    <meta property="og:image" content="<?php echo e(Request::url()); ?>/img/logo.png">

    <link rel="canonical" href="<?php echo e(Request::url()); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/animate.css')); ?>">
    
    <link rel="stylesheet" href="<?php echo e(asset('css/contacts.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/redesign.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('bodyClass'); ?>
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <main class="main contacts">
        <div class="bread-crumbs">
            <div class="container">
                <div class="bread-crumbs__inner">
                    <ul class="bread-crumbs__list" itemscope itemtype="http://schema.org/BreadcrumbList">
                        <li class="bread-crumbs__list-item" itemprop="itemListElement" itemscope
                            itemtype="http://schema.org/ListItem">
                            <a href="<?php echo e(url('/')); ?>" class="bread-crumbs__link" itemprop="item">
                                <span itemprop="name"><?php echo e(trans('contacts.crumbs_main')); ?></span>
                                <meta itemprop="position" content="1">
                            </a>
                        </li>
                        <li class="bread-crumbs__list-item" itemprop="itemListElement" itemscope
                            itemtype="http://schema.org/ListItem">
                            <span class="bread-crumbs__current-page"
                                itemprop="name"><?php echo e(trans('contacts.crumbs_page')); ?></span>
                            <meta itemprop="position" content="2">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <?php echo $__env->make('partials.contact-us', ['formClass' => 'contactform'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </main>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('bottom-scripts'); ?>
    <script src="<?php echo e(asset('js/libs.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\UNITED-SOLUTION\resources\views/front/contacts.blade.php ENDPATH**/ ?>