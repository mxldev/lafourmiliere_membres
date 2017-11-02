<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <p>Pour finaliser votre adhésion il vous reste à nous faire parvenir votre cotisation, de préférence par virement, sinon par chèque.</p>
            <p>Pour l’année 2017, la cotisation a été fixé à 15€ par foyer.<br />
            Si vous le souhaitez, vous pouvez augmenter ce montant pour soutenir nos actions et faciliter le développement de l’association.</p>
            <p>!! mise en page
RIB
+ adresse d’hélène </p>

            <p>Fourmilièrement vôtre,</p>
            <p>Insertion logo (comme une carte de visite en carte de visite)</p>
            <p>PS: un mail vous a été envoyé avec nos coordonnées bancaire et postale.</p>
            <?php if(!$user->hasvalidemail()): ?>
                <p>----------------------------</p>
                <p>Vous n'avez pas encore validé votre mail.<br />
                Pour cela, merci de cliquer sur le lien  présent dans le mail que nous vous avons envoyé.<br />
                Si vous n'arrivez pas à valider votre mail, merci de nous contacter à l'adresse : contact@laforumilière.org</p>
            <?php endif; ?>

            
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>