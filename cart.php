<!DOCTYPE>

<?php 
session_start();
include("functions.php")
?>
<html lang="en">
    <?php
      include("header.php");   
    ?>
    
    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Cart</strong></div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <form class="col-md-12" method="post">
            <div class="site-blocks-table">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th class="product-thumbnail">Image</th>
                    <th class="product-name">Product</th>
                    <th class="product-price">Price</th>
                    <th class="product-quantity">Quantity</th>
                    <th class="product-total">Total</th>
                    <th class="product-remove">Remove</th>
                  </tr>
                </thead>
                <tbody>

                  <?php cart();?>

                  
                </tbody>
              </table>
            </div>
          </form>
        </div>

        <?php 

        ?>

        <div class="row">
          <div class="col-md-6">
            <div class="row mb-5">

              <div class="col-md-6">
                <button class="btn btn-outline-primary btn-sm btn-block" onclick="window.location='index.php'">Continue Shopping</button>
              </div>

            </div>
          </div>
          <div class="col-md-6 pl-5">
            <div class="row justify-content-end">
              <div class="col-md-7">
                <div class="row">
                  <div class="col-md-12 text-right border-bottom mb-5">
                    <h3 class="text-black h4 text-uppercase">Cart Totals</h3>
                  </div>
                </div>
  
                <?php

                global $con;
                $ip = getIp();
                $total_cal = mysqli_query($con, "select * from cart where ip_add = '$ip'");
                $total = 0;
                while($row_total_cal=mysqli_fetch_array($total_cal)){
                  $prod_id = $row_total_cal['p_id'];
                  $prod_qty = $row_total_cal['qty'];
                  $prod_info = "select * from products where pro_id = '$prod_id'";
                  $run_product_info = mysqli_query($con, $prod_info);
                  $row_product_info = mysqli_fetch_array($run_product_info);
                  $prod_price = $row_product_info['pro_price'];
                  $total += $prod_qty * $prod_price;
                }

                ?>
                <div class="row mb-5">
                  <div class="col-md-6">
                    <span class="text-black">Total</span>
                  </div>
                  <div class="col-md-6 text-right">
                    <strong class="text-black">$<?php echo "$total"; ?></strong>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12">
                    <button class="btn btn-primary btn-lg btn-block" onclick="window.location='checkout.php'">Proceed To Checkout</button>
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