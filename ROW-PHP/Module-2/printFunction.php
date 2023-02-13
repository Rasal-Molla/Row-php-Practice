<?php

$fname = "Rasel";
$lname = "Ahmed";
$middlename = "Nothing";

$Output = sprintf('His name is %s %s ', $fname,$lname);
echo $Output;
echo "\n";
printf('His name is %s %s ', $fname,$lname);
echo "\n";
printf('His name is %s %s ',$lname,$fname);
echo "\n";
printf('His name is %3$s %2$s %1$s ', $fname,$middlename,$lname); //set the postion //argument
echo "\n";
printf('The binary equivalent of %1$d is %1$b', 12);

$n = 45.4235;
echo "\n";
printf("%.2f \n",$n);


$x = 458.4545;
$y = 54.454;

printf("%07.2f \n", $x);
printf("%07.2f \n", $y); 
