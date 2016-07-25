<?php $__env->startSection('header'); ?>
 <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('img/privacy-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="page-heading">
                        <h2>Privacy</h2>
                        <!--<hr class="small">-->
                        <span class="subheading">
It is critically important.</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <?php $__env->stopSection(); ?>
    
<?php $__env->startSection('content'); ?>


<div class="container">
      <!-- Example row of columns -->
      <div class="row">

 <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">



<p>

We collect different types of information about our users for few reasons:


<ul>
  <li>To provide personalised services unique to individual users.</li>
  <li>To help us to monitor and improve the services we offer</li>
  <li>If we have permission from the user, to market services to them.</li>
</ul>


For more information contact us at <mark><a href="mailto:hello@hazzir.com" role="button">hello@hazzir.com</a></mark>
</p>
<!--
<?php echo e(link_to_route('register_path','Sign Up!', null, ['class' => 'btn btn-lg btn-primary'])); ?>


  <a class="btn btn-primary btn-lg" href="#" role="button">Sign U p!</a>
-->
</div>


</div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.theme', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>