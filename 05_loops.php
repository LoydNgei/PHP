<?php

// for Loop

// for ($i = 0; $i <= 10; $i++) {
//     echo "Number " . $i . '<br>';
// }


// While Loop

// $x = 1;

// while ($x <= 15) {
//     echo 'Number ' . $x . '<br>';
//     $x++;
// }

// FOR EACH

// $posts = ['First post ', 'Second post ', 'Third post '];

    // How the normal for loop would look

// for ($x = 0; $x < count($posts); $x++) {
//     echo $posts[$x];
// }


// The FOR EACH

foreach($posts as $post) {
    echo $post;
}

$person = [
    'first_name' => 'Loyd',
    'last_name' => 'Ngei',
    'email' => 'loydngei@gmail.com',
];

foreach($person as $key => $value) {
    echo "$key - $value<br>";
}

?>