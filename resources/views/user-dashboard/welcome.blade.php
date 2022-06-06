@extends('layouts.user')
@section('content')
<h1>Welcome {{ Auth::user()->name }}</h1>


<div class="container">
      <div class="row classes__content">
        @foreach ($plans as $plan)
        <div class="col-md-6">
          <div class="card classes__card border-dark">
          <img loading="lazy" src="" class="card-img-top" alt="">
          <div class="card-body ">
          <h5 class="card-title">Subscribe to the {{ $plan->name }}</h5>
          <p class="card-text">
          ${{ $plan->price }}
          </p>
          @subscribedToProduct( $user, $plan->stripeProductId(), $plan->stripeName())

          <h4 class="h4">You are currently subscribed to this plan.</h4>

          @onGracePeriod($plan->stripeName())
          <h4>Your subscription will end on {{ $user->subscription($plan->stripeName())->ends_at->format('d F Y') }}</h4>

          {{-- Resume Button --}}
          <a class="btn btn-primary" href="{{ route('subscriptions.update', $plan->stripeName()) }}">Resume Subscription</a>


          @else
           {{-- Cancel Button --}}
          <a class="btn btn-primary" href="{{ route('subscriptions.destroy', $plan->stripeName()) }}">Cancel Subscription</a>
          
          @endonGracePeriod
          @else
          <a href="/pages{{ $plan->abbreviation }}" class="btn btn-outline-dark">Subscribe</a>
          @endsubscribedToProduct
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