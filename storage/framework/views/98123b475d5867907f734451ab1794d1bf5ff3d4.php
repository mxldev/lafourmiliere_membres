<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <h1>Etape <?php echo e($step); ?></h1>
            
        </div>
    </div>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <?php echo $__env->yieldContent('stepcontent'); ?>
            
        </div>
    </div>
</div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>