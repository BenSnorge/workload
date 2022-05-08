<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $courses = Course::all();
        return view('admin/all-classes', [
            'courses' => $courses
        ]);
    }

    public function create()
    {

        return view('admin/new-class');
    }

    public function store()
    {

        $course = new Course();
        $course->course_img = request('course_img');
        $course->course_title = request('course_title');
        $course->course_p = request('course_p');
        $course->course_link = request('course_link');
        $course->save();

        return redirect('/admin/all-classes');
    }

    public function edit($id)
    {
        $course = Course::where([
            'id' => $id,
        ])->first();
        return view('admin/class-edit', [
            'course' => $course
        ]);
    }

    public function update(Request $request, $id)
    {


        $course = Course::where([
            'id' => $id,
        ])->first();
        $course->course_img = $request->get('course_img');
        $course->course_title = $request->get('course_title');
        $course->course_p = $request->get('course_p');
        $course->course_link = $request->get('course_link');
        $course->save();


        return redirect('admin/all-classes');
    }

    public function delete($id)
    {
        $course = Course::find($id);
        $course->delete();
        return redirect('/admin/all-classes');
    }
}
