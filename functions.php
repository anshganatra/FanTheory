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
    
    // $get_pro = "select * from products order by RAND() LIMIT 0,6";
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
                <a href='#' class='product-item md-height bg-gray d-block'>
                  <img src='images/$pro_image' alt='Image' class='img-fluid'>
                </a>
                <h2 class='item-title'><a href='shop-single.php?product_id=$pro_id'>$pro_title</a></h2>
                <strong class='item-price'>$ $pro_price</strong>
            </div>

        ";
    
        // echo "
        //         <div id='single_product'>
                
        //             <h3>$pro_title</h3>
                    
        //             <img src='admin_area/product_images/$pro_image' width='180' height='180' />
                    
        //             <p><b> Price: $ $pro_price </b></p>
                    
        //             <a href='details.php?pro_id=$pro_id' style='float:left;'>Details</a>
                    
        //             <a href='index.php?add_cart=$pro_id'><button style='float:right'>Add to Cart</button></a>
                
        //         </div>
        
        
        // ";
    
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
    // if (!$run_pro) {
    //     printf("Error: %s\n", mysqli_error($con));
    //     exit();
    // } 
    
    while($row_pro=mysqli_fetch_array($run_pro)){
    
        $pro_id = $row_pro['pro_id'];
        $pro_genre = $row_pro['pro_genre'];
        $pro_catalog = $row_pro['pro_catalog'];
        $pro_title = $row_pro['pro_title'];
        $pro_price = $row_pro['pro_price'];
        $pro_image = $row_pro['pro_image'];

        echo "
            <div class='col-lg-4 col-md-6 item-entry mb-4'>
                <a href='#' class='product-item md-height bg-gray d-block'>
                  <img src='images/$pro_image' alt='Image' class='img-fluid'>
                </a>
                <h2 class='item-title'><a href='shop-single.php?product_id=$pro_id'>$pro_title</a></h2>
                <strong class='item-price'>$ $pro_price</strong>
            </div>

        ";
    
        // echo "
        //         <div id='single_product'>
                
        //             <h3>$pro_title</h3>
                    
        //             <img src='admin_area/product_images/$pro_image' width='180' height='180' />
                    
        //             <p><b> Price: $ $pro_price </b></p>
                    
        //             <a href='details.php?pro_id=$pro_id' style='float:left;'>Details</a>
                    
        //             <a href='index.php?add_cart=$pro_id'><button style='float:right'>Add to Cart</button></a>
                
        //         </div>
        
        
        // ";
    
    }
    

}

}

function getTVShowPro(){

    if(isset($_GET['series'])){

    global $con; 
    $series_name = $_GET['series'];

    $get_pro = "select * from products where pro_genre = '$series_name';";

    $run_pro = mysqli_query($con, $get_pro);
    // if (!$run_pro) {
    //     printf("Error: %s\n", mysqli_error($con));
    //     exit();
    // } 
    
    while($row_pro=mysqli_fetch_array($run_pro)){
    
        $pro_id = $row_pro['pro_id'];
        $pro_genre = $row_pro['pro_genre'];
        $pro_catalog = $row_pro['pro_catalog'];
        $pro_title = $row_pro['pro_title'];
        $pro_price = $row_pro['pro_price'];
        $pro_image = $row_pro['pro_image'];

        echo "
            <div class='col-lg-4 col-md-6 item-entry mb-4'>
                <a href='#' class='product-item md-height bg-gray d-block'>
                  <img src='images/$pro_image' alt='Image' class='img-fluid'>
                </a>
                <h2 class='item-title'><a href='shop-single.php?product_id=$pro_id'>$pro_title</a></h2>
                <strong class='item-price'>$ $pro_price</strong>
            </div>

        ";
    
        // echo "
        //         <div id='single_product'>
                
        //             <h3>$pro_title</h3>
                    
        //             <img src='admin_area/product_images/$pro_image' width='180' height='180' />
                    
        //             <p><b> Price: $ $pro_price </b></p>
                    
        //             <a href='details.php?pro_id=$pro_id' style='float:left;'>Details</a>
                    
        //             <a href='index.php?add_cart=$pro_id'><button style='float:right'>Add to Cart</button></a>
                
        //         </div>
        
        
        // ";
    
    }
    

}

}

