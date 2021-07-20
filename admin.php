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
  include "connect.php";
  include "AHeader.php";
  ?>
<br/><br/><br/><br/>
<div class="container" align="center">
			<div class="row">
				<div class="contact2-caption clearfix">
					<div class="contact2-heading text-center">
						<?php
			session_start();
			if(!(isset($_SESSION['username'])) )
				header("Location:AdminLogin.php");	
			$usr=$_SESSION["username"];
			echo  "<h2>WELCOME - $usr</h2>";
			echo "<font size='5' color='White'>DASHBOARD<br></font>";
			echo '<font color="white" face="verdana">';
			echo "<table border='1' style='text-align:center;'>";
			echo "<tr><th style='text-align:center;'><b>ADMIN</b></th><th style='text-align:center;'><b>MISSION</b></th><th style='text-align:center;'><b>SCIENTIST</b></th><th style='text-align:center;'><b>DEPARTMENT</b></th><th style='text-align:center;'><b>VISITORS</b></th></tr>";
			echo "<tr style='background-color: rgba(0, 0, 0, 0.0);'><td>";
			$query = "SELECT COUNT(*) AS SUM FROM admin";
			$result = mysqli_query($mysqli,$query);
			$rows = mysqli_fetch_assoc($result);
			echo $rows['SUM'];
			echo "</td><td>";
			$query = "SELECT COUNT(*) AS SUM FROM mission";
			$result = mysqli_query($mysqli,$query);
			$rows = mysqli_fetch_assoc($result);
			echo $rows['SUM'];
			echo "</td><td>";
			$query = "SELECT COUNT(*) AS SUM FROM scientist";
			$result = mysqli_query($mysqli,$query);
			$rows = mysqli_fetch_assoc($result);
			echo $rows['SUM'];
			echo "</td><td>";
			$query = "SELECT COUNT(*) AS SUM FROM department";
			$result = mysqli_query($mysqli,$query);
			$rows = mysqli_fetch_assoc($result);
			echo $rows['SUM'];
			echo "</td><td>";
			$query = "SELECT COUNT(*) AS SUM FROM visitors";
			$result = mysqli_query($mysqli,$query);
			$rows = mysqli_fetch_assoc($result);
			echo $rows['SUM'];
			echo "</td>";
			echo "</table><br><br><br>"
?>
					</div>
				</div>
			</div>
</div>
</body>
</html>