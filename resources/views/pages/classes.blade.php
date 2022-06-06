@extends('layouts.main')
@section('content')
<div class="classes">
  <div class="classes__hero">
      <img loading="lazy" class="classes__image" src="{{ $courseSetting->class_image }}" alt="">
      <h1 class="classes__title">{{ $courseSetting->class_heading }}</h1>
    </div>
    <div class="container">
      <div class="row classes__content">
        @foreach ($courses as $course)
            <div class="col-md-6">
          <div class="card classes__card">
          <img loading="lazy" src="{{ $course->course_img }}" class="card-img-top" alt="...">
          <div class="card-body">
          <h5 class="card-title">{{ $course->course_title }}</h5>
          <p class="card-text">{{ $course->course_p }}</p>
          <a href="/login" class="btn btn-outline-dark">{{ $course->course_link }}</a>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
</div>
    @include('components.footer')
@endsection