<section class="banner-redesign index-banner">
    <div class="container js-padding-header">
        <div class="row">
            <div class="col-12 top">
                <?php if(isset($crumbs)): ?>
                    <?php echo $__env->make('partials.redesign.parts.breadcrumbs', $crumbs, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php endif; ?>
            </div>
            <div class="col-12 center">
                <?php if(isset($title)): ?>
                    <?php echo $title; ?>

                <?php else: ?>
                    <h1>
                        <?php echo trans('index.banner_title'); ?>

                    </h1>
                <?php endif; ?>
                <?php if(isset($subtext)): ?>
                    <?php echo $subtext; ?>

                <?php else: ?>
                    <p style="text-transform: uppercase;"><?php echo trans('index.banner_text'); ?></p>
                <?php endif; ?>
                <?php if(isset($type)): ?>
                    <?php if($type == 'webDev'): ?>
                        <div class="banner-redesign-footer">
                            <button data-togle="#footer-popup" class="btn btn-red">
                                <?php echo e(trans('index.check_button')); ?>

                            </button>
                            <button data-togle="#footer-popup" class="btn btn-transp">
                                <?php echo e(trans('index.projects_button')); ?>

                            </button>
                        </div>
                    <?php endif; ?>
                    <?php if($type == 'ecommerce'): ?>
                        <div class="banner-redesign-footer">
                            <button data-togle="#footer-popup" class="btn btn-red">
                                <?php echo trans('index.review_button'); ?>

                            </button>
                            <button data-togle="#footer-popup" class="btn btn-transp">
                                <?php echo e(trans('index.projects_button')); ?>

                            </button>
                        </div>
                    <?php endif; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<?php /**PATH E:\laragon\www\UNITED-SOLUTION\resources\views/partials/redesign/index-banner.blade.php ENDPATH**/ ?>