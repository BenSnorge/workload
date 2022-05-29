@extends('layouts.admin')
@section('content')
    <div class="container">
    <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-4">
            <div class="card">
                <h5 class="card-header">Edit A User</h5>
                <div class="card-body">
            <form method="POST" action="/admin/all-users/{{$users->id}}">
                @csrf
                {{-- @method('PUT') --}}
                <div class="form-group py-2">
                    <label for="inputfname">Name</label>
                    <input id="inputfname" type="text" class="form-control " name="fname" value="{{ old('fname', $users->name) }}"  autofocus placeholder="First Name">
                </div>
                <div class="form-group py-2">
                    <label class="pb-2" for="inputrole">Role</label>
                    <div class="form-check">
                        <label class="form-check-label" for="role_id">Admin</label>
                    <input class="form-check-input"  type="radio" id="role_id" name="role_id" value="1" @if ($users->role_id == '1')
                            checked
                        @endif>
                    </div>
                    
                    
                </div>
                <div class="form-check py-2">
                    <label class="form-check-label"  for="role_id">Customer</label>
                    <input class="form-check-input"  type="radio" id="role_id" name="role_id" value="2" @if ($users->role_id == '2')
                            checked
                        @endif>
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