<?php
// PHP program for implementation 
// of selection sort 
function selection_sort(&$arr, $n) 
{
    for($i = 0; $i < $n ; $i++)
    {
        $low = $i;
        for($j = $i + 1; $j < $n ; $j++)
        {
            if ($arr[$j] < $arr[$low])
            {
                $low = $j;
            }
        }
        
        // swap the minimum value to $ith node
        if ($arr[$i] > $arr[$low])
        {
            $tmp = $arr[$i];
            $arr[$i] = $arr[$low];
            $arr[$low] = $tmp;
           
        }
        echo $arr[$i]. " " ;
        
    }
}


// Driver Code
$arr = array(5, 25, 12, 22, 11, 60, 9, 30, 2023, 5);
$len = count($arr);
// for ($i = 0; $i < $len; $i++) 
//     echo $arr[$i] . " "; 

 
selection_sort($arr, $len);   //function calling
echo "Sorted array : \n"; 

// for ($i = 0; $i < $len; $i++) 
//     echo $arr[$i] . " "; 

 
?> 
