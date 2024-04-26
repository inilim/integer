<?php

namespace Inilim\Integer\Method;

use Inilim\Integer\Integer;

class Beetween
{
    public function __invoke(string $value, int $max, int $min): bool
    {
        $v = \intval($value);
        return $v >= $min && $v <= $max;
    }
}
