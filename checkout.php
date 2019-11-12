<!DOCTYPE>
<?php 
session_start();
include("functions.php");
?>
<html lang="en">
<?php include("header.php"); ?>


    <?php 
        if(!isset($_SESSION['customer_email'])){
          echo "<script>window.open('customer_login.php','_self')</script>";
        }
        else{
          global $con;
          $ip = getIp();
          $c_email = $_SESSION['customer_email'];
          $current_user = "select * from customers where c_email='$c_email' and c_ip = '$ip'";
          $run_current_user = mysqli_query($con, $c_email);
          $c_country = $run_current_user['c_country'];
          $c_first_name = $run_current_user['c_first_name'];
          $c_last_name = $run_current_user['c_last_name'];
          $c_address = $run_current_user['c_address'];
          $c_state = $run_current_user['c_state'];
          $c_zip = $run_current_user['c_zip'];
          $c_phone = $run_current_user['c_phone'];
          $c_pass = $run_current_user['c_pass'];
        }
        
    ?>
    
    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">/</span> <a href="cart.php">Cart</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Checkout</strong></div>
        </div>
      </div>
    </div>

    <div class="site-section" align="center">
      <div class="container" align="center">
        <div class="row" align="center">
   
          <div class="col-md-12" align = "center">
            
            <div class="row mb-5" align="center">
              <div class="col-md-12" align="center">
                <h2 class="h3 mb-3 text-black">Your Order</h2>
                <div class="p-3 p-lg-5 border" align="center">
                  <table class="table site-block-order-table mb-5">
                    <thead>
                      <th>Product</th>
                      <th>Total</th>
                    </thead>
                    <tbody>
                      <?php 

                          global $con; 

                          $total1 = 0;
      
                          $ip = getIp();

                          $check_cart1 = "select * from cart where ip_add='$ip'";
                          
                          $run_check_cart1 = mysqli_query($con, $check_cart1); 
 
                          while($row_check_cart1 = mysqli_fetch_array($run_check_cart1)){

                            $pro_id1 = $row_check_cart1['p_id'];
                            $pro_qty1 = $row_check_cart1['qty'];
                            $product_info1 = "select * from products where pro_id = '$pro_id1'";
                            $run_product_info1 = mysqli_query($con, $product_info1);

                            $row_product_info1 = mysqli_fetch_array($run_product_info1);

                            $pro_title1 = $row_product_info1['pro_title'];
                            $pro_price1 = $row_product_info1['pro_price']; 

                            $sub_total1 = $pro_price1 * $pro_qty1;
                            $total1 += $sub_total1;

                            echo "

                              <tr>
                                  <td>$pro_title1 <strong class='mx-2'>x</strong> $pro_qty1</td>
                                  <td>Rs. $sub_total1</td>
                              </tr>

                            ";

                      }
                                              

                      ?>
 
                      <tr>
                        <td class="text-black font-weight-bold"><strong>Cart Subtotal</strong></td>
                        <td class="text-black">Rs. <?php echo $total1; ?> </td>
                      </tr>
                      <tr>
                        <td class="text-black font-weight-bold"><strong>Order Total</strong></td>
                        <td class="text-black font-weight-bold"><strong>Rs. <?php echo $total1; ?> </strong></td>
                      </tr>
                    </tbody>
                  </table>

                  <div class="border p-3 mb-3">
                    <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsebank" role="button" aria-expanded="false" aria-controls="collapsebank">Direct Bank Transfer</a></h3>

                    <div class="collapse" id="collapsebank">
                      <div class="py-2">
                        <p class="mb-0">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                      </div>
                    </div>
                  </div>

                  <div class="border p-3 mb-3">
                    <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsecheque" role="button" aria-expanded="false" aria-controls="collapsecheque">Cheque Payment</a></h3>

                    <div class="collapse" id="collapsecheque">
                      <div class="py-2">
                        <p class="mb-0">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                      </div>
                    </div>
                  </div>

                  <div class="border p-3 mb-5">
                    <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsepaypal" role="button" aria-expanded="false" aria-controls="collapsepaypal">Paypal</a></h3>

                    <div class="collapse" id="collapsepaypal">
                      <div class="py-2">
                        <p class="mb-0">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <button class="btn btn-primary btn-lg btn-block" onclick="window.location='thankyou.php'">Place Order</button>
                  </div>

                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>

    <?php include("footer.php"); ?>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>
    
  </body>
</html>