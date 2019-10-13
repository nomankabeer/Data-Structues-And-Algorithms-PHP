<?php
// Insertion sort function to sort an array
function InsertionSort($arr)
{
     for($i=0;$i<count($arr);$i++)
 {
    $val = $arr[$i];
    $j = $i-1;
      while($j>=0 && $arr[$j] > $val)
       {
        $arr[$j+1] = $arr[$j];
         $j--;
       }
            $arr[$j+1] = $val;
 }
        return $arr;
}
$arr = array(2, 3, 4, 5, 6, 6, 7, 6, 5, 4, 4, 65);
$sorted_array = InsertionSort($arr);
foreach ($sorted_array as $key => $value) {
    echo $value . '<br>';
}
?>
