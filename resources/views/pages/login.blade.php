@extends('layouts.main')
@section('content')
  <div class="login">
   <div class="container">
    <form class="col-lg-4 mx-auto" method="POST" action="{{ route('login') }}">
      @csrf 
      <h3 class="mb-3">Login</h3>
      <div class="mx-auto mb-3">
        <label class="form-label" for="" :value="__('Email')">Email</label>
        <input class="form-control" id="email" type="email" name="email" :value="old('email')" required autofocus>
      </div>
      <div class="mx-auto mb-3">
        <label class="form-label" for="password" :value="__('Password')">Password</label>
        <input id="password" class="form-control" type="password"
        name="password"
        required autocomplete="current-password">
      </div>
      <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="remember_me" name="remember">
    <label class="form-check-label" for="remember_me">{{ __('Remember me') }}</label>
  </div>
  <button class="btn btn-primary" type="submit">{{ __('Log in') }}</button>
    @if (Route::has('password.request'))
    <a class="mt-3 login__link" href="{{ route('password.request') }}">
        {{ __('Forgot your password?') }}
    </a>
    @endif
    </form>
    </div>

  </div>
@endsection
