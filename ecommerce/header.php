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


 <!-- nav -->

  <nav class="navbar navbar-expand-lg navbar-light">

    <a class="navbar-brand mb-0 h1" href="/">F U R N I</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    
        <span class="navbar-toggler-icon"></span>
    
    </button>
    
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        
        <ul class="navbar-nav">
            
            <li class="nav-item">
                
                <a class="nav-link" href="index.php">Home</a>
            </li>
            
            <li class="nav-item">
                
                <a class="nav-link" href="product.php">Product</a>
            
            </li>
            
            <li class="nav-item">
                
                <a class="nav-link" href="about.php">About</a>
            
            </li>
            
            <li class="nav-item">
                
                <a class="nav-link" href="contact.php">Contact</a>
            
            </li>

            <li class="nav-item">
                
                <a href="account.php"><img class="nav-link" src="img/user.png"></a>
            
            </li>
            
            <li class="nav-item">
                
                <a class="nav-link" href="cart.php" ><img src="img/shopping-cart.png"><span id="cart" class="badge rounded-circle mx-2" style="background-color: #000; color: #fff; float:right"></span></a>
            
            </li>
        
        </ul>
    
    </div>

</nav>

























   <script type="text/javascript">
    $(document).ready(function(){
            
            show_mycart();
           function show_mycart(){
              $.ajax({
              url: "ajax/show_mycart.php",
              method:"POST",
              dataType:"JSON",
              success:function(data){
                $(".get_cart").html(data.out);
                $("#cart").text(data.da);
              }
           });
           }

           setInterval(show_mycart,1000);

    });
   </script>

</body>
</html>