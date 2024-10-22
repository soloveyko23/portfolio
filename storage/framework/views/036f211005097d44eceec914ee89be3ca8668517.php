

<?php $__env->startSection('seo'); ?>
    <title><?php echo e(trans('smm.seo_title')); ?></title>
    <meta name="description" content="<?php echo e(trans('smm.seo_descr')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/animate.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/magnific-popup.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/smm.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/redesign.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <main class="main smm">
        <section class="banner full-height">
            <div class="container">
                <div class="banner__wrapper">
                    <div class="banner__top">
                        <div class="bread-crumbs">
                            <div class="bread-crumbs__inner">
                                <ul class="bread-crumbs__list" itemscope itemtype="http://schema.org/BreadcrumbList">
                                    <li class="bread-crumbs__list-item" itemprop="itemListElement" itemscope
                                        itemtype="http://schema.org/ListItem">
                                        <a href="<?php echo e(url('/')); ?>" class="bread-crumbs__link" itemprop="item">
                                            <span itemprop="name"><?php echo e(trans('smm.crumbs_main')); ?></span>
                                            <meta itemprop="position" content="1">
                                        </a>
                                    </li>
                                    <li class="bread-crumbs__list-item" itemprop="itemListElement" itemscope
                                        itemtype="http://schema.org/ListItem">
                                        <span class="bread-crumbs__current-page"
                                            itemprop="name"><?php echo e(trans('smm.crumbs_page')); ?></span>
                                        <meta itemprop="position" content="2">
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="banner__cont">
                        <div class="row d-flex">
                            <div class="col-xs-12 col-sm-6 d-flex">
                                <div class="banner__text">
                                    <h1 class="banner__h1 wow fadeInDown" data-wow-delay="0" data-wow-duration="1s">
                                        <?php echo e(trans('smm.banner_title')); ?>

                                    </h1>
                                    <p class="banner__p wow fadeInDown" data-wow-delay="1s" data-wow-duration="1s">
                                        <?php echo e(trans('smm.banner_subtitle')); ?>

                                    </p>
                                    <button data-togle="#agency-popup"
                                        class="button button__green button__green-solid wow fadeInLeft" data-wow-delay="1s"
                                        data-wow-duration="1s">
                                        <?php echo e(trans('smm.banner_button')); ?>

                                    </button>
                                    <ul class="banner__list">
                                        <li class="wow fadeInLeft" data-wow-delay="0" data-wow-duration="1s">
                                            <p><?php echo e(trans('smm.banner_item1')); ?></p>
                                            <svg width="58" height="44" viewBox="0 0 58 44" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M3.67031 0C3.24312 0 2.9 0.451785 2.9 1.01215V39.1111H1.00065C0.446651 39.1111 0 39.5328 0 40.0564V40.1214C0 40.645 0.446651 41.0667 1.00065 41.0667H2.9V42.9878C2.9 43.5482 3.24312 44 3.67031 44H4.06302C4.49021 44 4.83333 43.5482 4.83333 42.9878V41.0667H56.9993C57.5533 41.0667 58 40.645 58 40.1214V40.0564C58 39.5328 57.5533 39.1111 56.9993 39.1111H56.0667H4.83333V1.01215C4.83333 0.451785 4.49021 0 4.06302 0H3.67031ZM12.5667 10.7556L10.4955 17.7394L13.5673 21.8816L16.7486 17.9476L12.5667 10.7556ZM22.2333 12.7111L13.5333 23.4667L7.73333 15.6444L5.8 20.5333V33.5691V38.1333H55.1H56.0667V26.4L48.3333 15.6444L41.5667 25.4222L34.8 18.5778L29 23.4667L22.2333 12.7111ZM41.5667 15.6444L37.6924 20.1227L41.4364 23.9078L44.546 19.4123L41.5667 15.6444ZM29 17.6L27.6671 19.5269L29.2247 22.0038L31.4771 20.1056L29 17.6Z"
                                                    fill="white" />
                                            </svg>

                                        </li>
                                        <li class="wow fadeInLeft" data-wow-delay="0.5s" data-wow-duration="1s">
                                            <p><?php echo e(trans('smm.banner_item2')); ?></p>
                                            <svg width="44" height="44" viewBox="0 0 44 44" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M21.7558 18.1807C21.0218 18.2282 20.3171 18.4863 19.7261 18.924C19.1351 19.3618 18.6828 19.9607 18.4235 20.6489C18.1641 21.3372 18.1087 22.0856 18.2638 22.8045C18.4189 23.5235 18.778 24.1825 19.2981 24.7025C19.8182 25.2226 20.4771 25.5817 21.1961 25.7368C21.915 25.892 22.6635 25.8365 23.3517 25.5772C24.0399 25.3178 24.6388 24.8655 25.0766 24.2745C25.5144 23.6835 25.7725 22.9788 25.82 22.2448L24.0317 24.0331C23.4879 24.5398 22.7686 24.8157 22.0254 24.8026C21.2821 24.7895 20.573 24.4884 20.0474 23.9628C19.5218 23.4372 19.2207 22.728 19.2076 21.9848C19.1945 21.2416 19.4704 20.5223 19.9771 19.9785L21.7558 18.1807Z"
                                                    fill="white" />
                                                <path
                                                    d="M23.4768 16.4685L28.5164 11.4289C25.9229 9.8293 22.8322 9.23788 19.8314 9.76704C16.8305 10.2962 14.1286 11.9091 12.2386 14.2993C10.3487 16.6895 9.40246 19.6906 9.57964 22.7326C9.75682 25.7746 11.0451 28.6456 13.1997 30.8002C15.3544 32.9549 18.2254 34.2431 21.2673 34.4203C24.3093 34.5975 27.3104 33.6513 29.7007 31.7613C32.0909 29.8714 33.7038 27.1694 34.2329 24.1686C34.7621 21.1677 34.1707 18.0771 32.571 15.4836L27.5314 20.5231C27.8588 21.7432 27.7744 23.0372 27.2913 24.2044C26.8082 25.3716 25.9534 26.3468 24.8595 26.9786C23.7657 27.6104 22.4938 27.8636 21.2414 27.6988C19.989 27.534 18.8259 26.9605 17.9327 26.0673C17.0394 25.174 16.4659 24.011 16.3012 22.7586C16.1364 21.5061 16.3896 20.2343 17.0214 19.1404C17.6532 18.0465 18.6283 17.1918 19.7955 16.7087C20.9627 16.2255 22.2567 16.1411 23.4768 16.4685Z"
                                                    fill="white" />
                                                <path
                                                    d="M33.4697 13.3991C35.6467 16.3018 36.6428 19.9215 36.2574 23.5293C35.872 27.1371 34.1337 30.4647 31.3927 32.842C28.6517 35.2192 25.1116 36.4694 21.4856 36.3408C17.8596 36.2121 14.4171 34.7141 11.8515 32.1485C9.28593 29.5829 7.78792 26.1404 7.65924 22.5144C7.53055 18.8884 8.78076 15.3483 11.158 12.6073C13.5353 9.86632 16.8629 8.12804 20.4707 7.74264C24.0785 7.35724 27.6982 8.35334 30.6009 10.5303C30.6009 4.1137 30.1036 5.46205 32.7429 2.82273C18.3127 -5.30563 0 5.05085 0 22.0056C0 27.8389 2.31726 33.4333 6.442 37.558C10.5667 41.6827 16.1611 44 21.9944 44C38.9396 44 49.3056 25.6969 41.1773 11.2571C38.5666 13.8677 39.8767 13.3991 33.4697 13.3991Z"
                                                    fill="white" />
                                                <path
                                                    d="M32.5131 5.74889V10.1382L21.3151 21.3266C21.1802 21.4604 21.0883 21.6313 21.0509 21.8175C21.0135 22.0037 21.0325 22.1969 21.1053 22.3723C21.1782 22.5477 21.3016 22.6975 21.4599 22.8025C21.6182 22.9075 21.8041 22.963 21.9941 22.9619C22.5583 22.9619 21.6689 23.6791 33.8615 11.4866H38.2508L43.9884 5.74889H39.5991L41.7986 3.55902C41.9786 3.37895 42.0798 3.13472 42.0798 2.88006C42.0798 2.6254 41.9786 2.38117 41.7986 2.2011C41.6185 2.02103 41.3743 1.91987 41.1196 1.91987C40.8649 1.91987 40.6207 2.02103 40.4406 2.2011L38.2508 4.40054V0.0112305L32.5131 5.74889Z"
                                                    fill="white" />
                                            </svg>
                                        </li>
                                        <li class="wow fadeInLeft" data-wow-delay="1s" data-wow-duration="1s">
                                            <p><?php echo e(trans('smm.banner_item3')); ?></p>
                                            <svg width="44" height="44" viewBox="0 0 44 44" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M41.6328 31.895C43.14 28.9175 44 25.5592 44 22C44 9.86909 34.1309 0 22 0C9.86909 0 0 9.86909 0 22C0 34.1309 9.86909 44 22 44C26.2223 44 30.1657 42.7973 33.5189 40.7265C34.6012 41.7779 36.0747 42.4288 37.6993 42.4288C41.0113 42.4288 43.7054 39.7346 43.7054 36.4232C43.7054 34.6161 42.8997 32.997 41.6328 31.895ZM1.22222 22C1.22222 10.5432 10.5432 1.22222 22 1.22222C33.4571 1.22222 42.7778 10.5432 42.7778 22C42.7778 25.2965 41.9947 28.4094 40.6222 31.1809C40.2879 30.9937 39.9341 30.8384 39.5645 30.7173C40.8716 28.0898 41.6168 25.1338 41.6168 22C41.6168 11.1659 32.8341 2.38318 22 2.38318C11.1659 2.38318 2.38318 11.1659 2.38318 22C2.38318 32.8341 11.1659 41.6168 22 41.6168C25.726 41.6168 29.2003 40.5647 32.1669 38.7605C32.3195 39.1201 32.5061 39.4618 32.7227 39.7817C29.5897 41.6787 25.9224 42.7778 22 42.7778C10.5432 42.7778 1.22222 33.4571 1.22222 22ZM29.5416 28.5878C29.3891 28.6982 29.177 28.6982 29.0245 28.5879C16.1326 19.2605 24.3068 11.2947 29.2776 17.5632H29.2885C34.2593 11.2947 42.4335 19.26 29.5416 28.5878ZM18.7796 23.2345C19.3549 23.2345 19.8228 23.7023 19.8228 24.2776C19.8228 24.8529 19.3549 25.3208 18.7796 25.3208L16.7655 25.3196L16.0914 27.8916C15.9717 28.3502 15.5569 28.6706 15.0829 28.6706C14.994 28.6706 14.9051 28.6588 14.8187 28.6366C14.5483 28.5657 14.3224 28.394 14.1817 28.1533C14.0422 27.9132 14.0039 27.6324 14.0743 27.3633L14.61 25.3196H12.2102L11.5362 27.8916C11.3942 28.436 10.8091 28.7761 10.2634 28.6366C9.99307 28.5657 9.76715 28.394 9.62643 28.1533C9.48693 27.9132 9.44865 27.6324 9.51901 27.3633L10.0548 25.3196L8.58933 25.3208C8.01406 25.3208 7.54621 24.8529 7.54621 24.2776C7.54621 23.7023 8.01406 23.2345 8.58933 23.2345L10.6004 23.2333L11.2473 20.7643L9.78187 20.7655C9.20659 20.7655 8.73871 20.2976 8.73871 19.7224C8.73871 19.1471 9.20659 18.6792 9.78187 18.6792L11.793 18.678L12.4657 16.1091C12.6114 15.5529 13.1879 15.2208 13.7385 15.364C14.0089 15.435 14.2348 15.6066 14.3755 15.8474C14.515 16.0875 14.5532 16.3683 14.4829 16.6374L13.9484 18.678H16.3494L17.0222 16.1091C17.1667 15.5542 17.7333 15.2165 18.295 15.364C18.5653 15.435 18.7912 15.6066 18.932 15.8474C19.0715 16.0875 19.1098 16.3683 19.0394 16.6374L18.5049 18.678L19.9721 18.6792C20.5474 18.6792 21.0153 19.1471 21.0153 19.7224C21.0153 20.2976 20.5474 20.7655 19.9721 20.7655L17.9592 20.7643L17.3123 23.2333L18.7796 23.2345ZM37.6993 41.451C34.9269 41.451 32.6711 39.1956 32.6711 36.4232C32.6711 33.6507 34.9269 31.3949 37.6993 31.3949C40.4718 31.3949 42.7276 33.6507 42.7276 36.4232C42.7276 39.1956 40.4718 41.451 37.6993 41.451Z"
                                                    fill="white" />
                                                <path d="M12.7568 23.2336H15.1554L15.8023 20.7646H13.4025L12.7568 23.2336Z"
                                                    fill="white" />
                                                <path
                                                    d="M40.567 35.9343H38.188V33.5553C38.188 33.2851 37.9693 33.0664 37.6991 33.0664C37.4289 33.0664 37.2102 33.2851 37.2102 33.5553V35.9343H34.8317C34.5614 35.9343 34.3428 36.153 34.3428 36.4232C34.3428 36.6934 34.5614 36.9121 34.8317 36.9121H37.2102V39.2907C37.2102 39.5609 37.4289 39.7796 37.6991 39.7796C37.9693 39.7796 38.188 39.5609 38.188 39.2907V36.9121H40.567C40.8373 36.9121 41.0559 36.6934 41.0559 36.4232C41.0559 36.153 40.8373 35.9343 40.567 35.9343Z"
                                                    fill="white" />
                                            </svg>
                                        </li>
                                        <li class="wow fadeInLeft" data-wow-delay="1.5s" data-wow-duration="1s">
                                            <p><?php echo e(trans('smm.banner_item4')); ?></p>
                                            <svg width="47" height="44" viewBox="0 0 47 44" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M31.5348 20.7109H15.9059C15.2582 20.7109 14.7334 21.2378 14.7334 21.8882V44.0003H32.7072V21.8882C32.7072 21.2386 32.1817 20.7109 31.5348 20.7109Z"
                                                    fill="white" />
                                                <path
                                                    d="M31.962 6.32508L27.0836 5.55137L24.952 0.74936C24.747 0.311024 24.2335 -0.024352 23.72 0.00138795C23.3091 0.00138795 22.9238 0.208064 22.6418 0.72362L20.4077 5.44841L15.5293 6.09266C14.4767 6.2471 14.0145 7.53637 14.7851 8.28434L18.2769 11.7903L17.3781 16.6627C17.1723 17.7195 18.2769 18.5447 19.2269 18.0549L23.6175 15.8118L23.72 15.8632L27.9567 18.1579C28.8811 18.6734 30.0106 17.8997 29.8312 16.8429L29.0606 11.9447L32.6293 8.516C33.4255 7.79453 33.0146 6.47952 31.962 6.32508Z"
                                                    fill="white" />
                                                <path
                                                    d="M11.1378 18.9117L8.04338 18.4218L6.69146 15.3762C6.56102 15.0984 6.23529 14.8856 5.90956 14.9023C5.64943 14.9023 5.40514 15.0333 5.22568 15.3603L3.80892 18.3567L0.715257 18.7655C0.0479675 18.864 -0.245338 19.6808 0.243253 20.1555L2.45851 22.3782L1.88848 25.4685C1.75804 26.1385 2.45851 26.6616 3.06095 26.3512L5.84547 24.9287L5.91032 24.9613L8.59682 26.4164C9.18268 26.7434 9.89973 26.2528 9.78512 25.5828L9.29653 22.4766L11.56 20.3024C12.066 19.8436 11.8051 19.0101 11.1378 18.9117Z"
                                                    fill="white" />
                                                <path
                                                    d="M45.9444 22.8796L43.2835 22.4579L42.1208 19.8385C42.0092 19.5992 41.7288 19.4168 41.449 19.4304C41.2251 19.4304 41.0147 19.5432 40.8609 19.8241L39.6424 22.4011L36.9816 22.7524C36.4078 22.8372 36.1552 23.5397 36.5752 23.9478L38.4798 25.8601L37.9897 28.5174C37.8773 29.0935 38.4798 29.5439 38.9978 29.2767L41.3925 28.0533L41.4483 28.0813L43.7593 29.3327C44.2637 29.6136 44.8797 29.1919 44.7817 28.6158L44.3617 25.9441L46.3085 24.0742C46.7421 23.6813 46.5182 22.9636 45.9444 22.8796Z"
                                                    fill="white" />
                                                <path
                                                    d="M10.3644 28.4453H1.61192C0.964237 28.4453 0.439453 28.9722 0.439453 29.6225V43.9998H11.5376V29.6225C11.5376 28.9722 11.012 28.4453 10.3644 28.4453Z"
                                                    fill="white" />
                                                <path
                                                    d="M45.828 31.0234H37.0748C36.4271 31.0234 35.9023 31.5503 35.9023 32.2007V44.0001H47.0005V32.2007C47.0005 31.5503 46.4749 31.0234 45.828 31.0234Z"
                                                    fill="white" />
                                            </svg>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-5 col-smmScene">
                                <div class="smmScene">
                                    <div class="wow fadeIn smmScene-before" data-wow-duration="1s"></div>
                                    <div class="wow fadeIn smmScene-after" data-wow-delay="0.5s" data-wow-duration="1s">
                                    </div>
                                    <img src="/img/smm-phones.png" class=" wow fadeInRight smmScene-phones"
                                        data-wow-delay="1s" data-wow-duration="1s" alt="phones">
                                    <img src="/img/smm-oval.png" class="wow fadeIn smmScene-oval" data-wow-delay="2s"
                                        data-wow-duration="1s" alt="oval">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php echo $__env->make('partials.whats-smm', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('partials.complex-desigin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('partials.trust-us', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('partials.ask', ['formClass' => 'ecommerce'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <section class="steps white" style="padding-bottom: 0px">
            <div class="container">
                <div class="section-title">
                    <?php echo e(trans('smm.stages_title')); ?>

                </div>
                <div class="steps__columns steps__columns-slider">
                    <div class="steps__column">
                        <div class="steps__title">
                            <?php echo e(trans('smm.steps_title1')); ?>

                        </div>
                        <div class="steps__cards steps__cards_line-purple">
                            <div class="steps__card">
                                <div class="steps__img-field">
                                    <img class="steps__img object-fit-contain wow fadeInDown lazy"
                                        data-src="img/smm/steps/step1.1.svg" alt="icon.svg">
                                </div>
                                <span class="steps__card-title">
                                    <?php echo e(trans('smm.steps_item1_1')); ?>

                                </span>
                            </div>
                            <div class="steps__card">
                                <div class="steps__img-field">
                                    <img class="steps__img object-fit-contain wow fadeInDown lazy"
                                        data-src="img/smm/steps/step1.2.svg" alt="icon.svg">
                                </div>
                                <span class="steps__card-title">
                                    <?php echo e(trans('smm.steps_item1_2')); ?>

                                </span>
                            </div>
                            <div class="steps__card">
                                <div class="steps__img-field">
                                    <img class="steps__img object-fit-contain wow fadeInDown lazy"
                                        data-src="img/smm/steps/step1.3.svg" alt="icon.svg">
                                </div>
                                <span class="steps__card-title">
                                    <?php echo e(trans('smm.steps_item1_3')); ?>

                                </span>
                            </div>
                            <div class="steps__card">
                                <div class="steps__img-field">
                                    <img class="steps__img object-fit-contain wow fadeInDown lazy"
                                        data-src="img/smm/steps/step1.4.svg" alt="icon.svg">
                                </div>
                                <span class="steps__card-title">
                                    <?php echo e(trans('smm.steps_item1_4')); ?>

                                </span>
                            </div>
                        </div>

                    </div>
                    <div class="steps__column">
                        <div class="steps__title">
                            <?php echo e(trans('smm.steps_title2')); ?>

                        </div>
                        <div class="steps__cards steps__cards_line-pink">
                            <div class="steps__card">
                                <div class="steps__img-field">
                                    <img class="steps__img object-fit-contain wow fadeInDown lazy"
                                        data-src="img/smm/steps/step2.1.svg" alt="icon.svg">
                                </div>
                                <span class="steps__card-title">
                                    <?php echo e(trans('smm.steps_item2_1')); ?>

                                </span>
                            </div>
                            <div class="steps__card">
                                <div class="steps__img-field">
                                    <img class="steps__img object-fit-contain wow fadeInDown lazy"
                                        data-src="img/smm/steps/step2.2.svg" alt="icon.svg">
                                </div>
                                <span class="steps__card-title">
                                    <?php echo e(trans('smm.steps_item2_2')); ?>

                                </span>
                            </div>
                            <div class="steps__card">
                                <div class="steps__img-field">
                                    <img class="steps__img object-fit-contain wow fadeInDown lazy"
                                        data-src="img/smm/steps/step2.3.svg" alt="icon.svg">
                                </div>
                                <span class="steps__card-title">
                                    <?php echo e(trans('smm.steps_item2_3')); ?>

                                </span>
                            </div>
                            <div class="steps__card">
                                <div class="steps__img-field">
                                    <img class="steps__img object-fit-contain wow fadeInDown lazy"
                                        data-src="img/smm/steps/step2.4.svg" alt="icon.svg">
                                </div>
                                <span class="steps__card-title">
                                    <?php echo e(trans('smm.steps_item2_4')); ?>

                                </span>
                            </div>
                        </div>

                    </div>
                    <div class="steps__column">
                        <div class="steps__title">
                            <?php echo e(trans('smm.steps_title3')); ?>

                        </div>
                        <div class="steps__cards steps__cards_line-blue">
                            <div class="steps__card">
                                <div class="steps__img-field">
                                    <img class="steps__img object-fit-contain wow fadeInDown lazy"
                                        data-src="img/smm/steps/step3.1.svg" alt="icon.svg">
                                </div>
                                <span class="steps__card-title">
                                    <?php echo e(trans('smm.steps_item3_1')); ?>

                                </span>
                            </div>
                            <div class="steps__card">
                                <div class="steps__img-field">
                                    <img class="steps__img object-fit-contain wow fadeInDown lazy"
                                        data-src="img/smm/steps/step3.2.svg" alt="icon.svg">
                                </div>
                                <span class="steps__card-title">
                                    <?php echo e(trans('smm.steps_item3_2')); ?>

                                </span>
                            </div>
                            <div class="steps__card">
                                <div class="steps__img-field">
                                    <img class="steps__img object-fit-contain wow fadeInDown lazy"
                                        data-src="img/smm/steps/step3.3.svg" alt="icon.svg">
                                </div>
                                <span class="steps__card-title">
                                    <?php echo e(trans('smm.steps_item3_3')); ?>

                                </span>
                            </div>
                            <div class="steps__card">
                                <div class="steps__img-field">
                                    <img class="steps__img object-fit-contain wow fadeInDown lazy"
                                        data-src="img/smm/steps/step3.4.svg" alt="icon.svg">
                                </div>
                                <span class="steps__card-title">
                                    <?php echo trans('smm.steps_item3_4'); ?>

                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php echo $__env->make('partials.contact-us', ['formClass' => 'homepage'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div id="agency-popup" class="popup js-shape-close">
            <div class="popup__wind">
                <button class="popup__close js-close"></button>
                <div class="popup__wind__top">
                    <p class="popup__title"><?php echo e(trans('website.popup_title')); ?>

                        <span class="popup__subtitle"><?php echo e(trans('website.popup_subtitle')); ?></span>
                    </p>
                </div>
                <div class="popup__wind__cont">
                    <?php echo $__env->make('partials.ask-form', [
                        'social' => false,
                        'formId' => 'agency-popup',
                        'formClass' => 'homepage',
                    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>
        </div>

    </main>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('bottom-scripts'); ?>
    <script src="<?php echo e(asset('js/libs.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\UNITED-SOLUTION\resources\views/front/smm.blade.php ENDPATH**/ ?>