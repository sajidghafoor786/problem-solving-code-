<?php
$cars = array(
    array("Vitz", 22, 18, 2023), //index 0
    array("Alto", 12, 10, 2023), //index 1
    array("Mercedes", 5, 2, 2023), //index 2
    array("BMW", 14, 9, 2023), //index 3
    array("Volvo", 14, 9, 2023), //index 4
);

echo $cars [0][0]. "\t: In stock:". $cars[0][1]. "\t Sold: " .$cars[0][2]. "\t Year" .$cars[0][3] ."\n <br>";
echo $cars [1][0]. "\t: In stock:". $cars[1][1]. "\t Sold: " .$cars[1][2]. "\t Year" .$cars[1][3] ."\n <br>";
echo $cars [2][0]. "\t: In stock:". $cars[2][1]. "\t Sold: " .$cars[2][2]. "\t Year" .$cars[2][3] ."\n <br>";
echo $cars [3][0]. "\t: In stock:". $cars[3][1]. "\t Sold: " .$cars[3][2]. "\t Year" .$cars[3][3] ."\n <br>";
echo $cars [4][0]. "\t: In stock:". $cars[4][1]. "\t Sold: " .$cars[4][2]. "\t Year" .$cars[4][3] ."\n <br>";


// ----------------------------------------------------------with loops------------------------------------
$cars = array (
    array("Volvo",22,18,2023),
    array("BMW",15,13, 2023),
    array("Saab",5,2,2022),
    array("Land Rover",17,15, 2023),
    array("Land Rover",17,15, 2024),
    array('name' => 'LandRover',17,15, 2024)
  );
      
  for ($row = 0; $row < 5; $row++) {  //---1st iteration row=0; 0<5--true move into body 
    echo "<p><b>Row number $row</b></p>";  // Row number 0
    echo "<ul>";                           // print list                     
    for ($col = 0; $col < 4; $col++) {     // go in inner loop col=0; 0<4; move into body
      echo "<li>".$cars[$row][$col]."</li>"; // print list items and value of index variable of inner and outer loop.

    /*   output will be 

            volvo
            22
            18*/
    }
    echo "</ul>";
  }

?>