<?php

namespace App\Providers;

use App\Models\Card;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\View;
use App\Models\Home;


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
        $home = Home::find(1);
        View::share("home", $home);
        $card = Card::find(1);
        View::share('card', $card);
    }
}
