<?php
include("connection.php");
if (isset($_POST['submit']))
{
$username=$_POST['username'];
$password=$_POST['password'];
//adminlogin
$sql="SELECT username FROM admin WHERE username='".$username."' and password='".$password."'";
$result=mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)>0)
	{
		while($row=mysqli_fetch_assoc($result))
		{
			require_once "adminhome.php";
		}
	}
	//facultylogin
	else 
	{
		$sql="SELECT * FROM faculty WHERE facultyname='".$username."' and password='".$password."'";
        $result=mysqli_query($conn,$sql);
	    if(mysqli_num_rows($result)>0)
	    {
			while($row=mysqli_fetch_assoc($result))
			{
				session_start();
				$_SESSION['facultyid']=$row['facultyid'];
				require_once "facultyhome.php";
			}
		}
		
		
		//studentlogin
		else 
	    {
			
			$sql="SELECT * FROM student WHERE studentname='".$username."' and password='".$password."'";
			$result=mysqli_query($conn,$sql);
			if(mysqli_num_rows($result)>0)
			{
				while($row=mysqli_fetch_assoc($result))
				{
					session_start();
					$_SESSION['studentid']=$row['studentid'];
					require_once "studenthome.php";
				}
			}				
			else
			{
				echo "email or password incorrect";
			}
		}
	}
	
}
mysqli_close($conn);
?>