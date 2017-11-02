
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

<div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
    <label for="email" class="col-md-4 control-label">E-Mail Address</label>

    <div class="col-md-6">
        <input id="email" type="email" class="form-control" name="email" value="<?php echo e($user->email); ?>" required>

        <?php if($errors->has('email')): ?>
            <span class="help-block">
                <strong><?php echo e($errors->first('email')); ?></strong>
            </span>
        <?php endif; ?>
    </div>
</div>

<!-- Phonenumber Form Input -->
  <div class="form-group<?php echo e($errors->has('phonenumber') ? ' has-error' : ''); ?>">
      <label for="phonenumber" class="col-md-4 control-label">Téléphone</label>

      <div class="col-md-6">
          <input id="phonenumber" type="text" class="form-control" name="phonenumber" value="<?php echo e($user->phonenumber); ?>">

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