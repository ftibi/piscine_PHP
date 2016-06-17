<?php

include 'auth.php';

session_start();

if (auth($_POST["login"], $_POST["passwd"]))
{
	echo ("OK\n");
	$_SESSION["logged_on_user"] = $_POST['login'];
}
else
{
	echo ("ERROR\n");
	$_SESSION["logged_on_user"] = "";
}









?>
