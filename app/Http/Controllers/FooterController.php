<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $footer = Footer::all();
        return view('admin/footer', [
            'footer' => $footer
        ]);
    }

    /* public function edit($id)
    {
        $footer = Footer::where([
            'id' => $id,
        ])->first();
        return view('admin/footer', [
            'footer' => $footer
        ]);
    } */

    public function update(Request $request, $id)
    {

        $footer = Footer::where([
            'id' => $id,
        ])->first();
        $footer->trainer_img = $request->get('trainer_img');
        $footer->trainer_name = $request->get('trainer_name');
        $footer->trainer_p = $request->get('trainer_p');
        $footer->trainer_link = $request->get('trainer_link');
        $footer->save();


        return redirect('admin/footer');
    }
}
