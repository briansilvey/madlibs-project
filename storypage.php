<?php
include 'header.php';

//variables
$noun = $_GET["noun"];
$verb = $_GET["verb"];
$name = $_GET["name"];

$sentence = array(
	"The $noun had to $verb with $name",
	"My $noun can $verb on $name",
	"$name is such a $noun and can $verb",
	"once upon a time $name took a big $verb in the $noun"
);

$random = rand(0,3);

echo "<p>$sentence[$random]</p>";
?>

<p><a href="story.php">Another?</a></p>

<?php
include 'footer.php';
?>