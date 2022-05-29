@extends('layouts.user')
@section('content')
<h1>Welcome {{ Auth::user()->name }}</h1>


<div class="container">
      <div class="row classes__content">
        <div class="col-md-6">
          <div class="card classes__card">
          <img loading="lazy" src="" class="card-img-top" alt="">
          <div class="card-body">
          <h5 class="card-title">Subscribe to the Yearly Plan</h5>
          <p class="card-text">
            Billed Annually / $800
          </p>
          <a href="/pages/planOne" class="btn btn-outline-dark">Subscribe</a>
            </div>
          </div>
        </div>
        <div class="col-md-6">
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
        </div>
      </div>
    </div>
@endsection