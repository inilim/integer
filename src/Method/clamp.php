<?php

namespace Inilim\Number\Method;

function clamp(int|float $number, int|float $min, int|float $max): int|float
{
    return \min(\max($number, $min), $max);
}
