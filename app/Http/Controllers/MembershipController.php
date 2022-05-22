<?php

namespace App\Http\Controllers;

use App\Models\Membership;
use Illuminate\Http\Request;

class MembershipController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('is_admin');
    }
    public function index()
    {
        return view('admin/membership-settings');
    }

    public function indexPro()
    {
        return view('admin/membership-pro');
    }

    public function update(Request $request)
    {

        $membership1 = Membership::find(1);
        $membership1->membership_heading = $request->get('membership_heading1');
        $membership1->membership_img = $request->get('membership_img1');
        $membership1->membership_description = $request->get('membership_description1');
        $membership1->save();

        return redirect('/admin/membership-settings');
    }
}
