<?php

namespace Inilim\Integer\Method;

use Inilim\Integer\Integer;

class ForHumans
{
    public function __invoke(int|float $number, int $precision = 0, ?int $max_precision = null, bool $abbreviate = false): bool|string
    {
        return Integer::summarize($number, $precision, $max_precision, $abbreviate ? [
            3 => 'K',
            6 => 'M',
            9 => 'B',
            12 => 'T',
            15 => 'Q',
        ] : [
            3 => ' thousand',
            6 => ' million',
            9 => ' billion',
            12 => ' trillion',
            15 => ' quadrillion',
        ]);
    }
}
