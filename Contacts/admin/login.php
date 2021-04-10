<?php
	include("../includes/header.php");
	$userName=$_POST['username'];
	$pwd=$_POST['password'];
		if(isset($_POST['submit']))
		{
	//authentica user_error
	if(($userName =="alli") && ($pwd =="2020"))
	{
		session_start(); //start a session
		$_SESSION['xpardq'] = session_id();//name of the session
	    header("Location:edit.php");
	}
	else{
			if($userName !=""  && $pwd !="")
			{
			$msg="Invalid Login";	
			}
			else
			{
			$msg="Please enter a Useranme and Passowrd";
			}
	    }
	}
?>
<h2>Please Login</h2>
<form id="myform" name="myform" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
		<div class="form-group">
			<label for="username">Username:</label>
			<input type="text" name="username" class="form-control">
		</div>
		<div class="form-group">
			<label for="password">Password:</label>
			<input name="password" name="passowrd" class="form-control">
		</div>
		<div class="form-group">
			<label for="submit">&nbsp;</label>
			<input type="submit" name="submit" class="btn btn-info" value="Login">
		</div>
</form>
<?php
if($msg)
{
	echo "<div>$msg</div>";
}
	include("../includes/footer.php");
?>