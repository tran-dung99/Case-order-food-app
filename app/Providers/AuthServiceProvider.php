<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('crud-user',function ($user){
            if($user->role == "1"){
                return true;
            }
        });

        Gate::define('update_edit_category',function ($user){
            if($user->role== "1"){
                return true;
            }
        });

        Gate::define('admin',function ($user){
            if($user->role == "1"){
                return true;
            }
        });

    }
}
