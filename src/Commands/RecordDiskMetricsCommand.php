<?php


namespace Abrahamarslan\LaravelDiskMonitor\Commands;

use Abrahamarslan\LaravelDiskMonitor\Models\DiskMonitorEntry;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class RecordDiskMetricsCommand extends Command
{
    public $signature = 'record-metrics';

    public $description = 'Record metrics of a disk';

    public function handle()
    {
        $this->comment('Recording metrics...');
        $discName = config('disk-monitor.disc_name');
        $fileCount = count(Storage::disk($discName)->allFiles());
        DiskMonitorEntry::create([
            'disk' => $discName,
            'file_count' => $fileCount,

        ]);
        $this->comment('All metrics calculated.');
    }
}
