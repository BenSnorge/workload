<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Home;


class HomeController extends Controller
{

    public function index()
    {
        $id = 1;
        $home = Home::find($id);

        return view('pages/home')->with("home", $home);;
    }

    public function store(Request $request)
    {
        $id = 1;
        request()->validate([
            'site_title' => ['required', 'string', 'max:255'],
            'hero_subtitle' => ['required', 'string'],
            'hero_title' => ['string'],
            'hero_link' => ['required', 'string'],
            'hero_image' => ['required', 'string'],
        ]);

        $home = Home::find($id);
        $home->site_title = request('site_title');
        $home->home_subtitle = request('hero_subtitle');
        $home->hero_title = request('hero_title');
        $home->hero_link = request('hero_link');
        $home->hero_image = request('hero_image');
        $home->save();

        return redirect('admin/settings/general');
    }
}
