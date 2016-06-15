#!/usr/bin/php
<?php

function ft_split($str)
{
	$tab = explode(" ", $str);
	$tab = array_diff($tab, [""]);
	$tab = array_values($tab);
	return $tab;
}

function ft_print_tab($tab)
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
$nb = array();
$char = array();
$str = array();
$i = 0;
while ($i < count($tab))
{
	if(is_numeric($tab[$i]))
		array_push($nb, $tab[$i]);
	else if(ctype_alpha($tab[$i]))
		array_push($str, $tab[$i]);
	else
		array_push($char, $tab[$i]);
	$i++;
}
natcasesort($str);
$str = array_values($str);
sort($nb, SORT_STRING);
sort($char);
ft_print_tab($str);
ft_print_tab($nb);
ft_print_tab($char);

?>
