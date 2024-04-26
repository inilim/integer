<?php

namespace Inilim\Integer\Method;

use Inilim\Integer\Integer;

class IsIntUnsigned
{
    public function __invoke(mixed $value): bool
    {
        if (!Integer::isNumeric($value)) return false;
        /** @var int|float|string $value */
        $value = \strval($value);
        /** @var string $value */
        if (\str_starts_with($value, '-')) return false;
        $len = Integer::getLen($value);
        $p = Integer::property();
        if ($len < $p::MAX_LEN_32_BIT) return true;
        if ($len > $p::MAX_LEN_32_BIT) return false;
        // длина 10
        return Integer::compare(\str_split($value), [4, 2, 9, 4, 9, 6, 7, 2, 9, 5]);
    }
}
