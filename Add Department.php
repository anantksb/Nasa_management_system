<?php
		include "connect.php";
		
		if(isset($_POST['btn-login']))
{		
	$Deptid = $_POST['Deptid'];
		$one = implode(mysqli_fetch_assoc(mysqli_query($mysqli,"select count(*) from department where Deptid='$Deptid'")));
		if($one=='0')
		{
			$Deptname =$_POST['Deptname'];
			$HOD_ID =$_POST['HOD_ID'];
			$Description =$_POST['Description'];
		
			if ($mysqli->query("INSERT into department(Deptid,Deptname,HOD_ID,Description) values ('$Deptid','$Deptname','$HOD_ID','$Description')") === TRUE) 
			{
				$err ="<b>Registration successful</b></br>";
			}
			else
			{
				$err ="<b>unsuccessful Registration</b></br>";
			}
			
		}
		else
			$err ="<b>Department-ID Already Exists</b>";
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
						<h2>Add Department</h2>
					</div>
					<?php echo @$err;?>
					<div class="col-md-6 col-md-offset-1 contact2-form">

						<form class="form" action="" method="post">
							<input type="number" placeholder="Department-ID" name="Deptid" required>
							<input type="text" placeholder="Department Name" name="Deptname" required>
							<font size="4"><p align="left">Department Head:
							<select type="text" name="HOD_ID" style="width: 100%; height: 40px; background: #fff; font-size: 13px; color: #084a5c; font-family: 'Open Sans', sans-serif; padding: 12px; border: 0; margin-bottom: 12px;" required>
							<?php
								$qr="select Usernameorid,Fname,Lname from scientist";
								$res=mysqli_query($mysqli,$qr);
								echo "<option value=''></option>";
								while($row=mysqli_fetch_assoc($res))
								{
									echo "<option value=\"".$row['Usernameorid']."\">".$row['Fname']." ".$row['Lname']."</option>";
								}
							?>
							</select></p></select>
							<textarea placeholder="Description" name="Description"></textarea>
							<input class="submit-btn" type="submit" value="SUBMIT" name="btn-login">
						</form>
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