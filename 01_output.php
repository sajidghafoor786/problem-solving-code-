                            <!-- Php basics  -->

<?php

//echo - Output Strings, Numbers, html, etc

// echo 123, "Hello", 10.5; 

// print is also works like echo, but can only take in a single argument

// print 123;

// print_r() -Print single values and array 
// print_r([1,2,4,45,56,4])

// var-dump is used to see the datatypes of variable and length
// $x=10;
// var_dump($x);

// var_dump([1,3,45,45,67, 'helo',10.89,true]);


// var_export() - is similar to var\-dump(). Output a string representation of a variable
// var_export()


?>


<!-- here we use html when we need to add data in datbase -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- closing tag is neessary when use in html tags -->
<h1><?php echo"New thing";?></h1>

<!--  A shorthand for add php in html tags semicolon is not necessary in there -->
<h2><?="Hello"?> </h2>

    
</body>
</html>