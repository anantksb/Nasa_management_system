<?php
		include "connect.php";
		$Deptid=$_POST['Deptid'];
		$Deptname=$_POST['Deptname'];
			$HOD_ID =$_POST['HOD_ID'];
			$Description =$_POST['Description'];
		
if ($mysqli->query("update department set Deptid='$Deptid', Deptname='$Deptname', HOD_ID='$HOD_ID', Description='$Description' where Deptid='$Deptid'") === TRUE) 
{
	header("location:View Department.php");
}
else
{
	$err ="<b>unsuccessful Updation</b></br>";
}
?>