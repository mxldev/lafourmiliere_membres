<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <p>Merci de votre inscription.<br />
                Nous avons encore quelques éléments avant de finir :</p>
                <?php if(!$user->hasvalidemail()): ?>
                    Merci de valider votre mail
                <?php endif; ?>
                <?php if(!$user->hasCotisation()): ?>
                    Merci d'envoyer votre cotisation
                <?php endif; ?>

                <a href="<?php echo e(route('inscriptionAddPartner', ['id' => $user->id])); ?>"  class="btn btn-primary">Ajouter un partenaire</a>
            
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>