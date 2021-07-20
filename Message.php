<?php
		include "connect.php";
		if(isset($_POST['btn-login']))
		{		
		$Emailid =$_POST['Emailid'];
					$one = implode(mysqli_fetch_assoc(mysqli_query($mysqli,"select count(*) from visitors where Emailid='$Emailid'")));
					if($one=='1')
					{
						$query = "SELECT Msg from visitors where Emailid='$Emailid'";
						$result = mysqli_query($mysqli, $query);
						//while ($row = mysqli_fetch_array($result))
						while($row = $result->fetch_array(MYSQLI_ASSOC))
						{
							//global $a;
							$a = $row['Msg'];
							$err= $a;
						}
					}
					else
					{
						$err = "Your ID is Invalid";
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
  include "Header.php";
  include "Break.php";
  ?>
  <section style="position: absolute; width: 100%; height: 450px; margin-top: 0px; left: 0; margin-top: -830px; background: rgb(113, 113, 113);">
		<div class="container">
			<div class="row">
				<div class="contact-caption clearfix">
					<div class="contact-heading text-center">
						<h2>New Message</h2>
					<div>
					</div>
					<div class="col-md-5 contact-info text-left">
						<div class="info-detail">
							<center><font size="3"><?php echo @$err; ?></font></center>
							<img src="getImage3.php?Msg=<?php echo @$err; ?>"  width="300" height="375" />
					
						</div>
					</div>
					<div class="col-md-6 col-md-offset-1 contact-form">
						<form class="form" action="" method="post">
							<input class="name" type="email" placeholder="Email-ID" name="Emailid" required>
							<input class="submit-btn" type="submit" value="SUBMIT" name="btn-login"><br/><br/><br/><br/><br/>
						</form>
					</div>
				</div>
						<center>NOTE: This is Your New Message and your old Messages gets flushed whenever Admin creates a new Message.</center>
			</div>
		</div>
	</section><!-- end of contact section -->
</body>
</html>