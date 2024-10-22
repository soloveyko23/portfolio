<div class="propouse-item">
    <?php if(isset($title)): ?>
        <p class="propouse-item-title">
            <?php echo e($title); ?>

        </p>
    <?php endif; ?>
    <?php if(isset($descr)): ?>
        <p class="propouse-item-descr">
            <?php echo $descr; ?>

        </p>
    <?php endif; ?>
    <?php if(isset($href)): ?>
        <div class="propouse-item-footer">
            <div class="test">
                <a href="<?php echo e($href); ?>" class="btn btn-red"><?php echo e($hrefText ?? trans('index.read_more')); ?></a>
                <div class="propouse-item-footer-dots"></div>
            </div>
        </div>
    <?php endif; ?>
</div>
<?php /**PATH E:\laragon\www\UNITED-SOLUTION\resources\views/partials/redesign/parts/propouse-item.blade.php ENDPATH**/ ?>