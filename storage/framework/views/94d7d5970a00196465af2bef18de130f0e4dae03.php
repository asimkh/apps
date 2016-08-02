<?php $__env->startSection('header'); ?>
 <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('img/profile-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="page-heading">
                        <h2>Profile</h2>
                        <!--<hr class="small">-->
                        <span class="subheading">User details</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <?php $__env->stopSection(); ?>

    
<?php $__env->startSection('content'); ?>

<?php if(Session::has('message')): ?>
    <div class="alert alert-info">
      <?php echo e(Session::get('message')); ?>

    </div>
<?php endif; ?>



<div class="row">
<table class="table table-bordered">
<caption class="text-success"><strong>User Login Data</strong></caption>
<thead class="text-primary">
	<tr>
	<th>Name</th>
	<th>Email</th>
	<th>Avatar</th>
	</tr>

</thead>

<tbody class="text-warning">
	<tr>
	<th><?php echo e(Auth::user()->firstname); ?>

<br>

<?php echo e(Auth::user()->about); ?></th>
	</th>
	<th><?php echo e(Auth::user()->email); ?></th>
	<th><img src="<?php echo e(Auth::user()->photo); ?>" height="62" width="100" /></th>
	</tr>
	

</tbody>

</table>
</div>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.theme', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>