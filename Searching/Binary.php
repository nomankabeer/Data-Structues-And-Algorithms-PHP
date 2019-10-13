<?php
// Binary search function to find element in array
function binarySearch($arr, $value) 
{
    $low_value = 0; 
    $high_value = count($arr) - 1;       
    for($i= $low_value ; $i < $high_value+1 ; ){ 
        $mid_value = floor(($low_value + $high_value) / 2); 
        if($arr[$mid_value] == $value) { 
            return true; 
        } 
        if ($value < $arr[$mid_value]) { 
            $high_value = $mid_value -1; 
        } 
        else { 
            $low_value = $mid_value + 1; 
        } 
    } 
    return false; 
} 
$arr = array(1, 2, 3, 4, 5); 
$value = '5'; 
binarySearch($arr, (int)$value) ? $ans = $value." Exists in array" : $ans = $value." not found in array";
echo $ans;
?> 
