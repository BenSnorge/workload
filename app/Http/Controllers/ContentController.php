<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content;

class ContentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('is_admin');
    }
    public function homeContent()
    {
        return view('/admin/home-content');
    }

    public function update(Request $request)
    {

        $content1 = Content::find(1);
        $content1->content_heading = $request->get('content_heading1');
        $content1->content_p = $request->get('content_p1');
        $content1->save();

        $content2 = Content::find(2);
        $content2->content_heading = $request->get('content_heading2');
        $content2->content_p = $request->get('content_p2');
        $content2->content_button = $request->get('content_button2');
        $content2->content_image = $request->get('content_image2');
        $content2->save();

        $content3 = Content::find(3);
        $content3->content_heading = $request->get('content_heading3');
        $content3->content_p = $request->get('content_p3');
        $content3->content_button = $request->get('content_button3');
        $content3->content_image = $request->get('content_image3');
        $content3->save();

        $content4 = Content::find(4);
        $content4->content_heading = $request->get('content_heading4');
        $content4->content_p = $request->get('content_p4');
        $content4->content_button = $request->get('content_button4');
        $content4->content_image = $request->get('content_image4');
        $content4->save();

        $content5 = Content::find(5);
        $content5->content_heading = $request->get('content_heading5');
        $content5->content_p = $request->get('content_p5');
        $content5->content_button = $request->get('content_button5');
        $content5->content_image = $request->get('content_image5');
        $content5->save();

        return redirect('admin/home-content');
    }
}
