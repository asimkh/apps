<?php $__env->startSection('content'); ?>
<h1>All Posts</h1>

	<?php foreach($posts as $post): ?>
	<div>
		<?php echo e($post->title); ?>

	</div>
	<?php endforeach; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.fb', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>