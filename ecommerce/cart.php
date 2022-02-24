<?php   

session_start();

// $total = $_SESSION['total_price'];


?>



<!DOCTYPE html>
<html>
<head>
	<title>FURNI | Ecommerce Website</title>
</head>
<body>

	<?php 
     include("header.php");

	 ?>




    <hr>

    <div class="about text-center">

        <h1>Shopping Cart</h1>

    </div>

   <hr>



    <!-- <div class="col-lg-12 row"> -->
      
      <div class="get_cart"></div>

      
      <!-- </div> -->

    
    





	 <script type="text/javascript">
	 	$(document).ready(function(){
            
            show_mycart();
           function show_mycart(){
              $.ajax({
              url: "ajax/show_mycart.php",
              method:"POST",
              dataType:"JSON",
              success:function(data){
              	$("#get_cart").html(data.out);
                $("#cart").text(data.da);
                $("#total").text(data.total);
              }
           });
           }

           setInterval(show_mycart,1000);

	 	});

	 	$(document).on("click",".remove",function(){
             var id = $(this).attr("id");

             var action = "delete";

              $.ajax({
              url: "ajax/cart_action.php",
              method:"POST",
              data:{id:id,action:action},
              dataType:"JSON",
              success:function(data){
              
              }
           });
	 	});

	 		$(document).on("click",".clearall",function(){
             var id = $(this).attr("id");

             var action = "clearall";

              $.ajax({
              url: "ajax/cart_action.php",
              method:"POST",
              data:{id:id,action:action},
              dataType:"JSON",
              success:function(data){
              
              }
           });
	 	});
	 </script>

</body>
</html>


