<?php
		include "connect.php";
		
		if(isset($_POST['btn-login']))
{		
		$mname = $_POST['mname'];
		$one = implode(mysqli_fetch_assoc(mysqli_query($mysqli,"select count(*) from mission where mname='$mname'")));
		if($one=='0')
		{
			$Launchdate =$_POST['Launchdate'];
			$Admin_ID =$_POST['Admin_ID'];
			$Amount =$_POST['Amount'];
			$Description =$_POST['Description'];
			$Status =$_POST['Status'];
		
			if ($mysqli->query("INSERT into mission(mname,Launchdate,Admin_ID,Amount,Description,Status) values ('$mname','$Launchdate','$Admin_ID','$Amount','$Description','$Status')") === TRUE) 
			{
				if(empty($_FILES["image"]["tmp_name"]))
				{
				}
				else{
						$check = getimagesize($_FILES["image"]["tmp_name"]);
						if($check !== false){
						$image = $_FILES['image']['tmp_name'];
						$imgContent = addslashes(file_get_contents($image));
						$mysqli->query("UPDATE mission set Photo='$imgContent' where mname='$mname'");
					}
				}
				$err ="<b>Registration successful</b></br>";
			}
			else
			{
				$err ="<b>unsuccessful Registration</b></br>";
			}
			
		}
		else
			$err ="<b>Mission Name Already Exists</b>";
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
<script>
function myfun2()
{
var a=document.getElementById("p1").value;
if(a.length==0)
{alert("Enter the Missioin name");}
var b=/[a-z]|[A-Z][0-9]/
if(!a.match(b))
{alert("Name should not contain special charactrs");}
var c=document.getElementById("p2").value;
if(c.length==0)
{alert("Enter the Date");}
var e=document.getElementById("p3").value;
if(e.length==0)
{alert("Enter the Admin id");}
var f=/[0-9]/
if(!e.match(f))
{alert("id must be in numbers");}
var g=document.getElementById("p5").value;
if(g.length==0)
{alert("Enter the description");}
var m=document.getElementById("p4").value;
if(m.length==0)
{alert("Enter the amount");}
</script>
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
						<h2>Add Mission</h2>
					</div>
					<center><font size="3"><?php echo @$err;?></font></center>
					<div class="col-md-6 col-md-offset-1 contact2-form">

						<form class="form" action="" method="post" enctype="multipart/form-data">
							<input type="text" placeholder="Mission Name" name="mname" id="p1" required>
							<input type="date" placeholder="Launch Date" name="Launchdate" id="p2" required>
							<font size="4"><p align="left">Incharge Admin:
							<select type="text" name="Admin_ID" id="p3" style="width: 100%; height: 40px; background: #fff; font-size: 13px; color: #084a5c; font-family: 'Open Sans', sans-serif; padding: 12px; border: 0; margin-bottom: 12px;" required>
							<?php
								$qr="select ID,Ausername from admin";
								$res=mysqli_query($mysqli,$qr);
								echo "<option value=''></option>";
								while($row=mysqli_fetch_assoc($res))
								{
									echo "<option value=\"". $row['ID']. "\">" . $row['Ausername']. "</option>";
								}
							?>
							</select>
							</p></font>
							<input type="number" placeholder="Amount" name="Amount" id="p4" required>
							<input type="file" placeholder="Photo" name="image">
							<textarea placeholder="Description" name="Description" id="p5" required></textarea>
							<font size="4"><p align="left">
							Status:</p></font>
								<select name="Status"  style="width: 100%; height: 40px; background: #fff; font-size: 13px; color: #084a5c; font-family: 'Open Sans', sans-serif; padding: 12px; border: 0; margin-bottom: 12px;">">
									<option value=""></option>
									<option value="Not Yet Launched">Not Yet Launched</option>
									<option value="Processing">Processing</option>
									<option value="Successful">Successful</option>
									<option value="Unsuccessful">Unsuccessful</option>
								</select>
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