<!-- my logic build 
  -->


<?php 

function LogicArray(&$nums,$k){
    $n= count($nums);
    $newArray = [];
    for($i=0; $i < $k; $i++){
        $newArray[$i] = $nums[$n-1-$i];
    }
    for($i =0; $i< $n-$k; $i++){
        $newArray[$k+$i] = $nums[$i];
    }

    for($i = 0 ;$i<$n ; $i++){
       echo  $nums[$i] = $newArray[$i] . " ";  
    }

}
$nums = [1,2,3,4,5,6,7,8,9];
// outpout should be [9,8,7,6,1,2,3,4,5]
$k = 4;

LogicArray($nums,$k);
?>