    
<?php $__env->startSection('content'); ?>

<div class="row">
<div class="col-md-6">
      <h1>Register</h1>

 <?php echo $__env->make('layouts.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
     

      <?php echo e(Form::open([ 'route' => 'register_path' ])); ?>




      <div class="form-group">
      <?php echo e(Form::label('username','Username:')); ?>

      <?php echo e(Form::text('username', null,  array( 
                    'class'=>'form-control', 
                    'placeholder'=>'Your Name'))); ?>

      </div>

      <div class="form-group">
      <?php echo e(Form::label('email','Email:')); ?>

      <?php echo e(Form::text('email', null,  array( 
                    'class'=>'form-control', 
                    'placeholder'=>'Email address'))); ?>

      </div>

      <div class="form-group">
      <?php echo e(Form::label('password','Password:')); ?>

      <?php echo e(Form::password ('password', array( 
                    'class'=>'form-control', 
                    'placeholder'=>'Your password'))); ?>

      </div>

      <div class="form-group">
      <?php echo e(Form::label('password_confirmation','Password Confirmation:')); ?>

      <?php echo e(Form::password ('password_confirmation', array( 
                    'class'=>'form-control', 
                    'placeholder'=>'Re-type password'))); ?>

      </div>


<!--
      <div class="form-group">
   
       <?php echo Recaptcha::render(); ?>

    
      </div>
      -->

      <div class="form-group">
      <?php echo e(Form::submit('Sign Up', ['class' => 'btn btn-primary' ])); ?>

      </div>

      <?php echo e(Form::close()); ?>

  </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>