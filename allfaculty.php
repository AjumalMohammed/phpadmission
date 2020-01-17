<!doctype html>
<html>
     <head>
			<title>signup</title>
			  
		   
			<link rel="stylesheet" href="css/style2.css">
			
	<style> 
	table,tr,td{border:1px solid black;
				border-collapse:collapse;			
	}
		
	</style>
	        
	</head>
<body class="a">


	<div class="abc">
		<ul>
			<li><a href="adminhome.php">HOME</a></li>
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
					<li><a href="facultysignup.php">FACULTY REGISTRATION</a></li> 
					<li><a href="studentsignup.php">STUDENT REGISTRATION</a></li>
					<li><a href="#">FACULTY DETAILS</a>
						<div class="submenu1">
							<ul>
								<li><a href="allfaculty.php">PERSONAL DETAILS</a></li>
								<li><a href="#">ATTENDANCE</a></li>
								
							</ul>
							
					   </div>
					   </li>



					<li><a href="#">STUDENT DETAILS</a>
						<div class="submenu1">
							<ul>
								<li><a href="allstudent.php">PERSONAL DETAILS</a></li>
								<li><a href="studentattendance.php">ATTENDANCE</a></li>
								<li><a href="#">MARKS</a></li>
							</ul>
							
					   </div>
					   </li>
				
					<li><a href="#">TIME TABLE</a></li>    
	</div>	
	<div class="form6">
		
	<tr>	
		<table class="form6">

		<tr>
			<td style="padding:4px">FACULTYID</td>
			<td style="padding:4px">NAME</td>
			<td style="padding:4px">DESIGNATION</td>
			<td style="padding:4px">JOINING DATE</td>
			<td style="padding:4px">QUALIFICATION</td>
			<td style="padding:6px">GENDER</td>
			<td style="padding:4px">MOBILE NO</td>
			<td style="padding:4px">E-MAIL</td>
			<td style="padding:4px">BATCH IN CHARGE</td>
			<td style="padding:4px">DOB</td>
			<td style="padding:4px">ADDRESS</td>
			<td style="padding:4px">PASSWORD</td>
		</tr>
		 <?php
		   require_once 'connection.php';
		   $sql="select * from faculty ";
		   $result=mysqli_query($conn,$sql);
		   while($row=mysqli_fetch_assoc($result))
		   {
			 ?>  
		<tr>
			<td><?php echo $row['facultyid'];?></td>
			<td><?php echo $row['facultyname'];?></td>
			<td><?php echo $row['designation'];?></td>
			<td><?php echo $row['joiningdate'];?></td>
			<td><?php echo $row['qualification'];?></td>
			<td><?php echo $row['gender'];?></td>
			<td><?php echo $row['mobile'];?></td>
			<td><?php echo $row['email'];?></td>
			<td><?php echo $row['batch'];?></td>
			<td><?php echo $row['dob'];?></td>
			<td><?php echo $row['address'];?></td>
			<td><?php echo $row['password'];?></td>
			
			
			
		</tr>
	
		<?php
				}
			?>
	</table>
		
	</div>	

</div>







		<div class="ft">
      <footer>
	           <p>&copy 2018-2019 company ltd<p>
	  
	  </footer>
 </div> 
</body>
</html>		
