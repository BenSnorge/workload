@extends('layouts.main')
@section('content')

<div class="trainers bg-light">
  <h1>Meet Our Team</h1>
  
  <div class="container">
    <div class="row">
    {{-- @foreach ($trainers as $trainer)
        <div class="row trainers__row">
      <div class="col-12 d-flex trainers__info">
        <div class="col-md-3">
          <img loading="lazy" class="trainers__img" src="{{ $trainer->trainer_img }}" alt="">
        </div>
        <div class="col-md-9 trainers__description">
          <h2>{{ $trainer->trainer_name }}</h2>
          <p>{{ $trainer->trainer_p }}</p>
          <a href="#" class="btn btn-outline-dark">{{ $trainer->trainer_link }}</a>
        </div>
      </div>
    </div>
    @endforeach --}}
    @foreach ($trainers as $trainer)
        <div class="col-md-6">
          <div class="card classes__card">
          <img loading="lazy" src="{{ $trainer->trainer_img }}" class="card-img-top" alt="...">
          <div class="card-body">
          <h5 class="card-title">{{ $trainer->trainer_name }}</h5>
          <p class="card-text">{{ $trainer->trainer_p }}</p>
          <a href="/login" class="btn btn-outline-dark">{{ $trainer->trainer_link }}</a>
            </div>
          </div>
        </div>
    @endforeach
    </div>
  </div>
  
</div>


    @include('components.footer')
@endsection