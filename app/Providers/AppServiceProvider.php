<?php

namespace App\Providers;

use App\Models\Card;
use App\Models\Content;
use App\Models\CourseSetting;
use App\Models\Nutrition;
use App\Models\Social;
use App\Models\Course;
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

        $nutrition1 = Nutrition::find(1);
        View::share('nutrition1', $nutrition1);
        $nutrition2 = Nutrition::find(2);
        View::share('nutrition2', $nutrition2);
        $nutrition3 = Nutrition::find(3);
        View::share('nutrition3', $nutrition3);
        $nutrition4 = Nutrition::find(4);
        View::share('nutrition4', $nutrition4);
        $nutrition5 = Nutrition::find(5);
        View::share('nutrition5', $nutrition5);
        $nutrition6 = Nutrition::find(6);
        View::share('nutrition6', $nutrition6);

        $social1 = Social::find(1);
        View::share('social1', $social1);
        $social2 = Social::find(2);
        View::share('social2', $social2);
        $social3 = Social::find(3);
        View::share('social3', $social3);
        $social4 = Social::find(4);
        View::share('social4', $social4);

        $courseSettings = CourseSetting::find(1);
        View::share('courseSetting', $courseSettings);

        $courses = Course::all();
        View::share('courses', $courses);
    }
}
