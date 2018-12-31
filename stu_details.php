<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
	<?php
		$con=mysqli_connect('localhost','root','');
		if(!$con)
		{
			echo 'Not connected to server';
		}
		if(!mysqli_select_db($con,'hostel'))
		{
			echo 'Database not seleted';
		}
		$Name=$_POST['name'];
		$Usn=$_POST['usn'];
		$Year=$_POST['sem'];
		$gender=$_POST['gen1'];
		$Admission=$_POST['reg_no'];
		$date_day=$_POST['dateday'];
		$feepaid=$_POST['fee'];
		$duefee=$_POST['due'];
		$address=$_POST['add'];
		$phno=$_POST['ph_no'];
		$email=$_POST['email'];
		$blood=$_POST['blood'];
		$room=$_POST['room_no'];
		$father=$_POST['f_name'];
		$mother=$_POST['m_name'];
		$guardian=$_POST['guardian'];
		$phno1=$_POST['ph_no1'];
		$sql="insert into student(Name,Usn,Sem,Gender,Regno,Date_day,Feepaid,Duefee,Address,Phoneno,email,blood,Room,Father,Mother,Gaurdian,Phoneno1)
		values
('$Name','$Usn','$Year','$gender','$Admission','$date_day','$feepaid','$duefee','$address','$phno','$email','$blood','$room','$father','$mother','$guardian','$phno1')";
			if(!mysqli_query($con,$sql))
			{
				echo 'Not inserted';
			}
			else
			{
				echo 'Inserted successsfully';
			}
			header("refresh:2; url=form.php")
	?>
</body>
</html>
