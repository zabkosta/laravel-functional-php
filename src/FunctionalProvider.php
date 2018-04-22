<?php 

namespace fwrapper\Functional;

use Illuminate\Support\ServiceProvider;


class FunctionalProvider extends ServiceProvider {
	

    /**
     * Register the functional proxy service.
     *
     * @return void
     */
    public function register()
    {

        $this->app->bind('functional', function () {
            return $this->app->make(FunctionalProxy::class);
        });
      
    }

}
