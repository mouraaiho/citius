@extends('layouts.auth')

@section('content')
<div class="vd_content-wrapper">
    <div class="vd_container">
        <div class="vd_content clearfix">               
            <div class="vd_content-section clearfix">  

            <div class="vd_login-page">     
            	<div class="heading clearfix">
                	<div class="logo"><h2 class="mgbt-xs-20"><img src="{{ asset('img/logo.png') }}" alt="logo"></h2></div>
                    <h4 class="text-center font-semibold vd_grey">RESET PASSWORD FORM</h4>                     
                </div>
               
                <div class="panel widget">
                    <div class="panel-body">
                          <div class="login-icon">
                                <i class="fa fa-lock"></i>
                          </div>      
                          @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                        <form class="form-horizontal"  role="form" method="post"  action="{{ route('password.email') }}">
                          @csrf
                             <div class="form-group mgbt-xs-20">
                                 <div class="col-md-12">
                                 	<p class="text-center"><strong>To reset your password, enter the email address you use to sign in to Citius.</strong> </p>
                                    <div class="vd_input-wrapper" id="email-input-wrapper">
                                        <span class="menu-icon">
                                            <i class="fa fa-envelope"></i>
                                        </span>
                                        <input type="email" placeholder="Email" class="form-control required @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" >
                                    </div>   
                                    @error('email')
                                        <p class="vd_red">
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        </p>
                                    @enderror
                                  </div>                            
                            </div>                                                                          
                            <div class="form-group" id="submit-password-wrapper">
                              <div class="col-md-12 text-center mgbt-xs-5">
                                  <button class="btn vd_bg-green vd_white width-100" type="submit" id="submit-password" name="submit-password">Send me my password</button>   
                              </div>
                            </div>
                          </form>
                    </div>
                </div> <!-- Panel Widget --> 
                <div class="register-panel text-center font-semibold">	
                	<a href="{{ route('login') }}">LOGIN</a> <span class="mgr-10 mgl-10">|</span>  	
                    <a href="{{ route('register') }}">CREATE AN ACCOUNT</a>  	
                </div>
                </div> <!-- vd_login-page -->                                    
            </div>   
          <!-- .vd_content-section --> 
        </div>
        <!-- .vd_content --> 
      </div>
      <!-- .vd_container --> 
    </div>
    <!-- .vd_content-wrapper --> 
@endsection
