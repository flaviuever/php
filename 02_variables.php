<?php

// What is a variable
$name = 'Zura';
$age = 28;
$isMale = true;
$height = 1.85;
$salary = null;
$address;
// Variable types

// Declare variables

// Print the variables. Explain what is concatenation
echo $name.'<br>';
echo $age.'<br>';
echo $isMale.'<br>';
echo $height.'<br>';
echo $salary.'<br>';

// Print types of the variables
echo gettype($name).'<br>';
echo gettype($age).'<br>';
echo gettype($isMale).'<br>';
echo gettype($height).'<br>';
echo gettype($salary).'<br>';

// Print the whole variable
var_dump($name, $age, $isMale, $salary, $height).'<br>';

// Change the value of the variable
$name = false;

// Print type of the variable
echo gettype($name).'<br>';
// Variable checking functions
echo is_string($name).'<br>'; //false
echo is_int($age).'<br>'; //true
echo is_bool($isMale).'<br>'; //true
echo is_double($height).'<br>'; //true

// Check if variable is defined
echo isset($name).'<br>'; //true
echo isset($address).'<br>'; //false

// Constants
define('PI', 3.14);
define('name', 'Flaviuu');
echo PI.'<br>';
echo name.'<br>';

// Using PHP built-in constants
echo SORT_ASC.'<br>';
echo PHP_INT_MAX.'<br>';