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
  include "SHeader.php";
  ?>
<br/>
<div class="container" align="center">
			<div class="row">
				<div class="contact2-caption clearfix">
					<div class="contact2-heading text-center">
						<h2>Our Departments</h2>
					</div>	
					<form class="form" action="" method="post">
					<select type="text" name="Deptid" style="width: 40%; height: 40px; position: relative; left: -250px; background: #fff; font-size: 13px; color: #084a5c; font-family: 'Open Sans', sans-serif; padding: 12px; border: 0; margin-bottom: 12px;">
							<?php
								$qr="select Deptid,Deptname from department";
								$res=mysqli_query($mysqli,$qr);
								echo "<option value=''>!----------------------------------- Select Department -----------------------------------!</option>";
								echo "<option value=''></option>";
								while($row=mysqli_fetch_assoc($res))
								{
									echo "<option value=\"". $row['Deptid']. "\">" .$row['Deptname']."</option>";
								}
							?>
					</select>
					<input type="submit" value="SEARCH" name="btn-login" style="width: 180px; height: 40px; font-size: 24px; color: #fff; position: relative; left: -150px; background-color:#2a2a2a; padding: 0; border: 0; font-family: 'BenchNine', sans-serif; font-weight: bold;">
						</form>
					<?php
					if(isset($_POST['btn-login']))
					{	
							$search_value=$_POST['Deptid'];
							if($search_value!==""){
								$query = "CALL departmentname('$search_value')";
								$result = mysqli_query($mysqli, $query);
								 echo '<font color="white" face="verdana">';
								 echo "<table border='1' style='text-align:center;'>";
								 echo "<tr><th style='text-align:center;'><b>Department ID</b></th><th style='text-align:center;'><b>Department Name</b></th>
									<th style='text-align:center;'><b>Department Incharge ID</b></th><th style='text-align:center;'><b>Description</b></th></tr>";
								while($row = $result->fetch_array(MYSQLI_ASSOC))
								{	
									echo "<tr style='background-color: rgba(0, 0, 0, 0.0);'><td>";
									echo $row['Deptid'];
									echo "</td><td>";
									echo $row['Deptname'];
									echo "</td><td>";
									echo $row['HOD_ID'];
									echo "</td><td>";
									echo $row['Description'];
									echo "</td></tr>";
								}
								echo "</table>";
							}
							else
							{
								$one = implode(mysqli_fetch_assoc(mysqli_query($mysqli,"select count(*) from department")));
								if($one>'0')
								{   
									 $query = "SELECT * from department";
									 $result = mysqli_query($mysqli, $query);	
									 echo '<font color="white" face="verdana">';
									 echo "<table border='1' style='text-align:center;'>";
									$i=1;
									echo "<tr><th style='text-align:center;'><b>Sl.No.</b></th><th style='text-align:center;'><b>Department ID</b></th><th style='text-align:center;'><b>Department Name</b></th>
									<th style='text-align:center;'><b>Department Incharge ID</b></th><th style='text-align:center;'><b>Description</b></th></tr>";
									while($row = $result->fetch_array(MYSQLI_ASSOC))
									{
										echo "<tr style='background-color: rgba(0, 0, 0, 0.0);'><td>";
										echo "$i";
										echo "</td><td>";
										echo $row['Deptid'];
										echo "</td><td>";
										echo $row['Deptname'];
										echo "</td><td>";
										echo $row['HOD_ID'];
										echo "</td><td>";
										echo $row['Description'];
										echo "</td></tr>";
										$i++;
									}
									echo "</table>";
								}
								else
									echo "<b>No Details to Display</b>";
								}
					}
					if(empty($_POST['btn-login']))
					{
							$one = implode(mysqli_fetch_assoc(mysqli_query($mysqli,"select count(*) from department")));
								if($one>'0')
								{   
									 $query = "SELECT * from department";
									 $result = mysqli_query($mysqli, $query);	
									 echo '<font color="white" face="verdana">';
									 echo "<table border='1' style='text-align:center;'>";
									$i=1;
									echo "<tr><th style='text-align:center;'><b>Sl.No.</b></th><th style='text-align:center;'><b>Department ID</b></th><th style='text-align:center;'><b>Department Name</b></th>
									<th style='text-align:center;'><b>Department Incharge ID</b></th><th style='text-align:center;'><b>Description</b></th></tr>";
									while($row = $result->fetch_array(MYSQLI_ASSOC))
									{
										echo "<tr style='background-color: rgba(0, 0, 0, 0.0);'><td>";
										echo "$i";
										echo "</td><td>";
										echo $row['Deptid'];
										echo "</td><td>";
										echo $row['Deptname'];
										echo "</td><td>";
										echo $row['HOD_ID'];
										echo "</td><td>";
										echo $row['Description'];
										echo "</td></tr>";
										$i++;
									}
									echo "</table>";
								}
					}
?>		
<br><br><br>
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
