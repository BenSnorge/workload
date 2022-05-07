@extends('layouts.admin')
@section('content')
    <div class="container">
    <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-4">
            <div class="card">
                <h5 class="card-header">Create A New Course</h5>
                <div class="card-body">
            <form method="POST" action="/admin/all-classes">
                @csrf
                <div class="form-group py-2">
                    <label for="inputcourseimg">Course Image URL</label>
                    <input id="inputcourseimg" type="text" class="form-control " name="course_img" value=""  autofocus placeholder="Course Image URL">
                </div>
                <div class="form-group py-2">
                    <label for="inputcoursetitle">Course Title</label>
                    <input id="inputtinputcoursetitleitle" type="text" class="form-control " name="course_title" value=""  autofocus placeholder="Course Title">
                </div>
                <div class="form-group py-2">
                    <label for="inputcoursep">Course Description</label>
                    <input id="inputcoursep" type="text" class="form-control " name="course_p" value="" autocomplete="" autofocus placeholder="Add Site Title">
                </div>
                <div class="form-group py-2">
                    <label for="inputcoursebtn">Button Name</label>
                    <input id="inputtitle" type="text" class="form-control" name="course_link" value="" autofocus placeholder="Add Site Title">
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