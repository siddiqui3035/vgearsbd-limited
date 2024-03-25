<?php

namespace App\Providers;

use App\Models\Cart;
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
        $carts = Cart::with('product')->get();
        View::composer('frontend.layouts.particles.header', function ($view) use ($carts) {
            $view->with('carts', $carts);
        });

        $categories = Category::get();
        View::composer('frontend.layouts.particles.header', function ($view) use ($categories) {
            $view->with('categories', $categories);
        });
    }
}
