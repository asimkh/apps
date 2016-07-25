@extends('layouts.theme')

@section('header')
 <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('../img/post-bg.jpg')">
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


	
	<div>
		{{ $post->title }}
	</div>
	

@stop