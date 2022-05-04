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
            <h1>Why nutrition is so important</h1>
          </div>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Culpa numquam neque veniam debitis ipsam commodi perspiciatis adipisci fugiat fuga sequi repellat, doloremque deleniti voluptatem voluptates? Explicabo temporibus voluptatum nulla, minima quod eius optio nostrum! Officiis, dolores inventore! Facere dolorem voluptates totam excepturi nam ut? Consectetur, maxime? Quas nihil ipsam obcaecati.</p>
        </div>
      </div>
      
    </div>
      <div class="row ">
        <div class="col-lg-6">
          <div class="nutrition__box d-flex flex-column justify-content-center  align-items-center">
            <h3>We offer classes on nutrition</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quidem nesciunt odit autem placeat fugiat quaerat enim libero, quo odio dolor nam reprehenderit minima quis natus molestiae doloremque, eius et quisquam.</p>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="nutrition__box">
          <img loading="lazy" src="{{ $nutrition2->content_image }}" class="col-12" alt="">
          </div>
        </div>
      </div>
      <div class="nutrition__section">
        <div class="row">
        <div class="col-lg-6">
          <div class="nutrition__box">
          <img loading="lazy" src="{{ $nutrition3->content_image }}" class="col-12" alt="">
          </div>
        </div>
        <div class="col-lg-6">
          <div class="nutrition__box d-flex flex-column justify-content-center  align-items-center">
            <h3>How is this helping with your goals?</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quidem nesciunt odit autem placeat fugiat quaerat enim libero, quo odio dolor nam reprehenderit minima quis natus molestiae doloremque, eius et quisquam.</p>
          </div>
        </div>
      </div>
      </div>
      <div class="row ">
        <div class="col-lg-6">
          <div class="nutrition__box d-flex flex-column justify-content-center  align-items-center">
            <h3>A customized meal plan</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quidem nesciunt odit autem placeat fugiat quaerat enim libero, quo odio dolor nam reprehenderit minima quis natus molestiae doloremque, eius et quisquam.</p>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="nutrition__box">
          <img loading="lazy" src="{{ $nutrition4->content_image }}" class="col-12" alt="">
          </div>
        </div>
      </div>
      <div class="row ">
        <div class="col-lg-6">
          <div class="nutrition__box">
          <img loading="lazy" src="{{ $nutrition5->content_image }}" class="col-12" alt="">
          </div>
        </div>
        <div class="col-lg-6">
          <div class="nutrition__box d-flex flex-column justify-content-center  align-items-center">
            <h3>Healthy fuel for your body</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quidem nesciunt odit autem placeat fugiat quaerat enim libero, quo odio dolor nam reprehenderit minima quis natus molestiae doloremque, eius et quisquam.</p>
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