<?php

namespace idekite\flexcodesdk\Facades;

use Illuminate\Support\Facades\Facade;

class flexcodesdk extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'flexcodesdk';
    }
}
