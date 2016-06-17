<?php

session_start();

if ($_GET['login'])
	$_SESSION['login'] = $_GET['login'];
if ($_GET['passwd'])
	$_SESSION['passwd'] = $_GET['passwd'];
$login = $_SESSION['login'];
$passwd = $_SESSION['passwd'];

// echo $_GET['login']."\n";
// echo $_GET['passwd']."\n";

?>

<form action='index.php' method='get'>
	<p> Identifiant: <input type='text' name='login' value="<?php if ($login) echo $login;?>"/></p>
	<p> Mot de passe: <input type='text' name='passwd' value="<?php if ($passwd) echo $passwd;?>"/></p>
	<input type='submit' name='submit' value='OK' /></p>

</form>
<!--
<?php

$_SESSION['login'] = $_GET['login'];
$_SESSION['passwd'] = $_GET['passwd'];

?> -->
