<?php

namespace App\Providers;

use App\Banner;
use App\Product;
use App\Video;
use App\Post;
use Illuminate\Support\ServiceProvider;

class ViewComposerProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        // Using class based composers...
        view()->composer(
            'profile', 'App\Http\ViewComposers\ProfileComposer'
        );

        // Using Closure based composers...
        view()->composer('dashboard', function ($view) {
            //$view->with('latestPosts',  Post::latest()->limit(6)->get());
        });

        view()->composer('frontend.header', function ($view) {
            $view->with('topBanners',  Banner::where('status', true)->where('position', 'top')->get());
            $view->with('topNormalBanners',  Banner::where('status', true)->where('position', 'top_normal')->get());
            $view->with('headerProducts', Product::where('slug', '!=', 'be-birth')->get());
        });

        view()->composer('frontend.left_banner', function ($view) {
            $view->with('leftBanners',  Banner::where('status', true)->where('position', 'left')->limit(2)->get());
        });

        view()->composer('frontend.right', function ($view) {
            $view->with('rightNormalBanners',  Banner::where('status', true)->where('position', 'right_normal')->limit(1)->get());
            $view->with('rightProducts',  Product::where('slug', '!=', 'be-birth')->get());
            $view->with('rightNews',  Post::publish()->latest('updated_at')->limit(5)->get());
        });

        view()->composer('frontend.right_index', function ($view) {
            $view->with('rightBanners',  Banner::where('status', true)->where('position', 'right_index')->get());
            $view->with('featureVideos',  Video::latest('updated_at')->limit(3)->get());
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
