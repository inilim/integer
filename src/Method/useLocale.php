<?php

namespace Inilim\Number\Method;

use Inilim\Number\Integer;

function useLocale(string $locale): void
{
    Integer::property()->locale = $locale;
}
