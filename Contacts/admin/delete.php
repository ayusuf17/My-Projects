<?php
include("../includes/logincheck.php");
include("../includes/header.php");

$charID =$_GET['id'];
if(!isset($charID))
{
echo "No ID is existing";	
exit();
}

$result = mysqli_query($con, "DELETE  FROM ayu_contacts_prep WHERE cid=$charID") or die (mysql_error());
header("Location:edit.php");
?>