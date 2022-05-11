@extends('layouts.admin')
@section('content')
    <div class="container">
    <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-4">
            <div class="card">
                <h5 class="card-header">Edit Footer Settings</h5>
                <div class="card-body">
            <form method="POST" action="/admin/footer">
                @csrf
                <div class="form-group py-2">
                    <label for="inputfooterheading1">Heading One</label>
                    <input id="inputfooterheading1" type="text" class="form-control " name="footer_header1" value="{{ old('footer_header1', $footer->footer_header1) }}" autocomplete="footer_header1" autofocus placeholder="Add Heading">
                </div>
                <div class="form-group py-2">
                    <label for="inputfooterheading2">Heading Two</label>
                    <input id="inputfooterheading2" type="text" class="form-control " name="footer_header2" value="{{ old('footer_header2', $footer->footer_header2) }}" autocomplete="footer_header2" autofocus placeholder="Add Heading 2">
                </div>
                <div class="form-group py-2">
                    <label for="inputfooterlink1">Link 1</label>
                    <input id="inputfooterlink1" type="text" class="form-control " name="footer_link1" value="{{ old('footer_link1', $footer->footer_link1) }}" autocomplete="footer_link1" autofocus placeholder="Add Link 1">
                </div>
                <div class="form-group py-2">
                    <label for="inputfooterlink2">Link 2</label>
                    <input id="inputfooterlink2" type="text" class="form-control " name="footer_link2" value="{{ old('footer_link2', $footer->footer_link2) }}" autocomplete="footer_link2" autofocus placeholder="Add Link 2">
                </div>
                <div class="form-group py-2">
                    <label for="inputfooterlink3">Link 3</label>
                    <input id="inputfooterlink3" type="text" class="form-control " name="footer_link3" value="{{ old('footer_link3', $footer->footer_link3) }}" autocomplete="footer_link3" autofocus placeholder="Add Link 3">
                </div>
                <div class="form-group py-2">
                    <label for="inputfootercity">City</label>
                    <input id="inputfootercity" type="text" class="form-control " name="footer_city" value="{{ old('footer_city', $footer->footer_city) }}" autocomplete="footer_city" autofocus placeholder="City">
                </div>
                <div class="form-group py-2">
                    <label for="inputfooterstreet">Street</label>
                    <input id="inputfooterstreet" type="text" class="form-control " name="footer_street" value="{{ old('footer_street', $footer->footer_street) }}" autocomplete="footer_street" autofocus placeholder="Street">
                </div>
                <div class="form-group py-2">
                    <label for="inputfooterzip">Zipcode</label>
                    <input id="inputfooterzip" type="text" class="form-control " name="footer_zipcode" value="{{ old('footer_zipcode', $footer->footer_zipcode) }}" autocomplete="footer_zipcode" autofocus placeholder="Zip Code">
                </div>
                <div class="form-group py-2">
                    <label for="inputfooterphone">Phone Number</label>
                    <input id="inputfooterphone" type="text" class="form-control " name="footer_phone" value="{{ old('footer_phone', $footer->footer_phone) }}" autocomplete="footer_phone" autofocus placeholder="Phone Number">
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