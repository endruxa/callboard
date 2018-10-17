<?php

namespace App\Providers;

use App\User;
use Illuminate\Support\ServiceProvider;

class UserProfileServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->getAvatar();
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    public function getAvatar()
    {
        \View::share('user', auth()->user());

    }

}
