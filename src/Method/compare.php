<?php

namespace Inilim\Number\Method;

function compare(array $value, array $array_int): bool
{
    $combine = \array_map(null, $value, $array_int);
    foreach ($combine as $c) {
        list($v, $a) = $c;
        $v = \intval($v);
        if ($v > $a) return false;
        elseif ($v < $a) return true;
    }
    return true;
}
