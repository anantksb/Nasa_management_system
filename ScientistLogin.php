<?php
		include "connect.php";
		
		if(isset($_POST['btn-login']))
{		
		$un =$_POST['Usernameorid'];
		$pw =$_POST['Password'];
		session_start();
		
					$one = implode(mysqli_fetch_assoc(mysqli_query($mysqli,"select count(*) from scientist where Usernameorid='$un' and Password='$pw'")));
					if($one=='1')
					{
						$query = "select Fname,Lname from scientist where Usernameorid='$un'";
						 $result = mysqli_query($mysqli, $query);
						 $row = mysqli_fetch_array($result);
							$a = $row['Fname'];
							$b = $row['Lname'];
							$_SESSION["SFname"]=$a;
							$_SESSION["SLname"]=$b;
							echo "<script>
							window.alert('WELCOME $a $b');
							window.location.href='Scientist.php';
							</script>";
					}
					else
					{
						echo '<script language="javascript">';
						echo 'alert("Invalid Username or Password")';
						echo '</script>';
					}
}
				?>
				
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
  //include "Header.php";
  include "Break.php";
  ?>
	<!-- contact section starts here -->
	<section style="position: absolute; width: 100%; height: 410px; margin-top: 0px; left: 0; margin-top: -830px; background: rgb(113, 113, 113);">
		<div class="container">
			<div class="row">
				<div class="contact-caption clearfix">
					<div class="contact-heading text-center">
						<h2>Scientist Log In</h2>
					</div>
					<div class="col-md-6 col-md-offset-1 contact-form">
							<center><font size="3"><?php echo @$err;?></font></center>
						<form class="form" action="" method="post">
							<input class="name" type="text" placeholder="User Name" name="Usernameorid" required>
							<input class="pass" type="Password" placeholder="Password" name="Password" required> 
							<input class="submit-btn" type="submit" value="SUBMIT" name="btn-login">
						</form>
					</div>
				</div>
			</div>
		</div>
	</section><!-- end of contact section -->
</body>
</html>