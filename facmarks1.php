<?php
include_once 'connection.php';
$studentid=$_POST['studentid'];
$studentname=$_POST['studentname'];
$batch=$_POST['batch'];
$assessmentno=$_POST['assessmentno'];
$sub1=$_POST['sub1'];
$sub2=$_POST['sub2'];
$sub3=$_POST['sub3'];
if (isset($_POST['submit']))
{
	$sql="INSERT INTO studentmark(studentid,studentname,batch,assessmentno,sub1,sub2,sub3)VALUES('".$studentid."','".$studentname."','".$batch."','".$assessmentno."','".$sub1."','".$sub2."','".$sub3."')";
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
