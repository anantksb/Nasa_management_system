<!DOCTYPE html>
<html lang="en"> 
<head>
	
<?php
//Turn off
error_reporting(0);
  include "Head.php";
  ?>
  <?php
			session_start();
			if(!(isset($_SESSION['SFname'])) )
				header("Location:VisitorLogin.php");	
				$name=$_SESSION["Vname"];
				$emailid=$_SESSION["VEmailid"];
	?>
</head>
<body>
<?php
//Turn off
error_reporting(0);
  include "Header.php";
  ?>

	<section class="slider" id="home">
		<div class="container-fluid">
			<div class="row">
			    <div id="carouselHacked" class="carousel slide carousel-fade" data-ride="carousel">
					<div class="header-backup"></div>
			        <!-- Wrapper for slides -->
			        <div class="carousel-inner" role="listbox">
			            <div class="item active">
			            	<img src="img/slide-one.jpg" alt="">
			                <div class="carousel-caption">
		               			<h1>NASA</h1>
		               			<p>National Aeronautics and Space Administration</p>
		               			<a href="website/NASA.html" target="_blank"><button>learn more</button></a>
			                </div>
			            </div>
			            <div class="item">
			            	<img src="img/slide-two.jpg" alt="">
			                <div class="carousel-caption">
		               			<h1>NASA</h1>
		               			<p>National Aeronautics and Space Administration</p>
		               			<a href="website/NASA.html" target="_blank"><button>learn more</button></a>
			                </div>
			            </div>
			            <div class="item">
			            	<img src="img/slide-three.jpg" alt="">
			                <div class="carousel-caption">
		               			<h1>NASA</h1>
		               			<p>National Aeronautics and Space Administration</p>
		               			<a href="website/NASA.html" target="_blank"><button>learn more</button></a>
			                </div>
			            </div>
			            <div class="item">
			            	<img src="img/slide-four.jpg" alt="">
			                <div class="carousel-caption">
		               			<h1>NASA</h1>
		               			<p>National Aeronautics and Space Administration</p>
		               			<a href="website/NASA.html" target="_blank"><button >learn more</button></a>
			                </div>
			            </div>
			        </div>
			        <!-- Controls -->
			        <a class="left carousel-control" href="#carouselHacked" role="button" data-slide="prev">
			            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			            <span class="sr-only">Previous</span>
			        </a>
			        <a class="right carousel-control" href="#carouselHacked" role="button" data-slide="next">
			            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			            <span class="sr-only">Next</span>
			        </a>
			    </div>
			</div>
		</div>
	</section><!-- end of slider section -->
		<!-- about section -->
	<section class="service text-center" id="service">
        <div class="container">
			<div class="row">
				<center><h2>Technology</h2>
					<h4>Exploring Other Worlds, Understanding Our Own</h4>
				  <div class="tabs">
					<div class="tab-item tab-active">
						<a class="tab-label active-btn">NASA Armstrong</a>
						<div class="tab-content">
							<div class="margin">
								<div class="s-12 m-6 l-3"><a class="our-work-container lightbox margin-bottom"><div class="our-work-text"><h4>Virgin Galactic</h4></div><img src="img/por9.jpg" alt=""></a></div>
								<div class="s-12 m-6 l-3"><a class="our-work-container lightbox margin-bottom"><div class="our-work-text"><h4>Masten Space System</h4></div><img src="img/por10.jpg" alt=""></a></div>
								<div class="s-12 m-6 l-3"><a class="our-work-container lightbox margin-bottom"><div class="our-work-text"><h4>Blue Orign</h4></div><img src="img/por11.jpg" alt=""></a></div>
								<div class="s-12 m-6 l-3"><a class="our-work-container lightbox margin-bottom"><div class="our-work-text"><h4>NASA Drone Flight</h4></div><img src="img/por12.jpg" alt=""></a></div>
							</div>
						</div>  
					</div>
					<div class="tab-item">
						<a class="tab-label">Robotics</a>        
						<div class="tab-content">
							<div class="margin">
								<div class="s-12 m-6 l-3"><a class="our-work-container lightbox margin-bottom"><div class="our-work-text"><h4>Space Robotics Logo</h4></div><img src="img/por5.jpg" alt=""></a></div>
								<div class="s-12 m-6 l-3"><a class="our-work-container lightbox margin-bottom"><div class="our-work-text"><h4>Valkyrie-Robot-4.0</h4></div><img src="img/por6.jpg" alt=""></a></div>
								<div class="s-12 m-6 l-3"><a class="our-work-container lightbox margin-bottom"><div class="our-work-text"><h4>Edu Rover Robot</h4></div><img src="img/por7.jpg" alt=""></a></div>
								<div class="s-12 m-6 l-3"><a class="our-work-container lightbox margin-bottom"><div class="our-work-text"><h4>NASA Robot</h4></div><img src="img/por8.jpg" alt=""></a></div>
							</div>
						</div>  
					</div>
					<div class="tab-item">
						<a class="tab-label">Web Telescope</a>
						<div class="tab-content">
							<div class="margin">
								<div class="s-12 m-6 l-3"><a class="our-work-container lightbox margin-bottom"><div class="our-work-text"><h4>Web Telescope Logo</h4></div><img src="img/por1.png" alt=""></a></div>
								<div class="s-12 m-6 l-3"><a class="our-work-container lightbox margin-bottom"><div class="our-work-text"><h4>Web Telescope</h4></div><img src="img/por2.jpg" alt=""></a></div>
								<div class="s-12 m-6 l-3"><a class="our-work-container lightbox margin-bottom"><div class="our-work-text"><h4>Web Telescope Parts</h4></div><img src="img/por3.jpg" alt=""></a></div>
								<div class="s-12 m-6 l-3"><a class="our-work-container lightbox margin-bottom"><div class="our-work-text"><h4>Web Telescope Plan</h4></div><img src="img/por4.jpg" alt=""></a></div>
							</div>
						</div>  
					</div>
					<div class="tab-item">
						<a class="tab-label">Commercial Space</a>
						<div class="tab-content">
							<div class="margin">
								<div class="s-12 m-6 l-3"><a class="our-work-container lightbox margin-bottom"><div class="our-work-text"><h4>Commercial Resupply</h4></div><img src="img/por13.jpg" alt=""></a></div>
								<div class="s-12 m-6 l-3"><a class="our-work-container lightbox margin-bottom"><div class="our-work-text"><h4>NASA-supersonic-plane</h4></div><img src="img/por14.jpg" alt=""></a></div>
								<div class="s-12 m-6 l-3"><a class="our-work-container lightbox margin-bottom"><div class="our-work-text"><h4>Commercial Crew</h4></div><img src="img/por15.jpg" alt=""></a></div>
								<div class="s-12 m-6 l-3"><a class="our-work-container lightbox margin-bottom"><div class="our-work-text"><h4>Commercial Space Rocket</h4></div><img src="img/por16.jpg" alt=""></a></div>
							</div>
						</div>  
					</div>
				  </div>
				</center>
            </div>
         </div>  
	</section>
    <!-- end of about section --> 

	<!-- about section -->
	<section class="about text-center" id="about">
		<div class="container">
			<div class="row">
				<h2>about us</h2>
				<h4>NASA's vision: We reach for new heights and reveal the unknown for the benefit of humankind.</h4>
				<div class="col-md-4 col-sm-6">
					<div class="single-about-detail clearfix">
						<div class="about-img">
							<img class="img-responsive" src="img/item1.jpg" alt="">
						</div>
						<div class="about-details">
							<div class="pentagon-text">
								<h1>N</h1>
							</div>
							<h3>NASA</h3>
							<p>The National Aeronautics and Space Administration (NASA) is an independent agency of the executive branch of the United States federal government responsible for the civilian space program, as well as aeronautics and aerospace research.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="single-about-detail">
						<div class="about-img">
							<img class="img-responsive" src="img/item2.jpg" alt="">
						</div>
						<div class="about-details">
							<div class="pentagon-text">
								<h1>W</h1>
							</div>

							<h3>What does NASA Do?</h3>
							<p>Thousands of people have been working around the world -- and off of it -- for decades, trying to answer some basic questions. What's out there? How do we get there? What will we find? What can we learn there, or learn just by trying to get there, that will make life better here on Earth?</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="single-about-detail">
						<div class="about-img">
							<img class="img-responsive" src="img/item3.jpg" alt="">
						</div>
						<div class="about-details">
							<div class="pentagon-text">
								<h1>A</h1>
							</div>
							<h3>Aeronautics</h3>
							<p>NASA is working now to design, build and fly new experimental aircraft – X-planes – that will prove the dramatic benefits of advanced technologies in piloted flight, including a Low Boom Flight Demonstrator which will provide data that could open the door to supersonic flights over land.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section><!-- end of about section -->

<?php
 //include "Break.php";
 //include "Visitors.php";
 include "Footer.php";
 ?>
</body>
</html>