    
<?php $__env->startSection('content'); ?>


<div class="row">

<p>
Dear <?php echo e($name); ?>,
</p>

<p>
Thank you for signup at <?php echo e($OrganziationName); ?>. <br>

Find below message copy submitted to us.
<br>
========================================
<br>
</p>

<p>
Name: <?php echo e($name); ?>

</p>

<p>
Email: <?php echo e($email); ?>

</p>


<p>
========================================
</p>

<p>
Best regards,<br>
<?php echo e($OrganziationSupport); ?><br>
<?php echo e($OrganziationName); ?><br>
<?php echo e($OrganziationWebsite); ?>


</p>
</div>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.mail', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>