<?php $__env->startSection('stepcontent'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Informations complémentaires</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="<?php echo e(route('inscriptionUpdAdr', ['id' => $user->id])); ?>">

                      <?php echo e(csrf_field()); ?>

                    
                        <?php echo $__env->make('identification._addressform', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i> Enregistrer
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('identification.step', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>