<?php

include 'vendor/autoload.php';

$a = new Inilim\Integer;
echo var_export([
   'a' => 'a',
   'aa' => 'a',
]);
exit();
//                     9223372036854775807
echo get_debug_type($a->isBigInt('8999999999999999999'));


exit();

$array = [
   '4294967295',
   '4294967296',
   '4294967294',
   '1294967295',
   '11294967295',
   '4295967295',
];

foreach ($array as $value) {
   echo $value . ' - ' . var_export($a->isIntUnsigned($value), true);
   echo PHP_EOL;
}
