@extends('layouts.admin')
@section('content')
    <div class="container">
      <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
    <div class="card">
        <h5 class="card-header">Edit Home Page Settings</h5>
        <div class="card-body">
      <form method="POST" action="/admin/home-page">
          @csrf
          @method('PUT')
          <div class="form-group">
              <label for="inputtitle">Site Title</label>
              <input id="inputtitle" type="text" class="form-control form-control-lg" name="site_title" value=""  autocomplete="site_title" autofocus placeholder="Add Site Title">
          </div>
          <div class="form-group">
              <label for="inputherosubtuitle">Hero Subtitle</label>
              <input id="inputherosubtuitle" type="text" class="form-control form-control-lg "   autocomplete="title" autofocus placeholder="Add the hero subtitle">
          </div>
          <div class="form-group">
              <label for="inputaddress2">Hero Title</label>
              <input id="inputaddress2" type="text" class="form-control form-control-lg " name="address_2"  autocomplete="title" autofocus placeholder="Add the hero title">
          </div>
          <div class="form-group">
              <label for="inputaddress2">Hero Link</label>
              <input id="inputaddress2" type="text" class="form-control form-control-lg " name="address_2"  autocomplete="title" autofocus placeholder="Add the hero link">
          </div>
          <div class="form-group">
              <label for="inputaddress2">Hero Image</label>
              <input id="inputaddress2" type="text" class="form-control form-control-lg " name="address_2"  autocomplete="title" autofocus placeholder="Change the hero image">
          </div>
          <div class="form-group">
              <label for="inputcity">Card 1 Icon</label>
              <input id="inputcity" type="text" class="form-control form-control-lg  required autocomplete="city" autofocus placeholder="Add Icon">

              
          </div>
          <div class="form-group">
              <label for="inputstate">State</label>
              <input id="inputstate" type="text" class="form-control form-control-lg  required autocomplete="state" autofocus placeholder="Add the State">

              
          </div>
          <div class="form-group">
              <label for="inputzipcode">Zipcode</label>
              <input id="inputzipcode" type="text" class="form-control form-control-lg  required autocomplete="zipcode" autofocus placeholder="Add the zipcode">

              
          </div>
          <div class="form-group">
              <label for="inputphone">Phone Number</label>
              <input id="inputphone" type="text" class="form-control form-control-lg  name="phone_number" value=""  autocomplete="phone_number" autofocus placeholder="Add the phone_number">

             
                  <span class="invalid-feedback" role="alert">
                      <strong></strong>
                  </span>
              
          </div>
          <div class="row">
              <div class="col-sm-6 pb-2 pb-sm-4 pb-lg-0 pr-0">
                  
              </div>
              <div class="col-sm-6 pl-0">
                  <p class="text-right">
                      <button type="submit" class="btn btn-space btn-primary">Submit</button>
                      
                  </p>
              </div>
          </div>
      </form>
        </div>
    </div>
</div>
      </div>
    </div>
@endsection