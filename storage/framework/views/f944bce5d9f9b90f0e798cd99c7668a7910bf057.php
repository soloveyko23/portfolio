<?php if($item['visible']): ?>
    <div class="portfolio__item" data-item-type="<?php echo e($item['type']); ?>">
        <?php
            $class = null;
            if (isset($item['color'])) {
                $class = 'projects__img-field-' . $item['color'];
            }
        ?>
        <div class="projects__img-field <?php echo e($class); ?>">
            <picture>
                <source type="image/webp" data-srcset="<?php echo e($item['src']); ?>/sample.webp">
                <img class="projects__img lazy" data-src="<?php echo e($item['src']); ?>/sample.jpg"
                    alt="<?php echo e($item['name'][app()->getLocale()] ?? $item['name']); ?>">
            </picture>
            <div class="projects__txt">
                <div class="projects__txt-top">
                    <p class="projects__subtitle title_color-main">
                        <?php echo $item['name'][app()->getLocale()] ?? $item['name']; ?>

                    </p>
                    <span class="projects__desc">
                        <?php echo e($item['descr'][app()->getLocale()] ?? $item['descr']); ?>

                    </span>
                </div>
                <div class="projects__txt-cont">
                    <?php
                        $techMap = [
                            'laravel' => 'Laravel',
                            'vue' => 'Vue.js',
                            'opencart' => 'OpenCart',
                            'wp' => 'WordPress',
                            'joomla' => 'Joomla',
                            'nuxt' => 'Nuxt'
                        ];
                        $techCount = count($item['tech'] ?? []); // Подсчитываем количество технологий, если они есть
                    ?>

                    <div class="shape-text" style="<?php echo e($techCount > 0 ? '' : 'display: none;'); ?>">
                        <p>
                            <?php echo e(trans('partials/mini-portfolio.project_tech')); ?> &nbsp;
                        </p>

                        <?php if($techCount > 0): ?>
                            <?php $__currentLoopData = $item['tech']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $tech): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if(isset($techMap[$tech])): ?>
                                    <span><?php echo e($techMap[$tech]); ?></span>

                                    <?php if($key < $techCount - 1): ?> <!-- Если это не последний элемент -->
                                        <span>, &nbsp;</span> <!-- Добавляем запятую после элемента -->
                                    <?php endif; ?>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    </div>
                        
                    <?php
                        // Выбираем текущий язык, можно определить его на основе настроек приложения или запроса
                        $language = app()->getLocale(); // Например, 'ru' или 'en'
                        $serviceProvidedText = $item['serviceProvided'][$language] ?? '';
                    ?>

                    <?php if(!empty($serviceProvidedText)): ?>
                        <div class="shape-text">
                            <p>
                            <?php echo e(trans('partials/mini-portfolio.project_services')); ?> &nbsp;
                            </p>
                            <span><?php echo e($serviceProvidedText); ?></span>
                        </div>
                    <?php endif; ?>


                    <div class="shape-text">
                        <p>
                            <?php echo e(trans('partials/mini-portfolio.project_time')); ?> &nbsp;
                        </p>
                        <span><?php echo e($item['devTermin'][app()->getLocale()] ?? $item['devTermin']); ?></span>
                    </div>
                </div>
                <div class="projects__txt-footer">
                    <button data-togle="#footer-popup" class="btn btn-red">
                        <?php echo e(trans('index.do_same_site')); ?>

                    </button>
                    <?php if(isset($item['href'])): ?>
                        <a href="<?php echo e($item['href_public'] ?? getLocaleUrl($item['href'])); ?>" class="btn btn-transp">
                            <?php echo e(trans('index.check_project')); ?>

                        </a>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
<?php /**PATH E:\laragon\www\UNITED-SOLUTION\resources\views/partials/redesign/parts/mini-portfolio.blade.php ENDPATH**/ ?>