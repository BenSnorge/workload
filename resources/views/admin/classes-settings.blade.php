@extends('layouts.admin')
@section('content')
    <div class="container">
    <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-4">
            <div class="card">
                <h5 class="card-header">Edit Home Page Hero Settings</h5>
                <div class="card-body">
            <form method="POST" action="/admin/home-page">
                @csrf
                <div class="form-group py-2">
                    <label for="inputtitle">Site Title</label>
                    <input id="inputtitle" type="text" class="form-control " name="site_title" value="{{ old('site_title', $home->site_title) }}" autocomplete="site_title" autofocus placeholder="Add Site Title">
                </div>
                <div class="form-group py-2">
                    <label for="inputcompany">Company Name</label>
                    <input id="inputcompany" type="text" class="form-control " name="company_name" value="{{ old('company_name', $home->company_name) }}" autocomplete="company_name" autofocus placeholder="Add Company Name">
                </div>
                <div class="form-group py-2">
                    <label for="inputherosubtuitle">Hero Subtitle</label>
                    <input id="inputherosubtuitle" type="text" class="form-control"
                    name="hero_subtitle"  value="{{old('hero_subtitle', $home->hero_subtitle)}}"  autocomplete="title" autofocus placeholder="Add the hero subtitle">
                </div>
                <div class="form-group py-2">
                    <label for="inputherotitle">Home Title</label>
                    <input id="inputherotitle" type="text" class="form-control " value="{{old('hero_subtitle', $home->hero_title)}}" name="hero_title"  autocomplete="title" autofocus placeholder="Add the hero title">
                </div>
                <div class="form-group py-2">
                    <label for="inputherolink">Hero Link</label>
                    <input id="inputherolink" type="text" class="form-control " value="{{old('hero_link', $home->hero_link)}}"  name="hero_link"  autocomplete="title" autofocus placeholder="Add the hero link">
                </div>
                <div class="form-group py-2">
                    <label for="">Hero Image URL</label>
                    <input id="inputheroimage" type="text" class="form-control" value="{{old('hero_image', $home->hero_image)}}"  name="hero_image"  autocomplete="hero_image" autofocus placeholder="Change the hero image">
                </div>
                <div class="row">
                    <div class="col-sm-6 pb-2 pb-sm-4 pb-lg-0 pr-0">
                        <button type="submit" class="btn btn-space btn-primary mt-3">Submit</button>
                    </div>
                    <div class="col-sm-6 pl-0">
                        <p class="text-right">
                            
                            
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