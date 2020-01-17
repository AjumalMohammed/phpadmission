<?php
include_once 'connection.php';
$studentid=$_POST['studentid'];
$studentname=$_POST['studentname'];
$batch=$_POST['batch'];
$date=$_POST['date'];
$hour1=$_POST['hour1'];
$hour2=$_POST['hour2'];
$hour3=$_POST['hour3'];
$hour4=$_POST['hour4'];
if (isset($_POST['submit']))
{
	$sql="INSERT INTO studentattendance(studentid,studentname,batch,date,hour1,hour2,hour3,hour4)VALUES('".$studentid."','".$studentname."','".$batch."','".$date."','".$hour1."','".$hour2."','".$hour3."','".$hour4."')";
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
