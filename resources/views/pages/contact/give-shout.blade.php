@extends('layouts.default')
    
@section('content')


<h1>Give Shout!</h1>

<p>
We are always excited to talk to new people. Feel free to give us a shout.
</p>





@if($errors->any())
    <div class="alert alert-danger">
     <h3>Uh Oh!</h3>
      <ul>
    @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
</ul>
    </div>
@endif



{{ Form::open(array('route' => 'submit_shout', 'class' => 'form')) }}

<div class="form-group">
{{ Form::label('contactName','Name:') }}
{{ Form::text('contactName', null, 
			   array('required', 
              'class'=>'form-control', 
              'placeholder'=>'Your name'))}}
</div>

<div class="form-group">
{{ Form::label('contactEmail','Email:')}}
{{ Form::text('contactEmail', null,  array('required', 
              'class'=>'form-control', 
              'placeholder'=>'Your email address'))}}
</div>

<div class="form-group">
{{ Form::label('contactMessage','Message:')}}
{{ Form::textarea('contactMessage', null,  array('required', 
              'class'=>'form-control', 
              'placeholder'=>'Your message'))}}
</div>

<div class="form-group">
{{ Form::submit('Submit', ['class' => 'btn btn-primary' ])}}
</div>

{{ Form::close() }}

<p>
Please keep these guidelines in mind:
</p>



<dl>
  <dt>Explain yourself. </dt>
  <dd>What were you doing when you encountered a problem? If you’re confused or unhappy about something, please explain why.</dd>
</dl>

<dl>
  <dt>Be specific.</dt>
  <dd>Provide a URL, a very detailed description, or a screenshot of the error so we know exactly what you’re talking about and don’t have to ask for clarification.</dd>
</dl>



@stop