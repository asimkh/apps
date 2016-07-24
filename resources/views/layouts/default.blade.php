<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>حـاضــر | HAZZIR </title>



    <!-- fb -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta property="og:title" content="Best place to find a caretaker, car washer or find a service professional." />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://www.hazzir.com" />
    <meta property="og:image" content="http://www.hazzir.com/images/hazzir_logo.jpg" /> 
    <meta property="og:description" content="Hire service provider for short term basis." />   
    <meta property="og:site_name" content="HAZZIR" />
    <!-- fb -->


   
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/4.10.1/bootstrap-social.css" rel="stylesheet" >

    
    


    <!-- Loading CSS -->
    <link rel="stylesheet" type="text/css" href="{{ elixir('css/all.css')}}">


    </head>
    
    <body>

    @include('layouts.partials.nav')

    <div class="container">
    	@yield('content')
    </div>
    

     <!-- Loading JS Scrips -->
     <script src="{{ asset('/js/all.js') }}"></script>
     
     @include('layouts.footer')
      
   
    </body>
</html>
