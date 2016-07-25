@extends('layouts.mail')
    
@section('content')


<div class="row">

<p>
Dear {{ $name }},
</p>

<p>
Thank you for submitting your message at {{ $OrganziationName }}. <br>
We appreciate your time and effort writing to us.<br>
I will try to get back to you within 24 hours!<br>

</p>

<p>

Find below message copy submitted to us.
<br>
========================================
<br>
</p>

<p>
Name: {{ $name }}
</p>

<p>
{{ $email }}
</p>

<p>
{{ $phone }}
</p>

<p>
{{ $user_message }}
</p>


<p>
========================================
</p>

<p>
Best regards,<br>
{{ $OrganziationSupport }}<br>
{{ $OrganziationName }}<br>
{{ $OrganziationWebsite }}

</p>
</div>




@stop