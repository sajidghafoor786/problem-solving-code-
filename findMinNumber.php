<?php
function MinNumber($nums) {

    $n = count($nums);
    $Min= $nums[0];
    for($i = 0; $i < $n; $i++){
        if($Min > $nums[$i]){
            $Min = $nums[$i];
        }
    }
    echo $Min . " ";
    // find secend min value from array 
    $secondMin = $nums[0] == $Min ? $nums[1] : $nums[0];
    $thirdMin = $nums[0];
    
    // Now find the second smallest number
    for ($i = 0; $i < $n; $i++) {
        if ($nums[$i] < $secondMin && $nums[$i] > $Min) {
            $secondMin = $nums[$i];
            
        }
        if($nums[$i] <  $thirdMin && $nums[$i] >  $secondMin){
            echo "sajid";
            $thirdMin = $nums[$i];
        }
    }
     echo $secondMin . " ";
     echo $thirdMin;
     
}
$nums = [10,4,8,60,7,30,41,85,78,58,9,83,85];
MinNumber($nums);