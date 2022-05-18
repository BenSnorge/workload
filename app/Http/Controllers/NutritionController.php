<?php

namespace App\Http\Controllers;

use App\Models\Nutrition;
use Illuminate\Http\Request;

class NutritionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('is_admin');
    }
    public function nutritionContent()
    {
        return view('/admin/nutrition');
    }

    public function update(Request $request)
    {

        $nutrition1 = Nutrition::find(1);
        $nutrition1->content_heading = $request->get('content_heading1');
        $nutrition1->content_image = $request->get('content_image1');
        $nutrition1->save();

        $nutrition2 = Nutrition::find(2);
        $nutrition2->content_heading = $request->get('content_heading2');
        $nutrition2->content_p = $request->get('content_p2');
        $nutrition2->content_image = $request->get('content_image2');
        $nutrition2->save();

        $nutrition3 = Nutrition::find(3);
        $nutrition3->content_heading = $request->get('content_heading3');
        $nutrition3->content_p = $request->get('content_p3');
        $nutrition3->content_image = $request->get('content_image3');
        $nutrition3->save();

        $nutrition4 = Nutrition::find(4);
        $nutrition4->content_heading = $request->get('content_heading4');
        $nutrition4->content_p = $request->get('content_p4');
        $nutrition4->content_image = $request->get('content_image4');
        $nutrition4->save();

        $nutrition5 = Nutrition::find(5);
        $nutrition5->content_heading = $request->get('content_heading5');
        $nutrition5->content_p = $request->get('content_p5');
        $nutrition5->content_image = $request->get('content_image5');
        $nutrition5->save();

        return redirect('admin/nutrition');
    }
}
