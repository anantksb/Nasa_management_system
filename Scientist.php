<!DOCTYPE html>
<html lang="en"> 
<head>
		
<?php
//Turn off
error_reporting(0);
  include "Head.php";
  ?>
</head>
<body>
<?php
//Turn off
error_reporting(0);
  include "SHeader.php";
  ?>
<br/>
<div class="container" align="center">
			<div class="row">
				<div class="contact2-caption clearfix">
					<div class="contact2-heading text-center">
						<?php
			session_start();
			if(!(isset($_SESSION['SFname'])) )
				header("Location:ScientistLogin.php");	
				$fn=$_SESSION["SFname"];
				$ln=$_SESSION["SLname"];
				echo  "<h2>WELCOME - $fn $ln</h2>";
				?>
				</div>
				<div class="col-md-6 col-md-offset-1 contact2-form">
				<?php
				include "connect.php";
				$query = "SELECT  * from scientist where Fname='$fn' and Lname='$ln'";
										$result = mysqli_query($mysqli, $query);
										while($row = $result->fetch_array(MYSQLI_ASSOC))   
										{
											$a =$row['Fname'];
											$b =$row['Lname'];
											$c =$row['Password'];
											$id =$row['Usernameorid'];
											
											
											echo <<<abc
						<form class="form" method="post" action="Save.php" enctype="multipart/form-data">
							<input type="text" placeholder="Usernameorid" name="Usernameorid" value=$id required>
							<input type="text" placeholder="First Name" name="Fname" value=$a required>
							<input type="text" placeholder="Last Name" name="Lname" value=$b required>
							<input type="password" placeholder="Change Password" name="Password" required>
							<input class="submit-btn" type="submit" value="UPDATE">
						</form>
abc;
}
			?>
					</div>
				</div>
			</div>
		</div>
</body>
</html>