<?php
	if(isset($_POST['sub'])){
		// $_POST()
		// echo 123;
		// echo '<pre>';
		// var_dump($_POST);
		// echo '</pre>';
		if(isset($_POST['sub'])){
			$score=$_POST['score'];
			

			if($score==100){
				echo "<script>alert('优秀')</script>";
			}else{
				if($score==80){
					echo "<script>alert('合格')</script>";
				}else{
					echo "<script>alert('不合格')</script>";
				}
			}


		}
		
	}
?>
	<meta charset="UTF-8">	
	<form action='05-text.php' method='post'>
	<h3>输入分数查询成绩<h3>
	<input type='submit' name='sub' value='提交'>
	<input type='text' name='score'>	
	<input type='submit' name='reset' value='重置'>
	</form>
	
<script>
	
</script>