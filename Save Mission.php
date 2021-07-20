<?php
		include "connect.php";
			$mname=$_POST['mname'];
			$Launchdate =$_POST['Launchdate'];
			$Admin_ID =$_POST['Admin_ID'];
			$Amount =$_POST['Amount'];
			//$Photo =$_POST['Photo'];
			$Description =$_POST['Description'];
			$Status =$_POST['Status'];
if ($mysqli->query("update mission set mname='$mname',Launchdate='$Launchdate', Admin_ID='$Admin_ID', Amount='$Amount', Description='$Description', Status='$Status' where mname='$mname'") === TRUE) 
{
	if(empty($_FILES["image"]["tmp_name"]))
				{
				}
				else{
						$check = getimagesize($_FILES["image"]["tmp_name"]);
						if($check !== false){
						$image = $_FILES['image']['tmp_name'];
						$imgContent = addslashes(file_get_contents($image));
						$mysqli->query("UPDATE mission set Photo='$imgContent' where mname='$mname'");
					}
				}
	header("location:View Mission.php");
}
else
{
	$err ="<b>unsuccessful Updation</b></br>";
}
?>