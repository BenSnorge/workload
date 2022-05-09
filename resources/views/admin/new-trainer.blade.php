@extends('layouts.admin')
@section('content')
    <div class="container">
    <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-4">
            <div class="card">
                <h5 class="card-header">Create A New Trainer</h5>
                <div class="card-body">
            <form method="POST" action="/admin/all-trainers">
                @csrf
                <div class="form-group py-2">
                    <label for="inputtrainerimg">Trainer Image URL</label>
                    <input id="inputtrainerimg" type="text" class="form-control " name="trainer_img" value=""  autofocus placeholder="Trainer Image URL">
                </div>
                <div class="form-group py-2">
                    <label for="inputtrainername">Trainer Name</label>
                    <input id="inputtrainername" type="text" class="form-control " name="trainer_name" value=""  autofocus placeholder="Trainer Name">
                </div>
                <div class="form-group py-2">
                    <label for="inputtrainerp">Trainer Description</label>
                    <input id="inpinputtrainerputcoursep" type="text" class="form-control " name="trainer_p" value="" autocomplete="" autofocus placeholder="Add Site Title">
                </div>
                <div class="form-group py-2">
                    <label for="inputtrainerbtn">Button Name</label>
                    <input id="inputtrainerbtn" type="text" class="form-control" name="trainer_link" value="" autofocus placeholder="Add Button Name">
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