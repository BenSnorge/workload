@extends('layouts.admin')
@section('content')
    <div class="container">
      <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
    <div class="card">
        <h5 class="card-header">Edit Home Page Hero Settings</h5>
        <div class="card-body">
      <form method="POST" action="/admin/home-page">
          @csrf
          <div class="form-group">
              <label for="inputtitle">Site Title</label>
              <input id="inputtitle" type="text" class="form-control " name="site_title" value="{{old('site_title')}}"  autocomplete="site_title" autofocus placeholder="Add Site Title">
          </div>
          <div class="form-group">
              <label for="inputherosubtuitle">Hero Subtitle</label>
              <input id="inputherosubtuitle" type="text" class="form-control " value="{{old('hero_subtitle')}}"  autocomplete="title" autofocus placeholder="Add the hero subtitle">
          </div>
          <div class="form-group">
              <label for="inputherotitle">Home Title</label>
              <input id="inputherotitle" type="text" class="form-control " name="home_title"  autocomplete="title" autofocus placeholder="Add the hero title">
          </div>
          <div class="form-group">
              <label for="inputherolink">Hero Link</label>
              <input id="inputherolink" type="text" class="form-control " name="hero_link"  autocomplete="title" autofocus placeholder="Add the hero link">
          </div>
          <div class="form-group">
              <label for="">Hero Image</label>
              <input id="inputheroimage" type="text" class="form-control  " name="hero_image"  autocomplete="hero_image" autofocus placeholder="Change the hero image">
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