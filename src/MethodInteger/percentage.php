<?php

namespace Inilim\Number\MethodInteger;

use Inilim\Number\Integer;
use NumberFormatter;

function percentage(int|float $number, int $precision = 0, ?int $max_precision = null, ?string $locale = null): string|false
{
    Integer::ensureIntlExtensionIsInstalled();

    $formatter = new NumberFormatter($locale ?? Integer::property()->locale, NumberFormatter::PERCENT);

    if ($max_precision !== null) {
        $formatter->setAttribute(NumberFormatter::MAX_FRACTION_DIGITS, $max_precision);
    } else {
        $formatter->setAttribute(NumberFormatter::FRACTION_DIGITS, $precision);
    }

    return $formatter->format($number / 100);
}
