    
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
	<th>Firstname</th>
	<th>Lastname</th>
	<th>Status</th>
	</tr>

</thead>

<tbody class="text-warning">
	<tr>
	<th>first - name - 1</th>
	<th>last - name - 1</th>
	<th>active - 1</th>
	</tr>
	<tr>
	<th>first - name - 2</th>
	<th>last - name - 2</th>
	<th>active - 2</th>
	</tr>
	<tr>
	<th>first - name - 3</th>
	<th>last - name - 3</th>
	<th>active - 3</th>
	</tr>

</tbody>

</table>
</div>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>