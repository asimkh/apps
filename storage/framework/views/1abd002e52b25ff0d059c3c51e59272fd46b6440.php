    

    <?php $__env->startSection('header'); ?>
 <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('img/signup-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                   <div class="page-heading">
                        <h2>Get Hooked Up</h2>
                        <!--<h2 class="subheading">Problems look mighty small from 150 miles up</h2>-->
                      <span class="subheading">Sign up for membership and newsletters to get latest updates.</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
<?php $__env->stopSection(); ?>
    


<?php $__env->startSection('content'); ?>

<div class="row">
 <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
      <!--<h1>Register</h1>-->

 <?php echo $__env->make('layouts.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
     

      <?php echo e(Form::open([ 'route' => 'register_path' ])); ?>




      <div class="row control-group">
       <div class="form-group col-xs-12 floating-label-form-group controls">
      <?php echo e(Form::label('username','Username:')); ?>

      <?php echo e(Form::text('username', null,  array( 
                    'class'=>'form-control', 
                    'placeholder'=>'Your Name'))); ?>

      </div>
      </div>

      <div class="row control-group">
       <div class="form-group col-xs-12 floating-label-form-group controls">
      <?php echo e(Form::label('email','Email:')); ?>

      <?php echo e(Form::text('email', null,  array( 
                    'class'=>'form-control', 
                    'placeholder'=>'Email address'))); ?>

      </div>
      </div>

       <div class="row control-group">
       <div class="form-group col-xs-12 floating-label-form-group controls">
      <?php echo e(Form::label('password','Password:')); ?>

      <?php echo e(Form::password ('password', array( 
                    'class'=>'form-control', 
                    'placeholder'=>'Your password'))); ?>

      </div>
      </div>

       <div class="row control-group">
       <div class="form-group col-xs-12 floating-label-form-group controls">
      <?php echo e(Form::label('password_confirmation','Password Confirmation:')); ?>

      <?php echo e(Form::password ('password_confirmation', array( 
                    'class'=>'form-control', 
                    'placeholder'=>'Re-type password'))); ?>

      </div>
      </div>


<!--
      <div class="form-group">
    <div class="form-group col-xs-12 floating-label-form-group controls">
       <?php echo Recaptcha::render(); ?>

    </div>
      </div>
      -->

     <br>
     <div id="success"></div>
      <div class="row control-group">
<div class="form-group col-xs-12">
      <?php echo e(Form::submit('Sign Up', ['class' => 'btn btn-default' ])); ?>

      </div>
      </div>

      <?php echo e(Form::close()); ?>




<p>
Get started with a free account and benefits for Signup!
</p>



<dl>
  <dt>Membership only content</dt>
  <dd>By registering you receive authorize content for members only.</dd>
</dl>

<dl>
  <dt>Build community</dt>
  <dd>When it comes to newsletters, one size doesn’t always fit all. Luckily, advanced email newsletter for memebers only.</dd>
</dl>

<dl>
  <dt>Discounts and coupon codes</dt>
  <dd>There are several overall types of discounts and offers you have at your disposal.</dd>
</dl>

  </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.theme', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>