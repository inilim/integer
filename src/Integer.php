<?php

namespace Inilim;

class Integer
{
   // TINYINT: представляет целые числа от -128 до 127, занимает 1 байт
   // TINYINT UNSIGNED: представляет целые числа от 0 до 255, занимает 1 байт
   public const TINY_INT_MAX = 127;
   public const TINY_INT_MIN = -127;
   public const TINY_INT_UNSIGNED_MAX = 255;
   public const TINY_INT_UNSIGNED_MIN = 0;
   private const TINY_INT_MAX_LENGHT = 3;
   private const TINY_INT_MIN_LENGHT = 3;
   private const TINY_INT_UNSIGNED_MAX_LENGHT = 3;
   private const TINY_INT_UNSIGNED_MIN_LENGHT = 1;

   // SMALLINT: представляет целые числа от -32768 до 32767, занимает 2 байтa
   // SMALLINT UNSIGNED: представляет целые числа от 0 до 65535, занимает 2 байтa
   public const SMALL_INT_MAX = 32767;
   public const SMALL_INT_MIN = -32768;
   public const SMALL_INT_UNSIGNED_MAX = 65535;
   public const SMALL_INT_UNSIGNED_MIN = 0;
   private const SMALL_INT_MAX_LENGHT = 5;
   private const SMALL_INT_MIN_LENGHT = 5;
   private const SMALL_INT_UNSIGNED_MAX_LENGHT = 5;
   private const SMALL_INT_UNSIGNED_MIN_LENGHT = 1;

   // MEDIUMINT: представляет целые числа от -8388608 до 8388607, занимает 3 байта
   // MEDIUMINT UNSIGNED: представляет целые числа от 0 до 16777215, занимает 3 байта
   public const MEDIUM_INT_MAX = 8388607;
   public const MEDIUM_INT_MIN = -8388608;
   public const MEDIUM_INT_UNSIGNED_MAX = 16777215;
   public const MEDIUM_INT_UNSIGNED_MIN = 0;
   private const MEDIUM_INT_MAX_LENGHT = 7;
   private const MEDIUM_INT_MIN_LENGHT = 7;
   private const MEDIUM_INT_UNSIGNED_MAX_LENGHT = 8;
   private const MEDIUM_INT_UNSIGNED_MIN_LENGHT = 1;

   // INT: представляет целые числа от -2147483648 до 2147483647, занимает 4 байта
   // INT UNSIGNED: представляет целые числа от 0 до 4294967295, занимает 4 байта
   public const INT_MAX = 2147483647;
   public const INT_MIN = -2147483648;
   private const INT_MAX_LENGHT = 10;
   private const INT_MIN_LENGHT = 10;
   private const INT_MAX_UNSIGNED_LENGHT = 10;
   private const INT_MIN_UNSIGNED_LENGHT = 1;

   // BIGINT: представляет целые числа от -9223372036854775808 до 9223372036854775807, занимает 8 байт
   // BIGINT UNSIGNED: представляет целые числа от 0 до 18446744073709551615, занимает 8 байт
   private const BIG_INT_MAX_LENGHT = 19;
   private const BIG_INT_MIN_LENGHT = 19;
   private const BIG_INT_MAX_UNSIGNED_LENGHT = 20;
   private const BIG_INT_MIN_UNSIGNED_LENGHT = 1;

   private const MAX_LEN_32_BIT = 10;

   /**
    * -9223372036854775808 <> 9223372036854775807
    */
   public function isBigInt(mixed $value): bool
   {
      if (!$this->isNumeric($value)) return false;
      /** @var int|float|string $value */
      $value = strval($value);
      /** @var string $value */
      $len = $this->getLen($value);
      if ($len < self::BIG_INT_MAX_LENGHT) return true;
      if ($len > self::BIG_INT_MAX_LENGHT) return false;
      // длина 19
      $last = str_starts_with($value, '-') ? 8 : 7;
      return $this->compare(str_split(trim($value, '-')), [9, 2, 2, 3, 3, 7, 2, 0, 3, 6, 8, 5, 4, 7, 7, 5, 8, 0, $last]);
   }

   /**
    * 0 <> 18446744073709551615
    */
   public function isBigIntUnsigned(mixed $value): bool
   {
      if (!$this->isNumeric($value)) return false;
      /** @var int|float|string $value */
      $value = strval($value);
      /** @var string $value */
      if (str_starts_with($value, '-')) return false;
      $len = $this->getLen($value);
      if ($len < self::BIG_INT_MAX_UNSIGNED_LENGHT) return true;
      if ($len > self::BIG_INT_MAX_UNSIGNED_LENGHT) return false;
      // длина 20
      return $this->compare(str_split($value), [1, 8, 4, 4, 6, 7, 4, 4, 0, 7, 3, 7, 0, 9, 5, 5, 1, 6, 1, 5]);
   }

