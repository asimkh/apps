    

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
                   
                     <?php echo e(Form::open([ url('register') ])); ?>


                        <?php echo e(csrf_field()); ?>



                         <div class="row control-group">
       <div class="form-group col-xs-12 floating-label-form-group controls <?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
      <?php echo e(Form::label('name','Name:')); ?>

      <?php echo e(Form::text('name', null,  array( 
                    'class'=>'form-control', 
                    'placeholder'=>'Your Name',
              'value'=>'{ old("name")}'
              ))); ?>





                                <?php if($errors->has('name')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('name')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>


                         <div class="row control-group">
       <div class="form-group col-xs-12 floating-label-form-group controls <?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
      <?php echo e(Form::label('email','Email:')); ?>

      <?php echo e(Form::text('email', null,  array( 
                    'class'=>'form-control', 
                    'placeholder'=>'Email address',
              'value'=>'{ old("email")}'))); ?>




                        
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

      <?php echo e(Form::password ('password', array( 
                    'class'=>'form-control', 
                    'placeholder'=>'Your password'))); ?>





                       

                                <?php if($errors->has('password')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>


                         <div class="row control-group">
       <div class="form-group col-xs-12 floating-label-form-group controls <?php echo e($errors->has('password_confirmation') ? ' has-error' : ''); ?>">
      <?php echo e(Form::label('password_confirmation','Password Confirmation:')); ?>

      <?php echo e(Form::password ('password_confirmation', array( 
                    'class'=>'form-control', 
                    'placeholder'=>'Re-type password'))); ?>




                        

                                <?php if($errors->has('password_confirmation')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('password_confirmation')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>


                        <br>
     <div id="success"></div>
      <div class="row control-group">
<div class="form-group col-xs-12">
      <?php echo e(Form::submit('Register', ['class' => 'btn btn-default' ])); ?>

      </div>
      </div>



                      
                    </form>
                </div>
            </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.theme', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>