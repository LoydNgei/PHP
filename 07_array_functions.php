<!-- <?php 

$fruits = ['apples', 'orange', 'pear'];

// Get Array length
echo count($fruits);


// Search array
var_dump(in_array('apple', $fruits));


// add to Array

$fruits[] = 'grape';

array_push($fruits, 'blueberry', 'strawberry');
array_unshift($fruits, 'Mango'); // Beginning add

// Remove from array

array_pop($fruits); // Remove from the end
array_shift($fruits); // Remove from the beginning
unset($fruits[2]); // Remove specific index

// Split into 2 chunks

$chunked_array = array_chunk($fruits, 2);

print_r($chunked_array);


// 'print_r prints variables in human readable form'
print_r($fruits);

// CONCATENATE ARRAYS

$arr1 = [1,2,3];
$arr2 = [4,5,6];

$arr3 = array_merge($arr1, $arr2);

$arr4 = [...$arr1, ...$arr2]; // Concat using the Spread operators(As it works in JS :)

print_r($arr_4);



// Map function 

$numbers = range(1, 20);

print_r($numbers);

$newNumbers = array_map(function($number) {
    return "Number ${number}";
}, $numbers);

print_r($newNumbers);


// Filter function

$lessThan10 = array_filter($numbers, fn($number) => 
$number <= 10);

print_r($lessThan10);

// Reduce function - Adding all together


$sum = array_reduce($numbers, fn($carry, $number) =>
$carry + $number);

var_dump($sum);



?>