<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //

        Gate::define('access-admin', function ($user) {
            return $user->profile_type == 'App\Admin';
        });

        Gate::define('access-client', function ($user) {
            return $user->profile_type == 'App\Client';
        });

        Gate::define('access-employee', function ($user) {
            return $user->profile_type == 'App\Employee';
        });
    }
}
