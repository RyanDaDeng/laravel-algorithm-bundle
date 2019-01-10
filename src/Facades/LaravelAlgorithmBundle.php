<?php

namespace TimeHunter\LaravelAlgorithmBundle\Facades;

use Illuminate\Support\Facades\Facade;

class LaravelAlgorithmBundle extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravelalgorithmbundle';
    }
}
