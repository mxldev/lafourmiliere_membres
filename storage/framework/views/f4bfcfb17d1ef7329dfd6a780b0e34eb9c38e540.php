

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Ajouter une cotisation</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="<?php echo e(route('storecotisation', ['id' => $user->id])); ?>">

                      <?php echo e(csrf_field()); ?>

                    
                        <div class="row">

                            <div class="form-group <?php if($errors->has('season')): ?> has-error <?php endif; ?>">
                                <label for="season" class="col-md-4 control-label">Année</label>
                                <div class="col-md-6">
                                    <select id="season" name="season">
                                        <?php foreach(['2017' => '2017', '2018' => '2018'] as $key => $value): ?>
                                        <option value="<?php echo e($key); ?>"><?php echo e($value); ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <?php if($errors->has('season')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('season')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <!-- Phonenumber Form Input -->
                            <div class="form-group<?php echo e($errors->has('amount') ? ' has-error' : ''); ?>">
                                <label for="amount" class="col-md-4 control-label">Montant</label>

                                <div class="col-md-6">
                                    <input id="amount" type="text" class="form-control" name="amount" value="<?php echo e(old('amount')); ?>">

                                    <?php if($errors->has('amount')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('amount')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i> Ajouter
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

<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>