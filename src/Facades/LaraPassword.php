<?php

namespace LaraAreaSupport\Facades;

use Illuminate\Support\Facades\Facade;

class LaraPassword extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laraarea-password';
    }
}