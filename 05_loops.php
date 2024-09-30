<?php
/*-- ==========loops 
 loops are used to repeat a statement or set of statements for multiple times

 =====================3 types of loops==============

        1) while --(Only executed whenever condition is true)

        2) do while -- (excuted atleast one time even the condition is false)

        3) for --- (executed only whenever the condition is true
        
        plus point is, it is easy to use)

        4) for each ----(specifically for arrays)
 */

// Example of while loop

// $a = 1;
// while ($a <= 10) {

//     if ($a % 2 == 0)
//         echo $a . "<br>";
//     $a++;
// }


// Examplle of do whilw loop
// echo "do while loop <br>";
// $a = 1;
// do {


//     echo $a . "<br>";
//     $a++;
// } while ($a <= 100);

// echo " <h1><br> For loop </h1> <br>";

// for ($b = 1; $b <= 30; $b++) {
//     echo $b . "<br>";
// }


//  for each ( used specifically in arrays) mostly used in php 
// development

/* syntax
foreach($array as value) {
//code to executed
}
*/

$posts = ['Mohid', 'Kaleem', 'Usman', 'Ameer'];
// here x is the index variable to get value from a array
for ($x = 0; $x < count($posts); $x++) {
    echo $posts[$x];
}

// do same thing with foreach loop

foreach($posts as $p){
    echo '<br>'. $p. '<br>';
}

// if we want to get specific index value

foreach( $posts as $index=> $p){
    echo $index + 1 .'---'. $p. '<br>';
}

// For an associative array

$people= [
    

        'first_Name' => 'Mohid',
        'last_Name' => 'Muzammil',
        'email' => 'mohid@gmail.com'
    
    ];
    // ,

    // [

    //     'first_Name' => 'Talha',
    //     'last_Name' => 'Mohid',
    //     'email' => 'Talha@gmail.com'
    // ],

    // [

    //     'first_Name' => 'Usman',
    //     'last_Name' => 'Latif',
    //     'email' => 'usman@gmail.com'
    // ],
    // [

    //     'first_Name' => 'Kaleem',
    //     'last_Name' => 'Saith',
    //     'email' => 'kaleem@gmail.com'
    // ]
    // ];

    foreach($people as $key => $value){
        echo "$key - $value <br> ";
    }
   

    // if it is less than the length of an array we used count function

    // for ($i = 1; $i <= 5; $i++) {

    //     for ($j = 1; $j <= $i; $j++) {
    //         echo "*";
    //     }
    //     // echo "\n";
    //     echo "<br>";
    // }
