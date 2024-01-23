<?php

namespace Modules\Prodotti\Providers;

use Illuminate\Support\ServiceProvider;

class ProdottoServiceProvider extends ServiceProvider
{
    public function register(): void
    {

    }

    public function boot(): void
    {
        $this->loadMigrationsFrom(__DIR__.'/../Database/migrations');
    }
}
