<?php

namespace Inilim\Number\MethodInteger;

function clamp(int|float $number, int|float $min, int|float $max): int|float
{
    return \min(\max($number, $min), $max);
}
