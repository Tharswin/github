<?php
// This is a single-line comment

/*
 This is a multi-line comment
*/

// Output text to the browser
echo "Hello, World!";

// Variables
$name = "Alice";
$age = 25;

// Concatenation
echo "<br>My name is " . $name . " and I am " . $age . " years old.";

// Conditional statement
if ($age >= 18) {
    echo "<br>You are an adult.";
} else {
    echo "<br>You are a minor.";
}

// Loop
echo "<br>Counting from 1 to 5:<br>";
for ($i = 1; $i <= 5; $i++) {
    echo $i . "<br>";
}
?>
