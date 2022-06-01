<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use Illuminate\Http\Request;

class CustomerDashboard extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $plans = Plan::all();
        return view('user-dashboard/welcome', ['plans' => $plans]);
    }
}
