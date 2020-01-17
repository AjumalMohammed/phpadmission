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
          <div class="form">
			  <ul>
					<li><a href="facultysignup.php">FACULTY REGISTRATION</a></li> 
					<li><a href="studentsignup.php">STUDENT REGISTRATION</a></li>
					<li><a href="adminhome.php">FACULTY DETAILS</a>
						<div class="submenu1">
							<ul>
								<li><a href="allfaculty.php">PERSONAL DETAILS</a></li>
								
								
							</ul>
							
					   </div>
					   </li>



					<li><a href="adminhome.php">STUDENT DETAILS</a>
						<div class="submenu1">
							<ul>
								<li><a href="allstudent.php">PERSONAL DETAILS</a></li>
								<li><a href="studentattendance.php">ATTENDANCE</a></li>
								<li><a href="admarks.php">MARKS</a></li>
							</ul>
							
					   </div>
					   </li>
				
					<li><a href="{%url 'timetable.php">TIME TABLE</a></li> 
					<li><a href="{%url 'adminleave.php">LEAVE MANAGEMENT</a>
						<div class="submenu3">
							<ul>
								<li><a href="adminfacleave.php">FACULTY LEAVE</a></li>
								<li><a href="adminleave.php">STUDENT LEAVE</a></li>
						
							</ul>
							
					   </div>
					   </li>
				
					
					
					</li>    
	</div>	
		<div class="ft">
      <footer>
	           <p>&copy 2018-2019 company ltd<p>
	  
	  </footer>
 </div> 
</body>
</html>		
