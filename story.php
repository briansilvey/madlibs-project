<?php
include 'header.php';
?>
<div class="formwrap">
	<center>
	<form id="storyform" action="storypage.php">
		noun: </br>
		<input type="text" name="noun" required><br>
		verb: </br>
		<input type="text" name="verb" required><br>
		name: </br>
		<input type="text" name="name" required><br>
		<input id="submitbtn" type="submit" value="submit">
	</form>
	</center>
</div>
<?php
include 'footer.php';
?>