<div class="section_title">
    <div class="section_title-text">
        <?php if(isset($title)): ?>
            <p class="section_title-h1">
                <?php echo $title; ?>

            </p>
        <?php endif; ?>
    </div>
    <div class="section_title-button">
        <?php if(isset($button)): ?>
            <?php echo $button; ?>

        <?php else: ?>
            <button data-togle="#footer-popup" class="btn btn-red ">
                <?php echo e(trans('index.send_request')); ?>

            </button>
        <?php endif; ?>

    </div>
</div>
<?php /**PATH E:\laragon\www\UNITED-SOLUTION\resources\views/partials/redesign/parts/section_title-button.blade.php ENDPATH**/ ?>