   /**
    * -2147483648 <> 2147483647
    */
   public function isInt(mixed $value): bool
   {
      if (!$this->isNumeric($value)) return false;
      /** @var int|float|string $value */
      $value = strval($value);
      /** @var string $value */
      $len = $this->getLen($value);
      if ($len < self::MAX_LEN_32_BIT) return true;
      if ($len > self::MAX_LEN_32_BIT) return false;
      // длина 10
      $last = str_starts_with($value, '-') ? 8 : 7;
      return $this->compare(str_split(trim($value, '-')), [2, 1, 4, 7, 4, 8, 3, 6, 4, $last]);
   }

   /**
    * 
    * 0 <> 4_294_967_295
    */
   public function isIntUnsigned(mixed $value): bool
   {
      if (!$this->isNumeric($value)) return false;
      /** @var int|float|string $value */
      $value = strval($value);
      /** @var string $value */
      if (str_starts_with($value, '-')) return false;
      $len = $this->getLen($value);
      if ($len < self::MAX_LEN_32_BIT) return true;
      if ($len > self::MAX_LEN_32_BIT) return false;
      // длина 10
      return $this->compare(str_split($value), [4, 2, 9, 4, 9, 6, 7, 2, 9, 5]);
   }

   // ------------------------------------------------------------------
   // ___
   // ------------------------------------------------------------------

   /**
    */
   public function isMediumInt(mixed $value): bool
   {
      if (!$this->isNumeric($value)) return false;
      /** @var int|float|string $value */
      $value = strval($value);
      /** @var string $value */
      if ($this->getLen($value) > self::MEDIUM_INT_MAX_LENGHT) return false;
      return $this->beetween($value, self::MEDIUM_INT_MAX, self::MEDIUM_INT_MIN);
   }

   /**
    */
   public function isMediumIntUnsigned(mixed $value): bool
   {
      if (!$this->isNumeric($value)) return false;
      /** @var int|float|string $value */
      $value = strval($value);
      /** @var string $value */
      if ($this->getLen($value) > self::MEDIUM_INT_UNSIGNED_MAX_LENGHT) return false;
      return $this->beetween($value, self::MEDIUM_INT_UNSIGNED_MAX, self::MEDIUM_INT_UNSIGNED_MIN);
   }

   /**
    */
   public function isSmallInt(mixed $value): bool
   {
      if (!$this->isNumeric($value)) return false;
      /** @var int|float|string $value */
      $value = strval($value);
      /** @var string $value */
      if ($this->getLen($value) > self::SMALL_INT_MAX_LENGHT) return false;
      return $this->beetween($value, self::SMALL_INT_MAX, self::SMALL_INT_MIN);
   }

   /**
    */
   public function isSmallIntUnsigned(mixed $value): bool
   {
      if (!$this->isNumeric($value)) return false;
      /** @var int|float|string $value */
      $value = strval($value);
      /** @var string $value */
      if ($this->getLen($value) > self::SMALL_INT_UNSIGNED_MAX_LENGHT) return false;
      return $this->beetween($value, self::SMALL_INT_UNSIGNED_MAX, self::SMALL_INT_UNSIGNED_MIN);
   }

   /**
    * @param mixed $value
    */
   public function isTinyInt($value): bool
   {
      if (!$this->isNumeric($value)) return false;
      /** @var int|float|string $value */
      $value = strval($value);
      /** @var string $value */
      if ($this->getLen($value) > self::TINY_INT_MAX_LENGHT) return false;
      return $this->beetween($value, self::TINY_INT_MAX, self::TINY_INT_MIN);
   }

   /**
    */
   public function isTinyIntUnsigned(mixed $value): bool
   {
      if (!$this->isNumeric($value)) return false;
      /** @var int|float|string $value */
      $value = strval($value);
      /** @var string $value */
      if ($this->getLen($value) > self::TINY_INT_UNSIGNED_MAX_LENGHT) return false;
      return $this->beetween($value, self::TINY_INT_UNSIGNED_MAX, self::TINY_INT_UNSIGNED_MIN);
   }

   /**
    * функция не проверяет длину значения, будет true даже с bigint и более.
    */
   public function isNumeric(mixed $v): bool
   {
      if (!is_scalar($v) || is_bool($v)) return false;
      // here string|int|float
      $v = strval($v);
      if (preg_match('#^0$#', $v) || preg_match('#^\-?[1-9][0-9]{0,}$#', $v)) return true;
      return false;
   }

   // ------------------------------------------------------------------
   // private
   // ------------------------------------------------------------------

   /**
    * @param string[] $value
    * @param int[] $array_int
    */
   private function compare(array $value, array $array_int): bool
   {
      $combine = array_map(null, $value, $array_int);
      // print_r($combine);
      foreach ($combine as $c) {
         list($v, $a) = $c;
         $v = intval($v);
         // var_dump($v, $a);
         if ($v > $a) return false;
         elseif ($v < $a) return true;
      }
      return true;
   }

   /**
    * метод для 32 bit'ых систем
    */
   private function beetween(int|float|string $value, int $max, int $min): bool
   {
      $value = intval($value);
      return !($value > $max || $value < $min);
   }

   /**
    */
   private function getLen(string $value): int
   {
      return strlen(trim($value, '-'));
   }
}
