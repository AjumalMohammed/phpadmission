<?php
include_once 'connection.php';
$studentname=$_POST['studentname'];
if (isset($_POST['submit']))
{
	$sql="UPDATE studentleave SET status='Approved' where studentname='".$studentname."'";
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
