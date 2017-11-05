<?php $__env->startSection('content'); ?>
<h1>Bienvenue, </h1>
<h3>Vous faites désormais partie de La Fourmilière.</h3>

<p>Dorénavant, vous allez pouvoir participer aux commandes groupées, ainsi qu’à la vie de l’association.</p>

<p><a href="<?php echo e(url('/images/administratif/catalogue.pdf')); ?>" target="_blank">Consulter le catalogue en cliquant ici.</a> </p>

<p>Si vous voulez nous faire profiter de votre énergie, n’hésitez pas à nous contacter via contact@lafourmiliere.org pour rejoindre nos groupes de travail.</p>

<p>Fourmilièrement vôtre,</p>

<?php if(!$user->hasvalidemail()): ?>
<p>Vous n'avez pas encore validé votre mail.<br />
Pour ce faire, merci de cliquer sur le lien ci-dessous :</p>
<?php echo $__env->make('emails._emailvalidationlink', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php endif; ?>

<p>Vous pouvez effectuer un virement aux coordonnées suivantes : <br />
<a href="<?php echo e(url('/images/administratif/rib_fourmiliere.png')); ?>">Télécharger le RIB</a></p>
<p>Vous pouvez également envoyer un chèque à l'ordre de "La Fourmilière" adressé à :<br />
Hélène HENRY,<br />
18 rue Champs Verts,<br />
67880 KRAUTERGERSHEIM</p>

<?php $__env->stopSection(); ?>






<?php echo $__env->make('emails._tplmail', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>