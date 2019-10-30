<!DOCTYPE>
<?php 
session_start();
include("functions.php");?>
<html lang="en">
<?php include("header.php"); ?>
    
    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">/</span> <a href="cart.php">Cart</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Customer Register</strong></div>
        </div>
      </div>
    </div>


    <div class="site-section" align="center">
      <div class="container">
        
        <!-- <div class="row"> -->
          <div class="col-md-6 mb-5 mb-md-0">
            <h2 class="h3 mb-3 text-black">Register</h2>
            
            <div class="p-3 p-lg-5 border">
            <form method="POST" action="">
              <div class="form-group">
                <label for="c_country" class="text-black">Country <span class="text-danger">*</span></label>
                <select id="c_country" class="form-control" name="c_country">
                  <option value="">Select a country</option>    
                  <option value="bangladesh">bangladesh</option>    
                  <option value="Algeria">Algeria</option>    
                  <option value="Afghanistan">Afghanistan</option>    
                  <option value="Ghana">Ghana</option>    
                  <option value="Albania">Albania</option>    
                  <option value="Bahrain">Bahrain</option>    
                  <option value="Colombia">Colombia</option>    
                  <option value="Dominican Republic">Dominican Republic</option>    
                </select>
              </div>
              <div class="form-group row">
                <div class="col-md-6">
                  <label for="c_first_name" class="text-black">First Name <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_fname" name="c_first_name">
                </div>
                <div class="col-md-6">
                  <label for="c_last_name" class="text-black">Last Name <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_lname" name="c_last_name">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <label for="c_address" class="text-black">Address <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_address" name="c_address" placeholder="Street address">
                </div>
              </div>

              <!-- <div class="form-group">
                <input type="text" class="form-control" placeholder="Apartment, suite, unit etc. (optional)">
              </div> -->

              <div class="form-group row">
                <div class="col-md-6">
                  <label for="c_state" class="text-black">State / Country <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_state" name="c_state">
                </div>
                <div class="col-md-6">
                  <label for="c_zip" class="text-black">Posta / Zip <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_zip" name="c_zip">
                </div>
              </div>

              <div class="form-group row mb-5">
                <div class="col-md-6">
                  <label for="c_email" class="text-black">Email Address <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_email" name="c_email">
                </div>
                <div class="col-md-6">
                  <label for="c_phone" class="text-black">Phone <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_phone" name="c_phone" placeholder="Phone Number">
                </div>
              </div>

              <div class="form-group">
                <label for="c_pass" class="text-black">Password</label>
                <input type="password" class="form-control" id="c_pass" name="c_pass">
              </div>

              <div align="center" class="form-group">
                  <input type="submit" class="form-control" name="register" value="Register" />
              </div>

            </form>

            </div>
          
          </div>
        <!-- </div> -->
        <!-- </form> -->
      </div>
    </div>

      <?php 
        if(isset($_POST['register'])){
          $ip = getIp();
          $c_country = $_POST['c_country'];
          $c_first_name = $_POST['c_first_name'];
          $c_last_name = $_POST['c_last_name'];
          $c_address = $_POST['c_address'];
          $c_state = $_POST['c_state'];
          $c_zip = $_POST['c_zip'];
          $c_email = $_POST['c_email'];
          $c_phone = $_POST['c_phone'];
          $c_pass = $_POST['c_pass'];
          // $c_image = $_FILES['c_image']['name'];
          // $c_image_tmp = $_FILES['c_image']['tmp_name'];
          
          // move_uploaded_file($c_image_tmp,"customer/customer_images/$c_image");
          
           $insert_c = "insert into customers values ('$ip','$c_country','$c_first_name','$c_last_name','$c_address','$c_state','$c_zip','$c_email','$c_phone','$c_pass')";
        
          $run_c = mysqli_query($con, $insert_c); 
          
          $sel_cart = "select * from cart where ip_add='$ip'";
          
          $run_cart = mysqli_query($con, $sel_cart); 
          
          $check_cart = mysqli_num_rows($run_cart); 
          
          if($check_cart==0){
          
          $_SESSION['customer_email']=$c_email; 
          
          echo "<script>alert('Account has been created successfully, Thanks!')</script>";
          echo "<script>window.open('index.php','_self')</script>";
          
          }
          else {
          
          $_SESSION['customer_email']=$c_email; 
          
          echo "<script>alert('Account has been created successfully, Thanks!')</script>";
          
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