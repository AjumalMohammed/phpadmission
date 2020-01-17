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
		<form name="edit" action="studentedit.php" method="POST">
			
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
			<td><input class="frm1"type="text" value="<?php echo $row['studentid'];?>"></td><br>
		</tr>
		<tr>
			<td>NAME</td>
			<td><input class="frm1"type="text" value="<?php echo $row['studentname'];?>"></td><br>
		</tr>
		<tr>
			<td>ADDRESS</td>
			<td><input class="frm1" type="text" value="<?php echo $row['address'];?>"></td>
		</tr>
		<tr>
			<td>GENDER</td>
			<td><input class="frm1" type="text" value="<?php echo $row['gender'];?>"></td>
		</tr>
		<tr>
			<td>DOB</td>
			<td><input class="frm1" type="date" value="<?php echo $row['dob'];?>"></td>
		</tr>
		<tr>
			<td>E-MAIL</td>
			<td><input class="frm1" type="text" value="<?php echo $row['email'];?>"></td>
		</tr>
		<tr>
			<td>ADMISSION DATE</td>
			<td><input class="frm1" type="date" value="<?php echo $row['admissiondate'];?>"></td>
		</tr>
		<tr>
			<td>Qualification</td>
			<td><input class="frm1" type="text" value="<?php echo $row['qualification'];?>"></td>
		</tr>
		<tr>
			<td>MOBILE NO</td>
			<td><input class="frm1" type="text" value="<?php echo $row['mobile'];?>"></td>
		</tr>
		<tr>
			<td>BATCH</td>
			<td><input class="frm1" type="text" value="<?php echo $row['batch'];?>"></td>
		
		</tr>
		
		<tr>
			<td>PASSWORD</td>
			<td><input class="frm1" type="text" value="<?php echo $row['password'];?>"></td>
		</tr>
		<tr>
			<td><input type="submit" class="frm1"  value="Edit"></td>
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
