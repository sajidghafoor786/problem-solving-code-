<?php
//----------------------------sorting functions--------------
/*

    sort() - sort arrays in asscending order
    
    rsort() - sort arrays im descending order
    asort() - sort assciative arrays in ascending order, according to value

    ksort() - sort associative arrays in ascending order according to keys

    arsort() - sort associative arrays in descending order, according to value

    krsort() - sort associative arrays in descending order, according to key.
*/

// sort() - sort arrays in asscending order

$dept=['Management', 'it-sector', 'Finance', 'Faculty', 'Physics' ];
sort($dept);
print_r($dept);

$dept=[20, 34, 40, 12, 10,900, 30, 50, 80, 1, 9,  ];
sort($dept);
print_r($dept);


// rsort() - sort arrays im descending order
$dept=[20, 34, 40, 12, 10,900, 30, 50, 80, 1, 9,  ];
rsort($dept);
print_r($dept);


// asort() - sort assciative arrays in ascending order, according to value

$age=["Mohid"=> "23",
"Ahmad"=>"24",
"Faizan"=>"32",
"Kaleem"=> "25",
"usman"=>"23"];

asort($age);
print_r($age);


// ksort() - sort assciative arrays in ascending order, according to key

$age=["Mohid"=> "23",
"Ahmad"=>"24",
"Faizan"=>"32",
"Kaleem"=> "25",
"usman"=>"23"];

ksort($age);
print_r($age);

// arsort() - sort associative arrays in descending order, according to value

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
arsort($age);

foreach($age as $x => $x_value) {
    // foreach($arrayname as $index number => $value)
  print_r("Key=" . $x . ", Value=" . $x_value. "\n") ;

}

echo "<br>";

// arsort() - sort associative arrays in descending order, according to value
{
$cars=["Name"=> "Volvo, vitz,corolla", "color"=>"grey", "Model"=> "2023"];

krsort($cars);

foreach($cars as $i=>$value) {
    print_r("Key=" . $i . ", Value=" . $value. "\n") ;


}
}

?>