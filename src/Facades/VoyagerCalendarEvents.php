<?php

namespace Codelabs\VoyagerCalendarEvents\Facades;

use Illuminate\Support\Facades\Facade;

class VoyagerCalendarEvents extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'voyagercalendarevents';
    }
}
