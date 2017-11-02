

<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-md-5">
            <h3>Details <?php echo e($user->name); ?></h3>
        </div>
        <div class="col-md-7 page-action text-right">
            <a href="<?php echo e(route('users.index')); ?>" class="btn btn-default btn-sm"> <i class="fa fa-arrow-left"></i> Retour</a>
        </div>
    </div>

    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-content">
                        
                        
 <div class="row">
<!-- Gender Form Input -->
<div class="col-md-12 form-group <?php if($errors->has('gender')): ?> has-error <?php endif; ?>">
    Sexe : <?php echo e($user->gender); ?>

</div>
</div>

<div class="row">
<!-- Firstname Form Input -->
<div class="col-md-6 form-group <?php if($errors->has('firstname')): ?> has-error <?php endif; ?>">
    Prénom : <?php echo e($user->firstname); ?>

</div>

<!-- Lastname Form Input -->
<div class="col-md-6 form-group <?php if($errors->has('lastname')): ?> has-error <?php endif; ?>">
    Nom : <?php echo e($user->name); ?>

</div>
</div>

<div class="row">
<!-- email Form Input -->
<div class="col-md-6 form-group <?php if($errors->has('email')): ?> has-error <?php endif; ?>">
    E-mail : <?php echo e($user->email); ?>

</div>

<!-- Phonenumber Form Input -->
<div class="col-md-6 form-group <?php if($errors->has('phonenumber')): ?> has-error <?php endif; ?>">
    Téléphone : <?php echo e($user->phonenumber); ?>

</div>
</div>

<div class="row">
<!-- Address Form Input -->
<div class="col-md-6 form-group <?php if($errors->has('address')): ?> has-error <?php endif; ?>">
    Adresse : <?php echo e($user->address); ?>

</div>

<!-- Addresscomp Form Input -->
<div class="col-md-6 form-group <?php if($errors->has('addresscomp')): ?> has-error <?php endif; ?>">
    Complément d'adresse : <?php echo e($user->addresscomp); ?>

</div>
</div>

<div class="row">
<!-- Postcode Form Input -->
<div class="col-md-6 form-group <?php if($errors->has('postcode')): ?> has-error <?php endif; ?>">
    Code postal : <?php echo e($user->postcode); ?>

</div>

<!-- City Form Input -->
<div class="col-md-6 form-group <?php if($errors->has('city')): ?> has-error <?php endif; ?>">
    Ville : <?php echo e($user->city); ?>

</div>
</div>


<?php if($user->cotisations->count() > 0): ?>
  <ul>
  <?php foreach($user->cotisations as $cotisation): ?>

    <li><?php echo e($cotisation->amount); ?></li>

  <?php endforeach; ?>
  </ul>
<?php else: ?>
 <p>
  You haven't created any cotisation. 
</p>  
<?php endif; ?>





                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>