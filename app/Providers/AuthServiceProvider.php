<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Models\Conversation;
use App\Models\User;
use Illuminate\Auth\Access\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate as FacadesGate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *FacadesGate::define('update', function(User $user, Conversation $conversation){
       *  return $conversation->user->is($user);
      * });
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

        FacadesGate::before(function(User $user){

            if ($user->id === 1){
                return true;
            }

        });
    }
}
