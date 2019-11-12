<?php 
$con = mysqli_connect("localhost","root","","wt");

if (mysqli_connect_errno())
  {
  echo "The Connection was not established: " . mysqli_connect_error();
  }

function getMovies(){
    global $con;
    $query = "SELECT * FROM `genre` WHERE `movie_cat` ='movie'";
    $movies = mysqli_query($con, $query);
    while($row = mysqli_fetch_array($movies))
    {
    $movie_id = $row['movie_id'];
    $movie_name = $row['movie_name'];
    $movie_cat = $row['movie_cat'];
    echo "<li><a href='index.php?movie=$movie_name'>".$movie_name."</a></li>";
    }
}

function getTVShows(){
    global $con;
    $query = "SELECT * FROM `genre` WHERE `movie_cat` ='tv show'";
    $movies = mysqli_query($con, $query);
    while($row = mysqli_fetch_array($movies))
    {
        $movie_id = $row['movie_id'];
        $movie_name = $row['movie_name'];
        $movie_cat = $row['movie_cat'];
        echo "<li><a href='index.php?series=$movie_name'>".$movie_name."</a></li>";
    }
}

function getCats(){
    global $con;
    $query = "SELECT * FROM `catalogues`";
    $cats = mysqli_query($con, $query);
    while($row = mysqli_fetch_array($cats))
    {
    $cat_id = $row['cat_id'];
    $catalog = $row['catalog'];
    echo "<li><a href='index.php?catalog=$catalog'>".$catalog."</a></li>";
    }
}

function getPro(){

    if(!isset($_GET['movie'])){
        if(!isset($_GET['series'])){
            if(!isset($_GET['catalog'])){

    global $con; 
    
    $get_pro = "select * from products";

    $run_pro = mysqli_query($con, $get_pro); 
    
    while($row_pro=mysqli_fetch_array($run_pro)){
    
        $pro_id = $row_pro['pro_id'];
        $pro_genre = $row_pro['pro_genre'];
        $pro_catalog = $row_pro['pro_catalog'];
        $pro_title = $row_pro['pro_title'];
        $pro_price = $row_pro['pro_price'];
        $pro_image = $row_pro['pro_image'];

        echo "
            <div class='col-lg-4 col-md-6 item-entry mb-4'>
                <a href='shop-single.php?product_id=$pro_id' class='product-item md-height bg-gray d-block'>
                  <img src='images/$pro_image' alt='Image' class='img-fluid'>
                </a>
                <h2 class='item-title'><a href='shop-single.php?product_id=$pro_id'>$pro_title</a></h2>
                <strong class='item-price'>Rs. $pro_price</strong>
            </div>

        ";
    
    }
    }
}
}

}


function getMoviePro(){

    if(isset($_GET['movie'])){

    global $con; 

    $movie_name = $_GET['movie'];
    
    $get_pro = "select * from products where pro_genre = '$movie_name';";

    $run_pro = mysqli_query($con, $get_pro);
    
    while($row_pro=mysqli_fetch_array($run_pro)){
    
        $pro_id = $row_pro['pro_id'];
        $pro_genre = $row_pro['pro_genre'];
        $pro_catalog = $row_pro['pro_catalog'];
        $pro_title = $row_pro['pro_title'];
        $pro_price = $row_pro['pro_price'];
        $pro_image = $row_pro['pro_image'];

        echo "
            <div class='col-lg-4 col-md-6 item-entry mb-4'>
                <a href='shop-single.php?product_id=$pro_id' class='product-item md-height bg-gray d-block'>
                  <img src='images/$pro_image' alt='Image' class='img-fluid'>
                </a>
                <h2 class='item-title'><a href='shop-single.php?product_id=$pro_id'>$pro_title</a></h2>
                <strong class='item-price'>Rs. $pro_price</strong>
            </div>

        ";
    
    }
    

}

}

function getTVShowPro(){

    if(isset($_GET['series'])){

    global $con; 
    $series_name = $_GET['series'];

    $get_pro = "select * from products where pro_genre = '$series_name';";

    $run_pro = mysqli_query($con, $get_pro);
    
    while($row_pro=mysqli_fetch_array($run_pro)){
    
        $pro_id = $row_pro['pro_id'];
        $pro_genre = $row_pro['pro_genre'];
        $pro_catalog = $row_pro['pro_catalog'];
        $pro_title = $row_pro['pro_title'];
        $pro_price = $row_pro['pro_price'];
        $pro_image = $row_pro['pro_image'];

        echo "
            <div class='col-lg-4 col-md-6 item-entry mb-4'>
                <a href='shop-single.php?product_id=$pro_id' class='product-item md-height bg-gray d-block'>
                  <img src='images/$pro_image' alt='Image' class='img-fluid'>
                </a>
                <h2 class='item-title'><a href='shop-single.php?product_id=$pro_id'>$pro_title</a></h2>
                <strong class='item-price'>Rs. $pro_price</strong>
            </div>

        ";
    
    }
    

}

}

function getCatPro(){

    if(isset($_GET['catalog'])){

    global $con; 
    $cat_name = $_GET['catalog'];
    
    $get_pro = "select * from products where pro_catalog = '$cat_name'";

    $run_pro = mysqli_query($con, $get_pro);
    
    while($row_pro=mysqli_fetch_array($run_pro)){
    
        $pro_id = $row_pro['pro_id'];
        $pro_genre = $row_pro['pro_genre'];
        $pro_catalog = $row_pro['pro_catalog'];
        $pro_title = $row_pro['pro_title'];
        $pro_price = $row_pro['pro_price'];
        $pro_image = $row_pro['pro_image'];

        echo "
            <div class='col-lg-4 col-md-6 item-entry mb-4'>
                <a href='shop-single.php?product_id=$pro_id' class='product-item md-height bg-gray d-block'>
                  <img src='images/$pro_image' alt='Image' class='img-fluid'>
                </a>
                <h2 class='item-title'><a href='shop-single.php?product_id=$pro_id'>$pro_title</a></h2>
                <strong class='item-price'>Rs. $pro_price</strong>
            </div>

        ";
    
    }
    

}

}


function getIp() {
    $ip = $_SERVER['REMOTE_ADDR'];
 
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
 
    return $ip;
}



function count_cart(){

  global $con;
  $cart_elements = mysqli_query($con, "select * from cart;");
  $cnt = 0;
  while ($my_cart_row = mysqli_fetch_array($cart_elements)) {
    $cnt++;
  }
  return $cnt;
}

?>