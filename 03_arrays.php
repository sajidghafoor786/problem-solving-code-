<?php

// =============================Arrays=======================
//  A variable that multiple values in same location
// =======================Simple Array=================

/*
sorting

filter 

nested array


*/

$numbers=[20, 78, 67, 89, 89];
$fruits= array('apple', 'Mango', 'Pear', 'Peach');

print_r($numbers);

var_dump($numbers);

// to access the specific value from array
echo $fruits[3];

echo $fruits[1];

// ==========================Associative Array===============

$colors=[
    1=>'red',
    2=>'Green',
    3=>'Yellow'
];

echo $colors[2];

// ===================in most cases we use string as akey========
/* ====Associate arrays are used to get data from tabular form
from blogs, and fetching data from dataase*/

$hex = [
    'red'=> '#ff0',
    'green'=> '#fff21',
    'blue' => '#fff330'
];

echo $hex['red'];


$person = [

    'first_Name' => 'Mohid',
    'last_Name' => 'Muzammil',
    'email' => 'mohid@gmail.com'
];
 echo $person['first_Name'];


// ==========================Multi-dimensional Array=========

// An array within the array is the multi-dimensional Array



 $people= [
    [

        'first_Name' => 'Mohid',
        'last_Name' => 'Muzammil',
        'email' => 'mohid@gmail.com'
    ],

    [

        'first_Name' => 'Talha',
        'last_Name' => 'Mohid',
        'email' => 'Talha@gmail.com'
    ],

    [

        'first_Name' => 'Usman',
        'last_Name' => 'Latif',
        'email' => 'usman@gmail.com'
    ],
    [

        'first_Name' => 'Kaleem',
        'last_Name' => 'Saith',
        'email' => 'kaleem@gmail.com'
    ]
    ];

    echo $people[0] ['last_Name'];



?>