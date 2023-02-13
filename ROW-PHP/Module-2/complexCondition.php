<?php

//1 - Divisible by 4 ?
//2 - Divisible by 100 ?
//3 - Divisible by 400 ?

$year = 1840;


//Formula-1: Calculating leap year or not
if($year % 4 == 0 && $year % 100 == 0 & $year % 400 == 0){
    echo "{$year} is a leap year";
}elseif($year % 4 == 0 && $year % 100 == 0){
    echo "{$year} is not a leap year";
}elseif($year % 4 == 0){
    echo "{$year} is a leap year";
}else{
    echo "{$year} is not a leap year";
}
echo "\n";

//Formula-2: Calculating leap year or not
if($year % 4 == 0 && ($year % 100 != 0 || $year % 400 == 0)){
    echo "{$year} is a leap year";
}else{
    echo "{$year} is not a leap year";
}