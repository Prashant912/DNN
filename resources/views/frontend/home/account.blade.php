
@extends('frontend.layouts.app')

@section('content')


 <div class="inner-page-header">
        <div class="banner">
            <img src="{{asset('assets1/images/banner/3.jpg')}}" alt="Banner">
        </div>
        <div class="banner-text">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="header-page-locator">
                            <ul>
                                <li><a href="index.html">Home <i class="fa fa-compress" aria-hidden="true"></i> </a> Account</li>
                            </ul>
                        </div>
                        <div class="header-page-title">
                            <h1>Account</h1>
                        </div>
                        <div class="header-page-subtitle">
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                                <br>alteration in some form, by injected humou</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Inner Page Header serction end here -->
 
   <!-- Blog Page Start Here -->
    <div class="account-page-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="border">

                         {!! Form::open(['method' => 'POST','route' => ['front-login'], 'class'=>'form form-horizontal','enctype'=>'multipart/form-data']) !!}

                            <fieldset>
                                <div class="row">
                                    <h3>Login</h3>
                                    
                                        @if(Session::has('message'))
                                        <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                                        @endif

                                     <div class="form-group">
                                        <label>Email address *</label>
                                        {!! Form::text('email', null, array('placeholder' => 'email','class' => 'form-control')) !!}
                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                    </div>   

                                    <div class="form-group">
                                        <label>Password *</label>

                                        {!! Form::password('password', null, array('placeholder' => 'email','class' => 'form-control')) !!}

                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                    </div>

                                    <div class="form-group btn-register">
                                        <span class="lost-pass">Lost your password?</span>
                                        <button class="btn-send" type="submit">Login</button>
                                        <span class="checkbox">
                                          <label>
                                            <input type="checkbox" value=""><span class="cr"><i class="fa cr-icon fa-check" aria-hidden="true"></i></span>Remember Me
                                          </label>
                                        </span>
                                        <span class="login">Or you can login with</span>
                                        <ul class="share-link">
                                            <li class="facebook"><a href="#"> <i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a></li>
                                            <li class="twitter"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</a></li>
                                            <li class="google"><a href="#"><i class="fa fa-google" aria-hidden="true"></i> Google</a></li>
                                        </ul>
                                    </div>
                                </div>  

                            </fieldset>
                       {!! Form::close() !!}
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="border register">
                       {!! Form::open(['method' => 'POST','route' => ['front-register'], 'class'=>'form form-horizontal','enctype'=>'multipart/form-data']) !!}
                         @csrf
                            <fieldset>
                                <div class="row">
                                    <h3>Register</h3>

                                        @if(Session::has('message'))
                                        <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                                        @endif


                                   {!! Form::hidden('id', '3', array('class' => 'form-control')) !!}


                                   <div class="form-group">
                                        <label>User Name *</label>
                                        {!! Form::text('name', null, array('placeholder' => 'username','class' => 'form-control')) !!}

                                                @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                    </div> 

                                    <div class="form-group">
                                        <label>Email address *</label>
                                        {!! Form::email('email', null, array('placeholder' => 'email','class' => 'form-control')) !!}

                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                    </div>  

                                    <div class="form-group">
                                        <label>Password *</label>

                                        {!! Form::password('password', null, array('placeholder' => 'email','class' => 'form-control')) !!}

                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                    </div>


                                    <div class="form-group">
                                        <label>Confirm Password</label>

                                        {!! Form::password('password_confirmation', null, array('placeholder' => 'email','class' => 'form-control')) !!}
                                    </div>
                                    
                                    <div class="form-group btn-register">
                                        <button class="btn-send" type="submit">Register</button>
                                    </div>
                                </div>     
                            </fieldset>
                       {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

 @endsection   