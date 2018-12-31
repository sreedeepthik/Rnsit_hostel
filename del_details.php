<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
	<?php
		$con=mysql_connect('localhost','root','');
		if(!$con)
		{
			echo 'Not connected to server';
		}
		if(!mysql_select_db('hostel'))
		{
			echo 'Database not seleted';
		}
		$usn=$_POST['usn'];
		$rQuery="insert into delete_stu(usn,name)select Usn,Name from student where Usn='$usn'";
		$pQuery="delete from student where Usn='$usn'";
		
		if(!mysql_query($pQuery))
		{
			echo 'Not Deleted';
		}
		else
		{
			echo 'Deleted successfully';
		}
		mysql_query($rQuery) or die(mysql_error());
		
		mysql_query($pQuery) or die(mysql_error());
		
		mysql_close($con);
		
		header("refresh:2; url=del_form.php")
	?>
</body>
</html>
