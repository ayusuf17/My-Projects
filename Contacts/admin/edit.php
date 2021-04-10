<head>
<style>

h4{
	color:black;
}
.editLink{
	position:realtive;
	left:3rem;
	bottom:2rem;
}
a:hover{
	color:red;
}
img{
	width:2.5rem;
	height:2.5rem;
}
.editLink{
	color:red;
}

</style>
</head>
<?php
include("../includes/logincheck.php");
include("../includes/header.php");

echo "<h2> Edit Contacts </h2>";
$charID = $_GET['id']; 
if(!isset($charID))
{
	
	$result = mysqli_query($con,"SELECT * FROM ayu_contacts_prep LIMIT 1") or die (mysql_error($con));
	while ($row = mysqli_fetch_array($result))
	{
		$charID = $row['cid'];
	}
}
//If user submits changes ,then get new info from and upadte the DB
if(isset($_POST['submit']))
{
	
	$newCompanyName = $_POST['CompanyName'];
	$newfname = $_POST['fname'];
	$newlname = $_POST['lname'];
	$newemail = $_POST['email'];
	$newurl = $_POST['url'];
	$newphone = $_POST['phone'];
	$newaddress1 = $_POST['address1'];
	$newaddress2 = $_POST['address2'];
	$newcity = $_POST['city'];
	$newprovince = $_POST['province'];
	$newdescription = $_POST['description'];
$sql = "UPDATE ayu_contacts_prep
SET 
ayu_ComapanyName='$newCompanyNam'
    ayu_fname = '$newfname',
    ayu_lname = '$newlname',
	ayu_email = '$newemail',
	ayu_url = '$newurl',
	ayu_phone = '$newphone',
	ayu_address1 = '$newaddress1',
	ayu_address2 = '$newaddress2',
	ayu_city = '$newcity'
	ayu_province = '$newprovince',
    ayu_description = '$newdescription'
	WHERE cid = $charID";
	$x = mysqli_query($con,$sql) or die (mysql_error($con));
}
	//GET ALLL EXISTING RECORD AND CREATE DYNAMIC NAV SYSTEM
	$result = mysqli_query($con,"SELECT * FROM ayu_contacts_prep");
	while($row = mysqli_fetch_array($result))
	{
		$thisFname = $row['ayu_fname'];
		$thisLname = $row['ayu_lname'];
		$thisID = $row['cid'];
		if($thisID == $charID)
		{
			
		$editlinks .= "\n<a href = \"edit.php?id=$thisID\" class=\"hilitelink\">".$thisFname." ".$thisLname. "</a><br />";
		}
		else
		{
		$editlinks .= "\n<a href = \"edit.php?id=$thisID\">".$thisFname." ".$thisLname. "</a><br />";	
		}
	}
	
	//GET THE EXISTING CONTENT FOR THE SELECTED CHARACTER  TO PROPULATE FROM FIELDS
	$result2 = mysqli_query($con,"SELECT * FROM ayu_contacts_prep WHERE cid =$charID");
	while($row = mysqli_fetch_array($result2))
	{
		$charCompanyName = $row['ayu_CompanyName'];
		$charFname = $row['ayu_fname'];
		$charLname = $row['ayu_lname'];
		$charEmail = $row['ayu_email'];
		$charUrl = $row['ayu_url'];
		$charPhone = $row['ayu_phone'];
		$charAddress1 = $row['ayu_address1'];
		$charAddress2 = $row['ayu_address2'];
		$charCity = $row['ayu_city'];
		$charProvince = $row['ayu_province'];
		$charDesc = $row['ayu_description'];
	}
	
?>

<div class ="row">
<div class ="col-md-6">
		<form id="myform" name="myform" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
		<div class="form-group" >
			<label for="alpha">Bussines Name:</label>
			<input type="text" name="CompanyName" class="form-control" value="<?php echo $charCompanyName; ?>">
		</div>
		<div class="form-group">
			<label for="alpha">First Name:</label>
			<input type="text" name="fname" class="form-control" value="<?php echo $charFname; ?>">
		</div>
		<div class="form-group">
			<label for="alpha">Last Name:</label>
			<input type="text" name="lname" class="form-control" value="<?php echo $charLname; ?>">
		</div>
		<div class="form-group" >
			<label for="alpha">Website (URL):</label>
			<input type="text" class="form-control" name="url" value="<?php echo $charUrl ; ?>">
		</div>
		<div class="form-group" >
			<label for="alpha">Phone Number:</label>
			<input type="tel" name="phone" class="form-control" value="<?php echo $charPhone; ?>">
		</div>
		<div class="form-group" >
			<label for="alpha">Email address:</label>
			<input type="text" class="form-control" name="email" value="<?php echo $charEmail; ?>">
		</div>
		<div class="form-group" >
			<label for="alpha">Address1:</label>
			<input type="text" name="address1" class="form-control" value="<?php echo $charAddress1; ?>">
		</div>
		<div class="form-group" >
			<label for="alpha">Address2:</label>
			<input type="text" name="address2" class="form-control" value="<?php echo $charAddress2; ?>">
		</div>
		<div class="form-group" >
			<label for="alpha">City:</label>
			<input type="text" name="city" class="form-control" value="<?php echo $charCity; ?>">
		</div>
		<div class="form-group" >
		<label for="cars">Province:</label>
<select name="province" class="form-control" value="<?php echo 	$charProvince; ?>>
<option value="">-Please select a province-</option>
<option value="AB" <?php if(isset($province) && ($province=="AB")) echo "selected"; ?>>Alberta</option>
<option value="BC" <?php if(isset($province) && ($province=="BC")) echo "selected"; ?>>British Colombia</option>
<option value="MB" <?php if(isset($province) && ($province=="MB")) echo "selected"; ?>>Manitoba</option>
<option value="SK" <?php if(isset($province) && ($province=="SK")) echo "selected"; ?>>Saskatchwan</option>
<option value="ON" <?php if(isset($province) && ($province=="ON")) echo "selected"; ?>>Ontario</option>
<option value="QC" <?php if(isset($province) && ($province=="QC")) echo "selected"; ?>>Quebec</option>
<option value="NL" <?php if(isset($province) && ($province=="NL")) echo "selected"; ?>>Newfound land and Labrada</option>
<option value="NT" <?php if(isset($province) && ($province=="NT")) echo "selected"; ?>>Northern Teritories</option>
</select>
</select>
		</div>
		<div class="form-group">
			<label for="beta">Description:</label>
			<textarea name="description" class="form-control"><?php echo $charDesc; ?></textarea>
		</div>
		<div class="form-group">
			<label for="submit">&nbsp;</label>
			<input type="submit" name="submit" class="btn btn-info" value="Add Contact Info">
		</div>

</form>
</div>
<div class="col-md-5" style="background:#e6d4d3; color:red; text-align:center">
<h3> Contacts </h3>
<?php 
echo $editlinks;
?>
<h4>Delete</h4>
<button class="btn btn-danger" onclick="location.href = 'delete.php?id=<?php echo $charID;?>'"  onclick="confirmation()">Delete Characters</button>
<?php
echo "\n <div class=\"editLinks\"><a href=\"search.php\">Search<img src=\"img/search.png\" /></a>";
?>

</div>

<?php
	include("../includes/footer.php");
?>