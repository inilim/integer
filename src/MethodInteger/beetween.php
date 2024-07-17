<?php

namespace Inilim\Number\MethodInteger;

// use Inilim\Number\Integer;

function beetween(string $value, int $max, int $min): bool
{
    $v = \intval($value);
    return $v >= $min && $v <= $max;
}
