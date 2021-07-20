<?php
		$mysqli =mysqli_connect("localhost","root","","nasa");
		if (mysqli_connect_errno()) 
		{
			printf("Connect failed: %s\n", mysqli_connect_error());
			exit();
		}
		$Aun =$_POST['Ausername'];
		$Apw =$_POST['Apassword'];
		
		
		
				
					$one = implode(mysqli_fetch_assoc(mysqli_query($mysqli,"select count(*) from admin where Ausername='$Aun' and Apassword='$Apw'")));
					if($one=='1')
					{
						include "admin.php";
					}
					else
					{
						$error = "Your Login Name or Password is invalid";
					}
				
				?>