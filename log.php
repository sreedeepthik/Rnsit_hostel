<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link href="cs.css" rel="stylesheet"/>
</head>

<body>
	<div class="fac" id="fac">
	<font face="Times New Roman, Times, serif" color="#CCCCCC" id="log_font" size="+5">LOGIN</font>
	<a href="Main.php"><img src="images/back1.png" id="gal_back" height="50em" width="50em" /></a>
	</div>
	<div class="wrapper_login">
	<img src="images/log.jpg" class="img_login">
	<div id="pop">
	<form action="admin1.php" method="post" onsubmit="return check()" name="logform">
	<table border="0" width="430px" align="center" cellpadding="15" cellspacing="0" style="position:absolute;top:80px;left:20em">
		<tr style="position:absolute;top:1em;"><th style="font-size:24px;color:#0099FF" id="user_name">Username</th><td>&nbsp;&nbsp;&nbsp;<input type="text" id="uname" name="uname" style="font-size:20px;width:300px;background-color:#FFF;border:solid thin #0099FF"/>
		<img src="images/user_img.jpeg" id="user_img"/></td></tr>
				<tr style="position:absolute;top:4em;"><th style="font-size:24px;color:#0099FF" id="pass_name">Password</th><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="password" id="password" style="font-size:20px;width:300px;background-color:#FFF;border:solid thin #0099FF"/>
		<img src="images/pwd_img.jpeg" id="pwd_img"/></td>
				</tr>
		<tr>
		<td><input type="submit" id="login" value="LOGIN" style="background-color:#33CC33;width:140px;height:30px;position:absolute;top:9em;left:-4em;"/></td>
		<td><input type="reset" id="clear" value="CLEAR" style="background-color:#CC9933;width:125px;height:30px;position:absolute;top:9em;left:8em"/></td>
		</tr>
		</table>
		</form>
	</div>
	</div>
</body>
</html>

<script type="text/javascript">
	
	//getting all input text objects
	var uname=document.forms["logform"]["uname"];
	var password=document.forms["logform"]["password"];
	
	//getting all error display objects
	
	var uname_error=document.getElementById("uname");
	var password_error=document.getElementById("password");
	
		//setting all event listeners
	uname.addEventListener("blur",unameVerify,true);
	password.addEventListener("blur",passwordVerify,true);
	
	//validation function
	
	function check()
	{
		//name validation
		if(uname.value =="")
		{
			uname_error.textContent="Name is required";
			name.focus();
			return false;
		}
		//usn validation
		if(password.value =="")
		{
			password_error.textContent="Password is required";
			usn.focus();
			return false;
		}
	}
		//event handler functions
	function unameVerify()
	{
		if(uname.value!="")
		{
			uname_error.innerHTML="";
			return true;
		}
	}
	function passwordVerify()
	{
		if(password.value!="")
		{
			password_error.innerHTML="";
			return true;
		}
	}
</script>