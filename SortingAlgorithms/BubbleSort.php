<?php
//Bubble sort function to sort an array
function BubbleSort($res)
{
    $size = count($res);
    for ($i = 0; $i < $size; $i++) {
        for ($j = 0; $j < $size; $j++) {
            if ($res[$i] < $res[$j]) {
                $temp = $res[$i];
                $res[$i] = $res[$j];
                $res[$j] = $temp;
            }
        }
    }
    return $res;
}
$res = array(2, 3, 4, 5, 6, 6, 7, 6, 5, 4, 4, 65);
$sorted_array = BubbleSort($res);
foreach ($sorted_array as $key => $value) {
    echo $value . '<br>';
}
?>
