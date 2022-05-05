@extends('layouts.admin')
@section('content')
    <div class="container">
    <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-4">
            <div class="card">
                <h5 class="card-header">Edit Home Page Hero Settings</h5>
                <div class="card-body">
            <form method="POST" action="/admin/social">
                @csrf
                <div class="form-group py-2">
                    <label for="inputsocial1">Social Media Link 1</label>
                    <input id="inputsocial1" type="text" class="form-control " name="link1" value="{{ old('link1', $social1->link) }}" autocomplete="link1" autofocus placeholder="Social Media Link 1">
                </div>
                <div class="form-group py-2">
                    <label for="inputsocial2">Social Media Link 2</label>
                    <input id="inputsocial2" type="text" class="form-control " name="link2" value="{{ old('link2', $social2->link) }}" autocomplete="link2" autofocus placeholder="Social Media Link 2">
                </div>
                <div class="form-group py-2">
                    <label for="inputsocial3">Social Media Link 3</label>
                    <input id="inputsocial3" type="text" class="form-control " name="link3" value="{{ old('link3', $social3->link) }}" autocomplete="link3" autofocus placeholder="Social Media Link 3">
                </div>
                <div class="form-group py-2">
                    <label for="inputsocial4">Social Media Link 4</label>
                    <input id="inputsocial4" type="text" class="form-control " name="link4" value="{{ old('link4', $social4->link) }}" autocomplete="link4" autofocus placeholder="Social Media Link 4">
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