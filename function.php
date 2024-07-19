<?php

use Inilim\Integer\Integer;

if (!\function_exists('_int')) {
    function _int(): Integer
    {
        static $o = new Integer;
        return $o;
    }
}
