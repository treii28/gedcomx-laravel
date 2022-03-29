<?php

namespace Treii28\GedcomxLaravel\Facades;

use Illuminate\Support\Facades\Facade;

class GedcomxLaravel extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'gedcomx-laravel';
    }
}
