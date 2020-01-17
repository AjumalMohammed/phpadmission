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
			<li><a href="facultyhome">HOME</a></li>
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
					<li><a href="facultyleave.php">LEAVE APPLICATION</a></li> 
					<li><a href="facultyleavestatus.php">LEAVE STATUS</a></li>   
	</div>	
	<div class="form5">
		<form name="signup" action="facultyleave1.php" method="POST">
		
		
		<table>	
			<tr>
				<td>Faculty Id</td>
				<td><input type="text" class="frm1" name="facultyid"></td>
			</tr>
			<tr>
				<td>Name</td>
				<td><input type="text" class="frm1" name="facultyname"></td>
			</tr>
			<tr>
				<td>From Date</td>	
				<td><input type="date" class="frm1"  name="fromdate"></textarea></td>
			</tr>
			<tr>
				<td>To Date</td>	
				<td><input type="date" class="frm1"  name="todate"></textarea></td>
			</tr>
			<tr>
				<td>Reason</td>	
				<td><textarea class="frm1"  name="reason"></textarea></td>
			</tr>
			<tr>
				<td>Status</td>	
				<td><select name="status" class="frm1">
					<option>Applied</option>
				
				

				</select>

				</td>
			</tr>
			
			<tr>
				<td><input type="submit" name="submit" class="frm1" value="Apply"><br> </td>
			</tr>	
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
