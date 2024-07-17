<?php

namespace Inilim\Integer\Method;

function getLen(string $value): int
{
    return \strlen(\trim($value, '-'));
}
