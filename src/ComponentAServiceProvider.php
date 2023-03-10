<?php
namespace Alva\ComponentA;

use Illuminate\Support\ServiceProvider;

class ComponentAServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
    }
    public function register()
    {
    }
}
