<?php

namespace Inilim\Integer\Method;

use Inilim\Integer\Integer;

function abbreviate(int|float $number, int $precision = 0, ?int $max_precision = null): bool|string
{
    return Integer::forHumans($number, $precision, $max_precision, abbreviate: true);
}
