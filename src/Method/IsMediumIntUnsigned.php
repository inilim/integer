<?php

namespace Inilim\Integer\Method;

use Inilim\Integer\Integer;

class IsMediumIntUnsigned
{
    public function __invoke(mixed $value): bool
    {
        if (!Integer::isNumeric($value)) return false;
        /** @var int|float|string $value */
        $value = \strval($value);
        /** @var string $value */
        $p = Integer::property();
        if (Integer::getLen($value) > $p::MEDIUM_INT_UNSIGNED_MAX_LENGHT) return false;
        return Integer::beetween($value, $p::MEDIUM_INT_UNSIGNED_MAX, $p::MEDIUM_INT_UNSIGNED_MIN);
    }
}
