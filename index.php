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

    <!-- <div class="site-section">
      <div class="container">
        <div class="title-section mb-5">
          <h2 class="text-uppercase"><span class="d-block">Discover</span> The Collections</h2>
        </div>
        <div class="row align-items-stretch">
          <div class="col-lg-8">
            <div class="product-item sm-height full-height bg-gray">
              <a href="#" class="product-category">Women <span>25 items</span></a>
              <img src="images/model_4.png" alt="Image" class="img-fluid">
            </div>
          </div>
          <div class="col-lg-4">
            <div class="product-item sm-height bg-gray mb-4">
              <a href="#" class="product-category">Men <span>25 items</span></a>
              <img src="images/model_5.png" alt="Image" class="img-fluid">
            </div>

            <div class="product-item sm-height bg-gray">
              <a href="#" class="product-category">Shoes <span>25 items</span></a>
              <img src="images/model_6.png" alt="Image" class="img-fluid">
            </div>
          </div>
        </div>
      </div>
    </div> -->


    
    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="title-section mb-5 col-12">
            <h2 class="text-uppercase">Top Products</h2>
          </div>
        </div>
        <div class="row">
          <!-- <div class="col-lg-4 col-md-6 item-entry mb-4">
            <a href="#" class="product-item md-height bg-gray d-block">
              <img src="images/prod_2.png" alt="Image" class="img-fluid">
            </a>
            <h2 class="item-title"><a href="shop-single.php">Gray Shoe</a></h2>
            <strong class="item-price">$20.00</strong>
          </div> -->  
          <?php getPro(); ?>
          <?php getMoviePro(); ?>
          <?php getTVShowPro(); ?>
          <?php getCatPro(); ?>

          <!-- <div class="col-lg-4 col-md-6 item-entry mb-4">
            <a href="#" class="product-item md-height bg-gray d-block">
              <img src="images/prod_3.png" alt="Image" class="img-fluid">
            </a>
            <h2 class="item-title"><a href="shop-single.php">Blue Shoe High Heels</a></h2>
            <strong class="item-price"><del>$46.00</del> $28.00</strong>
          </div>

          <div class="col-lg-4 col-md-6 item-entry mb-4">
            <a href="#" class="product-item md-height bg-gray d-block">
              <img src="images/model_5.png" alt="Image" class="img-fluid">
            </a>
            <h2 class="item-title"><a href="shop-single.php">Denim Jacket</a></h2>
            <strong class="item-price"><del>$46.00</del> $28.00</strong>

            <div class="star-rating">
              <span class="icon-star2 text-warning"></span>
              <span class="icon-star2 text-warning"></span>
              <span class="icon-star2 text-warning"></span>
              <span class="icon-star2 text-warning"></span>
              <span class="icon-star2 text-warning"></span>
            </div>

          </div>
          <div class="col-lg-4 col-md-6 item-entry mb-4">
            <a href="#" class="product-item md-height bg-gray d-block">
              <img src="images/prod_1.png" alt="Image" class="img-fluid">
            </a>
            <h2 class="item-title"><a href="shop-single.php">Leather Green Bag</a></h2>
            <strong class="item-price"><del>$46.00</del> $28.00</strong>
            <div class="star-rating">
              <span class="icon-star2 text-warning"></span>
              <span class="icon-star2 text-warning"></span>
              <span class="icon-star2 text-warning"></span>
              <span class="icon-star2 text-warning"></span>
              <span class="icon-star2 text-warning"></span>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 item-entry mb-4">
            <a href="#" class="product-item md-height bg-gray d-block">
              <img src="images/model_1.png" alt="Image" class="img-fluid">
            </a>
            <h2 class="item-title"><a href="shop-single.php">Smooth Cloth</a></h2>
            <strong class="item-price"><del>$46.00</del> $28.00</strong>
          </div>
          <div class="col-lg-4 col-md-6 item-entry mb-4">
            <a href="#" class="product-item md-height bg-gray d-block">
              <img src="images/model_7.png" alt="Image" class="img-fluid">
            </a>
            <h2 class="item-title"><a href="shop-single.php">Yellow Jacket</a></h2>
            <strong class="item-price">$58.00</strong>
          </div> -->

        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="title-section text-center mb-5 col-12">
            <h2 class="text-uppercase">Most Rated</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 block-3">
            <div class="nonloop-block-3 owl-carousel">
              <div class="item">
                <div class="item-entry">
                  <a href="#" class="product-item md-height bg-gray d-block">
                    <img src="images/model_1.png" alt="Image" class="img-fluid">
                  </a>
                  <h2 class="item-title"><a href="#">Smooth Cloth</a></h2>
                  <strong class="item-price"><del>$46.00</del> $28.00</strong>
                  <div class="star-rating">
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="item-entry">
                  <a href="#" class="product-item md-height bg-gray d-block">
                    <img src="images/prod_3.png" alt="Image" class="img-fluid">
                  </a>
                  <h2 class="item-title"><a href="#">Blue Shoe High Heels</a></h2>
                  <strong class="item-price"><del>$46.00</del> $28.00</strong>

                  <div class="star-rating">
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="item-entry">
                  <a href="#" class="product-item md-height bg-gray d-block">
                    <img src="images/model_5.png" alt="Image" class="img-fluid">
                  </a>
                  <h2 class="item-title"><a href="#">Denim Jacket</a></h2>
                  <strong class="item-price"><del>$46.00</del> $28.00</strong>

                  <div class="star-rating">
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                  </div>

                </div>
              </div>
              <div class="item">
                <div class="item-entry">
                  <a href="#" class="product-item md-height bg-gray d-block">
                    <img src="images/prod_1.png" alt="Image" class="img-fluid">
                  </a>
                  <h2 class="item-title"><a href="#">Leather Green Bag</a></h2>
                  <strong class="item-price"><del>$46.00</del> $28.00</strong>
                  <div class="star-rating">
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="item-entry">
                  <a href="#" class="product-item md-height bg-gray d-block">
                    <img src="images/model_7.png" alt="Image" class="img-fluid">
                  </a>
                  <h2 class="item-title"><a href="#">Yellow Jacket</a></h2>
                  <strong class="item-price">$58.00</strong>
                  <div class="star-rating">
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                  </div>
                </div>
              </div>

            </div>
          </div>
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