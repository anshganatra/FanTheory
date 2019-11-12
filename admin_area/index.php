<?php 
session_start(); 

if(!isset($_SESSION['user_email'])){
	
	echo "<script>window.open('login.php?not_admin=You are not an Admin!','_self')</script>";
}
else {

?>
<?php include("header.php"); ?>
<!DOCTYPE> 

<html>
	<head>
		<title>This is Admin Panel</title> 
		
	<!-- <link rel="stylesheet" href="styles/q.css" media="all" />  -->
	</head>


<body bgcolor="white"> 

	<div class="main_wrapper">
	
		
		<div id="center">
		<h2 style="text-align:center;">Manage Content</h2>
			<a href="index.php?insert_product" class="btn btn-black rounded-0">Insert New Product</a>&nbsp;
			<a href="index.php?view_products" class="btn btn-black rounded-0">View All Products</a>&nbsp;
			<a href="index.php?insert_cat" class="btn btn-black rounded-0">Insert New Category</a>&nbsp;
			<a href="index.php?view_cats" class="btn btn-black rounded-0">View All Categories</a>&nbsp;
			<a href="index.php?insert_genre" class="btn btn-black rounded-0">Insert New Genre</a>&nbsp;
			<a href="index.php?view_genre" class="btn btn-black rounded-0">View All Genre</a>&nbsp;
			<a href="index.php?view_customers" class="btn btn-black rounded-0">View Customers</a>&nbsp;
			<a href="logout.php" class="btn btn-black rounded-0">Admin Logout</a><br>
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
	<div style="position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;"></div>
 
    

</body>
</html>

<?php } ?>