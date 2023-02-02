<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
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

        //
        Gate::define('plantel', function ($user) {
            if($user->tipo_role==1){
                return true;
            }
            return false;
        });

        Gate::define('direccion', function ($user) {
            if($user->tipo_role==2){
                return true;
            }
            return false;
        });

        Gate::define('admin', function ($user) {
            if($user->tipo_role==3){
                return true;
            }
            return false;
        });

    }
}
