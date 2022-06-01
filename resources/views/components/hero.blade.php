<div class="hero">
  <div class="hero-image">
    <img src="{{ $home->hero_image }}" alt="">
    <div class="hero__info">
      <span class="hero__subtitle fs-6">
        {{ $home->hero_subtitle }}
      </span>
      <p class="hero__title display-1">
        {{ $home->hero_title }}
      </p>
      <a href="/register" class="hero__info-link fs-5 btn btn-light">
        {{ $home->hero_link }}
      </a>
    </div>
  </div>
</div>