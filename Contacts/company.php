<head>
<style>

.item{
width:20rem;
height:2rem;	
color:blue;

}
.comapnyTitle{
	font-size:3rem;
	color:green;
}
.Title{
	background-color:black;
	width:3rem;
	height:3rem;
	
}
.Title1{
	background-color:red;
	width:90%;
	height:0.5rem;
	margin-top:1rem
}
.label{
	font-size:1rem;
	font-weight:bold;
	color:black;
	margin-right:1rem;
}
</style>
</head>

<?php 
include("includes/header.php");

$cid =$_GET['cid'];
$sql = "SELECT * FROM ayu_contacts_prep WHERE cid=$cid";
$result =mysqli_query($con,$sql) or die (mysqli_error($con));
while($row = mysqli_fetch_array($result))
{
	$cid = $row['cid'];
	$company =$row['ayu_CompanyName'];
	$FName =$row['ayu_fname'];
	$LName =$row['ayu_lname'];
	$Email =$row['ayu_email'];
	$URL =$row['ayu_url'];
	$Phone =$row['ayu_phone'];
	$Address1 =$row['ayu_address1'];
	$Address2 =$row['ayu_address2'];
	$City =$row['ayu_city'];
	$Prov =$row['ayu_province'];
	$Description =$row['ayu_description'];
	
	echo "\n <div class=\"Title\"></div>\n";
	echo "\n <div class=\"comapnyTitle\">$company</div>\n";
		echo "\n <div class=\"Title1\"></div>\n";
		
		echo "\n <div class=\"mainn\">
		
		
		</div>\n";


	
	
	if($FName !="")
	{
		echo "\n <div class=\"item\"><span class=\"label\">FirstName:</span><span class=\"value\">$FName</span></div>\n";
	}
	if($LName !="")
	{
		echo "\n <div class=\"item\"><span class=\"label\">LasttName:</span><span class=\"value\">$LName</span></div>\n";
	}
	if($Email !="")
	{
		echo "\n <div class=\"item\"><span class=\"label\">Email:</span><span class=\"value\">$Email</span></div>\n";
	}
	if($URL !="")
	{
		echo "\n <div class=\"item\"><span class=\"label\">URL:</span><span class=\"value\">$URL</span></div>\n";
	}
	if($Phone !="")
	{
		echo "\n <div class=\"item\"><span class=\"label\">Phone:</span><span class=\"value\">$Phone</span></div>\n";
	}
	if($Address1 !="")
	{
		echo "\n <div class=\"item\"><span class=\"label\">Address1:</span><span class=\"value\">$Address1</span></div>\n";
	}
		if($Address2 !="")
	{
		echo "\n <div class=\"item\"><span class=\"label\">Address2:</span><span class=\"value\">$Address2</span></div>\n";
	}
		if($City !="")
	{
		echo "\n <div class=\"item\"><span class=\"label\">City:</span><span class=\"value\">$City</span></div>\n";
	}
		if($Prov !="")
	{
		echo "\n <div class=\"item\"><span class=\"label\">Province:</span><span class=\"value\">$Prov</span></div>\n";
	}
		if($Description !="")
	{
		echo "\n <div class=\"item\"><span class=\"label\">Description:</span><span class=\"value\">$Description</span></div>\n";
	}
}

	