#!/usr/bin/php
<?php

//reste a penser si plsr + ?

function only_one_op($str)
{
	$op = 0;
	if (strpos($str, '+'))
		$op++;
	if (strpos($str, '-'))
		$op++;
	if (strpos($str, '*'))
		$op++;
	if (strpos($str, '/'))
		$op++;
	if (strpos($str, '%'))
		$op++;
	if ($op != 1)
	{
		echo "Syntax Error\n";
		exit (0);
	}
}

if ($argc != 2)
{
	echo "Incorrect Parameters\n";
	return (0);
}
$str = (string)$argv[1];
only_one_op($str);

?>
