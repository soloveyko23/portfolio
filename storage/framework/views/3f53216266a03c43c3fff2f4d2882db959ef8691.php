<?php if(!isset($formId)): ?>
    <?php
        $formId = null;
    ?>
<?php endif; ?>
<?php if(!isset($formClass)): ?>
    <?php
        $formClass = null;
    ?>
<?php endif; ?>
<section class="contact-us">
    <div class="contact-cont">
        <div class="contact-us__map">
            <div class="contact-map">
                <div id="google-map"></div>
            </div>
        </div>
        <div class="contact-us__form">
            <div class="contact-form">
                <p class="contact-h1">
                    <?php echo e(trans('partials/contact-us.contact_title')); ?>

                </p>
                <p class="contact-sub">
                    <?php echo e(trans('partials/contact-us.contact_text')); ?>

                </p>

                <?php echo $__env->make('partials.ask-form', ['social' => true, 'formClass' => $formClass], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            </div>
        </div>
    </div>
</section>
<?php /**PATH E:\laragon\www\UNITED-SOLUTION\resources\views/partials/contact-us.blade.php ENDPATH**/ ?>