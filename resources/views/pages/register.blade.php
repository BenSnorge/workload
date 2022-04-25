@extends('layouts.main')
@section('content')
  <div class="login">
   <div class="container">
    <form class="col-lg-4 mx-auto" method="POST" action="{{ route('register') }}">
            @csrf
      @csrf 
      <h3 class="mb-3">Register</h3>
      <div class="mx-auto mb-3">
        <label class="form-label" for="" :value="__('Name')">Name</label>
        <input class="form-control" id="name" type="text" name="name">
      </div>
      <div class="mx-auto mb-3">
        <label class="form-label" for="" :value="__('Email')">Email</label>
        <input class="form-control" id="email" type="email" name="email">
      </div>
      
      <div class="mx-auto mb-3">
        <label class="form-label" for="password" :value="__('Password')">Password</label>
        <input id="password" class="form-control" type="password"
        name="password"
        required autocomplete="new-password" >
      </div>
      <div class="mx-auto mb-3">
        <label class="form-label" for="password_confirmation" :value="__('Confirm Password')">Confirm Password</label>
        <input id="password_confirmation" class="form-control" type="password"
        name="password_confirmation" requiredtype="password">
      </div>
  
  <button class="btn btn-primary" type="submit">{{ __('Register') }}</button>

    </form>
    </div>

  </div>
@endsection
