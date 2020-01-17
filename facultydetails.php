<!doctype html>
<html>
     <head>
			<title>signup</title>
			  
		   
			<link rel="stylesheet" href="css/style2.css">
			
	<style> 
		table{color:white;}
	</style>
	        
	</head>
<body class="a">


	<div class="abc">
		<ul>
			<li><a href="facultyhome.php">HOME</a></li>
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
					 
					<li><a href="facultydetails.php">MY PROFILE</a></li>
					<li><a href="facultystudattendance.php">STUDENT ATTENDANCE</a></li>	
					<li><a href="facultyhome.php">STUDENT DETAILS</a>
						<div class="submenu1">
							<ul>
								<li><a href="fstuddetails.php">PERSONAL DETAILS</a></li>
								<li><a href="facstudattendance.php">ADD ATTENDANCE</a></li>
								<li><a href="facmarks.php">ADD MARKS</a></li>
							</ul>
							
					   </div>
					   </li>
					<li><a href="#">TIME TABLE</a></li> 
					<li><a href="facultyleave.php">LEAVE APPLICATION</a></li> 
					<li><a href="facultyleavestatus.php">LEAVE STATUS</a></li>   
				</div>

				
				<div class="form5">
					<?php
		            require_once 'connection.php';
					session_start();
					$var=$_SESSION['facultyid'];
		            $sql="select * from faculty where facultyid=$var ";
		            $result=mysqli_query($conn,$sql);
		            while($row=mysqli_fetch_assoc($result))
					{
						?>  
		            
					<form action="facultyedit.php" method="POST">

					<table>
					<tr>
						<td>FACULTY ID</td>
						<td><input class="frm1"type="text" value="<?php echo $row['facultyid'];?>"></td><br>
					</tr>
					<tr>
						<td>NAME</td>
						<td><input class="frm1"type="text" value="<?php echo $row['facultyname'];?>"></td><br>
					</tr>
					<tr>
						<td>DESIGNATION</td>
						<td><input class="frm1" type="text" value="<?php echo $row['designation'];?>"></td>
					</tr>
					<tr>
						<td>JOINED DATE</td>
						<td><input class="frm1" type="date" value="<?php echo $row['joiningdate'];?>"></td>
					</tr>
					<tr>
						<td>QUALIFICATION</td>
						<td><input class="frm1" type="text" value="<?php echo $row['qualification'];?>"></td>
					</tr>
					<tr>
						<td>GENDER</td>
						<td><input class="frm1" type="text" value="<?php echo $row['gender'];?>"></td>
					</tr>
					<tr>
						<td>MOBILE NO</td>
						<td><input class="frm1" type="text" value="<?php echo $row['mobile'];?>"></td>
					</tr>
					<tr>
						<td>E-MAIL</td>
						<td><input class="frm1" type="text" value="<?php echo $row['email'];?>"></td>
					</tr>
					<tr>
						<td>BATCH IN CHARGE</td>
						<td><input class="frm1" type="text" value="<?php echo $row['batch'];?>"></td>
					
					</tr>
					<tr>
						<td>DOB</td>
						<td><input class="frm1" type="text" value="<?php echo $row['dob'];?>"></td>
					</tr>
					
					<tr>
						<td>ADDRESS</td>
						<td><input class="frm1" type="text" value="<?php echo $row['address'];?>"></td>
					</tr>
					
					<tr>
						<td>PASSWORD</td>
						<td><input class="frm1" type="text" value="<?php echo $row['password'];?>"></td>
					</tr>
					<tr>
						<td>
							<input type="submit" name="submit" class="frm1" value="Edit">
						</td>
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
