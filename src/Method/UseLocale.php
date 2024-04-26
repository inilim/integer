<?php

namespace Inilim\Integer\Method;

use Inilim\Integer\Integer;

class UseLocale
{
    public function __invoke(string $locale): void
    {
        Integer::property()->locale = $locale;
    }
}
