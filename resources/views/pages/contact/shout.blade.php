@extends('layouts.default')
    
@section('content')
<div class="row">
<div class="col-md-6">

<h1>Give Shout!</h1>

<p>
We are always excited to talk to new people. Feel free to give us a shout.
</p>





 @include('layouts.errors')




{{ Form::open(array('route' => 'sendmail', 'class' => 'form')) }}

<div class="form-group">
{{ Form::label('contactName','Name:') }}
{{ Form::text('contactName', null, 
			   array( 
              'class'=>'form-control', 
              'placeholder'=>'Your name'))}}
</div>

<div class="form-group">
{{ Form::label('contactEmail','Email:')}}
{{ Form::text('contactEmail', null,  array(
              'class'=>'form-control', 
              'placeholder'=>'Your email address'))}}
</div>

<div class="form-group">
{{ Form::label('contactMessage','Message:')}}
{{ Form::textarea('contactMessage', null,  array(
              'class'=>'form-control', 
       
              'placeholder'=>'Your message'))}}
</div>


<!--
<div class="form-group">
{!! Recaptcha::render() !!}
</div>

-->




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


</div>
</div>
@stop