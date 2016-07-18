    
<?php $__env->startSection('content'); ?>
<h1>Register</h1>


<?php if($errors->any()): ?>
    <div class="alert alert-danger">
    <h3>Uh Oh!</h3>
      <ul>
    <?php foreach($errors->all() as $error): ?>
        <li><?php echo e($error); ?></li>
    <?php endforeach; ?>
</ul>
    </div>
<?php endif; ?>

<?php echo e(Form::open([ 'route' => 'register_path' ])); ?>


<div class="form-group">
<?php echo e(Form::label('username','Username:')); ?>

<?php echo e(Form::text('username', null, ['class' => 'form-control' ])); ?>

</div>

<div class="form-group">
<?php echo e(Form::label('email','Email:')); ?>

<?php echo e(Form::text('email', null, ['class' => 'form-control' ])); ?>

</div>

<div class="form-group">
<?php echo e(Form::label('password','Password:')); ?>

<?php echo e(Form::text('password', null, ['class' => 'form-control' ])); ?>

</div>

<div class="form-group">
<?php echo e(Form::label('password_confirmation','Password Confirmation:')); ?>

<?php echo e(Form::text('password_confirmation', null, ['class' => 'form-control' ])); ?>

</div>

<div class="form-group">
<?php echo e(Form::submit('Sign Up', ['class' => 'btn btn-primary' ])); ?>

</div>

<?php echo e(Form::close()); ?>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>