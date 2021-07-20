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
						<h2>UPDATE Department</h2>
					</div>
					<?php echo @$err;?>
					<div class="col-md-6 col-md-offset-1 contact2-form">
						<?php
							include "connect.php";
									if(isset($_GET['Deptid']))
{
		$Deptid = $_GET['Deptid'];
		$query = "SELECT  * from Department where Deptid='$Deptid'";
		$result = mysqli_query($mysqli, $query);
		while($row = $result->fetch_array(MYSQLI_ASSOC))   
										{
									$a=$row['Deptid'];
									$b=$row['Deptname'];
									$c=$row['HOD_ID'];
									$d=$row['Description'];
						echo <<<abc
						<form class="form" method="post" action="Save Department.php">
							<input type="number" value=$a name="Deptid" placeholder='Department ID' required>
							<input type="text" placeholder="Department Name" name="Deptname" value=$b required>
							<input type="text" placeholder="Incharge Head-ID" name="HOD_ID" value='$c'>
							<textarea placeholder="Description" name="Description">$d</textarea>
						
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