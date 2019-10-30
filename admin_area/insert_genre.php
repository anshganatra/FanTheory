
<form action="" method="post" style="padding:80px;">

<b>Insert New Genre:</b>
<input type="text" name="new_genre" required/> <br><br>
<b>Insert New Genre Category:</b>
<select name="new_genre_category">
	<option>Genre Category</option>
	<option value='movie'>Movie</option>
	<option value='tv show'>TV Show</option>
</select> <br><br>
<input type="submit" name="add_genre" value="Add Genre" /> 

</form>

<?php 
include("includes/db.php"); 

	if(isset($_POST['add_genre'])){
	
	$new_genre = $_POST['new_genre'];
	$new_genre_category = $_POST['new_genre_category'];
	
	$insert_genre = "insert into genre values ('', '$new_genre', '$new_genre_category')";

	$run_genre = mysqli_query($con, $insert_genre); 
	
	if($run_genre){
	
	echo "<script>alert('New Genre has been inserted!')</script>";
	echo "<script>window.open('index.php?view_genre','_self')</script>";
	}
	}

?>