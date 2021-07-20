<?php
		include "connect.php";
			$Usernameorid =$_POST['Usernameorid'];
			$Fname =$_POST['Fname'];
			$Lname =$_POST['Lname'];
			$Password =$_POST['Password'];
			$Dob =$_POST['Dob'];
			$Bg =$_POST['Bg'];
			$Pno1 =$_POST['Pno1'];
			$Emailid =$_POST['Emailid'];
			$Address =$_POST['Address'];
			$uora =$_POST['uora'];
			$Deptno =$_POST['Deptno'];
			$Doj =$_POST['Doj'];
			$Designation =$_POST['Designation'];
			$Mname =$_POST['Mname'];
			$Salary =$_POST['Salary'];
if ($mysqli->query("update scientist set Usernameorid='$Usernameorid', Fname='$Fname', Lname='$Lname', Password='$Password', Dob='$Dob', Bg='$Bg', Pno1='$Pno1', Emailid='$Emailid', Address='$Address', uora='$uora', Deptno='$Deptno', Doj='$Doj', Designation='$Designation', Mname='$Mname', Salary='$Salary' where Usernameorid='$Usernameorid'") === TRUE) 
{
	if(empty($_FILES["image"]["tmp_name"]))
				{
				}
				else{
						$check = getimagesize($_FILES["image"]["tmp_name"]);
						if($check !== false){
						$image = $_FILES['image']['tmp_name'];
						$imgContent = addslashes(file_get_contents($image));
						$mysqli->query("UPDATE scientist set Photo='$imgContent' where Usernameorid='$Usernameorid'");
					}
				}
	header("location:View Scientist.php");
}
else
{
	$err ="<b>unsuccessful Registration</b></br>";
}
?>