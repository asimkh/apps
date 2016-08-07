@extends('layouts.theme')

@section('header')
 <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('img/profile-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="page-heading">
                        <h2>Profile</h2>
                        <!--<hr class="small">-->
                        <span class="subheading">User details</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    @stop

    
@section('content')

@if(Session::has('message'))
    <div class="alert alert-info">
      {{Session::get('message')}}
    </div>
@endif


  <div class="row">
   <div class="col-lg-8 col-lg-offset-3 col-md-10">
    
      <div class=" panel ">
        <div class="panel-body">
          <div class="row">
            <div class="col-xs-12 col-sm-4 text-center">
              <img src="{{ Auth::user()->profile['photo']}}" alt="" class="center-block  img-thumbnail img-responsive">
              
            </div>
            <!--/col--> 
            <div class="col-xs-12 col-sm-8">
              <h2>{{ link_to('http://facebook.com/'. Auth::user()->facebook_user_id, Auth::user()->firstname .' '.Auth::user()->lastname,['target' => '_blank'])}}</h2>
              <p>
               
                
                <small>{{Auth::user()->profile['about']}} </small><br>
                <small>{{Auth::user()->profile['location']}} </small><br>
                <small>{{Auth::user()->email}} </small><br>

             
              

               
                <small></small> <br>
              

              </p>
             



              
            </div>
            <!--/col-->          
            <!--<div class="clearfix"></div>
            <div class="col-xs-12 col-sm-4">
              <h2><strong> 20,7K </strong></h2>
              <p><small>Followers</small></p>
              <button class="btn btn-success btn-block"><span class="fa fa-plus-circle"></span> Follow </button>
            </div>-->
            <!--/col-->
            <!--<div class="col-xs-12 col-sm-4">
              <h2><strong>245</strong></h2>
              <p><small>Following</small></p>
              <button class="btn btn-info btn-block"><span class="fa fa-user"></span> View Profile </button>
            </div>-->
            <!--/col-->
            <!--<div class="col-xs-12 col-sm-4">
              <h2><strong>43</strong></h2>
              <p><small>Snippets</small></p>
              <button type="button" class="btn btn-primary btn-block"><span class="fa fa-gear"></span> Options </button>  
            </div>-->
            <!--/col-->
          </div>
          <!--/row-->
        </div>
        <!--/panel-body-->
      </div>
      <!--/panel-->
    </div>
    <!--/col--> 
  </div>
  <!--/row--> 

<!--/container-->

<!--
<div class="row">
<table class="table table-bordered">
<caption class="text-success"><strong>User Login Data</strong></caption>
<thead class="text-primary">
	<tr>
	<th>Name</th>
	<th>Email</th>
	<th>Avatar</th>
	</tr>

</thead>

<tbody class="text-warning">
	<tr>
	<th>{{Auth::user()->firstname}} {{Auth::user()->lastname}}
<br>

{{Auth::user()->about}}</th>
	</th>
	<th>{{Auth::user()->email}}</th>
	<th><img src="{{ Auth::user()->photo}}" height="62" width="100" /></th>
	</tr>
	

</tbody>

</table>
</div>
-->



@stop