<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>حـاضــر | HAZZIR </title>
   
   {{ Html::style('css/all.css', array(), true) }}


    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    





    @include('layouts.fbscripts')
    </head>
    
    <body>

   

    <div class="container">
    	@yield('content')
    </div>
    
   {{ Html::script('/js/all.js', array(), true) }}

    
      
   
    </body>
</html>
