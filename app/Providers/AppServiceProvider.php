<?php

namespace App\Providers;

use App\Models\Card;
use App\Models\Content;
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
        $content1 = Content::find(1);
        View::share('content1', $content1);
        $content2 = Content::find(2);
        View::share('content2', $content2);
        $content3 = Content::find(3);
        View::share('content3', $content3);
        $content4 = Content::find(4);
        View::share('content4', $content4);
        $content5 = Content::find(5);
        View::share('content5', $content5);

        $nutrition1 = Content::find(1);
        View::share('nutrition1', $nutrition1);
        $nutrition2 = Content::find(2);
        View::share('nutrition2', $nutrition2);
        $nutrition3 = Content::find(3);
        View::share('nutrition3', $nutrition3);
        $nutrition4 = Content::find(4);
        View::share('nutrition4', $nutrition4);
        $nutrition5 = Content::find(5);
        View::share('nutrition5', $nutrition5);
    }
}
