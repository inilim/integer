<?php

use Inilim\Integer\Integer;

if (!function_exists('_int')) {
    function _int(): Integer
    {
        static $instance = null;
        if ($instance !== null) return $instance;
        return $instance = new Integer;
    }
}
