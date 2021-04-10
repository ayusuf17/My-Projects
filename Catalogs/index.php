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
			<label for="alpha">Food Name:</label>
			<input type="text" name="foodname" class="form-control" value="<?php echo $FoodName; ?>">
			<span class="back"><?php echo $valFood; ?></span>
		</div>
		<div class="form-group">
			<label for="alpha">Drink:</label>
			<input type="text" name="drink" class="form-control" value="<?php echo $Drink; ?>">
			<span class="drink"><?php echo $valDrink; ?></span>
		</div>
		<div class="form-group" >
			<label for="alpha">Nutrition:</label>
			<input type="text" name="nutrition" class="form-control"  value="<?php echo $Nutrition; ?>">
			<span class="back"><?php echo $valNutrition; ?></span>
		</div>
		<div class="form-group">
			<label for="submit">&nbsp;</label>
			<input type="submit" name="submit" class="btn btn-info" value="Add Food">
		</div>


<?php

include ("includes/footer.php");
?>
