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
					<li><a href="stuattendance.php">ATTENDANCE</a></li> 
				    <li><a href="studmarks.php">MARKS</a></li>
					<li><a href="#">TIME TABLE</a></li>
					<li><a href="studentleave.php">LEAVE APPLICATION</a></li>
			  </ul>
							
		   </div>
				   
		   
		   <div class="form5">
			
			
			<table>	

				<tr>
					<td style="padding:10px">Student Id</td>
					<td style="padding:10px">Name</td>
					<td style="padding:10px">Batch</td>
					<td style="padding:10px">From Date</td>
					<td style="padding:10px">To Date</td>
					<td style="padding:10px">Status</td>
				</tr>
				
	<?php
		    require_once 'connection.php';
					session_start();
					$var=$_SESSION['studentid'];
		            $sql="select * from studentleave where studentid=$var ";
		            $result=mysqli_query($conn,$sql);
		            while($row=mysqli_fetch_assoc($result))
		         {
			      ?>
				<tr>
					<td><?php echo $row['studentid'];?></td>	
					<td><?php echo $row['studentname'];?></td>	
					<td><?php echo $row['batch'];?></td>	
					<td><?php echo $row['fromdate'];?></td>	
					<td><?php echo $row['todate'];?></td>
					<td><?php echo $row['status'];?></td>	
				</tr>
				<?php
				}
			?>
			
			</table>
	 </div>		
</form>
</div>





				
					
		<div class="ft">
      <footer>
	           <p>&copy 2018-2019 company ltd<p>
	  
	  </footer>
 </div> 
</body>
</html>		
