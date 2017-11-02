<h1>Bonjour  <?php echo e($user->name); ?>,</h1>
<h3>Bravo pour votre inscription, vous venez de franchir la première étape.</h3>
<p>Pour la suite de l’aventure, nous avons besoin de vérifier votre adresse mail.<br />
Merci de cliquer sur le lien ci dessous :</p>

<?php echo $__env->make('emails._emailvalidationlink', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

