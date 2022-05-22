<?php

namespace App\Http\Controllers;

use App\Models\BenefitsPlanTwo;
use Illuminate\Http\Request;

class BenefitsPlanTwoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('is_admin');
    }
    public function index()
    {
        $benefitsTwo = BenefitsPlanTwo::all();
        return view('admin/all-plan-two', [
            'benefitsTwo' => $benefitsTwo
        ]);
    }

    public function create()
    {

        return view('admin/create-benefits-plan-two');
    }

    public function store()
    {

        $benefitsTwo = new BenefitsPlanTwo();
        $benefitsTwo->benefit = request('benefit');
        $benefitsTwo->icon = request('icon');

        $benefitsTwo->save();

        return redirect('/admin/all-plan-two');
    }

    public function edit($id)
    {
        $benefitsTwo = BenefitsPlanTwo::where([
            'id' => $id,
        ])->first();
        return view('admin/plan-two-edit', [
            'benefitsTwo' => $benefitsTwo
        ]);
    }

    public function update(Request $request, $id)
    {


        $benefitsTwo = BenefitsPlanTwo::where([
            'id' => $id,
        ])->first();
        $benefitsTwo->benefit = $request->get('benefit');
        $benefitsTwo->icon = $request->get('icon');

        $benefitsTwo->save();


        return redirect('admin/all-plan-two');
    }

    public function delete($id)
    {
        $benefitsTwo = BenefitsPlanTwo::find($id);
        $benefitsTwo->delete();
        return redirect('/admin/all-plan-two');
    }
}
