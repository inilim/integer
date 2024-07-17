<?php

namespace Inilim\Number\Method;

// use Inilim\Number\Integer;

function beetween(string $value, int $max, int $min): bool
{
    $v = \intval($value);
    return $v >= $min && $v <= $max;
}
