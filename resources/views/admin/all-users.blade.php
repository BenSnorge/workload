@extends('layouts.admin')
@section('content')
<div class="row">
  <!-- ============================================================== -->
  <!-- basic table -->
  <!-- ============================================================== -->
  <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
    <div class="card">
      <h5 class="card-header">All Users</h5>
      <div class="card-body">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Name</th>
              <th scope="col">Role</th>
              <th scope="col">Edit</th>
              <th scope="col">Delete</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($users as $user)
            <tr>
              <th scope="row">{{ $user->id }}</th>
              <td>{{ $user->fname }}</td>
              <td>
                @if ( $user->role_id == '1')
                    Admin
                    @else
                    Customer

                @endif
                
                </td>
              <td><a class="text-black" href="/admin/all-users/{{ $user->id }}/user-edit"><i
                    class="far fa-edit"></i></a></td>
              <td>

                <a class="text-black" href="#" onclick="event.preventDefault();
                        confirm('Are you sure you want to delete?');
                                document.getElementById('delete-user{{ $user->id }}').submit();"><i
                    class="far fa-trash-alt">
                  </i>
                </a>
                <form id="delete-user{{ $user->id }}" action="/admin/all-users/{{ $user->id }}/delete"
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