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
<form id="<?php echo e($formId); ?>" class="form <?php echo e($formClass); ?>">
    <?php echo csrf_field(); ?>
    <div class="form__form">
        <div class="form__row">
            <div class="form__cell form__cell-half">
                <input required type="text" name="user_name" placeholder="*<?php echo e(trans('contacts.your_name')); ?>">
            </div>
            <div class="form__cell form__cell-half">
                <input required type="text" name="user_phone" placeholder="phone">
            </div>
        </div>
        <div class="form__row">
            <div class="form__cell">
                <input type="email" name="user_email" placeholder="E-mail">
            </div>
        </div>
        <div class="form__row">
            <div class="form__cell">
                <input name="user_message" type="text" placeholder="<?php echo e(trans('partials/ask-form.text')); ?>">
            </div>
        </div>
        <div class="form__row">
            <div class="form__cell form__footer form__footer_with-captcha">
                <div class="recaptcha">
                    <div class="g-recaptcha" data-callback="recaptchaCallback"></div>
                    <div class="text-danger recaptchaError"></div>
                </div>
                <?php
                    if (!isset($btnclass)) {
                        $btnclass = 'button__green button__green-solid';
                    }
                ?>
                <button class="button <?php echo e($btnclass); ?> " data-form="<?php echo e($formId); ?>">
                    <?php if(isset($btntext)): ?>
                        <?php echo e($btntext); ?>

                    <?php else: ?>
                        <?php echo e(trans('website.popup_button')); ?>

                    <?php endif; ?>
                </button>
            </div>
        </div>
        <div class="form__row">
            <?php if(isset($social)): ?>
                <?php if($social): ?>
                    <div class="form__cell form__footer">
                        <?php echo $__env->make('partials.social', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                <?php endif; ?>
            <?php endif; ?>
        </div>



    </div>
    <div class="form_success">
        <div class="form__icon"></div>

        <div class="form__message">
            <div class="form__title">
                Вопрос отправлен!
            </div>
            <div class="form__text">
                Наши менеджеры обработают вашу заявку
                и свяжутся с вами в ближайшее время
            </div>
        </div>
    </div>
</form>



<!-- js-скрипт гугл капчи -->

<?php /**PATH E:\laragon\www\UNITED-SOLUTION\resources\views/partials/ask-form.blade.php ENDPATH**/ ?>