<div class="home-content bg-light">
  <div class="container ">
    <div class="home-content__description">
      <div class="row justify-content-md-center">
        <div class="col-lg-8 col-lg-auto d-flex flex-column justify-content-center  align-items-center">
          <div class="home-content__title">
            <h1>{{ $content1->content_heading }}</h1>
          </div>
          <p>{{ $content1->content_p }}</p>
        </div>
      </div>
      
    </div>
      <div class="row ">
        <div class="col-lg-6">
          <div class="home-content__box d-flex flex-column justify-content-center  align-items-center">
            <h3>{{ $content2->content_heading }}</h3>
            <p>{{ $content2->content_p }}</p>
            <a class="btn btn-outline-dark" href="/memberships">{{ $content2->content_button }}</a>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="home-content__box">
          <img loading="lazy" src="{{ $content2->content_image }}" class="col-12" alt="">
          </div>
        </div>
      </div>
      <div class="home-content__section">
        <div class="row">
        <div class="col-lg-6">
          <div class="home-content__box">
          <img loading="lazy" src="{{ $content3->content_image }}" class="col-12" alt="">
          </div>
        </div>
        <div class="col-lg-6">
          <div class="home-content__box d-flex flex-column justify-content-center  align-items-center">
            <h3>{{ $content3->content_heading }}</h3>
            <p>{{ $content3->content_p }}</p>
            <a href="/trainers" class="btn btn-outline-dark">{{ $content3->content_button }}</a>
          </div>
        </div>
      </div>
      </div>
      <div class="home-content__section">

      
      <div class="row ">
        <div class="col-lg-6">
          <div class="home-content__box d-flex flex-column justify-content-center  align-items-center">
            <h3>{{ $content4->content_heading }}</h3>
            <p>{{ $content4->content_p }}</p>
            <a href="/nutrition" class="btn btn-outline-dark">{{ $content4->content_button }}</a>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="home-content__box">
          <img loading="lazy" src="{{ $content4->content_image }}" class="col-12" alt="">
          </div>
        </div>
      </div>
      </div>
      <div class="row ">
        <div class="col-lg-6">
          <div class="home-content__box">
          <img loading="lazy" src="{{ $content5->content_image }}" class="col-12" alt="">
          </div>
        </div>
        <div class="col-lg-6">
          <div class="home-content__box d-flex flex-column justify-content-center  align-items-center">
            <h3>{{ $content5->content_heading }}</h3>
            <p>{{ $content5->content_p }}</p>
            <a href="/classes" class="btn btn-outline-dark">{{ $content5->content_button }}</a>
          </div>
        </div>
      </div>
      <div class="home-content__description">
      <div class="row justify-content-md-center">
        <div class="col-lg-8 col-lg-auto d-flex flex-column justify-content-center  align-items-center">
          {{-- <div class="home-content__title">
            <h1>Track your progess</h1>
          </div>
          <p>You can track your progress in the members dashboard and book classes with your favorite trainers!</p> --}}
        </div>
      </div>
      
    </div>
    </div>
</div>

