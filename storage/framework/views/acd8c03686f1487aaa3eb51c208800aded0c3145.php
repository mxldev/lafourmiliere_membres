
<a href="<?php echo e(url('/confirm/' . $user->id . '/' . urlencode($user->confirmation_token))); ?>">Vérifier le compte</a>


<p>Si le lien ne fonctionne pas, merci de copier puis coller l'adresse ci-dessous dans votre navigateur internet :<br />
<?php echo e(url('/confirm/' . $user->id . '/' . urlencode($user->confirmation_token))); ?>

</p>