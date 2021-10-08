@extends('layouts.auth')

@section('content')
<!-- Middle Content Start -->
<div class="vd_content-wrapper">
      <div class="vd_container">
        <div class="vd_content clearfix">
          <div class="vd_content-section clearfix">
            <div class="vd_login-page">
              <div class="heading clearfix">
                <div class="logo">
                  <h2 class="mgbt-xs-20"><img src="img/logo.png" alt="logo"></h2>
                </div>
                <h4 class="text-center font-semibold vd_grey">LOGIN TO YOUR ACCOUNT</h4>
              </div>
              <div class="panel widget">
                <div class="panel-body">
                  <div class="login-icon entypo-icon"> <i class="icon-key"></i> </div>
                  <form method="POST" class="form-horizontal"  role="form" action="{{ route('login') }}">
                        @csrf
                                    
                        <div class="form-group  mgbt-xs-20">
                            <div class="col-md-12">
                                <div class="label-wrapper sr-only">
                                    <label class="control-label" for="email">{{ __('E-Mail Address') }}</label>
                                </div>
                                <div class="vd_input-wrapper" id="email-input-wrapper"> <span class="menu-icon"> <i class="fa fa-envelope"></i> </span>
                                    <input type="email" placeholder="Email" id="email" class="form-control required @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" name="email" required>
                                </div>
                                @error('email')
                                    <p class="vd_red">
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    </p>
                                @enderror
                                <div class="label-wrapper">
                                    <label class="control-label sr-only" for="password">{{ __('Password') }}</label>
                                </div>
                                <div class="vd_input-wrapper" id="password-input-wrapper" > <span class="menu-icon"> <i class="fa fa-lock"></i> </span>
                                    <input type="password" placeholder="Password" id="password"  class="form-control required @error('password') is-invalid @enderror" name="password" autocomplete="current-password"  required>
                                </div>
                                @error('password')
                                    <p class="vd_red">
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    </p>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12 text-center mgbt-xs-5">
                                <button class="btn vd_bg-green vd_white width-100" type="submit" id="login-submit">{{ __('Login') }}</button>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-xs-6">
                                        <div class="vd_checkbox">
                                            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                            <label for="checkbox-1"> {{ __('Remember Me') }}</label>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 text-right">
                                        <div class="">  
                                            @if (Route::has('password.request'))
                                                <a href="{{ route('password.request') }}">
                                                    {{ __('Forgot Your Password?') }}
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                  </form>
                </div>
              </div>
              <!-- Panel Widget -->
              <div class="register-panel text-center font-semibold"> <a href="{{ route('register')}}"> CREATE AN ACCOUNT<span class="menu-icon"><i class="fa fa-angle-double-right fa-fw"></i></span></a> </div>
            </div>
            <!-- vd_login-page --> 
          </div>
          <!-- .vd_content-section --> 
        </div>
        <!-- .vd_content --> 
      </div>
      <!-- .vd_container --> 
    </div>
    <!-- .vd_content-wrapper --> 
    <!-- Middle Content End --> 


@endsection
