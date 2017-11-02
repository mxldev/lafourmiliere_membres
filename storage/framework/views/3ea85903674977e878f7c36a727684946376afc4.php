<?php $__env->startSection('content'); ?>
<p>Nouveau partenaire pour l'utilisateur <?php echo e($user->email); ?> : <?php echo e($user->partner); ?></p>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('emails._tplmail', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>