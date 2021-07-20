<!DOCTYPE html>
<html>
    <head>
	
	<style>
th {text-align: right;
    font-size:15px;}
th, td {padding: 8px;}
th.one{font-size:16px;}
th.two{
      font-family: "Segoe UI Light","Segoe UI",Arial,sans-serif;
	  font-size:80px;
      }
th.three{text-align:top;
		padding-top: 0px;}
th.four{text-align:center;}
th.one{background-color: #E8E8E8 ;
		padding: 5px;}
table.two{border: 1px solid black;
    border-collapse: collapse;}
	a {
    color: black;
	}
img{padding-left:2px;}
</style>

	
        <meta charset="utf-8" />
        
        <title>Scientist Details</title>
        
        <!-- Our CSS stylesheet file -->
        <link rel="stylesheet" href="assets/css/styles.css" />
        
        <!-- Including the Lobster font from Google's Font Directory -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lobster" />
        
        <!-- Enabling HTML5 support for Internet Explorer -->
        <!--[if lt IE 9]>
          <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    
    <body>
	
<font face="Bookman Old Style">
        <header>
            <h1>CSS3 Animated Navigation Menu</h1>
            <h2><a href="http://tutorialzine.com/2011/05/css3-animated-navigation-menu/">&laquo; Read and download on Tutorialzine</a></h2>
        </header>
        
<br/><br/><br/><br/><br/><br/>
<center>SCIENTISTS DETAILS
</br>

<?php
	$mysqli =mysqli_connect("localhost","root","","nasa");
	if (mysqli_connect_errno()) 
	{
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
    }

	$one = implode(mysqli_fetch_assoc(mysqli_query($mysqli,"select count(*) from scientist")));
	if($one>'0')
	{   
	    $query = "SELECT Usernameorid,Fname,Lname,Dob,Bg,Pno1,Emailid,Address,uora,Deptno,Doj,Designation,Mname,Salary,Photo from scientist ORDER BY Usernameorid Desc";
		$result = mysqli_query($mysqli, $query);
		
		echo "<table border='1'>";
		$i=1;
		echo "<tr><td><b>Sl.No.</b></td><td><b>Scientist ID</b></td><td><b>First Name</b></td><td><b>Last Name</b></td><td><b>Date of Birth</b></td><td><b>Blood Group</b></td><td><b>Phone Number 1</b></td><td><b>Email ID</b></td><td><b>Address</b></td><td><b>Admin or Scientist</b></td><td><b>Department Number</b></td><td><b>Date of Joining</b></td><td><b>Designation</b></td><td><b>Current Misssion Working</b></td><td><b>Salary</b></td><td><b>Photo</b></td><td><b>Update</b></td><td><b>Delete</b></td></tr>";
		while($row = $result->fetch_array(MYSQLI_ASSOC))
		{
			echo "<tr><td>";
			echo "$i";
			echo "</td><td>";
			echo $row['Usernameorid'];
			echo "</td><td>";
			echo $row['Fname'];
			echo "</td><td>";
			echo $row['Lname'];
			echo "</td><td>";
			echo $row['Dob'];
			echo "</td><td>";
			echo $row['Bg'];
			echo "</td><td>";
			echo $row['Pno1'];
			echo "</td><td>";
			echo $row['Emailid'];
			echo "</td><td>";
			echo $row['Address'];
			echo "</td><td>";
			echo $row['uora'];
			echo "</td><td>";
			echo $row['Deptno'];
			echo "</td><td>";
			echo $row['Doj'];
			echo "</td><td>";
			echo $row['Designation'];
			echo "</td><td>";
			echo $row['Mname'];
			echo "</td><td>";
			echo $row['Salary'];
			echo "</td><td>";
			echo $row['Photo'];
			echo "</td><td>";
			echo "<a href=\"Update Scientist.php?Usernameorid=".$row['Usernameorid']."\">Update</a>";
			echo "</td><td>";
			echo "<a onClick ='confirm('Are You Sure?')' href=\"Delete Scientist.php?Usernameorid=".$row['Usernameorid']."\">Delete</a>";
			echo "</td></tr>";
			$i++;
		}
		echo "</table>";
	}
	else
		echo "<b>No Details to Display</b>";
?>
</center>
  <nav>
            <ul class="fancyNav">
                <li id="home"><a href="#home" class="homeIcon">Home</a></li>
                <li id="news"><a href="#news">News</a></li>
                <li id="about"><a href="#about">About us</a></li>
                <li id="services"><a href="#services">Services</a></li>
                <li id="contact"><a href="#contact">Contact us</a></li>
            </ul>
        </nav>
        
        <footer>Looks best in Firefox 4, usable everywhere. <b>To download the source code, visit <a 
href="http://tutorialzine.com/2011/05/css3-animated-navigation-menu/">Tutorialzine.com</a></b></footer>
            
</body>
</html>