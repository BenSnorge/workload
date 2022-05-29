@extends('layouts.main')
@section('content')
  <div class="login">
   <div class="container">
    <form class="col-lg-4 mx-auto" method="POST" action="{{ route('register') }}">
            @csrf
      @csrf 
      <h3 class="mb-3">Register</h3>
      <div class="mx-auto mb-3">
        <label class="form-label" for="" value="name">Name</label>
        <input class="form-control" id="fname" type="text" name="name">
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





{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
 --}}