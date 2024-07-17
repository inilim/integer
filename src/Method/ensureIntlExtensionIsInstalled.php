<?php

namespace Inilim\Integer\Method;

function ensureIntlExtensionIsInstalled(): void
{
    if (!\extension_loaded('intl')) {
        // $method = \debug_backtrace(\DEBUG_BACKTRACE_IGNORE_ARGS, 2)[1]['function'];

        throw new \RuntimeException('The "intl" PHP extension is required');
    }
}
