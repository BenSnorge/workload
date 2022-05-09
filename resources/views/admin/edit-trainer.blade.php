@extends('layouts.admin')
@section('content')
    <div class="container">
    <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-4">
            <div class="card">
                <h5 class="card-header">Edit A Trainer</h5>
                <div class="card-body">
            <form method="POST" action="/admin/all-trainers/{{$trainer->id}}">
                @csrf
                {{-- @method('PUT') --}}
                <div class="form-group py-2">
                    <label for="inputtrainerimg">Trainer Image URL</label>
                    <input id="inputtrainerimg" type="text" class="form-control " name="trainer_img" value="{{ old('trainer_img', $trainer->trainer_img) }}"  autofocus placeholder="Trainer Image URL">
                </div>
                <div class="form-group py-2">
                    <label for="inputtrainername">Trainer Name</label>
                    <input id="inputtrainername" type="text" class="form-control " name="trainer_name" value="{{ old('trainer_name', $trainer->trainer_name) }}"  autofocus placeholder="Trainer Name">
                </div>
                <div class="form-group py-2">
                    <label for="inputtrainerp">Trainer Description</label>
                    <input id="inputtrainerp" type="text" class="form-control " name="trainer_p" value="{{ old('trainer_p', $trainer->trainer_p) }}" autocomplete="" autofocus placeholder="Add A Description">
                </div>
                <div class="form-group py-2">
                    <label for="inputtrainerbtn">Button Name</label>
                    <input id="inputtrainerbtn" type="text" class="form-control" name="trainer_link" value="{{ old('trainer_link', $trainer->trainer_link) }}" autofocus placeholder="Add Button Name">
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