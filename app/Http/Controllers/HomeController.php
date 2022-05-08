<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Home;

use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\View;
use App\Models\Course;


class HomeController extends Controller
{
    public function showCourses()
    {
        $courses = Course::all();
        return view('pages/classes', [
            'courses' => $courses
        ]);
    }
    public function index()
    {
        /* $id = 1;
        $home = Home::find($id); */
        return view('pages/home');
    }
    public function general()
    {
        return view('/admin/home-page');
    }

    public function saveHome(Request $request)
    {
        $id = 1;
        $home = Home::find($id);
        $home->site_title = $request->get('site_title');
        $home->company_name = $request->get('company_name');
        $home->hero_subtitle = $request->get('hero_subtitle');
        $home->hero_title = $request->get('hero_title');
        $home->hero_link = $request->get('hero_link');
        $home->hero_image = $request->get('hero_image');
        $home->save();
        return redirect('admin/home-page');
    }
}
