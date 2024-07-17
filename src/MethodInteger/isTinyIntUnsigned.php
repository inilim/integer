<?php

namespace Inilim\Number\MethodInteger;

use Inilim\Number\Integer;

function isTinyIntUnsigned(mixed $value): bool
{
    if (!Integer::isNumeric($value)) return false;
    /** @var int|float|string $value */
    $value = \strval($value);
    /** @var string $value */
    $p = Integer::property();
    if (Integer::getLen($value) > $p::TINY_INT_UNSIGNED_MAX_LENGHT) return false;
    return Integer::beetween($value, $p::TINY_INT_UNSIGNED_MAX, $p::TINY_INT_UNSIGNED_MIN);
}
