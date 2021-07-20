<?php
		include "connect.php";		
			$ID =$_GET['ID'];

			if ($mysqli->query("DELETE from admin WHERE ID='".$ID."'") === TRUE)
			{
				header("location:View Admin.php");
			}
			else
			{
				echo "$ID";
				echo "something wrong to delete";
			}

?>