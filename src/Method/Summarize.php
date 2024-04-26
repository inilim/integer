<?php

namespace Inilim\Integer\Method;

use Inilim\Integer\Integer;

class Summarize
{
    public function __invoke(int|float $number, int $precision = 0, ?int $max_precision = null, array $units = []): string|false
    {
        if (empty($units)) {
            $units = [
                3 => 'K',
                6 => 'M',
                9 => 'B',
                12 => 'T',
                15 => 'Q',
            ];
        }

        switch (true) {
            case \floatval($number) === 0.0:
                return $precision > 0 ? Integer::format(
                    0,
                    $precision,
                    $max_precision
                ) : '0';
            case $number < 0:
                return \sprintf('-%s', $this->__invoke(\abs($number), $precision, $max_precision, $units));
            case $number >= 1e15:
                return \sprintf('%s' . \end($units), $this->__invoke($number / 1e15, $precision, $max_precision, $units));
        }

        $number_exponent = \floor(\log10($number));
        $display_exponent = $number_exponent - ($number_exponent % 3);
        $number /= \pow(10, $display_exponent);

        return \trim(\sprintf('%s%s', Integer::format($number, $precision, $max_precision), $units[$display_exponent] ?? ''));
    }
}
