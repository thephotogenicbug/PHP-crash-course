<?php

// Declaring numbers
$a = 5;  // a is an integer
$b = 4;  // b is an integer
$c = 1.2; // c is an Float

// Arithmetic operations
echo $a + $b * $c.  '<br>'; //  first multiplication and addition
echo ($a + $b) * $c.'<br>'; // first addition will happen and  multiplications
echo $a - $b. '<br>';
echo $a * $b. '<br>';
echo $a / $b. '<br>';
echo $a % $b. '<br><br>';


// Assignment with math operators

$a += $b; echo $a. '<br>';
$a -= $b; echo $a. '<br>';
$a *= $b; echo $a. '<br>';
$a /= $b; echo $a. '<br>';
$a %= $b; echo $a. '<br>';

// Increment operator
echo $a++. '<br>';
echo ++$a. '<br>';

// Decrement operator
echo $a--. '<br>';
echo --$a. '<br>';

// Number checking functions
is_float(1.25); //true
is_double(1.25); // true
is_int(5); // true
is_numeric("3.45"); //true
is_numeric("3g.45"); //false

// Conversion
$strNumber = '12.34';
//$number = (float)$strNumber; // float
//$number = (int)$strNumber;   // integer
//$number = floatval($strNumber); // float
$number = intval($strNumber);  // integer
var_dump($number);
echo '<br>';
// Number functions
echo "abs(-15)" . abs(-15) . '<br>';  //absolute number
echo "pow(2, 3)" . pow(2 , 3) . '<br>'; // powered by 
echo "sqrt(16)" . sqrt(16) . '<br>'; // square root
echo "max(2 , 3)" . max(2,3) . '<br><br>'; // maximum



// Formatting numbers

$number = 123456789.12345; //
echo number_format($number , 2, '.', ' , ');
// https://www.php.net/manual/en/ref.math.php
