<?php if(isset($crumbs)): ?>


    <div class="breadcrumbs">
        <ul class="breadcrumbs-list" itemscope itemtype="http://schema.org/BreadcrumbList">
            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                <a href="<?php echo e(url('/')); ?>" class="breadcrumbs-link" itemprop="item">
                    <span itemprop="name"><?php echo e(trans('website.crumbs_main')); ?></span>
                    <meta itemprop="position" content="1">
                </a>
            </li>
            <?php $__currentLoopData = $crumbs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                    <span class="breadcrumbs-current-page" itemprop="name"><?php echo e($item['text']); ?></span>
                    <meta itemprop="position" content="<?php echo e($index + 2); ?>">
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>
<?php /**PATH E:\laragon\www\UNITED-SOLUTION\resources\views/partials/redesign/parts/breadcrumbs.blade.php ENDPATH**/ ?>