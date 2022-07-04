<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Month;
use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('/home', [
            'users' => $users
        ]);

        $user = User::find(1);

        foreach ($user->kunde as $kunde) {
            return view('/home', [
                'kunde' => $kunde
            ]);
        }
    }
    public function create()
    {

        return view('/home');
    }

    public function storeUser()
    {
        $user = new User();
        $user->name = request('name');
        $user->save();

        return redirect('/home');
    }

    public function updateCustomer()
    {
        $customer = new Customer();
        $customer->abbr = request('abbr');
        $customer->user_id = request('user_id');
        $customer->stunden = request('stunden');
        $customer->save();





        return redirect('/home');
    }

    public function week()
    {
        $now = Carbon::now();
        $weekStartDate = $now->startOfWeek()->format('Y-m-d H:i');
        $weekEndDate = $now->endOfWeek()->format('Y-m-d H:i');

        return view('/home', [
            'now' => $now
        ]);
    }
}
