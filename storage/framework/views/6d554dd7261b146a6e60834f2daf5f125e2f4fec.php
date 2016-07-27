<?php $__env->startSection('header'); ?>
 <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('img/about-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="page-heading">
                        <h2>About</h2>
                        <!--<hr class="small">-->
                        <span class="subheading">Bond better and share more</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <?php $__env->stopSection(); ?>


    
<?php $__env->startSection('content'); ?>

<div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">

          <p>Hazzir offers a comprehensive database for our visitor that is both reliable and trustworthy. The idea will be developing an application for multiple devices, exploiting the simple usability and the large diffusion of the App Store and Google Play Store.</p>

          <p>Find temporary service for an hour with a fixed cost. Professionals and homemakers busy with too many things to do and too little time to get them all done can use Hazzir application to get things done. A service performed by well-trained, well-treated individuals using eco-friendly products. </p>

          <p>Our distinctive client-focused approach and insightful strategic thinking separate us from others in the traditional list management service industry. This allows us to build long-standing client partnerships that continue to grow based on evolving customer needs, a proven reputation of trust, innovation, experience, and bottom line results.</p>

          <mark><a href="<?php echo e(url('/register')); ?>">">SignUp Now!</a></mark> in our journey.

          <blockquote>The dreams of yesterday are the hopes of today and the reality of tomorrow. Science has not yet mastered prophecy. We predict too much for the next year and yet far too little for the next ten.</blockquote>


          <u><a href="<?php echo e(url('/privacy')); ?>">Privacy Policy</a></u> | <u><a href="<?php echo e(url('/terms')); ?>">Terms and Conditions.</a></u>

            </div>
        </div>


  </p>

</div>

  
<?php $__env->stopSection(); ?>




   
<?php echo $__env->make('layouts.theme', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>