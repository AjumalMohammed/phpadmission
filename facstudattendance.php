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
					<li><a href="allstudmarks.php">MARKS</a></li>
					<li><a href="#">TIME TABLE</a></li>    
	</div>	
			<div>
				<div class="form6" style="padding:20px;margin-left:100px">
					<form name="signup" action="facstudattendance1.php" method="POST">
					
										
					<table>	
						<tr>
							<td>Student Id</td>
							<td><input type="text" class="frm1" name="studentid"></td>
						</tr>
						<tr>
							<td>Student Name</td>
							<td><input type="text" class="frm1" name="studentname"></td>
						</tr>
						<tr>
							<td>Batch</td>
							<td><input type="text" class="frm1" name="batch"></td>
						</tr>
						<tr>
							<td>Date</td>
							<td><input type="date" class="frm1" name="date"></td>
						</tr>
						<tr>
							<td>Hour1</td>
							<td><input type="text" class="frm1" name="hour1"></td> 
						</tr>
						<tr>
							<td>Hour2</td>
							<td> <input type="text" class="frm1"  name="hour2"></td>
						</tr>
						<tr>
							<td>Hour3</td>
							<td><input type="text" class="frm1"  name="hour3"></td>
			
						</tr>
						<tr>
							<td>Hour4</td>
							<td><input type="text" class="frm1"  name="hour4"></td>
			
						</tr>
						
						<tr>
							<td><input type="submit" name="submit" class="frm1" value="Add Attendance"><br> </td>
						</tr>	
						</table>	
					</form>
					</div>
				








			</div>

		</div>




		<div class="ft">
      <footer>
	           <p>&copy 2018-2019 company ltd<p>
	  
	  </footer>
 </div> 
</body>
</html>		
