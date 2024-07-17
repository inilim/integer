<?php

namespace Inilim\Number\Method;

use Inilim\Number\Integer;

function isSmallInt(mixed $value): bool
{
    if (!Integer::isNumeric($value)) return false;
    /** @var int|float|string $value */
    $value = \strval($value);
    /** @var string $value */
    $p = Integer::property();
    if (Integer::getLen($value) > $p::SMALL_INT_MAX_LENGHT) return false;
    return Integer::beetween($value, $p::SMALL_INT_MAX, $p::SMALL_INT_MIN);
}
