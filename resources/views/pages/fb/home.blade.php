@extends('layouts.fb')
    
@section('content')

@if(Session::has('message'))
    <div class="alert alert-info">
      {{Session::get('message')}}
    </div>
@endif



 <div class="container">
      <div class="page-header">
        <h1>Welcome To FB APP</h1>
      </div>
      <p class="lead">Pin a fixed-height footer to the bottom of the viewport in desktop browsers with this custom HTML and CSS. A fixed navbar has been added with <code>padding-top: 60px;</code> on the <code>body > .container</code>.</p>
      <h1 id="fb-welcome"></h1>
      
    </div>




@stop