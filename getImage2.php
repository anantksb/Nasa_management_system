<?php
		include "connect.php";		
			$Usernameorid =$_GET['Usernameorid'];

 
  $sql = "select Photo from scientist WHERE Usernameorid='".$Usernameorid."'";
  $result = mysqli_query($mysqli,$sql);
  $row = mysqli_fetch_assoc($result);
 	
  header("Content-type: image/jpeg");
  echo $row['Photo'];
?>