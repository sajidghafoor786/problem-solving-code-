<?php
/*============================Super globals ===================*/

// built-in variable that are available in all scopes

/*

$_GET - contains information about variables passed through a
URL or a file

$_POST - Contains information about variable passed through a form

$_COOKIE - Contains information about variable passed through a cookie

$_SESSION - Contains information about variable passed through a SESSION

$_SERVER - Contains information about SERVER ENV.

$ENV - Contains information about ENVIRONMENT variable

$_FILES - Contains information about FILES upload to the script

$_REQUEST - Contains information about variable passed through a form or URL

*/

var_dump($_SERVER);






?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<ul>
    <li>Host : <?php echo $_SERVER['HTTP_HOST']; ?></li>
    <li>Host : <?php echo $_SERVER['DOCUMENT_ROOT']; ?></li>
    <li>Host : <?php echo $_SERVER['SERVER_NAME']; ?></li>
    <li>Host : <?php echo $_SERVER['SERVER_PORT']; ?></li>
    <li>CURRENT FILE DIRECTORY : <?php echo $_SERVER['PHP_SELF']; ?></li>
    <li></li>
    <li></li>
</ul>


    
</body>
</html>