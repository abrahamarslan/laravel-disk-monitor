<?php

namespace Abrahamarslan\LaravelDiskMonitor;

use Abrahamarslan\LaravelDiskMonitor\Commands\RecordDiskMetrics;
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
            ->hasConfigFile()
            ->hasViews()
            ->hasRoute()
            ->hasMigration('create_laravel-disk-monitor_table')
            ->hasCommand([LaravelDiskMonitorCommand::class, RecordDiskMetricsCommand::class]);

    }
}
