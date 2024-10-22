

<?php $__env->startSection('seo'); ?>
    <link rel="canonical" href="<?php echo e(Request::url()); ?>">
    <title><?php echo e(trans('portfolio/equis.seo_title')); ?></title>
    <meta name="description" content="<?php echo e(trans('portfolio/equis.seo_descr')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/redesign.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/animate.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/portfolio/equis.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <main class="equis">
        <header class="header">
            <div class="container">
                <div class="header__inner">
                    <div class="header__description">
                        <a class="header__logo wow bounceInLeft" href="https://equis-group.com/" rel="nofollow">
                            <img src="/img/portfolio/equis/logo.png" alt="logo">
                        </a>
                        <h1 class="header__txt wow bounceInLeft">
                            <?php echo e(trans('portfolio/equis.header_title')); ?>

                        </h1>
                        <div class="header__icons">
                            <div class="header__img-area">
                                <img class="header__icon-img" src="/img/portfolio/equis/icons/laptop.png" alt="png">
                            </div>
                            <div class="header__img-area">
                                <img class="header__icon-img" src="/img/portfolio/equis/icons/phone.png" alt="png">
                            </div>
                            <div class="header__img-area">
                                <img class="header__icon-img" src="/img/portfolio/equis/icons/tablet.png" alt="png">
                            </div>
                            <a href="https://equis-group.com/" class="header__button bounceInLeft" rel="nofollow">
                                <?php echo e(trans('portfolio/equis.header_button')); ?>

                            </a>
                        </div>
                    </div>
                </div>
                <div class="header__img wow zoomIn">
                    <img src="/img/portfolio/equis/phone-tablet.png" alt="png">
                </div>
        </header>
        <div class="main">
            <section class="main-page">
                <div class="main__container">
                    <h2 class="title title__reverse title__secondary">
                        Main Page
                    </h2>
                    <div class="main-page__inner wow flipInY">
                        <h2 class="main-page__title title title__primary">
                            Main page
                        </h2>
                        <span class="main-page__title title title__secondary margin_mr-140 wow zoomIn">
                            Design
                        </span>
                        <div class="wow bounceInUp">
                            <img src="/img/portfolio/equis/home-page.jpg" class="main-page__inner-img" alt="img">
                            <div>
                            </div>
                        </div>
            </section>
            <section class="color">
                <div class="main__container">
                    <h2 class="title color__title title__primary">
                        Color
                        <span class="title title__secondary title__bg">
                            Color
                        </span>
                    </h2>
                    <div class="color__spheres">
                        <div class="color__spheres-item wow zoomInLeft">
                            <div class="color__sphere-outer color__sphere-outer_brd-color-ok">
                                <div class="color__sphere-inner color__sphere-inner_bgc-color-ok">
                                    <img class="color__icon-img" src="/img/portfolio/equis/icons/sprout-1.png"
                                        alt="png">
                                </div>
                            </div>
                            <span class="color__sphere-txt">
                                #00A200
                            </span>
                        </div>
                        <div class="color__spheres-item wow zoomInLeft">
                            <div class="color__sphere-outer color__sphere-outer_brd-color-warning">
                                <div class="color__sphere-inner color__sphere-inner_bgc-color-warning">
                                    <img class="color__icon-img" src="/img/portfolio/equis/icons/wheat-1.png"
                                        alt="png">
                                </div>
                            </div>
                            <span class="color__sphere-txt">
                                #F6A947
                            </span>
                        </div>
                        <div class="color__spheres-item wow zoomInLeft" data-wow-delay="1.4s" duration="1s">
                            <div class="color__sphere-outer color__sphere-outer_brd-color-success">
                                <div class="color__sphere-inner color__sphere-inner_bgc-color-success">
                                    <img class="color__icon-img" src="/img/portfolio/equis/icons/peas_g-1.png"
                                        alt="png">
                                </div>
                            </div>
                            <span class="color__sphere-txt">
                                #BAE6BA
                            </span>
                        </div>
                        <div class="color__sphres-item wow zoomInLeft" data-wow-delay="1.6s" duration="1s">
                            <div class="color__sphere-outer color__sphere-outer_brd-color-gray">
                                <div class="color__sphere-inner color__sphere-inner_bgc-color-gray">
                                    <img class="color__icon-img" src="/img/portfolio/equis/icons/cow.png" alt="png">
                                </div>
                            </div>
                            <span class="color__sphere-txt">
                                #A4A4A4
                            </span>
                        </div>
                    </div>
                </div>
                <img class="color__img" src="/img/portfolio/equis/Polygon-cut.png" alt=".png">
            </section>
            <section class="services">
                <div class="main__container">
                    <h2 class="title title__primary services__title wow flipInY">
                        Services Page
                    </h2>
                </div>
                <div class="services__bg">
                    <div class="main__container">
                        <div class="services__laptop-iphone">
                            <div class="wow zoomIn">
                                <img class="services__img" src="/img/portfolio/equis/laptop.png" alt="png">
                            </div>
                            <div class="wow zoomIn" data-wow-delay=".3s" duration="1s">
                                <img class="services__img" src="/img/portfolio/equis/iphone.png" alt="png">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main__container wow bounceInDown">
                    <h2 class="title title__reverse services__title-reverse title__secondary">
                        services page
                    </h2>
                    <img class="services__img-page" src="/img/portfolio/equis/Services.jpg" alt="png">
                </div>
            </section>
            <section class="typography">
                <div class="main__container">
                    <h2 class="title title__primary typography__title wow flipInY">
                        typography
                        <span class="title title__secondary title__bg">
                            typography
                        </span>
                    </h2>
                    <div class="typography__title margin_mt-75">
                        <span class="title typography__subtitle-concepto wow bounceInLeft">
                            a_Concepto
                        </span>
                        <span class="title typography__txt-concepto-big wow bounceInRight">
                            а б в г д е ё ж з и й к л м н о п р с т у ф х ц ч ш щ ъ ы ь э ю я
                        </span>
                        <span class="title typography__txt-concepto-small wow bounceInRight">
                            а б в г д е ё ж з и й к л м н о п р с т у ф х ц ч ш щ ъ ы ь э ю я
                        </span>
                    </div>
                    <div class="typography__title margin_mt-75">
                        <span class="title typography__subtitle-plex wow bounceInRight">
                            IBM Plex Sans
                        </span>
                        <span class="title typography__txt-plex-big wow bounceInDown">
                            а б в г д е ё ж з и й к л м н о п р с т у ф х ц ч ш щ ъ ы ь э ю я
                        </span>
                        <span class="title typography__txt-plex-small wow bounceInUp">
                            а б в г д е ё ж з и й к л м н о п р с т у ф х ц ч ш щ ъ ы ь э ю я
                        </span>
                    </div>
                </div>
                <img class="typography__img" src="/img/portfolio/equis/Polygon-cut.png" alt=".png">
                <img class="typography__bg-img" src="/img/portfolio/equis/typography-bgi-2.jpg" alt=".png">
            </section>
            <section class="other-pages">
                <div class="main__container">
                    <div class="other-pages__inner">
                        <div class="wow zoomIn">
                            <img src="/img/portfolio/equis/other-pages-grains.jpg" class="other-pages__img-page"
                                alt="png">
                        </div>
                        <h2 class="title title__secondary other-pages__title-reverse">
                            Other pages
                        </h2>
                        <div class="wow zoomIn">
                            <img class="other-pages__img-page-2" src="/img/portfolio/equis/container-information-2.jpg"
                                alt="png">
                        </div>
                    </div>
                </div>
                <h2 class="other-pages__titles wow zoomInUp">
                    <span class="other-pages__titles_orange">Thanks</span> for watching
                </h2>
            </section>
        </div>
    </main>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('bottom-scripts'); ?>
    <script src="<?php echo e(asset('js/libs.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.portfolio-item', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\UNITED-SOLUTION\resources\views/front/portfolio/equis.blade.php ENDPATH**/ ?>