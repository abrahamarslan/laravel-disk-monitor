<?php
use Illuminate\Support\Facades\Route;

Route::macro('diskMonitor', function (string $prefix) {
    Route::prefix($prefix)->group(function() {
        Route::get('/', \Abrahamarslan\LaravelDiskMonitor\Http\Controllers\DiscMetricsController::class);
    });
});
