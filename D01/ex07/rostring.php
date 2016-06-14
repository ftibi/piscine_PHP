#!/usr/bin/php
<?php

function ft_split($str)
{
	$tab = explode(" ", $str);
	$tab = array_diff($tab, [""]);
	$tab = array_values($tab);
	return $tab;
}

if ($argv[1])
{
	$str = ft_split($argv[1]);
	$save[0] = $str[0];
	unset($str[0]);
	$str = array_values($str);
	$str = array_merge($str, $save);
	$str = implode(" ", $str);
	echo "$str\n";
}
?>
