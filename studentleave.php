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
			<form name="signup" action="studentleave1.php" method="POST">
			
			<table>	
				<tr>
					<td>Student Id</td>
					<td><input type="text" class="frm1" name="studentid"></td>
				</tr>
				<tr>
					<td>Name</td>
					<td><input type="text" class="frm1" name="studentname"></td>
				</tr>
				<tr>
					<td>Batch</td>	
					<td><input type="text" class="frm1" placeholder="enter your batch" name="batch"></textarea></td>
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
