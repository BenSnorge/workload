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
        /*  $footer = Footer::all(); */
        return view('admin/footer');
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

    public function update(Request $request)
    {

        $footer = Footer::find(1);
        $footer->footer_header1 = $request->get('footer_header1');
        $footer->footer_header2 = $request->get('footer_header2');
        $footer->footer_link1 = $request->get('footer_link1');
        $footer->footer_link2 = $request->get('footer_link2');
        $footer->footer_link3 = $request->get('footer_link3');
        $footer->footer_city = $request->get('footer_city');
        $footer->footer_street = $request->get('footer_street');
        $footer->footer_zipcode = $request->get('footer_zipcode');
        $footer->footer_phone = $request->get('footer_phone');
        $footer->save();


        return redirect('admin/footer');
    }
}
