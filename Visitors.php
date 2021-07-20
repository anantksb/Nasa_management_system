<?php
		include "connect.php";
		
		if(isset($_POST['btn-login']))
{		
		
		$Emailid =$_POST['Emailid'];
		session_start();
					$one = implode(mysqli_fetch_assoc(mysqli_query($mysqli,"select count(*) from visitors where Emailid='$Emailid'")));
					if($one=='0')
					{
						$Name =$_POST['Name'];
						date_default_timezone_set('Asia/Calcutta');
						$Date = date("Y-m-d h:i:sa");
						$Phoneno =$_POST['Phoneno'];
						$Address =$_POST['Address'];
						$Occupation =$_POST['Occupation'];
						$Purpose =$_POST['Purpose'];
						$Admin_ID = implode(mysqli_fetch_assoc(mysqli_query($mysqli,"select ID from admin where Ausername='admin' and Apassword='admin'")));
						
						if ($mysqli->query("INSERT into visitors(Name,Datetime,Phoneno,Emailid,Address,Occupation,Purpose,Admin_ID) values ('$Name','$Date','$Phoneno','$Emailid','$Address','$Occupation','$Purpose','$Admin_ID')") === TRUE)
						{
							$_SESSION["Vname"]=$Name;
							$_SESSION["VEmailid"]=$Emailid;
							echo "<script>
								window.alert('$Name - WELCOME TO NASA');
								window.location.href='index.php';
								</script>";
							//header("Location: index.php");
						}
						else{
								echo '<script language="javascript">';
								echo 'alert("Error to Connect please Try after sometime")';
								echo '</script>';
						
							$err = "Error to Connect please Try after sometime";
						}
					}
					else
					{
						echo '<script language="javascript">';
						echo 'alert("Your Login Name exsist. Click on Log In")';
						echo '</script>';
						$err = 'Your Login Name exsist. Click on --><a href="VisitorLogin.php">Log In</a>';
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
  include "Break.php";
  ?>
<!-- contact section starts here -->
	<section style="position: absolute; width: 100%; height: 790px; margin-top: 0px; left: 0; margin-top: -830px; background: rgb(113, 113, 113);" id="visitor">
		<div class="container">
			<div class="row">
				<div class="contact-caption clearfix">
					<div class="contact-heading text-center">
						<h2>Visitor Sign In</h2>
					</div>
					<div class="col-md-5 contact-info text-left">
						<center><h3>contact information</h3></center>
						<div class="info-detail">
							<ul><li><i class="fa fa-calendar"></i><span>Monday thru Friday:</span> 8:00 AM to 6:00 PM</li></ul>
							<ul><li><i class="fa fa-map-marker"></i><span>Address:</span> 300 E. Street SW, Suite 5R30, Washington, DC 20546</li></ul>
							<ul><li><i class="fa fa-phone"></i><span>Phone:</span> (202) 358-0001</li></ul>
							<ul><li><i class="fa fa-fax"></i><span>Fax:</span> (202) 358-4338</li></ul>
							<ul><li><i class="fa fa-envelope"></i><span>Email:</span>  nssc-contactcenter@nasa.gov</li></ul>
							<ul><li><i class="fa fa-calendar"></i><span>News: </span> request@newsletters.nasa.gov</li></ul>
						</div>
					</div>
					<div class="col-md-6 col-md-offset-1 contact-form">
						<center><h3>Sign in to continue to NASA</h3></center>
							<center><font size="3"><?php echo @$err;?></font></center>
						<form class="form" action="" method="post">
							<input class="name" type="text" placeholder="Name" name="Name" required>
							<input class="phone" type="number" placeholder="Phone Number" name="Phoneno" required>
							<input class="email" type="email" placeholder="Email" name="Emailid" required>
							<textarea class="address" id="message" cols="30" rows="10" placeholder="Address" name="Address" required></textarea>
							<input class="Occupation" type="text" placeholder="Occupation" name="Occupation" required>
							<input class="Purpose" type="text" placeholder="Purpose" name="Purpose" required>
							<input class="submit-btn" type="submit" value="SUBMIT" name="btn-login">
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
<!-- end of contact section -->
<?php
 include "Footer.php";
 ?>
</body>
</html>