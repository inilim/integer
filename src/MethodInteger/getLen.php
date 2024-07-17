<?php

namespace Inilim\Number\MethodInteger;

function getLen(string $value): int
{
    return \strlen(\trim($value, '-'));
}
