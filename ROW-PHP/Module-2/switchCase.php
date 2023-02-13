<?php

$n = 12;
$r = $n % 2;

switch ($r){
    case 0:
        echo "{$n} is an even number \n";
        break;
    default:
        echo "{$n} is an odd number \n";
}


$color = 'red';
switch ($color){
    case 'red':
        echo "The color is {$color}";
        break;
        
    case 'green':
        echo "The color is {$color}";
        break;
    case 'blue':
        echo "The color is {$color}";
        break;
    case 'white':
        echo "The color is {$color}";
        break;
    default:
    echo "No releted color found";

}
echo "\n";

$color2 = 'red';
switch ($color2){
    case 'red':  
    case 'green':
        echo "The color is {$color2}";
        break;
    case 'blue':
        echo "The color is {$color2}";
        break;
    case 'white':
        echo "The color is {$color2}";
        break;
    default:
    echo "No releted color found";

}