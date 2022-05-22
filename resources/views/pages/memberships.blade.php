@extends('layouts.main')
@section('content')
  <div class="membership">
    <div class="membership__hero">
      <img class="membership__image" src="https://images.unsplash.com/photo-1518459031867-a89b944bffe4?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2882&q=80" alt="">
      <h1 class="membership__title">Become A Member</h1>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="membership__offer">
            <div class="membership__offer--pro">
              <h1>Pro</h1>
            </div>
            
            <h3>Billed Annually</h3>
            <h4>$800</h4>
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

            <a href="#" class="btn btn-outline-danger mb-5 membership__btn">Sign Up!</a>
            
          </div>
        </div>
        <div class="col-md-6">
          <div class="membership__offer">
            <div class="membership__offer--basic">
              <h1>Basic</h1>
            </div>
            
            <h3>Billed Monthly</h3>
            <h4>$50</h4>
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

            <a href="#" class="btn btn-outline-danger mb-5 membership__btn">Sign Up!</a>
            
          </div>
        </div>
        </div>
        <div class="membership__info">
          <h4>You can book classes or trainer sessions on our basic plan in the membership area. Fees for each class will be $15 and each session $40</h4>
        </div>
      </div>
    </div>
  </div>
  @include('components.social-media')
  @include('components.footer')
@endsection