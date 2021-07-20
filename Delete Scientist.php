<?php
		include "connect.php";		
			$Usernameorid =$_GET['Usernameorid'];
			if ($mysqli->query("DELETE from scientist WHERE Usernameorid='".$Usernameorid."'") === TRUE)
			{
				header("location:View Scientist.php");
			}

?>