<?php

/* ------------------------ File handling----------
    Fike handling is the ability for read and write files on the server

    PHP has built-in functions for reading and writing files
*/

$file = 'extras/user.txt';

if(file_exists($file)) {

    // echo readfile($file)

    $handle= fopen($file, 'r'); //r means read
    $contents = fread($handle, filesize($file));

    fclose($handle);
    echo $contents;
} else {
    $handle = fopen($file, 'w');
    $contents= 'java' . PHP_EOL . 'php' . PHP_EOL .      PHP_EOL . 'javascript' . PHP_EOL . 'python';
    fwrite($handle, $contents);
    fclose($handle);
}

?>


 

