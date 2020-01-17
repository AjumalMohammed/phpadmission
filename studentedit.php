<!doctype html>
<html>
     <head>
			<title>signup</title>
			<link rel="stylesheet" href="css/style2.css">
			
	<style> 
		
	</style>
	        
	</head>
<body class="a">


	<div class="abc">
		<ul>
			<li><a href="studenthome.php">HOME</a></li>
			<li>
				
				<form name="signup" action="signout.php" method="POST">
					<input type="submit"  class="frm1" value="SIGN OUT" name="signout"> 
				</form>
				</li>
		</ul>
	</div>
	<div style="display:inline-flex">
          <div class="form">
			  <ul>
					
					<li><a href="studentdetails.php">MY PROFILE</a></li>
					<li><a href="studentdetails.php">ATTENDANCE</a></li>
					<li><a href="studmarks.php">MARKS</a></li>   
					<li><a href="studentdetails.php">TIME TABLE</a></li>  
					</ul>  
	</div>
	<div class="form5">
		<form name="edit" action="studentedit1.php" method="POST">
			<?php
		            require_once 'connection.php';
					session_start();
					$var=$_SESSION['studentid'];
		            $sql="select * from student where studentid=$var ";
		            $result=mysqli_query($conn,$sql);
		            while($row=mysqli_fetch_assoc($result))
					{
						?> 
		<table>
		<tr>
			<td>STUDENT ID</td>
			<td><input class="frm1"type="text" value="<?php echo $row['studentid'];?>" name="studentid" readonly></td><br>
		</tr>
		<tr>
			<td>NAME</td>
			<td><input class="frm1"type="text" value="<?php echo $row['studentname'];?>" name="studentname" readonly></td><br>
		</tr>
		<tr>
			<td>ADDRESS</td>
			<td><input class="frm1" type="text" value="<?php echo $row['address'];?>" name="address"></td>
		</tr>
		<tr>
			<td>GENDER</td>
			<td><input class="frm1" type="text" value="<?php echo $row['gender'];?>" name="gender"></td>
		</tr>
		<tr>
			<td>DOB</td>
			<td><input class="frm1" type="date" value="<?php echo $row['dob'];?>" name="dob"></td>
		</tr>
		<tr>
			<td>E-MAIL</td>
			<td><input class="frm1" type="text" value="<?php echo $row['email'];?>" name="email"></td>
		</tr>
		<tr>
			<td>ADMISSION DATE</td>
			<td><input class="frm1" type="date" value="<?php echo $row['admissiondate'];?>" name="admissiondate"></td>
		</tr>
		<tr>
			<td>QUALIFICATION</td>
			<td><input class="frm1" type="text" value="<?php echo $row['qualification'];?>" name="qualification"></td>
		</tr>
		<tr>
			<td>MOBILE NO</td>
			<td><input class="frm1" type="text" value="<?php echo $row['mobile'];?>" name="mobile"></td>
		</tr>
		<tr>
			<td>BATCH</td>
			<td><input class="frm1" type="text" value="<?php echo $row['batch'];?>" name="batch"></td>
		</tr>
		<tr>
			<td>PASSWORD</td>
			<td><input class="frm1" type="text" value="<?php echo $row['password'];?>" name="password"></td>
		</tr>
		<tr>
			<td><input type="submit" class="frm1"  value="Save" name="submit"></td>
		</tr>
	

	</table>
		<?php
			}
		?>
	</div>	

</div>





		<div class="ft">
      <footer>
	           <p>&copy 2018-2019 company ltd<p>
	  
	  </footer>
 </div> 
</body>
</html>		
