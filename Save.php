<?php
		include "connect.php";
			$Usernameorid =$_POST['Usernameorid'];
			$Fname =$_POST['Fname'];
			$Lname =$_POST['Lname'];
			$Password =$_POST['Password'];
if ($mysqli->query("update scientist set Usernameorid='$Usernameorid', Fname='$Fname', Lname='$Lname', Password='$Password' where Usernameorid =$Usernameorid") === TRUE) 
{
	header("location:Scientist.php");
}
else
{
	echo "<b>unsuccessful Registration</b></br>";
}
?>