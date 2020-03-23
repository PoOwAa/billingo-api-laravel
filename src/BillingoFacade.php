<?php

namespace Billingo\API\Laravel;

use Illuminate\Support\Facades\Facade;

class BillingoFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'billingo-request';
    }
}
