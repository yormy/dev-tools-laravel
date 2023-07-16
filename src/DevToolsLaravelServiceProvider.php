<?php

namespace Yormy\DevToolsLaravel\src;

use Illuminate\Support\ServiceProvider;

class DevToolsLaravelServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/assert-laravel.php', 'assert-laravel');
    }
}
