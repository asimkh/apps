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

          Join us in the journey by <mark><a href="/register">SignUp Now!</a></mark>

          <blockquote>The dreams of yesterday are the hopes of today and the reality of tomorrow. Science has not yet mastered prophecy. We predict too much for the next year and yet far too little for the next ten.</blockquote>




            </div>
        </div>

<!--
<div class="jumbotron">
  <h1>About</h1>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ultrices venenatis mauris, non mollis erat tincidunt eu. Morbi et sapien sed odio euismod accumsan. Morbi vulputate magna ut mi interdum, vitae auctor massa congue. Donec ut porttitor velit, ut eleifend risus. Nulla facilisi. Nullam laoreet imperdiet urna et laoreet. Donec nunc est, pharetra non sodales bibendum, volutpat et nisl. Donec luctus sit amet nisl eu semper. Curabitur vitae diam non nisl malesuada efficitur. Mauris at elementum erat, in cursus orci. Suspendisse potenti. Ut eu urna pretium, lobortis nunc id, posuere ante. Nam in fermentum orci. Aenean vel eros eu nibh finibus finibus.</p>
  <p>
  -->

<!--<?php echo e(link_to_route('register_path','Sign Up!', null, ['class' => 'btn btn-lg btn-primary'])); ?>-->
<!--
  <a class="btn btn-primary btn-lg" href="#" role="button">Sign U p!</a>
-->
  </p>

</div>

    <hr>
<?php $__env->stopSection(); ?>




   
<?php echo $__env->make('layouts.theme', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>