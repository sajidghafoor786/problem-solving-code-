<?php 

function reverseArray(&$nums){
    $n= count($nums);
    echo $n ."\n";
    $newArray=[];
    for($i= 0;$i<$n;$i++){
      $newArray[$i] = $nums[$n-1-$i];
    //   echo $nums[$i] = $newArray[$i] . "\t";
      
    }
    for($i = 0; $i < $n; $i++){
       echo $nums[$i] = $newArray[$i] . " ";
    }
}
$nums = [1,2,3,4,5,6,7,8,9];
reverseArray($nums);
?>