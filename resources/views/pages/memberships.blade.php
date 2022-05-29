@extends('layouts.main')
@section('content')
  <div class="membership">
    <div class="membership__hero">
      <img class="membership__image" src="{{ $membership1->membership_img }}" alt="">
      <h1 class="membership__title">{{ $membership1->membership_heading }}</h1>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="membership__offer">
            <div class="membership__offer--pro">
              <h1>{{ $membership2->membership_plan }}</h1>
            </div>
            
            <h3>Billed Annually</h3>
            <h4>{{ $membership2->membership_price }}</h4>
            <div class="membership__lists">
              <ul class="membership__benefits">
                @foreach ($benefitsOne as $benefit)
                <li><i class="fa-solid {{ $benefit->icon }}"></i> {{ $benefit->benefit }}</i></li>
              @endforeach
            </ul>
              {{-- <ul class="membership__icons">
                <li><i class="fa-solid fa-check"></i></li>
                <li><i class="fa-solid fa-check"></i></li>
                <li><i class="fa-solid fa-check"></i></li>
                <li><i class="fa-solid fa-check"></i></li>
              </ul> --}}
            </div>

            <a href="/login" class="btn btn-outline-danger mb-5 membership__btn">{{ $membership2->membership_btn }}</a>
            
          </div>
        </div>
        <div class="col-md-6">
          <div class="membership__offer">
            <div class="membership__offer--basic">
              <h1>{{ $membership3->membership_plan }}</h1>
            </div>
            
            <h3>Billed Monthly</h3>
            <h4>{{ $membership3->membership_price }}</h4>
            <div class="membership__lists">
              <ul class="membership__benefits">
                @foreach ($benefitsTwo as $benefit)
                <li><i class="fa-solid {{ $benefit->icon }}"></i> {{ $benefit->benefit }}</i></li>
              @endforeach
              {{-- <li><i class="fa-solid fa-check"></i> 24 hour access to gym </i></li>
              <li><i class="fa-solid fa-check"></i> Juice Bar</li>
              <li><i class="fa-solid fa-check"></i> Meal Plan</li>
              <li><i class="fa-solid fa-x"></i> All classes included</i></li>
              <li><i class="fa-solid fa-x"></i> Personal sessions with a trainer</li>
              <li><i class="fa-solid fa-x"></i> Nutrition classes</li>
              <li><i class="fa-solid fa-x"></i> Customized workout plan</li> --}}

            </ul>
              {{-- <ul class="membership__icons">
                <li><i class="fa-solid fa-check"></i></li>
                <li><i class="fa-solid fa-check"></i></li>
                <li><i class="fa-solid fa-check"></i></li>
                <li><i class="fa-solid fa-check"></i></li>
              </ul> --}}
            </div>

            <a href="#" class="btn btn-outline-danger mb-5 membership__btn">{{ $membership2->membership_btn }}</a>
            
          </div>
        </div>
        </div>
        <div class="membership__info">
          <h4>{{ $membership1->membership_description }}</h4>
        </div>
      </div>
    </div>
  </div>
  @include('components.social-media')
  @include('components.footer')
@endsection