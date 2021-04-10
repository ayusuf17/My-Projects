

<?php
include("mysql_connect.php");// here we include the connection script; since this file(header.php) is included at the top of every page we make, the connection will then also be included. Also, config options like BASE_URL are also available to us.
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?php echo APP_NAME; ?></title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="<?php echo BASE_URL ?>css/styles.css" rel="stylesheet">
<style>
.top{
	background-color:#a84632;
	width:100%;
	height:18rem;
	 border-radius:2%;
	
}
h1{
	display:flex;
	justify-content:center;
	color:#fff;
	font-size:4rem;
	position:relative;
	top:3rem;
}
body{
	padding:3rem;
}
 a{
	color:red;
	list-style-type:none;
	text-decoration:none;
	font-size:2.5rem;

}
ul{
		margin:5rem;
		list-style-type:none;
}
.navbar{
	list-style-type:none;
	font-size:2.5:
	
}

</style>
</head>
  <body> 
  <div class="containerr">
    <div class="top">
	<h1>Contacts Database</h1>
	</div>
        <ul class="navbar">
          <li class="nav-item">
            <a  href="<?php echo BASE_URL ?>list.php">List Characters</a>
          </li>
		   <li class="nav-item ">
            <a  href="<?php echo BASE_URL ?>admin/insert.php">Insert Contact</a>
          </li>
		  <li class="nav-item">
            <a  href="<?php echo BASE_URL ?>admin/edit.php">Edit Contacts</a>
          </li>
		  <li class="nav-item ">
            <a  href="<?php echo BASE_URL ?>search.php">Search</a>
          </li>
        </ul>
	</div>
    <main role="main" class="container">



    

      

    




