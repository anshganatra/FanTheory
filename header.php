<!DOCTYPE>

<head>
    <title>FanTheory &mdash; One-Stop Fan Merchandising</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

    <?php

      $cnt = count_cart();

    ?>

  <div class="site-wrap">
    <div class="site-navbar bg-white py-2">
      <div class="search-wrap">
        <div class="container">
          <a href="#" class="search-close js-search-close"><span class="icon-close2"></span></a>
          <form action="#" method="post">
            <input type="text" class="form-control" placeholder="Search keyword and hit enter...">
          </form>  
        </div>
      </div>
<div class="container">
        <div class="d-flex align-items-center justify-content-between">
          <div class="logo">
            <div class="site-logo">
              <a href="index.php" class="js-logo-clone">FanTheory</a>
            </div>
          </div>
          <div class="main-nav d-none d-lg-block">
            <nav class="site-navigation text-right text-md-center" role="navigation">
              <ul class="site-menu js-clone-nav d-none d-lg-block">
                <li class="active">
                  <a href="index.php">Home</a>
                </li>
                <li class="has-children">
                  <a href="index.php">Shop</a>
                  <ul class="dropdown">
                    <li class="has-children">
                      <a href="#">Movies</a>
                      <ul class="dropdown">
                        <?php
                        getMovies();
                        ?>
                      </ul>
                    </li>
                    <li class="has-children">
                      <a href="#">TV Shows</a>
                      <ul class="dropdown">
                          <?php
                          getTVShows();   
                          ?>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li class="has-children">
                  <a href="#">Catalogue</a>
                  <ul class="dropdown">
                    <?php
                    getCats();                  
                    ?>
                  </ul>
                </li>
                <?php 
                    if(!isset($_SESSION['customer_email'])){
                    echo "<li><a href='customer_login.php' style='color:orange;'>Login</a></li>";
                    }
                    else {
                      $email = $_SESSION['customer_email'];
                    echo "<li><a href='logout.php' style='color:blue;'>Logout</a></li>";
                    echo "<li><a style='color:green;'>Hello ".$_SESSION['customer_email']."!</a></li>";
                    }
                ?>
              </ul>
            </nav>
          </div>
          <div class="icons">
            <a href="cart.php" class="icons-btn d-inline-block bag">
              <span class="icon-shopping-bag"></span>
              <span class="number"><?php echo count_cart();?></span>
            </a>
            <a href="#" class="site-menu-toggle js-menu-toggle ml-3 d-inline-block d-lg-none"><span class="icon-menu"></span></a>
          </div>
        </div>
      </div>
</div>