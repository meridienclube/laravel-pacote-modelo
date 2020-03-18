<?php

namespace MeridienClube\PacoteModelo\Providers;

use Illuminate\Support\ServiceProvider;

class PacoteModeloServiceProvider extends ServiceProvider
{
    public function boot() {
        $this->loadRoutesFrom(__DIR__.'/../Routes/web.php');
    }

    public function register() {}

}
