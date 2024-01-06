<?php
// If statements
$age = 20;

// if ($age >= 18) {
//     echo 'You are old enough to vote';
// } else {
//     echo "Sorry you are not old enough to vote";
// }

$time = date("H"); // H - 24 Hr format

if ($time < 12) {
    echo "Good morning";
} elseif ($time < 17) {
    echo 'Good morning';  
} else {
    echo "Good Evening";
}

// SWITCH

$favcolor = 'red';

switch($favcolor) {
    case 'red':
        echo 'your fav color is red';
        break;
    case 'blue':
        echo 'Your fav color is blue';
        break;
    case 'green':
        echo 'Your fav color is green';
        break;
    default:
        echo 'Your fav color is not red, blue or green';
}


?>

