<?php $__env->startSection('stepcontent'); ?>
<h1>BRAVO ! </h1>
<h3>Vous venez de franchir la première étape.</h3>
<p>Pour la suite de l'aventure nous avons besoin de valider votre adresse mail.<br />
Pour cela il vous suffit de cliquer sur le lien que nous venons de vous envoyer par mail à l'adresse <?php echo e($user->email); ?></p>

<p>Vous pouvez également continuer votre inscription et valider votre mail plus tard en cliquant sur le lien suivant :<br />
<a href="<?php echo e(route('inscriptionStep', ['id' => $user->id, 'step' => 3])); ?>"  class="btn btn-primary">Passer à l'étape suivante</a>

</p>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('identification.step', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>