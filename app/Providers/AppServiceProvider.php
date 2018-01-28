<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
//       Schema::defaultStringLenght(191);

//        $this->registerPolicies();
//        Gate::define('admin-only', function ($user) {
//            if($user->isAdmin)
//            {
//                return true;
//            }
//            return false;
//        });

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
