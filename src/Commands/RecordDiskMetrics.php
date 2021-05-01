<?php


namespace Abrahamarslan\LaravelDiskMonitor\Commands;


use Illuminate\Console\Command;

class RecordDiskMetrics extends Command
{
    public $signature = 'Metrics';

    public $description = 'Disk Metrics Command';

    public function handle()
    {
        $this->comment('All metrics calculated.');
    }
}
