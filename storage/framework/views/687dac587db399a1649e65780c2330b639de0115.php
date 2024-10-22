<section class="contact_us">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-6 col-lg-5 ">
                <div class="contact_us-title">
                    <?php echo e(trans('index.contact_us')); ?>

                </div>
                <form action="" class="contact_us-form">
                    <?php echo csrf_field(); ?>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-12 col-lg-6">
                            <input type="text" name="user_name" placeholder="<?php echo e(trans('partials/ask-form.name')); ?>">
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-12 col-lg-6">
                            <input required type="text" name="user_phone" placeholder="phone">
                        </div>
                        <div class="col-xs-12">
                            <input type="text" name="user_email" placeholder="E-mail">
                        </div>
                        <div class="col-xs-12">
                            <input type="text" name="user_message"
                                placeholder="<?php echo e(trans('partials/ask-form.text')); ?>">
                        </div>
                        <div class="col-xs-12">
                            <div class="row">
                                <div class="col-xs-12 col-md-6">
                                    <button class="btn btn-red js-submit">
                                        <?php echo e(trans('index.send_button')); ?>

                                    </button>
                                </div>
                                <div class="col-xs-12 col-md-6" style="min-width: 300px">
                                    <div class="recaptcha" style="margin: 20px 20px 20px 0">
                                        <div class="g-recaptcha" data-callback="recaptchaCallback"></div>
                                        <div class="text-danger recaptchaError"></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </form>
                <div class="contact_us-brief">
                    <p><?php echo e(trans('partials/footer.fill_out_brief')); ?></p>
                    <ul>
                        <li>
                            <a href="<?php echo e(getLocaleUrl('brief')); ?>"><?php echo e(trans('partials/footer.site')); ?></a>
                        </li>
                        <li>
                            <a href="<?php echo e(getLocaleUrl('brief-seo')); ?>">SEO</a>
                        </li>
                        <li>
                            <a href="<?php echo e(getLocaleUrl('brief-style')); ?>" class="small"><?php echo e(trans('partials/footer.firm_style')); ?>

                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-12 col-md-6 col-lg-offset-1">
                <div class="contact_us-text_container">
                    <?php echo trans('index.about_company'); ?>


                    
                    
                    

                </div>
            </div>
        </div>
    </div>

</section>
<?php /**PATH E:\laragon\www\UNITED-SOLUTION\resources\views/partials/redesign/contact-us.blade.php ENDPATH**/ ?>