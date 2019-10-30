<!DOCTYPE>
<?php 
session_start();
include("functions.php");?>
<html lang="en">
<?php include("header.php"); ?>
    
    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">/</span> <a href="cart.php">Cart</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Customer Login</strong></div>
        </div>
      </div>
    </div>


    <!-- <div class="row"> -->
    <div class="site-section" align="center">      <!-- 14 to 187-->
      <div class="container"> 

          <div class="col-md-6 mb-5 mb-md-0">
            <h2 class="h3 mb-3 text-black">Login</h2>
            <div class="p-3 p-lg-5 border">

              <form method="POST" action="">

                <div class="form-group">
                    <label for="email" class="text-black">Email Address <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="email" name="email">
                </div>

                <div class="form-group">
                  <label for="c_account_password" class="text-black">Account Password</label>
                  <input type="password" class="form-control" id="pass" name="pass" placeholder="">
                </div>

                <div align="center" class="form-group">
                  <input type="submit" class="form-control" name="login" value="Login" />
                </div>

              </form>
              <h3 style="float:left; padding-left:20px; "><a href="customer_register.php" style="text-decoration:none;">New? Register Here</a></h3>

            </div>
          </div>
        <!-- </div> -->
        <!-- </form> -->
      </div>
    </div>



    <?php 
        if(isset($_POST['login'])){
        
          $c_email = $_POST['email'];
          $c_pass = $_POST['pass'];
          
          $sel_c = "select * from customers where c_pass='$c_pass' AND c_email='$c_email'";
          
          $run_c = mysqli_query($con, $sel_c);
          
          $check_customer = mysqli_num_rows($run_c); 
          
          if($check_customer==0){
          
          echo "<script>alert('Password or email is incorrect, plz try again!')</script>";
          exit();
          }
          // else{
          //   $_SESSION['customer_email']=$c_email; 
            
          //   echo "<script>alert('You logged in successfully, Thanks!')</script>";
          //   echo "<script>window.open('checkout.php','_self')</script>";
          // }

          $ip = getIp(); 
          
          $sel_cart = "select * from cart where ip_add='$ip'";
          
          $run_cart = mysqli_query($con, $sel_cart); 
          
          $check_cart = mysqli_num_rows($run_cart); 
          
          if($check_customer>0 AND $check_cart==0){
          
          $_SESSION['customer_email']=$c_email; 
          
          echo "<script>alert('You logged in successfully, Thanks!')</script>";
          echo "<script>window.open('index.php','_self')</script>";
          
          }
          else {
          $_SESSION['customer_email']=$c_email; 
          
          echo "<script>alert('You logged in successfully, Thanks!')</script>";
          echo "<script>window.open('checkout.php','_self')</script>";
          
          
          }
        }
        
  
  ?>

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