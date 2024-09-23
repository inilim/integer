<?php

require_once __DIR__ . '/vendor/autoload.php';

use Inilim\Dump\Dump;

Dump::init();

$a = _int()->getRandomIntByLength(20);
de($a);
