<?php 

namespace zkosta\Functional;

use Illuminate\Support\ServiceProvider;
use zkosta\Functional\FunctionalProxy;

class FunctionalProvider extends ServiceProvider {
	

 /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {

        $this->app->bind('functional', function () {
            return new FunctionalProxy();
        });
      
    }
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
