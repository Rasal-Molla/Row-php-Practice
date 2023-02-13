<?php

//$number = 20;
//$number = $number + 30;
//$number += 20; //$number = $number + 20;

//$number = $number - 15;
//$number -= 15;

//$number = $number * 3;
//$number *= 3;

//$number = $number / 5;
//$number /= 4;

//$number = $number % 7;
//$number %= 8;

//$number2 = (24-4) / (7-2);

/*

$number++; //$number +=1; $number = $number + 1;
$number--; //$number -=1; $number = $number - 1;

*/
//Post increment start here
$n = 7;
$m = $n++;


echo $m,"\n", $n,"\n";

/*

$m = $n++;
$m = $n; Output= 7
$n = $n +1; Output= 8

*/
//Post increment ends here

//Pre increment start here
$x = 7;
$y = ++$x;


echo $y,"\n", $x;
/*

$y = ++$x;
$x = $x + 1; Output= 8
$y = $x; Output= 8

*/
//Pre increment ends here
