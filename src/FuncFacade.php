<?php

namespace zkosta\Functional;

use Illuminate\Support\Facades\Facade;

class FuncFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'Func';
    }
}