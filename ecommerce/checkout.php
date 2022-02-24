<?php  

session_start();


if(!isset($_SESSION['username'])) {

	header("Location:login.php");

}

$total = '$ '.$_SESSION['total_price'];


include 'header.php';

?>


<!DOCTYPE html>

<html>

<head>

	<title>FURNI | Ecommerce Website</title>

</head>

<body>



<?php    

$total = $_SESSION['total_price'];


?>



<hr>

    <div class="about text-center">

        <h1>Payment</h1>

    </div>

<hr>



<div class="col-lg-12 mt-5 row">


  <div class="col-md-5 center">
        
          <div class="card">
            
            <div class="card-header rounded-0" style="background-color: #DDDDDD">

              <b>Cart Totals</b>

            </div>

            <div class="card-body" style="background-color:#F2F3F4">

            <div class="row my-2">
              
              <div class="col my2">
                
                <b class="float-left">Sub Total</b>

                <b class="float-right">$ <?php 

                echo number_format($total, 2)


                 ?></b>

              </div>

            </div>

            <div class="row">
              
              <div class="col my-5">
                
                <b class="float-left">Delivery Charges</b>

                <b class="float-right">Free</b>

              </div>

            </div>

            <hr>

            <div class="row">
            
            <div class="col">
              
              <b class="float-left">Amount Payable</b>

              <b class="float-right" style="color: #ff1206">$ <?php 


              echo number_format($total, 2)


               ?></b>

            </div>

          </div>

              
            <div class="row">
            
            <div class="col mt-5">
              
              <div class="" id="paypal-button-container"></div>
              

            </div>

          </div>


        </div>


        </div>

      </div>

<!-- <div class="col-md-3 float-right" id="paypal-button-container"></div> -->

</div>















<script src="https://www.paypal.com/sdk/js?client-id=ATTDKv0iOunerIBj01MBgMwP6AvAAO0HHteQkjVtU5XWggnV2VDONJVmYtFJpxtG0mTZGivP89YNQX3H"></script>


<script>
      paypal.Buttons({

        // Sets up the transaction when a payment button is clicked
        createOrder: function(data, actions) {
          return actions.order.create({
            purchase_units: [{
              amount: {
                value: '77.44'// Can reference variables or functions. Example: `value: document.getElementById('...').value`
              }
            }]
          });
        },

        // Finalize the transaction after payer approval
        onApprove: function(data, actions) {
          return actions.order.capture().then(function(orderData) {
            // Successful capture! For dev/demo purposes:
                console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
                var transaction = orderData.purchase_units[0].payments.captures[0];

                location.replace('success.php');

            // When ready to go live, remove the alert and show a success message within this page. For example:
            // var element = document.getElementById('paypal-button-container');
            // element.innerHTML = '';
            // element.innerHTML = '<h3>Thank you for your payment!</h3>';
            // Or go to another URL:  actions.redirect('thank_you.html');
          });
        }
      }).render('#paypal-button-container');

    </script>


</body>

</html>