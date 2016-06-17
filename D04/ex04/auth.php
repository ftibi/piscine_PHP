<?php

function auth($login, $passwd)
{

	$finename = "../private/passwd";
	if (file_exists($finename))
		$data_file = file_get_contents($finename, true);
	else
		$data_file = "";
	$data_file = unserialize($data_file);
	if ($data_file[$_GET['login']] && $data_file[$_GET['login']]['passwd'] === hash("whirlpool",$_GET['passwd']))
		return (true);
	else
		return (false);
}

?>
