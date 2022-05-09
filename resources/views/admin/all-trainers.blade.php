@extends('layouts.admin')
@section('content')
<div class="row">
  <!-- ============================================================== -->
  <!-- basic table -->
  <!-- ============================================================== -->
  <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
    <div class="card">
      <h5 class="card-header">All Trainers</h5>
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
            @foreach ($trainers as $trainer)
            <tr>
              <th scope="row">{{ $trainer->id }}</th>
              <td>{{ $trainer->trainer_name }}</td>
              <td><a class="text-black" href="/admin/all-trainers/{{ $trainer->id }}/edit-trainer"><i
                    class="far fa-edit"></i></a></td>
              <td>

                <a class="text-black" href="#" onclick="event.preventDefault();
                        confirm('Are you sure you want to delete?');
                                document.getElementById('delete-trainer{{ $trainer->id }}').submit();"><i
                    class="far fa-trash-alt">
                  </i>
                </a>
                <form id="delete-course{{ $trainer->id }}" action="/admin/all-trainers/{{ $trainer->id }}/delete"
                  method="POST" class="d-none">
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