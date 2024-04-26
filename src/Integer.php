<?php

namespace Inilim\Integer;

use Inilim\Integer\LazyMethodAbstract;

/**
 * @method string|false format(int|float $number, ?int $precision = null, ?int $max_precision = null, ?string $locale = null)
 * @method static string|false format(int|float $number, ?int $precision = null, ?int $max_precision = null, ?string $locale = null)
 * 
 * @method bool isBigInt(mixed $value)
 * @method static bool isBigInt(mixed $value)
 * 
 * 
 * @method bool isNumeric(mixed $value)
 * @method static bool isNumeric(mixed $value)
 * 
 * method bool compare(array $value, array $array_int)
 * method static bool compare(array $value, array $array_int)
 * 
 * method int getLen(string $value)
 * method static int getLen(string $value)
 * 
 * method bool beetween(string $value, int $max, int $min)
 * method static bool beetween(string $value, int $max, int $min)
 * 
 * @method void useLocale(string $locale)
 * @method static void useLocale(string $locale)
 * 
 * @method int|float clamp(int|float $number, int|float $min, int|float $max)
 * @method static int|float clamp(int|float $number, int|float $min, int|float $max)
 * 
 * @method string|false summarize(int|float $number, int $precision = 0, ?int $max_precision = null, array $units = [])
 * @method static string|false summarize(int|float $number, int $precision = 0, ?int $max_precision = null, array $units = [])
 * 
 * @method bool|string forHumans(int|float $number, int $precision = 0, ?int $max_precision = null, bool $abbreviate = false)
 * @method static bool|string forHumans(int|float $number, int $precision = 0, ?int $max_precision = null, bool $abbreviate = false)
 * 
 * @method bool|string abbreviate(int|float $number, int $precision = 0, ?int $max_precision = null)
 * @method static bool|string abbreviate(int|float $number, int $precision = 0, ?int $max_precision = null)
 * 
 * @method string fileSize(int|float $bytes, int $precision = 0, ?int $max_precision = null)
 * @method static string fileSize(int|float $bytes, int $precision = 0, ?int $max_precision = null)
 * 
 * @method string|false currency(int|float $number, string $in = 'USD', ?string $locale = null)
 * @method static string|false currency(int|float $number, string $in = 'USD', ?string $locale = null)
 * 
 * @method string|false percentage(int|float $number, int $precision = 0, ?int $max_precision = null, ?string $locale = null)
 * @method static string|false percentage(int|float $number, int $precision = 0, ?int $max_precision = null, ?string $locale = null)
 * 
 * @method string ordinal(int|float $number, ?string $locale = null)
 * @method static string ordinal(int|float $number, ?string $locale = null)
 * 
 * @method string spell(int|float $number, ?string $locale = null, ?int $after = null, ?int $until = null)
 * @method static string spell(int|float $number, ?string $locale = null, ?int $after = null, ?int $until = null)
 * 
 * @method bool isIntPHP(mixed $v)
 * @method static bool isIntPHP(mixed $v)
 * 
 * @method bool isTinyIntUnsigned(mixed $value)
 * @method static bool isTinyIntUnsigned(mixed $value)
 * 
 * @method bool isTinyInt($value)
 * @method static bool isTinyInt($value)
 * 
 * @method bool isSmallIntUnsigned(mixed $value)
 * @method static bool isSmallIntUnsigned(mixed $value)
 * 
 * @method bool isSmallInt(mixed $value)
 * @method static bool isSmallInt(mixed $value)
 * 
 * @method bool isMediumIntUnsigned(mixed $value)
 * @method static bool isMediumIntUnsigned(mixed $value)
 * 
 * @method bool isMediumInt(mixed $value)
 * @method static bool isMediumInt(mixed $value)
 * 
 * @method bool isIntUnsigned(mixed $value)
 * @method static bool isIntUnsigned(mixed $value)
 * 
 * @method bool isInt(mixed $value)
 * @method static bool isInt(mixed $value)
 * 
 * @method bool isBigIntUnsigned(mixed $value)
 * @method static bool isBigIntUnsigned(mixed $value)
 * 
 * @method bool isBigInt(mixed $value)
 * @method static bool isBigInt(mixed $value)
 * 
 * method void ensureIntlExtensionIsInstalled()
 * method static void ensureIntlExtensionIsInstalled()
 * 
 * @method \Inilim\Integer\Method\Property property()
 * @method static \Inilim\Integer\Method\Property property()
 */
class Integer extends LazyMethodAbstract
{
}
