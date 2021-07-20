<?php
		include "connect.php";		
			$mname =$_GET['mname'];

 
  $sql = "select Photo from mission WHERE mname='".$mname."'";
  $result = mysqli_query($mysqli,$sql);
  $row = mysqli_fetch_assoc($result);
 	
  header("Content-type: image/jpeg");
  echo $row['Photo'];
?>