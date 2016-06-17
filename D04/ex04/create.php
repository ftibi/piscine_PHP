<?php

session_start();

if ($_POST['login'] && $_POST['passwd'])
{

	if (!file_exists("../private"))
		mkdir("../private", 0777, true);

	$data_file = "";
	$finename = "../private/passwd";
	if (file_exists($finename))
		$data_file = file_get_contents($finename, true);
	else
		$data_file = "";
	$data_file = unserialize($data_file);


	if ($data_file[$_POST['login']])
	{
		header("Location : index.html");
		echo ("ERROR\n");
	}
	else
	{
		header("Location : index.html");
		echo ("OK\n");
		$data_file[$_POST['login']] = array("login" => $_POST['login'], "passwd" => hash("whirlpool", $_POST['passwd']));
		$data_file = serialize($data_file);
	}
	file_put_contents($finename, $data_file);
	exit();

}
else
{
	header("Location : index.html");
	echo ("ERROR\n");
	exit();
}
?>
