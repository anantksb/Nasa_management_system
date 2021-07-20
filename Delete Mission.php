<?php
		include "connect.php";		
			$mname =$_GET['mname'];

			if ($mysqli->query("DELETE from mission WHERE mname='".$mname."'") === TRUE)
			{
				header("location:View Mission.php");
			}
			else
			{
				echo "$mname";
				echo " something wrong to delete";
			}

?>