function getCatPro(){

    if(isset($_GET['catalog'])){

    global $con; 
    $cat_name = $_GET['catalog'];
    
    $get_pro = "select * from products where pro_catalog = '$cat_name'";

    $run_pro = mysqli_query($con, $get_pro);
    // if (!$run_pro) {
    //     printf("Error: %s\n", mysqli_error($con));
    //     exit();
    // } 
    
    while($row_pro=mysqli_fetch_array($run_pro)){
    
        $pro_id = $row_pro['pro_id'];
        $pro_genre = $row_pro['pro_genre'];
        $pro_catalog = $row_pro['pro_catalog'];
        $pro_title = $row_pro['pro_title'];
        $pro_price = $row_pro['pro_price'];
        $pro_image = $row_pro['pro_image'];

        echo "
            <div class='col-lg-4 col-md-6 item-entry mb-4'>
                <a href='#' class='product-item md-height bg-gray d-block'>
                  <img src='images/$pro_image' alt='Image' class='img-fluid'>
                </a>
                <h2 class='item-title'><a href='shop-single.php?product_id=$pro_id'>$pro_title</a></h2>
                <strong class='item-price'>$ $pro_price</strong>
            </div>

        ";
    
        // echo "
        //         <div id='single_product'>
                
        //             <h3>$pro_title</h3>
                    
        //             <img src='admin_area/product_images/$pro_image' width='180' height='180' />
                    
        //             <p><b> Price: $ $pro_price </b></p>
                    
        //             <a href='details.php?pro_id=$pro_id' style='float:left;'>Details</a>
                    
        //             <a href='index.php?add_cart=$pro_id'><button style='float:right'>Add to Cart</button></a>
                
        //         </div>
        
        
        // ";
    
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


function cart(){



if(isset($_GET['deleteitem'])){
    
    global $con; 
    $ip = getIp();
    $pro_id = $_GET['deleteitem'];
    $delete_pro = "delete from cart where p_id='$pro_id'";
    $run_delete = mysqli_query($con, $delete_pro);
    // if($run_delete){
    //     // echo "<script>window.open('cart.php','_self')</script>";
    //     cart();
    // }
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
      
      // echo "<script>window.open('index.php','_self')</script>";

      }      
      
  }

    global $con; 
    // $ip = getIp();

  $display_cart = "select * from cart";
  $run_display_cart = mysqli_query($con, $display_cart);

  while($row_display = mysqli_fetch_array($run_display_cart)){

      $pro_id = $row_display['p_id'];
      $pro_qty = $row_display['qty'];
      // $qty = $pro_qty;
      $product_info = "select * from products where pro_id = '$pro_id'";
      $run_product_info = mysqli_query($con, $product_info);

      // while($row_product_info = mysqli_fetch_array($run_product_info)){
      $row_product_info = mysqli_fetch_array($run_product_info);

      // $pro_id = $row_product_info['pro_id'];
      // $pro_genre = $row_product_info['pro_genre'];
      // $pro_catalog = $row_product_info['pro_catalog'];
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

        // $update_qty = mysqli_query($con, "update cart set qty='$qty' where p_id = '$pro_id'");
        // unset($_POST['pqty']);
      } 

      $sub_total = $pro_price * $pro_qty;

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

                
                    <form method='post' >
                    <div class='input-group mb-3' style='max-width: 120px;'>
                      <div class='input-group-prepend'>
                        <button class='btn btn-outline-primary js-btn-minus' type='button'>&minus;</button>
                      </div>
                      
                      <input type='number' min='0' max='100' class='form-control text-center' name=$name_for_qty id=$name_for_qty value='' placeholder='' aria-label='Example text with button addon' aria-describedby='button-addon1'>
                      
                      <div class='input-group-append'>
                        <button class='btn btn-outline-primary js-btn-plus' type='button'>&plus;</button>
                      </div>
                    </div>
                    </form>
                

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

        // $update_qty = mysqli_query($con, "update cart set qty='$qty' where p_id = '$pro_id'");
        // unset($_POST['pqty']);
      } 
    
    // if(isset($_POST['pqty'])){
    //     $qty = $_POST['pqty'];
    //     $update_qty = mysqli_query($con, "update cart set qty='$qty'");
    //     // $update_qty = mysqli_query($con, "update cart set qty='$qty' where p_id = '$pro_id'");
    //     // unset($_POST['pqty']);
    //   }   

      // if(isset($_POST['pqty'])){
        
      // }

        
  // }

  }

        // NOT WORKING
        if(isset($_POST['updatecart'])){
                global $con;
                $ip = getIp();
                $qty = $_POST[$name_for_qty];
                // $name_for_qty = 'a'.$pro_id;

                $run_cart_update = mysqli_query($con, "select * from cart where ip_add='$ip'");
                while($row_run_cart_update=mysqli_fetch_array($run_cart_update)){
                    global $con;
                    // $ip = getIp();
                    $p_id_up = $row_run_cart_update['p_id'];
                    $name_for_qty1 = 'a'.$p_id_up;
                    $qty = $_POST[$name_for_qty1];
                    $update_qty = mysqli_query($con, "update cart set qty='$qty' where p_id='$p_id_up'");
                  //   $run_pro_update = mysqli_query($con, "select pro_image from products where pro_id = '$p_id_up'");
                  //   while($row_pro_update = mysqli_fetch_array($run_pro_update)){
                  //   $qty = $_POST[$row_pro_update['pro_image']];
                  //   $update_qty = mysqli_query($con, "update cart set qty='$qty' where p_id='$p_id_up'");
                  // // }
                  // }   
                }

             

        }


}


// function delete_cart(){
//     if(isset($_GET['deleteitem'])){
    
//     global $con; 
//     $ip = getIp();
//     $pro_id = $_GET['deleteitem'];
//     $delete_pro = "delete from cart where p_id='$pro_id'";
//     $run_delete = mysqli_query($con, $delete_pro);
//     // if($run_delete){
//     //     // echo "<script>window.open('cart.php','_self')</script>";
//     //     cart();
//     // }
//   }
// }




?>