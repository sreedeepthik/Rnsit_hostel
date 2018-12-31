<html>
<head>
<title>Untitled Document</title>
<link href="cs.css" rel="stylesheet"/>
</head>
	
<body>
	<div class="fac" id="fac">
	<font face="Times New Roman, Times, serif" color="#CCCCCC" id="fac1" size="+5">Student details</font>
	<a href="admin.php"><img src="images/back1.png" id="gal_back" height="50em" width="50em" /></a>
	</div>
	<table border="1" cellpadding="5" cellspacing="0" id="stu_table">
		<tr>
			<th>NAME</th>
			<th>USN</th>
			<th>YEAR</th>
			<th>GENDER</th>
			<th>ADMISSION NO</th>
			<th>FEE PAID</th>
			<th>DUE FEE</th>
			<th>ADDRESS</th>
			<th>PHONE NO</th>
			<th>EMAIL_ID</th>
			<th>BLOOD GROUP</th>
			<th>ROOM_NO</th>
			<th>FATHER NAME</th>
			<th>MOTHER NAME</th>
			<th>PHONE NO</th>
			</tr>
	<?php
		mysql_connect('localhost','root','');
		mysql_select_db('hostel');
		$sql="select * from student";
		$records=mysql_query($sql);
		while($student=mysql_fetch_assoc($records))
		{
			echo "<tr>";
			echo "<td>".$student['Name']."</td>";
			echo "<td>".$student['Usn']."</td>";
			echo "<td>".$student['Sem']."</td>";
			echo "<td>".$student['Gender']."</td>";
			echo "<td>".$student['Regno']."</td>";
			echo "<td>".$student['Feepaid']."</td>";
			echo "<td>".$student['Duefee']."</td>";
			echo "<td>".$student['Address']."</td>";
			echo "<td>".$student['Phoneno']."</td>";
			echo "<td>".$student['email']."</td>";
			echo "<td>".$student['blood']."</td>";
			echo "<td>".$student['Room']."</td>";
			echo "<td>".$student['Father']."</td>";
			echo "<td>".$student['Mother']."</td>";
			echo "<td>".$student['Phoneno1']."</td>";
			echo "</tr>";
		}
	?>
	</table>
</body>
</html>
