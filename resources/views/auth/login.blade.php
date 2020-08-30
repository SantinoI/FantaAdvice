@extends('layouts.app')


@section('content')
    <div class="login-dark rounded-lg">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="text-center font-mono text-lg">
                To get started. <br> Login or create an Account
            </div>
            
            <div class="illustration"><i class="icon ion-ios-locked-outline"></i></div>
            <div class="form-group"><input class="form-control @error('email') is-invalid @enderror" type="email" name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email" autofocus></div>
            <div class="form-group"><input class="form-control  @error('password') is-invalid @enderror" type="password" name="password" placeholder="Password" name="password" required autocomplete="current-password"></div>

            <div class="form-group">

                <div class="flex justify-between">
                    <button class=" btn btn-outline-primary" type="submit">Login</button>
                    <button type="button " class=" hover:text-white btn btn-outline-primary ">
                    <a class=" hover:no-underline hover:text-white "href="{{ route('register') }}">
                        Register
                    </a>
                </button>
                </div>
                
                <hr>
                <div class="text-center  font-mono text-lg">
                    Sign in with Google
                
                    <a href="{{ url('auth/google') }}" class="flex justify-center " style="margin-top: 20px;">
                        <span class="iconify" data-icon="ant-design:google-circle-filled" data-inline="false" style="color: #2980EF;" data-width="50" data-height="50"></span>
                    </a> 
                </div>
            </div> 

        </form>
    
    </div>

@endsection

<!--
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Laravel 6 - Login with Google Account Example - ItSolutionStuuf.com</div>
  
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
  
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
  
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
  
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
   
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
  
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
  
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
  
                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
  
                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>
  
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
  
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                                  
                                <a href="{{ url('auth/google') }}" style="margin-top: 20px;" class="btn btn-lg btn-success btn-block">
                                  <strong>Login With Google</strong>
                                </a> 
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
-->


