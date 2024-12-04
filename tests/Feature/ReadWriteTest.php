<?php

use SchenkeIo\LaravelGzip\Facades\Gzip;

it('can write a gz file', function () {
    $filename = __DIR__.'/../data/test.gz';
    $text = 'ein test';
    Gzip::putContents($filename, $text);
    $this->assertFileExists($filename);
    $this->assertEquals($text, Gzip::getContents($filename));

});

it('returns empty string on failure', function () {
    $filename = __DIR__.'/../data/wrong.gz';
    $this->assertEquals('', Gzip::getContents($filename));
});
