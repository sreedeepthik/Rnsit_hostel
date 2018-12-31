<html>
<head>
<title>Untitled Document</title>
<link href="cs.css" rel="stylesheet"/>
</head>
	
<body>
	<div class="fac" id="fac">
	<font face="Times New Roman, Times, serif" color="#CCCCCC" id="fac1" size="+5">Mess details</font>
	<a href="admin.php"><img src="images/back1.png" id="gal_back" height="50em" width="50em" /></a>
	</div>
	<div class="wrapper">
	<img src="images/food.jpg" class="img">
	<div class="overlay">
	<b><table border="1" cellpadding="5" cellspacing="0" class="mess_table_user">
		<tr>
			<th>DAYS</th>
			<th>BREAKFAST</th>
			<th>LUNCH</th>
			<th>DINNER</th>
		</tr>
	<?php
		mysql_connect('localhost','root','');
		mysql_select_db('hostel');
		$sql="select * from mess";
		$records=mysql_query($sql);
		while($mess=mysql_fetch_assoc($records))
		{
			echo "<tr>";
			echo "<td>".$mess['Days']."</td>";
			echo "<td>".$mess['Breakfast']."</td>";
			echo "<td>".$mess['Lunch']."</td>";
			echo "<td>".$mess['Dinner']."</td>";
			echo "</tr>";
		}
	?>
	</b>
	</table>
</body>
</html>
