<?php

namespace Inilim\Integer\Method;

class Clamp
{
    public function __invoke(int|float $number, int|float $min, int|float $max): int|float
    {
        return \min(\max($number, $min), $max);
    }
}
