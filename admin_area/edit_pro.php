<!DOCTYPE>

<?php 

include("includes/db.php");

if(isset($_GET['edit_pro'])){

	$get_id = $_GET['edit_pro']; 
	
	$get_pro = "select * from products where pro_id='$get_id'";
	
	$run_pro = mysqli_query($con, $get_pro); 
	
	$i = 0;
	
	$row_pro=mysqli_fetch_array($run_pro);
		
	$pro_id = $row_pro['pro_id'];
	$pro_title = $row_pro['pro_title'];
	$pro_image = $row_pro['pro_image'];
	$pro_price = $row_pro['pro_price'];
	$pro_desc = $row_pro['pro_desc']; 
	$pro_cat = $row_pro['pro_catalog'];
	$pro_brand = $row_pro['pro_genre'];

	$category_title = $pro_cat;

	$brand_title = $pro_brand;
}
?>
<html>
	<head>
		<title>Update Product</title> 
		
	</head>
	
<body bgcolor="skyblue">

	<form action="" method="post" enctype="multipart/form-data"> 
		
		<table align="center" width="795" border="2" bgcolor="#187eae">
			
			<tr align="center">
				<td colspan="7"><h2>Edit & Update Product</h2></td>
			</tr>
			
			<tr>
				<td align="right"><b>Product Title:</b></td>
				<td><input type="text" name="product_title" size="60" value="<?php echo $pro_title;?>"/></td>
			</tr>
			
			<tr>
				<td align="right"><b>Product Category:</b></td>
				<td>
				<select name="product_cat" >
					<option><?php echo $category_title; ?></option>
					<?php 
						$get_cats = "select * from catalogues";
					
						$run_cats = mysqli_query($con, $get_cats);
					
						while ($row_cats=mysqli_fetch_array($run_cats)){
					
						$cat_id = $row_cats['cat_id']; 
						$cat_title = $row_cats['catalog'];
					
						echo "<option value='$cat_id'>$cat_title</option>";
					
					}
					
					?>
				</select>
				
				
				</td>
			</tr>
			
			<tr>
				<td align="right"><b>Product Genre:</b></td>
				<td>
				<select name="product_brand" >
					<option><?php echo $brand_title; ?></option>
					<?php 
						$get_brands = "select * from genre";
					
						$run_brands = mysqli_query($con, $get_brands);
						
						while ($row_brands=mysqli_fetch_array($run_brands)){
						
							$brand_id = $row_brands['movie_id']; 
							$brand_title = $row_brands['movie_name'];
						
						echo "<option value='$brand_id'>$brand_title</option>";
	
					}
					
					?>
				</select>
				
				
				</td>
			</tr>

			<tr>
				<td align="right"><b>Product Image:</b></td>
				<td><input type="file" name="product_image" /><img src="../images/<?php echo $pro_image; ?>" width="60" height="60"/></td>
			</tr>
			
			<tr>
				<td align="right"><b>Product Price:</b></td>
				<td><input type="text" name="product_price" value="<?php echo $pro_price;?>"/></td>
			</tr>
			
			<tr>
				<td align="right"><b>Product Description:</b></td>
				<td><textarea name="product_desc" cols="20" rows="10"><?php echo $pro_desc; ?></textarea></td>
			</tr>
			
			
			<tr align="center">
				<td colspan="7"><input type="submit" name="update_product" value="Update Product"/></td>
			</tr>
		
		</table>
	
	
	</form>


</body> 
</html>
<?php 

	if(isset($_POST['update_product'])){
		
		$update_id = $pro_id;
		
		$product_title = $_POST['product_title'];
		$product_cat= $_POST['product_cat'];
		$product_brand = $_POST['product_brand'];
		$product_price = $_POST['product_price'];
		$product_desc = $_POST['product_desc'];
		$product_image = $_FILES['product_image']['name'];
		$product_image_tmp = $_FILES['product_image']['tmp_name'];

		if (!file_exists($product_image)){
 			move_uploaded_file($product_image_tmp,"../images/$product_image");
		}
		
	
		 $update_product = "update products set pro_catalog='$product_cat',pro_genre='$product_brand',pro_title='$product_title',pro_price='$product_price',pro_desc='$product_desc',pro_image='$product_image' where pro_id='$update_id'";
		 
		 $run_product = mysqli_query($con, $update_product);
		 
		 if($run_product){
		 
		 echo "<script>alert('Product has been updated!')</script>";
		 
		 echo "<script>window.open('index.php?view_products','_self')</script>";
		 
		 }
	}

?>

