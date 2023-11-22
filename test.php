<?php

include 'src/Integer.php';

$a = new Inilim\Integer;


var_dump($a->isBigInt('9223372036854775807'));


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
