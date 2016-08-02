    
<?php $__env->startSection('content'); ?>


<div class="row">

<p>
Dear <?php echo e($name); ?>,
</p>

<p>
Thank you for submitting your message at <?php echo e($OrganziationName); ?>. <br>
We appreciate your time and effort writing to us.<br>
I will try to get back to you within 24 hours!<br>

</p>

<p>

Find below message copy submitted to us.
<br>
========================================
<br>
</p>

<p>
Name: <?php echo e($name); ?>

</p>

<p>
<?php echo e($email); ?>

</p>

<p>
<?php echo e($phone); ?>

</p>

<p>
<?php echo e($user_message); ?>

</p>


<p>
========================================
</p>

<p>
Best regards,<br>
<?php echo e($OrganziationSupport); ?><br>
<?php echo e($OrganziationName); ?><br>
<?php echo e($OrganziationWebsite); ?><br>
</p>
<p>
Follow Us<br>
<?php echo e($OrganziationFacebook); ?><br>
<?php echo e($OrganziationTwitter); ?><br>
</p>
</div>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.mail', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>