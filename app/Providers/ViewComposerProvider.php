<?php

namespace App\Providers;

use App\Banner;
use App\Video;
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
        });

        view()->composer('frontend.right_index', function ($view) {
            $view->with('rightBanners',  Banner::where('status', true)->where('position', 'right')->get());
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
