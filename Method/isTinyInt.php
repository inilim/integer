<?php

namespace Inilim\Integer\Method;

use Inilim\Integer\Integer;

/**
 * @param mixed $value
 */
function isTinyInt($value): bool
{
    if (!Integer::isNumeric($value)) return false;
    /** @var int|float|string $value */
    $value = \strval($value);
    /** @var string $value */
    $p = Integer::property();
    if (Integer::getLen($value) > $p::TINY_INT_MAX_LENGHT) return false;
    return Integer::beetween($value, $p::TINY_INT_MAX, $p::TINY_INT_MIN);
}