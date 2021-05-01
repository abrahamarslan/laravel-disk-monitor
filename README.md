# Monitors Laravel Disks

[![Latest Version on Packagist](https://img.shields.io/packagist/v/abrahamarslan/laravel-disk-monitor.svg?style=flat-square)](https://packagist.org/packages/abrahamarslan/laravel-disk-monitor)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/abrahamarslan/laravel-disk-monitor/run-tests?label=tests)](https://github.com/abrahamarslan/laravel-disk-monitor/actions?query=workflow%3Arun-tests+branch%3Amaster)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/abrahamarslan/laravel-disk-monitor/Check%20&%20fix%20styling?label=code%20style)](https://github.com/abrahamarslan/laravel-disk-monitor/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/abrahamarslan/laravel-disk-monitor.svg?style=flat-square)](https://packagist.org/packages/abrahamarslan/laravel-disk-monitor)

---
Monitor laravel disks using this package.

## Installation

You can install the package via composer:

```bash
composer require abrahamarslan/laravel-disk-monitor
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --provider="Abrahamarslan\LaravelDiskMonitor\LaravelDiskMonitorServiceProvider" --tag="laravel-disk-monitor-migrations"
php artisan migrate
```

You can publish the config file with:
```bash
php artisan vendor:publish --provider="Abrahamarslan\LaravelDiskMonitor\LaravelDiskMonitorServiceProvider" --tag="laravel-disk-monitor-config"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$laravel-disk-monitor = new Abrahamarslan\LaravelDiskMonitor();
echo $laravel-disk-monitor->echoPhrase('Hello, Spatie!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [abrahamarslan](https://github.com/abrahamarslan)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
