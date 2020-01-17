<?php
include_once 'connection.php';
$studentid=$_POST['studentid'];
$studentname=$_POST['studentname'];
$batch=$_POST['batch'];
$fromdate=$_POST['fromdate'];
$todate=$_POST['todate'];
$reason=$_POST['reason'];
$status=$_POST['status'];
if (isset($_POST['submit']))
{
	$sql="INSERT INTO studentleave(studentid,studentname,batch,fromdate,todate,reason,status)VALUES('".$studentid."','".$studentname."','".$batch."','".$fromdate."','".$todate."','".$reason."','".$status."')";
	if(!$result=$conn->query($sql))
	{
		die('there was an error running the query['.$conn->error.']');
	}
	else
	{
	 require_once "studenthome.php";
	}
}
?>	
