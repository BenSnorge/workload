<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Social;

class SocialController extends Controller
{
    public function socialContent()
    {
        return view('/admin/social');
    }

    public function update(Request $request)
    {

        $social1 = Social::find(1);
        $social1->link = $request->get('link1');
        $social1->save();

        $social2 = Social::find(2);
        $social2->link = $request->get('link2');
        $social2->save();

        $social3 = Social::find(3);
        $social3->link = $request->get('link3');
        $social3->save();

        $social4 = Social::find(4);
        $social4->link = $request->get('link4');
        $social4->save();

        return redirect('admin/social');
    }
}
