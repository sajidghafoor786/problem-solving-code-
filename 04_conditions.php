<?php
/*

>Greater than
<Less than

>=Greater and equal

<=less and equal

==Equal to
=== Identical to

!= Not eqaul to

!== Not identical to
*/

// =======================If Condition==================

$a = 20;
$b = 10;
if ($a < $b) {
    echo "good";
} else {
    echo "bad";
}


$posts = ['first', '2nd', '3rd'];

if (!empty($posts)) {
    echo $posts[1];;
} else {
    echo "no post";
}


$date = date("H");

if ($date < 12) {
    echo "good Morning";
} else if ($date < 17) {

    echo "Good evening";
} else {
    echo "Good afternoon";
}

$t = 76;

if ($t < 12) {
    echo "<br> good Morning";
} else if ($t < 17) {

    echo "Good evening";
} else {
    echo "Good afternoon";
}


// How to check things in array?

$posts = ['first post', 'Second post', 'third post'];

// if(!empty($posts)) {
//     echo $posts[1];

// }  else {

//     echo "No posts";
// }



// lets see with ternary operator

echo !empty($posts) ? $posts[2] : 'No post';


// Useage of switch statements

$a = 'red';

switch ($a) {
    case 'red':
        echo '<br> This is red';
        break;

    case 'blue':
        echo 'This is blue';
        break;

    case 'green':
        echo 'This is green';
        break;

    default:
        echo 'invalid choice';
}
