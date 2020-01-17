<?php
include_once 'connection.php';
$studentid=$_POST['studentid'];
$studentname=$_POST['studentname'];
$address=$_POST['address'];
$gender=$_POST['gender'];
$dob=$_POST['dob'];
$email=$_POST['email'];
$admissiondate=$_POST['admissiondate'];
$qualification=$_POST['qualification'];
$mobile=$_POST['mobile'];
$batch=$_POST['batch'];
$password=$_POST['password'];
if (isset($_POST['submit']))
{
	$sql="INSERT INTO student(studentid,studentname,address,gender,dob,email,admissiondate,qualification,mobile,batch,password)VALUES('".$studentid."','".$studentname."','".$address."','".$gender."','".$dob."','".$email."','".$admissiondate."','".$qualification."','".$mobile."','".$batch."','".$password."')";
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
