    


    
<?php $__env->startSection('content'); ?>

You received a message from Hazzir.com:

<p>
Name: <?php echo e($name); ?>

</p>

<p>
<?php echo e($email); ?>

</p>

<p>
<?php echo e($user_message); ?>

</p>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>