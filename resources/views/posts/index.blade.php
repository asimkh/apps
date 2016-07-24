@extends('layouts.fb')
@section('content')
<h1>All Posts</h1>

	@foreach($posts as $post)
	<div>
		{{ $post->title }}
	</div>
	@endforeach

@stop