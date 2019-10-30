<!DOCTYPE>
<?php 
session_start();
include("functions.php");?>
<html lang="en">
<?php include("header.php"); ?>
    
    <div class="site-blocks-cover" data-aos="fade">
      <div class="container">
        <div class="row">
          <div class="col-md-6 ml-auto order-md-2 align-self-start">
            <div class="site-block-cover-content">
            <h2 class="sub-title">#New Winter Collection 2019 #Winter is coming</h2>
            <h1>Merch Sales</h1>
            <p><a href="#" class="btn btn-black rounded-0">Shop Now</a></p>
            </div>
          </div>
          <div class="col-md-6 order-1 align-self-end">
            <img src="images/model_3(new).jpg" alt="Image" class="img-fluid">
          </div>
        </div>
      </div>
    </div> 
    
    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="title-section mb-5 col-12">
            <h2 class="text-uppercase">Top Products</h2>
          </div>
        </div>
        <div class="row">

          <?php getPro(); ?>
          <?php getMoviePro(); ?>
          <?php getTVShowPro(); ?>
          <?php getCatPro(); ?>

        </div>
      </div>
    </div>

    <div class="site-blocks-cover inner-page py-5" data-aos="fade">
      <div class="container">
        <div class="row">
          <div class="col-md-6 ml-auto order-md-2 align-self-start">
            <div class="site-block-cover-content">
            <h2 class="sub-title">#New Winter Collection 2019</h2>
            <h1>New Brands</h1>
            <p><a href="#" class="btn btn-black rounded-0">Shop Now</a></p>
            </div>
          </div>
          <div class="col-md-6 order-1 align-self-end">
            <img src="images/model_6(new).png" alt="Image" class="img-fluid">
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