<?php $__env->startSection('header'); ?>

  <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('img/contact-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="page-heading">
                        <h1>Give Shout!</h1>
                        <hr class="small">
                        <span class="subheading">Have questions? I have answers (maybe).</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

<?php $__env->stopSection(); ?>
    
<?php $__env->startSection('content'); ?>

 <?php echo $__env->make('layouts.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

 <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <p>Want to get in touch with me? Fill out the form below to send me a message and I will try to get back to you within 24 hours!</p>
                <!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->
                <!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address! -->
                <!-- NOTE: To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->
               
                <?php echo e(Form::open(array('route' => 'sendmail', 'class' => 'form', 'id'=>'contactForm', 'name'=>'sentMessage', 'novalidate'))); ?>


                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">


                              
        <?php echo e(Form::label('contactName','Name:')); ?>

        <?php echo e(Form::text('contactName', null, 
                 array( 
              'class'=>'form-control', 
              'placeholder'=>'Name',
              'id'=>'name',
             
              'data-validation-required-message'=>'Please enter your name.'))); ?>

                            <p class="help-block text-danger"></p>
                        </div>
                    </div>



                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <?php echo e(Form::label('contactEmail','Email Address')); ?>

                            <?php echo e(Form::email('contactEmail', null,  array(
              'class'=>'form-control', 
              'placeholder'=>'Your email address',
             
              'id'=>'email',
              'data-validation-required-message'=>'Please enter your email address.'))); ?>

                            <p class="help-block text-danger"></p>

                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            
                            <?php echo e(Form::label('contactPhone','Phone Number')); ?>

                            <?php echo e(Form::tel('contactPhone', null,  array(
              'class'=>'form-control', 
              'placeholder'=>'Phone Number',
              'id'=>'phone',
            
              'data-validation-required-message'=>'Please enter your phone number.'))); ?>



                           
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <?php echo e(Form::label('contactMessage','Message')); ?>


                            <?php echo e(Form::textarea('contactMessage', null,  array(
              'class'=>'form-control', 
               'rows'=>'5',
               'id'=>'message',
                'data-validation-required-message'=>'Please enter a message.',
              'placeholder'=>'Your message'))); ?>



                            
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <br>
                    <div id="success"></div>
                    <div class="row">
                        <div class="form-group col-xs-12">
                           
                            <?php echo e(Form::submit('Submit', ['class' => 'btn btn-default' ])); ?>

                        </div>
                    </div>
               <?php echo e(Form::close()); ?>





<p>
Please keep these guidelines in mind:
</p>



<dl>
  <dt>Explain yourself. </dt>
  <dd>What were you doing when you encountered a problem? If you’re confused or unhappy about something, please explain why.</dd>
</dl>

<dl>
  <dt>Be specific.</dt>
  <dd>Provide a URL, a very detailed description, or a screenshot of the error so we know exactly what you’re talking about and don’t have to ask for clarification.</dd>
</dl>

            </div>
        </div>












<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.theme', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>