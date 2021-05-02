<?php


namespace Abrahamarslan\LaravelDiskMonitor\Http\Controllers;


use Abrahamarslan\LaravelDiskMonitor\Models\DiskMonitorEntry;

class DiscMetricsController
{
    public function __invoke()
    {
        $entries = DiskMonitorEntry::latest()->get();
        return view('disk-monitor::entries', compact('entries'));
    }
}
