<?php 

session_start();


if(isset($_SESSION['mycart'])) {

unset($_SESSION['mycart']);



}

?>



<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">



	<style>
	        
	        .center img {

	        	width: 148px;

	        }
	</style>


    
    	
    	<center><h3 class="my-5">Thank you for your payment!</h3></center>

    	<!-- <center><h3 class="my-5">Please wait we will redirecting you...<h3></center> -->

    <div class="center">

    	<center><img  class="" src="img/success.png"></center>

    	<center><h5 class="mt-5">Please wait while redirecting...<h5>

    		<img src="img/loading.gif" style="width: 132px">

    	</center>


    	


    </div>


<?php   



if(empty($_SESSION['mycart'])) {

unset($_SESSION['total_price']);

header("Refresh:3; url=cart.php");

}


?>