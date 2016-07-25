@extends('layouts.posts')

@section('header')
 <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('../img/posts-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="page-heading">
                       
                    </div>
                </div>
            </div>
        </div>
    </header>

    @stop

@section('content')
<h1>All Posts</h1>

	@foreach($posts as $post)
	<div>
		{{ $post->title }}
	</div>
	@endforeach

@stop