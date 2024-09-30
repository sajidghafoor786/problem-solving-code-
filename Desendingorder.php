<?php

function AsendingOder(&$nums){
    $n = count($nums);
for($i =0; $i< $n; $i++){
    $min = $i;
    for($j = $i+1;$j<$n;$j++){
        if($nums[$min] < $nums[$j]){
            $min = $j;
        }

    }
    if($min != $i){
        $temp = $nums[$i];
        $nums[$i] = $nums[$min];
        $nums[$min] = $temp;
    }
    echo $nums[$i] . " ";


}
}
$nums = [5,8,2,1,9,4,10,3,12,6];
AsendingOder($nums);