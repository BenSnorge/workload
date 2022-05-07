@extends('layouts.admin')
@section('content')
    <div class="row">
            <!-- ============================================================== -->
            <!-- basic table -->
            <!-- ============================================================== -->
            <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <h5 class="card-header">All Classes</h5>
                    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Title</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
              @foreach ($courses as $course)
                    <tr>
                    <th scope="row">{{ $course->id }}</th>
                    <td>{{ $course->course_title }}</td>
                    <td><a class="text-black" href="/admin/all-classes/{{ $course->id }}/class-edit"><i class="far fa-edit"></i></a></td>
                    <td>

                        <a class="text-black" href="#" onclick="event.preventDefault();
                                document.getElementById('delete-course{{ $course->id }}').submit();"><i class="far fa-trash-alt">
                                    </i>
                                </a>
                            <form id="delete-course{{ $course->id }}" action="/admin/all-classes/{{ $course->id }}/delete" method="POST" class="d-none">
                                @method('DELETE')
                                @csrf
                            </form>
                    </td>
                </tr>
                   @endforeach
                      </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
@endsection