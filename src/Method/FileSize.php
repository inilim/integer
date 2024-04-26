<?php

namespace Inilim\Integer\Method;

use Inilim\Integer\Integer;

class FileSize
{
    public function __invoke(int|float $bytes, int $precision = 0, ?int $max_precision = null): string
    {
        $units = [
            'B', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB'
        ];

        for ($i = 0; ($bytes / 1024) > 0.9 && ($i < \sizeof($units) - 1); $i++) {
            $bytes /= 1024;
        }

        return \sprintf(
            '%s %s',
            Integer::format($bytes, $precision, $max_precision),
            $units[$i]
        );
    }
}
