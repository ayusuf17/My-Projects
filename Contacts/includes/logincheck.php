<?php 
session_start();
if(!isset($_SESSION['xpardq']))
{
header("Location:login.php");	
}
?>