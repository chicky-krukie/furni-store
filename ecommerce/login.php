<?php   

session_start();


include 'connection.php';

?>



<!DOCTYPE html>

<html>

<head>

<title>FURNI | Ecommerce Website</title>

	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


	<link rel="stylesheet" href="style.css">

</head>

<body>


<style>



.welcome {


          width: 100%;

          height: 100vh;

          object-fit: cover;

          background: url(https://cdn.home-designing.com/wp-content/uploads/2018/06/minimalist-home-office-setup.jpg);

          background-size: cover;

          background-color: rgba(0, 0, 0, .1);

          background-blend-mode: darken;


        }

        .center {

          margin: auto;

          display: block;

        }

        h3 {

          color: #000;

          margin: 24px 0;

          padding: 18px 0;

          font-size: 60px;

          font-weight: 400;

        }



        .btn {

          margin: 18px 0;
        }

</style>



<body>
  

  <!-- <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a> -->
<main>
  
<div class="container-fluid">
  
  <div class="row">
    
    <div class="col-md-6 align-self-center" id="login-center">
      
      <h3 class="text-center">Login</h3>

      <!-- <p class="text-center">Lorem ipsum dolor sit amet, consectetur</p> -->

      <form id="login-form" method="POST">

      	<div class="form-group">
      		
      		<input type="text" name="username" class="form-control form-control-lg col-7 center rounded-0" placeholder="Username" required>

      	</div>

      	<div class="form-group">
      		
      		<input type="password" name="password" class="form-control form-control-lg col-7 center rounded-0" placeholder="Password" required>

      	</div>


        <center><button class="btn btn-lg btn-block col-md-7 mt-4" name="submit" type="submit">LOGIN</button></center>

      </form>

      <center><button class="btn-secondary btn-lg btn-block col-md-7" name="submit" type="submit" id="signup">SIGNUP</button></center>

    </div>

    <div class="col-md-6 welcome">

    </div>

  </div>

</div>

</main>


	<?php 

  // include 'plugins.php'


   ?>

</body>

</html>







<script>
	

$('#signup').click(function(){

	location.replace("signup.php");

})


</script>





<?php   


if(isset($_POST['submit'])){


  $username = $_POST['username'];

  $password = $_POST['password'];


  $sql = "SELECT * FROM `user` WHERE username = '".$username."' AND pass = '".$password."'";

  $query = $connect->query($sql);


  // var_dump($sql);


  if($query->num_rows > 0) {

    $row = $query->fetch_array();


    if(is_array($row)){

      $_SESSION['username'] = $row['username'];

      $_SESSION['password'] = $row['pass'];

      // var_dump($_SESSION['password']);

      header("Location:index.php");

    } else {

      echo "invalid username or password";

    }



  }

}



?>