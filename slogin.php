<?php
		include "connect.php";
		session_start();		
		if(isset($_POST['btn-login']))
{		
$_SESSION['Username']=$_POST['Usernameorid'];
		$un =$_POST['Usernameorid'];
		$pw =$_POST['Password'];

					$one = implode(mysqli_fetch_assoc(mysqli_query($mysqli,"select count(*) from scientist where Usernameorid='$un' and Password='$pw'")));
					if($one=='1')
					{
						header("Location: Scientist.php");
						
					}
					else
					{
						$err = "Your Login Name or Password is invalid";
					}
}
				?>