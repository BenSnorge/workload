<?php

namespace App\Http\Controllers;

use App\Models\BenefitsPlanOne;
use Illuminate\Http\Request;

class BenefitsPlanOneController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('is_admin');
    }
    public function index()
    {
        $benefitsOne = BenefitsPlanOne::all();
        return view('admin/all-plan-one', [
            'benefitsOne' => $benefitsOne
        ]);
    }

    public function create()
    {

        return view('admin/create-benefits-plan-one');
    }

    public function store()
    {

        $benefitsOne = new BenefitsPlanOne();
        $benefitsOne->benefit = request('benefit');
        $benefitsOne->icon = request('icon');

        $benefitsOne->save();

        return redirect('/admin/all-plan-one');
    }

    public function edit($id)
    {
        $benefitsOne = BenefitsPlanOne::where([
            'id' => $id,
        ])->first();
        return view('admin/plan-one-edit', [
            'benefitsOne' => $benefitsOne
        ]);
    }

    public function update(Request $request, $id)
    {


        $benefitsOne = BenefitsPlanOne::where([
            'id' => $id,
        ])->first();
        $benefitsOne->benefit = $request->get('benefit');
        $benefitsOne->icon = $request->get('icon');

        $benefitsOne->save();


        return redirect('admin/all-plan-one');
    }

    public function delete($id)
    {
        $benefitsOne = BenefitsPlanOne::find($id);
        $benefitsOne->delete();
        return redirect('/admin/all-plan-one');
    }
}
