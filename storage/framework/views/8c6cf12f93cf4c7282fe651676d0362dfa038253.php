

<?php $__env->startSection('seo'); ?>
    <link rel="canonical" href="<?php echo e(Request::url()); ?>">
    <title> <?php echo e(trans('portfolio/homewood.seo_title')); ?></title>
    <meta name="description" content="<?php echo e(trans('portfolio/homewood.seo_descr')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/redesign.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/animate.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/portfolio/homewood.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <main class="home-wood">
        <!--set meta data-->

        <!--end set meta data-->
        <header class="header">
            <div class="header__container">
                <div class="header__inner">
                    <div class="header__description">
                        <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow fadeInDown header__logo">
                            <img src="/img/portfolio/homewood/logo.png" alt="логотип.png">
                        </div>
                        <div data-wow-delay="0.5s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow fadeInUp header__txt" el="h1">
                            <?php echo e(trans('portfolio/homewood.header_title')); ?>

                        </div>
                        <div data-wow-delay="0.5s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow fadeInDown header__icons">
                            <div class="header__img-area">
                                <img class="header__icon-img" src="/img/portfolio/our-projects/icons/laptop.png"
                                    alt="png">
                            </div>
                            <div class="header__img-area">
                                <img class="header__icon-img" src="/img/portfolio/our-projects/icons/phone.png"
                                    alt="png">
                            </div>
                            <div class="header__img-area">
                                <img class="header__icon-img" src="/img/portfolio/our-projects/icons/tablet.png"
                                    alt="png">
                            </div>
                        </div>
                        <a target="_blank" href="http://homewoodspa.com.ua/" rel="nofollow" data-wow-delay="0s"
                            data-wow-duration="2s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow fadeInUp header__button">
                            <?php echo e(trans('portfolio/homewood.header_button')); ?>

                        </a>
                    </div>
                </div>
            </div>
            <div data-wow-delay="0s" data-wow-duration="2s" data-wow-iteration="1" data-wow-offset="0"
                class="wow fadeInRight header__phone-laptop">
                <img class="header__img-phone" src="/img/portfolio/homewood/mobile-home.png" alt="png">
                <img class="header__img-laptop" src="/img/portfolio/homewood/laptop.png" alt="png">
            </div>
        </header>
        <section class="home">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 title">
                        <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow fadeInLeft">
                            <span class="title__top">
                                <p>01.</p>
                                <?php echo e(trans('portfolio/homewood.main_page1')); ?>

                            </span>
                        </div>
                        <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow fadeInRight">
                            <span class="title__bottom"> <?php echo e(trans('portfolio/homewood.main_page2')); ?></span>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div data-wow-delay="0.2s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow fadeIn home__image">
                            <div class="page-title-bg page-title-bg-top">Main page</div>
                            <img src="/img/portfolio/homewood/home-image.png" alt="" />
                            <div class="home__image-rowbg-bottom"></div>
                            <div class="page-title-bg page-title-bg-bottom">Design</div>
                            <div class="page-title-bg page-title-bg-bottom-right">
                                Ux/Ui
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="colsystem">
            <div class="container">
                <div class="row">
                    <div class="page-title-bg page-title-bg-top">Grid system</div>
                    <div class="colsystem__bg"></div>
                    <div class="col-lg-12 title">
                        <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow fadeInLeft">
                            <span class="title__top">
                                <p>02.</p>
                                <?php echo e(trans('portfolio/homewood.grid1')); ?>

                            </span>
                        </div>
                        <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow fadeInRight">
                            <span class="title__bottom"> <?php echo e(trans('portfolio/homewood.grid2')); ?></span>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow fadeIn colsystem__sub-title">
                            <span> <?php echo e(trans('portfolio/homewood.grid3')); ?> </span>
                        </div>
                        <div class="colsystem__image">
                            <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                                class="wow fadeIn">
                                <img src="/img/portfolio/homewood/greed-image.png" alt="" />
                            </div>
                        </div>
                        <div class="colsystem__image">
                            <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                                class="wow fadeIn colsystem__sub-bottom-title">
                                <span> <?php echo e(trans('portfolio/homewood.grid4')); ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="color">
            <div class="container z-index">
                <div class="row">
                    <div class="col-lg-12 title">
                        <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow fadeIn">
                            <span class="title__top">
                                <p>03.</p>
                                <?php echo e(trans('portfolio/homewood.colors')); ?>

                            </span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="page-title-bg page-title-bg-top">Color</div>
                    <div class="col-sm-6 col-md-6 col-lg-6">
                        <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow fadeInRightBig color__circle">
                            <span class="color__circle-border gold-brd">
                                <div class="color__circle-inner gold"></div>
                            </span>
                            <span class="color__circle-hash">#fabf50</span>
                        </div>
                        <div data-wow-delay="0.4s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow fadeIn color__fonts">
                            <span class="gold">Gilroy</span>
                            <p class="font-gil">
                                а б в г д е ё ж з и й к л м н о п р с т у ф х ц ч ш щ ъ ы ь э
                                ю я
                            </p>
                        </div>
                    </div>
                    <div class="page-title-bg page-title-bg-bottom-left">
                        Typography
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6">
                        <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow fadeInLeftBig color__circle">
                            <span class="color__circle-border green-brd">
                                <div class="color__circle-inner green"></div>
                            </span>
                            <span class="color__circle-hash">#8ac65d</span>
                        </div>
                        <div data-wow-delay="0.4s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow fadeIn color__fonts">
                            <span class="green">IBM Plex Sans</span>
                            <p class="font-ibm">
                                а б в г д е ё ж з и й к л м н о п р с т у ф х ц ч ш щ ъ ы ь э
                                ю я
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="color__img">
                        <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow fadeInDown color__img-phone">
                            <img src="/img/portfolio/homewood/color-image-phone.png" alt="" />
                        </div>
                        <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow fadeInRight color__img-desc">
                            <img src="/img/portfolio/homewood/color-image-desc.png" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="lastpage">
            <div class="lastpage__bg-circle">
                <span class="lastpage__bg-circle-inner"></span>
            </div>
            <div class="container pos-relat">
                <div class="row">
                    <div class="col-lg-12 title">
                        <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow fadeInLeft">
                            <span class="title__top">
                                <p>04.</p>
                                <?php echo e(trans('portfolio/homewood.others1')); ?>

                            </span>
                        </div>
                        <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow fadeInRight">
                            <span class="title__bottom"><?php echo e(trans('portfolio/homewood.others2')); ?></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="page-title-bg page-title-bg-top">Other pages</div>
                    <div class="col-sm-6 col-md-6 col-lg-6">
                        <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow fadeInDown lastpage__iamge">
                            <img class="color__img-desc" src="/img/portfolio/homewood/lastpage-img-right-top.jpg"
                                alt="" />
                        </div>
                        <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow fadeInUp lastpage__iamge">
                            <img class="color__img-desc" src="/img/portfolio/homewood/lastpage-img-right-bottom.png"
                                alt="" />
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6 lastpage-pos-rel">
                        <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow fadeInDown lastpage__iamge">
                            <img src="/img/portfolio/homewood/lastpage-img-left-top.png" alt="" />
                        </div>
                        <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                            class="wow fadeInDown lastpage__iamge">
                            <img src="/img/portfolio/homewood/lastpage-img-left-bottom.png" alt="" />
                        </div>
                    </div>
                </div>
                <div class="lastpage__image-rowbg-bottom"></div>
            </div>
        </section>
        <section class="thankyou">
            <div class="row">
                <div class="col-lg-12">
                    <div data-wow-delay="0s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                        class="wow fadeIn lastpage__iamge">
                        <span class="thankyou__title"><?php echo e(trans('portfolio/homewood.footer1')); ?></span>
                    </div>
                    <div data-wow-delay="0.4s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                        class="wow fadeIn lastpage__iamge">
                        <span class="thankyou__sub"><?php echo e(trans('portfolio/homewood.footer2')); ?></span>
                    </div>
                    <div data-wow-delay="0.6s" data-wow-duration="1s" data-wow-iteration="1" data-wow-offset="0"
                        class="wow fadeIn lastpage__iamge">
                        <img src="/img/portfolio/homewood/thankyou-icon.png" alt="" />
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="btn-prew-site">
                        <a rel="nofollow" href="http://homewoodspa.com.ua/"
                            class="prewSite"><?php echo e(trans('portfolio/homewood.footer3')); ?></a>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('bottom-scripts'); ?>
    <script src="<?php echo e(asset('js/libs.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.portfolio-item', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\UNITED-SOLUTION\resources\views/front/portfolio/homewood.blade.php ENDPATH**/ ?>