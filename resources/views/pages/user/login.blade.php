@extends('layouts.default')
    
@section('content')
<div class="row">
<div class="col-md-6">
<h1>Login</h1>


 @include('layouts.errors')

{{ Form::open([ 'route' => 'user_login' ]) }}

<div class="form-group">
{{ Form::label('username','Username:') }}
{{ Form::text('username', null, array('required', 
              'class'=>'form-control', 
              'placeholder'=>'Email address'))}}
</div>

<div class="form-group">
{{ Form::label('password','Password:')}}
{{ Form::password('password', array('required', 
              'class'=>'form-control', 
              'placeholder'=>'Password'))}}
</div>


<div class="form-group">
{{ Form::submit('Sign in', ['class' => 'btn btn-primary' ])}}
</div>

{{ Form::close() }}


 

</div>
</div>

@stop