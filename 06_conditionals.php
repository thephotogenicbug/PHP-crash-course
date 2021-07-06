<?php

$age = 24;
$salary = 300000;

// Sample if
if($age === 20){
    echo "1";
}

// Without circle braces
if($age === 20) echo "1";

// Sample if-else
if($age > 20){
    echo "1";
} else{
    echo "2";
}

// Difference between == and ===
$age ==  20; //true
$age == '20'; // true

$age === 20; // true
$age === '20'; // false


if($age == 20){
    echo "1". '<br>';

}
if($age == '20'){
    echo "2". '<br>';
}
// if AND
if($age > 20 || $salary === 300000){
    echo "Do Something". '<br><br>';
}

// if OR

// Ternary if
echo $age < 22 ? 'young' : 'old';

// Short ternary
$myage = $age ?: 18; // if age is false / 0 return 18 
echo '<pre>';
var_dump($myage);
echo '</pre>';

// Null coalescing operator
$myName = isset($name) ? $name :'Naveen';
$myName = $name ?? 'Naveen';         // if name doesnt exist show Naveen

// switch
$userRole = 'admin'; // editor, user, admin
switch($userRole){
    case 'admin' :
        echo 'Welcome Admin'; //editor , user, admin rights 
        break;
    case 'editor';
        echo 'Welcome Editor'; // editor, user rights
        break;
    case 'user';
         echo 'Welcome User';  // user rights
         break;
    default:
         echo 'Invalid Password & username';   // throw error invalid        




}
