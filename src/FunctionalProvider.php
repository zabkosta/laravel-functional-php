<?php 

namespace zkosta\Functional;

use Illuminate\Support\ServiceProvider;


class FunctionalProvider extends ServiceProvider {
	

 /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {

        $this->app->bind('Func', function () {
            return $this->app->make('zkosta\Functional\FunctionalProxy');
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
