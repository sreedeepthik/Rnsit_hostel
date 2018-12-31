<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>form</title>

<link href="cs.css" rel="stylesheet"/>
</head>

<body>
   <div class="fac" id="fac">
	<font face="Times New Roman, Times, serif" color="#CCCCCC" id="stu_det" size="+5">STUDENT DETAILS</font>
	<a href="admin.php"><img src="images/back1.png" id="gal_back" height="50em" width="50em" /></a>
	</div>
	

	<div id="form">
	
	<form action="stu_details.php" method="post" onsubmit="return validate()" name="vform">
		<font face="Algerian" size="+1" id="name1">NAME</font>
		<input type="text" name="name" id="name" placeholder="Name" required/>
		<br /><br />
		<font face="Algerian" size="+1" id="usn1">USN</font>
		<input type="text" name="usn" id="usn" placeholder="Usn"/>
		<br /><br />
		<font face="Algerian" size="+1" id="sem1">Year</font>
		<select id="sem" name="sem">
			<option>select</option>
			<option>1</option>
			<option>2</option>
			<option>3</option>
			<option>4</option>
		</select>
		<br /><br />
		<font face="Algerian" size="+1" id="gender1">GENDER</font>
		<input type="radio" name="gen1" value="Male" id="gen1" ><font id="gen_male">Male</font></input>
		<input type="radio" name="gen1" value="Female" id="gen2"><font id="gen_female">Female</font></input>
		<br /><br />
		<font face="Algerian" size="+1" id="reg_no1">ADMISSION NO</font>
		<input type="text" name="reg_no" id="reg_no" placeholder="Admission no"/>
		<br /><br />
		<font face="Algerian" size="+1" id="date1">DATE</font>
		<input type="date" id="dateday" format="yyyy/mm/dd"/>
		<!--<select id="date_year" name="dateday">
			<option>Year</option>
			<option>2000</option>
			<option>2001</option>
			<option>2002</option>
			<option>2003</option>
			<option>2004</option>
			<option>2005</option>
			<option>2006</option>
			<option>2007</option>
			<option>2008</option>
			<option>2009</option>
			<option>2010</option>
			<option>2011</option>
			<option>2012</option>
			<option>2013</option>
			<option>2014</option>
			<option>2015</option>
			<option>2016</option>
			<option>2017</option>
		</select>
		<select id="date_mon" name="dateday">
			<option>MON</option>
			<option>JAN</option>
			<option>FEB</option>
			<option>MAR</option>
			<option>APR</option>
			<option>MAY</option>
			<option>JUN</option>
			<option>JUL</option>
			<option>AUG</option>
			<option>SEP</option>
			<option>OCT</option>
			<option>NOV</option>
			<option>DEC</option>
		</select>
		<select id="date_day" name="dateday">
			<option>Day</option>
			<option>1</option>
			<option>2</option>
			<option>3</option>
			<option>4</option>
			<option>5</option>
			<option>6</option>
			<option>7</option>
			<option>8</option>
			<option>9</option>
			<option>10</option>
			<option>11</option>
			<option>12</option>
			<option>13</option>
			<option>14</option>
			<option>15</option>
			<option>16</option>
			<option>17</option>
			<option>18</option>
			<option>19</option>
			<option>20</option>
			<option>21</option>
			<option>22</option>
			<option>23</option>
			<option>24</option>
			<option>25</option>
			<option>26</option>
			<option>27</option>
			<option>28</option>
			<option>29</option>
			<option>30</option>
			<option>31</option>
		</select>-->
		<br /><br />
		<font face="Algerian" size="+1" id="fee_paid1">FEE PAID</font>
		<input type="text" name="fee" id="fee" placeholder="Fee paid"/>
		<br /><br />
		<font face="Algerian" size="+1" id="due_fee1">DUE FEE</font>
		<input type="text" name="due" id="due" placeholder="Due fee"/>
		<br /><br />
		<font face="Algerian" size="+1" id="address1">ADDRESS</font>
		<input type="text" name="add" id="address" placeholder="Address"/>
		<br /><br />
		<font face="Algerian" size="+1" id="phone1">PHONE NO</font>
		<input type="text" name="ph_no" id="ph_no1" placeholder="Phone no"/>
		<br /><br />
		<font face="Algerian" size="+1" id="email1">EMAIL-ID</font>
		<input type="text" name="email" id="email" placeholder="Email"/>
		<br /><br />
		<font face="Algerian" size="+1" id="blood1">BLOOD GROUP</font>
		<select id="blood_grp" name="blood">
			<option>Choose</option>
			<option>A+</option>
			<option>A-</option>
			<option>B+</option>
			<option>B-</option>
			<option>O+</option>
			<option>O-</option>
			<option>AB+</option>
			<option>AB-</option>
			</select>
		<br /><br />
		<font face="Algerian" size="+1" id="room1">ROOM NO</font>
		<input type="text" name="room_no" id="room_no" placeholder="Room no"/>
		<br /><br />
		<font face="Algerian" size="+1" id="f_name1">FATHER NAME</font>
		<input type="text" name="f_name" id="f_name" placeholder="Father name"/>
		<br /><br />
		<font face="Algerian" size="+1" id="m_name1">MOTHER NAME</font>
		<input type="text" name="m_name" id="m_name" placeholder="Mother name"/>
		<br /><br />
		<font face="Algerian" size="+1" id="gardian1">GUARDIAN</font>
		<input type="text" name="guardian" id="gardian" placeholder="Guardian"/>
		<br /><br />
		<font face="Algerian" size="+1" id="phone2">PHONE NO</font>
		<input type="text" name="ph_no1" id="ph_no" placeholder="Phone no"/>
		<br /><br />
		<input type="submit" value="Insert" id="submit"/>
		</form>
		</div>
