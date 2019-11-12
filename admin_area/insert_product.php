<!DOCTYPE>

<?php 

include("includes/db.php");

?>
<html>
	<head>
		<title>Inserting Product</title> 
	</head>
	
<body style="background-color:white; ">
	<form action="insert_product.php" method="post" enctype="multipart/form-data"> 
		
		<table align="center" width="795" border="2" >
			
			<tr align="center">
				<td colspan="7"><h2>Insert New Product Here</h2></td>
			</tr>
			
			<tr>
				<td align="right"><b>Product Title:</b></td>
				<td><input type="text" name="product_title" size="60" required/></td>
			</tr>
			
			<tr>
				<td align="right"><b>Product Catalog:</b></td>
				<td>
				<select name="product_cat">
					<option>Select a Category</option>
					<?php 
						$get_cats = "select * from catalogues";
					
						$run_cats = mysqli_query($con, $get_cats);
					
						while ($row_cats=mysqli_fetch_array($run_cats)){
					
							$cat_id = $row_cats['cat_id']; 
							$catalog = $row_cats['catalog'];
						
							echo "<option value='$catalog'>$catalog</option>";
						}
					?>
				</select>
				
				
				</td>
			</tr>
			
			<tr>
				<td align="right"><b>Product Genre:</b></td>
				<td>
				<select name="product_gen" >
					<option>Select a Genre</option>
					<?php 
						$get_brands = "select * from genre";
					
					$run_brands = mysqli_query($con, $get_brands);
					
					while ($row_brands=mysqli_fetch_array($run_brands)){
					
						$movie_id = $row_brands['movie_id']; 
						$movie_name = $row_brands['movie_name'];
					
					echo "<option value='$movie_name'>$movie_name</option>";
					
					}
					
					?>
				</select>
				
				
				</td>
			</tr>
			
			<tr>
				<td align="right"><b>Product Image:</b></td>
				<td><input type="file" name="product_image" /></td>
			</tr>
			
			<tr>
				<td align="right"><b>Product Price:</b></td>
				<td><input type="text" name="product_price" required/></td>
			</tr>
			
			<tr>
				<td align="right"><b>Product Description:</b></td>
				<td><textarea name="product_desc" cols="20" rows="10"></textarea></td>
			</tr>
			
			<tr align="center">
				<td colspan="7"><input type="submit" name="insert_post" value="Insert Product Now"/></td>
			</tr>
		
		</table>
	
	</form>
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
<?php 

	if(isset($_POST['insert_post'])){
		$product_title = $_POST['product_title'];
		$product_cat= $_POST['product_cat'];
		$product_gen = $_POST['product_gen'];
		$product_price = $_POST['product_price'];
		$product_desc = $_POST['product_desc'];
		$product_image = $_FILES['product_image']['name'];
		$product_image_tmp = $_FILES['product_image']['tmp_name'];
		
		move_uploaded_file($product_image_tmp,"../images/$product_image");
	
		 $insert_product = "insert into products values ('','$product_gen','$product_cat','$product_title','$product_price','$product_image','$product_desc')";
		 
		 $insert_pro = mysqli_query($con, $insert_product);
		 
		 if($insert_pro){
		 
		 echo "<script>alert('Product Has been inserted!')</script>";
		 echo "<script>window.open('index.php?insert_product','_self')</script>";
		 
		 }
	}

?>



