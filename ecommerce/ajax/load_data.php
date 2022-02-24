<?php 

include("../connection.php");

if (isset($_POST['page'])) {
	$page = $_POST['page'];
}else{
	$page = 1;
}

$pagination = "";


$limit = 4;
$start = ($page - 1)* $page;

$pages = mysqli_query($connect,"SELECT count(id) AS id FROM cart");

while ($row = mysqli_fetch_array($pages)) {
	$total = $row['id'];
	$count = ceil($total / $limit);

   for ($i=1; $i <=$count ; $i++) { 
   	
$pagination .= "

  <ul class='pagination mx-4'>
    
             <a id='".$i."' href='' class='page-link '>".$i."</a>
          
     </div>
    
";
   }

}










$query = "SELECT * FROM cart";
$res = mysqli_query($connect,$query);

$output = "";
if (mysqli_num_rows($res) < 1) {
	$output .= "<h1 class='text-center'>NO DATA IN THE DB</h1>";
}else{

	while ($row = mysqli_fetch_array($res)) {
		 
		 $output .= "
            	  <div class='shop-items col-md-3 my-5'>

            	  <form method='POST'>

				 	<div class='overlay shop-item'>
					    
				 	    <img class='shop-item-image w-100' src='img/".$row['image']."'>

				 	    <h6 class='text-center mt-3 shop-item-title' style='color: #9E978E'>".$row['name']."</h6>

				 	    <b><p class='text-center my-2 shop-item-price' style='color: #ff1206'>$".$row['price']."</p></b>

					    <input type='hidden' name='id' value='".$row['id']."' id='".$row['id']."'>
					 	<input type='hidden' name='name' value='".$row['name']."' id='name".$row['id']."'>
					 	<input type='hidden' name='price' value='".$row['price']."' id='price".$row['id']."'>
					 	<input type='hidden' name='quantity' value='1' id='quantity".$row['id']."'>

				 	    <center class='shop-item-details'>

				 	    	<input type='submit' name='add' id='".$row['id']."' class='btn my-2 add_cart' value='Add to Cart'>

				 	    </center>

				 	  </form>

				 	</div>

				 </div>

		 ";
	}
}




$data['output'] = $output;
$data['pagination'] = $pagination;


echo json_encode($data);


 ?>