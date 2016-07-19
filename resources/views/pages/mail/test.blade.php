@extends('layouts.default')
    
@section('content')

@if(Session::has('message'))
    <div class="alert alert-info">
      {{Session::get('message')}}
    </div>
@endif



<div class="row">
<table class="table table-bordered">
<caption class="text-success"><strong>User Login Data</strong></caption>
<thead class="text-primary">
	<tr>
	<th>Firstname</th>
	<th>Lastname</th>
	<th>Status</th>
	</tr>

</thead>

<tbody class="text-warning">
	<tr>
	<th>first - name - 1</th>
	<th>last - name - 1</th>
	<th>active - 1</th>
	</tr>
	<tr>
	<th>first - name - 2</th>
	<th>last - name - 2</th>
	<th>active - 2</th>
	</tr>
	<tr>
	<th>first - name - 3</th>
	<th>last - name - 3</th>
	<th>active - 3</th>
	</tr>

</tbody>

</table>
</div>




@stop