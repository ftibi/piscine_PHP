<?php

session_start();
if ($_GET['login'])
	$_SESSION['login'] = $_GET['login'];
if ($_GET['passwd'])
	$_SESSION['passwd'] = $_GET['passwd'];

if ($_POST['login'] && $_POST['passwd'])
	return ("OK\n");
else
	return ("ERROR\n");

?>
