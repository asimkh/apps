<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>حـاضــر | HAZZIR </title>
    <link rel="stylesheet" type="text/css" href="{{ elixir('css/all.css')}}">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    

    <!-- fb -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta property="og:title" content="Best place to find a caretaker, car washer or find a service professional." />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://www.hazzir.com" />
    <meta property="og:image" content="http://www.hazzir.com/images/hazzir_logo.jpg" /> 
    <meta property="og:description" content="Hire service provider for short term basis." />   
    <meta property="og:site_name" content="HAZZIR" />
    <!-- fb -->



    @include('layouts.fbscripts')
    </head>
    
    <body>

   

    <div class="container">
    	@yield('content')
    </div>
    
   <script src="{{ asset('/js/all.js') }}"></script>

     <!--@include('layouts.footer')-->
      
   
    </body>
</html>
