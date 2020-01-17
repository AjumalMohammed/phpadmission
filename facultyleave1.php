<?php
include_once 'connection.php';
$facultyid=$_POST['facultyid'];
$facultyname=$_POST['facultyname'];
$fromdate=$_POST['fromdate'];
$todate=$_POST['todate'];
$reason=$_POST['reason'];
$status=$_POST['status'];
if (isset($_POST['submit']))
{
	$sql="INSERT INTO facultyleave(facultyid,facultyname,fromdate,todate,reason,status)VALUES('".$facultyid."','".$facultyname."','".$fromdate."','".$todate."','".$reason."','".$status."')";
	if(!$result=$conn->query($sql))
	{
		die('there was an error running the query['.$conn->error.']');
	}
	else
	{
	 require_once "facultyhome.php";
	}
}
?>	
