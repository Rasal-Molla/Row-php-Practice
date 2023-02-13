<?php

$name = 'Rasel Ahmed';
$age = 25;
$question = "How are you?";
$word = "age";


echo 'First $$word print $age, then $age print 25. Reason for that $word value age= '.$$word;
echo "\n";
echo 'Hello '.$name;
echo "\n";
echo "Hello, {$name}. {$question}"; //This way should be practice.


define('PI', 3.1416);

echo "Value of PI= ".PI;
echo "\n";

$age = 29;

echo $age; //First age value 25, When I redeclare & change the value of age then its print new value for me. 
