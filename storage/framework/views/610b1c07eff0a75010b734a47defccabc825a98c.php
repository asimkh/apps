<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>حـاضــر | HAZZIR </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/4.10.1/bootstrap-social.css" rel="stylesheet" >

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
    

    <!-- fb -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta property="og:title" content="Best place to find a caretaker, car washer or find a service professional." />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://www.hazzir.com" />
    <meta property="og:image" content="http://www.hazzir.com/images/hazzir_logo.jpg" /> 
    <meta property="og:description" content="Hire service provider for short term basis." />   
    <meta property="og:site_name" content="HAZZIR" />
    <!-- fb -->


    <!--<link rel="icon" href="../../favicon.ico">-->
  <!--  <link rel="stylesheet" href="<?php echo e(asset("css/all.css")); ?>>
-->

  

    <link rel="stylesheet" type="text/css" href="<?php echo e(elixir('css/app.css')); ?>">

    <?php echo $__env->make('layouts.fbscripts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </head>
    
    <body>

   

    <div class="container">
    	<?php echo $__env->yieldContent('content'); ?>
    </div>
    
     <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
     <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

     <!--<?php echo $__env->make('layouts.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>-->
      
   
    </body>
</html>
