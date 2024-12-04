<?php

namespace SchenkeIo\LaravelGzip\Tests;

use SchenkeIo\LaravelGzip\LaravelGzipServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{
    /**
     * Get package providers.
     *
     * @param  \Illuminate\Foundation\Application  $app
     * @return array<int, class-string<\Illuminate\Support\ServiceProvider>>
     */
    protected function getPackageProviders($app): array
    {
        return [
            LaravelGzipServiceProvider::class,
        ];
    }

    protected function getPackageAliases($app)
    {
        return [
            'Gzip' => 'SchenkeIo\LaravelGzip\Facades\Gzip',
        ];
    }
}
