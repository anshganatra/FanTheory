<?php 
include("includes/db.php"); 

if(isset($_GET['edit_genre'])){

	$brand_id = $_GET['edit_genre']; 
	
	$get_brand = "select * from genre where movie_id='$brand_id'";

	$run_brand = mysqli_query($con, $get_brand); 
	
	$row_brand= mysqli_fetch_array($run_brand); 
	
	$brand_id = $row_brand['movie_id'];
	
	$brand_title = $row_brand['movie_name'];
}


?>
<form action="" method="post" style="padding:80px;">

<b>Update Genre</b>
<input type="text" name="new_genre" value="<?php echo $brand_title;?>"/> 
<input type="submit" name="update_genre" value="Update Genre" /> 

</form>

<?php  

	if(isset($_POST['update_genre'])){
	
	$update_id = $brand_id; 
	
	$new_brand = $_POST['new_genre'];
	
	$update_brand = "update genre set movie_name='$new_brand' where movie_id='$update_id'";

	$run_update = mysqli_query($con, $update_brand); 
	
	if($run_update){
	
	echo "<script>alert('Brand has been updated!')</script>";
	echo "<script>window.open('index.php?view_genre','_self')</script>";
	}
	}

?>