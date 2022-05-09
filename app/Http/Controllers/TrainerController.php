<?php

namespace App\Http\Controllers;

use App\Models\Trainer;
use Illuminate\Http\Request;

class TrainerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $trainers = Trainer::all();
        return view('admin/all-trainers', [
            'trainers' => $trainers
        ]);
    }

    public function create()
    {

        return view('admin/new-trainer');
    }

    public function store()
    {

        $trainer = new Trainer();
        $trainer->trainer_img = request('trainer_img');
        $trainer->trainer_name = request('trainer_name');
        $trainer->trainer_p = request('trainer_p');
        $trainer->trainer_link = request('trainer_link');
        $trainer->save();

        return redirect('/admin/all-trainers');
    }

    public function edit($id)
    {
        $trainer = Trainer::where([
            'id' => $id,
        ])->first();
        return view('admin/edit-trainer', [
            'trainer' => $trainer
        ]);
    }

    public function update(Request $request, $id)
    {


        $trainer = Trainer::where([
            'id' => $id,
        ])->first();
        $trainer->trainer_img = $request->get('trainer_img');
        $trainer->trainer_name = $request->get('trainer_name');
        $trainer->trainer_p = $request->get('trainer_p');
        $trainer->trainer_link = $request->get('trainer_link');
        $trainer->save();


        return redirect('admin/all-trainers');
    }

    public function delete($id)
    {
        $trainer = Trainer::find($id);
        $trainer->delete();
        return redirect('/admin/all-trainers');
    }
}
