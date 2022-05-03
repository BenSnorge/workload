@extends('layouts.admin')
@section('content')
    <div class="container">
    <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-4">
            <div class="card">
                <h5 class="card-header">Edit Nutrition Content Settings</h5>
                <div class="card-body">
            <form method="POST" action="/admin/home-content">
                @csrf
                <div class="form-group py-2">
                    <label for="inputcontentheading1">Content Heading One</label>
                    <input id="inputcontentheading1" type="text" class="form-control " name="content_heading1" value="{{ old('content_heading1', $nutrition1->content_heading) }}" autocomplete="content_heading1" autofocus placeholder="Add Content Heading">
                </div>
                <div class="form-group py-2">
                    <label for="inputcontentimg1">Content Image URL</label>
                    <input id="inputcontentimg1" type="text" class="form-control " value="{{old('content_image1', $nutrition1->content_image)}}" name="content_image1"  autocomplete="content_image1" autofocus placeholder="Add Image URL">
                </div>
                <hr>
                <div class="form-group py-2">
                    <label for="inputcontentheading2">Content Heading Two</label>
                    <input id="inputcontentheading2" type="text" class="form-control " name="content_heading2" value="{{ old('content_heading2', $nutrition2->content_heading) }}" autocomplete="content_heading2" autofocus placeholder="Add Content Heading">
                </div>
                
                <div class="form-group py-2">
                    <label for="inputcontenttext2">Content Text Two</label>
                    <input id="inputcontenttext2" type="text" class="form-control " name="content_p2" value="{{ old('content_p2', $nutrition2->content_p) }}" autocomplete="content_p2" autofocus placeholder="Add Text">
                </div>
                <div class="form-group py-2">
                    <label for="inputcontentbtn1">Button 1</label>
                    <input id="inputcontentbtn1" type="text" class="form-control"
                    name="content_button2"  value="{{old('content_button2', $nutrition2->content_button)}}"  autocomplete="content_button2" autofocus placeholder="Add Button Title">
                </div>
                <div class="form-group py-2">
                    <label for="inputcontentimg1">Content Image URL</label>
                    <input id="inputcontentimg1" type="text" class="form-control " value="{{old('content_image2', $nutrition2->content_image)}}" name="content_image2"  autocomplete="content_image2" autofocus placeholder="Add Image URL">
                </div>
                <hr>
                <div class="form-group py-2">
                    <label for="inputcontentheading3">Content Heading Three</label>
                    <input id="inputcontentheading3" type="text" class="form-control " name="content_heading3" value="{{ old('content_heading3', $nutrition3->content_heading) }}" autocomplete="content_heading3" autofocus placeholder="Add Content Heading">
                </div>
                <div class="form-group py-2">
                    <label for="inputcontenttext3">Content Text Three</label>
                    <input id="inputcontenttext3" type="text" class="form-control " name="content_p3" value="{{ old('content_p3', $nutrition3->content_p) }}" autocomplete="content_p3" autofocus placeholder="Add Text">
                </div>
                <div class="form-group py-2">
                    <label for="inputcontentbtn2">Button 2</label>
                    <input id="inputcontentbtn2" type="text" class="form-control"
                    name="content_button3"  value="{{old('content_button3', $nutrition3->content_button)}}"  autocomplete="content_button3" autofocus placeholder="Add Button Title">
                </div>
                <div class="form-group py-2">
                    <label for="inputcontentimg2">Content Image URL</label>
                    <input id="inputcontentimg2" type="text" class="form-control " value="{{old('content_image3', $nutrition3->content_image)}}" name="content_image3"  autocomplete="content_image3" autofocus placeholder="Add Image URL">
                </div><hr>
                <div class="form-group py-2">
                    <label for="inputcontentheading4">Content Heading Four</label>
                    <input id="inputcontentheading4" type="text" class="form-control " name="content_heading4" value="{{ old('content_heading4', $nutrition4->content_heading) }}" autocomplete="content_heading4" autofocus placeholder="Add Content Heading">
                </div>
                
                <div class="form-group py-2">
                    <label for="inputcontenttext4">Content Text Four</label>
                    <input id="inputcontenttext4" type="text" class="form-control " name="content_p4" value="{{ old('content_p4', $nutrition4->content_p) }}" autocomplete="content_p4" autofocus placeholder="Add Text">
                </div>
                <div class="form-group py-2">
                    <label for="inputcontentbtn3">Button 3</label>
                    <input id="inputcontentbtn3" type="text" class="form-control"
                    name="content_button4"  value="{{old('content_button4', $nutrition4->content_button)}}"  autocomplete="content_button4" autofocus placeholder="Add Button Title">
                </div>
                <div class="form-group py-2">
                    <label for="inputcontentimg3">Content Image URL</label>
                    <input id="inputcontentimg3" type="text" class="form-control " value="{{old('content_image4', $nutrition4->content_image)}}" name="content_image4"  autocomplete="content_image4" autofocus placeholder="Add Image URL">
                </div><hr>
                <div class="form-group py-2">
                    <label for="inputcontentheading5">Content Heading Five</label>
                    <input id="inputcontentheading5" type="text" class="form-control " name="content_heading5" value="{{ old('content_heading5', $nutrition5->content_heading) }}" autocomplete="content_heading5" autofocus placeholder="Add Content Heading">
                </div>
                
                <div class="form-group py-2">
                    <label for="inputcontenttext5">Content Text Five</label>
                    <input id="inputcontenttext5" type="text" class="form-control " name="content_p5" value="{{ old('content_p5', $nutrition5->content_p) }}" autocomplete="content_p5" autofocus placeholder="Add Text">
                </div>
                <div class="form-group py-2">
                    <label for="inputcontentbtn4">Button 4</label>
                    <input id="inputcontentbtn4" type="text" class="form-control"
                    name="content_button5"  value="{{old('content_button5', $nutrition5->content_button)}}"  autocomplete="content_button5" autofocus placeholder="Add Button Title">
                </div>
                <div class="form-group py-2">
                    <label for="inputcontentimg4">Content Image URL</label>
                    <input id="inputcontentimg4" type="text" class="form-control " value="{{old('content_image5', $nutrition5->content_image)}}" name="content_image5"  autocomplete="content_image5" autofocus placeholder="Add Image URL">
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