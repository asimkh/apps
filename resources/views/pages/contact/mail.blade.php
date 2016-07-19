@extends('layouts.mail')
    
@section('content')


<div class="row">
<p>
Name: {{ $name }}
</p>

<p>
{{ $email }}
</p>

<p>
{{ $user_message }}
</p>
</div>




@stop