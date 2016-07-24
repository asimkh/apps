<?php $__env->startSection('content'); ?>


	
	<div>
		<?php echo e($post->title); ?>

	</div>
	

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.fb', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>