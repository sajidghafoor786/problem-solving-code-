<?php

//print table
{
$a = 4;
$b = 1;


for ($b = 1; $b <= 10; $b++) {

    $c = $b * $a;
    echo "$b X $a = $c\n";
}

}

// fin greatest one
{
$a = 4;
$b = 7;
$c = 30;

if ($a > $b)

    if ($a > $c) {
        echo "$a . is the greater number";
    } else {
        echo "$c is the greater number";
    }

else

            if ($b > $c) {
    echo "$b is the greater number";
} else {
    echo "$c is the largest number";
}
}


// factorial of number
{
$x=6;

$fact=1;

while( $x>0) {

    $fact=$fact*$x;
    $x=$x-1;

}

echo "Factorial is = $fact";

}

{
    $n=2;
   
    echo "Number\tSquare\tCube\n"; 
    for( $n=2; $n<=8; $n++) {
        $square= $n*$n;
        $cube=$n*$n*$n;
        echo "$n\t\t$square\t\t$cube\n";
    }
}


?>