<?php  

session_start();



if(!isset($_SESSION['username'])){

  header("Location:login.php");

}


include 'header.php';

?>


<hr>

    <div class="about text-center">

        <h1>My Account</h1>

    </div>

   <hr>






<div class="col-lg-12">
	
	<div class="col-md-12">
		
		<div class="card-body">

			<center><img src="img/user-big.png" class="mb-3"></center>
			
			<center><h3 class="my-5">Hi! You are currently login as <?php echo ucwords($_SESSION['username']) ?> ☺</h3></center>

			<center><a href="logout.php" class="btn my-3">Logout</a></center>

		</div>

	</div>

</div>




