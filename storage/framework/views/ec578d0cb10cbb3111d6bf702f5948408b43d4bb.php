<div class="row">

<!-- Phonenumber Form Input -->
  <div class="form-group<?php echo e($errors->has('phonenumber') ? ' has-error' : ''); ?>">
      <label for="phonenumber" class="col-md-4 control-label">Téléphone</label>

      <div class="col-md-6">
          <input id="phonenumber" type="text" class="form-control" name="phonenumber" value="<?php echo e(old('phonenumber')); ?>">

          <?php if($errors->has('phonenumber')): ?>
              <span class="help-block">
                  <strong><?php echo e($errors->first('phonenumber')); ?></strong>
              </span>
          <?php endif; ?>
      </div>
  </div>
</div>

<div class="row">
<!-- Address Form Input -->
  <div class="form-group<?php echo e($errors->has('address') ? ' has-error' : ''); ?>">
      <label for="address" class="col-md-4 control-label">Adresse</label>

      <div class="col-md-6">
          <input id="address" type="text" class="form-control" name="address" value="<?php echo e(old('address')); ?>">

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
          <input id="addresscomp" type="text" class="form-control" name="addresscomp" value="<?php echo e(old('addresscomp')); ?>">

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
          <input id="postcode" type="text" class="form-control" name="postcode" value="<?php echo e(old('postcode')); ?>">

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
          <input id="city" type="text" class="form-control" name="city" value="<?php echo e(old('postcode')); ?>">

          <?php if($errors->has('city')): ?>
              <span class="help-block">
                  <strong><?php echo e($errors->first('city')); ?></strong>
              </span>
          <?php endif; ?>
      </div>
  </div>
</div>