<?php
		include "connect.php";		
			$Msg =$_GET['Msg'];

 
  $sql = "select Photo from inbox WHERE Message='".$Msg."'";
  $result = mysqli_query($mysqli,$sql);
  $row = mysqli_fetch_assoc($result);
 	
  header("Content-type: image/jpeg");
  echo $row['Photo'];
?>