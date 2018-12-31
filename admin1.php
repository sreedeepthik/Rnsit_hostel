<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
	<?php
		$username=$_POST['uname'];
		$password=$_POST['password'];
		if($username=="Deepthi" && $password=="Deepthi")
		{
			header("refresh:0; url=admin.php");
		}
		else
		{
			echo "Please enter valid username and password";
			header("refresh:2; url=log.php");
		}
		
	?>
</body>
</html>
