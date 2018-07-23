<?php

namespace SyedAunn\SlackOutput\Facade;

use Illuminate\Support\Facades\Facade;
use SyedAunn\SlackOutput\Service;

class SlackOutput extends Facade
{

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return Service::class;
    }

}