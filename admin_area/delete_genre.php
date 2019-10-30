<?php 
	include("includes/db.php"); 
	
	if(isset($_GET['delete_genre'])){
	
	$delete_id = $_GET['delete_genre'];
	
	$delete_brand = "delete from genre where movie_id='$delete_id'"; 
	
	$run_delete = mysqli_query($con, $delete_brand); 
	
	if($run_delete){
	
	echo "<script>alert('A Genre has been deleted!')</script>";
	echo "<script>window.open('index.php?view_genre','_self')</script>";
	}
	
	}
?>