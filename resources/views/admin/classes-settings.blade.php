@extends('layouts.admin')
@section('content')
    <div class="container">
    <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-4">
            <div class="card">
                <h5 class="card-header">Edit Home Page Hero Settings</h5>
                <div class="card-body">
            <form method="POST" action="/admin/classes-settings">
                @csrf
                <div class="form-group py-2">
                    <label for="inputclassesheading">Heading</label>
                    <input id="inputclassesheading" type="text" class="form-control " name="class_heading" value="{{ old('class_heading', $courseSetting->class_heading) }}" autocomplete="class_heading" autofocus placeholder="Add Header">
                </div>
                <div class="form-group py-2">
                    <label for="inputcompany">Image</label>
                    <input id="inputcompany" type="text" class="form-control " name="class_image" value="{{ old('class_image', $courseSetting->class_image) }}" autocomplete="class_image" autofocus placeholder="Add Image">
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