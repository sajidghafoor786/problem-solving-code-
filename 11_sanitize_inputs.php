<?php
/*---------------$_GET & $POST Super global variable --------*/

/* we can pass data through URls and forms using $_get and $_post Super global variables
*/

if(isset($_POST ['submit'])) {
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);

    $age= filter_input(INPUT_POST, 'age', FILTER_SANITIZE_SPECIAL_CHARS);

    // $name= filter_var($POST['name'], FILTER_SANITIZE_SPECIAL_CHARS);

    echo $name;

    
}
   
?>
<!-- PASS DATA THROUGHH URL -->
<!-- <a href="<?php echo $_SERVER['PHP_SELF']?>?name=MOHID MUZAMMIL&age=23&height=5.4">CLICK</a> -->



<!-- forms using post and get request -->
<!-- Form can have post and get requests but by default we use get request -->

<!-- get can be used as urls aand forms but POST can only be used for forms  -->

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ; ?>"
method="POST">

<!-- post method is  much more secure-->
<div>
    <label for="name">Name:</label>
    <input type="text" name="name">
</div>
<br>
<div>
    <label for="age">Age:</label>
    <input type="text" name="age">
</div>
<br>
<div>
    <label for="Height">Height:</label>
    <input type="text" name="height">
</div>
<br>

<input type="submit" value="submit" name="submit">
</form> 

<!-- IF WE DONT WANT ERRORS WHILE USING IT WE USE THIS METHOD WITH if(isset) -->





