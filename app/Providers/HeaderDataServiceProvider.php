<?php

namespace App\Providers;

use App\Models\Country;
use App\Models\FrontendMenu;
use App\Models\ProfileType;
use View;
use Illuminate\Support\ServiceProvider;

class HeaderDataServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer('frontend.partials.header', function ($view) {
            $data['countries'] = Country::get();
            $data['profile_types'] = ProfileType::get();
            $data['menuItems'] = FrontendMenu::with('children')->whereNull('parent_id')->orderBy('order', 'asc')->get();
            // $data['feedbacks'] = Feedback::get();

            // Pass the $data array to the view
            $view->with('data', $data);
        });
    }
}
