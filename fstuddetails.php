<!doctype html>
<html>
     <head>
			<title>signup</title>
			  
		 
			<link rel="stylesheet" href="css/style2.css">
			
	<style> 
	table,tr,td
	{
		border:1px solid black;
		border-collapse: collapse;
	}
		
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
					<li><a href="facultyhome.php">ATTENDANCE</a></li>
					<li><a href="facultyhome.php">STUDENT DETAILS</a>
						<div class="submenu1">
							<ul>
								<li><a href="fstuddetails.php">PERSONAL DETAILS</a></li>
								<li><a href="facstudattendance.php">ADD ATTENDANCE</a></li>
								<li><a href="facmarks.php">ADD MARKS</a></li> 	
							</ul>
							
					   </div>
					   </li>
					 <li><a href="allstudmarks.php">VIEW MARKS</a></li>
					<li><a href="timetable.php">TIME TABLE</a></li>    
	</div>	
	<div class="form6">
		
		<tr>	
			<table class="form6">
	
			<tr>
				<td style="padding:10px;">ADMISSION NO</td>
				<td style="padding:10px;">NAME</td>
				<td style="padding:10px;">ADDRESS</td>
				<td style="padding:10px;">GENDER</td>
				<td style="padding:10px;">DOB</td>
				<td style="padding:10px;">E-MAIL</td>
				<td style="padding:10px;">Admission Date</td>
				<td style="padding:10px;">Qualification</td>
				<td style="padding:10px;">MOBILE NO</td>
				<td style="padding:10px;">Batch</td>
				<td style="padding:10px;">Password</td>
				
				
			</tr>
		   <?php
		   require_once 'connection.php';
		   $sql="select * from student ";
		   $result=mysqli_query($conn,$sql);
		   while($row=mysqli_fetch_assoc($result))
		   {
			 ?>  
		   
			<tr>
				<td><?php echo $row['studentid'];?></td>
				<td><?php echo $row['studentname'];?></td>
				<td><?php echo $row['address'];?></td>
				<td><?php echo $row['gender'];?></td>
				<td><?php echo $row['dob'];?></td>
				<td><?php echo $row['email'];?></td>
				<td><?php echo $row['admissiondate'];?></td>
				<td><?php echo $row['qualification'];?></td>
				<td><?php echo $row['mobile'];?></td>
				<td><?php echo $row['batch'];?></td>
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
