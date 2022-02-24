<!doctype html>

<html lang="en">

	<head>

		<?php include 'header.php' ?>

		
		<title></title>

	</head>


	<style>
		
		/* navigation */

		.navbar {

		    padding: 18px 28px;

		    background: transparent;

		    position: absolute;

		    z-index: 1;

		    width: 100%;

		}

		.navbar-collapse .navbar-nav li {

		    padding: 0px 8px;

		}

		.nav-item img {

		    cursor: pointer;

		    opacity: 0.4;

		}

		.nav-item:hover img {

		    opacity: 0.7;
		    
		}


	</style>



	<body>

		


		<!--bg-carousel -->

	    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">

	        <div class="carousel-inner">

	            <div class="carousel-item active">

	                <img class="d-block w-100" src="img/nathan-oakley-gj1dnc7yRG0-unsplash.jpg" alt="First slide">

	                <div class="carousel-caption d-none d-md-block">

	                    <h1>Decor the dreams with<br>wood beauty</h1>

	                    <p>Transforming furniture with creativity and wood that enhances the beauty of your home</p>

	                    <a href="product.php" class="btn animate__animated animate__fadeIn" style="animation-delay: 1.5s;">Shop now &#8594</a>

	                </div>

	            </div>

	            <div class="carousel-item">

	                <img class="d-block w-100" src="img/sidekix-media-wRzBarqn3hs-unsplash.jpg" alt="Second slide">

	                <div class="carousel-caption d-none d-md-block">

	                    <h1>Because furniture says a lot<br> about you</h1>

	                    <p>Exceptional designs for your exception ideas. Unique designs, because just ordinary is not our thing</p>

	                    <a href="product.php" class="btn animate__animated animate__fadeIn" style="animation-delay: 1.5s;">Shop now &#8594</a>

	                </div>

	            </div>

	        </div>

	        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">

	            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	            
	            <span class="sr-only">Previous</span>
	        
	        </a>
	        
	        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
	            
	            <span class="carousel-control-next-icon" aria-hidden="true"></span>
	            
	            <span class="sr-only">Next</span>
	        
	        </a>
	    
	    </div>






		<?php 

		include 'plugins.php' 

		?>

	</body>


</html>