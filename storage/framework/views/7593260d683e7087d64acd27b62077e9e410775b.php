
<?php echo e(csrf_field()); ?>


<div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
    <label for="email" class="col-md-4 control-label">E-Mail</label>

    <div class="col-md-6">
        <input id="email" type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>">

        <?php if($errors->has('email')): ?>
            <span class="help-block">
                <strong><?php echo e($errors->first('email')); ?></strong>
            </span>
        <?php endif; ?>
    </div>
</div>

<div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
    <label for="password" class="col-md-4 control-label">Mot de passe</label>

    <div class="col-md-6">
        <input id="password" type="password" class="form-control" name="password">

        <?php if($errors->has('password')): ?>
            <span class="help-block">
                <strong><?php echo e($errors->first('password')); ?></strong>
            </span>
        <?php endif; ?>
    </div>
</div>

<div class="form-group">
    <div class="col-md-6 col-md-offset-4">
        <div class="checkbox">
            <label>
                <input type="checkbox" name="remember"> Restez connecté
            </label>
        </div>
    </div>
</div>

<div class="form-group">
    <div class="col-md-6 col-md-offset-4">
        <button type="submit" class="btn btn-primary">
            <i class="fa fa-btn fa-sign-in"></i> Connexion
        </button>

        <a class="btn btn-link" href="<?php echo e(url('/password/reset')); ?>">Mot de passe oublié ?</a>
    </div>
</div>