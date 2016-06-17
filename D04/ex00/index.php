<?php

session_start();
if ($_GET['login'])
	$_SESSION['login'] = $_GET['login'];
if ($_GET['passwd'])
	$_SESSION['passwd'] = $_GET['passwd'];

?>

<form action='index.php' method='get'>
	<p> Identifiant: <input type='text' name='login' value="<?php if ($_SESSION['login']) echo $_SESSION['login'];?>"/></p>
	<p> Mot de passe: <input type='text' name='passwd' value="<?php if ($_SESSION['passwd']) echo $_SESSION['passwd'];?>"/></p>
	<input type='submit' name='submit' value='OK' /></p>

</form>
