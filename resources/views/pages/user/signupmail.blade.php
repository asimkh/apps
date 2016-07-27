@extends('layouts.mail')
    
@section('content')


<div class="row">

<p>
Dear {{ $name }},
</p>

<p>
Thank you for signup at {{ $OrganziationName }}. <br>

Find below details are submitted to us.
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
{{ $OrganziationWebsite }}<br>
</p>
<p>
Follow Us<br>
{{ $OrganziationFacebook }}<br>
{{ $OrganziationTwitter }}<br>
</p>

</div>




@stop