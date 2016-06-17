<?php

session_start();
if ($_POST['login'])
	$_SESSION['login'] = $_POST['login'];
if ($_POST['passwd'])
	$_SESSION['passwd'] = $_POST['passwd'];

if ($_POST['login'] && $_POST['passwd'])
{

	if (!file_exists("./private"))
		mkdir("./private", 0777, true);

	$data_file = "";
	$finename = "./private/passwd";
	if (file_exists($finename))
		$data_file = file_get_contents($finename, true);
	else
		$data_file = "";
	$data_file = unserialize($data_file);


	if ($data_file[$_SESSION['login']])
	{
			echo ("ERROR\n");
			exit();
	}
	else
	{
		echo ("OK\n");
		$data_file[$_SESSION['login']] = array("login" => $_SESSION['login'], "passwd" => hash("whirlpool", $_SESSION['passwd']));
		$data_file = serialize($data_file);
	}
	file_put_contents($finename, $data_file);

}
else
	echo ("ERROR\n");

?>
