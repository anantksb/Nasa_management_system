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
  include "AHeader.php";
  ?>
<br/>
	

		<div class="container">
			<div class="row">
				<div class="contact2-caption clearfix">
					<div class="contact2-heading text-center">
						<h2>UPDATE Scientist</h2>
					</div>
					<?php echo @$err;?>
					<div class="col-md-6 col-md-offset-1 contact2-form">

					<?php
							include "connect.php";
									if(isset($_GET['Usernameorid']))
									{	
										$Usernameorid =$_GET['Usernameorid'];
										$query = "SELECT  * from scientist where Usernameorid='$Usernameorid'";
										$result = mysqli_query($mysqli, $query);
										while($row = $result->fetch_array(MYSQLI_ASSOC))   
										{
											$a =$row['Fname'];
											$b =$row['Lname'];
											$c =$row['Password'];
											$d =$row['Dob'];
											$e =$row['Bg'];
											$f =$row['Pno1'];
											$g =$row['Emailid'];
											$h =$row['Address'];
											$i =$row['uora'];
											$j =$row['Deptno'];
											$k =$row['Doj'];
											$l =$row['Designation'];
											$m =$row['Mname'];
											$n =$row['Salary'];
											//$o =$$row['Photo'];
											$id =$row['Usernameorid'];
											
											
											echo <<<abc
						<form class="form" method="post" action="Save Scientist.php" enctype="multipart/form-data">
							<input type="text" placeholder="Usernameorid" name="Usernameorid" value=$id required>
							<input type="text" placeholder="First Name" name="Fname" value=$a required>
							<input type="text" placeholder="Last Name" name="Lname" value=$b required>
							<input type="password" placeholder="Password" name="Password" value=$c required>
							<font size="4"><p align="left">Date of Birth:</p><input type="date" name="Dob" value=$d required>
							<p align="left">Blood Group:&nbsp;&nbsp;&nbsp;
							<select type="text" name="Bg" style="width: 100%; height: 40px; background: #fff; font-size: 13px; color: #084a5c; font-family: 'Open Sans', sans-serif; padding: 12px; border: 0; margin-bottom: 12px;">
								<option value="$e" selected='$e'>$e</option>
								<option value=""></option>
								<option value="A+">A+</option>
								<option value="A-">A-</option>
								<option value="AB+">AB+</option>
								<option value="AB-">AB-</option>
								<option value="B+">B+</option>
								<option value="B-">B-</option>
								<option value="O+">O+</option>
								<option value=""O->O-</option>
							</select></p></font>
							<input type="number" placeholder="Phone Number" name="Pno1" value=$f required>
							<input type="email" placeholder="Email-ID" name="Emailid" value=$g required>
							<textarea placeholder="Address" name="Address" required>$h</textarea>
							<font size="4"><p align="left">Admin/Scientist:
								<select type="text" name="uora" style="width: 100%; height: 40px; background: #fff; font-size: 13px; color: #084a5c; font-family: 'Open Sans', sans-serif; padding: 12px; border: 0; margin-bottom: 12px;" required>
									<option value="$i" selected='$i'>$i</option>
									<option value="$i"></option>
									<option value="Admin">Admin</option>
								    <option value="Scientist">Scientist</option>
								</select></p>
							<input type="number" placeholder="Department Number" name="Deptno" value="$j" required>
							<p align="left">Date of Joining:</p><input type="date" name="Doj" value="$k" required></p></font>
							<input type="text" placeholder="Designation" name="Designation" value="$l" required>
							<input type="text" placeholder="Mission Working" name="Mname" value="$m" required>
							<input type="number" placeholder="Salary" name="Salary" value="$n" required>
							<input type="file" placeholder="Photo" name="image">
							<input class="submit-btn" type="submit" value="UPDATE">
						</form>
abc;
}
									}
									
?>
					</div>
				</div>
			</div>
		</div>
	<?php
//Turn off
error_reporting(0);
  include "Footer.php";
  ?>
</body>
</html>