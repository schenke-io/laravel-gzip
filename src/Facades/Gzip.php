<?php

namespace SchenkeIo\LaravelGzip\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static putContents($filename,$data,$mode='w')
 * @method static string getContents($filename)
 */
class Gzip extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'gzip';
    }
}
