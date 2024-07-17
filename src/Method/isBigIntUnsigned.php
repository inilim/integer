<?php

namespace Inilim\Number\Method;

use Inilim\Number\Integer;

function isBigIntUnsigned(mixed $value): bool
{
    if (!Integer::isNumeric($value)) return false;
    /** @var int|float|string $value */
    $value = \strval($value);
    /** @var string $value */
    if (\str_starts_with($value, '-')) return false;
    $len = Integer::getLen($value);
    $p = Integer::property();
    if ($len < $p::BIG_INT_MAX_UNSIGNED_LENGHT) return true;
    if ($len > $p::BIG_INT_MAX_UNSIGNED_LENGHT) return false;
    // длина 20
    return Integer::compare(\str_split($value), [1, 8, 4, 4, 6, 7, 4, 4, 0, 7, 3, 7, 0, 9, 5, 5, 1, 6, 1, 5]);
}
