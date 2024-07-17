<?php

namespace Inilim\Number\Method;

use Inilim\Number\Integer;

function isBigInt(mixed $value): bool
{
    if (!Integer::isNumeric($value)) return false;
    /** @var int|float|string $value */
    $value = \strval($value);
    /** @var string $value */
    $len = Integer::getLen($value);
    $p = Integer::property();
    if ($len < $p::BIG_INT_MAX_LENGHT) return true;
    if ($len > $p::BIG_INT_MAX_LENGHT) return false;
    // длина 19
    $last = \str_starts_with($value, '-') ? 8 : 7;
    return Integer::compare(\str_split(\trim($value, '-')), [9, 2, 2, 3, 3, 7, 2, 0, 3, 6, 8, 5, 4, 7, 7, 5, 8, 0, $last]);
}
