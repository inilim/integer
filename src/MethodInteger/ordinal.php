<?php

namespace Inilim\Number\MethodInteger;

use Inilim\Number\Integer;

function ordinal(int|float $number, ?string $locale = null): string
{
    Integer::ensureIntlExtensionIsInstalled();

    $formatter = new \NumberFormatter($locale ?? Integer::property()->locale, \NumberFormatter::ORDINAL);

    return $formatter->format($number);
}
