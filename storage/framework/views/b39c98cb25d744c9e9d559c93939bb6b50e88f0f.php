    
<?php $__env->startSection('content'); ?>


<div class="container">
      <!-- Example row of columns -->
      <div class="row">



  <h1>Privacy</h1>

<p>

Your privacy is critically important to us.
We collect different types of information about our users for few reasons:
<p>

<ul>
  <li>To provide personalised services unique to individual users.</li>
  <li>To help us to monitor and improve the services we offer</li>
  <li>If we have permission from the user, to market services to them.</li>
</ul>

<p>
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
<?php echo $__env->make('layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>