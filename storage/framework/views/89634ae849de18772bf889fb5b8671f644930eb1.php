

<?php $__env->startSection('stepcontent'); ?>
    
    <form class="form-horizontal" role="form" method="POST" action="<?php echo e(route('inscriptionUpdAdr', ['id' => $user->id])); ?>">

        <?php echo e(csrf_field()); ?>

    
        <?php echo $__env->make('inscription._addressform', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-primary">
                    <i class="fa fa-btn fa-user"></i> Enregistrer
                </button>
            </div>
        </div>

    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('inscription.step', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>