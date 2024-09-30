<?php 
// A PHP program to put all negative
// numbers before positive numbers

function rearrange(&$arr, $n)
{
    $j = 0;
    for ($i = 0; $i < $n; $i++)
    {
        if ($arr[$i] < 0) 
        {
            if ($i != $j)
            {
                $temp = $arr[$i];
                $arr[$i] = $arr[$j];
                $arr[$j] = $temp;
            }
            $j++;
        }
    }
}

// A utility function to print an array
function printArray(&$arr, $n)
{
    for ($i = 0; $i < $n; $i++)
        echo $arr[$i]." ";
}

// Driver code
$arr = array(-1, 2, -3, 4, 5, 6, -7, 3, 9 );
$n = sizeof($arr);
rearrange($arr, $n);
printArray($arr, $n);

// This code is contributed by ChitraNayal
?>