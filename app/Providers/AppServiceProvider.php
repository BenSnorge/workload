<?php

namespace App\Providers;

use App\Models\Customer;
use App\Models\Kunde;
use App\Models\Month;
use App\Models\User;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\View;



class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        /* Cashier::useCustomerModel(User::class); */

        $users = User::all();
        View::share('users', $users);

        $kunden = Kunde::all();
        View::share('kunden', $kunden);

        $months = Month::all();
        View::share('months', $months);

        $customers = Customer::all();
        View::share('customers', $customers);

        /* foreach (Month::all() as $monat) {
            echo $monat->juli_w1;
            View::share('monat', $monat);
        } */
        $now = Carbon::now();
        $weekStartDate = $now->startOfWeek(Carbon::MONDAY)->format('d.m');
        $weekEndDate = $now->endOfWeek(Carbon::FRIDAY)->format('d.m');
        View::share('now', $now);
        View::share('weekStartDate', $weekStartDate);
        View::share('weekEndDate', $weekEndDate);
    }
}
