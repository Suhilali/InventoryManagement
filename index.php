<?php
include_once("./database/constants.php");
//echo "location:".DOMAIN."/dashboard.php";
if (isset($_SESSION["userid"])) 
{
	header("location:".DOMAIN."/dashboard.php");
}
else
{
  header("location:".DOMAIN."/index1.php");
}
?>

