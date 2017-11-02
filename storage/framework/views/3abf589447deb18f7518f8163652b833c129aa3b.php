

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-5">
            <h3 class="modal-title"><?php echo e($users->total()); ?> <?php echo e(str_plural('Utilisateur', $users->count())); ?> </h3>
        </div>
    </div>

    <div class="result-set">
        <table class="table table-bordered table-striped table-hover" id="data-table">
            <thead>
            <tr>
                <th>Nom</th>
                <th>E-mail</th>
                <th>Date d'inscription</th>
                <th>Cotisation</th>
                <th class="text-center">Actions</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($users as $item): ?>
                <tr>
                    <td>
                    <a href="<?php echo e(route('getdetails', ['users' => $item->id])); ?>">
                    <?php echo e($item->name); ?></a>
                    </td>
                    <td><?php echo e($item->email); ?></td>

                    <td><?php echo e($item->created_at->toFormattedDateString()); ?></td>
                    <td><?php if($item->cotisations->count() > 0): ?>
                    <?php echo e($item->cotisations[0]->amount); ?>

                    <?php endif; ?>
                    </td>
                    <td class="text-center">
                            <a href="<?php echo e(route('addcotisation', ['id' => $item->id])); ?>" class="btn btn-xs btn-info">
                                <i class="fa fa-edit"></i> + cotisation</a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>

        <div class="text-center">
            <?php echo e($users->links()); ?>

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>