<?php

// Create simple string
$name = 'Naveen';
$string = 'Hello '.$name.'. i am 24 ';
$string2 = "Hello $name. i am 24 ";
echo $string. '<br>';
echo $string2. '<br><br>';

// String concatenation
echo 'Hello '.' World '.' and PHP'. '<br><br>';

// String functions
$string = "    Hello World      ";

echo "1 - " . strlen($string) . '<br>' . PHP_EOL; 
echo "2 - " . trim($string) . '<br>' . PHP_EOL;
echo "3 - " . ltrim($string) . '<br>' . PHP_EOL;
echo "4 - " . rtrim($string) . '<br>' . PHP_EOL;
echo "5 - " . str_word_count($string) . '<br>' . PHP_EOL;
echo "6 - " . strrev($string) . '<br>' . PHP_EOL;
echo "7 - " . strtoupper($string) . '<br>' . PHP_EOL;
echo "8 - " . strtolower($string) . '<br>' . PHP_EOL;
echo "9 - " . ucfirst('hello') . '<br>' . PHP_EOL;
echo "10 - " . lcfirst('HELLO') . '<br>' . PHP_EOL;
echo "11 - " . ucwords('hello world') . '<br>' . PHP_EOL;
echo "12 - " . strpos($string, 'world') . '<br>' . PHP_EOL; // Change into world
echo "13 - " . stripos($string, 'world') . '<br>' . PHP_EOL;
echo "14 - " . substr($string, 8) . '<br>' . PHP_EOL;
echo "15 - " . str_replace('World', 'PHP', $string) . '<br>' . PHP_EOL;
echo "16 - " . str_ireplace('world', 'PHP', $string) . '<br><br>' . PHP_EOL;

// Multiline text and line breaks
$longText = "
 hello, my name is Naveen
 i am 24,
";
echo $longText. '<br>';
echo nl2br($longText). '<br>';


// Multiline text and reserve html tags
$longText = "
 Hello, my name is <b>Naveen</b>
 i am <b>24</b>,
";
echo "1 - " . $longText . '<br>';
echo "2 - " . nl2br($longText) . '<br>';
echo "3 - " . htmlentities($longText) . '<br>' . PHP_EOL;
echo "4 - " . nl2br(htmlentities($longText)) . '<br>' . PHP_EOL;
echo "5 - " . html_entity_decode(htmlentities($longText)) . '<br>' . PHP_EOL;
echo "6 - " . htmlspecialchars($longText) . '<br>' . PHP_EOL;




// https://www.php.net/manual/en/ref.strings.php