<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>حـاضــر | HAZZIR </title>
    </head>
    
    <body>

    <div class="container">
    	<?php echo $__env->yieldContent('content'); ?>
    </div>
    
     <?php echo $__env->make('layouts.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      
   
    </body>
</html>
