<div class="footer">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="footer__links d-flex flex-column py-5">
          <h4>{{ $footer->footer_header1 }}</h4>
          <a class="footer__link" href="#">{{ $footer->footer_link1 }}</a>
          
        </div>
      </div>
      <div class="col-md-4">
        <div class="footer__links d-flex flex-column py-5">
          <h4>{{ $footer->footer_header2 }}</h4>
          <a class="footer__link" href="#">{{ $footer->footer_link2 }}</a>
          <a class="footer__link" href="#">{{ $footer->footer_link3 }}</a>
        </div>
      </div>
      <div class="col-md-4">
        <div class="footer__info py-5">
          <div class="footer__address">
            <h4>Address</h4>
            <h5>{{ $footer->footer_city }}</h5>
            <p>{{ $footer->footer_street }}</p>
            <p>{{ $footer->footer_zipcode }}</p>
            <p>{{ $footer->footer_phone }}</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>