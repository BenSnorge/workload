<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;

class HomeController extends Controller
{

    public function saveHome()
    {
        $id = 1;
        request()->validate([
            'site_title' => ['required', 'string', 'max:255'],
            'hero_subtitle' => ['required', 'string'],
            /*  'address_2' => ['string'], */
            'hero_title' => ['required', 'string'],
            'state' => ['required', 'string'],
            'zipcode' => ['required', 'string'],
            'phone_number' => ['required', 'string']
        ]);

        $home = Home::find($id);
        $home->site_title = request('site_title');
        $home->address_1 = request('hero_subtitle');
        $home->address_2 = request('hero_title');
        $home->save();

        return redirect('admin/home-page');
    }
}
