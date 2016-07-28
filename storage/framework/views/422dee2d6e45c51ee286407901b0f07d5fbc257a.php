    
<?php $__env->startSection('content'); ?>


<div class="row">

<p>
Click here to reset your password: <a href="<?php echo e($link = url('password/reset', $token).'?email='.urlencode($user->getEmailForPasswordReset())); ?>"> <?php echo e($link); ?> </a>
</p>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.mail', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>