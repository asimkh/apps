@extends('layouts.default')
    
@section('content')

<div class="row">
<div class="col-md-6">
      <h1>Register</h1>

 @include('layouts.errors')
     

      {{ Form::open([ 'route' => 'register_path' ]) }}



      <div class="form-group">
      {{ Form::label('username','Username:') }}
      {{ Form::text('username', null,  array( 
                    'class'=>'form-control', 
                    'placeholder'=>'Your Name'))}}
      </div>

      <div class="form-group">
      {{ Form::label('email','Email:')}}
      {{ Form::text('email', null,  array( 
                    'class'=>'form-control', 
                    'placeholder'=>'Email address'))}}
      </div>

      <div class="form-group">
      {{ Form::label('password','Password:')}}
      {{ Form::password ('password', array( 
                    'class'=>'form-control', 
                    'placeholder'=>'Your password'))}}
      </div>

      <div class="form-group">
      {{ Form::label('password_confirmation','Password Confirmation:')}}
      {{ Form::password ('password_confirmation', array( 
                    'class'=>'form-control', 
                    'placeholder'=>'Re-type password'))}}
      </div>


<!--
      <div class="form-group">
   
       {!! Recaptcha::render() !!}
    
      </div>
      -->

      <div class="form-group">
      {{ Form::submit('Sign Up', ['class' => 'btn btn-primary' ])}}
      </div>

      {{ Form::close() }}
  </div>
</div>

@stop