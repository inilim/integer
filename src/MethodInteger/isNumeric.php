<?php

namespace Inilim\Number\MethodInteger;

function isNumeric(mixed $v): bool
{
    if (!\is_scalar($v) || \is_bool($v)) return false;
    // here string|int|float
    $v = \strval($v);
    if (\preg_match('#^0$#', $v) || \preg_match('#^\-?[1-9][0-9]{0,}$#', $v)) return true;
    return false;
}
