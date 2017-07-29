<?php

function bubble_sort(array $array) {
    $array_size = count($array);
    for($i = 0; $i < $array_size; $i ++) {
        for($j = 0; $j < $array_size; $j ++) {
            if ($array[$i] < $array[$j]) {
                $tem = $array[$i];
                $array[$i] = $array[$j];
                $array[$j] = $tem;
            }
        }
    }
    return $array;
}
$start_time = microtime(true);
$unsorted_array = array(2,4,3,7,9,1,5,6,8);

$output = bubble_sort($unsorted_array);
$end_time = microtime(true);
print_r($output);
echo 'executed in'.number_format(($end_time-$start_time),3).'seconds';
echo "\n";