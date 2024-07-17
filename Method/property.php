<?php

namespace Inilim\Integer\Method;

/**
 * @return \Inilim\Integer\Property
 */
function property()
{
    static $o = null;
    if ($o !== null) return $o;
    $o = new class
    {
        // TINYINT: представляет целые числа от -128 до 127, занимает 1 байт
        // TINYINT UNSIGNED: представляет целые числа от 0 до 255, занимает 1 байт
        public const TINY_INT_MAX = 127;
        public const TINY_INT_MIN = -127;
        public const TINY_INT_UNSIGNED_MAX = 255;
        public const TINY_INT_UNSIGNED_MIN = 0;
        public const TINY_INT_MAX_LENGHT = 3;
        public const TINY_INT_MIN_LENGHT = 3;
        public const TINY_INT_UNSIGNED_MAX_LENGHT = 3;
        public const TINY_INT_UNSIGNED_MIN_LENGHT = 1;

        // SMALLINT: представляет целые числа от -32768 до 32767, занимает 2 байтa
        // SMALLINT UNSIGNED: представляет целые числа от 0 до 65535, занимает 2 байтa
        public const SMALL_INT_MAX = 32767;
        public const SMALL_INT_MIN = -32768;
        public const SMALL_INT_UNSIGNED_MAX = 65535;
        public const SMALL_INT_UNSIGNED_MIN = 0;
        public const SMALL_INT_MAX_LENGHT = 5;
        public const SMALL_INT_MIN_LENGHT = 5;
        public const SMALL_INT_UNSIGNED_MAX_LENGHT = 5;
        public const SMALL_INT_UNSIGNED_MIN_LENGHT = 1;

        // MEDIUMINT: представляет целые числа от -8388608 до 8388607, занимает 3 байта
        // MEDIUMINT UNSIGNED: представляет целые числа от 0 до 16777215, занимает 3 байта
        public const MEDIUM_INT_MAX = 8388607;
        public const MEDIUM_INT_MIN = -8388608;
        public const MEDIUM_INT_UNSIGNED_MAX = 16777215;
        public const MEDIUM_INT_UNSIGNED_MIN = 0;
        public const MEDIUM_INT_MAX_LENGHT = 7;
        public const MEDIUM_INT_MIN_LENGHT = 7;
        public const MEDIUM_INT_UNSIGNED_MAX_LENGHT = 8;
        public const MEDIUM_INT_UNSIGNED_MIN_LENGHT = 1;

        // INT: представляет целые числа от -2147483648 до 2147483647, занимает 4 байта
        // INT UNSIGNED: представляет целые числа от 0 до 4294967295, занимает 4 байта
        public const INT_MAX = 2147483647;
        public const INT_MIN = -2147483648;
        public const INT_MAX_LENGHT = 10;
        public const INT_MIN_LENGHT = 10;
        public const INT_MAX_UNSIGNED_LENGHT = 10;
        public const INT_MIN_UNSIGNED_LENGHT = 1;

        // BIGINT: представляет целые числа от -9223372036854775808 до 9223372036854775807, занимает 8 байт
        // BIGINT UNSIGNED: представляет целые числа от 0 до 18446744073709551615, занимает 8 байт
        public const BIG_INT_MAX_LENGHT = 19;
        public const BIG_INT_MIN_LENGHT = 19;
        public const BIG_INT_MAX_UNSIGNED_LENGHT = 20;
        public const BIG_INT_MIN_UNSIGNED_LENGHT = 1;

        public const MAX_LEN_32_BIT = 10;

        /**
         * The current default locale.
         */
        public string $locale = 'en';
    };
    return $o;
}
