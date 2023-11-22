<?php

namespace App\Helper;

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
   private const MEDIUM_INT_MAX_LENGHT = 6;
   private const MEDIUM_INT_MIN_LENGHT = 6;
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

   private const BIG_INT_MAX_LENGHT = 19;
   private const BIG_INT_MIN_LENGHT = 19;
   private const BIG_INT_MAX_UNSIGNED_LENGHT = 20;
   private const BIG_INT_MIN_UNSIGNED_LENGHT = 1;

   private const MAX_LEN_32_BIT = 10;

   // BIGINT: представляет целые числа от -9223372036854775808 до 9223372036854775807, занимает 8 байт
   // BIGINT UNSIGNED: представляет целые числа от 0 до 18446744073709551615, занимает 8 байт

   /**
    * @param int|string|null $value
    */
   public function isBigInt($value): bool
   {
      if (!isInt($value)) return false;
      $value = strval($value);
      $len = $this->getLen($value);
      if ($len < self::MAX_LEN_32_BIT) return true;
   }

   /**
    * @param int|string|null $value
    */
   public function isBigIntUnsigned($value): bool
   {
      if (!isInt($value)) return false;
      $value = strval($value);
      $len = $this->getLen($value);
      if ($len < self::MAX_LEN_32_BIT) return true;
   }

   /**
    * @param int|string|null $value
    */
   public function isInt($value): bool
   {
      if (!isInt($value)) return false;
      $value = strval($value);
      $len = $this->getLen($value);
      if ($len < self::MAX_LEN_32_BIT) return true;
   }

   /**
    * -2147483648 <> 2147483647
    * 0 <> 4294967295
    * @param int|string|null $value
    */
   public function isIntUnsigned($value): bool
   {
      if (!isInt($value)) return false;
      $value = strval($value);
      $len = $this->getLen($value);
      if ($len < self::MAX_LEN_32_BIT) return true;
   }

   // ------------------------------------------------------------------
   // ___
   // ------------------------------------------------------------------

   /**
    * @param int|string|null $value
    */
   public function isMediumInt($value): bool
   {
      if (!isInt($value)) return false;
      if ($this->getLen($value) > self::MEDIUM_INT_MAX_LENGHT) return false;
      return $this->beetween32bit($value, self::MEDIUM_INT_MAX, self::MEDIUM_INT_MIN);
   }

   /**
    * @param int|string|null $value
    */
   public function isMediumIntUnsigned($value): bool
   {
      if (!isInt($value)) return false;
      if ($this->getLen($value) > self::MEDIUM_INT_UNSIGNED_MAX_LENGHT) return false;
      return $this->beetween32bit($value, self::MEDIUM_INT_UNSIGNED_MAX, self::MEDIUM_INT_UNSIGNED_MIN);
   }

   /**
    * @param int|string|null $value
    */
   public function isSmallInt($value): bool
   {
      if (!isInt($value)) return false;
      if ($this->getLen($value) > self::SMALL_INT_MAX_LENGHT) return false;
      return $this->beetween32bit($value, self::SMALL_INT_MAX, self::SMALL_INT_MIN);
   }

   /**
    * @param int|string|null $value
    */
   public function isSmallIntUnsigned($value): bool
   {
      if (!isInt($value)) return false;
      if ($this->getLen($value) > self::SMALL_INT_UNSIGNED_MAX_LENGHT) return false;
      return $this->beetween32bit($value, self::SMALL_INT_UNSIGNED_MAX, self::SMALL_INT_UNSIGNED_MIN);
   }

   /**
    * @param int|string|null $value
    */
   public function isTinyInt($value): bool
   {
      if (!isInt($value)) return false;
      if ($this->getLen($value) > self::TINY_INT_MAX_LENGHT) return false;
      return $this->beetween32bit($value, self::TINY_INT_MAX, self::TINY_INT_MIN);
   }

   /**
    * @param int|string|null $value
    */
   public function isTinyIntUnsigned($value): bool
   {
      if (!isInt($value)) return false;
      if ($this->getLen($value) > self::TINY_INT_UNSIGNED_MAX_LENGHT) return false;
      return $this->beetween32bit($value, self::TINY_INT_UNSIGNED_MAX, self::TINY_INT_UNSIGNED_MIN);
   }

   // ------------------------------------------------------------------
   // private
   // ------------------------------------------------------------------

   /**
    * @param int|string|null $value
    */
   private function initialCheck64bit($value): bool
   {
      $len = $this->getLen($value);
      return $len >= self::MAX_LEN_32_BIT;
   }

   /**
    * метод для 32 bit'ых систем
    *
    * @param string|int|null $value
    */
   private function beetween32bit($value, int $max, int $min): bool
   {
      $value = intval($value);
      return !($value > $max || $value < $min);
   }

   /**
    * @param int|string|null $value
    */
   private function getLen($value): int
   {
      return strlen(trim(strval($value), '-'));
   }
}
