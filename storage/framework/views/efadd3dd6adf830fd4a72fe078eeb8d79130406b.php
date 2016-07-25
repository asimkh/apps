<?php $__env->startSection('header'); ?>
 <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('img/post-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                   <div class="page-heading">
                        <h2>Together like before</h2>
                        <span class="subheading">
                       This area is for Members only, please login.</span>
                        <!--<span class="meta">Posted by <a href="#">Start Bootstrap</a> on August 24, 2014</span>
                        -->
                    </div>
                </div>
            </div>
        </div>
    </header>
<?php $__env->stopSection(); ?>
    
<?php $__env->startSection('content'); ?>
<div class="row">
 <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
<!--<h1>Login</h1>-->


 <?php echo $__env->make('layouts.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php echo e(Form::open([ 'route' => 'user_login' ])); ?>


 <div class="row control-group">
  <div class="form-group col-xs-12 floating-label-form-group controls">
<?php echo e(Form::label('username','Username:')); ?>

<?php echo e(Form::text('username', null, array('required', 
              'class'=>'form-control', 
              'placeholder'=>'Email address'))); ?>

</div>
</div>

 <div class="row control-group">

 <div class="form-group col-xs-12 floating-label-form-group controls">
<?php echo e(Form::label('password','Password:')); ?>

<?php echo e(Form::password('password', array('required', 
              'class'=>'form-control', 
              'placeholder'=>'Password'))); ?>

</div>
</div>

<br>

 <div id="success"></div>
 <div class="row control-group">
<div class="form-group col-xs-12">

<?php echo e(Form::submit('Sign in', ['class' => 'btn btn-default' ])); ?>


</div>
</div>

<?php echo e(Form::close()); ?>


<br><br>
<p>
<!--
OR
</p>
<?php echo e(link_to_route('user_login','facebook login', null, ['class' => 'btn btn-primary'])); ?>

-->

<p>
What is a membership area?
<br><br>
A membership site has specific areas for members. Generally membersship is free to join the site and become a part for our community. 
</p>
</div>



</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.theme', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>