<?php

namespace Inilim\Number\MethodInteger;

use Inilim\Number\Integer;

function useLocale(string $locale): void
{
    Integer::property()->locale = $locale;
}
