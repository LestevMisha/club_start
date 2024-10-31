<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class ComponentServiceProvider extends ServiceProvider
{
    protected $tester = "bummer";


    /**
     * Register services.
     */ public function register()
    {
        // Register a helper function to add scripts
        app()->singleton('registerComponentScript', function () {
            return function ($componentName) {
                logger("here->".$componentName);
                $this->tester = $componentName;
                return $this->tester;
            };
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // Share scripts array across all views
        View::composer('*', function ($view) {
            $view->with('tester', $this->tester);
        });

        // Register a Blade directive to make it easy to call
        Blade::directive('registerScript', function ($componentName) {
            return "<?php app('registerComponentScript')({$componentName}); ?>";
        });
    }
}
