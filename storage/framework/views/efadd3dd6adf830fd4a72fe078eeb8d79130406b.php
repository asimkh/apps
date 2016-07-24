    
<?php $__env->startSection('content'); ?>
<div class="row">
<div class="col-md-6">
<h1>Login</h1>


 <?php echo $__env->make('layouts.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php echo e(Form::open([ 'route' => 'user_login' ])); ?>


<div class="form-group">
<?php echo e(Form::label('username','Username:')); ?>

<?php echo e(Form::text('username', null, array('required', 
              'class'=>'form-control', 
              'placeholder'=>'Email address'))); ?>

</div>

<div class="form-group">
<?php echo e(Form::label('password','Password:')); ?>

<?php echo e(Form::password('password', array('required', 
              'class'=>'form-control', 
              'placeholder'=>'Password'))); ?>

</div>


<div class="form-group">
<?php echo e(Form::submit('Sign in', ['class' => 'btn btn-primary' ])); ?>

</div>

<?php echo e(Form::close()); ?>


<br><br>
<p>
<!--
OR
</p>
<?php echo e(link_to_route('user_login','facebook login', null, ['class' => 'btn btn-primary'])); ?>

-->
</div>


</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>