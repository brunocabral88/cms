<?php 
	require_once 'functions.php';
	
	define(DB_HOST, 'localhost');
	define(DB_USER, 'widget_cms');
	define(DB_PASS, 'widget123');
	define(DB_NAME, 'widget_corp');

	//Connect to db	
	$connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

	//Perform query
	$query = "SELECT * FROM subjects ";
	$query .= "WHERE visible = 1 ";
	$query .= "ORDER BY position ASC";
	$result = mysqli_query($connection,$query);
	confirm_query($result);
?>

<?php 
	if (mysqli_connect_errno()) {
		die("Database connection failed: " . 
			mysqli_connect_error() .
			" (" . mysqli_connect_errno() . ")"
			);		
	} ?>	
