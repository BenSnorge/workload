<?php

namespace App\Http\Controllers;

use App\Models\CourseSetting;
use Illuminate\Http\Request;

class CourseSettingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('is_admin');
    }
    public function index()
    {
        return view('/admin/classes-settings');
    }

    public function update(Request $request)
    {

        $courseSetting = CourseSetting::find(1);
        $courseSetting->class_heading = $request->get('class_heading');
        $courseSetting->class_image = $request->get('class_image');
        $courseSetting->save();

        return redirect('/admin/classes-settings');
    }
}
