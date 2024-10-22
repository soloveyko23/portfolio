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
<section class="ask">
    <div class="container">
        <p class="h1">
            <?php echo e(trans('partials/about-us.ask_expert')); ?>

        </p>
        <p class="h1-sub">
            <?php echo e(trans('partials/about-us.recall_button')); ?>

        </p>
        <div class="row">
            <div class="col-xs-12 col-lg-5">
                <?php echo $__env->make('partials.ask-form', ['social' => false, 'formClass' => $formClass], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            <div class="col-xs-12 col-lg-6 col-lg-offset-1">
                <div class="advantages">
                    <div class="advantages__heading">
                        <div class="advantages__title"><?php echo e(trans('partials/ask.advantages_title')); ?></div>
                    </div>
                    <div class="advantages__inner">
                        <div class="advantages__left">
                            <ul class="advantages__list">
                                <li class="advantages__list-item"><?php echo e(trans('partials/ask.list_item1')); ?></li>
                                <li class="advantages__list-item"><?php echo e(trans('partials/ask.list_item2')); ?></li>
                                <li class="advantages__list-item"><?php echo e(trans('partials/ask.list_item3')); ?></li>
                                <li class="advantages__list-item"><?php echo e(trans('partials/ask.list_item4')); ?>

                                </li>
                                <li class="advantages__list-item"><?php echo e(trans('partials/ask.list_item5')); ?></li>
                            </ul>
                        </div>
                        <div class="advantages__right">
                            <div class="advantages__picture-wr">
                                <img class="advantages__picture" src="/img/mockup.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .advantages {
        position: relative;
        padding: 32px;
        background-color: #f8f8f8;
        border-radius: 12px;
        box-shadow: 0 4px 52px rgba(0, 0, 0, 0.06);
    }

    .advantages__heading {
        margin-bottom: 30px;
    }

    .advantages__title {
        font-size: 18px;
        font-weight: 700;
        line-height: 30px;
        color: #b2d550;
    }

    .advantages__inner {
        display: flex;
        flex-wrap: wrap;
    }

    .advantages__left,
    .advantages__right {
        width: 100%;
    }

    .advantages__right {
        padding-bottom: 206px;
        margin-top: 16px;
    }

    @media (min-width: 1024px) {

        .advantages__left,
        .advantages__right {
            width: 50%;
        }

        .advantages__right {
            padding-bottom: 0;
            margin-top: 0;
        }
    }

    .advantages__picture-wr {
        position: absolute;
        right: 0;
        bottom: 10px;
    }

    .advantages__list {
        margin-left: 30px;
    }

    .advantages__list-item {
        margin-top: 10px;
        margin-bottom: 10px;
        list-style-image: url("/img/icons/li-marker.svg");
    }
</style>
<?php /**PATH E:\laragon\www\UNITED-SOLUTION\resources\views/partials/ask.blade.php ENDPATH**/ ?>