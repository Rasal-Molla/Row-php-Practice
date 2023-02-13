<?php

$planet1 = "Mercury";
$planet2 = "Jupiter";

echo "The smallest planet is ".$planet1." and the biggest planet is ".$planet2."\n";
echo "The smallest planet is {$planet1} and the biggest planet is {$planet2}\n";
printf("The smallest planet is %s and the biggest planet is %s\n",strtoupper($planet1),strrev($planet2)); // %s means string data.