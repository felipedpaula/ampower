<?php

namespace App\Providers;

use App\Models\Aluno;
use App\Models\Professor;
use App\Models\Turma;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

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
     */
    public function boot(): void
    {
        Gate::define('aluno-config', function (User $user) {
            return $user->tipo_id === 2;
        });

        Gate::define('professor-config', function (User $user) {
            return $user->tipo_id === 2;
        });

        Gate::define('turma-config', function (User $user) {
            return $user->tipo_id === 2;
        });

        Gate::define('turmas-professor', function (User $user) {
            return $user->tipo_id === 3;
        });

    }
}
