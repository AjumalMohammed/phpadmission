<?php
include_once 'connection.php';
$facultyid=$_POST['facultyid'];
$facultyname=$_POST['facultyname'];
$designation=$_POST['designation'];
$joiningdate=$_POST['joiningdate'];
$qualification=$_POST['qualification'];
$gender=$_POST['gender'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$batch=$_POST['batch'];
$dob=$_POST['dob'];
$address=$_POST['address'];
$password=$_POST['password'];
if (isset($_POST['submit']))
{
	$sql="INSERT INTO faculty(facultyid,facultyname,designation,joiningdate,qualification,gender,mobile,email,batch,dob,address,password)VALUES('".$facultyid."','".$facultyname."','".$designation."','".$joiningdate."','".$qualification."','".$gender."','".$mobile."','".$email."','".$batch."','".$dob."','".$address."','".$password."')";
	if(!$result=$conn->query($sql))
	{
		die('there was an error running the query['.$conn->error.']');
	}
	else
	{
	 require_once "adminhome.php";
	}
}
?>	
