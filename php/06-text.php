<?php
	if(isset($_POST)){
		
	}
?>
<form action='06-text.php' method='post'>
	输入行列生成表格
	<br>
	输入行:<input type='text' name='printr'>
	<br>
	输入列:<input type='text' name='printl'>
	<br>
	<br>
	<input type='submit' value='生成表格' name='generate'>
	<input type='submit' value='重置表格' name='reset'>
</form>