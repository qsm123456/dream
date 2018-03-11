<?php
	$load = file_get_contents('./04.txt');
	echo $load;
	
?>
	<form action='next.php' method='post'>
	<input type='submit' value='同意'>
	</form>
	<form action='index.php' method='post'>
	<input type='submit' value='不同意'>
	</form>