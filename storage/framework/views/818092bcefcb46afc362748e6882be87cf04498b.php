<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">

            <div class="panel panel-default">
                <div class="panel-heading">Indiquez votre partenaire</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="<?php echo e(url('/account/updatepartner')); ?>">

                        <?php echo e(csrf_field()); ?>

                    
                        <div class="row">
                            <!-- Partner Form Input -->
                            <div class="form-group<?php echo e($errors->has('partner') ? ' has-error' : ''); ?>">
                                <label for="partner" class="col-md-4 control-label">Nom et prénom</label>

                                <div class="col-md-6">
                                    <input id="partner" type="text" class="form-control" name="partner" value="<?php echo e($user->partner); ?>">

                                    <?php if($errors->has('partner')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('partner')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>

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

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>