<?php
include 'header.php';
?>
<div class="formwrap">
	<center>
	<form id="storyform" action="storypage.php">
		noun: </br>
		<input id="nouninput" type="text" name="noun" required><br>
		verb: </br>
		<input id="verbinput" type="text" name="verb" required><br>
		name: </br>
		<input id="nameinput" type="text" name="name" required><br>
		<input id="submitbtn" type="submit" value="submit">
	</form>
	</center>
</div>
<?php
include 'footer.php';
?>

<!--Auto Select Form Input-->
<script>
$(document).ready(function(){
    var el = $("input:text").get(0);
    var elemLen = el.value.length;
   	el.selectionStart = elemLen;
   	el.selectionEnd = elemLen;
    el.focus();
});
</script>