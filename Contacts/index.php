<head>
<style>
.flexer{
	display:flex;
}
.phil{
	font-style:italic;
	color:red;
	margin-left:60rem;
}
</style>
</head>


<?php

include ("includes/header.php");

?>

 <form id="myform" name="myform" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
		<div class="form-group" >
			<label for="alpha">First Name:</label>
			<input type="text" name="fname" class="form-control" value="<?php echo $fname; ?>">
		</div>
		<div class="form-group">
			<label for="alpha">Last Name:</label>
			<input type="text" name="lname" class="form-control" value="<?php echo $lname; ?>">
		</div>
		<div class="form-group">
			<label for="beta">Description:</label>
			<textarea name="description" class="form-control"><?php echo $description; ?></textarea>
		</div>
		<div class="form-group">
			<label for="submit">&nbsp;</label>
			<input type="submit" name="submit" class="btn btn-info" value="Add Character">
		</div>


<?php

include ("includes/footer.php");
?>
