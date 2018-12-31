<html>
<head>
<title>Untitled Document</title>
<link href="cs.css" rel="stylesheet"/>
</head>
	
<body>
	<div class="fac" id="fac">
	<font face="Times New Roman, Times, serif" color="#CCCCCC" id="fac1" size="+5">Room details</font>
	<a href="admin.php"><img src="images/back1.png" id="gal_back" height="50em" width="50em" /></a>
	</div>
	<div class="wrapper">
	<img src="images/room.jpg" class="rom">
	<table border="1" cellpadding="5" cellspacing="0" id="room_table" >
		<tr>
			<th>ROOM NO</th>
			<th>NO OF STUDENTS</th>
		</tr>
	<?php
		mysql_connect('localhost','root','');
		mysql_select_db('hostel');
		$sql="select * from room";
		$records=mysql_query($sql);
		while($room=mysql_fetch_assoc($records))
		{
			echo "<tr>";
			echo "<td>".$room['Room_no']."</td>";
			echo "<td>".$room['no_of_stu']."</td>";
			echo "</tr>";
		}
	?>
	</table>
</body>
</html>
