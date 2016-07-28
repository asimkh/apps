
@extends('layouts.mail')
    
@section('content')


<div class="row">

<p>
Click here to reset your password: <a href="{{ $link = url('password/reset', $token).'?email='.urlencode($user->getEmailForPasswordReset()) }}"> {{ $link }} </a>
</p>



@stop
