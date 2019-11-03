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

                  <form id="myform" method="post">

                  <?php 

                  if(isset($_GET['deleteitem'])){
    
                    global $con; 
                    $ip = getIp();
                    $pro_id = $_GET['deleteitem'];
                    $delete_pro = "delete from cart where p_id='$pro_id'";
                    $run_delete = mysqli_query($con, $delete_pro);
                    echo "<script>window.open('cart.php','_self')</script>";

                  }

                  if(isset($_GET['addcart'])){

                        global $con; 
                        
                        $ip = getIp();
                        
                        $p_id = $_GET['addcart'];

                        $check_pro = "select * from cart where ip_add='$ip' AND p_id='$p_id'";
                        
                        $run_check = mysqli_query($con, $check_pro); 
                        
                        if(mysqli_num_rows($run_check)>0){

                        echo "";
                        
                        }
                        else {
                        
                        $insert_pro = "insert into cart values ('$p_id','$ip',1)";
                        
                        $run_pro = mysqli_query($con, $insert_pro); 
                        echo "<script>window.open('cart.php','_self')</script>"; 

                        }      
                        
                  }

                    global $con; 

                    $display_cart = "select * from cart";
                    $run_display_cart = mysqli_query($con, $display_cart);

                    while($row_display = mysqli_fetch_array($run_display_cart)){

                        $pro_id = $row_display['p_id'];
                        $pro_qty = $row_display['qty'];
                        $product_info = "select * from products where pro_id = '$pro_id'";
                        $run_product_info = mysqli_query($con, $product_info);
                        $row_product_info = mysqli_fetch_array($run_product_info);

                        $pro_title = $row_product_info['pro_title'];
                        $pro_price = $row_product_info['pro_price'];
                        $pro_image = $row_product_info['pro_image'];

                        $name_for_qty = 'a'.$pro_id;

                        if(isset($_POST[$name_for_qty])){
                          $qty = $_POST[$name_for_qty];
                          global $con;
                          $ip = getIp();
                          $update_qty = mysqli_query($con, "update cart set qty='$qty' where p_id = '$pro_id' and ip_add='$ip'");
                          $pro_qty = $qty;
                        } 

                        $sub_total = $pro_price * $pro_qty;

                        $cart_element_qty = mysqli_query($con, "select * from cart where p_id='$pro_id';");
                        $cart_element_qty = mysqli_fetch_array($cart_element_qty);
                        $cart_element_qty = $cart_element_qty['qty'];

                        echo "
                            <tr>
                                <td class='product-thumbnail'>
                                  <img src='images/$pro_image' alt='Image' class='img-fluid'>
                                </td>
                                <td class='product-name'>
                                  <h2 class='h5 text-black'>$pro_title</h2>
                                </td>
                                <td>$pro_price</td>
                                <td>
                                      
                                      <div class='input-group mb-3' style='max-width: 120px;'>
                                        <div class='input-group-prepend'>
                                          <button class='btn btn-outline-primary js-btn-minus' type='button'>&minus;</button>
                                        </div>
                                        
                                        <input type='text' min='0' max='100' class='form-control text-center' name=$name_for_qty id=$name_for_qty value=$cart_element_qty placeholder='' aria-label='Example text with button addon' aria-describedby='button-addon1'>
                                        
                                        <div class='input-group-append'>
                                          <button class='btn btn-outline-primary js-btn-plus' type='button'>&plus;</button>
                                        </div>
                                      </div>

                                </td>
                                
                                
                                <td>$sub_total</td>
                                <td><a href = 'cart.php?deleteitem=$pro_id' class='btn btn-primary height-auto btn-sm'>X</a></td>

                            </tr>
                        ";

                        
                         if(isset($_POST[$name_for_qty])){
                          $qty = $_POST[$name_for_qty];
                          global $con;
                          $ip = getIp();
                          $update_qty = mysqli_query($con, "update cart set qty='$qty' where p_id = '$pro_id' and ip_add='$ip'");
                          $pro_qty = $qty;
                          } 
                    }

                    if(isset($_POST['updatecart'])){
                      global $con;
                      $ip = getIp();
                      $qty = $_POST[$name_for_qty];

                      $run_cart_update = mysqli_query($con, "select * from cart where ip_add='$ip'");
                      while($row_run_cart_update=mysqli_fetch_array($run_cart_update)){
                          global $con;
                          $p_id_up = $row_run_cart_update['p_id'];
                          $name_for_qty1 = 'a'.$p_id_up;
                          $qty = $_POST[$name_for_qty1];
                          $update_qty = mysqli_query($con, "update cart set qty='$qty' where p_id='$p_id_up'"); 
                      }
                    }

                  ?>

                  <div class="col-md-6">
                    <div class="row mb-5">
                      <div class="col-md-6 mb-3 mb-md-0" >
                        <button type="submit" class="btn btn-primary btn-sm btn-block" name="updatecart" href="cart.php">Update Cart</button> 
                      </div>
                    </div>
                  </div>

                </form>
                  
                </tbody>
              </table>
            </div>
          </form>
        </div>


        <div class="row">
          <div class="col-md-6">
            <div class="row mb-5">

              <!-- <div class="col-md-6 mb-3 mb-md-0" >
                <button form="myform" type="submit" class="btn btn-primary btn-sm btn-block" name="updatecart" href="cart.php">Update Cart</button> 
              </div> -->

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