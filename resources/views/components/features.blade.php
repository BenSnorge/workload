<div class="features">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 ">
        <div class="features__card">
          <i class="{{ $card->card1_icon }} features__icon"></i>
        <h1>{{ $card->card1_heading }}</h1>
        <p>{{ $card->card1_description }}</p>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="features__card">
        <i class="{{ $card->card2_icon }} features__icon"></i>
        <h1>{{ $card->card2_heading }}</h1>
        <p>{{ $card->card2_description }}</p>
        </div>
      </div>
      <div class="col-lg-4 ">
        <div class="features__card">
          <i class="{{ $card->card3_icon }} features__icon"></i>
          <h1>{{ $card->card3_heading }}</h1>
          <p>{{ $card->card3_description }}</p>
      </div>
    </div>
    </div>
  </div>
</div>