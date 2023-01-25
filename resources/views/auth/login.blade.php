{{-- @extends('layouts.app') --}}
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Retiros Lilipink & Yoi') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<style>
  .gradient-custom-2{
    background: rgb(232,81,153);
    background: linear-gradient(90deg, rgba(232,81,153,1) 0%, rgba(3,168,162,1) 100%);
  }
</style>
<body>
    <div id="app">
        <section class="gradient-form" style="background-color: #f8fafc;" >
            <div class="container py-5" >
              <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-10">
                  <div class="card rounded-3 text-black">
                    <div class="row g-0">
                      <div class="col-lg-6">
                        <div class="card-body p-md-5 mx-md-4">
          
                          <div class="text-center">
                            <img src="https://demodaoutlet.com/wp-content/uploads/2019/05/lili-pink.jpg"
                              style="width: 185px;" alt="logo">
                            {{-- <h4 class="mt-1 mb-5 pb-1">Retiros Lilipink & Yoi</h4> --}}
                          </div>
          
                          <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <p>Por favor ingresa con tus credenciales</p>
          
                            <div class="form-outline mb-4">
                              <input type="email" id="form2Example11"  class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus />
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                              <label class="form-label" for="form2Example11">Usuario</label>
                            </div>
          
                            <div class="form-outline mb-4">
                              <input id="form2Example22" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" />
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                              <label class="form-label" for="form2Example22">Contraseña</label>
                            </div>
          
                            <div class="text-center pt-1 mb-5 pb-1" >
                              <button class="btn btn-primary col-12 gradient-custom-2 mb-3" type="submit">{{ __('Login') }}</button>
                              {{-- <a class="text-muted" href="#!">Forgot password?</a> --}}
                            </div>
          
                            {{-- <div class="d-flex align-items-center justify-content-center pb-4">
                              <p class="mb-0 me-2">Don't have an account?</p>
                              <button type="button" class="btn btn-outline-danger">Create new</button>
                            </div> --}}
          
                          </form>
          
                        </div>
                      </div>
                      <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                        <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                          <h4 class="mb-4">Trabajamos con el corazón todos los días</h4>
                          <p class="mb-0">Nos comprometemos con la FELICIDAD de las 
                            mujeres que piensan en comodidad y que les gusta estar en 
                            tendencia, creando y comercializando productos a precios
                             asequibles para demostrar que no es necesario invertir 
                             tanto para tener lo mejor de la moda en tus manos.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
    </div> 
{{-- @section('content') --}}
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
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
</div> --}}
{{-- @endsection --}}
</body>
</html>
