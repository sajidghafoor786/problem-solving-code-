<?php

// ----------------------PHP Datatypes--------------------

/* 

 --String           Series of chracter surounded by quotes

 exaample   "hello" 'helo 123'

 --Integer          Numerical data without points
 
 --FLoat            Decimal point values

 -- Boolean         provides answer in true or false

 --Array            Special variable which hold mutiple values of same and 

 different datatypes

 --Object           A class that have multiple properties
 according to id=ts funtion

 --Null               Empty Variable

--Resource          special variable that holds a resource

*/


// -------------------------------Variable Rules------------

/* 

 -- Always start with Dollar($) sign
 
 --case sensitive

 --Short name or descriptive name

 --try to use camel case

 --only contain underscore, numeric, characters
 
 */

 $name= 'Mohid'; //String

 $age= 22; //int

 $is_Cool_Today=false; //boolean

 $height=5.6;

 $subjects=['database','Operating system', 'Datstructures'];

 var_dump($height);
// whenever we to display the variable value in string then we use concatenation method

 echo  $name . ' is ' . $age .' years old '; 
// An easy and new method
//  echo "\n ${name} is ${age} years old"; 

//  -----------------------------Operators in PHP--------------

$x= '5' + '5';
echo $x;

// var_dump($x);

// echo 10+20;

// echo 9-50;

// echo 8 * 5;

// echo 10/9;

// echo 10% 2


// ---------------------------------Constant------------------

// Quantitites whose values cannot be changed remain same

define('Host', 'localhost');
define('DB_Name', 'admin');

echo Host;
echo DB_Name;
?>