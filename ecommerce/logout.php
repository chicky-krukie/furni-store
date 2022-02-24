<?php 

session_start();

if(isset($_SESSION))
{

	unset($_SESSION['username']);

}


if(empty($_SESSION['username']))
{
	unset($_SESSION['mycart']);
}

header("location:login.php");


?>