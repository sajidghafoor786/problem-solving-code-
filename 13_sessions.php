<?php

/* -----------------sessions----------------------

/* 
 sesssions are a way to store nformation in a variable to be used accross multiple pages.
 Unlike, cookies , sessions are stored on the server

 */
session_start();

 if(isset($_POST['submit'])) {
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);

    $password= $_POST['password'];

    if($username=='mohid' && $password=='12345') {
        $_SESSION['username'] = $username;
        header('Location: /php-crash/extras/dashboard.php');
    } else {
        echo 'Incorrect Login';
    }
}

    

   
?>




<!-- forms using post and get request -->
<!-- Form can have post and get requests but by default we use get request -->

<!-- get can be used as urls aand forms but POST can only be used for forms  -->

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ; ?>"
method="POST">

<!-- post method is  much more secure-->
<div class="user">
    <label for="Username">UserName:</label>
    <input type="text" name="username">
</div>
<br>
<div class="pass">
    <label for="password">Password</label>
    <input type="password" name="password">
</div>
<br>

<br>

<input class="sub" type="submit" value="submit" name="submit">
</form> 





