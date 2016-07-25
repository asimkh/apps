@extends('layouts.mail')
    
@section('content')


<div class="row">

<p>
Dear {{ $name }},
</p>

<p>
Thank you for signup at {{ $OrganziationName }}. <br>

Find below message copy submitted to us.
<br>
========================================
<br>
</p>

<p>
Name: {{ $name }}
</p>

<p>
Email: {{ $email }}
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