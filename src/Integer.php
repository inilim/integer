<?php

namespace Inilim\Integer;

use Inilim\LazyMethod\LazyMethodAbstract;

/**
 * @method  bool|string abbreviate(int|float $number, int $precision = 0, null|int $max_precision = null) 
 * @method  static  bool|string abbreviate(int|float $number, int $precision = 0, null|int $max_precision = null) 
 * @param \Inilim\Integer\Method\abbreviate
 * 
 * @method  bool beetween(string $value, int $max, int $min) 
 * @method  static  bool beetween(string $value, int $max, int $min) 
 * @param \Inilim\Integer\Method\beetween
 * 
 * @method  int|float clamp(int|float $number, int|float $min, int|float $max) 
 * @method  static  int|float clamp(int|float $number, int|float $min, int|float $max) 
 * @param \Inilim\Integer\Method\clamp
 * 
 * @method  bool compare(array $value, array $array_int) 
 * @method  static  bool compare(array $value, array $array_int) 
 * @param \Inilim\Integer\Method\compare
 * 
 * @method  string|false currency(int|float $number, string $in = 'USD', null|string $locale = null) 
 * @method  static  string|false currency(int|float $number, string $in = 'USD', null|string $locale = null) 
 * @param \Inilim\Integer\Method\currency
 * 
 * @method  void ensureIntlExtensionIsInstalled() 
 * @method  static  void ensureIntlExtensionIsInstalled() 
 * @param \Inilim\Integer\Method\ensureIntlExtensionIsInstalled
 * 
 * @method  string fileSize(int|float $bytes, int $precision = 0, null|int $max_precision = null) 
 * @method  static  string fileSize(int|float $bytes, int $precision = 0, null|int $max_precision = null) 
 * @param \Inilim\Integer\Method\fileSize
 * 
 * @method  bool|string forHumans(int|float $number, int $precision = 0, null|int $max_precision = null, bool $abbreviate = false) 
 * @method  static  bool|string forHumans(int|float $number, int $precision = 0, null|int $max_precision = null, bool $abbreviate = false) 
 * @param \Inilim\Integer\Method\forHumans
 * 
 * @method  string|false format(int|float $number, null|int $precision = null, null|int $max_precision = null, null|string $locale = null) 
 * @method  static  string|false format(int|float $number, null|int $precision = null, null|int $max_precision = null, null|string $locale = null) 
 * @param \Inilim\Integer\Method\format
 * 
 * @method  int getLen(string $value) 
 * @method  static  int getLen(string $value) 
 * @param \Inilim\Integer\Method\getLen
 * 
 * @method  bool isBigInt(mixed $value) 
 * @method  static  bool isBigInt(mixed $value) 
 * @param \Inilim\Integer\Method\isBigInt
 * 
 * @method  bool isBigIntUnsigned(mixed $value) 
 * @method  static  bool isBigIntUnsigned(mixed $value) 
 * @param \Inilim\Integer\Method\isBigIntUnsigned
 * 
 * @method  bool isInt(mixed $value) 
 * @method  static  bool isInt(mixed $value) 
 * @param \Inilim\Integer\Method\isInt
 * 
 * @method  bool isIntPHP(mixed $v) 
 * @method  static  bool isIntPHP(mixed $v) 
 * @param \Inilim\Integer\Method\isIntPHP
 * 
 * @method  bool isIntUnsigned(mixed $value) 
 * @method  static  bool isIntUnsigned(mixed $value) 
 * @param \Inilim\Integer\Method\isIntUnsigned
 * 
 * @method  bool isMediumInt(mixed $value) 
 * @method  static  bool isMediumInt(mixed $value) 
 * @param \Inilim\Integer\Method\isMediumInt
 * 
 * @method  bool isMediumIntUnsigned(mixed $value) 
 * @method  static  bool isMediumIntUnsigned(mixed $value) 
 * @param \Inilim\Integer\Method\isMediumIntUnsigned
 * 
 * @method  bool isNumeric(mixed $v) 
 * @method  static  bool isNumeric(mixed $v) 
 * @param \Inilim\Integer\Method\isNumeric
 * 
 * @method  bool isSmallInt(mixed $value) 
 * @method  static  bool isSmallInt(mixed $value) 
 * @param \Inilim\Integer\Method\isSmallInt
 * 
 * @method  bool isSmallIntUnsigned(mixed $value) 
 * @method  static  bool isSmallIntUnsigned(mixed $value) 
 * @param \Inilim\Integer\Method\isSmallIntUnsigned
 * 
 * @method  bool isTinyInt(mixed $value) 
 * @method  static  bool isTinyInt(mixed $value) 
 * @param \Inilim\Integer\Method\isTinyInt
 * 
 * @method  bool isTinyIntUnsigned(mixed $value) 
 * @method  static  bool isTinyIntUnsigned(mixed $value) 
 * @param \Inilim\Integer\Method\isTinyIntUnsigned
 * 
 * @method  string ordinal(int|float $number, null|string $locale = null) 
 * @method  static  string ordinal(int|float $number, null|string $locale = null) 
 * @param \Inilim\Integer\Method\ordinal
 * 
 * @method  string|false percentage(int|float $number, int $precision = 0, null|int $max_precision = null, null|string $locale = null) 
 * @method  static  string|false percentage(int|float $number, int $precision = 0, null|int $max_precision = null, null|string $locale = null) 
 * @param \Inilim\Integer\Method\percentage
 * 
 * @method  \Inilim\Integer\Property property() 
 * @method  static  \Inilim\Integer\Property property() 
 * @param \Inilim\Integer\Method\property
 * 
 * @method  string spell(int|float $number, null|string $locale = null, null|int $after = null, null|int $until = null) 
 * @method  static  string spell(int|float $number, null|string $locale = null, null|int $after = null, null|int $until = null) 
 * @param \Inilim\Integer\Method\spell
 * 
 * @method  string|false summarize(int|float $number, int $precision = 0, null|int $max_precision = null, array $units = []) 
 * @method  static  string|false summarize(int|float $number, int $precision = 0, null|int $max_precision = null, array $units = []) 
 * @param \Inilim\Integer\Method\summarize
 * 
 * @method  void useLocale(string $locale) 
 * @method  static  void useLocale(string $locale) 
 * @param \Inilim\Integer\Method\useLocale
 * 
 */
class Integer extends LazyMethodAbstract
{
    protected const NAMESPACE   = 'Inilim\Integer\Method';
    protected const PATH_TO_DIR = __DIR__ . '/Method';
    protected const ALIAS       = [];
}
