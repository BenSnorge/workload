@extends('layouts.main')
@section('content')
<div class="classes">
  <div class="classes__hero">
      <img loading="lazy" class="classes__image" src="https://images.unsplash.com/photo-1527933053326-89d1746b76b9?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2940&q=80" alt="">
      <h1 class="classes__title">Our Classes</h1>
    </div>
    <div class="container">
      <div class="row classes__content">
        <div class="col-md-6">
          <div class="card classes__card">
          <img loading="lazy" src="https://images.unsplash.com/photo-1518611012118-696072aa579a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1740&q=80" class="card-img-top" alt="...">
          <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-outline-dark">Go somewhere</a>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card classes__card">
            <img loading="lazy" src="https://images.unsplash.com/photo-1518310383802-640c2de311b2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1740&q=80" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-outline-dark">Go somewhere</a>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card classes__card">
            <img loading="lazy" src="https://images.unsplash.com/photo-1518609571773-39b7d303a87b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1740&q=80" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-outline-dark">Go somewhere</a>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
    @include('components.footer')
@endsection