</body>
</html>

<script type="text/javascript">

	//getting all input text objects
	var name=document.forms["vform"]["name"];
	var usn=document.forms["vform"]["usn"];
	var year=document.forms["vform"]["sem"];
	var gender=document.forms["vform"]["gen1"];
	var admission=document.forms["vform"]["reg_no"];
	var date=document.forms["vform"]["dateday"];
	var feepaid=document.forms["vform"]["fee"];
	var duefee=document.forms["vform"]["due"];
	var address=document.forms["vform"]["add"];
	var phno=document.forms["vform"]["ph_no"];
	var email=document.forms["vform"]["email"];
	var blood=document.forms["vform"]["blood"];
	var room=document.forms["vform"]["room_no"];
	var fname=document.forms["vform"]["f_name"];
	var mname=document.forms["vform"]["m_name"];
	var guardian=document.forms["vform"]["guardian"];
	var phno1=document.forms["vform"]["ph_no1"];
	
	//getting all error display objects
	
	var name_error=document.getElementById("name");
	var usn_error=document.getElementById("usn");
	var year_error=document.getElementById("sem");
	var admission_error=document.getElementById("reg_no");
	var feepaid_error=document.getElementById("fee");
	var address_error=document.getElementById("address");
	var phno_error=document.getElementById("ph_no1");
	var email_error=document.getElementById("email");
	var blood_error=document.getElementById("blood_grp");
	var room_error=document.getElementById("room_no");
	var fname_error=document.getElementById("f_name");
	var mname_error=document.getElementById("m_name");
	var phno1_error=document.getElementById("ph_no");
	//setting all event listeners
	name.addEventListener("blur",nameVerify,true);
	usn.addEventListener("blur",usnVerify,true);
	year.addEventListener("blur",yearVerify,true);
	gender.addEventListener("blur",genderVerify,true);
	admission.addEventListener("blur",admissionVerify,true);
	feepaid.addEventListener("blur",feepaidVerify,true);
	address.addEventListener("blur",addressVerify,true);
	phno.addEventListener("blur",phnoVerify,true);
	email.addEventListener("blur",emailVerify,true);
	blood.addEventListener("blur",bloodVerify,true);
	room.addEventListener("blur",roomVerify,true);
	fname.addEventListener("blur",fnameVerify,true);
	mname.addEventListener("blur",mnameVerify,true);
	phno1.addEventListener("blur",phno1Verify,true);
	
	//validation function
	
	function validate()
	{
		//name validation
		if(name.value=="")
		{
			name_error.textContent="Name is required";
			name.focus();
			return false;
		}
		//usn validation
		if(usn.value=="")
		{
			usn_error.textContent="Usn is required";
			usn.focus();
			return false;
		}
		//year validation
		if(year.value=="")
		{
			year_error.textContent="Year is required";
			year.focus();
			return false;
		}
		//admission no validation
		if(admission.value=="")
		{
			admission_error.textContent="Admission no is required";
			admission.focus();
			return false;
		}
		//fee paid validation
		if(feepaid.value=="")
		{
			feepaid_error.textContent="fee paid is required";
			feepaid.focus();
			return false;
		}
		//address validation
		if(address.value=="")
		{
			address_error.textContent="Address is required";
			address.focus();
			return false;
		}
		//phno validation
		if(phno.value=="")
		{
			phno_error.textContent="Phone number is required";
			phno.focus();
			return false;
		}
		//email validation
		if(email.value=="")
		{
			email_error.textContent="Email is required";
			email.focus();
			return false;
		}
		//blood group validation
		if(blood.value=="")
		{
			blood_error.textContent="Blood group is required";
			blood.focus();
			return false;
		}
		//room no validation
		if(room.value=="")
		{
			room_error.textContent="Room number is required";
			room.focus();
			return false;
		}
		//Father name validation
		if(fname.value=="")
		{
			fname_error.textContent="Father Name is required";
			fname.focus();
			return false;
		}
		//Mother name validation
		if(mname.value=="")
		{
			mname_error.textContent="Mother Name is required";
			mname.focus();
			return false;
		}
		//Phone number validation
		if(phno1.value=="")
		{
			phno1_error.textContent="Name is required";
			phno1.focus();
			return false;
		}
	}//close of function
	
	//event handler functions
	function nameVerify()
	{
		if(name.value!="")
		{
			name_error.innerHTML="";
			return true;
		}
	}
	function usnVerify()
	{
		if(usn.value!="")
		{
			usn_error.innerHTML="";
			return true;
		}
	}
	function yearVerify()
	{
		if(year.value!="")
		{
			year_error.innerHTML="";
			return true;
		}
	}
	function genderVerify()
	{
		if(gender.value!="")
		{
			gender_error.innerHTML="";
			return true;
		}
	}
	function admissionVerify()
	{
		if(admission.value!="")
		{
			admission_error.innerHTML="";
			return true;
		}
	}
	function feepaidVerify()
	{
		if(feepaid.value!="")
		{
			feepaid_error.innerHTML="";
			return true;
		}
	}
	function addressVerify()
	{
		if(address.value!="")
		{
			address_error.innerHTML="";
			return true;
		}
	}
	function phnoVerify()
	{
		if(phno.value!="")
		{
			phno_error.innerHTML="";
			return true;
		}
	}
	function emailVerify()
	{
		if(email.value!="")
		{
			email_error.innerHTML="";
			return true;
		}
	}
	function bloodVerify()
	{
		if(blood.value!="")
		{
			blood_error.innerHTML="";
			return true;
		}
	}
	function roomVerify()
	{
		if(room.value!="")
		{
			room_error.innerHTML="";
			return true;
		}
	}
	function fnameVerify()
	{
		if(fname.value!="")
		{
			fname_error.innerHTML="";
			return true;
		}
	}
	function mnameVerify()
	{
		if(mname.value!="")
		{
			mname_error.innerHTML="";
			return true;
		}
	}
	function phno1Verify()
	{
		if(phno1.value!="")
		{
			phno1_error.innerHTML="";
			return true;
		}
	}
</script>