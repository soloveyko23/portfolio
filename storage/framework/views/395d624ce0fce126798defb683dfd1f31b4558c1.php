
<section class="propouse">
<div class="container">
  <div class="row">
    <div class="col-xs-12">
        <?php echo $__env->make('partials.redesign.parts.section_title-button', trans('index.propose.section_title'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
  </div>
  <div class="row row-flex propouse-loop">
    <?php $__currentLoopData = trans('index.propose.items'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="col-xs-12 col-sm-4">
        <?php echo $__env->make('partials.redesign.parts.propouse-item',$item, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </div>
</div>
</section>
<?php /**PATH E:\laragon\www\UNITED-SOLUTION\resources\views/partials/redesign/we_propouse.blade.php ENDPATH**/ ?>