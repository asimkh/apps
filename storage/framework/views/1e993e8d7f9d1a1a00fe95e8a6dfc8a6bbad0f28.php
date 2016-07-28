<?php $__env->startSection('header'); ?>
 <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('img/login-bg.jpg')">
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


 <div class="row control-group">
 <div class="form-group col-xs-12">




                                <a class="btn btn-default" href="<?php echo e(url('redirect')); ?>">Facebook Login</a>


                                <p>

                                OR

                                </p>
                               
                            </div>
                        </div>


 

                    
                        <?php echo e(Form::open([ url('login') ])); ?>

                        <?php echo e(csrf_field()); ?>


                     

                         <div class="row control-group">
                         <div class="form-group col-xs-12 floating-label-form-group controls <?php echo e($errors->has('email') ? ' has-error' : ''); ?>">

                            <?php echo e(Form::label('username','Email:')); ?>


                            
                            <?php echo e(Form::text('email', null, array('required', 
              'class'=>'form-control', 
              'placeholder'=>'Email address',
              'value'=>'{ old("email")}'
              ))); ?>


                                <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>


                         <div class="row control-group">

 <div class="form-group col-xs-12 floating-label-form-group controls <?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
<?php echo e(Form::label('password','Password:')); ?>

<?php echo e(Form::password('password', array('required', 
              'class'=>'form-control', 
              'placeholder'=>'Password'))); ?>






                      

                                <?php if($errors->has('password')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

<!--
                        <div class="form-group col-xs-12 ">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>
                        -->

<br>

 <div id="success"></div>
 <div class="row control-group">
<div class="form-group col-xs-12">


<?php echo e(Form::submit('Login', ['class' => 'btn btn-default' ])); ?>




                            
                            </div>
                        </div>

                         <div class="row control-group">
 <div class="form-group col-xs-12">




                                <a class="btn btn-default" href="<?php echo e(url('password/reset')); ?>">Forgot Your Password?</a>
                               
                            </div>
                        </div>
                       

<?php echo e(Form::close()); ?>


<br><br>
<p>
What is a membership area?
<br><br>
A membership site has specific areas for members. Generally membersship is free to join the site and become a part for our community. 
</p>
</div>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.theme', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>