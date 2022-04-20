@extends('layouts.main')
@section('content')

<div class="trainers bg-light">
  <h1>Meet Our Team</h1>
  <div class="container">
    <div class="row trainers__row">
      <div class="col-12 d-flex trainers__info">
        <div class="col-md-3">
          <img class="trainers__img" src="https://images.unsplash.com/photo-1597586594276-456f8c50b82d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1740&q=80" alt="">
        </div>
        <div class="col-md-9 trainers__description">
          <h2>Name</h2>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique, quia amet temporibus velit quo eligendi nesciunt dolor eum fugit dolorum?</p>
          <a href="#" class="btn btn-outline-dark">Book a session</a>
        </div>
      </div>
    </div>
    <div class="row trainers__row">
      <div class="col-12 d-flex trainers__info">
        <div class="col-md-3">
          <img class="trainers__img" src="https://images.unsplash.com/photo-1543604055-dede4512686d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1740&q=80" alt="">
        </div>
        <div class="col-md-9 trainers__description">
          <h2>Name</h2>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique, quia amet temporibus velit quo eligendi nesciunt dolor eum fugit dolorum?</p>
          <a href="#" class="btn btn-outline-dark">Book a session</a>
        </div>
      </div>
    </div>
    <div class="row trainers__row">
      <div class="col-12 d-flex trainers__info">
        <div class="col-md-3">
          <img class="trainers__img" src="https://images.unsplash.com/photo-1567598317136-3cd762432241?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1740&q=80" alt="">
        </div>
        <div class="col-md-9 trainers__description">
          <h2>Name</h2>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique, quia amet temporibus velit quo eligendi nesciunt dolor eum fugit dolorum?</p>
          <a href="#" class="btn btn-outline-dark">Book a session</a>
        </div>
      </div>
    </div>
    <div class="row trainers__row">
      <div class="col-12 d-flex trainers__info">
        <div class="col-md-3">
          <img class="trainers__img" src="https://images.unsplash.com/photo-1615630799526-82d22dd5ad0b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1742&q=80" alt="">
        </div>
        <div class="col-md-9 trainers__description">
          <h2>Name</h2>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique, quia amet temporibus velit quo eligendi nesciunt dolor eum fugit dolorum?</p>
          <a href="#" class="btn btn-outline-dark">Book a session</a>
        </div>
      </div>
    </div>
  </div>
</div>


    @include('components.footer')
@endsection