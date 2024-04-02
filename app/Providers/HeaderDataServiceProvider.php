<?php

namespace App\Providers;


use App\Models\Site;
use App\Models\User;
use App\Models\Country;
use App\Models\ProfileType;
use App\Models\FrontendMenu;
use Illuminate\Support\Facades\DB;
use App\Models\ChMessage as Message;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;
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
            if (Schema::hasTable('countries')) {
                $data['countries'] = Country::get();
            } else {
                $data['countries'] = null;
            }

            if (Schema::hasTable('sites')) {
                $data['site'] = Site::first();
            } else {
                $data['site'] = null;
            }

            if (Schema::hasTable('profile_types')) {
                $data['profile_types'] = ProfileType::get();
            } else {
                $data['profile_types'] = null;
            }

            if (Schema::hasTable('frontend_menus')) {
                $data['menuItems'] = FrontendMenu::with('children')->whereNull('parent_id')->orderBy('order', 'asc')->get();
            } else {
                $data['menuItems'] = null;
            }

            if (Schema::hasTable('users') && Auth::check()) {
                $data['user'] = User::where('id', '=', Auth::user()->id)->first();
            } else {
                $data['user'] = null;
            }
            // $data['users'] = Message::join('users',  function ($join) {
            //     $join->on('ch_messages.from_id', '=', 'users.id')
            //         ->orOn('ch_messages.to_id', '=', 'users.id');
            // })
            // ->where(function ($q) {
            //     $q->where('ch_messages.from_id', Auth::user()->id)
            //     ->orWhere('ch_messages.to_id', Auth::user()->id);
            // })
            // ->where('users.id','!=',Auth::user()->id)
            // ->select('users.*',DB::raw('MAX(ch_messages.created_at) max_created_at'))
            // ->orderBy('max_created_at', 'desc')
            // ->groupBy('users.id');
            // $data['feedbacks'] = Feedback::get();

            // Pass the $data array to the view
            $view->with('data', $data);
        });
    }
}
