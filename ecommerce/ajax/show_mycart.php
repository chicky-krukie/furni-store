<?php 
session_start();
    $total = 0;

    
$to = 0;

$output = "";

$output .= "

  <div class='col-lg-12 mt-5 row'> 

  <div class='col-md-8'>

  <table class='table table-borderless'>
    
          <thead class='thead-light'>
            
            <tr>
              
              <th>ID</th>

              <th>Name</th>

              <th>Price</th>

              <th>Quantity</th>

              <th>Total</th>

              <th></th>

            </tr>

          </thead>
";

if (!empty($_SESSION['mycart'])) {



  $i = 1;

  foreach ($_SESSION['mycart'] as $key => $value) {


    $output .= "



          <tbody>
            
            <tr>

              <td>".$i++."</td>
              
              <td>".$value['name']."</td>

              <td>$".$value['price']."</td>

              <td>".$value['quantity']."</td>

              <td>$".number_format($value['quantity'] * $value['price'], 2)."</td>

              <td><button class='btn remove' id='".$value['id']."'>Remove</button></td>

            </tr>

          </tbody>

    ";

    

    $total = $total + $value['quantity'] * $value['price'];


    $_SESSION['total_price'] = $total;


    
  }






  $output .= "


        <tr style='background-color:#F2F3F4'>
            
            <td></td>

            <td></td>

            <td></td>

            <td></td>

            <td><b>$ ".number_format($total, 2)."</b></td>

            <td><b>TOTAL PRICE</b></td>


          </tr>

        </table>

      </div>   
  ";






  $output .= "


  <div class='col-md-4'>
        
          <div class='card'>
            
            <div class='card-header rounded-0' style='background-color: #DDDDDD'>

              <b>Cart Totals</b>

            </div>

            <div class='card-body' style='background-color:#F2F3F4'>

            <div class='row my-2'>
              
              <div class='col my2'>
                
                <b class='float-left'>Sub Total</b>

                <b class='float-right'>$ ".number_format($total, 2)."</b>

              </div>

            </div>

            <div class='row'>
              
              <div class='col my-5'>
                
                <b class='float-left'>Delivery Charges</b>

                <b class='float-right'>Free</b>

              </div>

            </div>

            <hr>

            <div class='row'>
            
            <div class='col'>
              
              <b class='float-left'>Amount Payable</b>

              <b class='float-right' style='color: #ff1206'>$".number_format($total, 2)."</b>

            </div>

          </div>

              
            <div class='row'>
            
            <div class='col mt-5'>
              
              <center><a href='checkout.php'><button class='btn btn-block'>Proceed to payment</button></a></center>
              

            </div>

          </div>


        </div>


        </div>

      </div>

  ";











  $to = count($_SESSION['mycart']);
  
}else{


}

$data['da'] = $to;
$data['out'] = $output;


echo json_encode($data);





 ?>