<?php

namespace Inilim\Integer\Method;

// use Inilim\Integer\Integer;

function beetween(string $value, int $max, int $min): bool
{
    $v = \intval($value);
    return $v >= $min && $v <= $max;
}
