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

          <div class="col-md-6 mb-5 mb-md-0">
            <h2 class="h3 mb-3 text-black">Register</h2>
            
            <div class="p-3 p-lg-5 border">
            <form method="POST" action="">
              <div class="form-group">
                <label for="c_country" class="text-black">Country <span class="text-danger">*</span></label>
                <select id="c_country" class="form-control" name="c_country">
                  <option value="">Select a country</option>    
                  <option value="Afghanistan">Afghanistan</option>
                  <option value="Albania">Albania</option>
                  <option value="Algeria">Algeria</option>
                  <option value="Andorra">Andorra</option>
                  <option value="Angola">Angola</option>
                  <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                  <option value="Argentina">Argentina</option>
                  <option value="Armenia">Armenia</option>
                  <option value="Australia">Australia</option>
                  <option value="Austria">Austria</option>
                  <option value="Azerbaijan">Azerbaijan</option>
                  <option value="The Bahamas">The Bahamas</option>
                  <option value="Bahrain">Bahrain</option>
                  <option value="Bangladesh">Bangladesh</option>
                  <option value="Barbados">Barbados</option>
                  <option value="Belarus">Belarus</option>
                  <option value="Belgium">Belgium</option>
                  <option value="Belize">Belize</option>
                  <option value="Benin">Benin</option>
                  <option value="Bhutan">Bhutan</option>
                  <option value="Bolivia">Bolivia</option>
                  <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                  <option value="Botswana">Botswana</option>
                  <option value="Brazil">Brazil</option>
                  <option value="Brunei">Brunei</option>
                  <option value="Bulgaria">Bulgaria</option>
                  <option value="Burkina Faso">Burkina Faso</option>
                  <option value="Burundi">Burundi</option>
                  <option value="Cabo Verde">Cabo Verde</option>
                  <option value="Cambodia">Cambodia</option>
                  <option value="Cameroon">Cameroon</option>
                  <option value="Canada">Canada</option>
                  <option value="Central African Republic">Central African Republic</option>
                  <option value="Chad">Chad</option>
                  <option value="Chile">Chile</option>
                  <option value="China">China</option>
                  <option value="Colombia">Colombia</option>
                  <option value="Comoros">Comoros</option>
                  <option value="Congo, Democratic Republic of the">Congo, Democratic Republic of the</option>
                  <option value="Congo, Republic of the">Congo, Republic of the</option>
                  <option value="Costa Rica">Costa Rica</option>
                  <option value="Côte d’Ivoire">Côte d’Ivoire</option>
                  <option value="Croatia">Croatia</option>
                  <option value="Cuba">Cuba</option>
                  <option value="Cyprus">Cyprus</option>
                  <option value="Czech Republic">Czech Republic</option>
                  <option value="Denmark">Denmark</option>
                  <option value="Djibouti">Djibouti</option>
                  <option value="Dominica">Dominica</option>
                  <option value="Dominican Republic">Dominican Republic</option>
                  <option value="East Timor (Timor-Leste)">East Timor (Timor-Leste)</option>
                  <option value="Ecuador">Ecuador</option>
                  <option value="Egypt">Egypt</option>
                  <option value="El Salvador">El Salvador</option>
                  <option value="Equatorial Guinea">Equatorial Guinea</option>
                  <option value="Eritrea">Eritrea</option>
                  <option value="Estonia">Estonia</option>
                  <option value="Eswatini">Eswatini</option>
                  <option value="Ethiopia">Ethiopia</option>
                  <option value="Fiji">Fiji</option>
                  <option value="Finland">Finland</option>
                  <option value="France">France</option>
                  <option value="Gabon">Gabon</option>
                  <option value="The Gambia">The Gambia</option>
                  <option value="Georgia">Georgia</option>
                  <option value="Germany">Germany</option>
                  <option value="Ghana">Ghana</option>
                  <option value="Greece">Greece</option>
                  <option value="Grenada">Grenada</option>
                  <option value="Guatemala">Guatemala</option>
                  <option value="Guinea">Guinea</option>
                  <option value="Guinea-Bissau">Guinea-Bissau</option>
                  <option value="Guyana">Guyana</option>
                  <option value="Haiti">Haiti</option>
                  <option value="Honduras">Honduras</option>
                  <option value="Hungary">Hungary</option>
                  <option value="Iceland">Iceland</option>
                  <option value="India">India</option>
                  <option value="Indonesia">Indonesia</option>
                  <option value="Iran">Iran</option>
                  <option value="Iraq">Iraq</option>
                  <option value="Ireland">Ireland</option>
                  <option value="Israel">Israel</option>
                  <option value="Italy">Italy</option>
                  <option value="Jamaica">Jamaica</option>
                  <option value="Japan">Japan</option>
                  <option value="Jordan">Jordan</option>
                  <option value="Kazakhstan">Kazakhstan</option>
                  <option value="Kenya">Kenya</option>
                  <option value="Kiribati">Kiribati</option>
                  <option value="Korea, North">Korea, North</option>
                  <option value="Korea, South">Korea, South</option>
                  <option value="Kosovo">Kosovo</option>
                  <option value="Kuwait">Kuwait</option>
                  <option value="Kyrgyzstan">Kyrgyzstan</option>
                  <option value="Laos">Laos</option>
                  <option value="Latvia">Latvia</option>
                  <option value="Lebanon">Lebanon</option>
                  <option value="Lesotho">Lesotho</option>
                  <option value="Liberia">Liberia</option>
                  <option value="Libya">Libya</option>
                  <option value="Liechtenstein">Liechtenstein</option>
                  <option value="Lithuania">Lithuania</option>
                  <option value="Luxembourg">Luxembourg</option>
                  <option value="Madagascar">Madagascar</option>
                  <option value="Malawi">Malawi</option>
                  <option value="Malaysia">Malaysia</option>
                  <option value="Maldives">Maldives</option>
                  <option value="Mali">Mali</option>
                  <option value="Malta">Malta</option>
                  <option value="Marshall Islands">Marshall Islands</option>
                  <option value="Mauritania">Mauritania</option>
                  <option value="Mauritius">Mauritius</option>
                  <option value="Mexico">Mexico</option>
                  <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                  <option value="Moldova">Moldova</option>
                  <option value="Monaco">Monaco</option>
                  <option value="Mongolia">Mongolia</option>
                  <option value="Montenegro">Montenegro</option>
                  <option value="Morocco">Morocco</option>
                  <option value="Mozambique">Mozambique</option>
                  <option value="Myanmar (Burma)">Myanmar (Burma)</option>
                  <option value="Namibia">Namibia</option>
                  <option value="Nauru">Nauru</option>
                  <option value="Nepal">Nepal</option>
                  <option value="Netherlands">Netherlands</option>
                  <option value="New Zealand">New Zealand</option>
                  <option value="Nicaragua">Nicaragua</option>
                  <option value="Niger">Niger</option>
                  <option value="Nigeria">Nigeria</option>
                  <option value="North Macedonia">North Macedonia</option>
                  <option value="Norway">Norway</option>
                  <option value="Oman">Oman</option>
                  <option value="Pakistan">Pakistan</option>
                  <option value="Palau">Palau</option>
                  <option value="Panama">Panama</option>
                  <option value="Papua New Guinea">Papua New Guinea</option>
                  <option value="Paraguay">Paraguay</option>
                  <option value="Peru">Peru</option>
                  <option value="Philippines">Philippines</option>
                  <option value="Poland">Poland</option>
                  <option value="Portugal">Portugal</option>
                  <option value="Qatar">Qatar</option>
                  <option value="Romania">Romania</option>
                  <option value="Russia">Russia</option>
                  <option value="Rwanda">Rwanda</option>
                  <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                  <option value="Saint Lucia">Saint Lucia</option>
                  <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                  <option value="Samoa">Samoa</option>
                  <option value="San Marino">San Marino</option>
                  <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                  <option value="Saudi Arabia">Saudi Arabia</option>
                  <option value="Senegal">Senegal</option>
                  <option value="Serbia">Serbia</option>
                  <option value="Seychelles">Seychelles</option>
                  <option value="Sierra Leone">Sierra Leone</option>
                  <option value="Singapore">Singapore</option>
                  <option value="Slovakia">Slovakia</option>
                  <option value="Slovenia">Slovenia</option>
                  <option value="Solomon Islands">Solomon Islands</option>
                  <option value="Somalia">Somalia</option>
                  <option value="South Africa">South Africa</option>
                  <option value="Spain">Spain</option>
                  <option value="Sri Lanka">Sri Lanka</option>
                  <option value="Sudan">Sudan</option>
                  <option value="Sudan, South">Sudan, South</option>
                  <option value="Suriname">Suriname</option>
                  <option value="Sweden">Sweden</option>
                  <option value="Switzerland">Switzerland</option>
                  <option value="Syria">Syria</option>
                  <option value="Taiwan">Taiwan</option>
                  <option value="Tajikistan">Tajikistan</option>
                  <option value="Tanzania">Tanzania</option>
                  <option value="Thailand">Thailand</option>
                  <option value="Togo">Togo</option>
                  <option value="Tonga">Tonga</option>
                  <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                  <option value="Tunisia">Tunisia</option>
                  <option value="Turkey">Turkey</option>
                  <option value="Turkmenistan">Turkmenistan</option>
                  <option value="Tuvalu">Tuvalu</option>
                  <option value="Uganda">Uganda</option>
                  <option value="Ukraine">Ukraine</option>
                  <option value="United Arab Emirates">United Arab Emirates</option>
                  <option value="United Kingdom">United Kingdom</option>
                  <option value="United States">United States</option>
                  <option value="Uruguay">Uruguay</option>
                  <option value="Uzbekistan">Uzbekistan</option>
                  <option value="Vanuatu">Vanuatu</option>
                  <option value="Vatican City">Vatican City</option>
                  <option value="Venezuela">Venezuela</option>
                  <option value="Vietnam">Vietnam</option>
                  <option value="Yemen">Yemen</option>
                  <option value="Zambia">Zambia</option>
                  <option value="Zimbabwe">Zimbabwe</option>    
                </select>
              </div>
              <div class="form-group row">
                <div class="col-md-6">
                  <label for="c_first_name" class="text-black">First Name <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_fname" name="c_first_name" required>
                </div>
                <div class="col-md-6">
                  <label for="c_last_name" class="text-black">Last Name <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_lname" name="c_last_name" required>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <label for="c_address" class="text-black">Address <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_address" name="c_address" placeholder="Street address" required>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-6">
                  <label for="c_state" class="text-black">State<span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_state" name="c_state" required>
                </div>
                <div class="col-md-6">
                  <label for="c_zip" class="text-black">Postal / Zip Code<span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_zip" name="c_zip" required>
                </div>
              </div>

              <div class="form-group row mb-5">
                <div class="col-md-6">
                  <label for="c_email" class="text-black">Email Address<span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_email" name="c_email" required>
                </div>
                <div class="col-md-6">
                  <label for="c_phone" class="text-black">Phone<span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_phone" name="c_phone" placeholder="Phone Number" required>
                </div>
              </div>

              <div class="form-group">
                <label for="c_pass" class="text-black">Password</label>
                <input type="password" class="form-control" id="c_pass" name="c_pass" required>
              </div>

              <div align="center" class="form-group">
                  <input type="submit" class="form-control" name="register" value="Register" />
              </div>

            </form>

            </div>
          
          </div>

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
          
          //validations
        if(empty($c_first_name)){
          echo "Enter first name";
        }
        elseif(!preg_match("/^[a-zA-Z ]*$/", $c_first_name)){
        echo "No special characters allowed!";
        }
        if(empty($c_last_name)){
          echo "Enter last name";
        }
        elseif(!preg_match("/^[a-zA-Z ]*$/", $c_last_name)){
        echo "No special characters allowed!";
        }
        if(empty($c_state)){
          echo "Enter last name";
        }
        elseif(!preg_match("/^[a-zA-Z ]*$/", $c_state)){
        echo "No special characters allowed!";
        }
        if(empty($c_country)){
          echo "Enter country";
        }
        if(empty($c_address)){
          echo "Enter address";
        }
        if (!filter_var($c_email, FILTER_VALIDATE_EMAIL)) {
          echo "Invalid email format";
        }if(empty($c_pass)){
          echo "Enter password";
        }
        if(empty($c_phone)){
        echo "Enter mobile number";
        }
        elseif(!preg_match("/^[0-9 ]{10}$/", $c_phone)){
        echo "Only 10 digits to be used!";
        }
        if(empty($c_zip)){
        $merr = "Enter zipcode";
        $c++;
        }
        elseif(!preg_match("/^[0-9 ]{10}$/", $_POST['mno'])){
        $merr = "Only 10 digits to be used!";
        $c++;
        }

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