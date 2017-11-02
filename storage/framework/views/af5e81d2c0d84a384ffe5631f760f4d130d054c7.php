<?php $__env->startSection('content'); ?>

<div class="container">

    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-content">
                        
                        
                        <form class="form-horizontal" role="form" method="POST" action="<?php echo e(url('account/updatedetails')); ?>">

                            <?php echo e(csrf_field()); ?>

                        
                            
<div class="row">
<div class="form-group <?php if($errors->has('gender')): ?> has-error <?php endif; ?>">
    <label for="gender" class="col-md-4 control-label">Gender</label>
    <div class="col-md-6">
        <select id="gender" name="gender">
            <?php foreach(['male' => 'Man', 'female' => 'Woman'] as $key => $value): ?>
            <option value="<?php echo e($key); ?>" <?php if($user->gender == $key): ?> selected <?php endif; ?>><?php echo e($value); ?></option>
            <?php endforeach; ?>
        </select>
        <?php if($errors->has('gender')): ?>
            <span class="help-block">
                <strong><?php echo e($errors->first('gender')); ?></strong>
            </span>
        <?php endif; ?>
    </div>
</div>

<!-- Firstname Form Input -->
<div class="form-group <?php if($errors->has('firstname')): ?> has-error <?php endif; ?>">
    <label for="firstname" class="col-md-4 control-label">Firstname</label>
    <div class="col-md-6">
        <input id="firstname" type="text" class="form-control" name="firstname" value="<?php echo e($user->firstname); ?>" required autofocus>
        <?php if($errors->has('firstname')): ?>
            <span class="help-block">
                <strong><?php echo e($errors->first('firstname')); ?></strong>
            </span>
        <?php endif; ?>
    </div>
</div>

<div class="form-group <?php echo e($errors->has('name') ? 'has-error' : ''); ?>">
    <label for="name" class="col-md-4 control-label">Name</label>

    <div class="col-md-6">
        <input id="name" type="text" class="form-control" name="name" value="<?php echo e($user->name); ?>" required >

        <?php if($errors->has('name')): ?>
            <span class="help-block">
                <strong><?php echo e($errors->first('name')); ?></strong>
            </span>
        <?php endif; ?>
    </div>
</div>

<div class="row">
<!-- Address Form Input -->
  <div class="form-group<?php echo e($errors->has('address') ? ' has-error' : ''); ?>">
      <label for="address" class="col-md-4 control-label">Adresse</label>

      <div class="col-md-6">
          <input id="address" type="text" class="form-control" name="address" value="<?php echo e($user->address); ?>">

          <?php if($errors->has('address')): ?>
              <span class="help-block">
                  <strong><?php echo e($errors->first('address')); ?></strong>
              </span>
          <?php endif; ?>
      </div>
  </div>

<!-- Addresscomp Form Input -->
  <div class="form-group<?php echo e($errors->has('addresscomp') ? ' has-error' : ''); ?>">
      <label for="addresscomp" class="col-md-4 control-label">étage, ...</label>

      <div class="col-md-6">
          <input id="addresscomp" type="text" class="form-control" name="addresscomp" value="<?php echo e($user->addresscomp); ?>">

          <?php if($errors->has('addresscomp')): ?>
              <span class="help-block">
                  <strong><?php echo e($errors->first('addresscomp')); ?></strong>
              </span>
          <?php endif; ?>
      </div>
  </div>
</div>

<div class="row">
<!-- Postcode Form Input -->
  <div class="form-group<?php echo e($errors->has('postcode') ? ' has-error' : ''); ?>">
      <label for="postcode" class="col-md-4 control-label">Code postal</label>

      <div class="col-md-6">
          <input id="postcode" type="text" class="form-control" name="postcode" value="<?php echo e($user->postcode); ?>">

          <?php if($errors->has('postcode')): ?>
              <span class="help-block">
                  <strong><?php echo e($errors->first('postcode')); ?></strong>
              </span>
          <?php endif; ?>
      </div>
  </div>

<!-- City Form Input -->
  <div class="form-group<?php echo e($errors->has('city') ? ' has-error' : ''); ?>">
      <label for="city" class="col-md-4 control-label">Ville</label>

      <div class="col-md-6">
          <input id="city" type="text" class="form-control" name="city" value="<?php echo e($user->city); ?>">

          <?php if($errors->has('city')): ?>
              <span class="help-block">
                  <strong><?php echo e($errors->first('city')); ?></strong>
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
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>