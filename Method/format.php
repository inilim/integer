<?php

namespace Inilim\Integer\Method;

use NumberFormatter;
use Inilim\Integer\Integer;

function format(int|float $number, ?int $precision = null, ?int $max_precision = null, ?string $locale = null): string|false
{
    Integer::ensureIntlExtensionIsInstalled();

    $formatter = new NumberFormatter($locale ?? Integer::property()->locale, NumberFormatter::DECIMAL);

    if ($max_precision !== null) {
        $formatter->setAttribute(NumberFormatter::MAX_FRACTION_DIGITS, $max_precision);
    } elseif ($precision !== null) {
        $formatter->setAttribute(NumberFormatter::FRACTION_DIGITS, $precision);
    }

    return $formatter->format($number);
}
