<?php require_once('../includes/functions.php'); ?>
<?php require_once('../includes/dbconnection.php'); ?>
<?php include('../includes/header.php'); ?>


<div id="main">
	<div id="navigation">
		<ul class="subjects">
		<?php
			//Use returned data
			while ($subject = mysqli_fetch_assoc($result)) {
		?>
			<li><?php echo $subject['menu_name'] . "<br>"; ?></li>				
		<?php
			}
			//Release returned data
			mysqli_free_result($result);
 		?>
  		</ul>
	</div>
	<div id="page">
		<h2>Manage content</h2>		
	</div>
	
</div>



<?php 
//Include Footer
include '../includes/footer.php'; 
?>