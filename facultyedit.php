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
								<li><a href="studentattendance.php">ADD ATTENDANCE</a></li>
								<li><a href="facmarks.php">ADD MARKS</a></li>
							</ul>
							
					   </div>
					   </li>
					   <li><a href="allstudmarks.php">VIEW MARKS</a></li>
					   <li><a href="#">TIME TABLE</a></li>
					   <li><a href="facultyleave.php">LEAVE APPLICATION</a></li> 
					   <li><a href="facultyleavestatus.php">LEAVE STATUS</a></li>
				</div>

				<div class="form5">
					<form name="edit" action="facultyedit1.php" method="POST">
						<?php
		            require_once 'connection.php';
					session_start();
					$var=$_SESSION['facultyid'];
		            $sql="select * from faculty where facultyid=$var ";
		            $result=mysqli_query($conn,$sql);
		            while($row=mysqli_fetch_assoc($result))
					{
						?>  
		            
					<table>
					<tr>
						<td>FACULTY ID</td>
						<td><input class="frm1"type="text" value="<?php echo $row['facultyid'];?>" name="facultyid" readonly></td><br>
					</tr>

					<tr>
						<td>NAME</td>
						<td><input class="frm1"type="text" value="<?php echo $row['facultyname'];?>" name="facultyname" readonly></td><br>
					</tr>
					<tr>
						<td>DESIGNATION</td>
						<td><input class="frm1" type="text" value="<?php echo $row['designation'];?>" name="designation"></td>
					</tr>
					<tr>
						<td>JOINED DATE</td>
						<td><input class="frm1" type="date" value="<?php echo $row['joiningdate'];?>" name="joiningdate"></td>
					</tr>
					
					<tr>
						<td>QUALIFICATION</td>
						<td><input class="frm1" type="text" value="<?php echo $row['qualification'];?>"  name="qualification"></td>
					</tr>
					<tr>
						<td>GENDER</td>
						<td><input class="frm1" type="text" value="<?php echo $row['gender'];?>" name="gender"></td>
					</tr>
					<tr>
						<td>MOBILE NO</td>
						<td><input class="frm1" type="text" value="<?php echo $row['mobile'];?>" name="mobile"></td>
					</tr>
					<tr>
						<td>E-MAIL</td>
						<td><input class="frm1" type="text" value="<?php echo $row['email'];?>" name="email"></td>
					</tr>
					<tr>
						<td>BATCH IN CHARGE</td>
						<td><input class="frm1" type="text" value="<?php echo $row['batch'];?>" name="batch"></td>
					</tr>
					<tr>
						<td>DOB</td>
						<td><input class="frm1" type="text" value="<?php echo $row['dob'];?>" name="dob"></td>
					</tr>
					<tr>
						<td>ADDRESS</td>
						<td><input class="frm1" type="text" value="<?php echo $row['address'];?>" name="address"></td>
					</tr>
					<tr>
						<td>PASSWORD</td>
						<td><input class="frm1" type="text" value="<?php echo $row['password'];?>" name="password"></td>
					</tr>
					<tr>
						<td>
							<input type="submit" name="submit" class="frm1" value="Save">
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
