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
					<li><a href="facultyhome.php">STUDENT ATTENDANCE</a></li>
					<li><a href="facultyhome.php">STUDENT DETAILS</a>
						<div class="submenu1">
							<ul>
								<li><a href="fstuddetails.php">PERSONAL DETAILS</a></li>
								<li><a href="facstudattendance.php">ADD ATTENDANCE</a></li>
								<li><a href="facmarks.php">ADD MARKS</a></li>
							</ul>
							
					   </div>
					   </li>
					<li><a href="{allstudmarks.php">MARKS</a></li>
					<li><a href="#">TIME TABLE</a></li>    
	</div>	
	<div class="form6">
								
		<table>	
			<tr>
				<td >Student Id</td>
				<td >Student Name</td>
				<td >Batch</td>
				<td >Date</td>
				<td >Hour1</td>
				<td >Hour2</td>
				<td >Hour3</td>
				<td >Hour4</td>
				
			</tr>
			<?php
		   require_once 'connection.php';
		   $sql="select * from studentattendance ";
		   $result=mysqli_query($conn,$sql);
		   while($row=mysqli_fetch_assoc($result))
		   {
			 ?>  
			<tr>
				<td><?php echo $row['studentid'];?></td>
				<td><?php echo $row['studentname'];?></td>
				<td><?php echo $row['batch'];?></td>
				<td><?php echo $row['date'];?></td>
				<td><?php echo $row['hour1'];?></td>
				<td><?php echo $row['hour2'];?></td>
				<td><?php echo $row['hour3'];?></td>
				<td><?php echo $row['hour4'];?></td>
				
				
			
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
