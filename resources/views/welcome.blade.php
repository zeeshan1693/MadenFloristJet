<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    </head>
    <body>
        
        <div >
            <div class="col-md-6" style="background-image:  url({{ asset('assets/admin-img/flower-bg.JPG') }}); background-repeat: no-repeat;height: 100vh;background-size: cover;"></div>
            <div class="col-md-6 align-middle">
                <div class="row">
                    <div class="login-panel panel panel-default" style="margin-top: 20%; margin-left: 15px; margin-right: 15px;">
                        <div class="text-center"><img src="{{ asset('assets/admin-img/maden-logo.JPG') }}"> </div>
                        <div style="background-color: white;" class="panel-heading">
                            <h3 class="panel-title"> Sign In</h3>
                        </div>
                        <div class="panel-body">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <fieldset>
                                    <div class="form-group">
                                        <label for="email">{{ __('Email Address') }}</label>
                                        <input class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
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
    
                                    <div class="text-right">
                                        <button type="submit" class="btn btn-lg btn-secondary ">
                                            {{ __('Login') }}
                                        </button>
                                    </div>
                                    {{--   @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif --}}
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
    </body>
</html>
