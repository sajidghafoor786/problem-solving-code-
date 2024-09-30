



<?php
// PHP code for program 
// to cyclically rotate
// an array by one
 
function rotate(&$arr, $n)
{
    $last_el = $arr[$n - 1];
    for ($i = $n - 1;
         $i > 0; $i--)
    $arr[$i] = $arr[$i - 1]; 
    $arr[0] = $last_el;
}
 
// Driver code
$arr = array(1, 2, 3, 4, 5);
$n = sizeof($arr);
 
echo "Given array is \n";
for ($i = 0; $i < $n; $i++)
    echo $arr[$i] . " ";
 
rotate($arr, $n);
 
echo "\nRotated array is\n";
for ($i = 0; $i < $n; $i++)
    echo $arr[$i] . " ";
 
// This code is contributed
// by ChitraNayal
?>