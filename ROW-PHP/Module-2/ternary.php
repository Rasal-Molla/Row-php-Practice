<?php

$n = 11;

// If else condition use
if( 12 == $n){
    echo "Twelve";
}elseif( 10 == $n){
    echo "Ten";
}else{
    echo "A number";
}
echo "\n";

//Ternary operator use

$number = ( 12 == $n)? "Twelve": ((10 == $n)? "Ten":"A number");
echo $number;
echo "\n";


//Another practices

$x = 15;

//If  else condition use
if($x % 4 == 0){
    echo "Even Number";
}else{
    echo "Odd Number";
}
echo "\n";

//ternary operator use
$result = ( $x % 4 == 0)? "Even Number": "Odd Number";
echo $result;