<h1>Hello World!</h1>

<?php
$var = "this is a string";
echo "$var anything </br>";

$a = "1";
$b = "2";
$c = "5";
$maybe = true;


echo $a + $b . "</br>"; 
echo $c / $b ."</br>"; 
echo $maybe;
?>

<h2>New Section</h2>

<?php
include("panel.php");

$agents = array(1,2,3,4);

$thelist = implode( "-", $agents);
echo $thelist . "</br>";

foreach ($agents as $key => $value) {
	echo "the $key value = $value </br>";
}

$T2 = array("dante" => "dante.munoz@bigcommerce.com", "tim" => "tim.a@bigcommerce.com", "matt" => "matt.h@bigcommerce.com");

foreach ($T2 as $key => $value) {
	echo "The email address for $key is $value </br>";
}

$a = "poop";
$b = "stinks";

echo "$a $b";

?>
