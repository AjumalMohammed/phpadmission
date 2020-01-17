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
					<li><a href="allstudmarks">VIEW MARKS</a></li>
					<li><a href="timetable">TIME TABLE</a></li>
					<li><a href="studentleave">LEAVE APPLICATION</a></li>   
					<li><a href="studentleave">LEAVE STATUS</a></li>    
	</div>	
	<div class="form5">
			
		<table>	

			<tr>
				<td style="padding:20px">Id</td>
				<td style="padding:20px">Name</td>
				<td style="padding:20px">From Date</td>
				<td style="padding:20px">To Date</td>
				<td style="padding:20px">Status</td>
			</tr>
			<?php
		    require_once 'connection.php';
					session_start();
					$var=$_SESSION['facultyid'];
		            $sql="select * from facultyleave where facultyid=$var ";
		            $result=mysqli_query($conn,$sql);
		            while($row=mysqli_fetch_assoc($result))
		         {
			      ?>


			<tr>
				<td><?php echo $row['facultyid'];?></td>		
				<td><?php echo $row['facultyname'];?></td>	
				<td><?php echo $row['fromdate'];?></td>
				<td><?php echo $row['todate'];?></td>	
				<td><?php echo $row['status'];?></td>
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
