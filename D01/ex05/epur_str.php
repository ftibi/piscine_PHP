#!/usr/bin/php
<?php

function ft_split($str)
{
	$tab = explode(" ", $str);
	$tab = array_diff($tab, [""]);
	$tab = array_values($tab);
	return $tab;
}

if ($argc == 2)
{
	$str = ft_split($argv[1]);
	$str = implode(" ", $str);
	echo "$str\n";
}
else
	echo "\n";

?>
