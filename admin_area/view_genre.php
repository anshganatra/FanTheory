
<table width="795" align="center" > 

	
	<tr align="center">
		<td colspan="6"><h2>View All Genre Here</h2></td>
	</tr>
	
	<tr align="center" >
		<th>Genre ID</th>
		<th>Genre</th>
		<th>Genre Category</th>
		<th>Edit</th>
		<th>Delete</th>
	</tr>
	<?php 
	include("includes/db.php");
	
	$get_genre = "select * from genre";
	
	$run_genre = mysqli_query($con, $get_genre); 
	
	$i = 0;
	
	while ($row_genre=mysqli_fetch_array($run_genre)){
		
		$movie_id = $row_genre['movie_id'];
		$movie_name = $row_genre['movie_name'];
		$movie_cat = $row_genre['movie_cat'];
		$i++;
	
	?>
	<tr align="center">
		<td><?php echo $i;?></td>
		<td><?php echo $movie_name;?></td>
		<td><?php echo $movie_cat;?></td>
		<td><a href="index.php?edit_genre=<?php echo $movie_id; ?>">Edit</a></td>
		<td><a href="delete_genre.php?delete_genre=<?php echo $movie_id;?>">Delete</a></td>
	
	</tr>
	<?php } ?>




</table>