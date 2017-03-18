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
	"once upon a time $name took a big $verb in the $noun",
	"I can't belive $name went to the $noun and $verb"
);

$random = rand(0,4);

echo "<p>$sentence[$random]</p>";
?>

<div class="btnrow">
	<a href="#" id="showanotherbtn">Show me Another!</a>
	<a href="story.php" id="createnewbtn">Create New?</a>
</div>

<?php
include 'footer.php';
?>

<!--Reload page on enter-->
<script>
	document.addEventListener('keyup', function(e){
  if(e.keyCode == 13)
    window.location.reload();
})
</script>