<?php

namespace App\Http\Controllers\Stripe;

use App\Http\Controllers\Controller;
use App\Models\Plan;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function indexYearly()
    {
        return view('/pages/year', [
            'intent' => auth()->user()->createSetupIntent()
        ]);
    }

    public function indexMonthly()
    {
        return view('/pages/month', [
            'intent' => auth()->user()->createSetupIntent()
        ]);
    }

    public function storeYearly(Request $request)
    {
        $user = $request->user();

        $paymentMethod = $request->input('payment-method');

        $user->update([
            'line1' => $request->line1,
            'line2' => $request->line2,
            'city' => $request->city,
            'state' => $request->state,
            'country' => $request->country,
            'postal_code' => $request->postalcode,
            'city' => $request->city,
        ]);

        $plan = Plan::where('stripe_name', 'yearly')->first();

        /*     return $plan->stripe_name; */

        $user->newSubscription($plan->stripe_name, $plan->stripe_price_id)
            ->create($paymentMethod);


        return redirect('/dashboard/billing')->with('success', 'Thank you for subscribing!');
    }
    public function storeMonthly(Request $request)
    {
        $user = $request->user();

        $paymentMethod = $request->input('payment-method');

        $user->update([
            'line1' => $request->line1,
            'line2' => $request->line2,
            'city' => $request->city,
            'state' => $request->state,
            'country' => $request->country,
            'postal_code' => $request->postalcode,
            'city' => $request->city,
        ]);

        $plan = Plan::where('stripe_name', 'monthly')->first();

        /*     return $plan->stripe_name; */

        $user->newSubscription($plan->stripe_name, $plan->stripe_price_id)
            ->create($paymentMethod);


        return redirect('/dashboard/billing')->with('success', 'Thank you for subscribing!');
    }
}
