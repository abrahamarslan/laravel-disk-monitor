<?php

namespace Abrahamarslan\LaravelDiskMonitor;

use Abrahamarslan\LaravelDiskMonitor\Commands\RecordDiskMetricsCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Abrahamarslan\LaravelDiskMonitor\Commands\LaravelDiskMonitorCommand;

class LaravelDiskMonitorServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-disk-monitor')
            ->hasConfigFile('disk-monitor')
            ->hasViews()
            ->hasMigrations(['create_disk_monitor_tables'])
            ->hasRoute('disk-monitor-routes')
            ->hasCommand(LaravelDiskMonitorCommand::class)
            ->hasCommand(RecordDiskMetricsCommand::class)
        ;

    }
}
