<?php

$condition1 = 5;
$condition2 = 5;
$condition3 = 5;


//Formula-1: Nested if else
if($condition1 == 5){
    if($condition2 == 5){
        if($condition3 == 5){
                echo "All condition are true";
            }else{
                echo "First 2 condition are true";
            }
        }else{
            echo "First condition true only";
        }
    }else{
    echo "All condition are false";
}
echo "\n";


//Formula-2: Nested if else
if($condition1 == 5 && $condition2 == 5 && $condition3 == 5){
    echo "All condition are ture ";
}elseif($condition1 == 5 && $condition2 == 5){
    echo "First 2 condition are ture";
}elseif($condition1 == 5){
    echo "First condition ture only";
}else{
    echo "All condition are false ";
}
