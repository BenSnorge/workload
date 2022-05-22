@extends('layouts.admin')
@section('content')
<div class="row">
  <!-- ============================================================== -->
  <!-- basic table -->
  <!-- ============================================================== -->
  <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
    <div class="card">
      <h5 class="card-header">All Benefits For Plan Two</h5>
      <div class="card-body">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Description</th>
              <th scope="col">Icon</th>
              <th scope="col">Edit</th>
              <th scope="col">Delete</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($benefitsTwo as $benefit)
            <tr>
              <th scope="row">{{ $benefit->id }}</th>
              <td>{{ $benefit->benefit }}</td>
              <td>{{ $benefit->icon }}</td>
              <td><a class="text-black" href="/admin/all-plan-two/{{ $benefit->id }}/plan-two-edit"><i
                    class="far fa-edit"></i></a></td>
              <td>

                <a class="text-black" href="#" onclick="event.preventDefault();
                        confirm('Are you sure you want to delete?');
                                document.getElementById('delete-benefit{{ $benefit->id }}').submit();"><i
                    class="far fa-trash-alt">
                  </i>
                </a>
                <form id="delete-benefit{{ $benefit->id }}" action="/admin/all-plan-two/{{ $benefit->id }}/delete"
                  method="POST" class="d-none">
                  @method('DELETE')
                  @csrf
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        <a href="/admin/create-benefits-plan-two" class="btn btn-primary">Add New Benefit</a>
      </div>
    </div>
  </div>
</div>
@endsection