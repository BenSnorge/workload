@extends('layouts.admin')
@section('content')
    <div class="container">
    <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-4">
            <div class="card">
                <h5 class="card-header">Edit Membership Page Settings</h5>
                <div class="card-body">
            <form method="POST" action="/admin/membership-settings">
                @csrf
                <div class="form-group py-2">
                    <label for="inputmembershipheading">Heading</label>
                    <input id="inputmembershipheading" type="text" class="form-control " name="membership_heading1" value="{{ old('membership_heading1', $membership1->membership_heading) }}" autocomplete="membership_heading1" autofocus placeholder="Add Header">
                </div>
                <div class="form-group py-2">
                    <label for="inputimg">Image URL</label>
                    <input id="inputimg" type="text" class="form-control " name="membership_img1" value="{{ old('membership_img1', $membership1->membership_img) }}" autocomplete="membership_img1" autofocus placeholder="Add Image">
                </div>
                <div class="form-group py-2">
                    <label for="inputmembershippro">Plan One Name</label>
                    <input id="inputmembershippro" type="text" class="form-control " name="membership_plan1" value="{{ old('membership_plan1', $membership2->membership_plan) }}" autocomplete="membership_plan1" autofocus placeholder="Add Plan Header">
                </div>
                <div class="form-group py-2">
                    <label for="inputprice">Price</label>
                    <input id="inputprice" type="text" class="form-control " name="membership_price1" value="{{ old('membership_price1', $membership2->membership_price) }}" autocomplete="membership_price1" autofocus placeholder="Add Price">
                </div>
                <div class="form-group py-2">
                    <label for="inputmembershipbasic">Plan Two Name</label>
                    <input id="inputmembershipbasic" type="text" class="form-control " name="membership_plan2" value="{{ old('membership_plan2', $membership3->membership_plan) }}" autocomplete="membership_plan2" autofocus placeholder="Add Plan Header">
                </div>
                <div class="form-group py-2">
                    <label for="inputprice">Price</label>
                    <input id="inputprice" type="text" class="form-control " name="membership_price2" value="{{ old('membership_price2', $membership3->membership_price) }}" autocomplete="membership_price2" autofocus placeholder="Add Price">
                </div>

                <div class="form-group py-2">
                    <label for="inputdescription">Description</label>
                    <input id="inputdescription" type="text" class="form-control " name="membership_description1" value="{{ old('membership_description1', $membership1->membership_description) }}" autocomplete="membership_description1" autofocus placeholder="Add Image">
                </div>
                <div class="form-group py-2">
                    <label for="inputbtn1">Button Title</label>
                    <input id="inputbtn1" type="text" class="form-control " name="membership_btn1" value="{{ old('membership_btn1', $membership2->membership_btn) }}" autocomplete="membership_btn1" autofocus placeholder="Add Image">
                </div>
                <div class="form-group py-2">
                    <label for="inputbtn2">Button 2 Title</label>
                    <input id="inputbtn2" type="text" class="form-control " name="membership_btn2" value="{{ old('membership_btn2', $membership3->membership_btn) }}" autocomplete="membership_btn2" autofocus placeholder="Add Image">
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