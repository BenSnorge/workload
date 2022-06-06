<?php

namespace App\Http\Controllers\Stripe;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Cashier\Subscription;

class SubscriptionController extends Controller
{
    public function update($subscription)
    {
        $user = Auth::user();

        $user->subscription($subscription)->resume();
        return redirect('/user-dashboard/welcome');
    }
    public function destroy($subscription)
    {
        $user = Auth::user();

        $user->subscription($subscription)->cancel();
        return redirect('/user-dashboard/welcome');
    }
}
