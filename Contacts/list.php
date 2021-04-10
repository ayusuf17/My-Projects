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
.listing{
	font-size:1rem;
	font-weight:bold;
	color:black;
	margin-right:1rem;
}
</style>
</head>

<?php 
include("includes/header.php");

$sql = "SELECT * FROM ayu_contacts_prep";
$result =mysqli_query($con,$sql) or die (mysqli_error($con));
while($row = mysqli_fetch_array($result))
{
	$cid = $row['cid'];
	$company =$row['ayu_CompanyName'];
	
	$companyLink = "<a href=\"company.php?cid=$cid\">View Profile </a><br />";
	echo "\n <div class=\"listing\">".$company . " " .$companyLink ."</div>\n";
}

include("includes/footer.php");
?>