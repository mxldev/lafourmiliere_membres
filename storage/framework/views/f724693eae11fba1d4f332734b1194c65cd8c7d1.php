<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <?php if(!Auth::user()->hasAddress()): ?> 
            <div class="panel panel-default">
                <div class="panel-heading">Adresse</div>

                <div class="panel-body">
                    Merci de rajouter votre adresse <a href="<?php echo e(route('addAddresse', ['id' => Auth::id()])); ?>">ici</a>.
                </div>
            </div>
            <?php elseif(!Auth::user()->ismember()): ?>
            <div class="panel panel-default">
                <div class="panel-heading">Accueil</div>

                <div class="panel-body">
                    Votre inscription sera finalisée lors de la réception de votre cotisation.
                </div>
                
            </div>
            <?php else: ?>
            <div class="panel panel-default">
                <div class="panel-heading">Accueil</div>

                <div class="panel-body">
                    Voici votre tableau de bord
                </div>
            </div>
            <?php endif; ?>

            
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>