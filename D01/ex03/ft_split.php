#!/usr/bin/php

<?php


function ft_split($str)
{
	$tab = explode(" ", $str);
	$tab = array_diff($tab, [""]);
	$tab = array_values($tab);
	return $tab;
}

$tab = ft_split($argv[1]);
print_r($tab);


?>
