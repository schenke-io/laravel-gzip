<?php

namespace SchenkeIo\LaravelGzip;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelGzipServiceProvider extends PackageServiceProvider
{
    public function register(): void
    {
        parent::register();
        $this->app->bind('gzip', function () {
            return new Gzip;
        });
    }

    public function configurePackage(Package $package): void
    {
        $package->name('laravel-gzip');
    }
}
