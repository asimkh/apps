    
<?php $__env->startSection('content'); ?>

<div class="jumbotron">
  <h1>About</h1>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ultrices venenatis mauris, non mollis erat tincidunt eu. Morbi et sapien sed odio euismod accumsan. Morbi vulputate magna ut mi interdum, vitae auctor massa congue. Donec ut porttitor velit, ut eleifend risus. Nulla facilisi. Nullam laoreet imperdiet urna et laoreet. Donec nunc est, pharetra non sodales bibendum, volutpat et nisl. Donec luctus sit amet nisl eu semper. Curabitur vitae diam non nisl malesuada efficitur. Mauris at elementum erat, in cursus orci. Suspendisse potenti. Ut eu urna pretium, lobortis nunc id, posuere ante. Nam in fermentum orci. Aenean vel eros eu nibh finibus finibus.</p>
  <p>

<?php echo e(link_to_route('register_path','Sign Up!', null, ['class' => 'btn btn-lg btn-primary'])); ?>

<!--
  <a class="btn btn-primary btn-lg" href="#" role="button">Sign U p!</a>
-->
  </p>

</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>