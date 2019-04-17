<?php

namespace Inertia;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class InertiaServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::directive('inertia', function () {
            return "<div id=\"app\" data-page=\"{{ json_encode(\$page) }}\"></div>";
        });
    }

    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
