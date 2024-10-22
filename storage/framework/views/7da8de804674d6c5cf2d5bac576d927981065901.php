
<?php
  $icons = [
    'icon-1' => '<svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M25 5.9082V2.24609C25 1.03452 24.0143 0.0488281 22.8027 0.0488281H2.19727C0.985693 0.0488281 0 1.03452 0 2.24609V5.9082H25ZM16.8945 2.97852H21.2891C21.6936 2.97852 22.0215 3.30645 22.0215 3.71094C22.0215 4.11543 21.6936 4.44336 21.2891 4.44336H16.8945C16.49 4.44336 16.1621 4.11543 16.1621 3.71094C16.1621 3.30645 16.49 2.97852 16.8945 2.97852ZM9.57031 2.97852C9.9748 2.97852 10.3027 3.30645 10.3027 3.71094C10.3027 4.11543 9.9748 4.44336 9.57031 4.44336C9.16582 4.44336 8.83789 4.11543 8.83789 3.71094C8.83789 3.30645 9.16582 2.97852 9.57031 2.97852ZM6.64062 2.97852C7.04512 2.97852 7.37305 3.30645 7.37305 3.71094C7.37305 4.11543 7.04512 4.44336 6.64062 4.44336C6.23613 4.44336 5.9082 4.11543 5.9082 3.71094C5.9082 3.30645 6.23613 2.97852 6.64062 2.97852ZM3.71094 2.97852C4.11543 2.97852 4.44336 3.30645 4.44336 3.71094C4.44336 4.11543 4.11543 4.44336 3.71094 4.44336C3.30645 4.44336 2.97852 4.11543 2.97852 3.71094C2.97852 3.30645 3.30645 2.97852 3.71094 2.97852Z" fill="white"/>
                  <path d="M0 7.37305V22.7539C0 23.9655 0.985693 24.9512 2.19727 24.9512H22.8027C24.0143 24.9512 25 23.9655 25 22.7539V7.37305H0ZM8.56299 17.7875C8.87891 18.0401 8.93008 18.501 8.67739 18.8169C8.42476 19.1327 7.96377 19.184 7.64795 18.9313L3.98584 16.0016C3.61968 15.7087 3.61943 15.1508 3.98584 14.8577L7.64795 11.928C7.96367 11.6753 8.42466 11.7265 8.67739 12.0424C8.93008 12.3583 8.87891 12.8192 8.56299 13.0718L5.61582 15.4297L8.56299 17.7875ZM15.3705 10.5913L10.9759 20.8452C10.8166 21.2169 10.3861 21.3893 10.0142 21.2298C9.64243 21.0705 9.47017 20.6399 9.62954 20.2681L14.0241 10.0142C14.1834 9.64243 14.614 9.47021 14.9858 9.62954C15.3576 9.78887 15.5298 10.2194 15.3705 10.5913ZM21.0142 16.0016L17.3521 18.9313C17.0367 19.1836 16.5757 19.1333 16.3226 18.8169C16.0699 18.5011 16.1211 18.0401 16.437 17.7875L19.3842 15.4297L16.437 13.0719C16.1211 12.8192 16.0699 12.3583 16.3226 12.0425C16.5752 11.7266 17.0362 11.6754 17.3521 11.9281L21.0142 14.8578C21.3803 15.1506 21.3806 15.7085 21.0142 16.0016Z" fill="white"/>
                </svg>',
    'icon-2' => '<svg width="28" height="24" viewBox="0 0 28 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M0.000167658 10.1723C-0.0120127 11.2308 0.640478 12.1834 1.63183 12.5545V8.01847C1.63183 7.95319 1.66444 7.85531 1.66444 7.79004C0.6664 8.1582 0.00260372 9.10839 0.000167658 10.1723Z" fill="white"/>
                  <path d="M8.90907 15.7852H4.63403L6.23309 21.594C6.46989 22.4805 7.27354 23.0966 8.19112 23.0952C8.84398 23.1029 9.46168 22.8001 9.85545 22.2793C10.253 21.7839 10.3756 21.1221 10.1818 20.5171L8.90907 15.7852Z" fill="white"/>
                  <path d="M1.66455 7.75746H1.69716V7.72485C1.69716 7.75746 1.69716 7.75746 1.66455 7.75746Z" fill="white"/>
                  <path d="M25.0629 7.30054H24.8018V13.1746H25.0629C26.685 13.1746 27.9999 11.8597 27.9999 10.2376C27.9999 8.61551 26.6849 7.30054 25.0629 7.30054Z" fill="white"/>
                  <path d="M2.61108 8.01842V12.6524C2.64638 13.8525 3.62967 14.8068 4.83015 14.8063H10.7695V5.99512H4.83015C3.65534 5.99512 2.61108 6.84362 2.61108 8.01842Z" fill="white"/>
                  <path d="M11.7483 14.9368L23.8228 19.7667V0.904297L11.7483 5.73414V14.9368Z" fill="white"/>
                 </svg>'
  ]
?>
<ul class="navi">
  <?php $__currentLoopData = trans('navigation.list'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if(isset($item['title'])): ?>
      <li>
        <?php if(isset($item['href'])): ?>
          <a href="<?php echo e($item['href']); ?>"><?php echo e($item['title']); ?></a>
        <?php else: ?>
            <span><?php echo e($item['title']); ?>

              <?php if(isset($item['submenu'])): ?>
              <svg width="9" height="5" viewBox="0 0 9 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path class="cls-1" d="M1,1,4.5,4,8,1" transform="translate(-0.5 -0.5)"/>
              </svg>



              <?php endif; ?>

            </span>
        <?php endif; ?>
        <?php if(isset($item['submenu'])): ?>
        <div class="submenu">
          <?php $__currentLoopData = $item['submenu']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <div class="submenu-div">
              <div class="submenu-div_header">
                <?php
                  $icon = $icons[$item['icon']] ?? false;
                  $title = $item['title'] ?? false
                ?>
                <div class="icon">
                  <?php echo $icon; ?>

                </div>
                <p class="title">
                  <?php echo e($title); ?>

                </p>
              </div>
              <?php if(isset($item['list'])): ?>
              <ul class="submenu-list">
                  <?php $__currentLoopData = $item['list']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if(isset($item['href'])): ?>
                    <li>
                      <a href="<?php echo e($item['href']); ?>"><?php echo e($item['title'] ?? ''); ?></a>
                    </li>
                    <?php endif; ?>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
              <?php endif; ?>
            </div>

          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <?php endif; ?>
      </li>
    <?php endif; ?>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
<?php /**PATH E:\laragon\www\UNITED-SOLUTION\resources\views/partials/redesign/parts/navigation.blade.php ENDPATH**/ ?>