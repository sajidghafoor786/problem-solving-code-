<?php
function MaxNumber($nums) {

    $n = count($nums);
    $Max= $nums[0];
    for($i = 0; $i < $n; $i++){
        if($Max < $nums[$i]){
            $Max = $nums[$i];
        }
    }
    echo $Max . ' ';
    // find secend large value from array 
    $SecendLarge = 0;
    for($i =0;$i < $n;$i++){
        if($nums[$i] < $Max && $nums[$i] > $SecendLarge  ){
            $SecendLarge = $nums[$i];
        }
    }
     echo $SecendLarge;
     
}
$nums = [85,4,8,6,3,7,41,83,78,58,5,81];
MaxNumber($nums);