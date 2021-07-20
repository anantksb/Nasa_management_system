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
  ?><br/>
	
		<div class="container">
			<div class="row">
				<div class="contact2-caption clearfix">
					<div class="contact2-heading text-center">
						<h2>UPDATE MISSION</h2>
					</div>
					<?php echo @$err;?>
					<div class="col-md-6 col-md-offset-1 contact2-form">
						<?php
							include "connect.php";
									if(isset($_GET['mname']))
{
		$mname = $_GET['mname'];
		$query = "SELECT  * from mission where mname='$mname'";
		$result = mysqli_query($mysqli, $query);
		while($row = $result->fetch_array(MYSQLI_ASSOC))   
										{
									$a=$row['mname'];
									$b=$row['Launchdate'];
									$c=$row['Admin_ID'];
									$d=$row['Amount'];
									//$e=$row['Photo'];
									$f=$row['Description'];
									$g=$row['Status'];
									
						echo <<<abc
						<form class="form" method="post" action="Save Mission.php" enctype="multipart/form-data">
							<input type="text" value=$a name="mname" placeholder='MISSION NAME' required>
							<input type="date" placeholder="Launch Date" name="Launchdate" value=$b required>
							<input type="text" placeholder="Incharge Head-ID" name="Admin_ID" value=$c required>
							<input type="number" placeholder="Amount" name="Amount" value=$d required>
							<input type="file" placeholder="Photo" name="image">
							<textarea placeholder="Description" name="Description">$f</textarea>
							<font size="4"><p align="left">Status:</p><select name="Status" style="width: 100%; height: 40px; background: #fff; font-size: 13px; color: #084a5c; font-family: 'Open Sans', sans-serif; padding: 12px; border: 0; margin-bottom: 12px;" required>>
									<option value="$g" selected='$g'>$g</option>
									<option value=""></option>
									<option value="Not Yet Launched">Not Yet Launched</option>
									<option value="Processing">Processing</option>
									<option value="Successful">Successful</option>
									<option value="Unsuccessful">Unsuccessful</option>
								</select>
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