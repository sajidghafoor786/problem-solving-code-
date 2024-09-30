<?php
/* cookies is the mechanism for storing data in the reomte browser and thus tracking or identifying reurn users. you can set set specific data to be stored in the browser and then recieve it when the user visits the sites again
*/

setCookie('name', 'Ali', time() + 86400);

if(isset($_COOKIE['name'])) {
    echo $_COOKIE['name'];
}



?>