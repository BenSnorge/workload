@extends('layouts.main')
@section('content')
    <div class="checkout">
   <div class="container">
    <form class="col-lg-4 mx-auto" method="POST" action="{{ route('register') }}">
            @csrf
      @csrf 
      <h3 class="mb-3">Subscribe to Yearly Plan</h3>
      <div class="mx-auto mb-3">
        <label class="form-label" for="" value="name">Name</label>
        <input class="form-control" id="fname" type="text" name="name">
      </div>
      <div class="mx-auto mb-3">
        <label class="form-label" for="" :value="__('Email')">Email</label>
        <input class="form-control" id="email" type="email" name="email">
      </div>
      
      <div class="mx-auto mb-3">
        <label class="form-label" for="address" value="address">Address</label>
        <input id="address" class="form-control" type="text"
        name="address">
      </div>
      <div class="mx-auto mb-3">
        <label class="form-label" for="city" value="city">City</label>
        <input id="city" class="form-control" type="text"
        name="city">
      </div>
      <div class="mx-auto mb-3">
        <label class="form-label" for="country" value="country">Country</label>
        <input id="country" class="form-control" type="text"
        name="country">
      </div>
      <div class="mx-auto mb-3">
        <label class="form-label" for="zipcode" value="zipcode">Zipcode</label>
        <input id="zipcode" class="form-control" type="text"
        name="zipcode">
      </div>
      <div class="mx-auto mb-3">
        <label class="form-label" for="cardnumber" value="cardnumer">Credit Card Number</label>
        <input id="cardnumber" class="form-control" type="text"
        name="cardnumber">
      </div>
      <div class="mx-auto mb-3">
        <label class="form-label" for="expire" value="expire">Expire Date</label>
        <input id="expire" class="form-control" type="text"
        name="expire">
      </div>
      <div class="mx-auto mb-3">
        <label class="form-label" for="ccv" value="ccv">CCV</label>
        <input id="ccv" class="form-control" type="text"
        name="ccv">
      </div>
  
  <button id="card-button" data-secret="{{ $intent->client_secret }}" class="btn btn-primary" type="submit">Subscribe</button>

    </form>
    </div>

  </div>
@endsection