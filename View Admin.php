<?php
		include "connect.php";
		?>
<!DOCTYPE html>
<html lang="en"> 
<head>	
<?php
//Turn off
error_reporting(0);
  include "Head.php";
  ?>
<style>
html, body{
  min-height: 100%;
}
body{
  position: relative;
	background-color: rgb(113, 113, 113);
}
.page{
	
  position: absolute;
  top: 50%;
  left: 5%;
  width: 90%;
  height: auto;
  z-index: 10;
  
	background-color:white;
}
div.gallery {
    margin: 15px;
    border: 0px solid #ccc;
    float: center;
    width: 400px;
	background-color:#2a2a2a;
}

div.gallery:hover {
    border: 3px solid #777;
}

div.gallery img {
    width: 100%;
    height: auto;
}

.image {
  display: block;
  width: 100%;
  height: auto;
}
.gallery{
  position: relative;
  width: 30%;
}

tr.noBorder td {
  border: 0;
}

.gallery:hover {
  opacity: 0.8;
}

.text {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
}
</style>
</head>
<body>
	
	<?php
//Turn off
error_reporting(0);
  include "AHeader.php";
  ?>
<br/>
<div class="container" align="center">
			<div class="row">
				<div class="contact2-caption clearfix">
					<div class="contact2-heading text-center">
						<h2>Admin Details</h2>
					</div>
					<?php
					$one = implode(mysqli_fetch_assoc(mysqli_query($mysqli,"select count(*) from admin")));
	if($one>'0')
	{   
	     $query = "SELECT * from admin";
		 $result = mysqli_query($mysqli, $query);	
		 echo '<font color="white" face="verdana">';
		 echo "<table border='1' style='text-align:center;'>";
		$i=1;
		echo "<tr><th style='text-align:center;'><b>Sl.No.</b></th><th style='text-align:center;'><b>Admin ID</b></th><th style='text-align:center;'><b>Admin Name</b></th><th style='text-align:center;'><b>Delete</b></th></tr>";
		while($row = $result->fetch_array(MYSQLI_ASSOC))
		{
			echo "<tr style='background-color: rgba(0, 0, 0, 0.0);'><td>";
			echo "$i";
			echo "</td><td>";
			echo $row['ID'];
			echo "</td><td>";
			echo $row['Ausername'];
			echo "</td><td>";
			if($row['ID']==101)
			{
				echo "Can't be deleted";
			}
			else
				echo "<a href=\"Delete admin.php?ID=".$row['ID']."\">Delete</a>";
			echo "</td></tr>";
			$i++;
		}
		echo "</table><br><br><br>";
	}
	else
		echo "<b>No Details to Display</b>";
?>	
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