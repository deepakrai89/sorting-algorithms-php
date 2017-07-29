<?php

function selection_sort($array, $count){


	for($i =0;$i <= $count -2;$i++ ){
$i_min = $i;

for($j=$i+1 ; $j <= $count-1;$j++){
if($array[$j] <  $array[$i_min]){
 $i_min = $j;
}
	}
$temp = $array [$i];
$array[$i] = $array[$i_min];
$array[$i_min] = $temp;
	}

return $array;
}
$start_time = microtime(true);
$unsorted_array = array(2,4,3,7,9,1,5,6,8);
$count = count($unsorted_array)-1;
$sorted_array = selection_sort($unsorted_array, $count);

$end_time = microtime(true);

print_r($sorted_array);
echo 'executed in'.number_format(($end_time-$start_time),3); ;

?>
