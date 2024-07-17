<?php

namespace Inilim\Number\Method;

use Inilim\Number\Integer;

function isInt(mixed $value): bool
{
    if (!Integer::isNumeric($value)) return false;
    /** @var int|float|string $value */
    $value = \strval($value);
    /** @var string $value */
    $len = Integer::getLen($value);
    $p = Integer::property();
    if ($len < $p::MAX_LEN_32_BIT) return true;
    if ($len > $p::MAX_LEN_32_BIT) return false;
    // длина 10
    $last = \str_starts_with($value, '-') ? 8 : 7;
    return Integer::compare(\str_split(\trim($value, '-')), [2, 1, 4, 7, 4, 8, 3, 6, 4, $last]);
}
