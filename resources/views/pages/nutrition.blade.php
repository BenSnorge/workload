@extends('layouts.main')
@section('content')
  <div class="nutrition">
    <div class="nutrition__hero">
      <img loading="lazy" class="nutrition__image" src="{{ $nutrition1->content_image }}" alt="">
      <h1 class="nutrition__title">{{ $nutrition1->content_heading }}</h1>
    </div>
  </div>
  <div class="nutrition bg-light">
  <div class="container ">
    <div class="nutrition__description">
      <div class="row justify-content-md-center">
        <div class="col-lg-8 col-lg-auto d-flex flex-column justify-content-center  align-items-center">
          <div class="nutrition__heading">
            <h1>{{ $nutrition2->content_heading }}</h1>
          </div>
          <p>{{ $nutrition2->content_p }}</p>
        </div>
      </div>
      
    </div>
      <div class="row ">
        <div class="col-lg-6">
          <div class="nutrition__box d-flex flex-column justify-content-center  align-items-center">
            <h3>{{ $nutrition3->content_heading }}</h3>
            <p>{{ $nutrition3->content_p }}</p>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="nutrition__box">
          <img loading="lazy" src="{{ $nutrition3->content_image }}" class="col-12" alt="">
          </div>
        </div>
      </div>
      <div class="nutrition__section">
        <div class="row">
        <div class="col-lg-6">
          <div class="nutrition__box">
          <img loading="lazy" src="{{ $nutrition4->content_image }}" class="col-12" alt="">
          </div>
        </div>
        <div class="col-lg-6">
          <div class="nutrition__box d-flex flex-column justify-content-center  align-items-center">
            <h3>{{ $nutrition4->content_heading }}</h3>
            <p>{{ $nutrition4->content_p }}</p>
          </div>
        </div>
      </div>
      </div>
      <div class="nutrition__section">
      <div class="row ">
        <div class="col-lg-6">
          <div class="nutrition__box d-flex flex-column justify-content-center  align-items-center">
            <h3>{{ $nutrition5->content_heading }}</h3>
            <p>{{ $nutrition5->content_p }}</p>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="nutrition__box">
          <img loading="lazy" src="{{ $nutrition5->content_image }}" class="col-12" alt="">
          </div>
        </div>
      </div>
      </div>
      <div class="row ">
        <div class="col-lg-6">
          <div class="nutrition__box">
          <img loading="lazy" src="{{ $nutrition6->content_image }}" class="col-12" alt="">
          </div>
        </div>
        <div class="col-lg-6">
          <div class="nutrition__box d-flex flex-column justify-content-center  align-items-center">
            <h3>{{ $nutrition6->content_heading }}</h3>
            <p>{{ $nutrition6->content_p }}</p>
          </div>
        </div>
      </div>
      <div class="nutrition__description">
      <div class="row justify-content-md-center">
      </div>
      
    </div>
    </div>
</div>


  @include('components.social-media')
    @include('components.footer')
@endsection