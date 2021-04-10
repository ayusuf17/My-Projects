<head>
<style>
.back{
	color:green;
}

</style>
</head>
<?php
    include("../includes/logincheck.php");
	include("../includes/header.php");
	echo "<h2>Insert New Contacts</h2>";
	$CompanyName = $_POST['CompanyName'];
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$url = $_POST['url'];
	$phone = $_POST['phone'];
	$address1 = $_POST['address1'];
	$address2 = $_POST['address2'];
	$city = $_POST['city'];
	$province = $_POST['province'];
	$description = $_POST['description'];
	
	if(isset($_POST['submit']))
	{
		//coment
		$valid= 1; //assume everything is OK.
		
		
		if(($CompanyName !="") &&($fname !="") && ($lname !="") && ($email !="") && ($url !="") && ($phone !="") && ($address1 !="") && ($address2 !="") && ($city !="") && ($province !="") &&($description !=""))
		{
		$sql = "INSERT INTO ayu_contacts_prep (ayu_CompanyName,ayu_fname,ayu_lname,ayu_email,ayu_url,ayu_phone,ayu_address1,ayu_address2,ayu_city,ayu_province,ayu_description) VALUES 
		('$CompanyName','$fname','$lname','$email ','$url','$phone','$address1','$address2','$city','$province ','$description')";
		$result = mysqli_query($con,$sql) or die (mysqli_error($con));
		$userPrompt = "New Character inserted!";
	    }
		
//username validation
if((strlen($CompanyName) < 3) || (strlen($CompanyName) >20))
{
	$valid=0;
	$valCom="Please enter a company name from 3 to 20 character.";
}
if((strlen($fname) < 3) || (strlen($fname) >20))
{
	$valid=0;
	$valfname="Please enter a firstname form 3 to 20 character.";
}
if((strlen($lname) < 3) || (strlen($lname) >20))
{
	$valid=0;
	$vallname="Please enter a lastname form 3 to 20 character.";
}


if((strlen($description) < 15) || (strlen($description) >100))
{
	$valid=0;
	$valdesc="Please enter atleast 15 characters.";
}

//email validation
if($email !="")
{
	$email = filter_var($email, FILTER_SANITIZE_EMAIL);
	if(!filter_var($email,FILTER_VALIDATE_EMAIL))
	{
		$valid=0;
		$valEmail="Please fill  in a correct email address.";
	}
}
else
{
	$valid=0;
	$valEmail="PLease fill in an email address.";
}
if($address1 == "")
{
	$valid=0;
	$valAdd="Please select an address1.";
}
if($address2 == "")
{
	$valid=0;
	$valAdd2="Please select an address2.";
}
if($phone == "")
{
	$valid=0;
	$valPphone="Pleaseenter valid phone .";
}
if($city == "")
{
	$valid=0;
	$valcity="You can't leave this field empty.";
}
if (filter_var($url, FILTER_VALIDATE_URL)) {
	$valid=0;
    $valurlMsg='valid url';
} else {
	$valid=0;
   $valurlMsg='Please fill a  URL';
}
if($valid == 1)
{
	$msgSuccess="SUCCESS.Form data is correct.";
}

		
		//coment
	
}
?>

<form id="myform" name="myform" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
		<div class="form-group" >
			<label for="alpha">Bussines Name:</label>
			<input type="text" name="CompanyName" class="form-control" value="<?php echo $CompanyName; ?>">
			<span class="back"><?php echo $valCom; ?></span>
		</div>
		<div class="form-group">
			<label for="alpha">First Name:</label>
			<input type="text" name="fname" class="form-control" value="<?php echo $fname; ?>">
			<span class="back"><?php echo $valfname; ?></span>
		</div>
		<div class="form-group">
			<label for="alpha">Last Name:</label>
			<input type="text" name="lname" class="form-control" value="<?php echo $lname; ?>">
			<span class="back"><?php echo $vallname; ?></span>
		</div>
		<div class="form-group" >
			<label for="alpha">Website (URL):</label>
			<input type="text" class="form-control" name="url" value="<?php echo $url; ?>">
			<span class="back"><?php echo $valurlMsg; ?></span>
		</div>
		<div class="form-group" >
			<label for="alpha">Phone Number:</label>
			<input type="tel" name="phone" class="form-control" value="<?php echo $phone; ?>">
			<span class="back"><?php echo $valPphone; ?></span>
		</div>
		<div class="form-group" >
			<label for="alpha">Email address:</label>
			<input type="text" class="form-control" name="email" value="<?php echo $email; ?>">
			<span class="back"><?php echo $valEmail; ?></span>
		</div>
		<div class="form-group" >
			<label for="alpha">Address1:</label>
			<input type="text" name="address1" class="form-control" value="<?php echo $address1; ?>">
			<span class="back"><?php echo $valAdd; ?></span>
		</div>
		<div class="form-group" >
			<label for="alpha">Address2:</label>
			<input type="text" name="address2" class="form-control" value="<?php echo $address2; ?>">
			<span class="back"><?php echo $valAdd2; ?></span>
		</div>
		<div class="form-group" >
			<label for="alpha">City:</label>
			<input type="text" name="city" class="form-control" value="<?php echo $city; ?>">
			<span class="back"><?php echo $valcity; ?></span>
		</div>
		<div class="form-group" >
		<label for="cars">Province:</label>
<select name="province" class="form-control">
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
			<textarea name="description" class="form-control"><?php echo $description; ?></textarea>
			<span class="back"><?php echo $valdesc; ?></span>
		</div>
		<div class="form-group">
			<label for="submit">&nbsp;</label>
			<input type="submit" name="submit" class="btn btn-info" value="Add Contact Info">
		</div>
<?php
if($userPrompt)
{
echo "<div> $userPrompt</div>";	
}
?>
</form>
<?php
	include("../includes/footer.php");
?>