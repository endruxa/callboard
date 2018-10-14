<?php

namespace App\Providers;

use App\Policies\UserProfilePolicy;
use App\UserProfile;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
        /*'App\UserProfile' => 'App\Policies\UserProfilePolicy'*/
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        /*$this->registerProfilePolicies();*/
        //
    }

   /* public function registerProfilePolicies()
    {
        Gate::resource('profile', 'App\Policies\UserProfilePolicy');

        Gate::define('create-profile', function($user) {
            $user->hasAccess(['created-post']);
        });

        Gate::define('store-profile', function($user) {
            $user->hasAccess(['store-profile']);
        });

        Gate::define('update-profile', function($user, UserProfile $profile) {
            $user->hasAccess(['update-profile']) or $user->id == $profile->user_id;
        });

        Gate::define('delete-profile', function($user) {
            $user->hasAccess(['delete-profile']);
        });
    }*/
}
