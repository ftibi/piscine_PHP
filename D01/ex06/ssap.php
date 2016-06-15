#!/usr/bin/php
<?php

function ft_split($str)
{
	$tab = explode(" ", $str);
	$tab = array_diff($tab, [""]);
	$tab = array_values($tab);
	return $tab;
}

function ft_echo_tab($tab)
{
	$i = 0;
	while ($tab[$i])
	{
		echo "$tab[$i]\n";
		$i++;
	}
}

$i = 1;
$tab = [];
while ($i < $argc)
{
	$to_merge = ft_split($argv[$i]);
	$tab = array_merge($tab, $to_merge);
	$i++;
}
sort($tab, SORT_STRING);
ft_echo_tab($tab);

?>
