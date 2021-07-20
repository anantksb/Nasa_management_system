<?php
		include "connect.php";		
			$Deptid =$_GET['Deptid'];

			if ($mysqli->query("DELETE from department WHERE Deptid='".$Deptid."'") === TRUE)
			{
				header("location:View Department.php");
			}
			else
			{
				echo "$Deptid";
				echo " something wrong to delete";
			}

?>