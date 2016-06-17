<?php

session_start();
$login = $_SESSION['login'];
$passwd = $_SESSION['passwd'];
echo <<<'EOD'
<form action='index.php' method='get'>
	<p> Nom d'utilisateur : <input type='text' name='login' value="<?php echo'$login'; ?>"/></p>
	<p> Mot de passe : <input type='text' name='passwd' /></p>
	<input type='submit' name='submit' value='OK' /></p>

</form>
EOD;

$_SESSION['login'] = $_GET['login'];

echo $_GET['login']."\n";
echo $_GET['passwd']."\n";

?>
