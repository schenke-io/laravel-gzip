<?php

namespace SchenkeIo\LaravelGzip;

class Gzip
{
    public function putContents($filename, $data, $mode = 'w'): void
    {
        $handle = gzopen($filename, $mode);
        gzwrite($handle, $data);
        gzclose($handle);
    }

    public function getContents($filename): string
    {
        $handle = gzopen($filename, 'r');
        // Read the entire file in chunks
        $content = '';
        while (! gzeof($handle)) {
            $content .= gzread($handle, 1024);
        }
        gzclose($handle);

        return $content;
    }
}
