@extends('layouts.theme')

@section('header')
 <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('img/login-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                   <div class="page-heading">
                        <h2>Together like before</h2>
                        <span class="subheading">
                       This area is for Members only, please login.</span>
                        <!--<span class="meta">Posted by <a href="#">Start Bootstrap</a> on August 24, 2014</span>
                        -->
                    </div>
                </div>
            </div>
        </div>
    </header>
@stop
    
@section('content')
<div class="row">
 <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
<!--<h1>Login</h1>-->


 @include('layouts.errors')

{{ Form::open([ 'route' => 'user_login' ]) }}

 <div class="row control-group">
  <div class="form-group col-xs-12 floating-label-form-group controls">
{{ Form::label('username','Username:') }}
{{ Form::text('username', null, array('required', 
              'class'=>'form-control', 
              'placeholder'=>'Email address'))}}
</div>
</div>

 <div class="row control-group">

 <div class="form-group col-xs-12 floating-label-form-group controls">
{{ Form::label('password','Password:')}}
{{ Form::password('password', array('required', 
              'class'=>'form-control', 
              'placeholder'=>'Password'))}}
</div>
</div>

<br>

 <div id="success"></div>
 <div class="row control-group">
<div class="form-group col-xs-12">

{{ Form::submit('Sign in', ['class' => 'btn btn-default' ])}}

</div>
</div>

{{ Form::close() }}

<br><br>
<p>
<!--
OR
</p>
{{ link_to_route('user_login','facebook login', null, ['class' => 'btn btn-primary']) }}
-->

<p>
What is a membership area?
<br><br>
A membership site has specific areas for members. Generally membersship is free to join the site and become a part for our community. 
</p>
</div>



</div>

@stop