<?php

namespace Inilim\Number\Method;

use Inilim\Number\Integer;

function isIntPHP(mixed $v): bool
{
    if (Integer::isNumeric($v)) {
        /** @var string $v */
        if (\strval(\intval($v)) == \strval($v)) return true;
        return false;
    }
    return false;
}
