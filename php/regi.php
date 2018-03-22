<!DOCTYPE html>
<html>
<head>
	<title>111</title>
	<base href="<?php echo site_url()?>" >
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<form action="welcome/save_user" method="post" accept-charset="utf-8">
		   <p>
		   	用户名：<input type='text' name='username'> 
		   </p>
		     <p>
		   	密码：<input type='text' name='pwd'> 
		   </p>
		     <p>
		   	真是姓名：<input type='text' name='realname'> 
		   </p>
		     <p>
		   	电话：<input type='text' name='tel'> 
		   </p>
		   <p>
		   	<input type="submit" name="sub" value='提交'/>
		   </p>
	</form>
</body>
</html>
