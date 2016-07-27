@extends('layouts.theme')
    

    @section('header')
 <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('img/signup-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                   <div class="page-heading">
                        <h2>Get Hooked Up</h2>
                        <!--<h2 class="subheading">Problems look mighty small from 150 miles up</h2>-->
                      <span class="subheading">Sign up for membership and newsletters to get latest updates.</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
@stop
    

@section('content')
    <div class="row">
     <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                   
                     {{ Form::open([ url('register') ]) }}

                        {{ csrf_field() }}


                         <div class="row control-group">
       <div class="form-group col-xs-12 floating-label-form-group controls {{ $errors->has('name') ? ' has-error' : '' }}">
      {{ Form::label('name','Name:') }}
      {{ Form::text('name', null,  array( 
                    'class'=>'form-control', 
                    'placeholder'=>'Your Name',
              'value'=>'{ old("name")}'
              ))}}




                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                         <div class="row control-group">
       <div class="form-group col-xs-12 floating-label-form-group controls {{ $errors->has('email') ? ' has-error' : '' }}">
      {{ Form::label('email','Email:')}}
      {{ Form::text('email', null,  array( 
                    'class'=>'form-control', 
                    'placeholder'=>'Email address',
              'value'=>'{ old("email")}'))}}



                        
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>





       <div class="row control-group">
       <div class="form-group col-xs-12 floating-label-form-group controls {{ $errors->has('password') ? ' has-error' : '' }}">
      {{ Form::label('password','Password:')}}
      {{ Form::password ('password', array( 
                    'class'=>'form-control', 
                    'placeholder'=>'Your password'))}}




                       

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                         <div class="row control-group">
       <div class="form-group col-xs-12 floating-label-form-group controls {{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
      {{ Form::label('password_confirmation','Password Confirmation:')}}
      {{ Form::password ('password_confirmation', array( 
                    'class'=>'form-control', 
                    'placeholder'=>'Re-type password'))}}



                        

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <br>
     <div id="success"></div>
      <div class="row control-group">
<div class="form-group col-xs-12">
      {{ Form::submit('Register', ['class' => 'btn btn-default' ])}}
      </div>
      </div>



                      
                    </form>
                </div>
            </div>

@endsection
