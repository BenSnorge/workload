<div class="hero">
  <div class="hero-image">
    <img src="{{ $home->hero_image }}" alt="">
    <div class="hero__info">
      <span class="hero__subtitle">
        {{ $home->hero_subtitle }}
      </span>
      <span class="hero__title">
        {{ $home->hero_title }}
      </span>
      <a href="/register" class="hero__info-link">
        {{ $home->hero_link }}
      </a>
    </div>
  </div>
</div>