<?php
		include "connect.php";
		
		if(isset($_POST['btn-login']))
		{		
		$Sub=$_POST['Sub'];
		$Message=$_POST['Message'];
		date_default_timezone_set('Asia/Calcutta');
		$datetime = date("Y-m-d h:i:sa");
		$Sendername = implode(mysqli_fetch_assoc(mysqli_query($mysqli,"select ID from admin where Ausername='admin' and Apassword='admin'")));
			if ($mysqli->query("INSERT into inbox(Sendername,datetime,Sub,Message) values ('$Sendername','$datetime','$Sub','$Message')") === TRUE) 
			{
				if(empty($_FILES["image"]["tmp_name"]))
				{
				}
				else{
						$check = getimagesize($_FILES["image"]["tmp_name"]);
						if($check !== false){
						$image = $_FILES['image']['tmp_name'];
						$imgContent = addslashes(file_get_contents($image));
						$mysqli->query("UPDATE inbox set Photo='$imgContent' where Message='$Message'");
					}
				}
				$err = "<b>Your Message Has Been Sent.</b></br>";
			}
			else
			{
				$err = "<b>Your Message Has Not Sent.</b></br>";
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
  include "AHeader.php";
  ?>
<br/>
	

		<div class="container">
			<div class="row">
				<div class="contact2-caption clearfix">
					<div class="contact2-heading text-center">
						<h2>Compose New Message</h2>
					</div>
					<center><font size="3"><?php echo @$err;?></font></center>
					<div class="col-md-6 col-md-offset-1 contact2-form">

						<form class="form" action="" method="post" enctype="multipart/form-data">
							<input type="text" placeholder="Subject" name="Sub" required>
							<textarea placeholder="Message" name="Message" required></textarea>
							<input type="file" placeholder="Photo" name="image">
							<input class="submit-btn" type="submit" value="SEND" name="btn-login">
						</form>
					</div>
				</div>
			</div>
		</div>
	</section><!-- end of contact section -->
</body>
</html>