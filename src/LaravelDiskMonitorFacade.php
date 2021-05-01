<?php

namespace Abrahamarslan\LaravelDiskMonitor;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Abrahamarslan\LaravelDiskMonitor\LaravelDiskMonitor
 */
class LaravelDiskMonitorFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-disk-monitor';
    }
}
