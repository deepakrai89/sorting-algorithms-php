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

$unsorted_array = array(2,4,3,7,9,1,5,6,8);
$count = count($unsorted_array)-1;
$sorted_array = selection_sort($unsorted_array, $count);
//$sorted_array = selection _sort ($unsorted_array,count($unsorted_array));
print_r($sorted_array);exit;

?>
