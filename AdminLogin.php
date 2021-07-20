<?php
		include "connect.php";
		
		if(isset($_POST['btn-login']))
		{		
			$Aun =$_POST['Ausername'];
			$Apw =$_POST['Apassword'];
			session_start();
				$_SESSION["username"]=$Aun;
				$_SESSION["password"]=$Aun;


					$one = implode(mysqli_fetch_assoc(mysqli_query($mysqli,"select count(*) from admin where Ausername='$Aun' and Apassword='$Apw'")));
					if($one=='1')
					{ 
						echo "<script>
						window.alert('WELCOME $Aun');
						window.location.href='admin.php';
						</script>";
						//header("Location: admin.php");
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
					<!--<p align="left"><a href="<?php echo $_SERVER['HTTP_REFERER'] ?>">Back</a></p> -->
						<h2>Admin Log In</h2>
					</div>
					<div class="col-md-6 col-md-offset-1 contact-form">
						<form class="form" action="" method="post">
							<input class="name" type="text" placeholder="User Name" name="Ausername" required>
							<input class="pass" type="Password" placeholder="Password" name="Apassword" required>
							<input class="submit-btn" type="submit" value="SUBMIT" name="btn-login">
						</form>
					</div>
				</div>
			</div>
		</div>
	</section><!-- end of contact section -->
</body>
</html>
</html>