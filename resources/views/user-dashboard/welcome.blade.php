@extends('layouts.user')
@section('content')
<h1>Welcome {{ Auth::user()->name }}</h1>


<div class="container">
      <div class="row classes__content">
        @foreach ($plans as $plan)
        <div class="col-md-6">
          <div class="card classes__card">
          <img loading="lazy" src="" class="card-img-top" alt="">
          <div class="card-body">
          <h5 class="card-title">Subscribe to the {{ $plan->name }}</h5>
          <p class="card-text">
          ${{ $plan->price }}
          </p>
          <a href="/pages{{ $plan->abbreviation }}" class="btn btn-outline-dark">Subscribe</a>
            </div>
          </div>
        </div>
        @endforeach
        {{-- <div class="col-md-6">
          <div class="card classes__card">
          <img loading="lazy" src="" class="card-img-top" alt="">
          <div class="card-body">
          <h5 class="card-title">Subscribe to the Monthly Plan</h5>
          <p class="card-text">
            Billed Monthy / $50
          </p>
          <a href="/pages/planTwo" class="btn btn-outline-dark">Subscribe</a>
            </div>
          </div>
        </div> --}}
        
        
      </div>
    </div>
@endsection