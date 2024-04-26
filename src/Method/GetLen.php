<?php

namespace Inilim\Integer\Method;

class GetLen
{
    public function __invoke(string $value): int
    {
        return \strlen(\trim($value, '-'));
    }
}
