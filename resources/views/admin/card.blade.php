@extends('layouts.admin')
@section('content')
    <div class="container">
    <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-4">
            <div class="card">
                <h5 class="card-header">Edit Home Page Card Settings</h5>
                <div class="card-body">
            <form method="POST" action="/admin/card">
                @csrf
                <div class="form-group py-2">
                    <label for="inputicon">Card1 Icon</label>
                    <input id="inputicon" type="text" class="form-control" name="card1_icon" value="{{ old('card1_icon', $card->card1_icon) }}" autocomplete="card1_icon" autofocus placeholder="Add FontAwesome Icon Class name">
                </div>
                <div class="form-group py-2">
                    <label for="inputcardheading">Card1 Heading</label>
                    <input id="inputcardheading" type="text" class="form-control" name="card1_heading" value="{{ old('card1_heading', $card->card1_heading) }}" autocomplete="card1_heading" autofocus placeholder="Add Card Heading">
                </div>
                <div class="form-group py-2">
                    <label for="inputcarddescription">Card1 Heading</label>
                    <input id="inputcarddescription" type="text" class="form-control" name="card1_description" value="{{ old('card1_description', $card->card1_description) }}" autocomplete="card1_description" autofocus placeholder="Add Card Description">
                </div>
                <div class="form-group py-2">
                    <label for="inputicon">Card2 Icon</label>
                    <input id="inputicon" type="text" class="form-control" name="card2_icon" value="{{ old('card2_icon', $card->card2_icon) }}" autocomplete="card2_icon" autofocus placeholder="Add FontAwesome Icon Class name">
                </div>
                <div class="form-group py-2">
                    <label for="inputcardheading">Card2 Heading</label>
                    <input id="inputcardheading" type="text" class="form-control" name="card2_heading" value="{{ old('card2_heading', $card->card2_heading) }}" autocomplete="card2_heading" autofocus placeholder="Add Card Heading">
                </div>
                <div class="form-group py-2">
                    <label for="inputcarddescription">Card2 Description</label>
                    <input id="inputcarddescription" type="text" class="form-control" name="card2_description" value="{{ old('card2_description', $card->card2_description) }}" autocomplete="card2_description" autofocus placeholder="Add Card Description">
                </div>
                <div class="form-group py-2">
                    <label for="inputicon">Card3 Icon</label>
                    <input id="inputicon" type="text" class="form-control" name="card3_icon" value="{{ old('card3_icon', $card->card3_icon) }}" autocomplete="card3_icon" autofocus placeholder="Add FontAwesome Icon Class name">
                </div>
                <div class="form-group py-2">
                    <label for="inputcardheading">Card3 Heading</label>
                    <input id="inputcardheading" type="text" class="form-control" name="card3_heading" value="{{ old('card3_heading', $card->card3_heading) }}" autocomplete="card3_heading" autofocus placeholder="Add Card Heading">
                </div>
                <div class="form-group py-2">
                    <label for="inputcarddescription">Card3 Description</label>
                    <input id="inputcarddescription" type="text" class="form-control" name="card3_description" value="{{ old('card3_description', $card->card3_description) }}" autocomplete="card3_description" autofocus placeholder="Add Card Description">
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