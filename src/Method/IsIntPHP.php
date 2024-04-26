<?php

namespace Inilim\Integer\Method;

use Inilim\Integer\Integer;

class IsIntPHP
{
    public function __invoke(mixed $v): bool
    {
        if (Integer::isNumeric($v)) {
            /** @var string $v */
            if (\strval(\intval($v)) == \strval($v)) return true;
            return false;
        }
        return false;
    }
}
