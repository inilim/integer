<?php

namespace Inilim\Integer\Method;

use Inilim\Integer\Integer;

function useLocale(string $locale): void
{
    Integer::property()->locale = $locale;
}
