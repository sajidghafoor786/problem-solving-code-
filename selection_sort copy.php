<?php

function sorting(&$num)
{
    $n = count($num);

    for ($i = 0; $i < $n; $i++) {
        $low = $i;
        for ($j = $i + 1; $j < $n; $j++) {
            if($num[$j] < $num[$low]){
                $low = $j;
            }
        }

        if($num[$i] > $num[$low]){
            $temp = $num[$i];
            $num[$i] = $num[$low];
            $num[$low] = $temp;
        }

        echo  $num[$i] . ' ';
    }
}




$num = [1, 5, 8, 20, 2, 45, 15];
sorting($num);
