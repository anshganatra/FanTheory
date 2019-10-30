<?php 
session_start(); 

if(!isset($_SESSION['user_email'])){
	
	echo "<script>window.open('login.php?not_admin=You are not an Admin!','_self')</script>";
}
else {

?>

<!DOCTYPE> 

<html>
	<head>
		<title>This is Admin Panel</title> 
		
	<link rel="stylesheet" href="styles/style.css" media="all" /> 
	</head>


<body> 

	<div class="main_wrapper">
	
	
		<div id="header"></div>
		
		<div id="right">
		<h2 style="text-align:center;">Manage Content</h2>
			
			<a href="index.php?insert_product">Insert New Product</a>
			<a href="index.php?view_products">View All Products</a>
			<a href="index.php?insert_cat">Insert New Category</a>
			<a href="index.php?view_cats">View All Categories</a>
			<a href="index.php?insert_genre">Insert New Genre</a>
			<a href="index.php?view_genre">View All Genre</a>
			<a href="index.php?view_customers">View Customers</a>
			<a href="logout.php">Admin Logout</a>
		
		</div>
		
		<div id="left">
		<h2 style="color:red; text-align:center;"><?php echo @$_GET['logged_in']; ?></h2>
		<?php 
		if(isset($_GET['insert_product'])){
		
		include("insert_product.php"); 
		
		}
		if(isset($_GET['view_products'])){
		
		include("view_products.php"); 
		
		}
		if(isset($_GET['edit_pro'])){
		
		include("edit_pro.php"); 
		
		}
		if(isset($_GET['insert_cat'])){
		
		include("insert_cat.php"); 
		
		}
		
		if(isset($_GET['view_cats'])){
		
		include("view_cats.php"); 
		
		}
		
		if(isset($_GET['edit_cat'])){
		
		include("edit_cat.php"); 
		
		}
		
		if(isset($_GET['insert_genre'])){
		
		include("insert_genre.php"); 
		
		}
		
		if(isset($_GET['view_genre'])){
		
		include("view_genre.php"); 
		
		}
		if(isset($_GET['edit_genre'])){
		
		include("edit_genre.php"); 
		
		}
		if(isset($_GET['view_customers'])){
		
		include("view_customers.php"); 
		
		}
		
		?>
		</div>

	</div>


</body>
</html>

<?php } ?>