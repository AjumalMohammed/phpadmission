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
					<li><a href="studentsignup.php">FACULTY DETAILS</a>
						<div class="submenu1">
							<ul>
								<li><a href="#">PERSONAL DETAILS</a></li>
								
								
							</ul>
							
					   </div>
					   </li>



					<li><a href="#">STUDENT DETAILS</a>
						<div class="submenu1">
							<ul>
								<li><a href="#">PERSONAL DETAILS</a></li>
								<li><a href="#">ATTENDANCE</a></li>
								<li><a href="#">MARKS</a></li>
							</ul>
							
					   </div>
					   </li>
				
					<li><a href="{%url 'studentsignup'%}">TIME TABLE</a></li>    
	</div>	


		<div class="form6" style="padding:20px;margin-left:100px">
								
			<table>	
				<tr>
					<td style="padding:10px">Student Id</td>
					<td style="padding:10px">Student Name</td>
					<td style="padding:10px">Batch</td>
					<td style="padding:10px">Date</td>
					<td style="padding:10px">Hour1</td>
					<td style="padding:10px">Hour2</td>
					<td style="padding:10px">Hour3</td>
				</tr>
				<?php
		   require_once 'connection.php';
		   $sql="select * from studentattendance";
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
