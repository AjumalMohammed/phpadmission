<?php
include_once 'connection.php';
$facultyname=$_POST['facultyname'];
if (isset($_POST['submit']))
{
	$sql="UPDATE facultyleave SET status='Approved' where facultyname='".$facultyname."'";
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
