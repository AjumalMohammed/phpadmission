<!doctype html>
<html>
     <head>
			<title>signup</title>
			
			<link rel="stylesheet" href="css/style.css">
	<style>
		table,a{
			text-decoration:none;
			color:white;
		}
	</style>


	</head>
<body class="a">
				<div class="abc">
					<ul>
						<li><a href="adminhome.php">HOME</a></li>
						<li>
							<form name="signup" action="signout.php" method="POST">
								
								<input type="submit"  class="frm" value="SIGN OUT" name="signout"> 
							</form>
							</li>
					</ul>
				</div>
				<div style="display:inline-flex">
				<div class="form2">
					<ul>
						  <li><a href="facultysignup.php">FACULTY REGISTRATION</a></li> 
						  <li><a href="studentsignup.php">STUDENT REGISTRATION</a></li>
						  <li><a href="adminhome.php">FACULTY DETAILS</a>
							  <div class="submenu">
								  <ul>
									  <li><a href="allfaculty.php">PERSONAL DETAILS</a></li>
									  <li><a href="adminhome.php">ATTENDANCE</a></li>
									  
								  </ul>
								  
							 </div>
							 </li>
	  
	  
	  
						  <li><a href="adminhome.php">STUDENT DETAILS</a>
							  <div class="submenu">
								  <ul>
									  <li><a href="allstudent.php">PERSONAL DETAILS</a></li>
									  <li><a href="studentattendance.php">ATTENDANCE</a></li>
									  <li><a href="admarks.php">MARKS</a></li>
								  </ul>
								  
							 </div>
							 </li>
					  
						  <li><a href="adminhome.php">TIME TABLE</a></li>    
		  </div>						  
							

          <div class="form">
		            <form name="signup" action="facultysignup1.php" method="POST">
					
										
					<table>	
						<tr>
							<td>Faculty Id</td>
							<td><input type="text" class="frm" name="facultyid"></td>
						</tr>
						<tr>
							<td>Name</td>
							<td><input type="text" class="frm" name="facultyname"></td>
						</tr>
						<tr>
							<td>Designation</td>
							<td><input type="text" class="frm" name="designation"></td>
						</tr>
						
						<tr>
							<td>Joining Date</td>
							<td><input type="date" class="frm" name="joiningdate"></td>
						</tr>
						<tr>
							<td>Qualification</td>
							<td><input type="text" class="frm"  name="qualification"></td>

						</tr>
						<tr>
							<td>Gender:</td>
							<td><input type="text" class="frm" name="gender"></td> </td>
						</tr>
						<tr>
							<td>Mobile-No  </td>
							<td><input type="text" class="frm" placeholder="mobile" name="mobile"></td>
						</tr>
						<tr>
							<td>E-mail</td>
							<td><input type="text" class="frm"  name="email"></td>

						</tr>
						<tr>
							<td>Batch</td>
							<td><input type="text" class="frm"  name="batch"></td>
						</tr>
						<tr>
						
							<td>DOB:</td>
							<td> <input type="date" class="frm"  name="dob"> </td>
						</tr>
						<tr>
							<td>Address</td>	
							<td><textarea class="frm" placeholder="enter your address" name="address"></textarea></td>
						</tr>
							
						<tr>
							<td>Password</td>
							<td><input type="password" class="frm" name="password"> </td>
						</tr>
						<tr>
							<td><input type="submit" name="submit" class="frm" value="Sign Up"><br> </td>
						</tr>	
						</table>	
					</form>
					</div>
				</div>
		
		<div class="ft">
      <footer>
	           <p>&copy 2018-2019 company ltd<p>
	  
	  </footer>
 </div> 
</body>
</html>		
