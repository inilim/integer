<?php

namespace Inilim\Integer\Method;

use Inilim\Integer\Integer;

function currency(int|float $number, string $in = 'USD', ?string $locale = null): string|false
{
    Integer::ensureIntlExtensionIsInstalled();

    $formatter = new \NumberFormatter($locale ?? Integer::property()->locale, \NumberFormatter::CURRENCY);

    return $formatter->formatCurrency($number, $in);
}
