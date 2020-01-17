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
	$sql="UPDATE student SET address='".$address."',gender='".$gender."',dob='".$dob."',email='".$email."',admissiondate='".$admissiondate."',qualification='".$qualification."',mobile='".$mobile."',batch='".$batch."',password='".$password."' where studentname='".$studentname."'";
	if(!$result=$conn->query($sql))
	{
		die('there was an error running the query['.$conn->error.']');
	}
	else
	{
	 require_once "studentdetails.php";
	}
}
?>	