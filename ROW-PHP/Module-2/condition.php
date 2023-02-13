<?php

$shuvo = 500;
$rasel = 400;

if($shuvo == $rasel){
    echo "Shuvo & Rasel has same amount of money";
}elseif($shuvo > $rasel){
    echo "Shuvo has more amount of money than Rasel";
}elseif($shuvo < $rasel){
    echo "Shuvo has less amount of money than Rasel";
}elseif($shuvo >= $rasel){
    echo "Shuvo has same or more amount of money than Rasel";
}elseif($shuvo != $rasel){
    echo "Shuvo & Rasel amount of money is not same";
}

echo "\n";


$age = 25;

if($age >= 13 && $age<=19){
    echo "This person is a teenager";
}else{
    echo "This person is not a teenager";
}

echo "\n";


$food = "salmon";

if("Tuna" == $food || "salmon" == $food){
    echo "{$food} has Vitamin D";
}elseif("apple" == $food){
    echo "Apple doesn't containd vitamin D";
}else{
    echo "We don't know if {$food} contains vitamin D";
}