<?php

$test="Hi I am a variable";
$number=75;

echo $test;
echo $number;

$name = "Hemant";
echo "My name is $name";

$a="name";
echo $$a;
echo "<br/>";

$myArray=array("pizza", "chocolate", "coffee");

print_r($myArray);

echo $myArray[2];

echo "<br/>";

$anotherArray[0]="pizza";
$anotherArray[1]="yoghurt";

print_r($anotherArray);

echo "<br /><br />";

$thirdArray=array(

 "France" => "French",
 "USA" => "English",
 "Germany" => "German"
 );

 print_r($thirdArray);

 echo "<br/>";

 unset($thirdArray["Germany"]);

 print_r($thirdArray);


 echo "<br/>";

 $name1="Rob";

 unset($name1);

 echo $name1;


?>

