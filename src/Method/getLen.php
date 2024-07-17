<?php

namespace Inilim\Number\Method;

function getLen(string $value): int
{
    return \strlen(\trim($value, '-'));
}
