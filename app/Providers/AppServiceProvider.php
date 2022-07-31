<?php

namespace App\Providers;

use App\Models\Category;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
        // if(config('app.env') === 'production') {
        //     \URL::forceScheme('https');
        // }

        $categories = Category::take(5)->get();
        View::share('categories', $categories);

        // $setting = Setting::first();
        // View::share('setting', $setting);
    
    }
}
