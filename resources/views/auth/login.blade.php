@extends('layouts.app')
<head>
<title>Login</title>
   
</head>
<body>
@section('content')
<div class="container">
@if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div><br />
      @endif
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="kontak_hp" class="col-md-4 col-form-label text-md-right">{{ __('Kontak') }}</label>

                            <div class="col-md-6">
                                <input id="kontak_hp" type="tel" class="form-control @error('kontak_hp') is-invalid @enderror" name="kontak_hp" value="{{ old('kontak_hp') }}" required autocomplete="kontak_hp" autofocus>

                                @error('kontak_hp')
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
                            <div class="offset-md-4 col-md-6">
                            </div>
                        </div>

                       

                        <div class="form-group row">
                            <label for="captcha" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Captcha') }}</label>

                            <div class="col-md-6">
                            <img src="{{captcha_src('flat')}}" onclick="this.src='/captcha/flat?'+Math.random()" id="captchaCode" alt="" class="captcha">
                   
                                <a rel="nofollow" href="javascript:;" onclick="document.getElementById('captchaCode').src='captcha/flat?'+Math.random()" class="refresh">
                                                        
                                    <button type="button" class="btn btn-info btn-refresh">Refresh</button>
                                </a>
                                <input id="captcha" type="text" class="form-control @error('captcha') is-invalid @enderror" name="captcha" required>

                                @error('captcha')
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
                        <div class="row">
                        <div class="col-md-4"></div>
                            <div class="form-group col-md-4">
                            

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
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

@endsection

@section('scripts')
<script type="text/javascript">
    $('#regen-captcha').on('click', function(e){
    e.preventDefault();

    var anchor = $(this);
    var captcha = anchor.prev('img');

    $.ajax((
        type: "GET",
        url: "/ajax_regen_captcha",
    )).done(function(msg){
        captcha.attr('src',msg);
    });
    });
</script>
@endsection 
