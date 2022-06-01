@extends('layouts.user')
@section('content')
    <div class="checkout">
   <div class="container">
    <form class="col-lg-6 mx-auto" method="POST" action="{{ route('yearly.store') }}" id="yearly-form">
            @csrf
      <h3 class="mb-3">Subscribe to Yearly Plan</h3>

      <input type="hidden" name="plan" id="plan" value="yearly">

      <input type="hidden" name="payment-method" id="payment-method">

      <div class="mx-auto w-75 mb-3">
        <label class="form-label" for="name" value="'Name'">Name</label>
        <input class="form-control" id="name" type="text" name="name" value="{{ auth()->user()->name }}" autocomplete="name">
      </div>
      <div class="mx-auto mb-3 w-75">
        <label class="form-label" for="" value="'Email">Email</label>
        <input class="form-control" id="email" type="email" name="email" value="{{ auth()->user()->email }}" autocomplete="email" disabled>
      </div>
      
      <div class="mx-auto mb-3 w-75">
        <label class="form-label" for="line1" value="line1">Street, PO Box, or Company name</label>
        <input id="line1" class="form-control" type="text"
        name="line1" value="">
      </div>
      <div class="mx-auto mb-3 w-75">
        <label class="form-label" for="line2" value="line2">Apartment, Suite, Unit, or Building</label>
        <input id="line2" class="form-control" type="text"
        name="line2" value="">
      </div>


      <div class="mx-auto mb-3 w-75">
        <label class="form-label" for="city" value="city">City</label>
        <input id="city" class="form-control" type="text"
        name="city" value="{{ auth()->user()->city }}" autocomplete="city" required>
      </div>
      <div class="mx-auto mb-3 w-75">
        <label class="form-label" for="state" value="state">State</label>
        <input id="state" class="form-control" type="text"
        name="state" value="{{ auth()->user()->state }}" autocomplete="state" required>
      </div>
      <div class="mx-auto mb-3 w-75">
        <label class="form-label" for="country" value="country">Country</label>
        <input id="country" class="form-control" type="text"
        name="country">
      </div>
      <div class="mx-auto mb-3 w-75">
        <label class="form-label" for="postal_code" value="postal_code">Zipcode</label>
        <input id="postal_code" class="form-control" type="text"
        name="postal_code" value="">
      </div>

      <div class="mx-auto mb-3 w-75">
        <label class="form-label" for="card-name" value=""> Name On Card</label>
        <input id="card-holder-name" class="form-control" type="text" name="card-name" value="{{ auth()->user()->name }}" autocomplete="card-name">
      </div>
      <div class="mx-auto mb-3 w-75">
        <label class="form-label" for="card_no" value="card_no">Credit Card Number</label>
        <div id="card-element" class="form-control"></div>
      </div>

      <div id="card-errors"></div>
  
  <button id="card-button" data-secret="{{ $intent->client_secret }}" class="btn btn-primary" type="submit">Subscribe</button>

    </form>
    </div>

  </div>
  <script src="https://js.stripe.com/v3/"></script>

  <script>
        const stripe = Stripe('{{ env("STRIPE_KEY") }}');
        const elements = stripe.elements();
        const cardElement = elements.create('card');
        const cardHolderName = document.getElementById('card-holder-name');
        const cardButton = document.getElementById('card-button');
        const clientSecret = cardButton.dataset.secret;
        cardElement.mount('#card-element');
        cardElement.addEventListener('change', function(event) {
            const displayError = document.getElementById('card-errors');
            if (event.error) {
                displayError.textContent = event.error.message;
            } else {
                displayError.textContent = '';
            }
        });
        // Handle Form submission
        const paymentForm = document.getElementById('yearly-form');
        paymentForm.addEventListener('submit', function(event) {
            event.preventDefault();
            stripe
                .handleCardSetup(clientSecret, cardElement, {
                    payment_method_data: {
                        billing_details: {
                            name: cardHolderName.value
                        }
                    }
                })
                .then(function(result) {
                    if (result.error) {
                        // Inform the user if there was an error.
                        var errorElement = document.getElementById('card-errors');
                        errorElement.textContent = result.error.message;
                    } else {
                        const paymentMethodInput = document.getElementById('payment-method');
                        paymentMethodInput.value = result.setupIntent.payment_method;
                        paymentForm.submit();
                    }
                });
        });
  </script>
@endsection