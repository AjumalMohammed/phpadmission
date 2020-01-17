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
								<li><a href="admarks.php">MARKS</a></li>
							</ul>
							
					   </div>
					   </li>
				
					<li><a href="#">TIME TABLE</a></li>    
	</div>
	
	<div class="form6" style="padding:20px;margin-left:200px ;">								
		<table>	
			<tr>
				<td style="padding:10px">Student Id</td>
				<td style="padding:10px">Name</td>
				<td style="padding:10px">Batch</td>
				<td style="padding:10px">Assesment No</td>
				<td style="padding:10px">Sub1</td>
				<td style="padding:10px">sub2</td>
				<td style="padding:10px">sub3</td>
			</tr>
			 <?php
		   require_once 'connection.php';
		   $sql="select * from studentmark";
		   $result=mysqli_query($conn,$sql);
		   while($row=mysqli_fetch_assoc($result))
		   {
			 ?>  
			<tr>
				<td><?php echo $row['studentid'];?></td>
				<td><?php echo $row['studentname'];?></td>
				<td><?php echo $row['batch'];?></td>
				<td><?php echo $row['assessmentno'];?></td>
				<td><?php echo $row['sub1'];?></td>
				<td><?php echo $row['sub2'];?></td>
				<td><?php echo $row['sub3'];?></td>

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
