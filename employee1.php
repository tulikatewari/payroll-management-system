<?php
session_start();
$msg="";
if(isset($_POST["submit"])){
	$con=mysqli_connect("localhost","root","","payroll") or die("Cannot connect with database");
	$username=$_POST["username"];
	$password=$_POST["password"];
	$query="SELECT LoginId, Password FROM employee WHERE LoginID='$username' AND Password='$password'";
	$result=mysqli_query($con,$query) or die(mysqli_error($con));
	if(mysqli_num_rows($result)==0){
		$msg="Invalid username or password";
	}
	else{
		$_SESSION["admin"]=$username;
		header('location:employee1.php');
	}
}
?>

<html>
<title>EMPLOYEE</title>
<body bgcolor="grey"  background="http://wallpapercave.com/wp/oE14KTB.jpg">
<form tag="Create Logon">
		<div align="center">

<p><B><CENTER>EMPLOYEE DETAILS</CENTER></B></p>

<!--<B>EMPLOYEE ID:</B>  <input type="text" name="EMPLOYEE ID" >-->
<b>EMPLOYEE ID:<input type="text" name="EMPLOYEE ID" > <?php echo $row["EmpID"]; ?></b>
<BR><BR>

<B>FIRST NAME:</B>  <input type="text" name="first_name" >
<br><BR>
<B>LAST NAME:</B>  <input type="text" name="last_name" >
<br><br>
<B>FATHERS NAME<B>:<br>
<input type="TEXT" name="FATHERS NAME">
<br><br>
<B>GENDER<B>:<br>
<form>
  <input type="radio" name="gender" value="male" checked> Male
  <input type="radio" name="gender" value="female"> Female<br>
 </form>
<B>DATE OF BIRTH:</B>
<input type="date" name="DATE OF BIRTH">
<BR><BR>
<B>CONTACT NUMBER</B>:<br>
<input type="tEXT" name="CONTACT NUMBER">
<br><br>
<B>EMAIL:</B><br>
<input type="TEXT" name="EMAIL">
<br><br>
<B>ADDRESS:</B><br>
<input type="TEXT" name="ADDRESS">
<br><br>
<B>DEPARTMENT:</B><br>
<input type="TEXT" name="DEPARTMENT">
<br><br>
<B>SALARY:</B><BR><BR>
BASIC:
<input type="TEXT" name="BASIC">
<BR><BR>
DA:
<input type="TEXT" name="DA">
<BR><BR>
HRA:
<input type="TEXT" name="HRA">
<BR><BR>
TA:
<input type="TEXT" name="TA">
<BR><BR>
MEDICAL:
<input type="TEXT" name="MEDICAL">
<br><br>
TOTAL:
<input type="TEXT" name="TOTAL">
<br><br>
<B>LOGOUT:</B><br>
<input type="SUBMIT" VALUE="LOGOUT">

</form>
</div>
</body>
</html>
