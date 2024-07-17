<?php

namespace Inilim\Number\Method;

use Inilim\Number\Integer;

function spell(int|float $number, ?string $locale = null, ?int $after = null, ?int $until = null): string
{
    Integer::ensureIntlExtensionIsInstalled();

    if ($after !== null && $number <= $after) {
        return Integer::format($number, locale: $locale);
    }

    if ($until !== null && $number >= $until) {
        return Integer::format($number, locale: $locale);
    }

    $formatter = new \NumberFormatter($locale ?? Integer::property()->locale, \NumberFormatter::SPELLOUT);

    return $formatter->format($number);
}
