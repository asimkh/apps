<?php $__env->startSection('header'); ?>
 <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('../img/posts-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="page-heading">
                       
                    </div>
                </div>
            </div>
        </div>
    </header>

    <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<h1>All Posts</h1>

	<?php foreach($posts as $post): ?>
	<div>
		<?php echo e($post->title); ?>

	</div>
	<?php endforeach; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.posts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>